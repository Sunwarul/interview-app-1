<?php

namespace App\Listeners;

use App\Events\UserGetPointsEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserGetPointsListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserGetPointsEvent $event): void
    {
        $user = $event->user;
        $user->points = $event->points;
        $user->save();
    }
}
