<?php

namespace App\Services;

use App\Models\Filme;

class AtualizaFilme
{
    public function atualizarFilme($id, $titulo, $genero, $diretor, $duracao) : Filme
    {
        $filme = Filme::find($id);

        $filme->titulo = $titulo;
        $filme->genero = $genero;
        $filme->diretor = $diretor;
        $filme->duracao = $duracao;

        $filme->update();

        return $filme;
    }
}
