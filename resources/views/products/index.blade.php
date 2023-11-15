@extends('layouts.app-admin')

@section('title', 'Lista de tareas')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tareas') }}</div>

                    <div class="card-body">

                        @if (Session('status'))
                            <div class="alert alert-success"> {{ Session('status') }} </div>
                        @endif

                        <div class="mb-3">
                            <a href="{{ route('tareas.create') }}" class="btn btn-primary"> 
                                <i class="fa-solid fa-plus"></i>
                                Agregar mascota 
                            </a>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Nombre </th>
                                    <th> Descripción </th>
                                    <th> Resuelta </th>
                                    <th> Acciones </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($tareas->count() > 0)
                                    @foreach ($tareas as $tarea)
                                        <tr>
                                            <td> {{ $tarea->nombre }} </td>
                                            <td> {{ $tarea->descripcion }} </td>
                                            @if($tarea->resuelta == 0)
                                                <td>NO</td>
                                            @else
                                                <td>SI</td>
                                            @endif
                                            <td> 
                                                <ul>
                                                    <li class="mb-3">
                                                        <a href="{{ route('tareas.show', $tarea) }}" class="btn btn-primary"> 
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
                                        <td colspan="5" class="text-center"> No hay tareas creadas </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                        {{-- $tareas->links() --}}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection