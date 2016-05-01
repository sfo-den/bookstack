<?php namespace BookStack;


class PageRevision extends Model
{
    protected $fillable = ['name', 'html', 'text', 'markdown'];

    /**
     * Get the user that created the page revision
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the page this revision originates from.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    /**
     * Get the url for this revision.
     * @return string
     */
    public function getUrl()
    {
        return $this->page->getUrl() . '/revisions/' . $this->id;
    }

}
