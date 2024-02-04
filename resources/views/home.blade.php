@extends('layouts.app-client')

@section('resources')
@vite([
'resources/css/inicio.css',
])
<style>
  body {
    background-image: url("{{asset('/assets/images/carrusel1.jpg')}}");
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
@endsection

<div style="margin-top: 3em"></div>

@section('content')
    <div class="text-container" style="margin-top: 5em">
      <div class="container-fluid text-white">
        <h1>HACE CLICK EN LA COLECCION QUE QUIERAS VER...!!!</h1>
      </div>
    </div>

    <div class="row">
      <div class="row mb-5  ">
        <div class="col-6 text-center" >
          <a href="street_flashback.html">
            <img
              style="max-height: 30em"
              class="img-fluid"
              src="assets/images/logoflashbacks.jpeg"
              alt="colleccionflashback"
            />
          </a>
        </div>
        <div class="col-6 text-center">
          <a href="street_spirit.html">
            <img
              style="max-height: 30em"
              class="img-fluid"
              src="assets/images/logospirit.jpeg"
              alt="colleccionspirit"
            />
          </a>
        </div>
    </div>

</body>
@endsection
