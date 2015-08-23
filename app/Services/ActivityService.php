<?php namespace Oxbow\Services;

use Illuminate\Support\Facades\Auth;
use Oxbow\Activity;
use Oxbow\Entity;

class ActivityService
{
    protected $activity;
    protected $user;

    /**
     * ActivityService constructor.
     * @param $activity
     */
    public function __construct(Activity $activity)
    {
        $this->activity = $activity;
        $this->user = Auth::user();
    }

    /**
     * Add activity data to database.
     * @param Entity $entity
     * @param $activityKey
     * @param int $bookId
     * @param bool $extra
     */
    public function add(Entity $entity, $activityKey, $bookId = 0, $extra = false)
    {
        $this->activity->user_id = $this->user->id;
        $this->activity->book_id = $bookId;
        $this->activity->key = strtolower($activityKey);
        if($extra !== false) {
            $this->activity->extra = $extra;
        }
        $entity->activity()->save($this->activity);
    }

    /**
     * Adds a activity history with a message & without binding to a entitiy.
     * @param $activityKey
     * @param int $bookId
     * @param bool|false $extra
     */
    public function addMessage($activityKey, $bookId = 0, $extra = false)
    {
        $this->activity->user_id = $this->user->id;
        $this->activity->book_id = $bookId;
        $this->activity->key = strtolower($activityKey);
        if($extra !== false) {
            $this->activity->extra = $extra;
        }
        $this->activity->save();
    }

    /**
     * Removes the entity attachment from each of its activities
     * and instead uses the 'extra' field with the entities name.
     * Used when an entity is deleted.
     * @param Entity $entity
     * @return mixed
     */
    public function removeEntity(Entity $entity)
    {
        $activities = $entity->activity;
        foreach($activities as $activity) {
            $activity->extra = $entity->name;
            $activity->entity_id = 0;
            $activity->entity_type = null;
            $activity->save();
        }
        return $activities;
    }

    /**
     * Gets the latest activity.
     * @param int $count
     * @param int $page
     */
    public function latest($count = 20, $page = 0)
    {
        return $this->activity->orderBy('created_at', 'desc')
            ->skip($count*$page)->take($count)->get();
    }

}