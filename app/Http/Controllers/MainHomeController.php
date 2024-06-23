<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class MainHomeController extends Controller
{
    public function main ()
    {
        //$events = Event::with('speakers', 'sponsers', 'registers', 'members', 'volunteers')->get();
        $events = Event::all();
        $event = $events->first();
        //$speakers = $event->speakers()->get();
        //$sponsers = $event->sponsers()->get();
        //$members = $event->members()->get();
        /*return view('main_home', [
            'event' => $event,
            'speakers' => $speakers,
            'sponsers' => $sponsers,
            'members' => $members,
        ]);*/
        //return view('main_home');
        return view('main_home',['event' => $event]);
    }

    public function about ()
    {
        //$events = Event::with('speakers', 'sponsers', 'registers', 'members', 'volunteers')->get();
        //$event = $events->first();
        //return view('main_aboutus', [
          //  'event' => $event,
        //]);
        $events = Event::all();
        $event = $events->first();
        return view('main_aboutus',['event' => $event]);
        
        //return view('main_aboutus');
    }

    public function sponsers ()
    {
        //$events = Event::with('speakers', 'sponsers', 'registers', 'members', 'volunteers')->get();
        //$event = $events->first();
        //return view('main_sponser', [
          //  'event' => $event, 
        //]);
        
        $events = Event::all();
        $event = $events->first();
        return view('main_sponser',['event' => $event]);
        
        //return view('main_sponser');
    }

    public function faq ()
    {
        //$events = Event::with('speakers', 'sponsers', 'registers', 'members', 'volunteers')->get();
        //$event = $events->first();
        //return view('main_faq', [
          //  'event' => $event, 
        //]);  
        
        $events = Event::all();
        $event = $events->first();
        return view('main_faq',['event' => $event]);
        
        //return view('main_faq');
    }


    public function aboutTed ()
    {
        //$events = Event::with('speakers', 'sponsers', 'registers', 'members', 'volunteers')->get();
        //$event = $events->first();
        //return view('main_about_ted', [
          //  'event' => $event, 
        //]);
        
        $events = Event::all();
        $event = $events->first();
        return view('main_about_ted',['event' => $event]);
        
        //return view('main_about_ted');
    }

    public function register ()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_register', [
            'event' => $event,
        ]);
    }

    public function partner ()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_partner', [
            'event' => $event,
        ]);
    }

    public function volunteer ()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_volunteer', [
            'event' => $event, 
        ]);
    }

    public function other ()
    {
        $events = Event::all();
        $event = $events->first();
        return view('main_other', [
            'event' => $event, 
        ]);
    }
}
