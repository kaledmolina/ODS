<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Formulario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class Crearformulario extends Component
{


    public $currentPage = 1;
    public $success;

    // Form properties
    public $nit;
    public $firstName;
    public $tipo_org;
    public $acti_economic;
    public $sect_economic;
    public $tipo_product;
    public $situac_geo;
    public $ubic_geo;
    public $taman_org;
    public $taman_num_org;

// Form paso dos
    public $empleados_h_org;
    public $empleados_f_org;

    public $totalTrabajadores;

    public $n_emp_29_55;
    public $n_emp_56;
    public $n_emp_disc;
    public $n_emp_rural;
    public $n_emp_urban;
    public $n_emp_men_1slm;
    public $n_emp_men_entre1slm2;
    public $n_emp_men_entre2slm3;
    public $n_emp_men_mas4slm;
    public $n_emp_segsocial;
    public $n_emp_segsocialpen;
    public $n_emp_arl;


    public $pais;
    public $ciudad;
    public $departamento;
    public $direccion;
    public $barrio;

    public $correocorp;
    public $telfonocorp;
    public $pagina;
    public $descrip;

    //indicadores basicos

    public $valorstars;
    public $indiceDiversidadGenero;
    public $indiceDiversidadGeneracional;
    public $porcentajeDiscapacitados;
    public $indiceEquidadSalarial;
    public $indiceEquidadSeguridadSocial;
    public $indiceDiversidadGeografica;

    public $porcentajeAfiliadosPension;
    public $porcentajeAfiliadosSalud;



    //----











    public $formSubmitted = false;




    public $pages = [
        1 => [
            'heading' => 'seccion 1',
            'subheading' => 'Este cuestionario tiene como objeto medir el impacto para las organizaciones de economía social y solidaria con referente en los ODS..',
        ],
        2 => [
            'heading' => 'seccion 2 de 8 ',
            'subheading' => 'reponer las siguientes preguntas',
        ],

        3 => [
            'heading' => 'seccion 3 de 8',
            'subheading' => 'reponer las siguientes preguntas',
        ],
        4 => [
            'heading' => 'seccion 4 de 8',
            'subheading' => 'Este cuestionario tiene como objeto medir el impacto para las organizaciones de economía social y solidaria con referente en los ODS..',
        ],
        5 => [
            'heading' => 'seccion 5 de 8',
            'subheading' => 'reponer las siguientes preguntas',
        ],
        6 => [
            'heading' => 'seccion 6 de 8',
            'subheading' => 'reponer las siguientes preguntas',
        ],
        7 => [
            'heading' => 'seccion 7 de 8 ',
            'subheading' => 'reponer las siguientes preguntas',
        ],
        8 => [
            'heading' => 'seccion 8  de 8',
            'subheading' => 'reponer las siguientes preguntas',
        ],


    ];

    private $validationRules = [
        1 => [
            'nit' => ['required', 'min:8', 'max:11'],
            'firstName' => ['required', 'min:3'],
            'tipo_org' => ['required','string'],
            'acti_economic' => ['required','string'],


        ],
        2 => [
            'sect_economic' => ['required','string'],
            'tipo_product' => ['required','string','min:3'],
            'situac_geo' => ['required','string'],
            'ubic_geo' => ['required','string'],


        ],
        3 => [
            'taman_org' => ['required','string'],
            'taman_num_org' => ['required','string'],
            'empleados_h_org' => ['required','min:1'],
            'empleados_f_org' => ['required','min:1'],
        ],
        4 => [
            'n_emp_29_55' => ['required','min:1'],
            'n_emp_56' => ['required','min:1'],
            'n_emp_disc' => ['required','min:1'],
            'n_emp_rural' => ['required','min:1'],
        ],
        5 => [

            'n_emp_urban' => ['required','min:1'],
            'n_emp_men_1slm' => ['required','min:1'],
            'n_emp_men_entre1slm2' => ['required','min:1'],
            'n_emp_men_entre2slm3' => ['required','min:1'],
            'n_emp_men_mas4slm' => ['required','min:1'],
        ],
        6 => [
            'n_emp_segsocial' => ['required','min:1'],
            'n_emp_segsocialpen' => ['required','min:1'],
            'n_emp_arl' => ['required','min:1'],
        ],
        7 => [
            'pais' => ['required'],
            'ciudad' => ['required'],
            'departamento' => ['required'],

            'direccion' => ['required'],
            'barrio' => ['required'],
        ],
        8 => [
            'correocorp' => ['required'],
            'telfonocorp' => ['required'],

            'pagina' => ['required'],
            'descrip' => ['required', 'min:90', 'max:150']

        ]

    ];

        function calcularValorEstrellas($indiceDiversidadGenero, $indiceDiversidadGeneracional, $porcentajeDiscapacitados, $indiceEquidadSalarial) {
            // Promedio de los índices de diversidad y el índice de equidad salarial
            $promedioIndices = ($indiceDiversidadGenero + $indiceDiversidadGeneracional + $indiceEquidadSalarial) / 3;

            // Ajuste del promedio de los índices en base al porcentaje de discapacitados
            if ($porcentajeDiscapacitados > 10) {
                $promedioIndices *= 0.9;
            } elseif ($porcentajeDiscapacitados > 5) {
                $promedioIndices *= 0.95;
            }

            // Valor de estrellas basado en el promedio de los índices ajustados
            if ($promedioIndices >= 4.5) {
                $stars = 5;
            } elseif ($promedioIndices >= 3.5) {
                $stars = 4;
            } elseif ($promedioIndices >= 2.5) {
                $stars = 3;
            } elseif ($promedioIndices >= 1.5) {
                $stars = 2;
            } else {
                $stars = 1;
            }

            return [
                "stars" => $stars ];
            }



        function calculateDiversityIndices() {


            // empleados
            $totalTrabajadores = ($this->empleados_h_org + $this->empleados_f_org);


            // Porcentaje de hombres en la organización
            $porcentajeHombres = (($this->empleados_h_org / $totalTrabajadores) * 100);

            // Porcentaje de mujeres en la organización
            $porcentajeMujeres = (($this->empleados_f_org / $totalTrabajadores) * 100);




            // Calculamos el promedio de los porcentajes de hombres y mujeres
                $promediohj = ($porcentajeHombres + $porcentajeMujeres) / 2;

                // Calculamos la desviación absoluta de cada porcentaje respecto al promedio
                $desviacionHombres = abs($porcentajeHombres - $promediohj);
                $desviacionMujeres = abs($porcentajeMujeres - $promediohj);

                // Calculamos el índice de equidad de género
                $indice = 100 - (2 * ($desviacionHombres + $desviacionMujeres));

                // Aseguramos que el índice esté entre 0 y 100
                $indiceDiversidadGenero = max(0, min(100, $indice));




            // Porcentaje de trabajadores entre 29 y 55 años
            $porcentajeTrab29a55 = (($this->n_emp_29_55 / $totalTrabajadores) * 100);

            // Porcentaje de trabajadores mayores de 56 años
            $porcentajeTrabMas56 = (($this->n_emp_56 / $totalTrabajadores) * 100);

            // Índice de diversidad generacional
            $indiceDiversidadGeneracional = abs($porcentajeTrab29a55 + $porcentajeTrabMas56);

            // Porcentaje de trabajadores con discapacidad
            $porcentajeDiscapacitados =( ($this->n_emp_disc / $totalTrabajadores) * 100);

            // Porcentaje de trabajadores que viven en zona rural
            $porcentajeZonaRural = (($this->n_emp_rural / $totalTrabajadores) * 100);

            // Porcentaje de trabajadores que viven en zona urbana
            $porcentajeZonaUrbana = (($this->n_emp_urban / $totalTrabajadores) * 100);

            // Índice de diversidad geográfica
            $indicegeo = abs($porcentajeZonaRural + $porcentajeZonaUrbana);
            $indiceDiversidadGeografica = round($indicegeo / 100 * 100, 2);

            // Retornar un arreglo con los índices de diversidad
            return [
                'indiceDiversidadGenero' => $indiceDiversidadGenero,
                'indiceDiversidadGeneracional' => $indiceDiversidadGeneracional,
                'porcentajeDiscapacitados' => $porcentajeDiscapacitados,
                'indiceDiversidadGeografica' => $indiceDiversidadGeografica
            ];
        }

        function calcularIndiceEquidad() {
            // empleados
            $totalTrabajadores = ($this->empleados_h_org + $this->empleados_f_org);

            // Porcentaje de trabajadores que ganan menos de 1 SMLVM
            $porcentajeMenos1SMLVM = (($this->n_emp_men_1slm / $totalTrabajadores) * 100);

            // Porcentaje de trabajadores que ganan entre 1 y 2 SMLVM
            $porcentajeEntre1y2SMLVM = (($this->n_emp_men_entre1slm2 / $totalTrabajadores) * 100);

            // Porcentaje de trabajadores que ganan entre 2 y 3 SMLVM
            $porcentajeEntre2y3SMLVM = (($this->n_emp_men_entre2slm3 / $totalTrabajadores) * 100);

            // Porcentaje de trabajadores que ganan más de 4 SMLVM
            $porcentajeMas4SMLVM = (($this->n_emp_men_mas4slm / $totalTrabajadores) * 100);


            // Porcentaje de trabajadores afiliados al sistema de salud
            $porcentajeAfiliadosSalud = (($this->n_emp_segsocial / $totalTrabajadores) * 100);

            // Porcentaje de trabajadores afiliados al sistema de pensión
            $porcentajeAfiliadosPension = (($this->n_emp_segsocialpen / $totalTrabajadores) * 100);

            // Porcentaje de trabajadores afiliados a una ARL
            $porcentajeAfiliadosARL = (($this->n_emp_arl / $totalTrabajadores) * 100);

            // Índice de equidad en seguridad social

            $totalPorcentajesarl = $porcentajeAfiliadosSalud + $porcentajeAfiliadosPension + $porcentajeAfiliadosARL;

            // Calcula el porcentaje de afiliados a ARL en relación al total de afiliados
            $indiceEquidadSeguridadSocial= ($porcentajeAfiliadosARL / $totalPorcentajesarl) * 100;




                        // Calculamos el promedio de los porcentajes de salario
                $promedio = ($porcentajeMenos1SMLVM + $porcentajeEntre1y2SMLVM + $porcentajeEntre2y3SMLVM + $porcentajeMas4SMLVM) / 4;

                // Calculamos la desviación estándar de los porcentajes de salario
                $desviacionsalary = sqrt(
                    pow($porcentajeMenos1SMLVM - $promedio, 2) +
                    pow($porcentajeEntre1y2SMLVM - $promedio, 2) +
                    pow($porcentajeEntre2y3SMLVM - $promedio, 2) +
                    pow($porcentajeMas4SMLVM - $promedio, 2)
                ) / 4;

                // Calculamos la equidad salarial como el inverso de la desviación estándar, multiplicado por 100
                $indiceEquidadSalarial = round(100 / $desviacionsalary, 2);

            // Retorna un arreglo con los dos índices de equidad
            return [
                'indiceEquidadSeguridadSocial' => $indiceEquidadSeguridadSocial,
                'indiceEquidadSalarial' => $indiceEquidadSalarial,
                'porcentajeAfiliadosSalud' => $porcentajeAfiliadosSalud,
                'porcentajeAfiliadosPension' => $porcentajeAfiliadosPension,
            ];
        }






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

        $user_id = Auth::id();

        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);

        $this->success = true;


        $diversityIndices = $this->calculateDiversityIndices();
        $equiIndices = $this->calcularIndiceEquidad();






        $formulario = new Formulario;





        $formulario->user_id = $user_id;
        $formulario->nit = $this->nit;
        $formulario->firstName = $this->firstName;
        $formulario->tipo_org = $this->tipo_org;
        $formulario->acti_economic = $this->acti_economic;
        $formulario->sect_economic = $this->sect_economic;
        $formulario->tipo_product = $this->tipo_product;
        $formulario->situac_geo = $this->situac_geo;
        $formulario->ubic_geo = $this->ubic_geo;
        $formulario->taman_org = $this->taman_org;
        $formulario->taman_num_org = $this->taman_num_org;
        $formulario->empleados_h_org = $this->empleados_h_org;
        $formulario->empleados_f_org = $this->empleados_f_org;
        $formulario->n_emp_29_55 = $this->n_emp_29_55;
        $formulario->n_emp_56 = $this->n_emp_56;
        $formulario->n_emp_disc = $this->n_emp_disc;
        $formulario->n_emp_rural = $this->n_emp_rural;
        $formulario->n_emp_urban = $this->n_emp_urban;
        $formulario->n_emp_men_1slm = $this->n_emp_men_1slm;
        $formulario->n_emp_men_entre1slm2 = $this->n_emp_men_entre1slm2;
        $formulario->n_emp_men_entre2slm3 = $this->n_emp_men_entre2slm3;
        $formulario->n_emp_men_mas4slm = $this->n_emp_men_mas4slm;
        $formulario->n_emp_segsocial = $this->n_emp_segsocial;
        $formulario->n_emp_segsocialpen = $this->n_emp_segsocialpen;
        $formulario->n_emp_arl = $this->n_emp_arl;

        $formulario->pais = $this->pais;
        $formulario->ciudad = $this->ciudad;
        $formulario->departamento = $this->departamento;
        $formulario->direccion = $this->direccion;
        $formulario->barrio = $this->barrio;

        $formulario->correocorp = $this->correocorp;
        $formulario->telfonocorp = $this->telfonocorp;
        $formulario->pagina = $this->pagina;
        $formulario->descrip = $this->descrip;



        $formulario->indiceDiversidadGenero = $this->indiceDiversidadGenero;
        $formulario->indiceDiversidadGeneracional = $this->indiceDiversidadGeneracional;
        $formulario->porcentajeDiscapacitados = $this->porcentajeDiscapacitados;
        $formulario->indiceDiversidadGeografica = $this->indiceDiversidadGeografica;



        $formulario->indiceEquidadSeguridadSocial = $this->indiceEquidadSeguridadSocial;
        $formulario->indiceEquidadSalarial = $this->indiceEquidadSalarial;

        $formulario->indiceEquidadSeguridadSocial = $this->porcentajeAfiliadosPension;
        $formulario->indiceEquidadSalarial = $this->porcentajeAfiliadosSalud;

        // Asignar el valor de estrellas
        $estrellas = $this->calcularValorEstrellas($diversityIndices['indiceDiversidadGenero'], $diversityIndices['indiceDiversidadGeneracional'], $diversityIndices['porcentajeDiscapacitados'], $equiIndices['indiceEquidadSalarial']);
        $formulario->stars = $estrellas['stars'];


       // Assign diversity indices
        $formulario->indiceDiversidadGenero = $diversityIndices['indiceDiversidadGenero'];
        $formulario->indiceDiversidadGeneracional = $diversityIndices['indiceDiversidadGeneracional'];
        $formulario->porcentajeDiscapacitados = $diversityIndices['porcentajeDiscapacitados'];
        $formulario->indiceDiversidadGeografica = $diversityIndices['indiceDiversidadGeografica'];

        //Assign equid indices

        $formulario->indiceEquidadSeguridadSocial = $equiIndices['indiceEquidadSeguridadSocial'];

        $formulario->indiceEquidadSalarial = $equiIndices['indiceEquidadSalarial'];
        $formulario->porcentajeAfiliadosPension = $equiIndices['porcentajeAfiliadosPension'];
        $formulario->porcentajeAfiliadosSalud = $equiIndices['porcentajeAfiliadosSalud'];




        $formulario->enviado = 1;
        $formulario->save();
        $this->reset();
        $this->resetValidation();
        $this->formSubmitted = true;

    // Redirigir al mismo componente
    return redirect()->route('Formulario.caracterizacion');



    }

    public function render()
    {
        return view('livewire.crearformulario');
    }
}
