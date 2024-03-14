@extends('plantilla')

@section('titulo')
    Lista de estudiantes
@endsection

@section('pagina')
Lista de estudiantes
@endsection

@section('contenido')

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<h1 class="text-2xl font-bold mb-4"></h1>
@if (session()->has('notificacion'))
    <div class="text-green-600 mb-4">
        {{ session('notificacion') }}
    </div>
@endif
<table class="table-auto w-full">
    <thead>
        <tr>
            <th class="px-4 py-2 bg-gray-200">ID</th>
            <th class="px-4 py-2 bg-gray-200">Nombre</th>
            <th class="px-4 py-2 bg-gray-200">Apellido</th>
            <th class="px-4 py-2 bg-gray-200">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td class="border px-4 py-2">{{ $student->id_student }}</td>
                <td class="border px-4 py-2">{{ $student->name_student }}</td>
                <td class="border px-4 py-2">{{ $student->lastname_student }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('estudiantes.show', $student->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block mr-2">Detalles</a>
                    <a href="{{ route('estudiantes.edit', $student->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-block">Editar</a>
                    <a href="{{ route('print_cardex', $student->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-block">PDF</a>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $students->links() }}
@endsection
