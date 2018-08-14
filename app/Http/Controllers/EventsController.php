<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class EventsController extends Controller
{
    public function index(){

        $events = Event::all();
        return view('/events/index', compact('events'));
    }

    public function show($id){

        $event = Event::find($id)->first();
        return view('/events/single', compact('event'));
    }

}
