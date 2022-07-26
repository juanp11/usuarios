@extends('layouts.layout')
@section('titulo')
{{$titulo}}
@stop
@section('content')
<div class="form-add">
    <h1 class="titulo">{{$titulo}}</h1>
    <form method="POST" action="{{ route('usuarios.save')}}">
        {{ csrf_field()}}
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="Apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="Apellidos" name="apellidos" required>
        </div>
        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="Telefono" name="telefono" required>
        </div>
        <div class="mb-3">
            <label for="Correo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="Correo" name="correo" required>
        </div>
        <div class="mb-3">
            <label for="FechaNacimineto" class="form-label">Fecha Nacimineto</label>
            <input type="date" class="form-control" name="fechanacimiento" id="FechaNacimineto" required>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
        <a type="button" class="btn btn-danger" href="{{ route('usuarios.index')}}">Cancelar</a>
    </form>
</div>
@stop

