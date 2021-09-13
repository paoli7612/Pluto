<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('event.index', [
            'events' => Event::all()
        ]);
    }

    public function store()
    {
        $att = request()->validate([
            'name' => ['required', 'string'],
            'user_id' => ['exists:users,id']
        ]);

        dd($att);
    }
}
