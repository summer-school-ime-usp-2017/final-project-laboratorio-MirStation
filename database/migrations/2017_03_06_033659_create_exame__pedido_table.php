<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exame_pedido', function (Blueprint $table) {
 	    $table->unsignedInteger('exame_id');
	    $table->foreign('exame_id')->references('id')->on('exames');
	    $table->string('exame_nome');
	    $table->unsignedInteger('pedido_id');
	    $table->foreign('pedido_id')->references('id')->on('pedidos');
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
        Schema::dropIfExists('exame_pedido');
    }
}
