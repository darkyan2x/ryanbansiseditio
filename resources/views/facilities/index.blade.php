@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 actions">
            <a class="btn btn-success" href="{{route('facilities.create')}}">Create</a>
        </div>
        
        @include('flash-message')
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Facility</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($facilities as $facility)
                    <tr>
                        <td>{{$facility->name}}</td>
                        <td>{{$facility->address}}</td>
                        <td>{{$facility->city}}</td>
                        <td>{{$facility->state}}</td>
                        <td>{{$facility->zip}}</td>
                        <td>{{$facility->contact}}</td>
                        <td colspan="2" class="text-center">
                            <a class="btn btn-primary" href="{{route('facilities.edit', $facility->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{url('facilities/delete', $facility->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
