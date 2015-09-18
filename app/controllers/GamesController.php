<?php

class GamesController extends BaseController {
	
	public function index() 
	{
		return View::make('games.index');
	}

	public function sayHello($name = '')
	{
		if ($name == "Chris") {
	        return Redirect::to('/');
	    } else {
	    	$data = array('name' => $name);
	        return View::make('games.sayhello')->with($data);
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
		return View::make('games.rolldice')->with($data);
	}

	public function showWhackAMole()
	{
		return View::make('games.whackamole');
	}

	public function showSimon()
	{
		return View::make('games.simon');
	}
}