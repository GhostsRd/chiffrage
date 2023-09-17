<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Modules;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;

class ModuleItems extends Component
{
    public $value= "";
    public $data = [];
    public $form = "";
    public $recherche;
    // variable du store
    public $ide;
    public $designation;
    public $commentaire;
    public $numModule;
    public $item;
    public $comment;
    public $dateDeb;
    public $dateFin;
    public $jour = [];

    public function formulareAjouter(){
        $this->value ="active";
    }
    public function modificationForm(){
        $this->form = "active";
    }
    public function calculJour(){
        $calcDate = Modules::all();
        foreach($calcDate as $dat){
            $date1 = strtotime($dat->date_fin);
            $date2 = strtotime($dat->date_debut);
            $this->jour  = abs($date1 - $date2)/86400;
          
        }
    }
    public function exit(){
        $this->value ="";
        $this->form = "";
    }
    public function mount(){
        $this->value;
        $this->form;
        $this->data = Modules::all();
      

       
    }
    
    protected $rules = [
        'designation' => 'required|min:15',
        'commentaire' => 'required',
    ];
 
    public function storeModule(){
        // $validationData = $this->validate();

        Modules::create([
            "id_module"=>$this->numModule,
            "id_item"=>$this->item,
            "designation"=>$this->designation,
            "commentaire"=>$this->comment,
            "date_debut" => $this->dateDeb,
            "date_fin" => $this->dateFin,
        ]);
        Item::create([
            "id_item" => $this->id_item,
            "designation" => $this->item,
            
        ]);
        return redirect('/module');
    }
    public function update(Request $request)
   {



       Modules::where('id',$request->id)->update([
       "id_module" => $request->id_module,
        "id_item"=>$request->id_item,
        "designation"=>$request->designation,
        "commentaire"=>$request->commmentaire,
        "date_debut" => $request->date_debut,
        "date_fin" => $request->date_fin,
    ]);
    return redirect('/module');
   }
    public function render()
    {
       
        return view('livewire.module-items');
    }
}


