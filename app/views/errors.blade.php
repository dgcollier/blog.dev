<section>
    <div class="container">
        @if($errors->has())
            <ul>
	            @foreach($errors->all() as $error)
                    <li class="errors alert alert-danger" role="alert">{{{ $error }}}</li>
	            @endforeach
            </ul>
        @endif
    </div>
</section>