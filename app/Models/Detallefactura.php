<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detallefactura extends Model
{
    protected $fillable = ['factura_id','consumible_id','cantidad'];

}
