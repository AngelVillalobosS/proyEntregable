@extends('principal')
@section('contenido')

<h2>Resultados de búsqueda para "{{ $search }}"</h2>

<div class="row">
    @foreach($animes as $anime)
        <div class="col-md-3">
            <div class="card">
                <img src="{{ $anime->imagen }}" class="card-img-top" alt="Imagen de {{ $anime->titulo }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $anime->titulo }}</h5>
                    <a href="{{ route('verAnime', ['id' => $anime->id]) }}" class="btn btn-primary">Ver Ahora</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
