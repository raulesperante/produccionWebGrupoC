@extends('layouts.app-admin')

@section('title', 'Editar ' . $tarea->nombre)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $tarea->nombre }}</div>

                    <div class="card-body">

                        <form action="{{ route('tareas.update', $tarea) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nombre" class="form-label"> Nombre </label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Ingrese el nombre de la tarea" value="{{ $tarea->nombre }}">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label"> Descripción </label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"
                                    placeholder="Ingrese la descripción del producto">{{ $tarea->descripcion }}</textarea>
                            </div>
                            <div class="mb-3 form-check form-switch">
                                <input class="form-check-input" id="resuelta" type="checkbox" name="resuelta" value="{{$tarea->resuelta}}" @checked($tarea->resuelta)>
                                <label class="form-check-label" for="resuelta">Resuelta</label>

                            </div>
                            <button type="submit" class="btn btn-success"> Modificar </button>
                            <a href="{{ route('tareas.index') }}" class="btn btn-danger"> Cancelar </a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection