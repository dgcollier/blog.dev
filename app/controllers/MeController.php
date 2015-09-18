<?php

class MeController extends BaseController {

	public function showAbout()
	{
		return View::make('me.about');
	}

	public function showContact()
	{
		return View::make('me.contact');
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
		return View::make('me.resume');
	}

	public function showPortfolio()
	{
		return View::make('me.portfolio');
	}
}