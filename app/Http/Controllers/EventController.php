<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('events.index', ['event' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);


        $event = new Event();
        $event->title = $request -> title;
        $event->venue = $request -> venue;
        $event->image = $imageName;
        $event->s_time = str_replace('T', ' ', $request -> s_time);
        $event->e_time = str_replace('T', ' ', $request -> e_time);
        $event->comment = $request -> comment;
        $event->category = $request -> category;
        $event->save();
        return redirect('/');
    }

}
