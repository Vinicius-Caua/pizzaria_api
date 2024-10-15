@extends('master')

@section('conteudo')
<h1>Pizzas</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Cliente</th>
      <th scope="col">Sabor Pizza</th>
      <th scope="col">Valor</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pizzas as $pizza)
      <tr>
        <td>{{ $pizza->nome }}</td>
        <td>{{ $pizza->sabor }}</td>
        <td>{{ $pizza->valor }}</td>
        <td>
          <a href="/pizza/{{ $pizza->id }}" class="btn btn-danger">Excluir</a>
          <a href="/pizza/{{ $pizza->id }}/edit" class="btn btn-warning">Alterar</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

<a href="/pizza/create" class="btn btn-primary">Novo</a>
<p></p>

@endsection
