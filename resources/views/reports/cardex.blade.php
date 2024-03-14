<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .pdf-body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 40px;
            max-width: 800px; /* Limitar el ancho del contenido para que no sea demasiado ancho */
            margin-left: auto; /* Centrar el contenido horizontalmente */
            margin-right: auto;
            border: 3px solid #000000;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .pdf-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .pdf-image {
            max-width: 100px; /* Tamaño máximo de la imagen */
            height: auto;
            margin-right: 20px; /* Espacio entre la imagen y el texto */
        }
        .pdf-university {
            color: #4a5568;
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .pdf-titulos {
            color: #4a5568;
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .student-name {
            font-size: 1.25rem;
            color: #718096;
            text-align: center;
        }
    </style>
</head>
<body class="pdf-body">
    <div class="pdf-header">
        <img class="pdf-image" src="{{public_path('images/logo.jpg')}}" alt="" />
        <h1 class="pdf-university">UNIVERSIDAD TECNOLÓGICA DE CANCÚN</h1>
    </div>
    <h2 class="pdf-titulos">{{$title}}</h2>
    <div class="student-name">{{$student->name_student}}</div>
</body>
</html>
