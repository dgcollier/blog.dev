<!DOCTYPE html>
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
    </header>

    <main>
		 <div class="container">
            @if($errors->has())
                @foreach($errors->all() as $error)
                    <ul>
                        <li class="errors alert alert-danger" role="alert">{{{ $error }}}</li>
                    </ul>
                @endforeach
            @endif
        </div>
        
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