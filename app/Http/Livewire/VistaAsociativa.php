<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Formulariodos;

class VistaAsociativa extends Component
{
    public function render()
    {   $datosdos = Formulariodos::where('user_id', Auth()->user()->id )->paginate(10);
        return view('livewire.vista-asociativa', ['datosdos' => $datosdos
        ] );
    }
}
