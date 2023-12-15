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

      <h2 class="fw-bold text-center pt-5 mb-5">Ingresar</h2>


      @if (session('error'))
      <div class="errorBox">
        <p class="errorBox__text">
          {{ session('error') }}
        </p>
      </div>
      @endif



      <!--LOGIN-->

      <form action="{{ route('auth.loginLogic') }}" method="POST">
         @csrf
        <div class="mb-4">
          <label for="email" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" id="email" name="email" required />
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" required />
        </div>
        <div class="d-grid" id="ini">
          <button type="submit" class="btn btn-dark">Iniciar Sesión</button>
        </div>
        <div class="my-3">
          <span>¿No tienes cuentas? <a href="{{route('auth.register')}}">Registrate</a></span><br />
        </div>
      </form>

    </div>
  </div>
</div>



@endsection