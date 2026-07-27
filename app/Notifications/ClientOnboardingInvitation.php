<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ClientOnboardingInvitation extends Notification
{
    use Queueable;

    public function __construct(public string $token, public string $clientName)
    {
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Welcome to Maisara Solutions - Client Onboarding')
            ->greeting('Dear '.$this->clientName.',')
            ->line('Welcome to Maisara Solutions!')
            ->line('Please complete your onboarding using the button below.')
            ->action('Start Onboarding', url(route('client.onboarding.index', ['locale' => app()->getLocale()])))
            ->line('If you did not request this, please ignore this email.');
    }

    public function toArray(object $notifiable): array
    {
        return ['token' => $this->token];
    }
}
