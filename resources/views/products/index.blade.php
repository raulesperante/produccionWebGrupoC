@extends('layouts.app-admin')

@section('title', 'Lista de products')

@section('resources')
<style>
    body {
        background-color: #e0524d
    }

    .page-link.active,
    .active>.page-link {
        z-index: 3;
        color: var(--bs-pagination-active-color);
        background-color: #e0524d;
        border-color: #e0524d;
    }

    .page-link,
    .page-link:hover {
        color: orangered
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: 1px solid #a33d39">
                <div style="background: #21b1ca; color: white" class="card-header">{{ __('Productos') }}</div>

                <div class="card-body">

                    @if (Session('status'))
                    <div class="alert alert-success"> {{ Session('status') }} </div>
                    @endif

                    <div class="mb-3">
                        <a href="{{ route('products.create') }}" class="btn button-primary">
                            <i class="fa-solid fa-plus"></i>
                            Agregar producto
                        </a>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th> Id </th>
                                <th> Nombre </th>
                                <th> Descripción </th>
                                <th> Precio </th>
                                <th> Cantidad </th>
                                <th> Categoría </th>
                                <th> Acciones </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($products->count() > 0)
                            @foreach ($products as $product)
                            <tr>
                                <td> {{ $product->id }} </td>
                                <td> {{ $product->name }} </td>
                                <td> {{ $product->description }} </td>
                                <td> {{ $product->price }} </td>
                                <td> {{ $product->amount }} </td>
                                <td> {{ $product->category->name }} </td>
                                <td>
                                    <ul style="padding-left: 1px">
                                        <li class="mb-3 no-list-style  ">
                                            <a href="{{ route('products.show', $product) }}" class="btn button-primary">
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