<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GererProjet extends Component
{
    public $form ="";
    public $form2 ="";

    public function active(){
        $this->form = "active";
    }
    public function active2(){
        $this->form2 = "active";
    }
    public function desactive(){
        $this->form = "";
    }
    public function desactive2(){
        $this->form2 = "";
    }
    public function mount(){
        $this->form;
        $this->form2;
    }
    public function render()
    {
        return view('livewire.gerer-projet');
    }
}
