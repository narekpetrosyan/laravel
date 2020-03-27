@extends('./layout/layout')

@section('title','Один отзыв')
    
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('assets/css/messages/messages.css')}}">
@endsection

@section('content')
    @include('./layout/messages')
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                    <div class="alert alert-info">
                        <div class="alert alert-danger">
                            <h1>Заголовок: {{$data->subject}}</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <img src="{{asset('images/'. $data->image) }}" class="img-fluid" alt="">
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <p>Текст: {{$data->text}}</p>
                            </div>
                        </div>   
                        <p><small>Дата: {{$data->created_at}}</small></p>                    
                    </div>
            </div>
        </div>
    </div>
@endsection