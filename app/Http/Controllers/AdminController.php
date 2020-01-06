<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()    {
        $user = Auth::user();
        return view('backend.dashboard', ['user' => $user]);
    }

    public function allevent(){
        $user = Auth::user();
        $events = Event::all();
        return view('backend.all_events', ['user' => $user, 'events' => $events]);
    }
}
