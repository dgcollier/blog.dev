@extends('layouts.master')

@section('head')
	<link rel="stylesheet" type="text/css" href="css/resume.css">
@stop

@section('header')
	<header class="intro-header" style="background-image: url('img/blog_resume.jpg')">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	                <div class="page-heading">
	                    <h1>David G. Collier</h1>
	                    <hr class="small">
	                    <span class="subheading">Full-Stack Developer | San Antonio, TX</span>
	                </div>
	            </div>
	        </div>
	    </div>
	</header>
@stop

@section('content')
	<section class="entry">
		<h3 class="employer">Codeup Bootcamp</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">June 2015 - October 2015</h5>
		<ul class="duties">
			<li>Object-oriented programming</li>
			<li>PHP</li>
			<li>Laravel</li>
			<li>JavaScript</li>
			<li>jQuery</li>
			<li>CSS</li>
			<li>HTML</li>
		</ul>
	</section>
	<section class="entry">
		<h3 class="employer">SW Microbial Solutions</h3>
		<h4 class="city">Midland, TX</h4>
		<h5 class="date">January 2015 - April 2015</h5>
		<h5 class="date">February 2013 - April 2014</h5>
		<ul class="duties">
			<li>HTML</li>
			<li>CSS</li>
			<li>JavaScript</li>
		</ul>
	</section>
	<section class="entry">
		<h3 class="employer">BASIS Charter School</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">May 2014 - December 2014</h5>
		<ul class="duties">
			<li>HTML</li>
			<li>CSS</li>
			<li>JavaScript</li>
		</ul>
	</section>
	<section class="entry">
		<h3 class="employer">MAC Property Management</h3>
		<h4 class="city">Chicago, IL</h4>
		<h5 class="date">June 2012 - February 2013</h5>
		<ul class="duties">
			<li>HTML</li>
			<li>CSS</li>
			<li>JavaScript</li>
		</ul>
	</section>
@stop