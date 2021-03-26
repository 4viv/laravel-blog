@extends('layouts.plantilla')
@section('title', 'Editar Curso')

@section('content')  
    <h1>En esta pagina podras editar un curso</h1> 
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        {{-- Toquen csrf para enviar formulario --}}
        @csrf 
        @method('put')
        <label>Nombre: <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>Descripcion: <br>
            <textarea name="descripcion" rows="5" >{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>Categoria: <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Editar Curso</button>
    </form>
@endsection