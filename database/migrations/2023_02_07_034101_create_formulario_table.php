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
        Schema::create('formulario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nit');
            $table->string('firstName');
            $table->string('tipo_org');
            $table->string('acti_economic');
            $table->string('sect_economic');
            $table->string('tipo_product');
            $table->string('situac_geo');
            $table->string('ubic_geo');
            $table->string('taman_org');
            $table->string('taman_num_org');
            $table->integer('empleados_h_org');
            $table->integer('empleados_f_org');
            $table->integer('n_emp_29_55');
            $table->integer('n_emp_56');
            $table->integer('n_emp_disc');
            $table->integer('n_emp_rural');
            $table->integer('n_emp_urban');
            $table->integer('n_emp_men_1slm');
            $table->integer('n_emp_men_entre1slm2');
            $table->integer('n_emp_men_entre2slm3');
            $table->integer('n_emp_men_mas4slm');
            $table->integer('n_emp_segsocial');
            $table->integer('n_emp_segsocialpen');
            $table->integer('n_emp_arl');

            $table->string('pais');
            $table->string('ciudad');
            $table->string('departamento');
            $table->string('direccion');
            $table->string('barrio');

            $table->string('correocorp');
            $table->string('telfonocorp');
            $table->string('pagina');

            $table->string('descrip');



           $table->integer('stars');

            $table->integer('indiceDiversidadGenero');
            $table->integer('indiceDiversidadGeneracional');
            $table->integer('indiceDiversidadGeografica');
            $table->integer('porcentajeDiscapacitados');


            $table->integer('indiceEquidadSeguridadSocial');
            $table->integer('indiceEquidadSalarial');

            $table->integer('porcentajeAfiliadosPension');
            $table->integer('porcentajeAfiliadosSalud');











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
        Schema::dropIfExists('formulario');
    }
};
