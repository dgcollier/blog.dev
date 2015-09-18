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

// HOME CONTROLLER
// HOMEPAGE
	Route::get('/', 'HomeController@showHome');
// LOGIN
	Route::get('/login', 'HomeController@showLogin');
	Route::post('login', 'HomeController@doLogin');
// LOGOUT
	Route::get('/logout', 'HomeController@doLogout');


// ME CONTROLLER
// ABOUT
	Route::get('/about', 'MeController@showAbout');
// CONTACT
	Route::get('/contact', 'MeController@showContact');
	Route::post('/contact', 'MeController@emailMe');
// RESUME
	Route::get('/resume', 'MeController@showResume');
// PORTFOLIO
	Route::get('/portfolio', 'MeController@showPortfolio');


// POSTS CONTROLLER
// MANAGE
	Route::get('/posts/manage', 'PostsController@getManage');
// LIST
	Route::get('/posts/list', 'PostsController@getList');
// RESOURCE
	Route::resource('/posts', 'PostsController');


// USERS COONTROLLER
// MANAGE
	Route::get('/user/manage', 'UsersController@getManage');
// LIST
	Route::get('/user/list', 'UsersController@getList');
// RESOURCE
	Route::resource('/user', 'UsersController');


// GAMES CONTROLLER
// INDEX
	Route::get('/games', 'GamesController@index');
// SAY HELLO
	Route::get('/games/sayhello/{name?}', 'GamesController@sayHello');
// ROLLDICE
	Route::get('/games/rolldice/{userGuess?}', 'GamesController@showRolldice');
// WHACK-A-MOLE
	Route::get('/games/whackamole', 'GamesController@showWhackAMole');
// SIMPLE SIMON
	Route::get('/games/simon', 'GamesController@showSimon');
