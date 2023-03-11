<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use App\Models\Formulariodos;

class Creaformulariodos extends Component
{  public $currentPage = 1;
    public $success;

    // Form properties
    public $asociad_h_org;
    public $asociad_f_org;

    public $asociad_29_55;
    public $asociad_56;
    public $asociad_disc;
    public $asociad_rural;
    public $asociad_urban;
    public $asociadmen_1slm;


    public $asociad_1slm2;
    public $asociad_2slm3;
    public $asociad_slm4;
    public $asociad_segur;
    public $asociad_segurpen;
    public $asociad_segurpenarl;

    //--Desarrollo de la asociatividad
    public $ask1asosiativa;
    public $ask2asosiativa;
    public $ask3asosiativa;
    public $ask4asosiativa;
    public $ask5asosiativa;
    public $ask6asosiativa;
    public $ask7asosiativa;
    public $ask8asosiativa;
    public $ask9asosiativa;
    public $ask10asosiativa;
    public $ask11asosiativa;
    public $ask12asosiativa;
    public $ask13asosiativa;
///---
    public $ask1calidad;
    public $ask2calidad;
    public $ask3calidad;
    public $ask4calidad;
    public $ask5calidad;
    public $ask6calidad;
    public $ask7calidad;
    public $ask8calidad;


    public $ask1capacidad;
    public $ask2capacidad;
    public $ask3capacidad;
    public $ask4capacidad;
    public $ask5capacidad;
    public $ask6capacidad;
    public $ask7capacidad;
    public $ask8capacidad;
    public $ask9capacidad;
    public $ask10capacidad;
    public $ask11capacidad;
    public $ask12capacidad;
    public $ask13capacidad;
    public $ask14capacidad;
    public $ask15capacidad;
    public $ask16capacidad;

    public $ask1calidadmer;
    public $ask2calidadmer;
    public $ask3calidadmer;
    public $ask4calidadmer;
    public $ask5calidadmer;
    public $ask6calidadmer;
    public $ask7calidadmer;
    public $ask8calidadmer;
    public $ask9calidadmer;

    public $ask1capacidadprod;
    public $ask2capacidadprod;
    public $ask3capacidadprod;
    public $ask4capacidadprod;
    public $ask5capacidadprod;
    public $ask6capacidadprod;
    public $ask7capacidadprod;
    public $ask8capacidadprod;
    public $ask9capacidadprod;

    public $ask1capacidadservi;
    public $ask2capacidadservi;
    public $ask3capacidadservi;
    public $ask4capacidadservi;
    public $ask5capacidadservi;
    public $ask6capacidadservi;
    public $ask7capacidadservi;
    public $ask8capacidadservi;
 ///indicadores puntuacion
    public $puntuacionTotalasociatividad;

    public $puntuacionFinalcalid;
    public $puntuacionTotalCapacidad;
    public $puntuacionTotalcapacidadmer;
    public $puntuacionTotalcapacidadprod;
    public $puntuacionTotalcapacidadservi;


    public $puntuacionGlobalAsociativa;

    public $puntuacionBaja;
    public $puntuacionAlta;













    function calcularPuntuacionAsociatividad() {
        // Calcular la puntuación total
        $puntuacionTotalasociatividad = ($this->ask1asosiativa + $this->ask2asosiativa + $this->ask3asosiativa +
        $this->ask4asosiativa + $this->ask5asosiativa + $this->ask6asosiativa +
        $this->ask7asosiativa + $this->ask8asosiativa + $this->ask9asosiativa +
        $this->ask10asosiativa + $this->ask11asosiativa + $this->ask12asosiativa +
        $this->ask13asosiativa);

        // Dividir la puntuación total por 13 y redondear al entero más cercano
        $puntuacionTotalasociatividad = round($puntuacionTotalasociatividad / 13);

        // Devolver la puntuación final
        return [
            'puntuacionTotalasociatividad' => $puntuacionTotalasociatividad,
        ];
    }


    function calcularPuntuacionCalidad() {
        // Calcular la puntuación total
        $puntuacionFinalcalid =( $this->ask1calidad + $this->ask2calidad + $this->ask3calidad +
        $this->ask4calidad + $this->ask5calidad + $this->ask6calidad+
        $this->ask7calidad + $this->ask8calidad);

        // Dividir la puntuación total por 8 y redondear al entero más cercano
        $puntuacionFinalcalid = round($puntuacionFinalcalid / 8);

        // Devolver la puntuación final
        return  [
            'puntuacionFinalcalid' => $puntuacionFinalcalid,

        ];
    }

