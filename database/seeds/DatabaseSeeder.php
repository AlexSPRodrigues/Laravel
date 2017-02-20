<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Produto;



class DatabaseSeeder extends Seeder{
    public function run(){
		$this->call('ProdutoTableSeeder');
    }

}

class ProdutoTableSeeder extends Seeder{
	public function run(){
		Produto::create([
			'nome'=>'Tênis Nike', 
			'preco'=> 200,
			'quantidade' => 10, 
			'descricao' => 'Um tênis bonito',
		]);
	}
}