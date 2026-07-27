<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewsletterConfirmation extends Notification
{
    use Queueable;

    public function __construct(public string $token)
    {
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Confirm Your Newsletter Subscription - Maisara Solutions')
            ->greeting('Hello,')
            ->line('Please confirm your newsletter subscription by clicking the button below.')
            ->action('Confirm Subscription', url(route('home', ['locale' => app()->getLocale()]).'?newsletter_confirm='.$this->token))
            ->line('If you did not subscribe, please ignore this email.');
    }

    public function toArray(object $notifiable): array
    {
        return ['token' => $this->token];
    }
}
