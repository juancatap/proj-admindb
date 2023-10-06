<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    public function rol(){
        return $this->belongsTo(Rol::class, 'rol_id', 'id');
    }
}
