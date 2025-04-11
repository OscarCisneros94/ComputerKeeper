@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Ingresar equipo</h4>
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
{!! Form::open(array('url' => 'equipo', 'method' => 'POST', 'autocomplete' => 'off')) !!}
{{ Form::token() }}
<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Cod_Cliente">Código del cliente</label>
            <input type="text" name="Cod_Cliente" id="Cod_Cliente" class="form-control" placeholder="Digite el codigo del cliente">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombre_Equipo">Nombre del equipo</label>
            <input type="text" name="Nombre_Equipo" id="Nombre_equipo" class="form-control" placeholder="Digite el nombre del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Marca">Marca del equipo</label>
            <input type="text" name="Marca" id="Marca" class="form-control" placeholder="Digite la marca del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Modelo">Modelo</label>
            <input type="text" name="Modelo" id="Modelo" class="form-control" placeholder="Digite el modelo del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Serial">Serial</label>
            <input type="text" name="Serial" id="Serial" class="form-control" placeholder="Digite el serial del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombre_SO">Sistema operativo</label>
            <input type="text" name="Nombre_SO" id="Nombre_SO" class="form-control" placeholder="Digite el nombre del sistema operativo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Procesador">Procesador</label>
            <input type="text" name="Procesador" id="Procesador" class="form-control" placeholder="Digite el procesador del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Memoria_RAM">Memoria RAM</label>
            <input type="text" name="Memoria_RAM" id="Memoria_RAM" class="form-control" placeholder="Digite la memoria RAM del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Tipo_Sistema">Tipo de sistemas</label>
            <select name="Tipo_Sistema" id="Tipo_Sistema" class="form-control">
                <option value="">Seleccione el tipo de sistemas</option>
                <option value="32 bits">32 bits</option>
                <option value="64 bits">64 bits</option>
            </select>
        </div>
    </div>    
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Tipo_Equipo">Tipo de equipo</label>
            <select name="Tipo_Equipo" id="Tipo_Equipo" class="form-control">
                <option value="">Seleccione el tipo de equipo</option>
                <option value="Portátil">Portátil</option>
                <option value="Escritorio">Escritorio</option>
            </select>
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
        <a class="btn btn-info" href="{{ url('equipo') }}">
            <span class="glyphicon glyphicon-home"></span> Regresar
        </a>
    </div>
</div>
{!! Form::close() !!}
@endsection
