<?php

namespace App\Http\Livewire;

use App\Models\employer;
use Illuminate\Database\Eloquent\Model;
use Employer as GlobalEmployer;
use Livewire\Component;


class DashboardComponent extends Component
{
    public $firstName = "test";
    public $lastName;
    public $emp = [];

    public function mount()
    {
        $this->emp = employer::all();
        $this->firstName;
    }

    protected $rules = [
        'firstName' => 'required'
    ];

    // public function updatedFirstName($value)
    // {
    //     $this->emp = employer::where('nom','like','%'.$this->firstname.'%')->get();
    // }

    public function store()
    {
        $this->validate();
    }

    public function render()
    {
        // $emp = employer::all();
        return view('livewire.dashboard-component');
    }
   

}
