<html lang="en">
<head>
	@include('head')
    @yield('head')  
</head>
<body>
	<header>
		@include('nav')
		@yield('header')
        @include('messages')
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

    <!-- Clean Blog JavaScript -->       
    <script src="/js/header.js"></script>       

    @yield('script')
</body>
</html>