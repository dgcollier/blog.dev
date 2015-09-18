@extends('layouts.master')

@section('head')
    @section('title')
        D.G.Collier's Portfolio
    @stop
@stop

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
@stop

@section('content')
	<div class="container">
		<!-- Projects Row -->
		<div class="row">
		    <div class="col-md-6 portfolio-item">
		        <a href="{{{ action('PostsController@index') }}}">
		            <img class="img-responsive" src="/img/portfolio/portfolio_blog.png" alt="">
		        </a>
		        <h3>
		            <a href="{{{ action('PostsController@index') }}}">Personal Blog</a>
		        </h3>
		        <p>Backed by Laravel and MySQL, this blog was my latest project for Codeup. This was our first Laravel project.</p>
		    </div>
		    <div class="col-md-6 portfolio-item">
		        <a href="#">
		            <img class="img-responsive" src="/img/portfolio/portfolio_adlister.png" alt="">
		        </a>
		        <h3>
		            <a href="#">Adlister</a>
		        </h3>
		        <p>Our first tandem project, built entirely in PHP with no framework. Our take on the ad listing was to match those with a desire to learn a skill with someone qualified to teach them. MySQL database was utilized as well.</p>
		    </div>
		</div><!-- /.row -->

		<hr>

		<!-- Projects Row -->
		<div class="row">
		    <div class="col-md-6 portfolio-item">
		        <a href="#">
		            <img class="img-responsive" src="/img/portfolio/portfolio_parks.png" alt="">
		        </a>
		        <h3>
		            <a href="#">National Parks</a>
		        </h3>
		        <p>First MySQL project. Our assignment was to create a GUI to add records to a database and display the results in the web.</p>
		    </div>
		    <div class="col-md-6 portfolio-item">
		        <a href="{{{ action('GamesController@showWhackAMole') }}}">
		            <img class="img-responsive" src="/img/portfolio/portfolio_whackamole.png" alt="">
		        </a>
		        <h3>
		            <a href="{{{ action('GamesController@showWhackAMole') }}}">Whack-A-Big-12</a>
		        </h3>
		        <p>My take on our JavaScript assignment to make a whack-a-mole-style game. Currently the only option is to play as a Texas fan, perhaps I will add more options in the future. </p>
		    </div>
		</div><!-- /.row -->

		<hr>

		<!-- Projects Row -->
		<div class="row">
		    <div class="col-md-6 portfolio-item">
		        <a href="{{{ action('GamesController@showSimon') }}}">
		            <img class="img-responsive" src="/img/portfolio/portfolio_simon.png" alt="">
		        </a>
		        <h3>
		            <a href="{{{ action('GamesController@showSimon') }}}">Simple Simon</a>
		        </h3>
		        <p>Another JavaScript game that was much lighter and faster to build. A pre-cursor to our whack-a-mole assignment.</p>
		    </div>
		    <div class="col-md-6 portfolio-item">
		        <a href="{{{ action('GamesController@showRolldice') }}}">
		            <img class="img-responsive" src="/img/portfolio/portfolio_rolldice.png" alt="">
		        </a>
		        <h3>
		            <a href="{{{ action('GamesController@showRolldice') }}}">Rolldice</a>
		        </h3>
		        <p>A small PHP game. The odds are not in your favor.</p>
		    </div>
		</div><!-- /.row -->

		<hr>

		{{-- <!-- Pagination -->
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
		</div> --}}<!-- /.row -->
	</div>
@stop