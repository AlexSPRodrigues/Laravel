<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProdutos extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 255);
            $table->integer('preco');
            $table->integer('quantidade');
            $table->string('descricao', 255);
            $table->timestamps();
        });       
    }

    public function down()
    {
        Schema::drop('produtos');
    }
}
