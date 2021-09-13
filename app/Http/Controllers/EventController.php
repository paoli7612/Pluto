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
        Event::create(request()->validate([
            'name' => ['required', 'string'],
            'user_id' => ['required', 'exists:users,id'],
            'date' => ['date'],
            'arrival' => ['string']
        ]));

        return redirect()->back();
    }
}
