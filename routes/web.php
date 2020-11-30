<?php

use App\Http\Controllers\Auth\ActivationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Event;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function (){
    return redirect()->route('event.index');
});
Route::get('activate',[ActivationController::class,'activate'])->name('activate');

Route::resource('event', EventController::class);

Route::resource('gallery', GalleryController::class);

Route::resource('user', UserController::class);
