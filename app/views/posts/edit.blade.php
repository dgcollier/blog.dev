@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/css/create.css">

<header class="intro-header" style="background-image: url('/img/blog_add.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Edit Post</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        	<!-- Form to Add Park to Database -->
	        <form action="{{{ action('PostsController@update') }}}" id="addPost" class="form-horizontal" method="PUT">
	            <div id="editForm" class="form-group col-xs-12">
	                <h2>Edit:</h2>
	                <div><input type="text" id="title" class="input" name="title" placeholder="Title" value="{{{ $post->title }}}" autofocus></div>
	                <div><input type="text" id="subheader" class="input" name="subheader" placeholder="Sub-header" value="{{{ $post->sub_title }}}"></div>
	                <div><input type="text" id="author" class="input" name="author" placeholder="Author" value="{{{ $post->author }}}"></div>
	                
	                <textarea id="postBody" class="input form-control" name="postBody" placeholder="Post Body" rows="15">{{{ $post->body }}}</textarea>

	                <div class="row">
                        <div class="form-group col-xs-12">
                            <input type="submit" class="btn btn-default" id="post">
                        </div>
                    </div>
	            </div>
	        </form>
        </div>
    </div>
</div>

@stop