@extends('layouts.app-client')

@section('content')


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
