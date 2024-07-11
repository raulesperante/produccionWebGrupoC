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
                            <div id="opt-shipping" class="col-12 col-md-10 mt-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Dirección"
                                                aria-label="Dirección" aria-describedby="basic-addon1" name="address">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="input-group ">
                                            <input id="postalCode" min="1000" max="9000" type="number"
                                                class="form-control" placeholder="Código postal"
                                                aria-label="Código postal" aria-describedby="basic-addon1"
                                                name="postalCode">
                                        </div>
                                        <div id="msgErrorPostalCode" class="text-danger">El código postal debe estar
                                            entre estos dos valores: 1000 y 9000</div>
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3  mt-md-0">
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
                                                aria-label="Dirección" aria-describedby="basic-addon1" name="address">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Teléfono"
                                                aria-label="Teléfono" aria-describedby="basic-addon1" name="address">
                                        </div>
                                    </div>

                                    <button disabled onclick="calculateShippingCost()" class="btn button-primary"
                                        id="shippingCostButton">
                                        Calcular costo de envío
                                    </button>
                                    <div id="shipping-cost" class="col-12 shippingCost">
                                    </div>


                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 ">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="cash" checked>
                                <label class="form-check-label" for="cash">
                                    Efectivo en la tienda
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="card">
                                <label class="form-check-label" for="card">
                                    Tarjeta de Crédito o Débito
                                </label>
                            </div>
                            <div class="row mt-2">

                                <div class="col-12 col-md-8">

                        <div style="background: #eee" class="p-2" >
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="cardNumber" class="form-label">Número de Tarjeta</label>
                                            <div class="input-group ">
                                                <input id="cardNumber" min="13" max="18" type="number"
                                                    class="form-control" placeholder="XXXXXXXXXXXX"
                                                    aria-label="Número de Tarjeta" aria-describedby="Número de Tarjeta">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-6">
                                            <label for="cardExpiration" class="form-label">Caducidad (dd/mm)</label>
                                            <div class="input-group ">
                                                <input pattern="\d{2}/\d{2}" title="Formato válido: dd/mm"
                                                    id="cardExpiration" type="text" class="form-control"
                                                    placeholder="XXXX" aria-label="Caducidad de Tarjeta"
                                                    aria-describedby="Caducidad de Tarjeta">
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <label for="cardCode" class="form-label">Código</label>
                                            <div class="input-group ">
                                                <input title="Introduzca tres dígitos" pattern="\d{3}" id="cardCode"
                                                    type="text" class="form-control" placeholder="XXX"
                                                    aria-label="Código de Tarjeta" aria-describedby="Código de Tarjeta">
                                            </div>
                                        </div>
                                    </div>
                        </div>
                                    <div class="col-12">
                                        <button class="mt-3 btn button-primary w-100">Finalizar Compra</button>
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
<script>
    window.addEventListener('load', function() {
        document.querySelector("#postalCode").addEventListener("input", function(e){
            if(e.target.value){
                document.getElementById('shippingCostButton').disabled = false;
                const value = Number(e.target.value);
                // Value ok
                if(value >= 1000 && value <= 9000){
                    document.getElementById('msgErrorPostalCode').style.display = "none";
                }else{
                    document.getElementById('msgErrorPostalCode').style.display = "block";
                    document.getElementById('shippingCostButton').disabled = true;
                }
            }else{
                document.getElementById('shippingCostButton').disabled = true;

            }
            document.getElementById('shipping-cost').innerText = "";
            document.querySelector("#shipping-cost").style.display="none"
        })
    });

    function showOptShipping(flag){
        if(flag){
          document.querySelector("#opt-shipping").style.display="block"
        }else{
          document.querySelector("#opt-shipping").style.display="none"
        }
    }

    function calculateShippingCost(){
        const token = document.querySelector('meta[name="csrf-token"]').content;
        const value = Number(document.querySelector("#postalCode").value)
        fetch('calculateShippingCost', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            body: JSON.stringify({postalCode: value}),
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById('shipping-cost').innerText = "$" + data.cost;
            document.querySelector("#shipping-cost").style.display="block"
        })
        .catch(error => {
            console.error('Error al obtener datos:', error);
        });
    }

</script>