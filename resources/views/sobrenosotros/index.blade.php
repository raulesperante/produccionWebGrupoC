@extends('layouts.app-client');

@section('resources')
@vite([
'resources/css/sobrenosotros.css',
])

@endsection

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Sobre Nosotros</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="/assets/images/logoEmpresa.jpg" class="img-fluid" alt="Company Image">
        </div>
        <div class="col-md-6">
            <h2>¿Quiénes Somos?</h2>
            <p>Somos una empresa dedicada a la venta de ropa urbana, ofreciendo una variedad de estilos únicos y modernos para todas las edades.Creemos en la moda como una forma de expresión personal y nos esforzamos por ofrecer productos que resalten la individualidad de nuestros clientes.</p>
            <p>Nuestro compromiso es proporcionar ropa que no solo sea estilosa, sino también cómoda y de alta calidad. Trabajamos con diseñadores talentosos para crear colecciones que marcan tendencia y que son accesibles para todos. Valoramos la creatividad, la diversidad y la sostenibilidad en cada prenda que ofrecemos.</p>
            <h2>Nuestra Historia</h2>
            <p>Desde nuestros inicios en 2010, hemos crecido para convertirnos en un referente en el mundo de la moda urbana. Nuestro compromiso con la calidad y la innovación nos ha permitido expandir nuestra presencia en el mercado y ganarnos la confianza de miles de clientes satisfechos. Cada temporada, presentamos nuevas colecciones inspiradas en las últimas tendencias y en el estilo de vida urbano.</p>
            <p>Además, nos enorgullece colaborar con artistas y diseñadores locales para crear piezas exclusivas que no se encuentran en ningún otro lugar. Nuestra misión es seguir ofreciendo productos de alta calidad, con un enfoque en la sostenibilidad y el comercio justo. Creemos que la moda puede ser una fuerza para el bien, y nos esforzamos por hacer una diferencia positiva en la industria.</p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <img src="/assets/images/maxim-shklyaev-vXwx6yTAUEU-unsplash.jpg" class="card-img-top" alt="Mission Image">
                <div class="card-body">
                    <h5 class="card-title">Nuestra Misión</h5>
                    <p class="card-text">Proveer ropa de alta calidad que permita a nuestros clientes expresarse con estilo y comodidad.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="/assets/images/tan-kaninthanond-tBVEqWFfRbw-unsplash.jpg" class="card-img-top" alt="Vision Image">
                <div class="card-body">
                    <h5 class="card-title">Nuestra Visión</h5>
                    <p class="card-text">Ser la marca líder en moda urbana a nivel nacional e internacional, reconocida por su innovación y calidad.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="/assets/images/muhammad-ravel-QNu1ZfVQ8lg-unsplash (1).jpg" class="card-img-top" alt="Values Image">
                <div class="card-body">
                    <h5 class="card-title">Nuestros Valores</h5>
                    <p class="card-text">Innovación, Calidad, Compromiso y Sostenibilidad.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
