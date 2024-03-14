@extends('plantilla')

@section('titulo')
    Detalles estudiantes
@endsection

@section('pagina')
    Detalles de estudiante
@endsection

@section('contenido')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="p-4 border rounded-md bg-white shadow-md">
    <p class="mb-4">Nombre del estudiante: <b>{{$student->name_students}}</b></p>
    <p>Matrícula del estudiante: <b>{{$student->id_students}}</b></p>
</div>
@endsection


