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



  <!-- Scripts -->
  @vite([
  'resources/css/bootstrap.css',
  'resources/css/galeriaSpirit.css',
  'resources/css/global.css',

  ])

  @yield('resources')

</head>

<body>
  <!--- BARRA DE NAVEGACION -->
  @if(session("name"))
  <div class="titleUser">Bienvenido, {{ session("name")}} </div>
  @endif
  <nav class="navbar navbar-expand-lg bg-sucess">
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
            <a class="btn btn-dark btn-lg" href="inicio.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-success btn-lg" href="{{ route('flashback.index') }}">Street Flash Back</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-danger btn-lg" href="{{ route('spirit.index') }}">Street Spirit</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-dark btn-lg" href="contacto.html">Contacto</a>
          </li>
          <!--<li class="nav-item">
              <a class="btn btn-dark btn-lg" href="./tucuenta.html"
                >Tu Cuenta</a
              >
            </li>!-->
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" />
          <button class="btn btn-dark btn-lg" type="submit">Buscar</button>
        </form>
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