<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        return Nota::all();
    }

    public function show($id)
    {
        return Nota::findOrFail($id);
    }

    public function store(Request $request)
    {
        // Usando el método create() como se especifica en el ejercicio
        $nota = Nota::create([
            'alumno_id' => $request->alumno_id,
            'asignatura_id' => $request->asignatura_id,
            'nota' => $request->nota
        ]);

        return $nota;
    }

    public function update(Request $request, $id)
    {
        $nota = Nota::findOrFail($id);
        $nota->update([
            'alumno_id' => $request->alumno_id,
            'asignatura_id' => $request->asignatura_id,
            'nota' => $request->nota
        ]);

        return $nota;
    }

    public function destroy($id)
    {
        $nota = Nota::findOrFail($id);
        $nota->delete();

        return response()->json(['message' => 'Nota eliminada']);
    }
}