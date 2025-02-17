<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /** @use HasFactory<\Database\Factories\AlumnoFactory> */
    use HasFactory;
    public $fillable=["nombre","dni","email", "f_nac"];

    public function idiomas(){
        return $this->hasMany(Idioma::class);
    }
}
