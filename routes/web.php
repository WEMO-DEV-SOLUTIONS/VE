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
    return view('accueil');
})->name('home');

Route::get('/home', function () {
    return view('accueil');
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


Route::get('/solidarity', function () {
    return view('solidarity');
})->name('solidarity');

Route::get('/don', function () {
    return view('don');
})->name('don');

Route::get('/subscribeToceremonie', function () {
    return view('form.inscriptionCC');
})->name('ceremoniSubscribe');


Route::get('subscribeTocomity', 'indexController@index')->name('comitySubscribe');

Route::get('/createCommity', function () {
    return view('form.creationCS');
})->name('createCommity');

Route::get('/funds', function () {
    return view('funds');
})->name('soutienFinancier');


/************Route Traitements formulaires*****************/

Route::post('inscription', 'inscriptionController@inscription')->name('inscriptionConsecration');

Route::post('inscriptionCS', 'inscriptionController@inscriptionComite')->name('inscriptionComite');

Route::post('creationCS', 'inscriptionController@creationCS')->name('creationComite');

Route::post('id', 'inscriptionController@id')->name('addId');

/****************** Login routes ************************************/

Route::get('/connexion', function () {
    return view('admin.login');
})->name('connexion');



/****************************Admin routes *******************/
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->name('dashboard');


// Route::get('/participants', function () {
//     return view('admin.participants');
// })->name('participants');

 Route::get('dashboard', 'AdminController@index')->name('dashboard')->middleware('auth');

 Route::get('participants', 'AdminController@getParticipants')->name('participants');

 Route::get('comite soutien', 'AdminController@comiteSoutien')->name('comiteSoutien');

 Route::get('paiement', 'AdminController@payment')->name('payment');

 

/*************************  Auth Routes ********************************************/


Route::post('login', 'authController@Login')->name('login');

Route::get('logout', 'authController@logout')->name('logout');


