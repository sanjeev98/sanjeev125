<?php

namespace App\Listeners;

use App\Mail\SendUserPostMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendUserCreatePostDataMailListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        $message = 'Post Created';
        Mail::to($event->postCreate->posted_by)->send(new SendUserPostMail($event->postCreate, $message));
    }
}
