@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/css/create.css">

<header class="intro-header" style="background-image: url('/img/blog_add.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Add a New Post</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="row">
                @foreach($errors->all() as $error)
                    <p id="errors">{{{ $error }}}</p>
                @endforeach
        </div>
        	<!-- Form to Add Park to Database -->
	        <form action="{{{ action('PostsController@store') }}}" id="addPost" class="form-horizontal" method="POST">
	            <div id="createForm" class="form-group col-xs-12">
	                <h2>Add a Post:</h2>
	                <div><input type="text" id="title" class="input" name="title" placeholder="Title" value="{{{ Input::old('title') }}}"autofocus></div>
	                <div><input type="text" id="sub_title" class="input" name="sub_title" placeholder="Sub-header" value="{{{ Input::old('sub_title') }}}"></div>
	                <div><input type="text" id="author" class="input" name="author" placeholder="Author" value="{{{ Input::old('author') }}}"></div>
	                
	                <textarea id="body" class="input form-control" name="body" placeholder="Post Body" rows="15">{{{ Input::old('body') }}}</textarea>

	                <div class="row">
                        <div class="form-group col-xs-12">
                            <button class="btn btn-default" id="post">Submit</button>
                        </div>
                    </div>
	            </div>
	        </form>
        </div>
    </div>
</div>

@stop