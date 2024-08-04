<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['numeroControl', 'nombres','apellidoP', 'apellidoM','correo','contrasena','inscrito',];

    protected $hidden = ['created_at','updated_at'];
}
