@extends('master')
@section('conteudo')
  <h1>Alterar</h1>
  <form action="/pizza/{{ $pizza->id }}" method="post">
    @csrf
    @method('put')
    Nome do Cliente: <input type="text" name="nome"
                value="{{ $pizza->nome }}"/>
    Sabor da Pizza: <input type="text" name="sabor"
                value="{{ $pizza->sabor }}"/>
    Valor: <input type="number" name="valor"
                value="{{ $pizza->valor }}"/>
    <input type="submit" value="Alterar" />
  </form>
@endsection
