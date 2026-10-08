<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorIndex extends Component
{
    public $search='';

    public function delete($id)
    {
        $sensor = Sensor::find($id);

        if ($sensor != null) {
            $sensor->delete();
            session()->flash('success', 'Sensor excluído');
        }
    }

    public function render()
    {
        $sensors = Sensor::where('nome', 'like', '%' .$this->search. '%')->get();

        return view('livewire.sensor.sensor-index', compact('sensors')); //colocar todos os atributos
    }

    public function status ($id){
        $sensor = Sensor::find($id);
        $sensor->status = !$sensor->status;
        $sensor->save();
    }
}