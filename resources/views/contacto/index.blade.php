@extends('layouts.app-client');

@section('resources')
@vite([
'resources/css/contacto.css',
])
<style>
  body {
    background-image: url("{{asset('/assets/images/contactofondook.jpg')}}");
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
@endsection

@section('content')
    <div
      class="container w-75 bg-black opacity-75 mt-5 rounded shadow"
      id="log"
    >
      <div class="row align-items-stretch">
        <div class="col p-5 rounded-end">
          <div class="text-center">
            <img
              src="assets/images/logoprincipal.jpeg"
              class="rounded"
              width="200"
              alt="logomarca"
            />
          </div>

          <h2 class="fw-bold text-center pt-5 mb-5">
            DEJANOS TU CONSULTA...!!!
          </h2>


          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('contacto.store') }}" method="POST" >
            @csrf
            <div class="mb-4">
              <label for="email" class="form-label">Correo Electronico</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
              />
            </div>
            <div class="row">
              <div class="col-6">
                <label for="surname" class="form-label">Apellido</label>
                <input
                  type="text"
                  class="form-control"
                  id="surname"
                  name="surname"
                  value="{{ old('surname') }}"
                  required
                />
              </div>
              <div class="col-6">
                <label for="name" class="form-label">Nombre</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  value="{{ old('name') }}"
                  required
                />
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <label for="province" class="form-label">Provincia</label>
                <select required name="province" id="province" class="form-select">
                  <option>Tierra del Fuego</option>
                  <option>Buenos Aires</value=>
                  <option>CABA</option>
                  <option>Catamarca</option>
                  <option>Chaco</option>
                  <option>Chubut</option>
                  <option>Cordoba</option>
                  <option>Corrientes</option>
                  <option>Entre Rios</option>
                  <option>Formosa</option>
                  <option>Jujuy</option>
                  <option>La Pampa</option>
                  <option>La Rioja</option>
                  <option>Mendoza</option>
                  <option>Misiones</option>
                  <option>Neuquen</option>
                  <option>Rio Negro</option>
                  <option>Salta</option>
                  <option>San Juan</option>
                  <option>San Luis</option>
                  <option>Santa Cruz</option>
                  <option>Santa Fe</option>
                  <option>Santiago del Estero</option>
                  <option>Tucuman</option>
                  <option>No soy de Argentina</option>
                </select>
              </div>
              <div class="col-4">
                <label for="country" class="form-label">Pais</label>
                <select required name="country" id="country" class="form-select">
                  <option>Argentina</option>
                  <option>Paraguay</option>
                  <option>Uruguay</option>
                  <option>Chile</option>
                  <option>Brasil</option>
                </select>
              </div>
            </div>
            <div class="mb-4">
              <label for="message" class="form-label">Mensaje</label>
              <textarea required name="message" class="form-control" id="formtext" rows="3"></textarea>
            </div>
            <div class="col-12 mb-4">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="invalidCheck"
                  required
                />
                <label class="form-check-label" for="invalidCheck">
                  De acuerdo con los Terminos y Condiciones.
                </label>
                <div class="invalid-feedback">
                  Tiene que estar de acuerdo con los terminos y condiciones para
                  avanzar.
                </div>
              </div>
            </div>
            <div class="d-grid" id="ini">
              <button type="submit" class="btn btn-dark">
                Enviar Consulta
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
@endsection
