<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index(Request $request)
    {
        // echo $request->url();
        // var_dump($request->query());
        // exit();
        $filmes = [
            'Velozes e Furiosos 9',
            'Matrix',
            'Vingadores',
            'Outro Filme',
            'Outro Filme 2'
        ];

        // return view('filmes.index', ['filmes' => $filmes]);
        return view('filmes.index', compact('filmes'));
    }

    public function create()
    {
        return view('filmes.create');
    }
}
