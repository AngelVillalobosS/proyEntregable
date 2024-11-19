<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\encuestaAnimeController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EpisodioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('principal',[encuestaAnimeController::class,'principal'])->name('principal');
Route::get('inicio',[encuestaAnimeController::class,'inicio'])->name('inicio');

Route::get('encuesta', [encuestaAnimeController::class, 'encuesta']) -> name('encuesta');
Route::post('enviarEncuesta', [encuestaAnimeController::class, 'enviarEncuesta']) -> name('enviarEncuesta');
Route::get('reporteEA',[encuestaAnimeController::class,'reporteEA'])->name('reporteEA');

Route::get('/', [AnimeController::class, 'index'])->name('home');
Route::get('/buscar', [AnimeController::class, 'buscar'])->name('buscarAnime');
Route::get('/anime/{id}', [AnimeController::class, 'verAnime'])->name('verAnime');
Route::get('/episodio/{id}', [EpisodioController::class, 'verEpisodio'])->name('verEpisodio');
Route::get('/categoria/{id}', [CategoriaController::class, 'verCategoria'])->name('verCategoria');
