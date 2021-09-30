<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('welcome');
    }

    public function icons()
    {
        return view('icons');
    }

    public function notifications()
    {
        return view('notifications');
    }

    public function account()
    {
        return view('account', [
            'user' => Auth::user()
        ]);
    }

    public function lists()
    {
        return view('lists');
    }

    public function typography()
    {
        return view('typography');
    }

    public function settings()
    {
        return view('settings');
    }
}
