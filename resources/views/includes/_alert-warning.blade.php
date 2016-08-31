@if(Session::has('alert-warning'))
    <div class="alert alert-warning">
        <p>{{ Session::get('alert-warning') }}</p>
    </div> <!-- /.alert-warning -->
@endif