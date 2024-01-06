<?php

use App\Livewire\HomePage;
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

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('public/livewire/update', $handle);
});
Livewire::setScriptRoute(function ($handle) {
    return Route::get('public/livewire/livewire.js', $handle);
});

Route::get('/', HomePage::class);




// Route::get('resume', function () {
//     return view('pages.resume');
// });

// Route::get('projects', function () {
//     return view('pages.projects');
// });

// Route::get('contact', function () {
//     return view('pages.contact');
// });
