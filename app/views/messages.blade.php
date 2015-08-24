@if (Session::has('successMessage'))
    <div class="alert alert-success messages">{{{ Session::get('successMessage') }}}</div>
@endif
@if (Session::has('errorMessage'))
    <div class="alert alert-danger messages">{{{ Session::get('errorMessage') }}}</div>
@endif