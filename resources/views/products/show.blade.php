@extends('layouts.app-admin')

@section('resources')
    <style>
        body{
            background-color: #e0524d;
        }
    </style>
@endsection



@section('title', $product->name)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border: 1px solid #a33d39">
                    <div class="card-header" style="background: #21b1ca; color: white">{{ $product->name }}</div>
                    <div class="card-body" style="min-height: 100px">
                       <b> {{ $product->description }} </b>
                    </div>
                    <div class="card-footer" style="background: #21b1ca">
                        <a href="{{ route('products.index') }}" class="btn button-primary"> Volver a productos </a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-success"> Editar </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button id="delete_record" type="submit" class="btn btn-danger"> Eliminar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite([
        'resources/js/admin/submit_delete_record.js', 
    ]);

@endsection