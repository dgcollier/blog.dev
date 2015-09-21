<html lang="en">
<head>
	@include('layouts.partials.head')
    @yield('head')  
</head>
<body ng-app="blog">
	<header>
		@include('layouts.partials.nav')
		@yield('header')
        @include('layouts.partials.messages')
        @include('layouts.partials.errors')
    </header>

    <main>
	    @yield('content')
    </main>

    <footer>
	    @include('layouts.partials.footer')
    </footer>

    @include('layouts.partials.script')      

    @yield('script')
</body>
</html>