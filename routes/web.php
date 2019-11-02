<?php

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/foi', function () {
    return view('foi');
})->name('foi');


Route::get('/selection', function () {
    return view('selection');
})->name('selection');

Route::get('/solidarity', function () {
    return view('solidarity');
})->name('solidarity');

Route::get('/don', function () {
    return view('don');
})->name('don');

Route::get('/subscribeToceremonie', function () {
    return view('form.inscriptionCC');
})->name('ceremoniSubscribe');

Route::get('/createCommity', function () {
    return view('form.creationCS');
})->name('createCommity');