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
                        <h1>Edit Post</h1>
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
                {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'class' => 'form-horizontal', 'id' => 'editPost')) }}
    	            <div id="editForm" class="form-group col-xs-12">
                    
    	                <div>
                            <input type="text" id="title" class="input" name="title" placeholder="Title" value="{{{ $post->title }}}" autofocus>
                        </div>
    	                <div>
                            <input type="text" id="sub_title" class="input" name="sub_title" placeholder="Sub-header" value="{{{ $post->sub_title }}}">
                        </div>
    	                <div>
                            <input type="text" id="author" class="input" name="author" placeholder="Author" value="{{{ $post->author }}}">
                        </div>
    	                
    	                <textarea id="body" class="input form-control" name="body" placeholder="Post Body" rows="15">{{{ $post->body }}}</textarea>

    	                <div class="row">
                            <div class="form-group col-xs-12">
                                <a href="{{{ action('PostsController@show', $post->id) }}}">
                                    <button id="backBtn" class="btn btn-default"><< Back</button>
                                </a>
                                <button class="btn btn-default" id="post">Submit</button>
                            </div>
                        </div>
    	            </div>
    	        {{ form::close() }}
            </div>
        </div>
    </div>
@stop

@section('script')
    {{-- <script src="/js/backBtn.js"></script> --}}
@stop