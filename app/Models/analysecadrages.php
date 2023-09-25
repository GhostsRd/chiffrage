<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class analysecadrages extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','id_projet', 'commentaire', 'date_debut','date_defin'
    ];
}
