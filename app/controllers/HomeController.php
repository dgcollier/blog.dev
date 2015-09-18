<?php

class HomeController extends BaseController {

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
}
