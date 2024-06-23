<?php

namespace App\Notifications;

use App\Models\Register;
use App\Models\Volunteer;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;

class NewVolunteer extends Notification 
{
    //use Queueable;

    protected $volunteer;
    /**
     * Create a new event instance.
     */
    public function __construct(Volunteer $volunteer)
    {
        $this->volunteer = $volunteer;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }


    public function toMail(object $notifiable): MailMessage
    {

        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('New volunteer in the list:')
                    ->line($this->volunteer->full_name)
                    ->line("volunteered at: {$this->volunteer->created_at}")
                    ->line('This is nice, so time to work!');
    }

}
