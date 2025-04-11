@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Ingresar cliente particular</h4>
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
{!! Form::open(array('url' => 'cliente_particular', 'method' => 'POST', 'autocomplete' => 'off')) !!}
{{ Form::token() }}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombres">Nombres</label>
            <input type="text" name="Nombres" id="Nombres" class="form-control" placeholder="Digite el nombre">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Apellidos">Apellidos</label>
            <input type="text" name="Apellidos" id="Apellidos" class="form-control" placeholder="Digite apellidos">
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
            <input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Digite teléfono">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Num_CC">No. de cédula</label>
            <input type="text" name="Num_CC" id="Num_CC" class="form-control" placeholder="Digite numero de cédula">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Fecha_Nac">Fecha de nacimiento</label>
            <input type="date" name="Fecha_Nac" id="Fecha_Nac" class="form-control">
        </div>
    </div>    
       <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Correo">Correo electrónico</label>
            <input type="text" name="Correo" id="Correo" class="form-control" placeholder="Digite correo electrónico">
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
        <a class="btn btn-info" type="reset" href="{{ url('cliente_particular') }}">
            <span class="glyphicon glyphicon-home"></span> Regresar
        </a>
    </div>
</div>
{!! Form::close() !!}
@endsection
