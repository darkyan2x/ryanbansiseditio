@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 card">
            <form action="{{route('facilities.update', $facility->id)}}" method="POST" class="card-body">
                @csrf
                @method('PUT')
                <h2>Update Facility</h2>
                @include('flash-message')
                <div class="form-group">
                    <label for="name">Facility Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter facility name" value="{{$facility->name}}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Enter address" value="{{$facility->address}}">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="Enter city" value="{{$facility->city}}">
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" name="state" class="form-control" id="state" placeholder="Enter state" value="{{$facility->state}}">
                </div>
                <div class="form-group">
                    <label for="zip">Zip</label>
                    <input type="number" name="zip" class="form-control" id="zip" placeholder="Enter zip" value="{{$facility->zip}}">
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" name="contact" class="form-control" id="contact" placeholder="Enter contact" value="{{$facility->contact}}">
                </div>
                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-success pull-right">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
