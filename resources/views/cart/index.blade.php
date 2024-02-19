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
            @if(count($cart) < 0) <h5 class="text-center mt-3">El carrito está vacío</h5>
                @else
                <div class="card-header bg-dark text-white">Carrito</div>
                <div class="card-body">
                    @if(isset($msg))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{$msg}}
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
                                                <input type="number" name="amountItems"
                                                    value="{{$productData['amount']}}" class="form-control"
                                                    aria-label="Cantidad">
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
                </div>
                @endif
        </div>

    </div>

    {{--
    <div class="row">
        @if ($products->count() > 0)
        @foreach ($products as $product)
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src={{ asset("storage/" . $product->image )}} alt="{{ $product->name}}">
            <p class="bg-black text-center py-2"> {{$product->name}} ${{$product->price}} <br />
                {{$product->description}}</p>
            <button class="btn btn-danger btn-lg"><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        @endforeach
        @else
        <div class="text-center" style="height: 200px">
            <h1 class="bg-black text-danger py-2"> No hay productos en stock en esta categoría</h1>
        </div>
        @endif
    </div>
    --}}
</section>
</body>
@endsection