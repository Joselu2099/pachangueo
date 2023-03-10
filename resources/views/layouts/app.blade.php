<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('/images/pachangueoLogo.ico') }}">
    @yield('stylesheet', "<link href='{{ asset('/css/index.css') }}' rel='stylesheet'/>")
    <title>@yield('title', 'pachangueo')</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('home.index') }}"><img src="{{ asset('/images/pachangueoLogo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('games.index') }}">Mis Pachangas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('games.find') }}">Buscar Pachanga</a>
                </li>
            </ul>
            <div class="auth-section">
                @guest
                    <li class="nav-item">
                        <a class="nav-link login" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link register" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="nav-link active logout" onclick="document.getElementById('logout').submit();">Logout</a>
                            @csrf
                        </form>
                    </li>
                @endguest
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    @yield('script')
</footer>
</body>
</html>
