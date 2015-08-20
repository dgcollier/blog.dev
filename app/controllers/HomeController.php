<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		return View::make('home');
	}

	public function showAbout()
	{
		return View::make('about');
	}

	public function showSearch()
	{
		return View::make('search');
	}

	public function showContact()
	{
		return View::make('contact');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function sayHello($name = '')
	{
		if ($name == "Chris") {
	        return Redirect::to('/');
	    } else {
	    	$data = array('name' => $name);
	        return View::make('sayhello')->with($data);
	    }
	}

	public function showRolldice($userGuess)
	{
		$compGuess = mt_rand(1,6);

		if ($userGuess == $compGuess) {
			$message = 'You WIN!';
		} else {
			$message = 'You LOSE!';
		} 

		$data = array('compGuess' => $compGuess, 'userGuess' => $userGuess, 'message' => $message);
		return View::make('rolldice')->with($data);
	}

	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }
}
