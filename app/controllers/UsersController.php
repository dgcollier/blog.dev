<?php

class UsersController extends BaseController {

	/**
	 * Set up filters.
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('create', 'store', 'show')));	
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		Auth::abort(404);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// create a new user
		if(Auth::check()) {
			Session::flash('errorMessage', 'Please log out before creating a new account.');
			return Redirect::action('HomeController@showHome');
		}
		return View::make('user.create');
	}		


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// create the validator
	    $validator = Validator::make(Input::all(), User::$rules);

	    // attempt validation
	    if ($validator->fails()) {
			Session::flash('errorMessage', 'Hmmm...something went wrong. Please check the message(s) below to fix:');
			Log::info('User create failed');
	        return Redirect::back()->withInput()->withErrors($validator);

	    }
	        
        // validation succeeded, create and save the user
		$user = new User();
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->username = Input::get('username');
		$user->password = Input::get('password');
		$user->save();

		Log::info('User id: ' . $user->id . ' created.', array('newUser' => Input::get('username')));

		Session::flash('successMessage', 'Your account was created successfully! Please log in below:');

		return Redirect::action('HomeController@showLogin');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// display user profile by id
		$user = User::find($id);

		$query = Post::with('user');
		$query->where('user_id', $user->id);

		$posts = $query->orderBy('updated_at','desc');	

		if(!$user) {
			App::abort(404);	
		}

		return View::make('user.show')->with(array('user' => $user, 'posts' => $posts));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$id = Auth::id();
		// edit a specific user
		$user = User::find($id);

		if(Auth::id() != $user->id) {
			Session::flash('errorMessage', 'You are not authorized to edit this profile.');
			Log::warning('User ' . Auth::id() . ' tried to edit account ' . $user .  ' without authorization.');
			Redirect::action('UsersController@show');
		}

		if(!$user) {
			Session::flash('errorMessage', 'The user you are looking for does not exist.');
			App::abort(404);	
		}

		return View::make('user.edit')->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// create the validator
	    $validator = Validator::make(Input::all(), User::$editRules);

		$user = User::find($id);
		$password = Input::get('password');

	    // attempt validation
	    if (Request::wantsJson()) {
        	$users = User::all();
            return Response::json($users);
	    } else if ($validator->fails()) {
	        Session::flash('errorMessage', 'Hmmm...something went wrong. Please check the message(s) below to fix:');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else if(!$user) {
			Session::flash('errorMessage', 'The user you are looking for does not exist.');
			App::abort(404);
		} else if ((Input::has('newPass') || Input::has('newPassConfirm')) && (Input::get('newPass') != Input::get('newPassConfirm'))) {
			Session::flash('errorMessage', 'Your passwords did not match');
			return Redirect::back()->withInput()->withErrors($validator);
		}
 
		// updates the edited user
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->username = Input::get('username');

		if (Input::has('newPass')) {
			$user->password = Input::get('newPass');
			Session::flash('successMessage', 'Your password was updated.');
		}

		$user->save();

		Log::info('User ' . $user->id . ' updated successfully.');

		Session::flash('successMessage', 'Your account was updated successfully!');

		return View::make('user.show')->with('user', $user);
	
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);

		// delete user's posts
		$userPosts = Post::where('user_id', $id)->get();
		$userPosts->delete();

		// delete user account
		$user = User::find($id)->delete();

		Log::info('User was deleted.');

		if (Request::wantsJson()) {
        	$users = User::all();
            return Response::json($users);
        } else {
			Auth::logout();

			if(!$user) {
				Session::flash('errorMessage', 'The user you are looking for does not exist.');
				App::abort(404);
			}
			
			Session::flash('successMessage', 'Your account and posts were successfully deleted.');
			return Redirect::action('HomeController@showHome');	
		}
	}

	public function getManage()
    {
    	if (Auth::check() && (Auth::id() == 1)) {
	    	return View::make('user.manage');
    	} else {
    		Session::flash('errorMessage', 'You do not have permission to access that page.');
    		return Redirect::action('HomeController@showHome');
    	}
    }

    public function getList()
    {
    	$users = User::all();
    	return Response::json($users);
    }
}