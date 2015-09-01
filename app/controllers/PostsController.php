<?php

class PostsController extends BaseController {

	/**
	 * Set up filters.
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));	
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Session::put('page', Input::get('page'));
		// show all posts

		// SELECT * FROM posts AS p 
		// JOIN post_tag AS pt ON p.id = pt.post_id
		// JOIN tags AS t ON pt.tag_id = t.id
		// WHERE t.id = 10;

		$query = Post::with('user', 'tags');

		$search = Input::get('search');

		if($search) {
			$query->where('title', 'like', "%$search%");

			$query->orWhere('sub_title', 'like', "%$search%");

			$query->orWhere('body', 'like', "%$search%");

			$query->orWhereHas('user', function($q) use ($search) {
				$q->where('username', 'like', "%$search%");
			});

			$query->orWhereHas('tags', function($q) use ($search) {
				$q->where('name', 'like', "%$search%");
			});
		}

		$posts = $query->orderBy('updated_at','desc')->paginate(4);

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
			$post->user_id = Auth::id();

			if (Input::hasFile('img_url')) {
			    $image = Input::file('img_url');
				$path = "uploads/";
				$filename = $image->getClientOriginalName();
				$destination = $image->move($path, $filename);
				$post->img_url = '/' . $destination;
			}

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
		$user = $post->user->id;

		if(Auth::id() != $user)
			Session::flash('errorMessage', 'You are not authorized to edit this post.');
			Log::warning('User ' . $user . ' tried to edit post ' . $post->id .  ' without authorization.');
			Redirect::action('PostsController@index');

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
