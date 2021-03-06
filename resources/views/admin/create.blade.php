@extends('layout.master')

@section('title','AdminPanel | Create Post')



@section('content')
    <div class="col-md-12">
        @include('./layout/messages')
        <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create new Post</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.submit')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="subject">Your subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Enter subject">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        </div>
                        <div class="form-group">
                            <label for="text">Text</label>
                            <textarea name="text" id="" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-success">Create</button>
                        <a href="{{route('dashboard')}}" class="btn btn-danger">Cancel</a>
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
