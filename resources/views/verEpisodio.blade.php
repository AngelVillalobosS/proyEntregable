@extends('principal')
@section('contenido')

<h2>{{ $episodio->anime->titulo }} - Episodio {{ $episodio->numero }}</h2>
<p>{{ $episodio->sinopsis }}</p>

<video src="{{ $episodio->url_video }}" controls class="w-100"></video>

@endsection