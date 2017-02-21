@extends('layouts.master')

@section('title', 'Formulário para Cadastro de Produtos')

@section("conteudo")

	<form method="POST" action="{{ url("atualizarProduto/".$produto->id) }}">
		
		{{ csrf_field() }}
		<!-- Token gerado a cada operação POST feita -->
		
			<div class="form-group">
				<label>Nome do Produto: </label>	
				<input type="text" name="nome" class="form-control" value="{{$produto->nome}}">
			</div>
			
			<div class="form-group">
				<label>Preço do Produto: </label>	
				<input type="number" name="preco" class="form-control" value="{{$produto->preco}}">
			</div>

			<div class="form-group">
				<label>Quantidade do Produto: </label>	
				<input type="number" name="quantidade" class="form-control" value="{{$produto->quantidade}}">
			</div>
			
			<div class="form-group">
				<label>Descrição do Produto: </label>
				<input type="text" name="descricao" class="form-control" value="{{$produto->descricao}}">	
			</div>
		<button type="submit" name="btAtualizarProduto" class="btn btn-primary">Atualizar Produto</button>

		<button type="submit" name="btLimparProduto" class="btn btn-danger">Limpar Dados</button>
		

	</form>

@stop