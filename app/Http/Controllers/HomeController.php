<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function hahaha(){
    $events = Event::orderby('updated_at', 'desc')
        ->take(6)->get();

    return view('index', ['events' => $events]);
    }

}
