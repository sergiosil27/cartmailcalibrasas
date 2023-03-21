<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $documento
 * @property $nombre
 * @property $telefono
 * @property $direccion
 * @property $correo_electronico
 * @property $created_at
 * @property $updated_at
 *
 * @property Product[] $products
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{

    static $rules = [
		'documento' => 'required',
		'nombre' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'correo_electronico' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['documento','nombre','telefono','direccion','correo_electronico'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product', 'proveedor_id', 'id');
    }


}
