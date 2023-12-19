<?php

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
    return Route::post(env('APP_LIVEWIRE_URL') . '/livewire/update', $handle);
});
Livewire::setScriptRoute(function ($handle) {
    return Route::get(env('APP_LIVEWIRE_URL') . '/livewire/livewire.js', $handle);
});


Route::get('/', function () {
    return view('pages.home');
});

Route::get('resume', function () {
    return view('pages.resume');
});

Route::get('projects', function () {
    return view('pages.projects');
});

Route::get('contact', function () {
    return view('pages.contact');
});
