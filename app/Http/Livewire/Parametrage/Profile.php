<?php

namespace App\Http\Livewire\Parametrage;

use App\Models\Profils;
use Livewire\Component;

class Profile extends Component
{
    public $checkData = [];
    public $disabled = "disabled";
    public $total;
    public $recherche;

    public function deleteSelected(){
     
   
        Profils::query()
            ->where('id',$this->checkData)
            ->delete();

        $this->checkData = [];
        return redirect('/profile');
    }

    public function render()
    {
        if(count($this->checkData) > 0){
            $this->disabled = "";
            $this->total = count($this->checkData);
        }else
        {
             $this->disabled = "disabled";
        }
        return view('livewire.parametrage.profile',[
            'profiles' => Profils::where('profile','like','%'.$this->recherche.'%')->get(),
        ]);
    }
}
