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

    #shipping-cost {
        display: none;
    }

    #shippingCostButton:disabled {
        color: gray;
        background: #eee;
        opacity: 1;
    }

    #msgErrorPostalCode {
        display: none;
    }
</style>
@endsection

@section('content')
<section id="galeria1" class="container">
    <meta style="display: none" name="csrf-token" content="{{ csrf_token() }}">
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
                                    <input class="form-check-input" type="radio" name="shipping" value="local"
                                        id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Retiro en Local
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping" value="home"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Envío a domicilio
                                    </label>
                                    <br/>
                                    <div style="font-size: 11px">Acordar entrega por mensajería interna al finalizar la compra</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 ">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentMethod"  value="cash" id="cash" checked>
                                <label class="form-check-label" for="cash">
                                    Efectivo en la tienda
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentMethod" value="card" id="card">
                                <label class="form-check-label" for="card">
                                    Transferencia Bancaria
                                </label>
                            </div>
                            <div class="row mt-2">
                                <img style="height: 250px; width: 400px" src="/assets/images/cbu_dummy.png" alt="marca" class="img-fluid" />
                            </div>
                            <div class="row mt-2">

                                <div class="col-12 col-md-8">
                                    <div class="col-12">
                                        <button class="mt-3 btn button-finalize-purchase w-100"><b>FINALIZAR COMPRA<b/></button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </div>

    </div>
    </div>

</section>
</body>
@endsection