<?php

namespace App\Http\Controllers\ressource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients;

class GererClient extends Controller
{
  
    public function index(){

        return view('ressource.gererclient');
    }
}
