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
<div class="container" style="margin-top: -2em">
    <div class="row justify-content-center mt-4">
        @if ($messages->count() == 0)
        <h1 class="text-center">No tienes mensajes</h1>
        @else
        @foreach ($messages as $message)
        <div class="col-md-8 mt-4">
            <div class="card" style="border: 1px solid #a33d39">
                <div style="background: rgb(124, 121, 121); color: black; font-weight: bold" class="card-header text-center">Mensaje N° {{$message->id}}</div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p><b>De: {{$message->email}}</b></p>
                        <p>{{$message->created_at->format('d-m-Y H:i')}}</p>
                    </div>
                    <p><b>{{$message->name}} {{$message->surname}}</b> de <b>{{$message->province}} {{$message->country}}</b> dice: {{$message->message}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $messages->links() }}
    </div>
    @endif

</div>

@endsection