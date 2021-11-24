@extends('layout')

@section('title')
Adicionar Filme
@endsection('title')

@section('content')
<form method="post">
    <div class="form-group">
        <label for="titulo" class="">Título</label>
        <input type="text" class="form-control" name="titulo" id="titulo" />
    </div>

    <div class="form-group">
        <label for="genero" class="">Gênero</label>
        <input type="text" class="form-control" name="genero" id="genero" />
    </div>

    <div class="form-group">
        <label for="diretor" class="">Diretor</label>
        <input type="text" class="form-control" name="diretor" id="diretor" />
    </div>

    <div class="form-group">
        <label for="duracao" class="">Duração</label>
        <input type="text" class="form-control" name="duracao" id="duracao" />
    </div>

    <button class="btn btn-primary">Salvar</button>
</form>
@endsection('content')
