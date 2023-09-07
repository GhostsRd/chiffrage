<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Modules extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_module','id_items', 'designation', 'commentaire','date_debut','date_fin'
    ];
}
