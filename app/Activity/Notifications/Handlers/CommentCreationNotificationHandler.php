<?php

namespace BookStack\Activity\Notifications\Handlers;

use BookStack\Activity\Models\Loggable;
use BookStack\Users\Models\User;

class CommentCreationNotificationHandler implements NotificationHandler
{
    public function handle(string $activityType, Loggable|string $detail, User $user): void
    {
        // TODO
    }
}
