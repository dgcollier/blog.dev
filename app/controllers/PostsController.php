<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// show all posts
		$posts = Post::all();
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
		// store new post in DB
		if(!Input::has('title') || !Input::has('body')) {
			return Redirect::back()->withInput();	
		}

		$post = new Post();
		$post->title = Input::get('title');
		$post->body = Input::get('postBody');
		$post->save();

		return Redirect::action('PostsController@index');
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
		// updates the edited blog post
		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->sub_title = Input::get('sub_title');
		$post->body = Input::get('postBody');
		$post->save();

		return Redirect::back();
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
		$post = Post::find($id);
		return "Deletes a blog post by id ($id).";
	}


}
