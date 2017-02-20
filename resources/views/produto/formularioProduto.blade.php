@extends('layouts.master')

@section('title', 'Formulário para Cadastro de Produtos')

@section("conteudo")

	<form method="POST" action="{{ url("cadastrarProduto") }}">

		{{ csrf_field() }}

		<div class="form-group">
			<label>Nome do Produto: </label>	
			<input type="text" name="nome" class="form-control">
		</div>
		
		<div class="form-group">
			<label>Preço do Produto: </label>	
			<input type="number" name="preco" class="form-control">
		</div>

		<div class="form-group">
			<label>Quantidade do Produto: </label>	
			<input type="number" name="quantidade" class="form-control">
		</div>
		
		<div class="form-group">
			<label>Descrião do Produto: </label>
			<input type="text" name="descricao" class="form-control">	
		</div>
		
		<button type="submit" name="btCadastrarProduto" class="btn btn-primary">Cadastrar Produto</button>

		<button type="submit" name="btLimparProduto" class="btn btn-danger">Limpar Dados</button>
		

	</form>

@stop