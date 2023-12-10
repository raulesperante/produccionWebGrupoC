@extends('layouts.app-client');

@section('resources')
@vite([
'resources/css/tucuenta.css',
])
<style>
  body {
    background-image: url("{{asset('/assets/images/fondologin.jpg')}}");
    background-repeat: no-repeat;
    background-size: cover;
  }

  .bg {
    background-image: url("{{asset('/assets/images/loginok.webp')}}");
    background-position: center center;
    background-size: cover;
  }
</style>
@endsection

@section('content')
<div class="container w-75 bg-black mt-5 rounded shadow" id="log">
  <div class="row align-items-stretch">
    <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
    <div class="col p-5 rounded-end">
      <div class="text-end">
        <img src="/assets/images/logoprincipal.jpeg" width="200" alt="imagen logo principal" />
      </div>

      <h2 class="fw-bold text-center pt-5 mb-5">Registrate!!!</h2>

      <!--LOGIN-->

      <form action="{{ route('auth.registerLogic') }}"  method="POST">
         @csrf
        <div class="mb-4">
          <label for="name" class="form-label">Nombre</label>
          <input type="name" class="form-control" id="name" name="name" value="{{ old('name') }}" required />
        </div>
        <div class="mb-4">
          <label for="surname" class="form-label">Apellido</label>
          <input type="surname" class="form-control" id="surname" name="surname" value="{{ old('surname') }}" required />
        </div>
        <div class="mb-4">
          <label for="email" class="form-label">Correo Electronico</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required />
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required />
        </div>

        <div >
          <div class="d-grid text-center pt-2">
            <button type="submit" class="btn btn-dark">Iniciar Sesión
          </div>
        </div>
    </div>
    </form>
  </div>
</div>
</div>

@endsection