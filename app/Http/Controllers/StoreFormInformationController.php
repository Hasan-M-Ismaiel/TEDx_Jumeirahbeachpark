<?php

namespace App\Http\Controllers;

use App\Http\Requests\OtherCreateRequest;
use App\Http\Requests\PartnerCreateRequest;
use App\Http\Requests\RegisterCreateRequest;
use App\Http\Requests\VolunteerCreateRequest;
use App\Models\Other;
use App\Models\Partner;
use App\Models\Register;
use App\Models\User;
use App\Models\Volunteer;
use App\Notifications\NewOther;
use App\Notifications\NewPartner;
use App\Notifications\NewRegister;
use App\Notifications\NewVolunteer;
use RealRashid\SweetAlert\Facades\Alert;


class StoreFormInformationController extends Controller
{

    public function storeRegister (RegisterCreateRequest $request)
    {
        $register = Register::create($request->validated());
        
        if($request->question_10){
            $register->question_10 = $request->question_10;
            $register->save();
        }
        
        Alert::success('Success', 'Your request has been taken, Thank you!');
        
        $users = User::all();
        $user = $users->first();
        $user->notify(new NewRegister($register));
        
        return redirect()->back();

    }

    
    public function storeVolunteer (VolunteerCreateRequest $request)
    {
        $my_string=implode(",",$request->selected_skills);
        if($request->question_5){
            $my_string .= ", ".$request->question_5;
        }
        $volunteer = Volunteer::create([
            'full_name'         => $request->full_name,           
            'email'             => $request->email,
            'phone_number'      => $request->phone_number,

            'nationality'       => $request->nationality,
            'residence_country' => $request->residence_country,
            
            'birthday'          => $request->birthday,
            'education'          => $request->education,
            'work'              => $request->work,
            'linkedin_account'  => $request->linkedin_account,
            'other_account'     => $request->other_account,
            
            'question_1'        => $request->question_1,
            'question_2'        => $request->question_2,
            'question_3'        => $request->question_3,
            'selected_skills'   => $my_string,
            // 'question_5' 
            'question_6'        => $request->question_6,
            'question_7'        => $request->question_7,
            'question_8'        => $request->question_8,
        ]);

        Alert::success('Success', 'Your request has been taken, Thank you!');

        $users = User::all();
        $user = $users->first();
        $user->notify(new NewVolunteer($volunteer));

        return redirect()->back();
    }

    public function storePartner (PartnerCreateRequest $request)
    {

        $my_string=implode(",",$request->services);
        if($request->question_6){
            $my_string .= ", ".$request->question_6;
        }
        $partner = Partner::create([
            'full_name'         => $request->full_name,           
            'email'             => $request->email,
            'phone_number'      => $request->phone_number,

            'nationality'       => $request->nationality,
            'residence_country' => $request->residence_country,
            
            'birthday'          => $request->birthday,
            'education'          => $request->education,
            'work'              => $request->work,
            'linkedin_account'  => $request->linkedin_account,
            'other_account'     => $request->other_account,
            
            'question_1'        => $request->question_1,

            'question_2'        => $request->question_2,
            'question_3'        => $request->question_3,
            'question_4'        => $request->question_4,
            'services'          => $my_string,
            'question_6'        => $request->question_6,
            'question_7'        => $request->question_7,
            'question_8'        => $request->question_8,
            'question_9'        => $request->question_9,
        ]);

        Alert::success('Success', 'Your request has been taken, Thank you!');

        $users = User::all();
        $user = $users->first();
        $user->notify(new NewPartner($partner));

        return redirect()->back();
    }

    public function storeOther (OtherCreateRequest $request)
    {
        $other = Other::create($request->validated());
        if($request->question_4){
            $other->question_4 = $request->question_4;
            $other->save();
        }
        
        Alert::success('Success', 'Your request has been taken, Thank you!');

        $users = User::all();
        $user = $users->first();
        $user->notify(new NewOther($other));

        return redirect()->back();
    }
}
