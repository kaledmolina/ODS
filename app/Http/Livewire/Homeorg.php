<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Formulario;

class Homeorg extends Component
{  public $termino;
    public $tipo_organizacion;
    public $sector_econmico;

    protected $listeners = ['terminosbusqueda' => 'buscar'];
    public function buscar($termino, $tipo_organizacion,$sector_econmico) {
        $this->termino = $termino;
        $this->tipo_organizacion = $tipo_organizacion;
        $this->sector_econmico = $sector_econmico;

    }



    public function render()
    {
        //$formulario = Formulario::all();

            $formulario = Formulario::when($this->termino, function($query) {
                $query->where('firstName','LIKE',"%" . $this->termino . "%" );

            } )
            ->when($this->termino, function($query){
                $query->orWhere('descrip','LIKE',"%" . $this->termino . "%");
            })
            ->when($this->termino, function($query){
                $query->orWhere('acti_economic','LIKE',"%" . $this->termino . "%");
            })

            ->when($this->tipo_organizacion, function($query){
                $query->where('tipo_org', $this->tipo_organizacion);
            })
            ->when($this->sector_econmico, function($query){
                $query->where('sect_economic', $this->sector_econmico);
            })
            ->paginate(10);

           // dd($formulario);

        return view('livewire.homeorg', ['formulario' => $formulario
        ] );
    }
}
