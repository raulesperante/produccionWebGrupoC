@extends('layouts.app-admin')

@section('title', 'Editar ' . $product->name)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $product->name }}</div>

                    <div class="card-body">

                        <form action="{{ route('products.update', $product) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label"> Nombre </label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Ingrese el name de la tarea" value="{{ $product->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label"> Descripción </label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                                    placeholder="Ingrese la descripción del producto">{{ $product->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success"> Modificar </button>
                            <a href="{{ route('products.index') }}" class="btn btn-danger"> Cancelar </a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection