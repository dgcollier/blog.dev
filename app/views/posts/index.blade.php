@extends('layouts.master')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/blog_home.jpg')">
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

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h3><a class="post-subtitle" href="/posts/create">Create New Post</a></h3>
                <hr>
                <div class="post-preview">
                    
                    @foreach ($posts as $post)
                    <a href="{{{ action('PostsController@show', $post->id) }}}">
                        <h2 class="post-title">{{{ $post->title }}}</h2>
                        <h3 class="post-subtitle">{{{ $post->sub_title }}}</h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">{{{ $post->author }}}</a> on {{{ $post->created_at }}}</p>
                    <hr>
                    @endforeach
                </div>
               
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts →</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop