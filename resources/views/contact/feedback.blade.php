@extends('./layout/layout')

@section('title','Отзывы')
    
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
            <div class="col-md-8">
                @foreach ($data as $el)
                    <div class="alert alert-info">
                        <h3>Имя: {{$el->name}}</h3>
                        <h5>Заголовок: {{$el->subject}}</h5>
                        <p><small>Дата: {{$el->created_at}}</small></p>
                        <a href="{{route('contact.showData',$el->id)}}" class="btn btn-primary">Дополнительно</a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                {{$data->links()}}
            </div>
        </div>
    </div>
@endsection