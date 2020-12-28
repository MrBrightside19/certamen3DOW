<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArriendosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arriendos', function (Blueprint $table) {
            $table->integer('origen');
            $table->integer('destino');
            $table->date('fecha_origen');
            $table->date('fecha_destino');
            $table->unsignedBigInteger('auto_id');
            $table->unsignedBigInteger('cliente_id');
            
            $table->primary(['auto_id', 'cliente_id']);
            
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('auto_id')->references('id')->on('autos');
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
        Schema::dropIfExists('arriendos');
    }
}
