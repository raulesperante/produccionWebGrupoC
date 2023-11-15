@extends('layouts.app-admin')

@section('title', 'Tarea nueva')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tareas') }}</div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('tareas.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label"> Nombre </label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Ingrese el nombre de la tarea" value="{{ old('nombre') }}">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label"> Descripción </label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"
                                    placeholder="Ingrese la descripción de la tarea">{{ old('descripcion') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success"> Agregar </button>
                            <a href="{{ route('tareas.index') }}" class="btn btn-danger"> Cancelar </a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection