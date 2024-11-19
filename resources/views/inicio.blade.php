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
    <title>AnimeHub - Inicio</title>
</head>
<body>

    <!-- Encabezado -->
    <header class="text-center my-4">
        <h1>AnimeHub</h1>
        <p>Explora el mejor contenido de anime en un solo lugar</p>
        <form action="" method="GET" class="d-flex justify-content-center">
            <input type="text" name="search" placeholder="Buscar anime..." class="form-control w-50" />
            <button type="submit" class="btn btn-primary ml-2">Buscar</button>
        </form>
    </header>

    <!-- Banner Principal -->
    <section class="banner bg-dark text-white text-center p-4">
        <h2>¡Descubre los últimos lanzamientos!</h2>
        <button class="btn btn-outline-success">Ver los más recientes</button>
    </section>

    <!-- Sección de Anime en Tendencia -->
    <section class="container my-5">
        <h3 class="text-center">Anime en Tendencia</h3>
        <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/animes/dandadan.jpg') }}" alt="Anime 'Dandadan'">
                        <div class="card-body">
                            <h5 class="card-title">Dandadan</h5>
                            <p class="card-text">Calificación: 5 estrellas</p>
                            <a href="" class="btn btn-primary">Ver Ahora</a>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!-- Últimos Episodios -->
    <section class="container my-5">
        <h3 class="text-center">Últimos Episodios</h3>
        <div class="list-group">
                <a href="Episodio 01" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Dandadan - Episodio 6</h5>
                        <small>07-11-2024</small>
                    </div>
                    <p class="mb-1">La búsqueda de la esfera dorada perdida lleva a Momo, Okarun y Turbo Baba por toda la escuela. Encuentran a Aira, que tiene la esfera y ahora ve cosas invisibles. La Acrobática Sarasa aparece y Momo y Okarun deciden proteger a Aira juntos.</p>
                </a>
        </div><br>
        <div class="list-group">
                <a href="Episodio 01" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Re:Zero 3rd Season - Episodio 6</h5>
                        <small>06-11-2024</small>
                    </div>
                    <p class="mb-1">Sumergido en una corriente, Subaru perdió el conocimiento y despertó con Priscilla y Liliana. Capella transmitió una exigencia del culto de la bruja. Subaru gritó que no tenían tiempo para ser derrotados y Priscilla prometió una recompensa. Luego, apareció una bestia monstruosa.</p>
                </a>
        </div>
    </section>

    <!-- Categorías Populares -->
    <section class="container my-5">
        <h3 class="text-center">Categorías Populares</h3>
        <div class="d-flex justify-content-around">
                <a href="" class="btn btn-outline-secondary">
                    Deportes
                </a>
                <a href="" class="btn btn-outline-secondary">
                    Isekai
                </a>
                <a href="" class="btn btn-outline-secondary">
                    Magia
                </a>
                <a href="" class="btn btn-outline-secondary">
                    Romance
                </a>
                <a href="" class="btn btn-outline-secondary">
                    Shonen
                </a>
                
        </div>
    </section>

    <!-- Recomendaciones para el Usuario -->
    <section class="container my-5">
        <h3 class="text-center">Recomendaciones para Ti</h3>
        <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/animes/reZero3.webp') }}" class="card-img-top" alt="Imagen no encontrada">
                        <div class="card-body">
                            <h5 class="card-title">Re:Zero kara Hajimeru Isekai Seikatsu 3rd Season</h5>
                            <a href="" class="btn btn-primary">Ver Ahora</a>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!-- Pie de Página -->
    <footer class="text-center bg-dark text-white py-3 mt-5">
        <p>&copy; 2024 AnimeHub. Todos los derechos reservados.</p>
        <a href="#">Política de Privacidad</a> | <a href="#">Términos de Servicio</a> | <a href="#">Contacto</a>
        <div class="social-icons mt-2">
            <a href="#"><img src="/path/to/icon_facebook.png" alt="Facebook" class="social-icon"></a>
            <a href="#"><img src="/path/to/icon_instagram.png" alt="Instagram" class="social-icon"></a>
            <a href="#"><img src="/path/to/icon_twitter.png" alt="Twitter" class="social-icon"></a>
        </div>
    </footer>

</body>
</html>
@stop
