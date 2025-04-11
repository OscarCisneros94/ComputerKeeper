@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Ingresar empresa</h4>
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
{!! Form::open(array('url' => 'empresa', 'method' => 'POST', 'autocomplete' => 'off')) !!}
{{ Form::token() }}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombre">Nombre de empresa</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Digite el nombre de la empresa">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Num_NIT">Número de NIT</label>
            <input type="text" name="Num_NIT" id="Num_NIT" class="form-control" placeholder="Digite el número de NIT">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Direccion">Dirección</label>
            <input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Digite dirección">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Telefono">Teléfono</label>
            <input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Digite Teléfono">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Fecha_Contrato">Fecha de contrato</label>
            <input type="date" name="Fecha_Contrato" id="Fecha_Contrato" class="form-control">
        </div>
    </div>    
</div>
<div class="row mt-3">
    <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit">
            <span class="glyphicon glyphicon-ok"></span> Guardar
        </button>
        <button class="btn btn-danger" type="reset">
            <span class="glyphicon glyphicon-remove"></span> Vaciar campos
        </button>
        <a class="btn btn-info" type="reset" href="{{ url('empresa') }}">
            <span class="glyphicon glyphicon-home"></span> Regresar
        </a>
    </div>
</div>
{!! Form::close() !!}
@endsection
