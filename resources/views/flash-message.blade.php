@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@if ($message = Session::get('success'))
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="alert alert-success alert-block text-center">	
        <strong>{{$message}}</strong>
    </div>
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif