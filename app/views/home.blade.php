@extends('layouts.master')

@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/blog_home.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Dave's Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Blog for Codeup Bootcamp</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h3><a class="post-subtitle" href="/posts/create">Create Blog Post</a></h3>
                <hr>
                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="/posts">Blog Posts Index</a>
                        </h2>
                        <p class="post-subtitle">
                            Check out all the blog posts!
                        </p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="/about">Portfolio</a>
                        </h2>
                        <p class="post-subtitle">
                            Check out my work!
                        </p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="/about">About Me</a>
                        </h2>
                        <p class="post-subtitle">
                            Check out my <a href="/resume">resume</a> and other cool stuff!
                        </p>
                </div>
            </div>
        </div>
    </div>
@stop