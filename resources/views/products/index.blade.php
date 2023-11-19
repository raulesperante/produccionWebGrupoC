@extends('layouts.app-admin')

@section('title', 'Lista de products')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Productos') }}</div>

                    <div class="card-body">

                        @if (Session('status'))
                            <div class="alert alert-success"> {{ Session('status') }} </div>
                        @endif

                        <div class="mb-3">
                            <a href="{{ route('products.create') }}" class="btn btn-primary"> 
                                <i class="fa-solid fa-plus"></i>
                                Agregar producto 
                            </a>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Nombre </th>
                                    <th> Descripción </th>
                                    <th> Precio </th>
                                    <th> Cantidad </th>
                                    <th> Acciones </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($products->count() > 0)
                                    @foreach ($products as $product)
                                        <tr>
                                            <td> {{ $product->name }} </td>
                                            <td> {{ $product->description }} </td>
                                            <td> {{ $product->price }} </td>
                                            <td> {{ $product->amount }} </td>
                                            <td> 
                                                <ul>
                                                    <li class="mb-3">
                                                        <!-- La ruta debe ser products.show -->
                                                        <a href="{{ route('products.index', $product) }}" class="btn btn-primary"> 
                                                            <i class="fa-solid fa-eye"></i>
                                                            Ingresar 
                                                        </a>
                                                    </li>
                                                </ul>                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center"> No hay productos creados </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                        {{ $products->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection