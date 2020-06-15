<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingredientes';

    /**
     * Atributos asignables
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombre', 'id_preparacion'
    ];

    /**
     * Atributos ocultos.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
