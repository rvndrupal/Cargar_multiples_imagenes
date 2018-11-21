<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'nombre','descripcion'
    ];  

    //scope busqueda por nombre
    // public function scopeNombre($query, $nombre)
    // {
    //     if ($nombre) {
    //         return $query->where('nombre', 'LIKE', "%$nombre%");
    //     }
    // }

   
}
