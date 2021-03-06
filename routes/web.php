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
    return view('auth.login');
})->middleware('CheckAuth');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']])->middleware('roleAdmin');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    /* Gestion Mission */
    Route::resource('missions', 'MissionController');

    /* Gestion Note */
    Route::resource('notes', 'NoteController');

    Route::get('missions/{mission}/create-note', 'NoteController@create')->name('notes.create');
    Route::post('missions/{mission}/create-note', 'NoteController@store')->name('notes.store');

    Route::get('missions/{mission}/create-fraiskm', 'FraisKmController@create')->name('fraisKms.create');
    Route::post('missions/{mission}/create-fraiskm', 'FraisKmController@store')->name('fraisKms.store');

    Route::get('note/create', 'NoteController@createNote')->name('note.create');
    Route::post('note/create', 'NoteController@storeNote')->name('note.store');

    Route::get('frais-km/create', 'FraisKmController@createFraisKm')->name('fraisKm.create');
    Route::post('frais-km/create', 'FraisKmController@storeFraisKm')->name('fraisKm.store');


    Route::resource('comptable', 'ComptableController')->middleware('roleComptable');
});


