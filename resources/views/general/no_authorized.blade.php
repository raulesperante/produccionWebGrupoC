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
        <div id="no-authorized-page" class="card p-4 alert alert-danger">
            <h1>No autorizado</h1>
            @if(isset($msg))
            <p>{{$msg}}</p>
            @else
            <p>No tienes permiso para ver esta página</p>
            @endif
        </div>
    </div>
    </div>
    </div>
</section>
</body>
@endsection