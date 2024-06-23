<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name', 
        'email', 
        'phone_number', 
        'nationality', 
        'residence_country',
        'birthday', 
        'work', 
        'linkedin_account', 
        'other_account', 
        'question_1', 
        
        'question_2', 
        'question_3', 
        'question_4', 
        'question_5', 
        'question_6', 
        'question_7', 
        'question_8', 
        'question_9', 
        'question_10', 
        'question_11', 
    ];

    public function events ()
    {
        return $this->belongsToMany(Event::class);
    }

    public function checkifAssignedToEvent(Event $event)
    {
        $numeberOfAssignedEvents = $this->events()
                    ->where('events.id', $event->id)
                    ->count();
        return $numeberOfAssignedEvents > 0 ? true : false; 
    }
}
