@extends('principal')
@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/ProyEntregable01/resources/css/vapor/bootstrap.css">
    <link rel="stylesheet" href="/ProyEntregable01/resources/css/vapor/bootstrap.min.css">
    <link rel="stylesheet" href="/ProyEntregable01/resources/css/disenio.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeMX | ReporteEA</title>
</head>
<body>
    
</body>
</html>
<h1>Reporte de Encuestas de Anime</h1>
<br>
<table border="1" class='table table-hover'>
    <tr class='table-dark'>
        <th scope='row'>ID</th scope='row'>
        <th scope='row'>Nombre</th scope='row'>
        <th scope='row'>Apellido Paterno</th scope='row'>
        <th scope='row'>Apellido Materno</th scope='row'>
        <th scope='row'>Año</th scope='row'>
        <th scope='row'>Género</th scope='row'>
        <th scope='row'>Felicidad</th scope='row'>
        <th scope='row'>Estrellas</th scope='row'>
        <th scope='row'>Solicitudes</th scope='row'>
        <th scope='row'>Contenido</th scope='row'>
        <th scope='row'>Categoría</th scope='row'>
        <th scope='row'>Género de Anime</th scope='row'>
        <th scope='row'>Estudio</th scope='row'>
        <th scope='row'>Sugerencias</th scope='row'>
        <th scope='row'>Comentarios del Desarrollador</th scope='row'>
    </tr>
    @foreach($surveys as $s)
    <tr class='table-default'>
        <td>{{$s->id_survey}}</td>
        <td>{{$s->name_per}}</td>
        <td>{{$s->a_pa}}</td>
        <td>{{$s->a_ma}}</td>
        <td>{{$s->year}}</td>
        <td>{{$s->sexo}}</td>
        <td>{{$s->happiness}}</td>
        <td>{{$s->stars}}</td>
        <td>{{$s->requests}}</td>
        <td>{{$s->content_name ?? 'N/A'}}</td>
        <td>{{$s->category_name ?? 'N/A'}}</td>
        <td>{{$s->genre}}</td>
        <td>{{$s->studio}}</td>
        <td>{{$s->suggestions}}</td>
        <td>{{$s->dev_comments}}</td>
    </tr>
    @endforeach
</table>
@stop
