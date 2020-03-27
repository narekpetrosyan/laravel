@extends('layout.master')

@section('title','AdminPanel | Users')



@section('content')
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>User Type</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('success')}}
                                    </div>
                                @endif
                            </div>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>-{{$user->usertype}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm text-center" href="{{route('editUser',$user->id)}}">
                                            <i class="fas fa-edit text-white"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-sm" href="{{route('deleteUser',$user->id)}}">
                                            <i class="fas fa-trash text-white"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>

@endsection



@section('scripts')
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
@endsection
