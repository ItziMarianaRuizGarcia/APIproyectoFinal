<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','dia', 'hora','id_docente'];

    protected $hidden = ['created_at','updated_at'];
}
