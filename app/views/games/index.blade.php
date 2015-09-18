@extends('layouts.master')

@section('head')
    @section('title')
        D.G.Collier - Home
    @stop
@stop

@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('/img/blog_home.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>GAMES</h1>
                        <hr class="small">
                        <span class="subheading">Silly little time-wasters</span>
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
                    <a href="post">
                        <h2 class="post-title">
                            <a href="{{{ action('GamesController@showSimon') }}}">Simple Simon</a>
                        </h2>
                        <p class="post-subtitle">
                            Repeat the sequence of buttons that Simon presses. Don't mess up or the game is over! 
                        </p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="{{{ action('GamesController@showWhackAMole') }}}">Whackamole</a>
                        </h2>
                        <p class="post-subtitle">
                            Texas Longhorns and Big XII-themed whackamole game. Make sure you don't miss or the Longhorns might lose this Saturday!
                        </p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="{{{ action('GamesController@showRolldice') }}}">Rolldice</a>
                        </h2>
                        <p class="post-subtitle">
                            A silly little game where you try to guess the die roll of the computer. Enter it into the url and refresh! This game is not finished. 
                        </p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="{{{ action('GamesController@sayHello') }}}">Say My Name!</a>
                        </h2>
                        <p class="post-subtitle">
                            A pointless screen that outputs your name. Might be cool to send to a friend if you're a Breaking Bad fan or just want to tell someone to say your name.
                        </p>
                </div>
            </div>
        </div>
    </div>
@stop