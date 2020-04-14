
<div class="card-body">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
</div>

<div class="card-body">
    @if (session('denied'))
        <div class="alert alert-danger" role="alert">
            {{session('denied')}}
        </div>
    @endif
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
