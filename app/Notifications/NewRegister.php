<?php

namespace App\Notifications;

use App\Models\Register;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;

class NewRegister extends Notification 
{
    // use Queueable;

    protected $register;
    /**
     * Create a new event instance.
     */
    public function __construct(Register $register)
    {
        $this->register = $register;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }


    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('New register in the list:')
                    ->line($this->register->full_name)
                    ->line("registered at: {$this->register->created_at}")
                    ->line('This is nice, so time to work!');
    }

}
