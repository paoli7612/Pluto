<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function store()
    {
        Operation::create(
            request()->validate([
                'value' => ['required'],
                'category_id' => ['required'] 
            ])
        );
        request()->session()->put('category_id', request('category_id'));
        return redirect()->route('home');
    }
}
