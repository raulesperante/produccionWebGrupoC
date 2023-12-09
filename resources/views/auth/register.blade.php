@extends('layouts.app-client');


@section('content')
    <div class="container w-75 bg-black mt-5 rounded shadow" id="log">
      <div class="row align-items-stretch">
        <div
          class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"
        ></div>
        <div class="col p-5 rounded-end">
          <div class="text-end">
            <img
              src="/assets/images/logoprincipal.jpeg"
              width="200"
              alt="imagen logo principal"
            />
          </div>

          <h2 class="fw-bold text-center pt-5 mb-5">BiEnVeNiDo...!!!</h2>

          <!--LOGIN-->

          <form action="#">
            <div class="mb-4">
              <label for="correo" class="form-label">Correo Electronico</label>
              <input
                type="email"
                class="form-control"
                id="correo"
                name="correo"
                required
              />
            </div>
            <div class="mb-4">
              <label for="password" class="form-label">Contraseña</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
                required
              />
            </div>
            <div class="mb-4 form-check">
              <label for="conectado" class="form-check-label"
                >Mantener Conexion Abierta</label
              >
              <input
                type="checkbox"
                name="conectado"
                class="form-check-input"
                id="conectado"
              />
            </div>
            <div class="d-grid" id="ini">
              <button type="submit" class="btn btn-dark">Iniciar Sesion</button>
            </div>
            <div class="my-3">
              <span>No tienes cuentas? <a href="#">Registrate</a></span
              ><br />
              <span><a href="#">Recuperar Contraseña</a></span>
            </div>
          </form>

          <!--login con redes sociales-->
          <div class="container w-100 my-5">
            <div class="row text-center">
              <div class="col-12" id="inilog">Iniciar Sesion</div>
            </div>
            <div class="row">
              <div class="col btn btn-outline-primary w-100 my-1">
                <div class="row align-items-center">
                  <div class="col-2 d-none d-md-block">
                    <i class="fa fa-facebook"></i>
                  </div>
                  <div class="col-12 col-md-10 text-center">Facebook</div>
                </div>
              </div>
              <div class="col btn btn-outline-danger w-100 my-1">
                <div class="row align-items-center">
                  <div class="col-2 d-none d-md-block">
                    <i class="fa fa-google-plus"></i>
                  </div>
                  <div class="col-12 col-md-10 text-center">Google</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



@endsection
  


