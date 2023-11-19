@extends('layouts.app-admin')

@section('title', 'Nuevo producto')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Productos') }}</div>

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
                                <input type="text" class="form-control" id="price" name="price"
                                    placeholder="Ingrese el precio del producto" value="{{ old('price') }}">
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label"> Precio </label>
                                <input type="text" class="form-control" id="amount" name="amount"
                                    placeholder="Ingrese la cantidad producto" value="{{ old('amount') }}">
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