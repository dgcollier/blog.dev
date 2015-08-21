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
		@yield('header')

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
</body>
</html>