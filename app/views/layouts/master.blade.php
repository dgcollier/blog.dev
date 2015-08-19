<!DOCTYPE html>
<html lang="en">
<head>
	@include('head')	
</head>
<body>


	<header>
		@include('header')
	</header>

	<main>
	    @yield('content')
    </main>

    <footer>
	    @include('footer')
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
</body>
</html>