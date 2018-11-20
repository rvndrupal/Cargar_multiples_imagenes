<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }
}
