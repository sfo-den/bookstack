<?php namespace BookStack\Http\Controllers;

use Activity;
use BookStack\Repos\EntityRepo;
use BookStack\Repos\UserRepo;
use Illuminate\Http\Request;
use BookStack\Http\Requests;
use BookStack\Repos\BookRepo;
use BookStack\Repos\ChapterRepo;
use BookStack\Repos\PageRepo;
use Illuminate\Http\Response;
use Views;

class BookController extends Controller
{

    protected $entityRepo;
    protected $bookRepo;
    protected $pageRepo;
    protected $chapterRepo;
    protected $userRepo;

    /**
     * BookController constructor.
     * @param BookRepo $bookRepo
     * @param PageRepo $pageRepo
     * @param ChapterRepo $chapterRepo
     * @param UserRepo $userRepo
     */
    public function __construct(EntityRepo $entityRepo, BookRepo $bookRepo, PageRepo $pageRepo, ChapterRepo $chapterRepo, UserRepo $userRepo)
    {
        $this->entityRepo = $entityRepo;
        // TODO - Remove below
        $this->bookRepo = $bookRepo;
        $this->pageRepo = $pageRepo;
        $this->chapterRepo = $chapterRepo;
        $this->userRepo = $userRepo;
        parent::__construct();
    }

    /**
     * Display a listing of the book.
     * @return Response
     */
    public function index()
    {
        $books = $this->entityRepo->getAllPaginated('book', 10);
        $recents = $this->signedIn ? $this->entityRepo->getRecentlyViewed('book', 4, 0) : false;
        $popular = $this->entityRepo->getPopular('book', 4, 0);
        $this->setPageTitle('Books');
        return view('books/index', ['books' => $books, 'recents' => $recents, 'popular' => $popular]);
    }

    /**
     * Show the form for creating a new book.
     * @return Response
     */
    public function create()
    {
        $this->checkPermission('book-create-all');
        $this->setPageTitle(trans('entities.books_create'));
        return view('books/create');
    }

    /**
     * Store a newly created book in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->checkPermission('book-create-all');
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'string|max:1000'
        ]);
        $book = $this->bookRepo->createFromInput($request->all());
        Activity::add($book, 'book_create', $book->id);
        return redirect($book->getUrl());
    }

    /**
     * Display the specified book.
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {
        $book = $this->entityRepo->getBySlug('book', $slug);
        $this->checkOwnablePermission('book-view', $book);
        $bookChildren = $this->bookRepo->getChildren($book);
        Views::add($book);
        $this->setPageTitle($book->getShortName());
        return view('books/show', ['book' => $book, 'current' => $book, 'bookChildren' => $bookChildren]);
    }

    /**
     * Show the form for editing the specified book.
     * @param $slug
     * @return Response
     */
    public function edit($slug)
    {
        $book = $this->entityRepo->getBySlug('book', $slug);
        $this->checkOwnablePermission('book-update', $book);
        $this->setPageTitle(trans('entities.books_edit_named',['bookName'=>$book->getShortName()]));
        return view('books/edit', ['book' => $book, 'current' => $book]);
    }

