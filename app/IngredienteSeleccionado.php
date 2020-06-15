<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredienteSeleccionado extends Model
{
    protected $table = 'ingredientes_seleccionados';

    /**
     * Atributos asignables
     *
     * @var array
     */
    protected $fillable = [
        'id', 'cantidad', 'id_ingrediente', 'id_preparacion_seleccionada'
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
