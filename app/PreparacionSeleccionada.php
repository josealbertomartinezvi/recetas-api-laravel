<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreparacionSeleccionada extends Model
{
    protected $table = 'preparaciones_seleccionados';

    /**
     * Atributos asignables
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_preparacion'
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
