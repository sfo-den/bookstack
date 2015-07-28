<?php namespace Oxbow\Repos;


use Illuminate\Support\Str;
use Oxbow\Page;

class PageRepo
{
    protected $page;

    /**
     * PageRepo constructor.
     * @param $page
     */
    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function getById($id)
    {
        return $this->page->findOrFail($id);
    }

    public function getAll()
    {
        return $this->page->all();
    }

    public function getBySlug($slug, $bookId)
    {
        return $this->page->where('slug', '=', $slug)->where('book_id', '=', $bookId)->first();
    }

    public function newFromInput($input)
    {
        $page = $this->page->fill($input);
        return $page;
    }

    public function countBySlug($slug, $bookId)
    {
        return $this->page->where('slug', '=', $slug)->where('book_id', '=', $bookId)->count();
    }

    public function destroyById($id)
    {
        $page = $this->getById($id);
        $page->delete();
    }

    public function getBySearch($term)
    {
        $terms = explode(' ', trim($term));
        $query = $this->page;
        foreach($terms as $term) {
            $query = $query->where('text', 'like', '%'.$term.'%');
        }
        return $query->get();
    }

    public function getBreadCrumbs($page)
    {
        $tree = [];
        $cPage = $page;
        while($cPage->parent && $cPage->parent->id !== 0) {
            $cPage = $cPage->parent;
            $tree[] = $cPage;
        }
        return count($tree) > 0 ? array_reverse($tree) : false;
    }

    /**
     * Gets the pages at the top of the page hierarchy.
     * @param $bookId
     */
    private function getTopLevelPages($bookId)
    {
        return $this->page->where('book_id', '=', $bookId)->where('chapter_id', '=', 0)->orderBy('priority')->get();
    }

    /**
     * Applies a sort map to all applicable pages.
     * @param $sortMap
     * @param $bookId
     */
    public function applySortMap($sortMap, $bookId)
    {
        foreach($sortMap as $index => $map) {
            $page = $this->getById($map->id);
            if($page->book_id === $bookId) {
                $page->page_id = $map->parent;
                $page->priority = $index;
                $page->save();
            }
        }
    }

}