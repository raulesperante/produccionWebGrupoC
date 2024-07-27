@extends('layouts.app-admin')

@section('title', 'Dashboard')

@section('resources')
<style>
    body {
        background-color: #e0524d
    }

    .custom-icon {
        font-size: 10rem;
        color: white;
        /* Puedes ajustar el tamaño según tus necesidades */
    }

    .btn-circle {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15rem;
        /* Ancho y alto del botón */
        height: 15rem;
        border-radius: 50%;
        /* Hace que el botón sea redondo */
        background-color: #212529;
        /* Color de fondo del botón */
        color: white;
        /* Color del icono */
        text-decoration: none;
        /* Elimina el subrayado del enlace */
        transition: background-color 0.3s;
        /* Transición suave para el cambio de color */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.8);
        /* Sombra redonda */
    }

    .btn-circle:hover {
        background-color: #414448;
        /* Color de fondo al pasar el ratón */
    }

    .container-button {
        display: flex;
        justify-content: space-around;
        gap: 1rem;
        margin-top: 3rem;
    }

    .title{
        font-size: 2.5rem;
        font-weight: 600;
    }

    .name{
        text-align: center;
        font-weight: bold;
        margin-top: 1rem;
        font-size: 1.5rem
    }

</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-button">
                <div>
                    <a href="{{ route('products.index') }}" class="btn-circle">
                        <i class="bi bi-card-checklist custom-icon mt-3"></i>
                    </a>
                    <div class="name">Listar Productos</div>
                </div>
                <div>
                    <a href="{{ route('products.create') }}" class="btn-circle">
                        <i class="bi bi-database-fill-add custom-icon mt-3"></i>
                    </a>
                    <div class="name">Agregar Productos</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection