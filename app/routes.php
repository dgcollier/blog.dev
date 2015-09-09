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

// LOGIN
Route::get('/login', 'HomeController@showLogin');

// LOGOUT
Route::get('/logout', 'HomeController@doLogout');

//PROFILE
Route::get('/profile', 'HomeController@showProfile');

// ABOUT
Route::get('/about', 'HomeController@showAbout');

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

// MANAGE
Route::get('/posts/manage', 'PostsController@getManage');

//LIST
Route::get('/posts/list', 'PostsController@getList');

// POST
// LOGIN
Route::post('login', 'HomeController@doLogin');

Route::post('contact', 'HomeController@emailMe');


// RESOURCE
// POST
Route::resource('/posts', 'PostsController');

// USER
Route::resource('/user', 'UsersController');