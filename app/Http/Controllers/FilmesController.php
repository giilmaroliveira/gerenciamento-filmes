<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;
use App\Services\AtualizaFilme;

class FilmesController extends Controller
{
    public function index(Request $request)
    {
        // $filmes = Filme::query()->orderBy('titulo')->get();
        $filmes = Filme::select('id', 'titulo')->orderBy('titulo')->get();

        $mensagem = $request->session()->get('mensagem');

        return view('filmes.index', compact('filmes', 'mensagem'));
    }

    public function create()
    {
        return view('filmes.create');
    }

    public function edit(Request $request)
    {
        $filme = Filme::find($request->id);

        return view('filmes.edit', compact('filme'));
    }

    public function store(Request $request)
    {
        $filme = Filme::create([
            'titulo' => $request->titulo,
            'genero' => $request->genero,
            'diretor' => $request->diretor,
            'duracao' => $request->duracao
        ]);

        $filme->save();

        $request
            ->session()
            ->flash('mensagem', 'Filme inserido com sucesso.');


        return redirect()->route('listar_filmes');
    }

    public function destroy(Request $request)
    {
        $filme = Filme::find($request->id);

        $filme->delete();

        $request
            ->session()
            ->flash('mensagem', 'Filme excluído com sucesso.');


        return redirect()->route('listar_filmes');
    }

    public function update(
        Request $request,
        AtualizaFilme $atualizaFilme)
    {
        $filme = $atualizaFilme->atualizarFilme(
            $request->id,
            $request->titulo,
            $request->genero,
            $request->diretor,
            $request->duracao
        );

        $request
            ->session()
            ->flash('mensagem', "$filme->titulo editado com sucesso.");


        return redirect()->route('listar_filmes');
    }
}
