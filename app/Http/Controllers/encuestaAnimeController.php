<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anime_survey;
use App\Models\categories;
use App\Models\contents;

class encuestaAnimeController extends Controller
{
    public function principal()
    {
		return view ('principal');
	}
	public function inicio()
    {
		return view ('inicio');
	}

    public function encuesta(){
        $categories = categories::orderby('categorie', 'asc') -> get();
        $contents = contents::orderby('content', 'asc') -> get();
        $lastSurvey = \DB::select("SELECT id_survey + 1 AS idsur FROM anime_survey ORDER BY id_survey DESC LIMIT 1");
        
        //Operador ternario para evitar que el dato salga como nulo si es que no hay registros en la BD
        $nextId = !empty($lastSurvey) && isset($lastSurvey[0]->idsur) ? $lastSurvey[0]->idsur : 1;

        return view('Solicitudes.encuestaAnime')
            ->with('nextId', $nextId)
            ->with('contents', $contents)
            ->with('categories', $categories);
    }

    public function enviarEncuesta(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|regex:/^[A-Z][A-Z,a-z, ,ó,é,ü,ñ,Ñ]+$/',
            'a_pa' => 'required|regex:/^[A-Z][A-Z,a-z, ,ó,é,ü,ñ,Ñ]+$/',
            'a_ma' => 'required|regex:/^[A-Z][A-Z,a-z, ,ó,é,ü,ñ,Ñ]+$/',
            'calcontenido' => 'required',
            'solicitudes' => 'required',
            'genero' => 'required',
            'estudio' => 'required'
        ]);

        $anime_survey = new anime_survey;
        $anime_survey -> nombre = $request -> nombre;
        $anime_survey -> a_pa = $request -> a_pa;
        $anime_survey -> a_ma = $request -> a_ma;
        $anime_survey -> anio = $request -> year;
        $anime_survey -> sexo = $request -> sexo;
        $anime_survey -> encontentes = $request -> happiness;
        $anime_survey -> calcontenido = $request -> stars;
        $anime_survey -> solicitudes = $request -> requests;
        $anime_survey -> contenido = $request -> id_content;
        $anime_survey -> categoria = $request -> id_categorie;
        $anime_survey -> genero = $request -> genre;
        $anime_survey -> estudio = $request -> studio;
        $anime_survey -> sugrencias = $request -> suggestions;
        $anime_survey -> comentarios = $request -> dev_comments;
        $anime_survey -> save();
        
        return ("Se ha registrado con exito");
    }
    public function reporteEA()
	{
		$surveys = \DB::select("SELECT a.id_survey, a.name_per, a.a_pa, a.a_ma, a.year, a.sexo, a.happiness, 
                               a.stars, a.requests, c.content AS content_name, cat.categorie AS category_name, 
                               a.genre, a.studio, a.suggestions, a.dev_comments
                        FROM anime_survey AS a
                        INNER JOIN contents AS c ON c.id_content = a.id_content
                        INNER JOIN categories AS cat ON cat.id_categorie = a.id_categorie
                        WHERE a.happiness > 0");

        return view ('solicitudes.reporteEA')
		->with('surveys',$surveys);
	}
}
