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
    <meta style="display: none" name="csrf-token" content="{{ csrf_token() }}">
    <div class="row" style="margin-bottom: 5em; margin-top: 5em;">
        <div id="thanks-page" class="card p-4 alert alert-success">
            <h1>¡Gracias por tu compra!</h1>
            <p>Hemos reservado tu pedido. Tienes 3 días para realizar el pago por los canales habilitados.
            </p>
            <p>
               ¡Cualquier duda no dudes en consultar!
            </p>
        </div>
    </div>
    </div>
    </div>
</section>
</body>
@endsection