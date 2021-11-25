@csrf
<div class="form-group">
    <label for="titulo" class="">Título</label>
    <input value="{{ @$filme->titulo }}" type="text" class="form-control" name="titulo" id="titulo" />
</div>

<div class="form-group">
    <label for="genero" class="">Gênero</label>
    <input value="{{ @$filme->genero }}" type="text" class="form-control" name="genero" id="genero" />
</div>

<div class="form-group">
    <label for="diretor" class="">Diretor</label>
    <input value="{{ @$filme->diretor }}" type="text" class="form-control" name="diretor" id="diretor" />
</div>

<div class="form-group">
    <label for="duracao" class="">Duração</label>
    <input value="{{ @$filme->duracao }}" type="text" class="form-control" name="duracao" id="duracao" />
</div>

<button class="btn btn-primary">Salvar</button>
