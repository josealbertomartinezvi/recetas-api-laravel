<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PreparacionSeleccionada;
use App\Preparacion;
use App\Ingrediente;
use App\IngredienteSeleccionado;

use App\Http\Resources\RecetaResource;

class RecetaController extends Controller
{
    /**
     * Metodo para obtener todas las recetas y sus detalles
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preparaciones = PreparacionSeleccionada::all();
        foreach ($preparaciones as $preparacion){
            $preparacion['preparacion'] = Preparacion::where('id', $preparacion['id_preparacion'])->value('nombre');
            $preparacion['ingredientes'] = IngredienteSeleccionado::where('id_preparacion_seleccionada', $preparacion['id'])->get();
            foreach ($preparacion['ingredientes'] as $ingrediente){
                $ingrediente['ingredienteSeleccionado'] = Ingrediente::where('id', $ingrediente['id_ingrediente'])->value('nombre');
            }
        }

        return response()->json([
            'susses' => true,
            'data' => $preparaciones,
            'codigo' => 200
        ], 200);  
    }

    /**
     * Metodo para almacenar una nueva receta
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
