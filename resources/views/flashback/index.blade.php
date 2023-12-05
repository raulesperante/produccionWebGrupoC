@extends('layouts.app-client');


@section('content')
<body>
    <!--- BARRA DE NAVEGACION -->
    <nav class="navbar navbar-expand-lg bg-sucess">
      <div class="container-fluid">
        <a class="navbar-brand p-2 m-1" href="inicio.html">
          <img src="assets/images/logoprincipal.jpeg" alt="marca" width="250" height="100" class="img-fluid">
        </a>
        <button class="navbar-toggler btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon btn-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a  class="btn btn-dark btn-lg" href="inicio.html">Home</a>
            </li>
            <li class="nav-item">
              <a  class="btn btn-success btn-lg" href="street_flashback.html">Street Flash Back</a>
            </li>
            <li class="nav-item">
              <a  class="btn btn-danger btn-lg" href="street_spirit.html">Street Spirit</a>
            </li>
            <li class="nav-item">
              <a  class="btn btn-dark btn-lg" href="contacto.html">Contacto</a>
            </li>
            <li class="nav-item">
              <a  class="btn btn-dark btn-lg" href="tucuenta.html">Tu Cuenta</a>
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
          <h1 id="titulopag"> COLECCION STREET FLASH BACK</h1>
          <p id="subtit"> [ Espiritu Fueguino ]</p>
  
      </div>
      <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="assets/images/remera1.jpeg" alt="Galeria flash back">
              <p class="bg-black text-center"> BERMUDA EN FRISA RÚSTICA CON ELASTANO $4.900,00</p>
              <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
              </button>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="assets/images/remera1.jpeg" alt="Galeria flash back">
              <p class="bg-black text-center">CAMISA DE FIBRANA $4.700,00</p>
              <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
              </button> 
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="assets/images/remera1.jpeg" alt="Galeria flash back">
              <p class="bg-black text-center"> CAMPERA EN RÚSTICO CON ELASTÁNO $8.900,00</p>
              <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
              </button>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="assets/images/remera1.jpeg" alt="Galeria flash back">
              <p class="bg-black text-center"> REMERA MANGA CORTA (LISA CON GRIFA)  $3.300,00</p>
              <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
              </button>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="assets/images/remera1.jpeg" alt="Galeria flash back">
              <p class="bg-black text-center"> REMERA MANGA CORTA (GRAND BAHAMA)  $3.700,00</p>
              <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
              </button>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="assets/images/remera1.jpeg" alt="Galeria flash back">
              <p class="bg-black text-center"> REMERA MANGA CORTA (PORTLAND)  $3.700,00</p>
              <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
              </button>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="assets/images/remera1.jpeg" alt="Galeria flash back">
              <p class="bg-black text-center"> REMERA MANGA CORTA (OAXACA) $3.700,00</p>
              <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
              </button>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="assets/images/remera1.jpeg" alt="Galeria flash back">
              <p class="bg-black text-center"> REMERA MANGA CORTA (EASILY RECOGNIZABLE) $3.700,00</p>
              <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
              </button>
          </div>
      </div>
    </section>
</body>
@endsection