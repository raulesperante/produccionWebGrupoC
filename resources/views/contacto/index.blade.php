@extends('layouts.app-client');

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
            <div class="row">
              <div class="col-6">
                <label for="apellido" class="form-label">Apellido</label>
                <input
                  type="text"
                  class="form-control"
                  id="apellido"
                  name="apellido"
                />
              </div>
              <div class="col-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input
                  type="text"
                  class="form-control"
                  id="nombre"
                  name="nombre"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <label for="formprovincia" class="form-label">Provincia</label>
                <input
                  class="form-control"
                  list="listprovincia"
                  id="formprovincia"
                  placeholder="Elegi tu Provincia..."
                />
                <datalist id="listprovincia">
                  <option value="Buenos Aires"></option>
                  <option value="CABA"></option>
                  <option value="Catamarca"></option>
                  <option value="Chaco"></option>
                  <option value="Chubut"></option>
                  <option value="Cordoba"></option>
                  <option value="Corrientes"></option>
                  <option value="Entre Rios"></option>
                  <option value="Formosa"></option>
                  <option value="Jujuy"></option>
                  <option value="La Pampa"></option>
                  <option value="La Rioja"></option>
                  <option value="Mendoza"></option>
                  <option value="Misiones"></option>
                  <option value="Neuquen"></option>
                  <option value="Rio Negro"></option>
                  <option value="Salta"></option>
                  <option value="San Juan"></option>
                  <option value="San Luis"></option>
                  <option value="Santa Cruz"></option>
                  <option value="Santa Fe"></option>
                  <option value="Santiago del Estero"></option>
                  <option value="Tierra del Fuego"></option>
                  <option value="Tucuman"></option>
                  <option value="No soy de Argentina"></option>
                </datalist>
              </div>
              <div class="col-4 mb-4">
                <label for="formpais" class="form-label">Pais</label>
                <input
                  class="form-control"
                  id="formpais"
                  placeholder="Elegi tu Pais..."
                />
              </div>
            </div>
            <div class="mb-4">
              <label for="formtext" class="form-label">Mensaje</label>
              <textarea class="form-control" id="formtext" rows="3"></textarea>
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
