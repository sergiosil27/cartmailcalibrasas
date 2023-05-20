<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumible extends Model
{
    protected $fillable = ["codigo","nombre", "descripcion", "precio", "existencia","image_path",
    ];
    protected $primaryKey = 'codigo';

}
