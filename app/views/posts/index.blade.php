@extends('layouts.master')

@section('head')

<link rel="stylesheet" type="text/css" href="/css/posts_index.css">

@section('header')

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/blog_index.jpg')">
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
    
@section('content')

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
                
                @foreach ($posts as $post)
                <a href="{{{ action('PostsController@show', $post->id) }}}">
                    <h2 class="post-title">{{{ $post->title }}}</h2>
                    <h3 class="post-subtitle">{{{ $post->sub_title }}}</h3>
                </a>
                <p class="post-meta">
                    Posted by <a href="#">{{{ $post->author }}}</a> on {{{ $post->updated_at }}}
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