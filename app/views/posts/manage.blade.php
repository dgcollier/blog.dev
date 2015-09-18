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
					<td class="data">
						@{{ $index + 1 }}
					</td>

					<td class="data">
						<a href="@{{ action('PostsController@show', p.id) }}">
							@{{ p.title }}
						</a>
					</td>

					<td class="data">
						@{{ p.user.username }}
					</td>

					<td class="data">
						@{{ formatDate(p.updated_at.date) | date: 'MMM. dd, y' }}
					</td>

					<td class="data">
						<button type="button" class="btn btn-primary btn-xs editBtn" data-toggle="modal" ng-click="open($index)">
							<span class="glyphicon glyphicon-pencil"></span>
						</button>
					</td>

					<td class="data">
						<button class="btn btn-xs btn-danger deleteBtn" ng-click="deletePost(p.id)">
							<span class="glyphicon glyphicon-remove"></span>
						</button>
					</td>
				</tr>
			</tbody>
		</table>

		<!-- Modal -->
		<div class="modal fade ng-cloak" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		 	<div class="modal-dialog" role="document">
		   		<div class="modal-content">
		      		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        			<span aria-hidden="true">&times;</span>
	        			</button>
		        		<h4 class="modal-title" id="myModalLabel">
		        			@{{ post.title }}
	        			</h4>
		      		</div> <!-- modal-header -->
		      		<div class="modal-body">
		      			<form class="well" novalidate name="editForm" ng-submit="editPost()">
							<div class="form-group">
					    		<label for="title">Title</label>
					    		<input type="text" class="form-control" id="title" name="title" ng-model="post.title" autofocus required>
				    		</div>
	
						    <div class="form-group">
							    <label for="sub_title">Headline</label>
							    <input type="text" class="form-control" id="sub_title" name="sub_title" ng-model="post.sub_title" required>
						    </div>

						    <div class="form-group">
							    <label for="body">Body</label>
							    <textarea class="form-control" id="body" name="body" rows="10" ng-model="post.body" required></textarea>
						    </div>	 

			      			<div class="modal-footer">
			        			<button type="button" class="btn btn-warning" data-dismiss="modal">
			        				Close
		        				</button>
						        <button type="submit" class="btn btn-success">
						        	Save changes
					        	</button>
				      		</div> <!-- modal-footer -->
						</form> <!-- form -->
		      		</div> <!-- modal-body -->
		    	</div> <!-- modal-content -->
		  	</div> <!-- modal dialogue -->
		</div> <!-- modal -->
	</div> <!-- ng-controller, ng-cloak -->
@stop	

@section('script')
    <!-- Angular JS -->
    <script type="text/javascript" src="/js/angular.min.js"></script>

    <!-- my Angular -->
    <script type="text/javascript" src="/js/blog.js"></script>
@stop