<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employers extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','nom', 'profile', 'contact','tarif','image'
    ];

}
