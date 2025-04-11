@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Editar servicio</h4>
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
{{ Form::open(array('action' => array('App\Http\Controllers\ServicioController@update', $servicio->Cod_Servicio), 'method' => 'patch')) }}
<div class="row g-3">
    <div class="col-md-4">
        <label for="Fecha" class="form-label">Fecha de servicio</label>
        <input type="date" name="Fecha" id="Fecha" class="form-control" value="{{$servicio->Fecha}}">
    </div>    
    <div class="col-md-4">
        <label for="Cod_Equipo" class="form-label">Código de equipo</label>
        <input type="text" name="Cod_Equipo" id="Cod_Equipo" class="form-control" value="{{$servicio->Cod_Equipo}}">
    </div>
    <div class="col-md-4">
        <label for="Cod_Tecnico" class="form-label">Técnico</label>
        <select name="Cod_Tecnico" id="Cod_Tecnico" class="form-control">
            <option value="">Seleccionar Técnico</option>
            @foreach ($tecnicos as $tecnico)
                <option value="{{ $tecnico->Cod_Tecnico }}" {{ $servicio->Cod_Tecnico == $tecnico->Cod_Tecnico ? 'selected' : '' }}>
                    {{ $tecnico->Nombres }} {{ $tecnico->Apellidos }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-4">
        <label for="Estado" class="form-label">Estado</label>
        <select name="Estado" id="Estado" class="form-control">
            <option value="En proceso" {{ $servicio->Estado === 'En proceso' ? 'selected' : '' }}>En proceso</option>
            <option value="Abierto" {{ $servicio->Estado === 'Abierto' ? 'selected' : '' }}>Abierto</option>
            <option value="Cerrado" {{ $servicio->Estado === 'Cerrado' ? 'selected' : '' }}>Cerrado</option>
        </select>
    </div>
    <div class="col-6">
        <label for="Clasificacion" class="form-label">Clasificación</label>
        <select name="Clasificacion" id="Clasificacion" class="form-control">
            <option value="Incidente" {{ $servicio->Clasificacion === 'Incidente' ? 'selected' : '' }}>Incidente</option>
            <option value="Requerimiento" {{ $servicio->Clasificacion === 'Requerimiento' ? 'selected' : '' }}>Requerimiento</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="Categoria" class="form-label">Categoría</label>
        <input type="text" name="Categoria" id="Categoria" class="form-control" value="{{$servicio->Categoria}}">
    </div>   
    <div class="col-md-6">
        <label for="Detalle_Servicio" class="form-label">Detalle del servicio</label>
        <input type="text" name="Detalle_Servicio" id="Detalle_Servicio" class="form-control" value="{{$servicio->Detalle_Servicio}}">
    </div>
    <div class="col-md-6">
        <label for="Observaciones" class="form-label">Observaciones</label>
        <input type="text" name="Observaciones" id="Observaciones" class="form-control" value="{{$servicio->Observaciones}}">
    </div>
    <div class="col-12 mt-3">
        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
        <a class="btn btn-info ml-2" type="reset" href="{{url('servicio')}}"><span class="glyphicon glyphicon-home"></span> Regresar</a>
    </div>
    
</div>
{{ Form::close() }}
@endsection
