<?php

namespace App\Http\Controllers\Devis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionDev extends Controller
{
    public function index(){
        return view("devis.section-developpement");
    }
}
