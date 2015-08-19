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

Route::get('/', function()
{
	return View::make('hello');
});

// SAY HELLO
Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
    	$data = array('name' => $name);
        return View::make('my-first-view')->with($data);
    }
});

// RESUME
Route::get('/resume', function()
{
	return 'This is my resume.';
});

// PORTFOLIO
Route::get('/portfolio', function()
{
	return 'This is my portfolio.';
});

// ROLLDICE
Route::get('/rolldice/{userGuess}', function($userGuess)
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