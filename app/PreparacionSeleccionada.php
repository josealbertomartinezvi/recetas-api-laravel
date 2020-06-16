<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreparacionSeleccionada extends Model
{
    protected $table = 'preparaciones_seleccionadas';

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

    public function ingredientesSeleccionados(){
        return $this->hasMany('App\IngredienteSeleccionado', 'id_preparacion_seleccionada');
    }
}
