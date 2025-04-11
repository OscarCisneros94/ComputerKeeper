@extends('layouts.plantilla')
@section('contenido')
    <div class="row">
        @can('CrearEquipo')
        <div class="col-md-9">
            <a href="{{ url('equipo/create') }}" class="pull-right">
                <button class="btn btn-success">Crear equipo</button> </a>
        </div>
        @endcan
    </div>
    <div class="mb-3"></div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de equipos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Código del equipo</th>
                            <th>Nombre del equipo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Serial</th>
                            <th>Sistema operativo</th>
                            <th>Procesador</th>
                            <th>Memoria RAM</th>
                            <th>Tipo de sistemas</th>
                            <th>Tipo de equipo</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipo as $equ)
                            <tr>
                                <td>{{ $equ->Cod_Equipo }}</td>
                                <td>{{ $equ->Nombre_Equipo }}</td>
                                <td>{{ $equ->Marca }}</td>
                                <td>{{ $equ->Modelo }}</td>
                                <td>{{ $equ->Serial }}</td>
                                <td>{{ $equ->Nombre_SO }}</td>
                                <td>{{ $equ->Procesador }}</td>
                                <td>{{ $equ->Memoria_RAM }}</td>
                                <td>{{ $equ->Tipo_Sistema }}</td>
                                <td>{{ $equ->Tipo_Equipo }}</td>
                                <td>
                                    @can('EditarEquipo')
                                    <a
                                        href="{{ URL::action('App\Http\Controllers\EquipoController@edit', $equ->Cod_Equipo) }}"><button
                                            class="btn btn-primary">Actualizar</button>
                                    </a>
                                    @endcan
                                    @can('EliminarEquipo')
                                    <a href="" data-bs-toggle="modal"
                                        data-bs-target="#modal-delete-{{ $equ->Cod_Equipo }}">
                                        <button type="button" class="btn btn-danger"> Eliminar</button>
                                    </a>
                                    @endcan
                                </td>
                            </tr>
                            @include('equipo.modal')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
