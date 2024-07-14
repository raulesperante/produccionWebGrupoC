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
</style>
@endsection

@section('content')
<section id="galeria1" class="container">

    <div class="row" style="margin-bottom: 5em; margin-top: 5em;">
        <div class="card p-4">
            @if(count($cart) < 1) <div class="card-header bg-dark text-white">Carrito</div>
        <h5 class="text-center mt-3">El carrito está vacío</h5>
        @else
        <div class="card-header bg-dark text-white">Carrito</div>
        <div class="card-body">
            @if(isset($msg))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{$msg}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(isset($msgError))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$msgError}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $productId => $productData)
                    <tr>
                        <form action="{{ route('cart.handleItem') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$productId}}">
                            <td scope="row">{{$productData['name']}}</td>
                            <td>${{$productData['price']}}</td>
                            <td class="row" style="width: 50%">
                                <div class="col-11">
                                    <div class="input-group">
                                        <input type="number" name="amountItems" value="{{$productData['amount']}}"
                                            class="form-control" aria-label="Cantidad">
                                        <button type="submit" name="submit_action" value="modify"
                                            class="btn btn-success">Modificar</button>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <button type="submit" name="submit_action" class="btn btn-danger"
                                        value="delete">Eliminar</button>
                                </div>
                                @if(isset($productIdError) && $productIdError == $productId)
                                <div class="text-danger">No hay stock suficiente</div>
                                @endif
                            </td>
                        </form>
                        @endforeach
                </tbody>
            </table>
        @if(isset($total) && $total > 0)
        <div class="row">
            <p class="text-total">Total ${{$total}}</p>
        </div>
        @endif
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <a href="{{ route('home.index') }}" class="btn btn-danger"><b>SEGUIR COMPRANDO</b></a>
            </div>
            <div class="col-sm-6 col-12">
                <a href="{{ route('checkout.index') }}" class="btn button-gold2"><b>IR A PAGAR</b></a>
            </div>
        </div>
        @endif
    </div>

    </div>

</section>
</body>
@endsection