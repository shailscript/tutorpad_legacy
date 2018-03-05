<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BUIER{{-- config('app.name', 'Buier') --}}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container">
            <a class="navbar-brand" href="{{-- route('product.index') --}}">
                BUIER{{-- config('app.name', 'Buier') --}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    @if (Auth::guest())
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.login')}}">Vendor Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin.register')}}">Join the vendors!</a></li>
                    @else

                        <li class="nav-item">
                            <a class="nav-link" href="{{-- route('wishlist.index') --}}">
                                <i class="fa fa-heart"></i>
                                <sup>
                                    <span class="badge badge-pill badge-info">
                                        {{-- {{ Cart::instance('wishlist')->count(false) }} --}}
                                    </span>
                                </sup>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{-- route('cart.index') --}}">
                                <i class="fa fa-shopping-cart"></i>
                                <sup>
                                    <span class="badge badge-pill badge-primary">
                                        {{-- {{ Cart::instance('default')->count(false) }} --}}
                                    </span>
                                </sup>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>

    <div class="container">
        {{-- @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">
                    {{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </p>
            @endif
        @endforeach --}}
    </div>

    @yield('content')
</div>

<br><br>
<hr>
<br>

<footer class="text-muted">
    <div class="container">

    <p class="float-right">
        <a href="#">Back to top</a>
    </p>

    <p>Enjoy Buier. Add some nice description. Enjoy Buier. Add some nice description. Enjoy Buier. Add some nice description. Enjoy Buier. Add some nice description.</p>
    </div>
</footer>

<br>

</body>
</html>
