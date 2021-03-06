<?php

use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/icons', [HomeController::class, 'icons'])->name('icons');
Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
Route::get('/account', [HomeController::class, 'account'])->name('account');
Route::get('/lists', [HomeController::class, 'lists'])->name('lists');
Route::get('/typography', [HomeController::class, 'typography'])->name('typography');
Route::get('/typography', [HomeController::class, 'typography'])->name('typography');

Route::get('/settings', [HomeController::class, 'settings'])->name('settings');
Route::put('/settings', [HomeController::class, 'edit'])->name('settings');

Auth::routes();

