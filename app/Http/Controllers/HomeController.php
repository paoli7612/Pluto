<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function areset()
    {
        return view('reset');
    }

    public function reset()
    {
        Operation::all()->each(function ($item) {
            $item->delete();
        });
        return redirect()->route('home');
    }
}