    function calcularPuntuacionCapacidad() {
        // Calcular la puntuación total
        $puntuacionTotalCapacidad = $this->ask1capacidad + $this->ask2capacidad + $this->ask3capacidad +
                                        $this->ask4capacidad + $this->ask5capacidad + $this->ask6capacidad +
                                        $this->ask7capacidad + $this->ask8capacidad +
                                        $this->ask9capacidad + $this->ask10capacidad + $this->ask11capacidad +
                                        $this->ask12capacidad + $this->ask13capacidad + $this->ask14capacidad +
                                        $this->ask15capacidad + $this->ask16capacidad;

        // Dividir la puntuación total por 16 y redondear al entero más cercano
        $puntuacionTotalCapacidad = round($puntuacionTotalCapacidad / 16);

        // Devolver la puntuación final
        return [
            'puntuacionTotalCapacidad' => $puntuacionTotalCapacidad,
        ];
    }

    function calcularPuntuacionCapacidadmer() {
        // Calcular la puntuación total
        $puntuacionTotalcapacidadmer = $this->ask1calidadmer + $this->ask2calidadmer + $this->ask3calidadmer +$this->ask4calidadmer +
        $this->ask5calidadmer + $this->ask6calidadmer + $this->ask7calidadmer + $this->ask8calidadmer + $this->ask9calidadmer;

        // Dividir la puntuación total por 9 y redondear al entero más cercano
        $puntuacionTotalcapacidadmer = round($puntuacionTotalcapacidadmer / 9);

        // Devolver la puntuación final
        return [
            'puntuacionTotalcapacidadmer' => $puntuacionTotalcapacidadmer,
        ];
    }
    function calcularPuntuacioncapacidadprod() {
        // Calcular la puntuación total
        $puntuacionTotalcapacidadprod = $this->ask1capacidadprod + $this->ask2capacidadprod + $this->ask3capacidadprod +$this->ask4capacidadprod +
            $this->ask5capacidadprod + $this->ask6capacidadprod +
            $this->ask7capacidadprod + $this->ask8capacidadprod + $this->ask9capacidadprod;

        // Dividir la puntuación total por 9 y redondear al entero más cercano
        $puntuacionTotalcapacidadprod = round($puntuacionTotalcapacidadprod / 9);

        // Devolver la puntuación final
        return [
            'puntuacionTotalcapacidadprod' => $puntuacionTotalcapacidadprod,
        ];
    }
    function calcularPuntuacioncapacidadservi() {
        // Calcular la puntuación total
        $puntuacionTotalcapacidadservi = $this->ask1capacidadservi + $this->ask2capacidadservi + $this->ask3capacidadservi +$this->ask4capacidadservi +
        $this->ask5capacidadservi + $this->ask6capacidadservi + $this->ask7capacidadservi +
        $this->ask8capacidadservi;

        // Dividir la puntuación total por 8 y redondear al entero más cercano
        $puntuacionTotalcapacidadservi = round($puntuacionTotalcapacidadservi / 8);

        // Devolver la puntuación final
        return [
            'puntuacionTotalcapacidadservi' => $puntuacionTotalcapacidadservi,

        ];
        }

