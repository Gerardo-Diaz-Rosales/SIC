@extends('plantilla')

@section('titulo')
    Asignaturas
@endsection

@section('pagina')
    Asignaturas
@endsection

@section('contenido')
    <style>


        h1,
        h2 {
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .subject {
            margin-top: 20px;
            background-color: #e0e0e0;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
    </head>

    <body class="asignatura-body">
        <div class="asignatura-container">
            <h1>Lista de Unidades</h1>
            <ul>
                @foreach ($units as $unit)
                    <li>{{ $units->unit_name }}</li>
                @endforeach
            </ul>
            <div class="asignatura-subject">
                <h2>Nombre de la asignatura</h2>
                @foreach ($Subject as $subject)
                    <p>{{ $subject->subject_name }}</p>
                @endforeach
            </div>
        </div>
    </body>
@endsection
