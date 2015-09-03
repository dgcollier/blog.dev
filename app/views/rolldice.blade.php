@extends('layouts.master')

@section('head')
    @section('title')
        D.G.Collier - Rolldice
    @stop
    <link rel="stylesheet" type="text/css" href="/css/rolldice.css">
    <script src="/js/jquery.js"></script>
@stop

@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-color: black">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Roll Dice</h1>
                        <hr class="small">
                        <span class="subheading">A Silly Little Game</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
	<div class= "well" id="guess">
	    <h2>The computer rolled: <?= $compGuess; ?></h2>
	    <h2>You rolled: <?= $userGuess ?></h2>
	</div>

    <button class="btn btn-lg" id="goBtn">{{{ $message }}}</button>
@stop

@section('script')
    <script src="/js/rolldice.js"></script>
@stop