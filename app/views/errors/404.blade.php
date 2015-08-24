@extends('layouts.master')

@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('/img/blog_404.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>404 Error</h1>
                        <hr class="small">
                        <span class="subheading">Page not found</span>
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
                <div class="post-preview">

	                <h2 class="post-title">Enjoy this comic</h2>
	                <h3 class="post-subtitle">While contemplating your existence</h3>
	                <div id="comicWrapper">
	                	<img id="comic" src="/img/error_img/error_img{{{ mt_rand(0,14) }}}.png">
	                </div>
                </div>
            </div>
        </div>
    </div>
@stop
  
@section('script')
	<script>
		"use strict";
		$(document).ready(function(){


		        var randomDiv = Math.floor(Math.random() * boxes.length);
		        var randomPic = Math.floor(Math.random() * pics.length);

		        var box = $(boxes[randomDiv]);
		        var pic = $(pics[randomDiv]);

		        pic.attr("src", "/img/mole" + randomPic + ".png");

		        box.children().fadeIn(400);
		        
		    }, 750);
		});
	</script>
@stop

