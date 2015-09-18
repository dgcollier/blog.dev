@extends('layouts.master')

@section('head')
	<link rel="stylesheet" type="text/css" href="css/resume.css">
    @section('title')
        D.G.Collier's Resume
    @stop
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
	<h2 class="heading">Experience</h2>
	<hr>
	<section class="entry">
		<h3 class="title">Programming Student</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">June 2015 - October 2015</h5>
		<h4 class="employer">Codeup Bootcamp</h4>
		<ul class="duties">
			<li>Built full-stack, data-driven web applications</li>
			<li>Developed for web using Laravel MVC framework</li>
			<li>Practiced Agile Development in team and solo projects</li>
		</ul>
	</section>
	<section class="entry">
		<h3 class="title">Operations Coordinator</h3>
		<h4 class="city">Midland, TX</h4>
		<h5 class="date">January 2015 - April 2015</h5>
		<h5 class="date">February 2013 - April 2014</h5>
		<h4 class="employer">SW Microbial Solutions</h4>
		<ul class="duties">
			<li>Generated weekly financial reports for owners and investors</li>
			<li>Supervised a team of two developers and four technicians</li>
			<li>Oversaw day-to-day operations of oil and gas service company</li>
		</ul>
	</section>
	<section class="entry">
		<h3 class="title">Assistant Head of Operations</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">May 2014 - December 2014</h5>
		<h4 class="employer">BASIS Charter School</h4>
		<ul class="duties">
			<li>Created and oversaw budget implementation for 20+ extra-curricular programs</li>
			<li>Managed vendor contracts related to campus and facilities</li>
			<li>Communicated daily with parents in relation to extra-curricular activities</li>
			<li>Oversaw aspects of facilities maintenance on behalf of Head of Operations</li>
		</ul>
	</section>
	<section class="entry">
		<h3 class="title">Chicag Housing Authority Administrator</h3>
		<h4 class="city">Chicago, IL</h4>
		<h5 class="date">June 2012 - February 2013</h5>
		<h4 class="employer">MAC Property Management</h4>
		<ul class="duties">
			<li>Served as primary liaison with Chicago Housing Authority</li>
			<li>Managed CHA compliance and inspections on over 200 apartment units</li>
			<li>Tracked and reported delinquencies and renewal rates for over 200 units</li>
			<li>Assisted with AP/AR functions for office managing over 2,000 units</li>
		</ul>
	</section>
	<section class="entry">
		<h3 class="title">Chicago Housing Authority Administrator</h3>
		<h4 class="city">Chicago, IL</h4>
		<h5 class="date">June 2012 - February 2013</h5>
		<h4 class="employer">MAC Property Management</h4>
		<ul class="duties">
			<li>Served as primary liaison with Chicago Housing Authority</li>
			<li>Managed CHA compliance and inspections on over 200 apartment units</li>
			<li>Tracked and reported delinquencies and renewal rates for over 200 units</li>
			<li>Assisted with AP/AR functions for office managing over 2,000 units</li>
		</ul>
	</section>
	<hr>
	<h2 class="heading">Education</h2>
	<hr>
	<section class="entry">
		<h3 class="title">The University of Chicago</h3>
		<h4 class="city">Chicago, IL</h4>
		<h5 class="date">June 2012</h5>
		<h4 class="employer">MAC Property Management</h4>
		<p class="duties">Bachelor of Arts in Anthropology</p>
	</section>
	<hr>
	<h2 class="heading">Activities & Interests</h2>
	<hr>
	<section class="entry">
		<h3 class="title">Mentor</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">August 2015</h5>
		<h4 class="employer">Trinity University</h4>
		<p class="duties">SoHacks 2 Coding Marathon</p>
	</section>
	<section class="entry">
		<h3 class="title">Coach</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">Fall 2014 - Winter 2015</h5>
		<h4 class="employer">BASIS San Antonio</h4>
		<p class="duties">Flag Football & Basketball</p>
	</section>
	<section class="entry">
		<h3 class="title">Team Member</h3>
		<h4 class="city">Chicago, IL</h4>
		<h5 class="date">2009 - 2012</h5>
		<h4 class="employer">University of Chicago</h4>
		<p class="duties">Men's Rugby</p>
	</section>
@stop