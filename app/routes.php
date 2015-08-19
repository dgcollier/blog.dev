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
Route::get('/', function()
{
	return View::make('home');
});

// POST
Route::get('/post', function()
{
	return View::make('post');
});

// ABOUT
Route::get('/about', function()
{
	return View::make('about');
});

// RESUME
Route::get('/resume', function()
{
	return View::make('resume');
});

// PORTFOLIO
Route::get('/portfolio', function()
{
	return 'This is my portfolio.';
});

// CONTACT
Route::get('/contact', function()
{
	return View::make('contact');
});

// SEARCH
Route::get('/search', function()
{
	return View::make('search');
});

// ADD
Route::get('/add', function()
{
	return View::make('add');
});

// SAY HELLO
Route::get('/sayhello/{name?}', function($name = '')
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
    	$data = array('name' => $name);
        return View::make('sayhello')->with($data);
    }
});

// ROLLDICE
Route::get('/rolldice/{userGuess?}', function($userGuess = 6)
{
	$compGuess = mt_rand(1,6);

	if ($userGuess == $compGuess) {
		$message = 'You WIN!';
	} else {
		$message = 'You LOSE!';
	} 

	$data = array('compGuess' => $compGuess, 'userGuess' => $userGuess, 'message' => $message);
	
	return View::make('rolldice')->with($data);
});