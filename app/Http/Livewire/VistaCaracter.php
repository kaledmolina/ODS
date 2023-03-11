<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Formulario;

class VistaCaracter extends Component
{
    public function render()
    {   $datos = Formulario::where('user_id', Auth()->user()->id )->paginate(10);
        return view('livewire.vista-caracter', ['datos' => $datos
        ] );
    }

}
