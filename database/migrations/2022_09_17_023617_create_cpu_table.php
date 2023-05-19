<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('edificios_id')->nullable();
            $table->bigInteger('direccions_id')->nullable();
            $table->bigInteger('subdireccions_id')->nullable();
            $table->bigInteger('coordinacions_id')->nullable();
            $table->bigInteger('tipo_equipos_id');
            $table->bigInteger('marcas_id')->nullable();
            $table->bigInteger('modelos_id')->nullable();
            $table->bigInteger('procesadors_id')->nullable();
            $table->string('n_bancos',1)->nullable();

            $table->bigInteger('tipo_frecuencia1')->nullable();
            $table->integer('tamanio_ram1')->nullable();
            $table->string('medida1')->nullable();

            $table->bigInteger('tipo_frecuencia2')->nullable();
            $table->integer('tamanio_ram2')->nullable();
            $table->string('medida2')->nullable();

            $table->bigInteger('tipo_frecuencia3')->nullable();
            $table->integer('tamanio_ram3')->nullable();
            $table->string('medida3')->nullable();

            $table->bigInteger('tipo_frecuencia4')->nullable();
            $table->integer('tamanio_ram4')->nullable();
            $table->string('medida4')->nullable();
            $table->string('total_ram',10)->nullable();

            $table->string('n_discos',1)->nullable();
            $table->bigInteger('tipo_tamanio1')->nullable();
            $table->integer('tamanio_hdd1')->nullable();

            $table->bigInteger('tipo_tamanio2')->nullable();
            $table->integer('tamanio_hdd2')->nullable();

            $table->bigInteger('tipo_tamanio3')->nullable();
            $table->integer('tamanio_hdd3')->nullable();

            $table->bigInteger('tipo_tamanio4')->nullable();
            $table->integer('tamanio_hdd4')->nullable();

            $table->string('nombre_host')->nullable();
            $table->string('ethernet_mac')->nullable();
            $table->string('ethernet_ip')->nullable();
            $table->string('ethernet_speed')->nullable();
            $table->string('wifi_mac')->nullable();
            $table->string('wifi_ip')->nullable();
            $table->string('tipo_red')->nullable();
            $table->string('user_admin')->nullable();
            $table->string('pass_admin')->nullable();
            $table->string('usuario')->nullable();
            $table->string('inventaro')->nullable();
            $table->string('serie')->nullable();
            $table->bigInteger('condicions_id')->nullable();
            $table->bigInteger('windows_id')->nullable();
            $table->bigInteger('sos_id')->nullable();
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
        Schema::dropIfExists('cpus');
    }
}
