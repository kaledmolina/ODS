<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulariodos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('asociad_h_org');
            $table->string('asociad_f_org');
            $table->string('asociad_29_55');
            $table->string('asociad_56');
            $table->string('asociad_disc');
            $table->string('asociad_rural');
            $table->string('asociad_urban');
            $table->string('asociadmen_1slm');
            $table->string('asociad_1slm2');
            $table->string('asociad_2slm3');
            $table->integer('asociad_slm4');
            $table->integer('asociad_segur');

            $table->integer('asociad_segurpen');
            $table->integer('asociad_segurpenarl');
            $table->integer('ask1asosiativa');
            $table->integer('ask2asosiativa');
            $table->integer('ask3asosiativa');
            $table->integer('ask4asosiativa');
            $table->integer('ask5asosiativa');

            $table->integer('ask6asosiativa');
            $table->integer('ask7asosiativa');
            $table->integer('ask8asosiativa');
            $table->integer('ask9asosiativa');
            $table->integer('ask10asosiativa');
            $table->integer('ask11asosiativa');
            $table->integer('ask12asosiativa');
            $table->integer('ask13asosiativa');



            $table->integer('ask1calidad');
            $table->integer('ask2calidad');
            $table->integer('ask3calidad');
            $table->integer('ask4calidad');
            $table->integer('ask5calidad');

            $table->integer('ask6calidad');
            $table->integer('ask7calidad');
            $table->integer('ask8calidad');


            $table->integer('ask1capacidad');
    $table->integer('ask2capacidad');
    $table->integer('ask3capacidad');
    $table->integer('ask4capacidad');
    $table->integer('ask5capacidad');
    $table->integer('ask6capacidad');
    $table->integer('ask7capacidad');
    $table->integer('ask8capacidad');
    $table->integer('ask9capacidad');
    $table->integer('ask10capacidad');
    $table->integer('ask11capacidad');
    $table->integer('ask12capacidad');
    $table->integer('ask13capacidad');
    $table->integer('ask14capacidad');
    $table->integer('ask15capacidad');
    $table->integer('ask16capacidad');

    $table->integer('ask1calidadmer');
    $table->integer('ask2calidadmer');
    $table->integer('ask3calidadmer');
    $table->integer('ask4calidadmer');
    $table->integer('ask5calidadmer');
    $table->integer('ask6calidadmer');
    $table->integer('ask7calidadmer');
    $table->integer('ask8calidadmer');
    $table->integer('ask9calidadmer');
    $table->integer('ask1capacidadprod');
    $table->integer('ask2capacidadprod');
    $table->integer('ask3capacidadprod');
    $table->integer('ask4capacidadprod');
    $table->integer('ask5capacidadprod');
    $table->integer('ask6capacidadprod');
    $table->integer('ask7capacidadprod');
    $table->integer('ask8capacidadprod');
    $table->integer('ask9capacidadprod');

    $table->integer('ask1capacidadservi');
    $table->integer('ask2capacidadservi');
    $table->integer('ask3capacidadservi');
    $table->integer('ask4capacidadservi');

    $table->integer('ask5capacidadservi');
    $table->integer('ask6capacidadservi');
    $table->integer('ask7capacidadservi');
    $table->integer('ask8capacidadservi');


    $table->integer('puntuacionTotalasociatividad');
    $table->integer('puntuacionFinalcalid');
    $table->integer('puntuacionTotalCapacidad');
    $table->integer('puntuacionTotalcapacidadmer');
    $table->integer('puntuacionTotalcapacidadprod');
    $table->integer('puntuacionTotalcapacidadservi');

    $table->integer('puntuacionGlobalAsociativa');

    $table->integer('puntuacionBaja');
    $table->integer('puntuacionAlta');

    





            $table->integer('enviado');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('formulariodos');
    }
};
