<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('./assets/css/layout/layout.css')}}">
    @yield('stylesheet')
  </head>
  <body>

    <div class="container-fluid" id="nav-row">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-sm bg-dark">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('welcome')}}">Главная страница</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('pages.about')}}">Про нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact.getData')}}">Отзывы</a>
                            </li>


                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                            </li>
                        @endif @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    {{-- <a class="nav-link" href="{{ route('dashboard') }}">
                                        <i class="fas fa-user"></i>
                                        Dashboard
                                    </a> --}}
                                    <a class="nav-link" href="{{ url('user/') }}">
                                        <i class="fas fa-user"></i>
                                        Account
                                    </a>
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        {{ __('Logout') }}
                                    </a>
                                    <form
                                        id="logout-form"
                                        action="{{ route('logout') }}"
                                        method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>






    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- @include('./layout/messages') --}}
                @yield('content')
            </div>
        </div>
    </div>






    {{-- <div class="container-fluid bg-dark text-light" id="footer">
        <div class="row">
            <div class="col-md-12 text-center py-4">
                <small>Copyright &copy; Your Website</small>
            </div>
        </div>
    </div> --}}



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
