@extends('master')
@section('conteudo')
    <a href="/pizza/create">Novo</a>
    @foreach($pizzas as $f)
      <p>
      {{ $f->nome }} -
      {{ $f->sabor }} -
      {{ $f->valor }}
      <a href="/pizza/{{ $f->id }}">Excluir</a>
      <a href="/pizza/{{ $f->id }}/edit">Alterar</a>
    </p>
    @endforeach
@endsection
