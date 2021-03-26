@extends('layouts.plantilla')

@section('title', 'Contacyanos')

@section('content')  
    <h1>Dejanos tu mensaje</h1>
    
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label>Nombre <br> <input type="text" name="name"></label>
        <br>
        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label>E-mail <br><input type="email" name="correo"></label>
        <br>
        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label>Mensaje <br> <textarea name="mensaje" rows="7"></textarea></label>
        <br>
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <button type="submit">Enviar Mensaje</button>
    </form>

    @if (session('info'))
        <script> alert("{{ session('info') }}"); </script>
    @endif
    
@endsection