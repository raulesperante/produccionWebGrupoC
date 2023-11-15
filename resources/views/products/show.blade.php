@extends('layouts.app-admin')

@section('title', $tarea->nombre)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $tarea->nombre }}</div>
                    <div class="card-body" style="min-height: 500px">
                        {{ $tarea->descripcion }}
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('tareas.index') }}" class="btn btn-primary"> Volver a tareas </a>
                        <a href="{{ route('tareas.edit', $tarea) }}" class="btn btn-success"> Editar </a>
                        <form action="{{ route('tareas.destroy', $tarea) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button id="btn_eliminar_mascota" type="submit" class="btn btn-danger"> Eliminar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite([
        'resources/js/admin/submit_eliminar_mascota.js', 
    ]);

@endsection
