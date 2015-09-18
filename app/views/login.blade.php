@extends('layouts.master')

@section('head')
    <link rel="stylesheet" type="text/css" href="/css/create.css">
    @section('title')
        D.G.Collier - Log In
    @stop
@stop


@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('/img/blog_login.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Log In Here</h1>
                        <hr class="small">
                        <span class="subheading">Dave's Blog</span>
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
    	        {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-horizontal', 'id' => 'login')) }}
    	            <div id="loginForm" class="form-group col-xs-12">
    	                <div class="row">
                            <input type="text" id="username" class="input" name="username" placeholder="Username" autofocus>
                            <input type="password" id="password" class="input" name="password" placeholder="Password">
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