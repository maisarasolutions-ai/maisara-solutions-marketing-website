<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ContactFormReceived extends Notification
{
    use Queueable;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Contact Form Submission - Maisara Solutions')
            ->greeting('Hello,')
            ->line('You have received a new contact form submission.')
            ->line('Name: '.$this->data['name'] ?? 'N/A')
            ->line('Email: '.$this->data['email'] ?? 'N/A')
            ->line('Company: '.$this->data['company'] ?? 'N/A')
            ->line('Message: '.$this->data['message'] ?? 'N/A')
            ->action('View in Admin', url(route('home', ['locale' => app()->getLocale()])));
    }

    public function toArray(object $notifiable): array
    {
        return $this->data;
    }
}
