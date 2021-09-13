<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function show(Location $location)
    {
        dd($location);
    }

    public function index()
    {
        return view('location.index', [
            'locations' => Location::all()
        ]);
    }
}
