<?php namespace Oxbow;


class Chapter extends Entity
{

    protected $fillable = ['name', 'description', 'priority', 'book_id'];

    public function book()
    {
        return $this->belongsTo('Oxbow\Book');
    }

    public function pages()
    {
        return $this->hasMany('Oxbow\Page')->orderBy('priority', 'ASC');
    }

    public function getUrl()
    {
        return '/books/' . $this->book->slug . '/chapter/' . $this->slug;
    }

    public function getExcerpt($length = 100)
    {
        return strlen($this->description) > $length ? substr($this->description, 0, $length-3) . '...' : $this->description;
    }

}
