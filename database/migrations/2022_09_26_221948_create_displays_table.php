<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('displays', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('edificios_id')->nullable();
            $table->bigInteger('direccions_id')->nullable();
            $table->bigInteger('subdireccions_id')->nullable();
            $table->bigInteger('coordinacions_id')->nullable();
            $table->bigInteger('marcas_id')->nullable();
            $table->bigInteger('modelos_id')->nullable();
            $table->bigInteger('monitors_id')->nullable();
            $table->string('usuario')->nullable();
            $table->string('inventaro')->nullable();
            $table->string('serie')->nullable();
            $table->string('tamanio')->nullable();
            $table->bigInteger('condicions_id')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('estatus')->nullable();
            $table->string('fecha_compra')->nullable();

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
        Schema::dropIfExists('displays');
    }
}
