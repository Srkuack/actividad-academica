<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    /** @use HasFactory<\Database\Factories\SeccionFactory> */
    use HasFactory;
    protected $table = 'secciones';

    protected $fillable = ['nombre', 'seccion', 'nrc'];

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class);
    }
}
