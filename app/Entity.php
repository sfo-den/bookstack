<?php

namespace Oxbow;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    /**
     * Relation for the user that created this entity.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo('Oxbow\User', 'created_by');
    }

    /**
     * Relation for the user that updated this entity.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function updatedBy()
    {
        return $this->belongsTo('Oxbow\User', 'updated_by');
    }

    /**
     * Compares this entity to another given entity.
     * Matches by comparing class and id.
     * @param $entity
     * @return bool
     */
    public function matches($entity)
    {
        return [get_class($this), $this->id] === [get_class($entity), $entity->id];
    }

    /**
     * Gets the activity for this entity.
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function activity()
    {
        return $this->morphMany('Oxbow\Activity', 'entity')->orderBy('created_at', 'desc');
    }

    /**
     * Gets only the most recent activity
     * @param int $limit
     * @param int $page
     * @return mixed
     */
    public function recentActivity($limit = 20, $page=0)
    {
        return $this->activity()->skip($limit*$page)->take($limit)->get();
    }

}
