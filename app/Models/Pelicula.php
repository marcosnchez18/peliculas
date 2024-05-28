<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;


    public function proyecciones()
    {
        return $this->hasMany(Proyeccion::class);
    }

    public function cantidad_entradas()
    {
        $registros = Proyeccion::where('pelicula_id', $this->id)->get();
        foreach ($registros as $registro) {
            $cod = $registro->id;
            $num_entradas = Entrada::where('proyeccion_id', $cod)->count();
            return $num_entradas;
        }
    }
}
