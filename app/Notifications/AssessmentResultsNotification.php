<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AssessmentResultsNotification extends Notification
{
    use Queueable;

    public function __construct(public array $results)
    {
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Your Assessment Results - Maisara Solutions')
            ->greeting('Hello,')
            ->line('Your assessment has been completed. Here are your results:')
            ->line('Score: '.($this->results['score'] ?? 'N/A'))
            ->line('Recommendation: '.($this->results['recommendation'] ?? 'N/A'))
            ->action('View Full Report', url(route('assessment.index', ['locale' => app()->getLocale()])));
    }

    public function toArray(object $notifiable): array
    {
        return $this->results;
    }
}
