<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function typography()
    {
        return view('typography');
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
        return view('account');
    }
}
