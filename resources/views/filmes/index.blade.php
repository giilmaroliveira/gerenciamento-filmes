@extends('layout')

@section('title')
Lista de Filmes
@endsection('title')

@section('content')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<a href="/filmes/criar" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach ($filmes as $filme)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $filme->titulo }}

        <span class="d-flex">
            <a href="/filmes/{{ $filme->id }}" class="btn btn-info btn-sm mr-1">
                <i class="fas fa-edit mr-1"></i>
            </a>

            <form method="post" action="/filmes/{{ $filme->id }}" onsubmit="return confirm('Você tem certeza?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
        </span>
    </li>
    @endforeach
</ul>
@endsection('content')
