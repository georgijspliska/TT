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

Route::get('/', 'RaceController@index');
Route::get('/champs', 'ChampController@index');
Route::get('/tracks', 'TrackController@index');
Route::get('/photos', 'PhotoController@index');
Route::get('/users', 'UserController@index');

Route::get('/race/{id}/delete', 'RaceController@destroy');
Route::get('/champ/{id}/delete', 'ChampController@destroy');
Route::get('/track/{id}/delete', 'TrackController@destroy');
Route::get('/photo/{id}/delete', 'PhotoController@destroy');
Route::get('/race/{id}/edit', 'RaceController@edit');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('lang/{locale}','LanguageController');

Auth::routes();


Route::resource('track', 'TrackController');
Route::resource('champ', 'ChampController');
Route::resource('race', 'RaceController');
Route::resource('photo', 'PhotoController');
Route::resource('users', 'UserController');


Route::post('/users/{id}','UserController@approve');
Route::post('/races','RaceController@postSearch');
Route::post('/race/{id}/edit', 'RaceController@edit');
