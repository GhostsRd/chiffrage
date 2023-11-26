<?php

namespace App\Http\Livewire\Parametrage;

use App\Models\Profils;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.parametrage.profile',[
            'profiles' => Profils::all(),
        ]);
    }
}
