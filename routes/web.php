<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {});

Route::get('/filmes', [FilmesController::class, 'index'])
    ->name('listar_filmes');

Route::get('/filmes/criar', [FilmesController::class, 'create']);
Route::post('/filmes/criar', [FilmesController::class, 'store']);
Route::delete('/filmes/{id}', [FilmesController::class, 'destroy']);
Route::get('/filmes/{id}', [FilmesController::class, 'edit']);
Route::put('/filmes/{id}', [FilmesController::class, 'update']);
