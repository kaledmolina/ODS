<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulariodos extends Model
{
    use HasFactory;
    protected $table = 'formulariodos';

    protected $fillable = [

            'asociad_h_org',
            'asociad_f_org',

            'asociad_29_55',
            'asociad_56',
            'asociad_disc',
            'asociad_rural',
            'asociad_urban',
            'asociadmen_1slm',


            'asociad_1slm2',
            'asociad_2slm3',
            'asociad_slm4',
            'asociad_segur',
            'asociad_segurpen',
            'asociad_segurpenarl',
            'ask1asosiativa',
            'ask2asosiativa',
            'ask3asosiativa',
            'ask4asosiativa',
            'ask5asosiativa',
            'ask6asosiativa',
            'ask7asosiativa',
            'ask8asosiativa',
            'ask9asosiativa',
            'ask10asosiativa',
            'ask11asosiativa',
            'ask12asosiativa',
            'ask13asosiativa',


            'ask1calidad',
            'ask2calidad',
            'ask3calidad',
            'ask4calidad',
            'ask5calidad',
            'ask6calidad',
            'ask7calidad',
            'ask8calidad',

            'ask1capacidad',
            'ask2capacidad',
            'ask3capacidad',
            'ask4capacidad',
            'ask5capacidad',
            'ask6capacidad',
            'ask7capacidad',
            'ask8capacidad',
            'ask9capacidad',
            'ask10capacidad',
            'ask11capacidad',
            'ask12capacidad',
            'ask13capacidad',
            'ask14capacidad',
            'ask15capacidad',
            'ask16capacidad',

            'ask1calidadmer',
            'ask2calidadmer',
            'ask3calidadmer',
            'ask4calidadmer',
            'ask5calidadmer',
            'ask6calidadmer',
            'ask7calidadmer',

            'ask8calidadmer',
            'ask9calidadmer',

            'ask1capacidadprod',
            'ask2capacidadprod',
            'ask3capacidadprod',
            'ask4capacidadprod',
            'ask5capacidadprod',
            'ask6capacidadprod',
            'ask7capacidadprod',
            'ask8capacidadprod',

            'ask9capacidadprod',

            'ask1capacidadservi',
            'ask2capacidadservi',
            'ask3capacidadservi',
            'ask4capacidadservi',
            'ask5capacidadservi',
            'ask6capacidadservi',
            'ask7capacidadservi',
            'ask8capacidadservi',

            'puntuacionTotalasociatividad',

            'puntuacionFinalcalid',
            'puntuacionTotalCapacidad',
            'puntuacionTotalcapacidadmer',
            'puntuacionTotalcapacidadprod',
            'puntuacionTotalcapacidadservi',

            'puntuacionGlobalAsociativa',
            'puntuacionBaja',
            'puntuacionAlta',




        'user_id',


    ];
    //relacion uno a uno
    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
}
