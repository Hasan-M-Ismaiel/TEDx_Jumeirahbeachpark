<?php

namespace App\Http\Requests;

use App\Models\Event;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VolunteerCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $events = Event::pluck('id');

        return [
            'full_name'             => ['required', 'string', 'max:100'],
            'email'                 => ['required', 'email', 'max:500'],   
            'phone_number'          => ['required', 'string', 'max:500'],

            'nationality'           => ['required', 'string', 'max:500'],
            'residence_country'     => ['required', 'string', 'max:500'],
            
            'birthday'              => ['required', 'date', 'max:500'],
            'education'            => ['required', 'string', 'max:500'],
            'work'                  => ['required', 'string', 'max:500'],
            'linkedin_account'      => ['required', 'string', 'max:500'],
            'other_account'         => ['required', 'string', 'max:500'],
            
            'question_1'            => ['required', 'string', 'max:1020'],
            'question_2'            => ['required', 'string', 'max:1020'],
            'question_3'            => ['required', 'string', 'max:1020'],
            'selected_skills'       => ['required'],
            // 'question_5'            => ['required', 'string', 'max:1020'],
            'question_6'            => ['required', 'string', 'max:1020'],
            'question_7'            => ['required', 'string', 'max:1020'],
            //'question_8'            => ['required', 'string', 'max:1020'],

            //'event_id' => ['required', Rule::in($events)], 
        ];
    }

    public function messages(): array
    {
        return [
            'question_1.required' => 'you should answer question ~ do you hear about TED before',
            'question_2.required' => 'you should answer question ~ Why do you want to be a volunteer',
            'question_3.required' => 'you should answer question ~ How many hours',
            // selected_skills.required' => 'you should answer question ~ What are your skills',
            // 'question_5.required' => 'you should answer question ~ other skills',
            'question_6.required' => 'you should answer question ~ Describe yourself',
            'question_7.required' => 'you should answer question ~ please mention your favourit TED or TEDx talk',
            // 'question_8.required' => 'you should answer question ~ why do you want to be a speaker',
        ];
    }
}
