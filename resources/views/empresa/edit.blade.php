@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Editar empresa</h4>
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
{{ Form::open(array('action' => array('App\Http\Controllers\EmpresaController@update', $empresa->Cod_Empresa), 'method' => 'patch')) }}
<div class="row g-3">
    <div class="col-md-4">
        <label for="Nombre" class="form-label">Nombre de empresa</label>
        <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{$empresa->Nombre}}">
    </div>
    <div class="col-md-4">
        <label for="Num_NIT" class="form-label">Número de NIT</label>
        <input type="text" name="Num_NIT" id="Num_NIT" class="form-control" value="{{$empresa->Num_NIT}}">
    </div>
    <div class="col-4">
        <label for="Direccion" class="form-label">Dirección</label>
        <input type="text" name="Direccion" id="Direccion" class="form-control" value="{{$empresa->Direccion}}">
    </div>
    <div class="col-6">
        <label for="Telefono" class="form-label">Teléfono</label>
        <input type="text" name="Telefono" id="Telefono" class="form-control" value="{{$empresa->Telefono}}">
    </div>
    <div class="col-md-6">
        <label for="Fecha_Contrato" class="form-label">Fecha de contrato</label>
        <input type="date" name="Fecha_Contrato" id="Fecha_Contrato" class="form-control" value="{{$empresa->Fecha_Contrato}}">
    </div>    
    <div class="col-12 mt-3">
        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
        <a class="btn btn-info" type="reset" href="{{url('empresa')}}"><span class="glyphicon glyphicon-home"></span> Regresar</a>
    </div>
</div>
{{ Form::close() }}
@endsection
