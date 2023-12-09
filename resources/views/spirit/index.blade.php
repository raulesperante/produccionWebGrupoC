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
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="assets/images/buzo1.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> BUZO DE FRISA (PHOENIX) $6.800,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="assets/images/buzo1.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> BUZO DE FRISA (PHOENIX) $6.800,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="assets/images/buzo1.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> BUZO DE FRISA (PHOENIX) $6.800,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="assets/images/buzo1.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> BUZO DE FRISA (PHOENIX) $6.800,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="assets/images/buzo1.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> BUZO DE FRISA (PHOENIX) $6.800,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="assets/images/buzo1.jpeg" alt="Galeria flash back">
            <p class="bg-black text-center"> BUZO DE FRISA (PHOENIX) $6.800,00</p>
            <button class="btn btn-danger btn-lg" disabled><i class="fa-solid fa-cart-shopping"></i> COMPRAR
            </button>
        </div>







        
    </div>
  </section>
@endsection
  

