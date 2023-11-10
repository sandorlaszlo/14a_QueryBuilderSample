<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FilmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/actors', [ActorController::class, 'actors']);
Route::get('/actors/name/{firstname}', [ActorController::class, 'actorsByFirstname']);
Route::get('/actors/count', [ActorController::class, 'actorsCount']);
Route::get('/actors/count/all', [ActorController::class, 'actorsCountbyName']);
Route::get('/actors/count/name/{firstname}', [ActorController::class, 'actorsCountByFirstname']);
Route::get('/actors/name/{firstname}/{lastname}', [ActorController::class, 'actorsByName']);

Route::get('countries/v4', [CountryController::class, 'countriesInV4']);

Route::get('films/cost/{min}/{max}', [FilmController::class, 'filmsByCost']);
