<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Request;
use App\Produto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB; // Classe para comunicação com o BD


class ProdutoController extends Controller{
   
   public function mostraFormulario(){
   		return view("produto/formularioProduto");
   }

   public function cadastrarProduto(){

   		$dadosProduto = Request::except('_token', 'btCadastrarProduto');
   		$produto = new Produto($dadosProduto);
   		$produto->save();
   		return redirect("formularioProduto");
   }

   public function mostraProdutos(){
   		$produtos = Produto::all();
   		return view("produto/listaProduto", ['produtos'=>$produtos]);
   }

}
