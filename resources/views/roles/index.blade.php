@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 actions">
            <a class="btn btn-success" href="{{route('roles.create')}}">Create</a>
        </div>
        
        @include('flash-message')
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td colspan="2" class="text-center">
                            <a class="btn btn-primary" href="{{route('roles.edit', $role->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{url('roles/delete', $role->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
