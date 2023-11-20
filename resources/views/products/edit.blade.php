@extends('layouts.app-admin')

@section('title', 'Editar producto')

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

                        <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label"> Nombre </label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Ingrese el nombre del producto" value="{{$product->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label"> Descripción </label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="3"
                                    placeholder="Ingrese la descripción del producto">{{ $product->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label"> Precio </label>
                                <input type="number" step="0.1" class="form-control" id="price" name="price"
                                    placeholder="Ingrese el precio del producto" value="{{ $product->price }}">
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label"> Cantidad </label>
                                <input type="number" class="form-control" id="amount" name="amount"
                                    placeholder="Ingrese la cantidad producto" value="{{ $product->amount }}">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label"> Imagen </label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="mb-3">
                                <img src="" alt="">
                                    <br />
                                    <img width=200 id="imgshow" src="{{ asset('storage/' . $product->image) }}" alt="Descripción de la imagen">

                            </div>
                            <div class="mb-3">
                                <label for="category_id" class="form-label"> Categoría </label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value=""> Por favor seleccione la categoría del producto </option>
                                    @foreach ($categories as $cat)
                                        <option @selected( $product->category_id == $cat->id ) value="{{ $cat->id }}"> {{ $cat->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success"> Actualizar </button>
                            <a href="{{ route('products.index') }}" class="btn btn-danger"> Cancelar </a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
document.addEventListener('DOMContentLoaded', function () {
    var imgload = document.getElementById('image');
    var imgshow = document.getElementById('imgshow');

    imgload.addEventListener('change', function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imgshow.setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
});

</script>