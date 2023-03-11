<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    protected $table = 'formulario';

    protected $fillable = [
        'nit',
        'firstName',
        'tipo_org',
        'acti_economic',
        'sect_economic',
        'tipo_product',
        'situac_geo',
        'ubic_geo',
        'taman_org',
        'taman_num_org',
        'empleados_h_org',
        'empleados_f_org',
        'n_emp_29_55',
        'n_emp_56',
        'n_emp_disc',
        'n_emp_rural',
        'n_emp_urban',
        'n_emp_men_1slm',
        'n_emp_men_entre1slm2',
        'n_emp_men_entre2slm3',
        'n_emp_men_mas4slm',
        'n_emp_segsocial',
        'n_emp_segsocialpen',
        'n_emp_arl',
        'user_id',
        'pais',
            'ciudad',
            'departamento',

            'direccion',
            'barrio',


     'stars',


    'indiceDiversidadGenero',
    'indiceDiversidadGeneracional',
    'indiceDiversidadGeografica',
    'porcentajeDiscapacitados',

    'porcentajeAfiliadosPension',
    'porcentajeAfiliadosSalud',


    'indiceEquidadSeguridadSocial',
    'indiceEquidadSalarial'


    ];
    //relacion uno a uno
    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }


}
