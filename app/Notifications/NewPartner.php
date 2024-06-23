<?php

namespace App\Notifications;

use App\Models\Partner;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewPartner extends Notification
{
    // use Queueable;

    protected $partner;
    /**
     * Create a new event instance.
     */
    public function __construct(Partner $partner)
    {
        $this->partner = $partner;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }


    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('New partner in the list:')
                    ->line($this->partner->full_name)
                    ->line("partnered at: {$this->partner->created_at}")
                    ->line('This is nice, so time to work!');
    }

}
