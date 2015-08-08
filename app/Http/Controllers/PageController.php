<?php

namespace Oxbow\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Oxbow\Http\Requests;
use Oxbow\Repos\BookRepo;
use Oxbow\Repos\ChapterRepo;
use Oxbow\Repos\PageRepo;

class PageController extends Controller
{

    protected $pageRepo;
    protected $bookRepo;
    protected $chapterRepo;

    /**
     * PageController constructor.
     * @param PageRepo $pageRepo
     * @param BookRepo $bookRepo
     * @param ChapterRepo $chapterRepo
     */
    public function __construct(PageRepo $pageRepo, BookRepo $bookRepo, ChapterRepo $chapterRepo)
    {
        $this->pageRepo = $pageRepo;
        $this->bookRepo = $bookRepo;
        $this->chapterRepo = $chapterRepo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $bookSlug
     * @param bool $chapterSlug
     * @return Response
     * @internal param bool $pageSlug
     */
    public function create($bookSlug, $chapterSlug = false)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $chapter = $chapterSlug ? $this->chapterRepo->getBySlug($chapterSlug, $book->id) : false;
        return view('pages/create', ['book' => $book, 'chapter' => $chapter]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @param $bookSlug
     * @return Response
     */
    public function store(Request $request, $bookSlug)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'html' => 'required|string',
            'parent' => 'integer|exists:pages,id'
        ]);
        $book = $this->bookRepo->getBySlug($bookSlug);
        $page = $this->pageRepo->newFromInput($request->all());

        $page->slug = $this->pageRepo->findSuitableSlug($page->name, $book->id);
        $page->priority = $this->bookRepo->getNewPriority($book);

        if($request->has('chapter') && $this->chapterRepo->idExists($request->get('chapter'))) {
            $page->chapter_id = $request->get('chapter');
        }

        $page->book_id = $book->id;
        $page->text = strip_tags($page->html);
        $page->created_by = Auth::user()->id;
        $page->updated_by = Auth::user()->id;
        $page->save();
        return redirect($page->getUrl());
    }

    /**
     * Display the specified resource.
     *
     * @param $bookSlug
     * @param $pageSlug
     * @return Response
     */
    public function show($bookSlug, $pageSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $page = $this->pageRepo->getBySlug($pageSlug, $book->id);
        //dd($sidebarBookTree);
        return view('pages/show', ['page' => $page, 'book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $bookSlug
     * @param $pageSlug
     * @return Response
     */
    public function edit($bookSlug, $pageSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $page = $this->pageRepo->getBySlug($pageSlug, $book->id);
        return view('pages/edit', ['page' => $page, 'book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param $bookSlug
     * @param $pageSlug
     * @return Response
     */
    public function update(Request $request, $bookSlug, $pageSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $page = $this->pageRepo->getBySlug($pageSlug, $book->id);
        $page->fill($request->all());
        $page->slug = $this->pageRepo->findSuitableSlug($page->name, $book->id, $page->id);
        $page->text = strip_tags($page->html);
        $page->updated_by = Auth::user()->id;
        $page->save();
        return redirect($page->getUrl());
    }

    /**
     * Redirect from a special link url which
     * uses the page id rather than the name.
     * @param $pageId
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function redirectFromLink($pageId)
    {
        $page = $this->pageRepo->getById($pageId);
        return redirect($page->getUrl());
    }

    /**
     * Search all available pages, Across all books.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function searchAll(Request $request)
    {
        $searchTerm = $request->get('term');
        if(empty($searchTerm)) return redirect()->back();

        $pages = $this->pageRepo->getBySearch($searchTerm);
        return view('pages/search-results', ['pages' => $pages, 'searchTerm' => $searchTerm]);
    }

    /**
     * Shows the view which allows pages to be re-ordered and sorted.
     * @param $bookSlug
     * @return \Illuminate\View\View
     */
    public function sortPages($bookSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        return view('pages/sort', ['book' => $book]);
    }

    /**
     * Saves an array of sort mapping to pages and chapters.
     *
     * @param $bookSlug
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function savePageSort($bookSlug, Request $request)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        // Return if no map sent
        if(!$request->has('sort-tree')) {
            return redirect($book->getUrl());
        }

        // Sort pages and chapters
        $sortMap = json_decode($request->get('sort-tree'));
        foreach($sortMap as $index => $bookChild) {
            $id = $bookChild->id;
            $isPage = $bookChild->type == 'page';
            $model = $isPage ? $this->pageRepo->getById($id) : $this->chapterRepo->getById($id);
            $model->priority = $index;
            if($isPage) {
                $model->chapter_id = ($bookChild->parentChapter === false) ? 0 : $bookChild->parentChapter;
            }
            $model->save();
        }
        return redirect($book->getUrl());
    }

    public function showDelete($bookSlug, $pageSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $page = $this->pageRepo->getBySlug($pageSlug, $book->id);
        return view('pages/delete', ['book' => $book, 'page' => $page]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $bookSlug
     * @param $pageSlug
     * @return Response
     * @internal param int $id
     */
    public function destroy($bookSlug, $pageSlug)
    {
        $book = $this->bookRepo->getBySlug($bookSlug);
        $page = $this->pageRepo->getBySlug($pageSlug, $book->id);
        $page->delete();
        return redirect($book->getUrl());
    }
}
