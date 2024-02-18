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

    <div class="text-center pt-5">
        <h1 id="titulopag"> COLECCION STREET FLASH BACK</h1>
        <p id="subtitulo"> [ Espiritu Fueguino ]</p>
    </div>

    <div class="row">


        @if ($products->count() > 0)

        @foreach ($products as $product)
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src={{ asset("storage/" . $product->image )}} alt="{{ $product->name}}">
            <p class="bg-black text-center py-2"> {{$product->name}} ${{$product->price}} <br />
                {{$product->description}}</p>
            <button class="btn btn-danger btn-lg"><i class="fa-solid fa-cart-shopping"></i> AGREGAR AL CARRITO
            </button>
        </div>
        @endforeach
        @else
        <div class="text-center" style="height: 200px">
            <h1 class="bg-black text-danger py-2"> No hay productos en stock en esta categoría</h1>
        </div>
        @endif

    </div>
</section>
</body>
@endsection