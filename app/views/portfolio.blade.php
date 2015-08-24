@extends('layouts.master')

@section('header')

	<header class="intro-header" style="background-image: url('/img/blog_portfolio.jpg')">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	                <div class="site-heading">
	                    <h1 class="portTitle">Portfolio</h1>
	                    <hr class="small">
	                    <span class="subheading portTitle">Web Development Projects</span>
	                </div>
	            </div>
	        </div>
	    </div>
	</header>

@section('content')

	<div class="container">
		<!-- Projects Row -->
		<div class="row">
		    <div class="col-md-6 portfolio-item">
		        <a href="#">
		            <img class="img-responsive" src="http://placehold.it/700x400" alt="">
		        </a>
		        <h3>
		            <a href="#">Project One</a>
		        </h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
		    </div>
		    <div class="col-md-6 portfolio-item">
		        <a href="#">
		            <img class="img-responsive" src="http://placehold.it/700x400" alt="">
		        </a>
		        <h3>
		            <a href="#">Project Two</a>
		        </h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
		    </div>
		</div>
		<!-- /.row -->

		<!-- Projects Row -->
		<div class="row">
		    <div class="col-md-6 portfolio-item">
		        <a href="#">
		            <img class="img-responsive" src="http://placehold.it/700x400" alt="">
		        </a>
		        <h3>
		            <a href="#">Project Three</a>
		        </h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
		    </div>
		    <div class="col-md-6 portfolio-item">
		        <a href="#">
		            <img class="img-responsive" src="http://placehold.it/700x400" alt="">
		        </a>
		        <h3>
		            <a href="#">Project Four</a>
		        </h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
		    </div>
		</div>
		<!-- /.row -->

		<!-- Projects Row -->
		<div class="row">
		    <div class="col-md-6 portfolio-item">
		        <a href="#">
		            <img class="img-responsive" src="http://placehold.it/700x400" alt="">
		        </a>
		        <h3>
		            <a href="#">Project Five</a>
		        </h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
		    </div>
		    <div class="col-md-6 portfolio-item">
		        <a href="#">
		            <img class="img-responsive" src="http://placehold.it/700x400" alt="">
		        </a>
		        <h3>
		            <a href="#">Project Six</a>
		        </h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
		    </div>
		</div>
		<!-- /.row -->

		<hr>

		<!-- Pagination -->
		<div class="row text-center">
		    <div class="col-lg-12">
		        <ul class="pagination">
		            <li>
		                <a href="#">«</a>
		            </li>
		            <li class="active">
		                <a href="#">1</a>
		            </li>
		            <li>
		                <a href="#">2</a>
		            </li>
		            <li>
		                <a href="#">3</a>
		            </li>
		            <li>
		                <a href="#">4</a>
		            </li>
		            <li>
		                <a href="#">5</a>
		            </li>
		            <li>
		                <a href="#">»</a>
		            </li>
		        </ul>
		    </div>
		</div>
		<!-- /.row -->
	</div>
@stop