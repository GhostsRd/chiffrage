<?php

namespace App\Http\Controllers\Devis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleItems extends Controller
{
    public function index(){
        return view('devis.moduleItems');
    }
}
