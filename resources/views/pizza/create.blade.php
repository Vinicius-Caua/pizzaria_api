@extends('master')
@section('conteudo')
<form action="/pizza" method="post">
    @csrf
    Nome do Cliente: <input type="text" name="nome" />
    Sabor da Pizza: <input type="text" name="sabor" />
    Valor: <input type="number" name="valor" />
    <input type="submit" value="Inserir" />
</form>
@endsection
