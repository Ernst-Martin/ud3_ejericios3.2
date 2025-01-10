<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = ['alumno_id', 'asignatura_id', 'nota'];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }
}
