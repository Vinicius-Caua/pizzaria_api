@extends('master')
@section('conteudo')
    <h1>Criar Pizza</h1>
    <form action="/pizza" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Cliente:</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="sabor">Sabor da Pizza:</label>
            <input type="text" name="sabor" class="form-control">
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" name="valor" class="form-control">
        </div>
        <input type="submit" value="Inserir" class="btn btn-primary">
    </form>
@endsection
