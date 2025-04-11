@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Editar cliente empresarial</h4>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
{{ Form::open(array('action' => array('App\Http\Controllers\ClienteEmpresarialController@update', $cliente_empresarial->Cod_Cliente_Emp), 'method' => 'patch')) }}
<div class="row g-3">
    <div class="col-md-4">
        <label for="Cod_Empresa" class="form-label">Código de empresa</label>
        <input type="text" name="Cod_Empresa" id="Cod_Empresa" class="form-control" value="{{$cliente_empresarial->Cod_Empresa}}">
    </div>
    <div class="col-md-4">
        <label for="Nombres" class="form-label">Nombres</label>
        <input type="text" name="Nombres" id="Nombres" class="form-control" value="{{$cliente_empresarial->Nombres}}">
    </div>
    <div class="col-4">
        <label for="Apellidos" class="form-label">Apellidos</label>
        <input type="text" name="Apellidos" id="Apellidos" class="form-control" value="{{$cliente_empresarial->Apellidos}}">
    </div>
    <div class="col-6">
        <label for="Cargo" class="form-label">Cargo</label>
        <input type="text" name="Cargo" id="Cargo" class="form-control" value="{{$cliente_empresarial->Cargo}}">
    </div>
    <div class="col-md-6">
        <label for="Direccion" class="form-label">Dirección</label>
        <input type="text" name="Direccion" id="Direccion" class="form-control" value="{{$cliente_empresarial->Direccion}}">
    </div>
    <div class="col-md-4">
        <label for="Telefono" class="form-label">Teléfono</label>
        <input type="text" name="Telefono" id="Telefono" class="form-control" value="{{$cliente_empresarial->Telefono}}">
    </div>
    <div class="col-md-4">
        <label for="Num_CC" class="form-label">No. de cédula</label>
        <input type="text" name="Num_CC" id="Num_CC" class="form-control" value="{{$cliente_empresarial->Num_CC}}">
    </div>
    <div class="col-md-4">
        <label for="Fecha_Nac" class="form-label">Fecha de nacimiento</label>
        <input type="date" name="Fecha_Nac" id="Fecha_Nac" class="form-control" value="{{$cliente_empresarial->Fecha_Nac}}">
    </div>    
    <div class="col-md-4">
        <label for="Correo" class="form-label">Correo electrónico</label>
        <input type="text" name="Correo" id="Correo" class="form-control" value="{{$cliente_empresarial->Correo}}">
    </div>
    <div class="col-12 mt-3">
        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
        <a class="btn btn-info" type="reset" href="{{url('cliente_empresarial')}}"><span class="glyphicon glyphicon-home"></span> Regresar</a>
    </div>
</div>
{{ Form::close() }}
@endsection
