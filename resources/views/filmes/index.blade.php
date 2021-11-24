@extends('layout')

@section('title')
Lista de Filmes
@endsection('title')

@section('content')
<a href="/filmes/criar" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    <?php foreach ($filmes as $filme) : ?>
        <li class="list-group-item"><?= $filme; ?></li>
    <?php endforeach; ?>
</ul>
@endsection('content')
