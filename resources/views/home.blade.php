@extends('layouts.app-client')

@section('content')
<body>
    <!--- BARRA DE NAVEGACION -->
    <nav class="navbar navbar-expand-lg bg-sucess">
      <div class="container-fluid">
        <a class="navbar-brand p-2 m-1" href="inicio.html">
          <img
            src="assets/images/logoprincipal.jpeg"
            alt="marca"
            width="250"
            height="100"
            class="img-fluid"
          />
        </a>
        <button
          class="navbar-toggler btn btn-dark"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon btn-dark"></span>
        </button>
        <div
          class="collapse navbar-collapse color-black"
          id="navbarNavDropdown"
        >
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a class="btn btn-dark btn-lg" href="inicio.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-success btn-lg" href="street_flashback.html"
                >Street Flash Back</a
              >
            </li>
            <li class="nav-item">
              <a class="btn btn-danger btn-lg" href="street_spirit.html"
                >Street Spirit</a
              >
            </li>
            <li class="nav-item">
              <a class="btn btn-dark btn-lg" href="contacto.html">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-dark btn-lg" href="tucuenta.html">Tu Cuenta</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Buscar"
              aria-label="Search"
            />
            <button class="btn btn-dark btn-lg" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="text-container">
      <div class="container-fluid text-white">
        <h1>HACE CLICK EN LA COLECCION QUE QUIERAS VER...!!!</h1>
      </div>
    </div>

    <!--- IMAGENES DE LA COLECCION DE ROPA -->
    <div class="img-content mb-5 mt-5">
      <div class="row container-fluid">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <a href="street_flashback.html">
            <img
              class="img-fluid"
              src="assets/images/logoflashbacks.jpeg"
              alt="colleccionflashback"
            />
          </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <a href="street_spirit.html">
            <img
              class="img-fluid"
              src="assets/images/logospirit.jpeg"
              alt="colleccionspirit"
            />
          </a>
        </div>
      </div>
    </div>
</body>
@endsection
