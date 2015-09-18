@extends('layouts.master')

@section('head')
    <link rel="stylesheet" type="text/css" href="/css/posts_index.css">
@stop

@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('/img/blog_index.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Dave's Blog</h1>
                        <hr class="small">
                        <span class="subheading">Blog Index</span>
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
                <div class="post-preview">

                    @if(Auth::check())
                        <h3>
                            <a class="post-subtitle" href="{{{ action('PostsController@create') }}}">
                                Create Blog Post
                            </a>
                        </h3>
                        <hr>
                    @endif
                    
                    @foreach ($posts as $post)
                        <a href="{{{ action('PostsController@show', $post->id) }}}">
                            <h2 class="post-title">
                                {{{ $post->title }}}
                            </h2>
                            <h3 class="post-subtitle">
                                {{{ $post->sub_title }}}
                            </h3>
                        </a>
                        <p class="post-meta">
                            @foreach ($post->tags as $tag)
                                <a href="{{{ action('PostsController@index') }}}">
                                    <button class="tags btn btn-default">
                                        #{{{ $tag->name }}}
                                    </button>
                                </a>
                            @endforeach
                        </p>
                        <p class="post-meta">
                            @if ($post->created_at != $post->updated_at) 
                                {{{ 'Updated by ' }}}
                            @else
                                {{{ 'Posted by ' }}}
                            @endif
                  
                            <a href="{{{ action('UsersController@show', $post->user->id) }}}">
                                {{{ $post->user->username }}}
                            </a> 

                            {{{ $post->updated_at->setTimezone('America/Chicago')->subMinutes(1)->diffForHumans() }}}
                        </p>
                        <hr>
                    @endforeach
                    
                </div>
                <!-- Pager -->
                <div id="paginator">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
@stop