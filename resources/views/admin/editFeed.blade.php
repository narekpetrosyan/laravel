@extends('layout.master')

@section('title','AdminPanel | Edit')



@section('content')
@include('./layout/messages')
<div class="card-body">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
</div>
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit contact Feed</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('updateFeed',$feed->id)}}" method="POST" class="text-center" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="subject">Your subject</label>
                            <input type="text" name="subject" value="{{$feed->subject}}" class="form-control" placeholder="Enter subject">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        </div>
                        <div class="form-group">
                            <label for="text">Text</label>
                            <textarea name="text" id="" class="form-control">{{$feed->text}}</textarea>
                        </div>
                        <button class="btn btn-success">Accept</button>
                        <a href="{{url('admin')}}" class="btn btn-danger">Cancel</a>
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
