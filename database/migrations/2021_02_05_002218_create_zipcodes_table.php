<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZipcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zipcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('d_codigo');
            $table->string('d_asenta');
            $table->string('d_tipo_asenta');
            $table->string('d_mnpio');
            $table->string('d_estado');
            $table->string('d_ciudad');
            $table->integer('d_cp');
            $table->integer('c_estado');
            $table->integer('c_oficina');
            $table->string('c_cp');
            $table->integer('c_tipo_asenta');
            $table->integer('c_mnpio');
            $table->integer('id_asenta_cpcons');
            $table->string('d_zona');
            $table->integer('c_cve_ciudad');
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
        Schema::drop('zipcodes');
    }
}
