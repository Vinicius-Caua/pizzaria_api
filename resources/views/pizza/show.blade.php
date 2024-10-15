@extends('master')
@section('conteudo')
<dl>
    <dt>Nome do Cliente</dt>
    <dd>{{ $pizza->nome }}</dd>
    <dt>Sabor da Pizza</dt>
    <dd>{{ $pizza->sabor }}</dd>
    <dt>Valor</dt>
    <dd>{{ $pizza->valor }}</dd>
</dl>
<form action="/pizza/{{$pizza->id}}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Confirmar" />
</form>
@endsection
