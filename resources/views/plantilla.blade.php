<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <!-- Incluye Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Estilos adicionales */
        body {
            height: 100vh;
        }

        .Header_Institucional {
            background-color: rgb(0, 171, 132);
            color: #fff;
            display: flex;
            justify-content: space-between; /* Distribuye los elementos a los lados */
            padding: 0 20px; /* Añade un poco de espacio a los lados */
            align-items: center; /* Centra verticalmente */
        }

        .Footer_Institucional {
            background-color: rgb(0, 171, 132);
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <header class="Header_Institucional py-4">
        <h1 class="text-3xl">@yield('pagina')</h1>
        <div>
            <!-- Botón para dirigirse a la ruta de estudiantes -->
            <a href="{{ route('estudiantes.index') }}" class="boton bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 mb-2 inline-block">Ir a Estudiantes</a>

            <!-- Botón para dirigirse a la ruta de asignaturas -->
            <a href="{{ route('asignaturas.index') }}" class="boton bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 mb-2 inline-block">Ir a Asignaturas</a>

            <!-- Botón para dirigirse al dashboard -->
            <a href="{{ route('dashboard') }}" class="boton bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 mb-2 inline-block">Dashboard</a>
        </div>
    </header>
    <main class="Main_Instirucional mt-8 px-4">
        @yield('contenido')<!---Indica las partes dinamicas. En este caso es titulo --->
    </main>
    <footer class="Footer_Institucional">
        Todos los derechos reservados
    </footer>
</body>

</html>
