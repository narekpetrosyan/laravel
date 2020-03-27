@extends('layout.layout')

@section('title')
    User page
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">User Data</h4>
        </div>
        <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Update data</th>
                            </thead>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('success')}}
                                    </div>
                                @endif
                            </div>
                            <tbody>
                                <tr>
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