<?php

namespace App\Http\Controllers;

use App\Models\Episodio;
use Illuminate\Http\Request;

class EpisodioController extends Controller
{
    public function verEpisodio($id)
    {
        $episodio = Episodio::findOrFail($id);

        return view('verEpisodio', compact('episodio'));
    }
}
