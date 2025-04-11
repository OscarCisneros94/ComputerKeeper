@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Editar equipo</h4>
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
{{ Form::open(array('action' => array('App\Http\Controllers\EquipoController@update', $equipo->Cod_Equipo), 'method' => 'patch')) }}
<div class="row g-3">
<div class="col-md-4">
        <label for="Cod_Cliente" class="form-label">Código del cliente</label>
        <input type="text" name="Cod_Cliente" id="Cod_Cliente" class="form-control" value="{{$equipo->Cod_Cliente}}">
    </div>
    <div class="col-md-4">
        <label for="Nombre_Equipo" class="form-label">Nombre del equipo</label>
        <input type="text" name="Nombre_Equipo" id="Nombre_Equipo" class="form-control" value="{{$equipo->Nombre_Equipo}}">
    </div>
    <div class="col-md-4">
        <label for="Marca" class="form-label">Marca del equipo</label>
        <input type="text" name="Marca" id="Marca" class="form-control" value="{{$equipo->Marca}}">
    </div>
    <div class="col-4">
        <label for="Modelo" class="form-label">Modelo del equipo</label>
        <input type="text" name="Modelo" id="Modelo" class="form-control" value="{{$equipo->Modelo}}">
    </div>
    <div class="col-6">
        <label for="Serial" class="form-label">Serial</label>
        <input type="text" name="Serial" id="Serial" class="form-control" value="{{$equipo->Serial}}">
    </div>
    <div class="col-md-6">
        <label for="Nombre_SO" class="form-label">Sistema operativo</label>
        <input type="text" name="Nombre_SO" id="Nombre_SO" class="form-control" value="{{$equipo->Nombre_SO}}">
    </div>
    <div class="col-md-6">
        <label for="Procesador" class="form-label">Procesador</label>
        <input type="text" name="Procesador" id="Procesador" class="form-control" value="{{$equipo->Procesador}}">
    </div>
    <div class="col-md-6">
        <label for="Memoria_RAM" class="form-label">Memoria RAM</label>
        <input type="text" name="Memoria_RAM" id="Memoria_RAM" class="form-control" value="{{$equipo->Memoria_RAM}}">
    </div>
    <div class="col-md-6">
        <label for="Tipo_Sistema" class="form-label">Tipo de sistemas</label>
        <select name="Tipo_Sistema" id="Tipo_Sistema" class="form-control">
            <option value="32 bits" {{ $equipo->Tipo_Sistema === '32 bits' ? 'selected' : '' }}>32 bits</option>
            <option value="64 bits" {{ $equipo->Tipo_Sistema === '64 bits' ? 'selected' : '' }}>64 bits</option>
        </select>
    </div>    
    <div class="col-md-6">
        <label for="Tipo_Equipo" class="form-label">Tipo de equipo</label>
        <select name="Tipo_Equipo" id="Tipo_Equipo" class="form-control">
            <option value="Portátil" {{ $equipo->Tipo_Equipo === 'Portátil' ? 'selected' : '' }}>Portátil</option>
            <option value="Escritorio" {{ $equipo->Tipo_Equipo === 'Escritorio' ? 'selected' : '' }}>Escritorio</option>
        </select>
    </div>    
    <div class="col-12 mt-3">
        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
        <a class="btn btn-info" type="reset" href="{{url('equipo')}}"><span class="glyphicon glyphicon-home"></span> Regresar</a>
    </div>
</div>
{{ Form::close() }}
@endsection
