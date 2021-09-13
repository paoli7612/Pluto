<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        if (Auth::check()) {
            return view('home');
        } else {
            return redirect()->route('login');
        }
    }
    
    public function account()
    {
        return view('account', [
            'user' => auth()->user()
        ]);
    }
}
