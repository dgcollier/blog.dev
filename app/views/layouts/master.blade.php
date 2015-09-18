<html lang="en">
<head>
	@include('partials/head')
    @yield('head')  
</head>
<body ng-app="blog">
	<header>
		@include('partials/nav')
		@yield('header')
        @include('partials/messages')
        @include('partials/errors')
    </header>

    <main>
	    @yield('content')
    </main>

    <footer>
	    @include('partials/footer')
    </footer>

    @include('partials/script')      

    @yield('script')
</body>
</html>