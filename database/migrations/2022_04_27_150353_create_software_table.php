<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('programas_id')->nullable();
            $table->string('TipoPrograma')->nullable();
            $table->text('Descripcion')->nullable();
            $table->string('Licencia')->nullable();
            $table->string('LlaveActivacion')->nullable();
            $table->string('vigencia',20)->nullable();
            $table->string('f_inicio',10)->nullable();
            $table->string('f_fin',10)->nullable();
            $table->bigInteger('cpus_id');
            $table->string('FecInstalacion',10)->nullable();
            $table->string('TecnicoInstalador')->nullable();
            $table->string('Usuario')->nullable();
            $table->string('n_orden',20)->nullable();
            $table->string('n_papeleta',10)->nullable();

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
        Schema::dropIfExists('software');
    }
}
