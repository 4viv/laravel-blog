@extends('layouts.plantilla')

@section('title', 'Curso '.$curso->name)

@section('content')  
    <h1>Bienvenidos al curso: {{$curso->name}} </h1> 

<a href="{{route('cursos.index')}}">Volver a cursos</a>
<br>
<a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>

    <p><strong>{{$curso->categoria}}</strong></p>

    <p>{{$curso->descripcion}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar Registro</button>
    </form>
@endsection