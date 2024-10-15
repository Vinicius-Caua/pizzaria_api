@extends('master')
@section('conteudo')
    <h1>Alterar Pizza</h1>
    <form action="/pizza/{{ $pizza->id }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nome">Nome do Cliente:</label>
            <input type="text" name="nome" value="{{ $pizza->nome }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="sabor">Sabor da Pizza:</label>
            <input type="text" name="sabor" value="{{ $pizza->sabor }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" name="valor" value="{{ $pizza->valor }}" class="form-control">
        </div>
        <input type="submit" value="Alterar" class="btn btn-primary">
    </form>
@endsection
