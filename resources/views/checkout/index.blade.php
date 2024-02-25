@extends('layouts.app-client');

@section('resources')
@vite([
'resources/css/inicio.css',
])
<style>
    body {
        background-image: url("{{asset('/assets/images/fondostreetflash.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
    }

    #opt-shipping {
        display: none;
    }
</style>
@endsection

@section('content')
<section id="galeria1" class="container">

    <div class="row" style="margin-bottom: 5em; margin-top: 5em;">
        <div class="card p-4">
            <div class="card-header bg-dark text-white">Completá tus datos</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label for="" class="mb-1">Nombre</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1" value="Raúl" disabled>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6"></div>
                            <div class="col-12 col-sm-6">
                                <label for="" class="mb-1">Apellido</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1" value="Esperante" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-12">
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1" checked onclick="showOptShipping(false)">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Retiro en Local
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" onclick="showOptShipping(true)">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Envío a domicilio
                                    </label>
                                </div>
                            </div>
                            <div id="opt-shipping" class="col-12 mt-2">
                                <form action="">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Dirección"
                                                    aria-label="Dirección" aria-describedby="basic-addon1"
                                                    name="address">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group mb-3">
                                                <input min="1000" max="9000" type="number" class="form-control"
                                                    placeholder="Código postal" aria-label="Código postal"
                                                    aria-describedby="basic-addon1" name="postalCode">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Provincia">
                                                    <option selected disabled>Provincia</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" placeholder="Código"
                                                    aria-label="Dirección" aria-describedby="basic-addon1"
                                                    name="address">
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" placeholder="Teléfono"
                                                    aria-label="Teléfono" aria-describedby="basic-addon1"
                                                    name="address">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn button-primary">
                                            Calcular costo de envío
                                        </button>


                                    </div>
                                </form>



                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6"></div>
                </div>



            </div>

        </div>

    </div>



    </div>
    </div>

</section>
</body>
@endsection
<script>
    function showOptShipping(flag){
        if(flag){
          document.querySelector("#opt-shipping").style.display="block"
        }else{
          document.querySelector("#opt-shipping").style.display="none"
        }
    }

</script>