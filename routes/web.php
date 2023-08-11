<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\VueController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return inertia::render('home');
    
    // echo 'hello';//return view('welcome');
});

// Route::get('/test', function () {
//     echo 'hi';
// });

// Route::get('/home', function () {
//     return inertia::render('home');
// });

Route::controller(VueController::class)->group(function () {

    Route::get('/home', 'show')->name('home');
    Route::any('/store', 'store')->name('store');
    Route::get('/users', 'users')->name('users');

});
