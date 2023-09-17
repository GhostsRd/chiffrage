<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use App\Models\employers;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Profiles extends Component
{
     use WithPagination;
     use WithFileUploads;

    public $tarif;

    public $form = "" ;
    public $count;
    public $recherche;
    
    public $nom;
    public $profiles;
    public $contact;
    public $tarifs;
    public $file;
    
    
    public function afficher(){
        $this->form = "active";
    }
    public function exit(){
        $this->form = "";
        
    }
    public function  mount(){
        $this->form ;
    }
    public function store(Request $request){
        $profimg = date('Ymdhis').'.'.$this->file->getClientOriginalExtension();
        // dd($request);
        employers::create([
            
            'nom' => $this->nom,
            'profile' => $this->profiles,
            'contact' => $this->contact,
            'tarif' => $this->tarifs,
            'image' => $profimg,
        ]);
        $this->file->storeAs('images',$profimg);
        // $img = $this->file;
        // $destpath = 'images/';
        // $rd = $this->file;
        // dd($rd);
        // $img->move_uploaded_file($profimg,$destpath);
        // return redirect('/profiles');
    }
    public function update(Request $request){
        

        employers::where('id',$request->id)->update([
            'nom' => $request->nom,
            'profile' => $request->profile,
            'contact' => $request->contact,
            'tarif' => $request->tarif,
        ]);
        return redirect('/profiles');
    }

    public function destroy($id){
        employers::where('id',$id)->delete();
        return redirect('/profiles');
    }
    public function render()
    {
       
        return view('livewire.profiles',[
            'profs'  => employers::where('nom','like','%'.$this->recherche.'%')->get(),
            
        ]);
    }
    
}
