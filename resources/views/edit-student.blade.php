@extends('plantilla')

@section('titulo')
    Editar de estudiantes
@endsection

@section('pagina')
    Editar de estudiantes
@endsection

@section('contenido')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<form action="{{ route('estudiantes.update', $student->id) }}" method="POST" class="max-w-sm mx-auto">
    @csrf
    @method('put')

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name_student">
            Nombre del estudiante
        </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="text" name="name_student" placeholder="Nombre" value="{{ $student->name_students }}">
        @error('name_student')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex justify-center">
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit">Editar</button>
    </div>
</form>
@endsection


