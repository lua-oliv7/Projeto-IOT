<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteIndex extends Component
{
    public $search='';

    public function delete($id)
    {
        $ambiente = Ambiente::find($id);

        if ($ambiente != null) {
            $ambiente->delete();
            session()->flash('success', 'Ambiente excluído');
        }
    }

    public function render()
    {
        $ambientes = ambiente::where('nome', 'like', '%' .$this->search. '%')->get();

        return view('livewire.ambiente.ambiente-index', compact('ambientes')); //colocar todos os atributos
    }
}