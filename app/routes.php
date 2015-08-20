<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// GET
// HOME
Route::get('/', 'HomeController@showHome');

// ABOUT
Route::get('/about', 'HomeController@showAbout');

// SEARCH
Route::get('/search', 'HomeController@showSearch');

// CONTACT
Route::get('/contact', 'HomeController@showContact');

// RESUME
Route::get('/resume', 'HomeController@showResume');

// PORTFOLIO
Route::get('/portfolio', 'HomeController@showPortfolio');

// SAY HELLO
Route::get('/sayhello/{name?}', 'HomeController@sayHello');

// ROLLDICE
Route::get('/rolldice/{userGuess?}', 'HomeController@showRolldice');


// RESOURCE
// POST
Route::resource('/posts', 'PostsController');