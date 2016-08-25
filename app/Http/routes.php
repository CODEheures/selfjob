<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MainController@index')->name('home');
Route::get('/mentions', 'MainController@mentions')->name('mentions');
Route::get('/see_pop_candidate', 'MainController@see_pop_candidate')->name('see_pop_candidate');
Route::get('/see_pop_employer', 'MainController@see_pop_employer')->name('see_pop_employer');
Route::get('/mail_main_page/{email}/{type}', 'MainController@mail_main_page')->name('mail_main_page');
Route::get('/mail_pop_up_candidate/{email}', 'MainController@mail_pop_up_candidate')->name('mail_pop_up_candidate');
Route::get('/mail_pop_up_employer/{email}', 'MainController@mail_pop_up_employer')->name('mail_pop_up_employer');

//Route::get('/etapes', 'MainController@etape')->name('etape');