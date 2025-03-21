<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;

class ImagenController extends Controller
{
    public function index() {
        $imagenes = Imagen::all();
        return view('imagenes.index', compact('imagenes'));
    }
}
