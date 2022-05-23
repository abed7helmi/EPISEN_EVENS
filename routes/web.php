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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/acceuil', 'AcceuilController@index')->middleware('auth')->name('acceuil');
Route::get('/Nouveauevenement', 'NouveauevenementController@index')->middleware('auth')->name('Nouveauevenement');
Route::get('/Mesevenements', 'MesevenementsController@index')->middleware('auth')->name('Mesevenements');
Route::get('/MesParticipations', 'MesParticipationsController@index')->middleware('auth')->name('MesParticipations');
Route::get('/MonCompte', 'UserController@index')->middleware('auth')->name('MonCompte');
Route::post('/updatecompte', 'UserController@updatecompte')->middleware('auth')->name('updatecompte');





Route::get('/MesParticipants/{id}','EvenementController@MesParticipants')->middleware('auth')->name('MesParticipants');
//Evenement
Route::post ('/evenements','NouveauevenementController@Post');
Route::get('/detailevenement/{id}','EvenementController@detaileven')->middleware('auth')->name('clm.detaileven');
Route::get('/deleteevenement/{id}','EvenementController@deleteeven')->middleware('auth')->name('clm.deleteeven');

Route::get('/participevenement/{id}','EvenementController@participereven')->middleware('auth')->name('participer');
Route::get('/annulepart/{id}','MesParticipationsController@annulerpart')->middleware('auth')->name('annulerpart');

Route::get('home', function () {
    return view('welcome');
})->middleware('auth')->name('home');


Route::post('register"', function () {
    return view('/register"');
});

Route::get('auto-complete-address', [AutoAddressController::class, 'googleAutoAddress']);


//test
Route::get('/testmail','NouveauevenementController@mail');




