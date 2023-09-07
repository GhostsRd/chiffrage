<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModuleItems extends Component
{
    public $value= "";

    public function formulareAjouter(){
        $this->value ="active";
    }
    public function exit(){
        $this->value ="";
    }
    public function mount(){
        $this->value;
    }
    public function render()
    {
        return view('livewire.module-items');
    }
}


