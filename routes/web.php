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

Route::get('/', 'experiaController@home');
Route::get('/about', 'experiaController@about');
Route::get('insight', 'experiaController@insight');
Route::get('/creative', 'experiaController@creative');
Route::post('/creat', 'experiaController@save');
Route::get('/programs', 'experiaController@program');
Route::post('/ins', 'InsightController@ins');
Route::get('/discovered', 'experiaController@discovered');
Route::get('/contact', 'experiaController@contact');

Route::get('become', 'BecomeController@index')->name('become');
Route::post('become/original', 'BecomeController@store')->name('become.store');

Auth::routes('/discover');
Route::get('discover', 'DiscoverController@index')->name('discover');
Route::get('/programs', 'experiaController@program')->name('programs');
Route::post('logout', 'Auth\LoginController@logout');

Route::get('/connected', 'HomeController@index')->name('getconnected');

//for facebook login
Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

//Route for getconnected picture upload
Route::get('/uploads', 'ConnectedCtrl@uploadForm');
Route::post('/uploads', 'ConnectedCtrl@uploadSubmit');

//Route for become professional
Auth::routes('/professional');
Route::get('/professional', 'ProffesionalCtrl@index')->name('professional');
Route::post('/prof', 'ProffesionalCtrl@create');
Route::get('/programs', 'experiaController@program')->name('programs');
Route::get('logout', 'Auth\LoginController@logout');

//Route for professional submission of data
Route::get('/prof_info', 'GetprofCtrl@prof')->name('getprof');
Route::post('/psubmit', 'GetprofCtrl@profs');
