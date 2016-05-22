<?php namespace BookStack;


class Chapter extends Entity
{
    protected $fillable = ['name', 'description', 'priority', 'book_id'];

    /**
     * Get the book this chapter is within.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    /**
     * Get the pages that this chapter contains.
     * @return mixed
     */
    public function pages()
    {
        return $this->hasMany(Page::class)->orderBy('priority', 'ASC');
    }

    /**
     * Get the url of this chapter.
     * @return string
     */
    public function getUrl()
    {
        $bookSlug = $this->getAttribute('bookSlug') ? $this->getAttribute('bookSlug') : $this->book->slug;
        return '/books/' . $bookSlug. '/chapter/' . $this->slug;
    }

    /**
     * Get an excerpt of this chapter's description to the specified length or less.
     * @param int $length
     * @return string
     */
    public function getExcerpt($length = 100)
    {
        $description = $this->description;
        return strlen($description) > $length ? substr($description, 0, $length-3) . '...' : $description;
    }

}
