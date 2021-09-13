<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/locations', [LocationController::class, 'index'])->name('locations');
Route::get('/account', [HomeController::class, 'account'])->name('account');

Route::post('/events', [EventController::class, 'store'])->name('events.new');

Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/users/{user}/calendar', [UserController::class, 'calendar'])->name('user.calendar');

Route::get('/locations/{location}', [LocationController::class, 'show'])->name('location.show');


Auth::routes();
