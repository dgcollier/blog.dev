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
                        <h1>Edit User</h1>
                        <h2 class="subheading">{{{ $user->username }}}</h2>
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
                {{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal', 'id' => 'editPost')) }}
    	            <div id="editForm" class="form-group col-xs-12">
    	                <div>
                            <input type="text" id="first_name" class="input" name="first_name" placeholder="First Name" value="{{{ $user->first_name }}}" autofocus>
                        </div>
    	                <div>
                            <input type="text" id="last_name" class="input" name="last_name" placeholder="Last Name" value="{{{ $user->last_name }}}">
                        </div>
    	                <div>
                            <input type="text" id="username" class="input" name="username" placeholder="Username" value="{{{ $user->username }}}">
                        </div>
    	                <div>
                            <input type="password" id="password" class="input" name="password" placeholder="Current Password">
                        </div>
                        <div>
                            <input type="password" id="newPass" class="input" name="newPass" placeholder="New Password">
                        </div>
                        <div>
                            <input type="password" id="newPassConfirm" class="input" name="newPassConfirm" placeholder="Confirm New Password">
                        </div>
    	                
    	                <div class="row">
                            <div class="form-group col-xs-12">
                                <a href="{{{ action('UsersController@show', Auth::id()) }}}">
                                    <button id="backBtn" class="btn btn-default">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        Back
                                    </button>
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
@stop