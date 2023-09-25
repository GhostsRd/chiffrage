<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Projets;
use App\Models\Clients;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class GererProjet extends Component
{
    use WithPagination;

    public $form ="";
    public $form2 ="";

    public $id_client;
    public $titre;
    public $description;
    public $objectif;
    public $date;
    
    public $recherche;
    public $data = [];
    public $id_modifier = "";
    // clients properties
    public $clients =  [];
    public $value ;
    // modification
    public $modele = [];
    public $val = "1";


   

    public function active(){
        $this->form = "active";
    }
    public function active2(){
        $this->form2 = "active";

       
    }
    public function loadData()
    {
        $data = Projets::all();
        foreach($data as $dat ){
            $this->val = $dat->id;
           
        }
    }
    public function desactive(){
        $this->form = "";
    }
    public function desactive2(){
        
        $this->form2 = "";
    }
    public function create(){
        Projets::create([
            'id_client' => $this->id_client,
            'titre' => $this->titre,
            'description' => $this->description,
            'objectif' => $this->objectif,
            'date_de_création'=> $this->date,
        ]);
        return redirect('/gererProjet');
    }

    public function update(Request $request){
        Projets::where('id',$request->id)->update([
            'id_client' => $request->id_client,
            'titre' => $request->titre,
            'description' => $request->description,
            'objectif' => $request->objectif,
            'date_de_création'=> $request->date,
        ]);
        return redirect('/gererProjet');
    }
    public function destroy($id){
        // dd($this->id_delete);
        Projets::where('id',$id)->delete();
        return redirect('/gererProjet');
    }
    protected $rules = [
        'titre' => 'required|min:15',
        'description' => 'required',
        'objectif' => 'required',
        'date' => 'required',
    ];
    
    public function mount(){
        $this->form;
        $this->form2;
         $this->data ;
        $this->clients;
        $this->value;
        $this->modele;
        $this->val;
        // dd($this->val);
        
       
       
    }
    public function render()
    {
        return view('livewire.gerer-projet',
            [
                $this->data = Projets::where('titre','like','%'.$this->recherche.'%')->get(),
                $this->clients = Clients::all(),
                
                $this->modele = Projets::where('id','like','%'.$this->val.'%')->get(),

            ]);
    }
}
