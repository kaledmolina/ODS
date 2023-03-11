<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Formulario;

class Filtrarorg extends Component
{

    public $termino;
    public $tipo_organizacion;
    public $sector_econmico;


    public function leerdatosform(){
        $this->emit('terminosbusqueda', $this->termino, $this->tipo_organizacion,$this->sector_econmico);

    }

    public function render()
    {
        $formulario = Formulario::all();

        return view('livewire.filtrarorg', ['formulario' => $formulario
    ]);
    }
}
