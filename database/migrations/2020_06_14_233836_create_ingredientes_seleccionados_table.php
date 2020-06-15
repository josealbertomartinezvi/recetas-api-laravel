<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientesSeleccionadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes_seleccionados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad')->default(0);
            $table->unsignedBigInteger('id_ingrediente');
            $table->foreign('id_ingrediente')
                ->references('id')
                ->on('ingredientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_preparacion_seleccionada');
            $table->foreign('id_preparacion_seleccionada')
                ->references('id')
                ->on('preparaciones_seleccionadas')
                ->onDelete('cascade')
                ->onUpdate('cascade');    
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
        Schema::dropIfExists('ingredientes_seleccionados');
    }
}
