<?php

class PostsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		Session::put('page', Input::get('page'));
		// show all posts
		$posts = Post::with('user')->orderBy('updated_at','desc')->paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// create a new post
		return View::make('posts.create');
	}		


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
			Session::flash('errorMessage', 'Hmmm...something went wrong. Please check the message(s) below to fix:');

	        return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	        // validation succeeded, create and save the post
			$post = new Post();
			$post->title = Input::get('title');
			$post->sub_title = Input::get('sub_title');
			$post->body = Input::get('body');
			$post->save();

			Log::info('Post: ' . $post->title . ' with id: ' . $post->id . ' created.', array('newPost' => Input::all()));

			Session::flash('successMessage', 'Your post was created successfully!');

			return Redirect::action('PostsController@index');
	    }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// display post by id
		$post = Post::find($id);

		if(!$post) {
			App::abort(404);	
		}

		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// edit a specific blog post
		$post = Post::find($id);

		if(!$post) {
			Session::flash('errorMessage', 'The post you are looking for does not exist.');
			App::abort(404);	
		}

		return View::make('posts.edit')->with('post', $post);
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
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        Session::flash('errorMessage', 'Hmmm...something went wrong. Please check the message(s) below to fix:');

	        return Redirect::back()->withInput()->withErrors($validator);

	    } else {

			$post = Post::find($id);

	    	if(!$post) {
				Session::flash('errorMessage', 'The post you are looking for does not exist.');
				App::abort(404);
			}

			// updates the edited blog post
			$post->title = Input::get('title');
			$post->sub_title = Input::get('sub_title');
			$post->body = Input::get('body');
			$post->save();

			Log::info('Post ' . $post->id . ' updated successfully.');

			Session::flash('successMessage', 'Your post was updated successfully!');

			return View::make('posts.show')->with('post', $post);
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete specific blog post
		$post = Post::find($id)->delete();

		if(!$post) {
			Session::flash('errorMessage', 'The post you are looking for does not exist.');
			App::abort(404);
		}

		Log::warning('Post was deleted.');

		Session::flash('successMessage', 'Your post was successfully removed.');

		return Redirect::action('PostsController@index');
	}
}
