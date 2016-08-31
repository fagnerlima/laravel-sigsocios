@if(Session::has('alert-success'))
    <div class="alert alert-success">
        <p>{{ Session::get('alert-success') }}</p>
    </div>
@endif