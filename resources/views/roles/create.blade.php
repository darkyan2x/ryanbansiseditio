@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 card">
            <form action="{{route('roles.store')}}" method="POST" class="card-body">
                @csrf
                <h2>Create Role</h2>
                @include('flash-message')
                <div class="form-group">
                    <label for="name">Role</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter role name">
                </div>
                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-success pull-right">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
