<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("formularioProduto", "ProdutoController@mostraFormulario");

Route::get("listaProduto", "ProdutoController@mostraProdutos");

Route::get("formularioAlterarProduto/{id}", "ProdutoController@formularioAlterar");

Route::post("atualizarProduto/{id}", "ProdutoController@atualizarProduto");


Route::get("excluirProduto/{id}", "ProdutoController@excluirProduto");


Route::post("cadastrarProduto", "ProdutoController@cadastrarProduto");

Auth::routes();

Route::get('/home', 'HomeController@index');