        function puntuacionGlobalasociat() {
            // Calcular la puntuación total para cada área de competencia
            $puntuacionAsociatividad = $this->calcularPuntuacionAsociatividad()['puntuacionTotalasociatividad'];
            $puntuacionCalidad = $this->calcularPuntuacionCalidad()['puntuacionFinalcalid'];
            $puntuacionCapacidad = $this->calcularPuntuacionCapacidad()['puntuacionTotalCapacidad'];
            $puntuacionCapacidadmer = $this->calcularPuntuacioncapacidadmer()['puntuacionTotalcapacidadmer'];
            $puntuacionCapacidadprod = $this->calcularPuntuacioncapacidadprod()['puntuacionTotalcapacidadprod'];
            $puntuacionCapacidadservi = $this->calcularPuntuacioncapacidadservi()['puntuacionTotalcapacidadservi'];

            // Sumar las puntuaciones totales de todas las áreas de competencia
            $promediopuntuacionGlobalasociat = ($puntuacionAsociatividad + $puntuacionCalidad + $puntuacionCapacidad + $puntuacionCapacidadmer + $puntuacionCapacidadprod + $puntuacionCapacidadservi) / 6;
            // calcular la puntuación global asociativa como el porcentaje del promedio respecto al valor máximo (10)
            $puntuacionGlobalAsociativa = $promediopuntuacionGlobalasociat * 10;
            // redondear la puntuación global asociativa a dos decimales
            $puntuacionGlobalAsociativa = round($puntuacionGlobalAsociativa, 2);



                // Crear un arreglo con todas las puntuaciones
                $puntuaciones = array($puntuacionAsociatividad, $puntuacionCalidad, $puntuacionCapacidad, $puntuacionCapacidadmer, $puntuacionCapacidadprod, $puntuacionCapacidadservi);

                // Obtener la puntuación más baja
                $puntuacionBaja = min($puntuaciones);

                // Obtener la puntuación más alta
                $puntuacionAlta = max($puntuaciones);

            return [
                'puntuacionGlobalAsociativa' => $puntuacionGlobalAsociativa,
                'puntuacionBaja' => $puntuacionBaja,

                'puntuacionAlta' => $puntuacionAlta,
            ];
        }
















    public $pages = [
        1 => [
            'heading' => 'secion 1 de 9',
            'subheading' => 'Responder las preguntas basicas',
        ],
        2 => [
            'heading' => 'secion 2 de 9',
            'subheading' => 'Responder las preguntas basicas',
        ],
        3 => [
            'heading' => 'secion 3 de 9 ',
            'subheading' => 'Responder las preguntas basicas',
        ],
        4 => [
            'heading' => 'Desarrollo de la asociatividad',
            'subheading' => 'No lo hace o no tiene la capacidad 0.
            Lo hace poco o tiene poca capacidad 1 a 4.

            Lo hace con frecuencia  o está desarrollando la capacidad 5 a 7.

            Lo hace con experticia o tiene la capacidad 8 a 10 puntos.	',
        ],
        5 => [
            'heading' => 'Generación de trabajo, ingresos, calidad de vida',
            'subheading' => 'No lo hace o no tiene la capacidad 0.
            Lo hace poco o tiene poca capacidad 1 a 4.

            Lo hace con frecuencia  o está desarrollando la capacidad 5 a 7.

            Lo hace con experticia o tiene la capacidad 8 a 10 puntos.	',
        ],
        6 => [
            'heading' => 'Generación de trabajo, ingresos, calidad de vida',
            'subheading' => 'No lo hace o no tiene la capacidad 0.
            Lo hace poco o tiene poca capacidad 1 a 4.

            Lo hace con frecuencia  o está desarrollando la capacidad 5 a 7.

            Lo hace con experticia o tiene la capacidad 8 a 10 puntos.	',
        ],
        7 => [
            'heading' => 'Generación de trabajo, ingresos, calidad de vida',
            'subheading' => 'No lo hace o no tiene la capacidad 0.
            Lo hace poco o tiene poca capacidad 1 a 4.

            Lo hace con frecuencia  o está desarrollando la capacidad 5 a 7.

            Lo hace con experticia o tiene la capacidad 8 a 10 puntos.	',
        ],
        8 => [
            'heading' => 'Generación de trabajo, ingresos, calidad de vida',
            'subheading' => 'No lo hace o no tiene la capacidad 0.
            Lo hace poco o tiene poca capacidad 1 a 4.

            Lo hace con frecuencia  o está desarrollando la capacidad 5 a 7.

            Lo hace con experticia o tiene la capacidad 8 a 10 puntos.	',
        ],
        9 => [
            'heading' => 'Generación de trabajo, ingresos, calidad de vida',
            'subheading' => 'No lo hace o no tiene la capacidad 0.
            Lo hace poco o tiene poca capacidad 1 a 4.

            Lo hace con frecuencia  o está desarrollando la capacidad 5 a 7.

            Lo hace con experticia o tiene la capacidad 8 a 10 puntos.	',
        ],



    ];

