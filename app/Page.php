<?php

namespace BookStack;

use Illuminate\Database\Eloquent\Model;

class Page extends Entity
{
    protected $fillable = ['name', 'html', 'priority'];

    protected $simpleAttributes = ['name', 'id', 'slug'];

    public function toSimpleArray()
    {
        $array = array_intersect_key($this->toArray(), array_flip($this->simpleAttributes));
        $array['url'] = $this->getUrl();
        return $array;
    }

    public function book()
    {
        return $this->belongsTo('BookStack\Book');
    }

    public function chapter()
    {
        return $this->belongsTo('BookStack\Chapter');
    }

    public function hasChapter()
    {
        return $this->chapter()->count() > 0;
    }

    public function revisions()
    {
        return $this->hasMany('BookStack\PageRevision')->where('type', '=', 'version')->orderBy('created_at', 'desc');
    }

    public function getUrl()
    {
        $bookSlug = $this->getAttribute('bookSlug') ? $this->getAttribute('bookSlug') : $this->book->slug;
        $midText = $this->draft ? '/draft/' : '/page/';
        $idComponent = $this->draft ? $this->id : $this->slug;
        return '/books/' . $bookSlug . $midText . $idComponent;
    }

    public function getExcerpt($length = 100)
    {
        $text = strlen($this->text) > $length ? substr($this->text, 0, $length-3) . '...' : $this->text;
        return mb_convert_encoding($text, 'UTF-8');
    }

}
