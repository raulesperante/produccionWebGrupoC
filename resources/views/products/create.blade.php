@extends('layouts.app-admin')

@section('resources')
    <style>
        body{
            background-color: #e0524d;

        }
    </style>
@endsection



@section('title', 'Nuevo producto')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div style="background: #21b1ca; color: white" class="card-header">{{ __('Productos') }}</div>

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

                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label"> Nombre </label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Ingrese el nombre del producto" value="{{ old('name') }}">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label"> Descripción </label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="3"
                                    placeholder="Ingrese la descripción del producto">{{ old('description') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label"> Precio </label>
                                <input type="number" step="0.1" class="form-control" id="price" name="price"
                                    placeholder="Ingrese el precio del producto" value="{{ old('price') }}">
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label"> Cantidad </label>
                                <input type="number" class="form-control" id="amount" name="amount"
                                    placeholder="Ingrese la cantidad producto" value="{{ old('amount') }}">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label"> Imagen </label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="category_id" class="form-label"> Categoría </label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="1"> Por favor seleccione la categoría del producto </option>
                                    @foreach ($categories as $cat)
                                        <option @selected( old('category_id') == $cat->id ) value="{{ $cat->id }}"> {{ $cat->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success"> Agregar </button>
                            <a href="{{ route('products.index') }}" class="btn btn-danger"> Cancelar </a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection