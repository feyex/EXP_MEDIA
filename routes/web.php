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
    return view('welcome');
});


Route::get('index', 'experiaController@home');
Route::get('/about', 'experiaController@about');
Route::get('insight', 'experiaController@insight');
Route::get('/creative', 'experiaController@creative');
Route::post('/creat', 'experiaController@save');
Route::get('/programs', 'experiaController@program');
Route::post('/ins', 'InsightController@ins');
Route::get('/discovered', 'experiaController@discovered');
//Auth::routes('http://localhost:8000/login');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect', 'FacebookController@redirect');
Route::get('/callback', 'FacebookController@callback');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes('http://localhost:8000/homes');
Route::get('/homes', 'DiscoverController@index')->name('homes');
Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');