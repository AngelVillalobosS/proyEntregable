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
        $categories = categories::orderby('id_categorie', 'asc') -> get();
        $contents = contents::orderby('id_content', 'asc') -> get();
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
            'name_per' => 'required|regex:/^[A-Z][A-Z,a-z, ,ó,é,ü,ñ,Ñ]+$/',
            'a_pa' => 'required|regex:/^[A-Z][A-Z,a-z, ,ó,é,ü,ñ,Ñ]+$/',
            'a_ma' => 'required|regex:/^[A-Z][A-Z,a-z, ,ó,é,ü,ñ,Ñ]+$/',
            'stars' => 'required',
            'requests' => 'required',
            'genre' => 'required',
            'studio' => 'required'
        ]);

        $anime_survey = new anime_survey;
        $anime_survey -> name_per = $request -> name_per;
        $anime_survey -> a_pa = $request -> a_pa;
        $anime_survey -> a_ma = $request -> a_ma;
        $anime_survey -> year = 2024;
        $anime_survey -> sexo = $request -> sexo;
        $anime_survey -> happiness = $request -> happiness;
        $anime_survey -> stars = $request -> stars;
        $anime_survey -> requests = $request -> requests;
        $anime_survey -> id_content = $request -> id_content;
        $anime_survey -> id_categorie = $request -> id_categorie;
        $anime_survey -> genre = $request -> genre;
        $anime_survey -> studio = $request -> studio;
        $anime_survey -> suggestions = $request -> suggestions;
        $anime_survey -> dev_comments = $request -> dev_comments;
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
                        WHERE a.stars > 0");

        return view ('solicitudes.reporteEA')
		->with('surveys',$surveys);
	}
}
