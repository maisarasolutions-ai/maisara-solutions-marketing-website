<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class PartnerApplicationReceived extends Notification
{
    use Queueable;

    public function __construct(public array $data)
    {
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Partner Application - Maisara Solutions')
            ->greeting('Hello,')
            ->line('You have received a new partner application.')
            ->line('Name: '.($this->data['name'] ?? 'N/A'))
            ->line('Company: '.($this->data['company'] ?? 'N/A'))
            ->line('Email: '.($this->data['email'] ?? 'N/A'))
            ->action('View Application', url(route('partners.index', ['locale' => app()->getLocale()])));
    }

    public function toArray(object $notifiable): array
    {
        return $this->data;
    }
}
