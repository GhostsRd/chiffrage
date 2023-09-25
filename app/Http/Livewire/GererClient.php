<?php

namespace App\Http\Livewire;

use App\Models\clients;
use Illuminate\Http\Request;
use Livewire\Component;

class GererClient extends Component
{
    // pour la UI
    public $form ="";
    public $form2 ="";
    public $recherche ="";

    // affichage du donner
    public $data = [];
    // pour le database
    public $nom;
    public $description;
    public $prerequis;
    public $contact;
    // modification
    
    public $modele = [];
    public $val = "1" ;

   

    // active et desactive la formulaire ajouter
    public function active(){
        $this->form = "active";
    }
    public function desactive(){
        $this->form = "";
    }
    // active formulaire modifier
    public function active2(){
        $this->form2 = "active";
    }
    public function desactive2(){
        $this->form2 = "";
    }

    // ajouter a base de donner
    protected $rules = [
        'nom' => 'required|min:15',
        'description' => 'required',
        'prerequis' => 'required',
        'contact' => 'required'
    ];
    public function create(){
        clients::create([
            "nom" => $this->nom,
            "description_demande" => $this->description,
            "prerequis" => $this->prerequis,
            "contact" => $this->contact,
        ]);
        return redirect('/gererClient');
    }
    public function update(Request $request){
        clients::where('id',$request->id)->update([
            "nom" => $request->nom,
            "description_demande" => $request->description,
            "prerequis" => $request->prerequis,
            "contact" => $request->contact,
        ]);
        // return redirect('/gererClient');
        return redirect('/gererClient')->with('status',"modification avec succés ");
    }
    public function destroy($id){
        Clients::where('id',$id)->delete();
        return redirect('/gererClient');
    }

    public function mount(){
        $this->form;
        $this->form2;
        $this->data;
        $this->modele;
       

    }
    public function render()
    {
        return view('livewire.gerer-client',[
            $this->data = Clients::where('nom','like','%'.$this->recherche.'%')->get(),
            $this->modele = Clients::where('id','like','%'.$this->val.'%')->get(),
        ]);
    }
}
