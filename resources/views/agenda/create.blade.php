@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<form method="POST" action="{{ url('/agenda') }}">
    @csrf
    <h3>Añadir datos agenda</h3>
    
    <label for="fecha">Fecha: </label>
    <input type="date" name="fecha" required>
    <br><br>
    <label for="hora">Hora: </label>
    <input type="time" name="hora" required>
    <br><br>

    <label for="persona">Persona: </label>
    <select name="idpersona">
        @foreach($personas as $persona)
            <option value="{{ $persona->idpersona }}">{{ $persona->nombre }}</option>
        @endforeach
    </select>

    <p><strong>Selecciona una imagen</strong></p>

    <div class="container">
        <table class="table table-bordered text-center" border="3">
            <tr>
                @foreach($imagenes->slice(0, 4) as $imagen) {{-- Primera fila con 4 imágenes --}}
                    <td class="p-3 align-middle">
                        <input type="radio" name="idimagen" value="{{ $imagen->idimagen }}">
                        <br>
                        <img src="{{ asset($imagen->imagen) }}" class="img-fluid" style="width: 100px; height: 100px; object-fit: contain;">
                        <br>
                        <strong>Imagen: {{ $imagen->idimagen }}</strong>
                        <br>
                        {{ $imagen->descripcion }}
                    </td>
                @endforeach
            </tr>
            <tr>
                @foreach($imagenes->slice(4, 4) as $imagen) {{-- Segunda fila con 4 imágenes --}}
                    <td class="p-3 align-middle">
                        <input type="radio" name="idimagen" value="{{ $imagen->idimagen }}">
                        <br>
                        <img src="{{ asset($imagen->imagen) }}" class="img-fluid" style="width: 100px; height: 100px; object-fit: contain;">
                        <br>
                        <strong>Imagen: {{ $imagen->idimagen }}</strong>
                        <br>
                        {{ $imagen->descripcion }}
                    </td>
                @endforeach
            </tr>
        </table>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Añadir entrada en agenda</button>
</form>
<br>
<button class="btn" onclick="window.location.href='{{ route('imagen.index') }}'" > << Volver al Listado</button>
@endsection
