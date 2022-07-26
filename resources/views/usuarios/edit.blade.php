@extends('layouts.layout')
@section('titulo')
{{$titulo}}
@stop
@section('content')
    <h1>{{$titulo}}</h1>
    <form method="POST" action="{{ route('usuarios.editsave')}}">
        {{ csrf_field()}}
        <input type="hidden" name="id" value="{{ $usuario[0]->id }}">
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="nombre" value="{{ $usuario[0]->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="Apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="Apellidos" name="apellidos" value="{{ $usuario[0]->apellidos }}" required>
        </div>
        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="Telefono" name="telefono" value="{{ $usuario[0]->telefono }}" required>
        </div>
        <div class="mb-3">
            <label for="Correo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="Correo" name="correo" value="{{ $usuario[0]->correo }}" required>
        </div>
        <div class="mb-3">
            <label for="FechaNacimineto" class="form-label">Fecha Nacimineto</label>
            <input type="date" class="form-control" name="fechanacimiento" id="FechaNacimineto" value="{{ $usuario[0]->fecha_nacimiento }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
        <a type="button" class="btn btn-danger" href="{{ route('usuarios.index')}}">Cancelar</a>
    </form>
@stop