    private $validationRules = [
        1 => [
            'asociad_h_org' => ['required'],
            'asociad_f_org' => ['required'],

            'asociad_29_55' => ['required','min:1'],
            'asociad_56' => ['required','min:1'],
            'asociad_disc' => ['required','min:1'],
        ],
        2 => [

            'asociad_rural' => ['required','min:1'],
            'asociad_urban' => ['required','min:1'],

            'asociadmen_1slm' => ['required','min:1'],
            'asociad_1slm2' => ['required','min:1'],
            'asociad_2slm3' => ['required','min:1'],


        ],
        3 => [

            'asociad_slm4' => ['required','min:1'],
            'asociad_segur' => ['required','min:1'],

            'asociad_segurpen' => ['required','min:1'],

            'asociad_segurpenarl' => ['required','min:1'],

        ],
        4 => [


            'ask1asosiativa' => ['required','min:1'],

            'ask2asosiativa'=> ['required','min:1'],
            'ask3asosiativa'=> ['required','min:1'],
            'ask4asosiativa'=> ['required','min:1'],
            'ask5asosiativa'=> ['required','min:1'],
            'ask6asosiativa'=> ['required','min:1'],
            'ask7asosiativa'=> ['required','min:1'],
            'ask8asosiativa'=> ['required','min:1'],
            'ask9asosiativa'=> ['required','min:1'],
            'ask10asosiativa'=> ['required','min:1'],
            'ask11asosiativa'=> ['required','min:1'],
            'ask12asosiativa'=> ['required','min:1'],
            'ask13asosiativa'=> ['required','min:1'],

        ],
        5 => [
            'ask1calidad'=> ['required','min:1'],
            'ask2calidad'=> ['required','min:1'],
            'ask3calidad'=> ['required','min:1'],
            'ask4calidad'=> ['required','min:1'],
            'ask5calidad'=> ['required','min:1'],
            'ask6calidad'=> ['required','min:1'],
            'ask7calidad'=> ['required','min:1'],
            'ask8calidad'=> ['required','min:1'],

        ],
        6 => [
            'ask1capacidad'=> ['required','min:1'],
            'ask2capacidad'=> ['required','min:1'],
            'ask3capacidad'=> ['required','min:1'],
            'ask4capacidad'=> ['required','min:1'],
            'ask5capacidad'=> ['required','min:1'],
            'ask6capacidad'=> ['required','min:1'],
            'ask7capacidad'=> ['required','min:1'],
            'ask8capacidad'=> ['required','min:1'],
            'ask9capacidad'=> ['required','min:1'],
            'ask10capacidad'=> ['required','min:1'],
            'ask11capacidad'=> ['required','min:1'],
            'ask12capacidad'=> ['required','min:1'],
            'ask13capacidad'=> ['required','min:1'],
            'ask14capacidad'=> ['required','min:1'],
            'ask15capacidad'=> ['required','min:1'],
            'ask16capacidad'=> ['required','min:1'],

        ],
        7 => [
            'ask1calidadmer'=> ['required','min:1'],
            'ask2calidadmer'=> ['required','min:1'],
            'ask3calidadmer'=> ['required','min:1'],
            'ask4calidadmer'=> ['required','min:1'],
            'ask5calidadmer'=> ['required','min:1'],
            'ask6calidadmer'=> ['required','min:1'],
            'ask7calidadmer'=> ['required','min:1'],

            'ask8calidadmer'=> ['required','min:1'],
            'ask9calidadmer'=> ['required','min:1'],




        ],

        8 => [
            'ask1capacidadprod'=> ['required','min:1'],
            'ask2capacidadprod'=> ['required','min:1'],
            'ask3capacidadprod'=> ['required','min:1'],
            'ask4capacidadprod'=> ['required','min:1'],
            'ask5capacidadprod'=> ['required','min:1'],
            'ask6capacidadprod'=> ['required','min:1'],
            'ask7capacidadprod'=> ['required','min:1'],
            'ask8capacidadprod'=> ['required','min:1'],

            'ask9capacidadprod'=> ['required','min:1'],




        ],
        9 => [
            'ask1capacidadservi'=> ['required','min:1'],
            'ask2capacidadservi'=> ['required','min:1'],
            'ask3capacidadservi'=> ['required','min:1'],

            'ask4capacidadservi'=> ['required','min:1'],

            'ask5capacidadservi'=> ['required','min:1'],
            'ask6capacidadservi'=> ['required','min:1'],
            'ask7capacidadservi'=> ['required','min:1'],
            'ask8capacidadservi'=> ['required','min:1'],




        ],



    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    }

