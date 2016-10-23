<?php namespace BookStack\Http\Controllers;

use BookStack\Exceptions\FileUploadException;
use BookStack\File;
use BookStack\Repos\PageRepo;
use BookStack\Services\FileService;
use Illuminate\Http\Request;

use BookStack\Http\Requests;

class FileController extends Controller
{
    protected $fileService;
    protected $file;
    protected $pageRepo;

    /**
     * FileController constructor.
     * @param FileService $fileService
     * @param File $file
     * @param PageRepo $pageRepo
     */
    public function __construct(FileService $fileService, File $file, PageRepo $pageRepo)
    {
        $this->fileService = $fileService;
        $this->file = $file;
        $this->pageRepo = $pageRepo;
    }


    /**
     * Endpoint at which files are uploaded to.
     * @param Request $request
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'uploaded_to' => 'required|integer|exists:pages,id',
            'file' => 'required|file'
        ]);

        $pageId = $request->get('uploaded_to');
        $page = $this->pageRepo->getById($pageId);

        $this->checkPermission('file-create-all');
        $this->checkOwnablePermission('page-update', $page);

        $uploadedFile = $request->file('file');

        try {
            $file = $this->fileService->saveNewUpload($uploadedFile, $pageId);
        } catch (FileUploadException $e) {
            return response($e->getMessage(), 500);
        }

        return response()->json($file);
    }

    /**
     * Update an uploaded file.
     * @param int $fileId
     * @param Request $request
     * @return mixed
     */
    public function uploadUpdate($fileId, Request $request)
    {
        $this->validate($request, [
            'uploaded_to' => 'required|integer|exists:pages,id',
            'file' => 'required|file'
        ]);

        $pageId = $request->get('uploaded_to');
        $page = $this->pageRepo->getById($pageId);
        $file = $this->file->findOrFail($fileId);

        $this->checkOwnablePermission('page-update', $page);
        $this->checkOwnablePermission('file-create', $file);
        
        if (intval($pageId) !== intval($file->uploaded_to)) {
            return $this->jsonError('Page mismatch during attached file update');
        }

        $uploadedFile = $request->file('file');

        try {
            $file = $this->fileService->saveUpdatedUpload($uploadedFile, $file);
        } catch (FileUploadException $e) {
            return response($e->getMessage(), 500);
        }

        return response()->json($file);
    }

    /**
     * Update the details of an existing file.
     * @param $fileId
     * @param Request $request
     * @return File|mixed
     */
    public function update($fileId, Request $request)
    {
        $this->validate($request, [
            'uploaded_to' => 'required|integer|exists:pages,id',
            'name' => 'required|string|min:1|max:255',
            'link' =>  'url|min:1|max:255'
        ]);

        $pageId = $request->get('uploaded_to');
        $page = $this->pageRepo->getById($pageId);
        $file = $this->file->findOrFail($fileId);

        $this->checkOwnablePermission('page-update', $page);
        $this->checkOwnablePermission('file-create', $file);

        if (intval($pageId) !== intval($file->uploaded_to)) {
            return $this->jsonError('Page mismatch during attachment update');
        }

        $file = $this->fileService->updateFile($file, $request->all());
        return $file;
    }

    /**
     * Attach a link to a page as a file.
     * @param Request $request
     * @return mixed
     */
    public function attachLink(Request $request)
    {
        $this->validate($request, [
            'uploaded_to' => 'required|integer|exists:pages,id',
            'name' => 'required|string|min:1|max:255',
            'link' =>  'required|url|min:1|max:255'
        ]);

        $pageId = $request->get('uploaded_to');
        $page = $this->pageRepo->getById($pageId);

        $this->checkPermission('file-create-all');
        $this->checkOwnablePermission('page-update', $page);

        $fileName = $request->get('name');
        $link = $request->get('link');
        $file = $this->fileService->saveNewFromLink($fileName, $link, $pageId);

        return response()->json($file);
    }

    /**
     * Get the files for a specific page.
     * @param $pageId
     * @return mixed
     */
    public function listForPage($pageId)
    {
        $page = $this->pageRepo->getById($pageId);
        $this->checkOwnablePermission('page-view', $page);
        return response()->json($page->files);
    }

    /**
     * Update the file sorting.
     * @param $pageId
     * @param Request $request
     * @return mixed
     */
    public function sortForPage($pageId, Request $request)
    {
        $this->validate($request, [
            'files' => 'required|array',
            'files.*.id' => 'required|integer',
        ]);
        $page = $this->pageRepo->getById($pageId);
        $this->checkOwnablePermission('page-update', $page);

        $files = $request->get('files');
        $this->fileService->updateFileOrderWithinPage($files, $pageId);
        return response()->json(['message' => 'Attachment order updated']);
    }

    /**
     * Get a file from storage.
     * @param $fileId
     */
    public function get($fileId)
    {
        $file = $this->file->findOrFail($fileId);
        $page = $this->pageRepo->getById($file->uploaded_to);
        $this->checkOwnablePermission('page-view', $page);

        if ($file->external) {
            return redirect($file->path);
        }

        $fileContents = $this->fileService->getFile($file);
        return response($fileContents, 200, [
            'Content-Type' => 'application/octet-stream',
            'Content-Disposition' => 'attachment; filename="'. $file->getFileName() .'"'
        ]);
    }

    /**
     * Delete a specific file in the system.
     * @param $fileId
     * @return mixed
     */
    public function delete($fileId)
    {
        $file = $this->file->findOrFail($fileId);
        $this->checkOwnablePermission('file-delete', $file);
        $this->fileService->deleteFile($file);
        return response()->json(['message' => 'Attachment deleted']);
    }
}
