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

use App\forumTopic;
use App\model\paiement;
use App\News;
use App\Souscriptions;
use Illuminate\Support\Facades\Route;
Route::get('/layout', function (){
    return view('admin.include.layout_admin');
});
Route::get('/', function () {
    return view('accueil');
})->name('home');

Route::get('/home', function () {
    return view('accueil');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/forum', 'Forum\TopicController@index')->middleware('auth');
Route::get('/contact', function(){
   return view('contact');
});
Route::post('/contact', 'inscriptionController@send')-> name('send');
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


Route::get('/subscribeTocomity', 'indexController@index')->name('comitySubscribe');

Route::get('/createCommity', function () {
    return view('form.creationCS');
})->name('createCommity');

Route::get('/funds', function () {
    return view('funds');
})->name('soutienFinancier');

Route::get('/funds2', function () {
    return view('funds2');
})->name('soutienFinancier2');
Route::get('/soutien', function () {
    return view('soutient');
})->name('soutien');
Route::get('/participer', function () {
    return view('more4');
})->name('participer');
Route::get('/contribution', function () {
    $paiements = paiement::all();
    return view('admin.contribution', compact('paiements'));
})->name('contribution');
Route::get('/souscription', function () {
    $souscription = Souscriptions::all();
    return view('admin.Souscription', compact('souscription'));
})->name('souscription');

/*Route::get('/newcomite', function(){
    return view('form.createcomite');
})->name('createComite')->middleware('auth');
Route::post('/newcomite', 'inscriptionController@create')->name('createComite');
/************Route Traitements formulaires*****************/

Route::post('inscription', 'inscriptionController@inscription')->name('inscriptionConsecration');

Route::post('inscriptionCS', 'inscriptionController@inscriptionComite')->name('inscriptionComite');

Route::post('creationCS', 'inscriptionController@creationCS')->name('creationComite');

Route::post('id', 'inscriptionController@id')->name('addId');

Route::post('VerifyPay', 'inscriptionController@verifyPayment')->name('verifyPayment');
Route::post('/soutien', 'inscriptionController@Souscription')->name('hello');
Route::get('/connexion', function () {
    return view('admin.login');
})->name('connexion');


/****************** Login routes ************************************/

Route::get('/addSousciription', function () {
    return view('gestion_participants.add');
})->name('addSouscription');


/****************************Admin routes *******************/


 Route::get('dashboard', 'AdminController@index')->name('dashboard')->middleware('auth');

 Route::get('participants', 'AdminController@getParticipants')->name('participants')->middleware('auth');

 Route::get('comite soutien', 'AdminController@comiteSoutien')->name('comiteSoutien')->middleware('auth');

 Route::get('paiement', 'AdminController@payment')->name('payment')->middleware('auth');


/*************************  Auth Routes ********************************************/


Route::post('login', 'authController@Login')->name('login');

Route::get('logout', 'authController@logout')->name('logout');

/* Route du forum */
Route::resource('forum/categories','Forum\CategoryController')->middleware('ComiteMiddleware');
Route::resource('forum/topics','Forum\TopicController')->middleware('ComiteMiddleware');
Route::resource('forum/messages','Forum\MessageController')->middleware('ComiteMiddleware');
/*Route::resource('forum/faq.index','Forum\MessageController'); */

/*route pour fermer un message du forum*/
Route::get('/forum/closetopic/{id}',function ($id){
    $topic = forumTopic::where('id',$id)->first();
    $topic->update([
        'close'=>1
    ]);
    return back()->with('success'.'sujet fermer');
})->name('close_topic');
Route::get('/forum/opentopic/{id}',function ($id){
    $topic = forumTopic::where('id',$id)->first();
    $topic->update([
        'close'=>0
    ]);
    return back()->with('success'.'sujet fermer');
})->name('open_topic');




/************************** Others  ******************************************* */

Route::get('/more-a-retenir', function () {
    return view('more1');
})->name('more-a-retenir');

Route::get('/more-a-retenir2', function () {
    return view('more2');
})->name('more-a-retenir2');

Route::get('/more-a-retenir3', function () {
  return view('more3');
 })->name('more-a-retenir3');


/*** ROUTES GESTION PARTICIPANTS */

Route::get('/listeparticipants','showParticipantsController@show')->name('liste');
Route::post('/chef_inscription_participant','showParticipantsController@addparticipant')->name('add');
Route::get('/chef_inscription_participant','chef_comitInscriptionparticipantController@affichage')->name('inscript');
Route::get('/inscription','chef_comitInscriptionparticipantController@afficheforminscription')
->name('addparticipant');
Route::get('makePay', 'inscriptionController@makePayment')->name('makePayment');
Route::get('paiements',function(){
    return view('gestion_participants.enregistrer');
})->name('enregistrer');;

/* ROUTE NEWS LETTERS */
Route::get('/newslater',  function (){
    $news = News::latest()->paginate(10);
    return view('news', compact('news'));
})->name('newslater');
Route::resource('news', 'NewsController');

