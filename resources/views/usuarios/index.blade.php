@extends('layouts.layout')
@section('titulo')
{{$titulo}}
@stop
@section('content')
@if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<a class="btn btn-success add" href="{{ route('usuarios.add')}}">Agregar Usuario</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Fecha nacimiento</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuarios as $usuario )
            <tr>
                <th scope="row">{{ $usuario->nombre }}</th>
                <td>{{ $usuario->apellidos }}</td>
                <td>{{ $usuario->fecha_nacimiento }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->correo }}</td>
                <td><a class="btn btn-outline-warning" href="{{ route('usuarios.edit' , ['id' => $usuario->id])}}">Editar</a></td>
                <td><a class="btn btn-outline-danger" href="{{ route('usuarios.delete' , ['id' => $usuario->id])}}">Eliminar</a></td>
              </tr>
        @endforeach
        </tbody>
      </table>
@stop
