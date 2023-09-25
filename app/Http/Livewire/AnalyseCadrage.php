<?php

namespace App\Http\Livewire;

use App\Models\analysecadrages;
use App\Models\Projets;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class AnalyseCadrage extends Component
{
    public $projets = [];
    public $data = [];
    public $id_projet;
    public $commentaire;
    public $date_debut;
    public $date_fin;
    public $resultat;
    public $recherche;

    // formulaire action
    public $form= ""; 



    // public $resultat = ((abs($strtotime($date_fin) - $strtotime($date_deb))) /86400  );

    public function active(){
        $this->form = "active";
    }
    public function desactive(){
        $this->form = "";
    }


    public function store(){
        analysecadrages::create([
            'id_projet' => $this->id_projet,
            'commentaire' => $this->commentaire,
            'date_debut' => $this->date_debut,
            'date_defin' => $this->date_fin,
        ]);
        return redirect('/analyseCadrage')->with('status',"Insertion de ".$this->id_projet." avec succéss");
        
    }
    public function destroy($id){
        analysecadrages::where('id',$id)->delete();
        return redirect('/analyseCadrage')->with('status',"Efface avec succéss");

    }

    public function mount()
    {   
        $this->form;
        $this->projets;
        $this->date_debut;
        $this->date_fin;
        $this->data;
    }

    public function render()
    {
        return view('livewire.analyse-cadrage', [
            $this->data = analysecadrages::where('id_projet','like','%'.$this->recherche.'%')->get(),
            $this->projets = Projets::all(),
        ]);
    }
}
