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
                        <h1>Create Account</h1>
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
            	<!-- Form to Add User to Database -->
    	        {{ Form::open(array('action' => 'UsersController@store', 'class' => 'form-horizontal', 'id' => 'createUser')) }}
    	            <div id="createForm" class="form-group col-xs-12">
    	                <div>
                            <input type="text" id="first_name" class="input" name="first_name" placeholder="First Name" value="{{{ Input::old('first_name') }}}" autofocus>
                        </div>
    	                <div>
                            <input type="text" id="last_name" class="input" name="last_name" placeholder="Last Name" value="{{{ Input::old('last_name') }}}">
                        </div>
                        <div>
                            <input type="text" id="username" class="input" name="username" placeholder="Username" value="{{{ Input::old('username') }}}">
                        </div>
                        <div>
                            <input type="text" id="password" class="input" name="password" placeholder="Password">
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

@section('script')
    <script src="/js/backBtn.js"></script>
@stop