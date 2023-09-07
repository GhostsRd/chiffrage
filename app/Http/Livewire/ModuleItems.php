<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Modules;
use Illuminate\Database\Eloquent\Model;


class ModuleItems extends Component
{
    public $value= "";
    public $data = [];

    public function formulareAjouter(){
        $this->value ="active";
    }
    public function exit(){
        $this->value ="";
    }
    public function mount(){
        $this->value;
        $this->data = Modules::all();
     
    }
    public function data()
   {
   }
    public function render()
    {
        return view('livewire.module-items');
    }
}


