<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plato
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $image_path
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleVenta[] $detalleVentas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Plato extends Model
{

    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'image_path' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','precio','image_path'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleVentas()
    {
        return $this->hasMany('App\DetalleVenta', 'plato_id', 'id');
    }


}
