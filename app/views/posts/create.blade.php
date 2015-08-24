@extends('layouts.master')

@section('head')
    <link rel="stylesheet" type="text/css" href="/css/create.css">
@stop

@section('header')
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
@stop

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            	<!-- Form to Add Park to Database -->
    	        {{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal', 'id' => 'createPost')) }}
    	            <div id="createForm" class="form-group col-xs-12">
    	                <div>
                            <input type="text" id="title" class="input" name="title" placeholder="Title" value="{{{ Input::old('title') }}}" autofocus>
                        </div>
    	                <div>
                            <input type="text" id="sub_title" class="input" name="sub_title" placeholder="Sub-header" value="{{{ Input::old('sub_title') }}}">
                        </div>
    	                <div>
                            <input type="text" id="author" class="input" name="author" placeholder="Author" value="{{{ Input::old('author') }}}">
                        </div>
    	                
                        <div>
                            <textarea id="body" class="input form-control" name="body" placeholder="Post Body" rows="15"></textarea>
                        </div>

    	                <div class="row">
                            <div class="form-group col-xs-12">
                                <button id="backBtn" class="btn btn-default"><< Back</button>
                                <button class="btn btn-default" id="post">Submit</button>
                            </div>
                        </div>
    	            </div>
    	        {{ Form::close() }}
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="/js/backBtn.js"></script>
@stop