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
    <script src="/js/jquery.js"></script>
</body>
</html>