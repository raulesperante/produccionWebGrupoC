<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite([
    'resources/sass/app.scss',
    'resources/css/admin/styles.css',
    'resources/css/app.css',
    'resources/js/app.js'
    ])

    @yield('resources')

</head>

<body>
    <div id="app">
        <!-- Nav -->
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    @if(Route::currentRouteName() === 'general.dashboard')
                        <div style="font-size: 2rem">Dashboard</div>
                    @elseif(Route::currentRouteName() === 'products.index')
                        <div style="font-size: 2rem">Productos</div>
                    @elseif(Route::currentRouteName() === 'products.create')
                        <div style="font-size: 2rem">Agregar Producto</div>
                    @elseif(Route::currentRouteName() === 'products.show')
                        <div style="font-size: 2rem">Detalle Producto</div>
                    @elseif(Route::currentRouteName() === 'products.edit')
                        <div style="font-size: 2rem">Editar Producto</div>
                    @else
                        <div style="font-size: 2rem">&nbsp;</div>
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end bg-dark text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                            Menú
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="{{ route('general.dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="{{ route('products.index') }}">Productos</a>
                            </li>
                            <li class="nav-item border-top">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main id="main-admin">
            @yield('content')
        </main>

    </div>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</body>

</html>