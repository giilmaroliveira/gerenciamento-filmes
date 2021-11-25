@extends('layout')

@section('title')
{{ $filme->titulo }} - Edição
@endsection('title')

@section('content')
<form method="post" action="/filmes/{{ $filme->id}}">
    @method('PUT')
    @include('filmes/form')
</form>
@endsection('content')
