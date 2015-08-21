@extends('layouts.master')

@section('header')

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

@section('content')

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        	<!-- Form to Add Park to Database -->
	        {{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal', 'id' => 'addPost', 'method' => 'POST')) }}
	            <div id="createForm" class="form-group col-xs-12">
	                <h2>Add a Post:</h2>
	                <div class="@if($errors->has('title')) has-error @endif">
                        <input type="text" id="title" class="input" name="title" placeholder="Title" value="{{{ Input::old('title') }}}"autofocus>
                    </div>
	                <div class="@if($errors->has('title')) has-error @endif">
                        <input type="text" id="sub_title" class="input" name="sub_title" placeholder="Sub-header" value="{{{ Input::old('sub_title') }}}">
                    </div>
	                <div class="@if($errors->has('title')) has-error @endif">
                        <input type="text" id="author" class="input" name="author" placeholder="Author" value="{{{ Input::old('author') }}}">
                    </div>
	                
                    <div class="@if($errors->has('title')) has-error @endif">
                        <textarea id="body" class="input form-control" name="body" placeholder="{{{ !Input::old('body') ?  'Post Body' : Input::old('body') }}}" rows="15">
                        </textarea>
                    </div>

	                <div class="row">
                        <div class="form-group col-xs-12">
                            <button class="btn btn-default" id="post">Submit</button>
                        </div>
                    </div>
	            </div>
	        {{ Form::close() }}
        </div>
    </div>
</div>

@stop