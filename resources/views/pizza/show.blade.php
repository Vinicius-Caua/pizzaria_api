@extends('master')
@section('conteudo')
    <h1>Excluindo Pizza</h1>
    <dl>
        <dt>Nome do Cliente</dt>
        <dd>{{ $pizza->nome }}</dd>
        <dt>Sabor da Pizza</dt>
        <dd>{{ $pizza->sabor }}</dd>
        <dt>Valor</dt>
        <dd>{{ $pizza->valor }}</dd>
    </dl>
    <form action="/pizza/{{ $pizza->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Confirmar</button>
    </form>
@endsection