    public function goToNextPage()
    {
        $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function submit()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);
        $user_id = Auth::id();
        $calculoasociativa = $this->calcularPuntuacionAsociatividad();
        $calculocalidad = $this->calcularPuntuacionCalidad();
        $calculocapacidad = $this->calcularPuntuacionCapacidad();


        $calculocapacidadmer = $this->calcularPuntuacionCapacidadmer();

        $calculocapacidadprod = $this->calcularPuntuacioncapacidadprod();

        $calculocapacidadservi = $this->calcularPuntuacioncapacidadservi();

        $calculopuntos = $this->puntuacionGlobalasociat();




        $formulariodos = new Formulariodos;

        $formulariodos->user_id = $user_id;
        $formulariodos->asociad_h_org = $this->asociad_h_org;
        $formulariodos->asociad_f_org = $this->asociad_f_org;
        $formulariodos->asociad_29_55 = $this->asociad_29_55;
        $formulariodos->asociad_56 = $this->asociad_56;
        $formulariodos->asociad_disc = $this->asociad_disc;
        $formulariodos->asociad_rural = $this->asociad_rural;
        $formulariodos->asociad_urban = $this->asociad_urban;
        $formulariodos->asociadmen_1slm = $this->asociadmen_1slm;
        $formulariodos->asociad_1slm2 = $this->asociad_1slm2;
        $formulariodos->asociad_2slm3 = $this->asociad_2slm3;
        $formulariodos->asociad_slm4 = $this->asociad_slm4;
        $formulariodos->asociad_segur = $this->asociad_segur;
        $formulariodos->asociad_segurpen = $this->asociad_segurpen;
        $formulariodos->asociad_segurpenarl = $this->asociad_segurpenarl;


        $formulariodos->ask1asosiativa = $this->ask1asosiativa;
        $formulariodos->ask2asosiativa = $this->ask2asosiativa;
        $formulariodos->ask3asosiativa = $this->ask3asosiativa;
        $formulariodos->ask4asosiativa = $this->ask4asosiativa;
        $formulariodos->ask5asosiativa = $this->ask5asosiativa;
        $formulariodos->ask6asosiativa = $this->ask6asosiativa;
        $formulariodos->ask7asosiativa = $this->ask7asosiativa;
        $formulariodos->ask8asosiativa = $this->ask8asosiativa;
        $formulariodos->ask9asosiativa = $this->ask9asosiativa;
        $formulariodos->ask10asosiativa = $this->ask10asosiativa;
        $formulariodos->ask11asosiativa = $this->ask11asosiativa;
        $formulariodos->ask12asosiativa = $this->ask12asosiativa;
        $formulariodos->ask13asosiativa = $this->ask13asosiativa;



        $formulariodos->ask1calidad = $this->ask1calidad;
        $formulariodos->ask2calidad = $this->ask2calidad;
        $formulariodos->ask3calidad = $this->ask3calidad;
        $formulariodos->ask4calidad = $this->ask4calidad;
        $formulariodos->ask5calidad = $this->ask5calidad;
        $formulariodos->ask6calidad = $this->ask6calidad;
        $formulariodos->ask7calidad = $this->ask7calidad;
        $formulariodos->ask8calidad = $this->ask8calidad;

