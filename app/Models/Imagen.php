<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $table = 'imagenes';
    protected $primaryKey = 'idimagen';
    protected $keyType = 'int';
    public $incrementing = true;
    
    protected $fillable = ['idimagen', 'categoria', 'imagen', 'descripcion', 'created_at', 'updated_at'];
}
