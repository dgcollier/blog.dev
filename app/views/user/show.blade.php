@extends('layouts.master')
@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('/img/blog_profile.jpg')">
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
                		{{{ $user->first_name }}} {{{ $user->last_name }}}
            		</h2>

					<p class="post-meta">
						Joined: {{{ $user->created_at->format('l, F jS Y') }}}
					</p>

					@if($user->created_at != $user->updated_at)
						<p class="post-meta">
							Updated: {{{ $user->updated_at->format('l, F jS Y') }}}
						</p>
					@endif

                    <a href="{{{ action('PostsController@index') }}}">  
                        <button class="btn btn-default" id="backBtn" ><< Back</button>
                    </a>

                    @if ($user->id == Auth::id())
						<a href="{{{ action('UsersController@edit', Auth::id()) }}}">
	                        <input class="btn btn-default" value="Edit >>">
	                    </a>
	                    <button class="btn btn-default" id="delete">Delete >></button>
                    @endif


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