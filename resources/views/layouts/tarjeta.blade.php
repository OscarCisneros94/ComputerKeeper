@extends('layouts.plantilla')

@section('tarjetas')
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            En proceso</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><p>{{ $countEnproceso }}</p></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-spinner fa-spin fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Abierto</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><p>{{ $countAbierto }}</p></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-ticket-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Cerrado
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><p>{{ $countCerrado }}</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total
                            </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><p>{{ $totalServicios }}</p></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Servicios Abierto/En proceso</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No. de servicio</th>
                        <th>Fecha</th>
                        <th>Código de Equipo</th>
                        <th>Técnico</th>
                        <th>Estado</th>
                        <th>Clasificación</th>
                        <th>Categoría</th>
                        <th>Detalle del servicio</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($servicio as $ser)
                        <tr>
                            <td>{{ $ser->Cod_Servicio }}</td>
                            <td>{{ $ser->Fecha }}</td>
                            <td>{{ $ser->Cod_Equipo }}</td>
                            <td>{{ $ser->tecnico ? $ser->tecnico->Nombres . ' ' . $ser->tecnico->Apellidos : 'Sin técnico asignado' }}</td>
                            <td>{{ $ser->Estado }}</td>
                            <td>{{ $ser->Clasificacion }}</td>
                            <td>{{ $ser->Categoria }}</td>
                            <td>{{ $ser->Detalle_Servicio }}</td>
                            <td>{{ $ser->Observaciones }}</td>
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
