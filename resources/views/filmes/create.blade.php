@extends('layout')

@section('title')
Adicionar Filme
@endsection('title')

@section('content')
<form method="post">
    @include('filmes/form')
</form>
@endsection('content')
