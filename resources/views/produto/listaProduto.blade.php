@extends('layouts.master')

@section('title', 'Lista de Produtos')

@section("conteudo")

	<table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Descrição</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($produtos as $produto)
      <tr>
        <td>{{$produto->nome}}</td>
        <td>{{$produto->preco}}</td>
        <td>{{$produto->quantidade}}</td>
        <td>{{$produto->descricao}}</td>
        <td>{{$produto->id}}</td>
        <td>{{$produto->id}}</td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

@stop