@extends('layouts.master')

@section('head')
    <link rel="stylesheet" type="text/css" href="/css/posts_manage.css">
@stop

@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('/img/blog_index.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Manage All Posts</h1>
                        <hr class="small">
                        <span class="subheading">dgcollier</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
	<div ng-controller="ManagePostsController" class="ng-cloak">
		<table class="table table-responsive table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Author</th>
					<th>Post Date</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="p in posts">
					<td class="data">@{{ $index + 1 }}</td>
					<td class="data"><a href="/posts/@{{ p.id }}">@{{ p.title }}</a></td>
					<td class="data">@{{ p.user.username }}</td>
					<td class="data">@{{ formatDate(p.updated_at.date) | date: 'MMM. dd, y' }}</td>
					<td class="data">
						<button type="button" class="btn btn-info btn-xs editBtn" data-toggle="modal" data-target="#myModal">
							<span class="glyphicon glyphicon-pencil"></span>
						</button>
					</td>
					<td class="data"><button class="btn btn-xs btn-danger deleteBtn" ng-click="deletePost(p.id)">x</button></td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        ...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

@stop	

@section('script')
    <!-- Angular JS -->
    <script type="text/javascript" src="/js/angular.min.js"></script>

    <!-- my Angular -->
    <script type="text/javascript" src="/js/blog.js"></script>
@stop