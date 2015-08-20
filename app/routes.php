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

// HOME
Route::get('/', 'HomeController@showHome');

// ADD
Route::get('/add', 'HomeController@showAdd');

// POST
Route::get('/post', 'HomeController@showPost');

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

// SAY HELLO *****
Route::get('/sayhello/{name?}', 'HomeController@sayHello');

// ROLLDICE
Route::get('/rolldice/{userGuess?}', 'HomeController@showRolldice');