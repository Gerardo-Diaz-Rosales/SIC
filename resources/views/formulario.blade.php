@extends('plantilla')

@section("titulo")
    Agregar estudiantes
@endsection

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<form action="{{ route('formulario.store') }}" method="POST" class="container">
    <h3>Registro de Estudiantes</h3>
    @csrf
    <label>Nombre:</label>
    @error('name_student')
    <div style="color:red; font-style: italic;">{{$message}}</div>
    @enderror
    <input type="text" name="name_student" placeholder="Ingresar nombre" value="{{ old('name_student') }}">

    <label>Apellido:</label>
    @error('lastname_student')
    <div style="color:red; font-style: italic;">{{$message}}</div>
    @enderror
    <input type="text" name="lastname_student" placeholder="Ingresar apellido" value="{{ old('lastname_student') }}">

    <label>Matricula:</label>
    @error('id_student')
    <div style="color:red; font-style: italic;">{{$message}}</div>
    @enderror
    <input type="text" name="id_student" placeholder="Ingresar matricula" value="{{ old('id_student') }}">

    <label>Fecha de nacimiento:</label>
    @error('birthday')
    <div style="color:red; font-style: italic;">{{$message}}</div>
    @enderror
    <input type="date" name="birthday" placeholder="Ingresar fecha de nacimiento" value="{{ old('birthday') }}">

    <label>Comentario:</label>
    @error('comments')
    <div style="color:red; font-style: italic;">{{$message}}</div>
    @enderror
    <textarea name="comments" placeholder="Ingresar comentario">{{ old('comments') }}</textarea>

    <button type="submit" class="shadow-drop-center">Registrar</button>
    <input type="reset" class="boton">
</form>
@endsection
