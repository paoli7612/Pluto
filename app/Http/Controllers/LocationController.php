<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        return view('location.index', [
            'locations' => Location::all()
        ]);
    }

    public function show(Location $location)
    {
        return view('location.show', [
            'location' => $location
        ]);
    }
}
