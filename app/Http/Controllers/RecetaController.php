<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PreparacionSeleccionada;
use App\Preparacion;
use App\Ingrediente;
use App\IngredienteSeleccionado;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'susses' => true,
            'message' => 'Lista de recetas',
            'codigo' => 200
        ], 200);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $preparacion['id_preparacion'] = Preparacion::where('nombre', $data['data']['preparacion'])->value('id');
        $preparacionSeleccionada = PreparacionSeleccionada::create($preparacion);

        foreach ($data['data']['ingredientes'] as $ingrediente){
            $nuevoIngrediente['id_ingrediente'] = Ingrediente::where('nombre', $ingrediente['ingredienteSeleccionado'])->value('id');
            $nuevoIngrediente['id_preparacion_seleccionada'] = $preparacionSeleccionada['id'];
            $nuevoIngrediente['cantidad'] = $ingrediente['cantidad'];
            IngredienteSeleccionado::create($nuevoIngrediente);
        }

        return response()->json([
            'susses' => true,
            'message' => 'Receta registrada correctamente.',
            'codigo' => 200
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
