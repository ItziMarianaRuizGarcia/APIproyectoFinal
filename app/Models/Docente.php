<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $fillable = ['nombres','apellidoP', 'apellidoM','id_departamento','correo','contrasena','inscrito',];

    protected $hidden = ['created_at','updated_at'];
}
