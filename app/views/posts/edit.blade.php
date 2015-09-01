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
                            <label for="title">Title</label>
                            <input type="text" id="title" class="input" name="title" placeholder="Title" value="{{{ $post->title }}}" autofocus>
                        </div>
    	                <div>
                            <label for="sub_title">Headline</label>
                            <input type="text" id="sub_title" class="input" name="sub_title" placeholder="Sub-header" value="{{{ $post->sub_title }}}">
                        </div>
    	                <div>
                            <label id="img-url-title" for="img_url">Image Upload</label>
                            <input type="file" class="input" name="img_url" id="img_url" value="{{{ $post->img_url }}}">
                        </div>
    	                <div class="wmd-panel">
                            <label for="body">Body</label>
                            <div id="wmd-button-bar"></div>
                            <textarea class="wmd-input form-control" name="body" cols="50" rows="10" id="wmd-input">{{{ $post->body }}}</textarea>
                        </div>
                        <label>Preview:</label>
                        <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
                        <div>
                            <input type="text" id="tags" class="input" name="tags" placeholder="#Tags" 
                            value="@foreach ($post->tags as $tag) {{{ $tag->name }}}, @endforeach">
                        </div>                        

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
    <script src="/js/Markdown.Converter.js"></script>
    <script src="/js/Markdown.Sanitizer.js"></script>
    <script src="/js/Markdown.Editor.js"></script>
    <script type="text/javascript">
        (function () {
            
            var converter = new Markdown.Converter();
            
            var editor = new Markdown.Editor(converter);
            
            editor.run();
        })();
    </script>
@stop