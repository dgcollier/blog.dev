@extends('layouts.master')

@section('header')
    <header class="intro-header" style="background-image: url('img/blog_resume.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>About Me</h1>
                        <hr class="small">
                        <span class="subheading">This is what I do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="{{{ action('HomeController@showResume') }}}">
                        <h2 class="post-title">
                            Resume
                        </h2>
                        <h3 class="post-subtitle">
                            Where I've worked.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="/">David Collier</a> on August 19, 2015</p>
                </div>
                <div class="post-preview">
                    <a href="{{{ action('HomeController@showPortfolio') }}}">
                        <h2 class="post-title">
                            Portfolio
                        </h2>
                        <h3 class="post-subtitle">
                            Web dev work I've done.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="/">David Collier</a> on August 19, 2015</p>
                </div>
            </div>
        </div>
    </div>
@stop