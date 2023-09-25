<?php

namespace App\Http\Livewire;

use App\Models\items;
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

    public $numero = "4";
    public $state ;
    public $modeles = [];

    // propiete pour l'items
    public $dataItems = [];
    public $formAjout = "";
    public $formModifier = "";
    public $designationItems;
    public $commentaireItems;
    public $rechercheItems;

    // function pour l'items seulement

    public function formItem(){
        $this->formAjout = "active";
    }
    public function storeItems(){
        items::create([
            "designation" => $this->designationItems,
            "commentaire" => $this->commentaireItems,
        ]);
        return redirect('/module');
    }

    // fin function items

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
        // Item::create([
        //     "id_item" => $this->id_item,
        //     "designation" => $this->item,
            
        // ]);
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
   public function mount(){
    $this->value;
    $this->form;
    $this->modeles;
    $this->data;
    $this->dataItems;
    $this->state = DB::select("select count(date_fin) as date from modules");
    // dd(gettype($this->state));
   
}
    public function render()
    {
       
        return view('livewire.module-items',[
            $this->modeles = Modules::where('id','like','%'.$this->numero.'%')->get(),
            $this->data = Modules::where('designation','like','%'.$this->recherche.'%')->get(),
            $this->dataItems = Items::where('designation','like','%'.$this->rechercheItems.'%')->get(),
        ]);
    }
}


