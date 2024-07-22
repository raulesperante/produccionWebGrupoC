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
        <div id="no-authorized-page" class="card p-4 alert {{$alertType}}">
            <h1>{{$title}}</h1>
            <p>{{$msg}}</p>
        </div>
    </div>
    </div>
    </div>
</section>
</body>
@endsection