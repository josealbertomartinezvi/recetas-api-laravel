<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Preparacion;

class RecetaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this,
            // 'Preparacion' => Preparacion::where('id', $this->id_preparacion)->value('nombre')
        ];
    }
}
