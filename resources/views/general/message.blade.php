@extends('layouts.app-admin')

@section('title', 'Lista de products')

@section('resources')
<style>
    body {
        background-color: #e0524d
    }

    .page-link.active,
    .active>.page-link {
        z-index: 3;
        color: var(--bs-pagination-active-color);
        background-color: #e0524d;
        border-color: #e0524d;
    }

    .page-link,
    .page-link:hover {
        color:#e0524d;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: 1px solid #a33d39">
                <div style="background: rgb(124, 121, 121); color: black; font-weight: bold" class="card-header text-center">{{ __('ASUNTO') }}</div>
                <div style="background: rgb(203, 209, 209); color: black; font-weight: bold" class="card-header text-center">{{ __('Realizan envío a la Quiaca?') }}</div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p><b>De: example@example.com</b></p>
                        <p>20/07/2024 20:50</p>
                    </div>
                    <p><b>Nombre Apellido</b> de <b>Provincia País</b> dice: Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta cumque assumenda repudiandae inventore. Placeat beatae perspiciatis aliquid nihil distinctio velit excepturi, animi esse quibusdam consequuntur ipsa debitis consectetur soluta cupiditate.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card" style="border: 1px solid #a33d39">
                <div style="background: rgb(124, 121, 121); color: black; font-weight: bold" class="card-header text-center">{{ __('ASUNTO') }}</div>
                <div style="background: rgb(203, 209, 209); color: black; font-weight: bold" class="card-header text-center">{{ __('Realizan envío a la Quiaca?') }}</div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p><b>De: example@example.com</b></p>
                        <p>20/07/2024 20:50</p>
                    </div>
                    <p><b>Nombre Apellido</b> de <b>Provincia País</b> dice: Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta cumque assumenda repudiandae inventore. Placeat beatae perspiciatis aliquid nihil distinctio velit excepturi, animi esse quibusdam consequuntur ipsa debitis consectetur soluta cupiditate.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection