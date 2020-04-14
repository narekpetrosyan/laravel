@extends('layout.master')

@section('title','AdminPanel | Edit')


@section('content')
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit registered User</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('updateUser',$user->id)}}" method="POST">
                        @csrf
                         <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control" value="{{$user->phone}}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label>Birth Day</label>
                            <input type="date" name="email" class="form-control" value="{{$user->birthday}}">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{route('users')}}" class="btn btn-danger">Cancel</a>
                    </form>
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
