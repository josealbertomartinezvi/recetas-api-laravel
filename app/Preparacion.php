<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preparacion extends Model
{
    protected $table = 'preparaciones';

    /**
     * Atributos asignables
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombre',
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
