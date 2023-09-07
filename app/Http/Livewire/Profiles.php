<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use App\Models\employer;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Profiles extends Component
{
     use WithPagination;

    public $tarif;

    public $form = "" ;
    public $count;
    public $recherche;

    
    
    public function afficher(){
        $this->form = "active";
    }
    public function exit(){
        $this->form = "";
        
    }
public function  mount(){
    $this->form ;
}
    // public function store(Request $request){
    //     employer::create([
    //     //     'nom' => $request->nom,
    //     //     'profiles' => $request->profiles,
    //     //     'contact' => $request->contact,
    //     //     'tarif' => $request->tarif,
    //     //     'image' => $request->file,
    //     // ]);
    //     // $img = $request->file;
    //     // $destpath = 'images/';
    //     // $profimg = date('Ymdhis').''.''.$img->getClientOriginalExtension();
    //     // $img->move_uploaded_file($profimg,$destpath);
    // }
    public function update(Request $request){

        employer::where('id_profiles',$request->id_profiles)->update([
            'nom' => $request->nom,
            'profile' => $request->profile,
            'contact' => $request->contact,
            'tarif' => $request->tarif,
        ]);
        return redirect('/profiles');
    }
    public function destroy($id){
        employer::where('id_profiles',$id)->delete();
        return redirect('/profiles');
    }
    public function render()
    {
       
        return view('livewire.profiles',[
            'profs'  => employer::where('nom','like','%'.$this->recherche.'%')->get(),
            
        ]);
    }
    
}
