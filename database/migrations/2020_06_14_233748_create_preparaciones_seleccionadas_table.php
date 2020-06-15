<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreparacionesSeleccionadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preparaciones_seleccionadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_preparacion');
            $table->foreign('id_preparacion')
                ->references('id')
                ->on('preparaciones')
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
        Schema::dropIfExists('preparaciones_seleccionadas');
    }
}
