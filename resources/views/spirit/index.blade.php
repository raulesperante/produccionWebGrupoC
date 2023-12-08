@extends('layouts.app-client');


@section('content')
<body>
  <!--- BARRA DE NAVEGACION -->
  <nav class="navbar navbar-expand-lg bg-sucess">
    <div class="container-fluid">
      <a class="navbar-brand p-2 m-1" href="inicio.html">
        <img src="resources/images/logoprincipal.jpeg" alt="marca" width="250" height="100" class="img-fluid">
      </a>
      <button class="navbar-toggler btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon btn-dark"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="btn btn-dark btn-lg" href="inicio.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-success btn-lg" href="street_flashback.html">Street Flash Back</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-danger btn-lg" href="street_spirit.html">Street Spirit</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-dark btn-lg" href="contacto.html">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-dark btn-lg" href="tucuenta.html">Tu Cuenta</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-dark btn-lg" type="submit">Buscar</button>
        </form> 
      </div>
    </div>
  </nav>

  <section id="galeria1" class="container">

    <div class="text-center pt-5">
        <h1 id="titulopag">COLECCION STREET SPIRIT</h1>
        <p id="subtitulo"> [ Espiritu Fueguino ] </p>

    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="resources/images/streetspirit/buzos/buzo1.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> BUZO DE FRISA (PHOENIX) $6.800,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="resources/images/streetspirit/buzos/buzo2.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> BUZO DE FRISA (BAUHAUS) $6.800,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="resources/images/streetspirit/joggins/joggins1.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> BABUCHA DE FRISA $7.200,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="resources/images/streetspirit/joggins/joggins2.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> JOGGING DE FRISA $6.300,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="resources/images/streetspirit/pantalones/pantalones1.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> BABUCHA EN GABARDINA $6.800,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="resources/images/streetspirit/canguros/canguro3.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> CANGURO DE FRISA CON RECORTES LATERALES (RESTART) $7.800,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="resources/images/streetspirit/canguros/canguro4.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> CANGURO DE FRISA (THE CLASH) $7.800,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        
    </div>
  </section>
@endsection
  

