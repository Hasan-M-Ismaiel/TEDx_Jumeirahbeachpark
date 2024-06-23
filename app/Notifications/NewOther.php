<?php

namespace App\Notifications;

use App\Models\Other;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOther extends Notification
{
    
    // use Queueable;

    protected $other;
    /**
     * Create a new event instance.
     */
    public function __construct(Other $other)
    {
        $this->other = $other;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }


    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('New other role in the list:')
                    ->line($this->other->full_name)
                    ->line("created at: {$this->other->created_at}")
                    ->line('This is nice, so time to work!');
    }

}
