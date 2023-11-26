<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Clients;

class Client extends Component
{
    // extract data
    public $data = [];
    // donne formulaire
    public  $nom;
    public  $prenom;
    public  $contact;
    // form ajout
    public $form = "";

    public function formajout(){
        $this->form = "active";
    }
    
    public function create(){
        Clients::create([
            "nom" => $this->nom,
            "prenom" => $this->prenom,
            "contact" => $this->contact,
        ]);
        return redirect("/client")->with('status',"Insertion Ok");
    }
    public function mount(){
        $this->nom;
        $this->form;
        $this->data;
    }
    public function render()
    {
        return view('livewire.client.client',[
            $this->data = Clients::all(),
        ]);
    }
}
