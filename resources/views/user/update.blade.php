@extends('layout.layout')

@section('title')
    Update User Data
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Update data in your account</h4>
    </div>
    <div class="card-body">
        <form action="{{route('submit',$user)}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
            </div>
            <div class="form-group">
                <label>Sex</label>
                <select name="sex" class="form-control" id="">
                    <option value="mail">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" id="birthday" name="birthday" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Save changes</button>
            <a href="{{ url('user') }}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>
@endsection