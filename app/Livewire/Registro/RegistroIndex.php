<?php

namespace App\Livewire\Registro;

use App\Models\Registro;
use Livewire\Component;

class RegistroIndex extends Component
{
    public $search='';

    public function delete($id)
    {
        $registro = Registro::find($id);

        if ($registro != null) {
            $registro->delete();
            session()->flash('success', 'Registro excluído');
        }
    }

    public function render()
    {
        $registros = Registro::where('nome', 'like', '%' .$this->search. '%')->get();

        return view('livewire.registro.registro-index', compact('registros')); //colocar todos os atributos
    }
}