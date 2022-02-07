<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','precio','mailDistribuidora','descripcion','fechaCaducidad',];
}
