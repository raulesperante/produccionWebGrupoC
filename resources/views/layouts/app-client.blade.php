<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Uosugata</title>

  <!-- Fonts -->
  <link rel="icon" href="/assets/images/logoprincipal.jpeg">
  <script src="https://kit.fontawesome.com/77693d89c5.js" crossorigin="anonymous"></script>
  <style>
    .tall-menu {
      height: 65px;
    }
  </style>



  <!-- Scripts -->
  @vite([
  'resources/css/bootstrap.css',
  'resources/css/galeriaSpirit.css',
  'resources/css/global.css',
  'resources/css/app.css',
  ])

  @yield('resources')

</head>

<body>
  <!--- BARRA DE NAVEGACION -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-absolute top-0 w-100">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          @if(!session("name"))
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('login')}}">Ingresar</a>
          </li>
          @endif
          @if(session("name"))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  colorUser " href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Bienvenido, {{ session("name") }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('logout')}}">Cerrar Sesión</a></li>
              @if(session("role_id") == 1)
              <li><a class="dropdown-item" href="{{ route('general.dashboard')}}">Dashboard</a></li>
              @endif
            </ul>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg bg-sucess mt-4">
    <div class="container-fluid">
      <a class="navbar-brand p-2 m-1" href="inicio.html">
        <img src="/assets/images/logoprincipal.jpeg" alt="marca" width="250" height="100" class="img-fluid" />
      </a>
      <button class="navbar-toggler btn btn-dark" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon btn-dark"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="btn btn-dark btn-lg" href="{{ route('home.index') }}">
              <div class="d-flex align-items-center tall-menu">Home</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-success btn-lg" href="{{ route('flashback.index') }}">
              <div class="d-flex align-items-center tall-menu">
                Street Flash Back
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-danger btn-lg" href="{{ route('spirit.index') }}">
              <div class="d-flex align-items-center tall-menu">
                Street Flash Back
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-dark btn-lg" href="{{ route('contacto.index') }}">
              <div class="d-flex align-items-center tall-menu">
                Contacto
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-info btn-lg" href="{{ route('sobrenosotros.index') }}">
              <div class="d-flex align-items-center tall-menu">
                Sobre Nosotros
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-yellow btn-lg" href="{{ route('cart.index') }}">
              <div class="d-flex align-items-center tall-menu">
                Carrito
              </div>
            </a>
          </li>
        </ul>
        <div style="width: 300px"></div>
      </div>
    </div>
  </nav>


  @yield('content')


  <!--- FOOTER -->
  <footer>
    <div class="footer-content">
      <h3> --- Uosugata ---</h3>
      <p> [ Espiritu Fueguino ]</p>
      <p>Indumentaria Masculina -
        Colecciones Exclusivas -
        Envíos a todo el país</p>
      <ul class="socials">
        <li><a href="mailto:uosugata@gmail.com" target="_blank"><i class="fa-regular fa-envelope"></i></a></li>
        <li><a href="https://www.instagram.com/uosugata/" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://www.facebook.com/Uosugata" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>Copyrigth &copy;2022 Uosugata</p>
    </div>
  </footer>

  <!-- Scripts -->
  @vite([
  'resources/js/bootstrap.js',


  ])



</body>

</html>