<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function verCategoria($id)
    {
        $categoria = Categoria::findOrFail($id);
        $animes = $categoria->animes;

        return view('verCategoria', compact('categoria', 'animes'));
    }
}
