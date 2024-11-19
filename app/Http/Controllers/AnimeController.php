<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class AnimeController extends Controller
{
    public function index()
    {
        $animesTendencia = Anime::where('tendencia', true)->get();
        $ultimosEpisodios = Anime::latest('fecha_estreno')->limit(10)->get();
        $categoriasPopulares = Categoria::has('animes')->take(5)->get();
        $recomendaciones = Anime::inRandomOrder()->take(4)->get();

        return view('home', compact('animesTendencia', 'ultimosEpisodios', 'categoriasPopulares', 'recomendaciones'));
    }

    public function buscar(Request $request)
    {
        $search = $request->input('search');
        $animes = Anime::where('titulo', 'like', "%{$search}%")->get();

        return view('buscar', compact('animes', 'search'));
    }

    public function verAnime($id)
    {
        $anime = Anime::findOrFail($id);

        return view('verAnime', compact('anime'));
    }
}
