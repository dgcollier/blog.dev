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
		// @TODO: Session::put('page', Input::get('page'));

		// show all posts

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

			$tags = explode(', ', Input::get('tags'));

			foreach ($tags as $tag) {
				$tagExists = Tag::find('id');

				if ($tagExists) {
					$tagExists->name = $tag;
					$tagExists->save();

					$relatedTag = new PostTag();
					$relatedTag->post_id = $post->id;
					$relatedTag->tag_id = $tagExists->id;
					$relatedTag->save();
				} else {
					$newTag = new Tag();
					$newTag->name = $tag;
					$newTag->save();

					$relatedTag = new PostTag();
					$relatedTag->post_id = $post->id;
					$relatedTag->tag_id = $newTag->id;
					$relatedTag->save();
				}

			}

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

		$body = $post->body;
		$parse = new Parsedown();
		$post->body = $parse->text($body);

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

			if (Input::hasFile('img_url')) {
			    $image = Image::make(Input::file('img_url')->resize(250, null));
				$path = "uploads/";
				$filename = $image->getClientOriginalName();
				$destination = $image->move($path, $filename);
				$post->img_url = '/' . $destination;
			}

			$post->save();

			$tags = explode(', ', Input::get('tags'));

			foreach ($tags as $tag) {
				$tagExists = Tag::find('id');

				if ($tagExists) {
					$tagExists->name = $tag;
					$tagExists->save();

					$relatedTag = new PostTag();
					$relatedTag->post_id = $post->id;
					$relatedTag->tag_id = $tagExists->id;
					$relatedTag->save();
				} else {
					$newTag = new Tag();
					$newTag->name = $tag;
					$newTag->save();

					$relatedTag = new PostTag();
					$relatedTag->post_id = $post->id;
					$relatedTag->tag_id = $newTag->id;
					$relatedTag->save();
				}

			}

			Log::info('Post ' . $post->id . ' updated successfully.');

			if (Request::wantsJson()) {
	        	$posts = Post::with('user')->get();
	            return Response::json($posts);
	        } else {
				Session::flash('successMessage', 'Your post was updated successfully!');
				return View::make('posts.show')->with('post', $post);
	        }

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
		$post = Post::find($id);

		// delete foreign keys from post_tag table
		foreach($post->tags as $tag) {
			$tag->pivot->delete();
		}

		// delete specific blog post
		$post->delete();

		if(!$post) {
			Session::flash('errorMessage', 'The post you are looking for does not exist.');
			App::abort(404);
		}

		Log::warning('Post was deleted.');


        if (Request::wantsJson()) {
        	$posts = Post::with('user')->get();
            return Response::json($posts);
        } else {
			Session::flash('successMessage', 'Your post was successfully removed.');
            return Redirect::action('PostsController@index');
        }
    }

    public function getManage()
    {
    	if (Auth::check() && (Auth::id() == 1)) {
	    	return View::make('posts.manage');
    	} else {
    		Session::flash('errorMessage', 'You do not have permission to access that page.');
    		return Redirect::action('HomeController@showHome');
    	}
    }

    public function getList()
    {
    	$posts = Post::with('user')->get();
    	return Response::json($posts);
    }
}