    /**
     * Update the specified book in storage.
     * @param  Request $request
     * @param          $slug
     * @return Response
     */
    public function update(Request $request, $slug)
    {
        $book = $this->entityRepo->getBySlug('book', $slug);
        $this->checkOwnablePermission('book-update', $book);
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'string|max:1000'
        ]);
        $book = $this->bookRepo->updateFromInput($book, $request->all());
        Activity::add($book, 'book_update', $book->id);
        return redirect($book->getUrl());
    }

    /**
     * Shows the page to confirm deletion
     * @param $bookSlug
     * @return \Illuminate\View\View
     */
    public function showDelete($bookSlug)
    {
        $book = $this->entityRepo->getBySlug('book', $bookSlug);
        $this->checkOwnablePermission('book-delete', $book);
        $this->setPageTitle(trans('entities.books_delete_named', ['bookName'=>$book->getShortName()]));
        return view('books/delete', ['book' => $book, 'current' => $book]);
    }

    /**
     * Shows the view which allows pages to be re-ordered and sorted.
     * @param string $bookSlug
     * @return \Illuminate\View\View
     */
    public function sort($bookSlug)
    {
        $book = $this->entityRepo->getBySlug('book', $bookSlug);
        $this->checkOwnablePermission('book-update', $book);
        $bookChildren = $this->bookRepo->getChildren($book, true);
        $books = $this->entityRepo->getAll('book', false);
        $this->setPageTitle(trans('entities.books_sort_named', ['bookName'=>$book->getShortName()]));
        return view('books/sort', ['book' => $book, 'current' => $book, 'books' => $books, 'bookChildren' => $bookChildren]);
    }

    /**
     * Shows the sort box for a single book.
     * Used via AJAX when loading in extra books to a sort.
     * @param $bookSlug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getSortItem($bookSlug)
    {
        $book = $this->entityRepo->getBySlug('book', $bookSlug);
        $bookChildren = $this->bookRepo->getChildren($book);
        return view('books/sort-box', ['book' => $book, 'bookChildren' => $bookChildren]);
    }

    /**
     * Saves an array of sort mapping to pages and chapters.
     * @param  string $bookSlug
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function saveSort($bookSlug, Request $request)
    {
        $book = $this->entityRepo->getBySlug('book', $bookSlug);
        $this->checkOwnablePermission('book-update', $book);

        // Return if no map sent
        if (!$request->has('sort-tree')) {
            return redirect($book->getUrl());
        }

        // Sort pages and chapters
        $sortedBooks = [];
        $updatedModels = collect();
        $sortMap = json_decode($request->get('sort-tree'));
        $defaultBookId = $book->id;

        // Loop through contents of provided map and update entities accordingly
        foreach ($sortMap as $bookChild) {
            $priority = $bookChild->sort;
            $id = intval($bookChild->id);
            $isPage = $bookChild->type == 'page';
            $bookId = $this->entityRepo->exists('book', $bookChild->book) ? intval($bookChild->book) : $defaultBookId;
            $chapterId = ($isPage && $bookChild->parentChapter === false) ? 0 : intval($bookChild->parentChapter);
            $model = $this->entityRepo->getById($isPage?'page':'chapter', $id);

            // Update models only if there's a change in parent chain or ordering.
            if ($model->priority !== $priority || $model->book_id !== $bookId || ($isPage && $model->chapter_id !== $chapterId)) {
                $isPage ? $this->pageRepo->changeBook($bookId, $model) : $this->chapterRepo->changeBook($bookId, $model);
                $model->priority = $priority;
                if ($isPage) $model->chapter_id = $chapterId;
                $model->save();
                $updatedModels->push($model);
            }

            // Store involved books to be sorted later
            if (!in_array($bookId, $sortedBooks)) {
                $sortedBooks[] = $bookId;
            }
        }

        // Add activity for books
        foreach ($sortedBooks as $bookId) {
            $updatedBook = $this->entityRepo->getById('book', $bookId);
            Activity::add($updatedBook, 'book_sort', $updatedBook->id);
        }

        // Update permissions on changed models
        $this->bookRepo->buildJointPermissions($updatedModels);

        return redirect($book->getUrl());
    }

    /**
     * Remove the specified book from storage.
     * @param $bookSlug
     * @return Response
     */
    public function destroy($bookSlug)
    {
        $book = $this->entityRepo->getBySlug('book', $bookSlug);
        $this->checkOwnablePermission('book-delete', $book);
        Activity::addMessage('book_delete', 0, $book->name);
        Activity::removeEntity($book);
        $this->bookRepo->destroy($book);
        return redirect('/books');
    }

    /**
     * Show the Restrictions view.
     * @param $bookSlug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRestrict($bookSlug)
    {
        $book = $this->entityRepo->getBySlug('book', $bookSlug);
        $this->checkOwnablePermission('restrictions-manage', $book);
        $roles = $this->userRepo->getRestrictableRoles();
        return view('books/restrictions', [
            'book' => $book,
            'roles' => $roles
        ]);
    }

    /**
     * Set the restrictions for this book.
     * @param $bookSlug
     * @param $bookSlug
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restrict($bookSlug, Request $request)
    {
        $book = $this->entityRepo->getBySlug('book', $bookSlug);
        $this->checkOwnablePermission('restrictions-manage', $book);
        $this->bookRepo->updateEntityPermissionsFromRequest($request, $book);
        session()->flash('success', trans('entities.books_permissions_updated'));
        return redirect($book->getUrl());
    }
}
