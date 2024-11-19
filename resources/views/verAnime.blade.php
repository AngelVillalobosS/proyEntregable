@extends('principal')
@section('contenido')

<h2>{{ $anime->titulo }}</h2>
<img src="{{ $anime->imagen }}" alt="Imagen de {{ $anime->titulo }}" class="img-fluid">
<p>{{ $anime->sinopsis }}</p>

<a href="#" class="btn btn-primary">Ver Episodios</a>

@endsection
