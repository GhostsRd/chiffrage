<?php

namespace App\Http\Controllers\ressource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GererProjet extends Controller
{
    public function index(){
        return view('ressource.gererprojet');
    }
}
