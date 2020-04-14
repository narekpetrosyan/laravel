@extends('layout.layout')

@section('title')
    User page
@endsection



@section('content')
    @include('./layout/messages')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">User Data</h4>
        </div>
        <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Update data</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{asset('user_images/'.Auth::user()->image)}}" style="with:60px; height: 60px;border-radius: 50%;" alt="">
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm text-center" href="{{route('update',$user)}}">
                                            Update data
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
@endsection
