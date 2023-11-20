@extends('layouts.app-admin')

@section('title', $product->nombre)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $product->name }}</div>
                    <div class="card-body" style="min-height: 500px">
                        {{ $product->description }}
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('products.index') }}" class="btn btn-primary"> Volver a products </a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-success"> Editar </a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
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
