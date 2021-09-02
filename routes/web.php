<?php

use App\Http\Controllers\OperationController;
use App\Models\Operation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'operations' => Operation::all()
    ]);
})->name('home');

Route::post('/', [OperationController::class, 'store'])->name('operation.post');

Auth::routes();

