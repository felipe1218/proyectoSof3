<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_tour', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cantidad');
            $table->string('precio');
            $table->integer('id_tour')->unsigned();
            $table->foreign('id_tour')->references('id')->on('tour');
            $table->integer('id_tiquete')->unsigned();
            $table->foreign('id_tiquete')->references('id')->on('tiquete');
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
        Schema::dropIfExists('venta_tour');
    }
}
