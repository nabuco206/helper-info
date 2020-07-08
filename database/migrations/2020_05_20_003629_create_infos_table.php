<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('tipo');
            $table->string('fiscalia');
            $table->string('estado');
            $table->string('fono');
            $table->date('fec_vigencia_ini')->nullable();
            $table->date('fec_vigencia_fin')->nullable();
            $table->bigInteger('user_id');
            $table->timestamps();
            //$table->bigInteger('user_id');
            // $table->bigInteger('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos');
    }
}
