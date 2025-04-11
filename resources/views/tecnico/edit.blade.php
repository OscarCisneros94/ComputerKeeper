@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Editar técnico</h4>
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
{{ Form::open(array('action' => array('App\Http\Controllers\TecnicoController@update', $tecnico->Cod_Tecnico), 'method' => 'patch')) }}
{{ Form::token() }}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombres">Nombres</label>
            <input type="text" name="Nombres" id="Nombres" class="form-control" value="{{ $tecnico->Nombres }}" placeholder="Digite el nombre">
        </div>
    </div>
    <!-- Otros campos de entrada de datos con valores iniciales -->  
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombres">Apellidos</label>
            <input type="text" name="Apellidos" id="Apellidos" class="form-control" value="{{ $tecnico->Apellidos }}" placeholder="Digite los apellidos">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombres">Dirección</label>
            <input type="text" name="Direccion" id="Direccion" class="form-control" value="{{ $tecnico->Direccion }}" placeholder="Digite la dirección">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombres">Teléfono</label>
            <input type="text" name="Telefono" id="Telefono" class="form-control" value="{{ $tecnico->Telefono }}" placeholder="Digite el teléfono">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ $tecnico->email }}" placeholder="Digite correo">
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar cambios</button>
            <a class="btn btn-info" href="{{ url('tecnico') }}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection
