<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendAssessmentResults implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $email;
    public array $results;

    public function __construct(string $email, array $results)
    {
        $this->email = $email;
        $this->results = $results;
    }

    public function handle(): void
    {
        \Illuminate\Support\Facades\Mail::to($this->email)->send(
            new \App\Notifications\AssessmentResultsNotification($this->results)
        );
    }
}
