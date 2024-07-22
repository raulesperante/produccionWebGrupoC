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
            @if(count($cart) == 0)
            <div class="card-header bg-dark text-white mb-2">Tu carrito está vacío</div>
            @else
            <div class="card-header bg-dark text-white mb-2">Productos</div>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $productId => $productData)
                        <tr>
                            <td scope="row">{{$productData['name']}}</td>
                            <td>{{$productData['amount']}}</td>
                            <td>${{$productData['price']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(isset($total) && $total > 0)
                <div class="row">
                    <p style="padding-left: 1em" class="text-total">Total ${{$total}}</p>
                </div>
                @endif
            </div>
            <div class="card-header bg-dark text-white">Completá tus datos</div>
            <form  action="{{ route('finalizePurchase') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label for="" class="mb-1">Nombre</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1" value="{{session('name')}}" disabled>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6"></div>
                            <div class="col-12 col-sm-6">
                                <label for="" class="mb-1">Apellido</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1" value="{{session('surname')}}" disabled>
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
                                    <br />
                                    <div style="font-size: 11px">Acordar entrega por mensajería interna al finalizar la
                                        compra</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 ">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentMethod" value="cash" id="cash"
                                checked>
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
                            <img style="height: 250px; width: 400px" src="/assets/images/cbu_dummy.png" alt="marca"
                                class="img-fluid" />
                        </div>
                        <div class="row mt-2">


                            <div class="col-12 col-md-8">
                                <div class="col-12">
                                    <input type="hidden" name="thanks" value="allowed">
                                    <button type="submit" class="mt-3 btn button-gold w-100"><b>FINALIZAR COMPRA<b /></button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
            @endif

        </div>

    </div>

    </div>
    </div>

</section>
</body>
@endsection