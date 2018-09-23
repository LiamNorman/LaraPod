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

// general routes
Route::get('/home', 'HomeController@index')->name('home');

// podcast routes
Route::get('/podcasts', 'PodcastsController@index')->name('podcasts');
Route::get('/podcasts/{podcastId}/favourite', 'PodcastsController@favourite');
Route::post('/podcasts/addPodcast', 'PodcastsController@addPodcast');
Route::post('/podcasts/store', 'PodcastsController@store');

Route::get('/podcasts/{podcastId}', 'PodcastsController@show');


// auth routes
Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
