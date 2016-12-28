<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/sass_later.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{-- config('app.name', 'Laravel') --}}
                            <img src="/images/logo-s-white.png" class="logo-s" alt="echar">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Left Side Of Navbar -->
                    <div class="navbar navbar-nav nav-quick-search">
                        <form class="navbar-form echar-quick-search">
                            <input type="text" class="form-control no-outglow input-icon-right" placeholder="Quick Search">
                            <i class="fa fa-search fa-search-position"></i>
                        </form>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        
                            @include('partials.navigation')
                       
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="https://use.fontawesome.com/1ae3dc1960.js"></script>
</body>
</html>
