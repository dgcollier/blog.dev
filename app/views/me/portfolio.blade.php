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
		<!-- Bean Rate -->
        <div class="row">
            <div class="col-md-7">
                <a href="http://beanrate.com" target="_blank">
                    <img class="img-responsive" src="/img/portfolio/portfolio_coffee.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Bean Rate</h3>
                <h4>Crowd-sourced Coffee Reviews</h4>
                <p>My <a href="http://codeup.com/bootcamp/" target="_blank">Codeup</a> Capstone Project with <a href="https://www.linkedin.com/in/womackjoshua" target="_blank">Joshua Womack</a>. Our coffee nerd-ery led us to create something we thought didn't exist for anyone but the "experts". Went from concept to launch in under two weeks. We used PHP, JavaScript, jQuery, Laravel and MySQL for this project. We interacted with Mailgun and Google Maps APIs.</p>
                <a class="btn btn-default" href="https://github.com/SouthernUncle/coffee.dev" target="_blank">
                	<span class="glyphicon glyphicon-link"></span>
                	Github 
            	</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
		<!-- Concert Manager -->
        <div class="row">
            <div class="col-md-7">
                <a href="https://github.com/SouthernUncle/events.dev" target="_blank">
                    <img class="img-responsive" src="/img/portfolio/portfolio_events.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Concert Lister</h3>
                <h4>SATX Music Scene Aggregate</h4>
                <p>Using PHP, Laravel, and MySQL, our team of two spent one week building this full-stack event management application. Currently, this app is not hosted live, but you can view our code.</p>
                <a class="btn btn-default" href="https://github.com/SouthernUncle/events.dev" target="_blank">
                	<span class="glyphicon glyphicon-link"></span>
                	Github 
            	</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
		<!-- Personal Blog & Adlister -->
		<div class="row">
		    <div class="col-md-6 portfolio-item">
		        <a href="{{{ action('PostsController@index') }}}">
		            <img class="img-responsive" src="/img/portfolio/portfolio_blog.png" alt="">
		        </a>
		        <h3>
		            <a href="{{{ action('PostsController@index') }}}">Personal Blog</a>
		        </h3>
		        <p>Backed by a MySQL database, this blog was our first project using the Laravel MVC framework.</p>
		    </div>
		    <div class="col-md-6 portfolio-item">
		        {{-- <a href="#"> --}}
		            <img class="img-responsive" src="/img/portfolio/portfolio_adlister.png" alt="">
		        {{-- </a> --}}
		        <h3>
		            {{-- <a href="#"> --}}
		            Adlister
		            {{-- </a> --}}
		        </h3>
		        <p>Our first tandem project, built in PHP with no framework. Our take on the ad listing was to match those with a desire to learn a skill with someone qualified to teach them. MySQL database was utilized as well. Code available on <a href="https://github.com/the-tool-shed/the_tool_shed" target="_blank">Github</a>.</p>
		    </div>
		</div><!-- /.row -->

		<hr>

		<!-- Parks DB & WhackAMole -->
		<div class="row">
		    <div class="col-md-6 portfolio-item">
		        {{-- <a href="#"> --}}
		            <img class="img-responsive" src="/img/portfolio/portfolio_parks.png" alt="">
		        {{-- </a> --}}
		        <h3>
		            {{-- <a href="#"> --}}
		            National Parks
		            {{-- </a> --}}
		        </h3>
		        <p>First MySQL project. Our assignment was to create a GUI to add records to a database and display the results in the web. Code available <a href="https://github.com/dgcollier/Parks.dev">here</a>.</p>
		    </div>
		    <div class="col-md-6 portfolio-item">
		        <a href="{{{ action('GamesController@showWhackAMole') }}}">
		            <img class="img-responsive" src="/img/portfolio/portfolio_whackamole.png" alt="">
		        </a>
		        <h3>
		            <a href="{{{ action('GamesController@showWhackAMole') }}}">Whack-A-Big-12</a>
		        </h3>
		        <p>My take on our JavaScript assignment to make a whack-a-mole-style game. Currently the only option is to play as a Texas fan, perhaps I will add more options in the future.</p>
		    </div>
		</div><!-- /.row -->

		<hr>

		<!-- Simon & Rolldice -->
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