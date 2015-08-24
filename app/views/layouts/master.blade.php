
<html lang="en">
<head>
	@include('head')
    <link rel="stylesheet" type="text/css" href="/css/master.css">
    @yield('head')  
</head>
<body>
	<header>
		@include('header')
		@yield('header')
        @include('errors')
    </header>

    <main>
	    @yield('content')
    </main>

    <footer>
	    @include('footer')
    </footer>

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->       
    <script src="/js/bootstrap.min.js"></script>       

    @yield('script')
</body>
</html>