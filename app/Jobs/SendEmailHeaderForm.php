<?php

namespace App\Jobs;

use App\Mail\MailToAdminHeaderForm;
use App\Mail\MailToClientHeaderForm;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailHeaderForm implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $userData;

    public function __construct($userData)
    {
        $this->userData = $userData;

        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        Mail::to('hussnain.shayansolutions@gmail.com')->send(new MailToAdminHeaderForm($this->userData));
        Mail::to($this->userData['email'])->send(new MailToClientHeaderForm());
    }
}
