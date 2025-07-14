<?php

namespace App\Listeners;

use App\Events\PostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Subscriber;
use App\Mail\SubscriberMail;

class NotifyUser
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
    public function handle(PostCreated $event): void
    {
        $subscriber = Subscriber::get();
        foreach($subscriber as $subs) {
            \Mail::to($subs->email)->send(new SubscriberMail($event->subject, $event->message));
        }
    }
}
