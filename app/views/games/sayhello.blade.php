@extends('layouts.master')

@section('head')
    <style type="text/css">
    	#display {
    		margin-top: 60px;
    		margin-left: 15px;
    		text-align: center;
    	}
    </style>
@stop

@section('header')
    <header class="intro-header" style="background-image: url('/img/blog_sayhello.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Say my name.</h1>
                        <hr class="small">
                        <span class="subheading">Say it.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    @if (!empty($name))
        <h1 id="display">{{{ $name }}}</h1>
    @else
        <h1 id="display">I SAID SAY MY NAME!</h1>
    @endif
@stop