        $formulariodos->ask1capacidad = $this->ask1capacidad;
$formulariodos->ask2capacidad = $this->ask2capacidad;
$formulariodos->ask3capacidad = $this->ask3capacidad;
$formulariodos->ask4capacidad = $this->ask4capacidad;
$formulariodos->ask5capacidad = $this->ask5capacidad;
$formulariodos->ask6capacidad = $this->ask6capacidad;
$formulariodos->ask7capacidad = $this->ask7capacidad;
$formulariodos->ask8capacidad = $this->ask8capacidad;
$formulariodos->ask9capacidad = $this->ask9capacidad;
$formulariodos->ask10capacidad = $this->ask10capacidad;
$formulariodos->ask11capacidad = $this->ask11capacidad;
$formulariodos->ask12capacidad = $this->ask12capacidad;
$formulariodos->ask13capacidad = $this->ask13capacidad;
$formulariodos->ask14capacidad = $this->ask14capacidad;
$formulariodos->ask15capacidad = $this->ask15capacidad;
$formulariodos->ask16capacidad = $this->ask16capacidad;

$formulariodos->ask1calidadmer = $this->ask1calidadmer;
$formulariodos->ask2calidadmer = $this->ask2calidadmer;
$formulariodos->ask3calidadmer = $this->ask3calidadmer;
$formulariodos->ask4calidadmer = $this->ask4calidadmer;
$formulariodos->ask5calidadmer = $this->ask5calidadmer;
$formulariodos->ask6calidadmer = $this->ask6calidadmer;
$formulariodos->ask7calidadmer = $this->ask7calidadmer;
$formulariodos->ask8calidadmer = $this->ask8calidadmer;
$formulariodos->ask9calidadmer = $this->ask9calidadmer;

$formulariodos->ask1capacidadprod = $this->ask1capacidadprod;
$formulariodos->ask2capacidadprod = $this->ask2capacidadprod;
$formulariodos->ask3capacidadprod = $this->ask3capacidadprod;
$formulariodos->ask4capacidadprod = $this->ask4capacidadprod;
$formulariodos->ask5capacidadprod = $this->ask5capacidadprod;
$formulariodos->ask6capacidadprod = $this->ask6capacidadprod;
$formulariodos->ask7capacidadprod = $this->ask7capacidadprod;
$formulariodos->ask8capacidadprod = $this->ask8capacidadprod;
$formulariodos->ask9capacidadprod = $this->ask9capacidadprod;

$formulariodos->ask1capacidadservi = $this->ask1capacidadservi;
$formulariodos->ask2capacidadservi = $this->ask2capacidadservi;
$formulariodos->ask3capacidadservi = $this->ask3capacidadservi;
$formulariodos->ask4capacidadservi = $this->ask4capacidadservi;
$formulariodos->ask5capacidadservi = $this->ask5capacidadservi;
$formulariodos->ask6capacidadservi = $this->ask6capacidadservi;
$formulariodos->ask7capacidadservi = $this->ask7capacidadservi;
$formulariodos->ask8capacidadservi = $this->ask8capacidadservi;

// puntuacion
$formulariodos->puntuacionTotalasociatividad = $this->puntuacionTotalasociatividad;
$formulariodos->puntuacionFinalcalid = $this->puntuacionFinalcalid;

$formulariodos->puntuacionTotalCapacidad = $this->puntuacionTotalCapacidad;

$formulariodos->puntuacionTotalcapacidadmer = $this->puntuacionTotalcapacidadmer;

$formulariodos->puntuacionTotalcapacidadprod = $this->puntuacionTotalcapacidadprod;

$formulariodos->puntuacionTotalcapacidadservi = $this->puntuacionTotalcapacidadservi;


$formulariodos->puntuacionGlobalAsociativa = $this->puntuacionGlobalAsociativa;

$formulariodos->puntuacionBaja = $this->puntuacionBaja;
$formulariodos->puntuacionAlta = $this->puntuacionAlta;


//---puntuacion



$formulariodos->puntuacionTotalasociatividad = $calculoasociativa['puntuacionTotalasociatividad'];


$formulariodos->puntuacionFinalcalid = $calculocalidad['puntuacionFinalcalid'];

$formulariodos->puntuacionTotalCapacidad = $calculocapacidad    ['puntuacionTotalCapacidad'];
$formulariodos->puntuacionTotalcapacidadmer = $calculocapacidadmer  ['puntuacionTotalcapacidadmer'];
$formulariodos->puntuacionTotalcapacidadprod = $calculocapacidadprod ['puntuacionTotalcapacidadprod'];
$formulariodos->puntuacionTotalcapacidadservi = $calculocapacidadservi ['puntuacionTotalcapacidadservi'];


$formulariodos->puntuacionGlobalAsociativa = $calculopuntos ['puntuacionGlobalAsociativa'];


$formulariodos->puntuacionBaja = $calculopuntos ['puntuacionBaja'];
$formulariodos->puntuacionAlta = $calculopuntos ['puntuacionAlta'];













        $formulariodos->enviado = 1;

        $formulariodos->save();
        // Redirigir al mismo componente
    return redirect()->route('Asociativa.index');


        $this->reset();
        $this->resetValidation();

        $this->success = 'User created successfully!';
    }
    public function render()
    {
        return view('livewire.creaformulariodos');
    }
}
