@extends('layouts.master')

@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('/img/blog_post.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{{ $post->title }}}</h1>
                        <h2 class="subheading">{{{ $post->sub_title }}}</h2>
                        <span class="meta">
                            @if ($post->created_at != $post->updated_at) 
                                {{{ 'Updated by ' }}}
                            @else
                                {{{ 'Posted by ' }}}
                            @endif

                            <a href="{{{ action('UsersController@show', $post->user->id) }}}">
                                {{{ $post->user->username }}}
                            </a> on {{{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>{{{ $post->body }}}</p>

                    <a href="{{{ action('PostsController@index') }}}">  
                        <button id="backBtn" class="btn btn-default"><< Back</button>
                    </a>

                    @if(Auth::check() && Auth::id() == $post->user_id)

                    <a href="{{{ action('PostsController@edit', $post->id) }}}">
                        <input class="btn btn-default" value="Edit >>">
                    </a>
                    
                    <button class="btn btn-default" id="delete">Delete >></button>

                    @endif
                </div>

                {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
                {{ Form::close() }}

            </div>
        </div>
    </article>
@stop

@section('script')
    <script>
        "use strict";
        $(document).ready(function() {
            $('#delete').click(function() {
                var onConfirm = confirm('Are you sure you want to delete this? This action cannot be undone.');
                
                if(onConfirm) {
                    $('#formDelete').submit();
                }
            })
        });
    </script>
@stop