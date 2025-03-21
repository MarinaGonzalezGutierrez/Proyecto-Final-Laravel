<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Imagen; // <-- Importar el modelo Imagen
use App\Models\Persona;

class Agenda extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $fillable = ['id','fecha', 'hora', 'idpersona', 'idimagen', 'created_at', 'updated_at'];
    public function imagen() { return $this->belongsTo(Imagen::class, 'idimagen'); }
    public function persona() { return $this->belongsTo(Persona::class, 'idpersona'); }
}
