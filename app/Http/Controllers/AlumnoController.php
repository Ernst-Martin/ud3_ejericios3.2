<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        return Alumno::all();
    }

    public function show($id)
    {
        return Alumno::findOrFail($id);
    }

    public function store(Request $request)
    {
        $alumno = new Alumno;
        $alumno->nombre = $request->nombre;
        $alumno->email = $request->email;
        $alumno->save();

        return $alumno;
    }

    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->nombre = $request->nombre;
        $alumno->email = $request->email;
        $alumno->save();

        return $alumno;
    }

    public function destroy($id)
{
    $alumno = Alumno::findOrFail($id);
    // Eliminar primero las notas asociadas
    $alumno->notas()->delete();
    $alumno->delete();

    return response()->json(['message' => 'Alumno eliminado']);
}
}