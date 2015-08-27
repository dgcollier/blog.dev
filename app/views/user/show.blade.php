@extends('layouts.master')
@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('/img/blog_post.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{{ $user->username }}}</h1>
                        <h2 class="subheading">User Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
 <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2 class="post-title">
                		<span id="name" class="col-md-4">Name:</span>
                		<span class="col-md-5 col-md-offset-1 user-data">
                			{{{ $user->first_name }}} {{{ $user->last_name }}}
            			</span>
            		</h2>

					<p class="post-meta">
						<span id="join_date" class="col-md-4">Joined:</span>
						<span class="col-md-5 col-md-offset-1 user-data">
							{{{ $user->created_at->format('l, F jS Y') }}}
						</span> 
					</p>

					<p class="post-meta">
						<span id="updated" class="col-md-4">Updated:</span>
						<span class="col-md-5 col-md-offset-1 user-data">
							{{{ $user->updated_at->format('l, F jS Y') }}}
						</span> 
					</p>

					<a href="{{{ action('UsersController@edit', Auth::id()) }}}">
                        <input class="btn btn-default" value="Edit >>">
                    </a>
                    <a href="{{{ action('PostsController@index') }}}">  
                        <button class="btn btn-default" id="backBtn" ><< Back</button>
                    </a>
                    <button class="btn btn-default" id="delete">Delete >></button>
                </div>
                {{ Form::open(array('action' => array('UsersController@destroy', Auth::id()), 'method' => 'DELETE', 'id' => 'formDelete')) }}
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
                var onConfirm = confirm('Are you sure you want to delete your account? This action will delete all of your posts and cannot be undone.');
                
                if(onConfirm) {
                    $('#formDelete').submit();
                }
            })
        });
    </script>
@stop