@extends('layouts.app-client');

@section('resources')
    <style>
        body{
            background-image: url("{{asset('/assets/images/fondookspirit.jpg')}}");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
@endsection


@section('content')
  <section id="galeria1" class="container">

    <div class="text-center pt-5">
        <h1 id="titulopag">COLECCION STREET SPIRIT</h1>
        <p id="subtitulo"> [ Espiritu Fueguino ] </p>

    </div>
    <div class="row">

        @if ($products ->count() > 0)

        @foreach ($products as $product)
        <div class="col-lg-4 col-md-6 col-sm-12">
            <form action="{{ route('cart.store', $product) }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <img src={{ asset("storage/" . $product->image )}} alt="{{ $product->name}}">
            <p class="bg-black text-center py-2"> {{$product->name}} ${{$product->price}} <br />
                {{$product->description}}</p>
            <button type="submit" class="btn btn-danger btn-lg"><i class="fa-solid fa-cart-shopping"></i> AGREGAR AL CARRITO
            </button>
            </form>
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
  

