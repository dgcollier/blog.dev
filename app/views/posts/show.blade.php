@extends('layouts.master')

@section('header')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
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

                        <a href="#">{{{ $post->author}}}</a> on {{{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

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
                <a href="{{{ action('PostsController@edit', $post->id) }}}">
                    <input class="btn btn-default" value="Edit >>">
                </a>
                <a href="#">
                    <input class="btn btn-default" value="Delete >>">
                </a>
            </div>
        </div>
    </div>
</article>

@section('script')

{{-- <script src="/js/backBtn.js"></script> --}}

@stop