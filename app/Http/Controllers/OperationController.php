<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function store()
    {
        Operation::create(
            request()->validate([
                'value' => ['required', 'min:0'],
                'category_id' => ['required'] 
            ])
        );
            return redirect()->route('home');
    }
}
