<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantidade');
            $table->float('valorVenda', 8, 2);  
            $table->integer('cliente_id')->unsigned(); 
            $table->foreign('cliente_id')->references('id')->on('clientes'); // tabela com s no final
            $table->integer('roupa_id')->unsigned();
            $table->foreign('roupa_id')->references('id')->on('roupas');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venda');
    }
}
