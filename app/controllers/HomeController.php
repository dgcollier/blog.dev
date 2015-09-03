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

	public function showLogin()
	{
		if(Auth::check()) {
			Session::flash('errorMessage', 'You are already logged in!');
			return Redirect::action('HomeController@showHome');
		}

		return View::make('login');
	}

	public function doLogin()
	{
		$username = Input::get('username');
		$password = Input::get('password');
		if (Auth::attempt(array('username' => $username, 'password' => $password))) {
			Session::flash('successMessage', 'Login successful!');
			return Redirect::intended('/');
		} else {
			//login failed, go back to login screen
			Session::flash('errorMessage', 'Your username and/or password were incorrect.');
			Log::warning('User ' . $username . ' failed to log in.');
			return Redirect::action('HomeController@showLogin');
		}
	}

	public function doLogout()
	{
		Auth::logout();
		// Session flash
		Session::flash('successMessage', 'You have successfully logged out.');
		return Redirect::to('/');
	}

	public function showAbout()
	{
		return View::make('about');
	}

	public function showContact()
	{
		return View::make('contact');
	}

	public function emailMe()
	{
		if(!Input::all()) {
			Session::flash('errorMessage', 'You were missing some info there...');
			Redirect::back()->withInput();
	    }
		
		$data = array(
			'name' => Input::get('name'),
			'email_address' => Input::get('email'),
			'body' => Input::get('message')
		);
			
		Mail::send('emails.contact', $data, function($message) {
			$message->from(Input::get('email'), Input::get('name'));
			$message->to('david@gcollier.me', 'David G. Collier');
			$message->subject('Email from dgcollier.com');
		});

		Session::flash('successMessage', 'Your email was sent to the developer.');
		return Redirect::action('HomeController@showHome');			
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

	public function showRolldice($userGuess = 1)
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
