<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona; // <-- Importar el modelo Persona
use App\Models\Imagen;  // <-- Importar el modelo Imagen
use App\Models\Agenda;  // <-- Importar el modelo Agenda

class AgendaController extends Controller
{
    public function index() {
        $personas = Persona::all();
        $imagenes = Imagen::all();
        return view('agenda.create', compact('personas', 'imagenes'));
    }
    public function store(Request $request) {
        // Guardar los datos en la base de datos
        Agenda::create($request->all());
    
        // Obtener los datos actualizados
        $agendas = Agenda::all(); // Recuperar todos los registros de la tabla agenda
        $personas = Persona::all(); // Recuperar todos los registros de la tabla persona
        $imagenes = Imagen::all(); // Recuperar todos los registros de la tabla imagen

        // Retornar la misma vista con los datos actualizados
        return view('agenda.create', compact('agendas' , 'personas', 'imagenes'));
    }
    
    public function show(Request $request)
    {
    // Obtener todas las personas para el select
    $personas = Persona::all();

    // Inicializar la consulta vacía
    $agenda = [];

    // Verificar si se enviaron parámetros de búsqueda
    if ($request->has('fecha') && $request->has('persona')) {
        $request->validate([
            'fecha' => 'required|date',
            'persona' => 'required|integer'
        ]);

        // Filtrar la agenda según la fecha y la persona seleccionada
        $agenda = Agenda::where('fecha', $request->input('fecha'))
                        ->where('idpersona', $request->input('persona'))
                        ->with('imagen') // Relación con la imagen
                        ->get();
    }

    // Retornar la vista con los datos
    return view('agenda.show', compact('agenda', 'personas'));
    }

    

    public function create() {
        $personas = Persona::all();
        $imagenes = Imagen::all();
        return view('agenda.create', compact('personas', 'imagenes'));
    }
}
