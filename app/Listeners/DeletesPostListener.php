<?php

namespace App\Listeners;


use App\Mail\PostsMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class DeletesPostListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $message = 'post deleted';
        Mail::to($event->postDelete->posted_by)->send(new PostsMail($event->postDelete,$message));
    }
}