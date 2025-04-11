@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-9">
        @can('CrearCliente')
        <a href="{{ url('cliente_particular/create') }}" class="pull-right">
            <button class="btn btn-success">Crear cliente particular</button> 
        </a>
        @endcan
    </div>
</div>
<div class="mb-3"></div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabla de clientes particulares</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Código de cliente</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>No. de cédula</th>
                        <th>Fecha de nacimiento</th>
                        <th>Correo electrónico</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cliente_particular as $clp)
                        <tr>
                            <td>{{ $clp->Cod_Cliente_Part }}</td>
                            <td>{{ $clp->Nombres }}</td>
                            <td>{{ $clp->Apellidos }}</td>
                            <td>{{ $clp->Direccion }}</td>
                            <td>{{ $clp->Telefono }}</td>
                            <td>{{ $clp->Num_CC }}</td>
                            <td>{{ $clp->Fecha_Nac }}</td>
                            <td>{{ $clp->Correo }}</td>
                            <td>
                                @can('EditarCliente')
                                <a href="{{ URL::action('App\Http\Controllers\ClienteParticularController@edit', $clp->Cod_Cliente_Part) }}"><button class="btn btn-primary">Actualizar</button></a>
                                @endcan
                                @can('EliminarCliente')
                                <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $clp->Cod_Cliente_Part }}">
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </a>
                                @endcan
                            </td>
                        </tr>
                        @include('cliente_particular.modal')
                    @endforeach

                    
                </tbody>
            </table>
        </div>
    </div>
@endsection

