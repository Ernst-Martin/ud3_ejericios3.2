<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        return Asignatura::all();
    }

    public function show($id)
    {
        return Asignatura::findOrFail($id);
    }

    public function store(Request $request)
    {
        // Usando el método create() como se especifica en el ejercicio
        $asignatura = Asignatura::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);

        return $asignatura;
    }

    public function update(Request $request, $id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);

        return $asignatura;
    }

    public function destroy($id)
{
    $asignatura = Asignatura::findOrFail($id);
    // Eliminar primero las notas asociadas
    $asignatura->notas()->delete();
    $asignatura->delete();

    return response()->json(['message' => 'Asignatura eliminada']);
}
}