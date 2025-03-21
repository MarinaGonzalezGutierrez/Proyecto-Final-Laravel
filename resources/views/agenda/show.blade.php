@extends('layouts.app')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div>
    <h2>Ver agenda</h2>
    <form method="GET" action="{{ route('agenda.show') }}">
        <div class="row">
            <p class="w-auto w-25 col-4">Fecha: </p>
            <input type="date" name="fecha" class="col-8" value="{{ request('fecha') }}">
        </div>
        
        <div class="row mt-2">
            <p class="w-auto w-25 col-4">Persona: </p>
            <select name="persona" class="col-8">
                @foreach($personas as $persona)
                    <option value="{{ $persona->idpersona }}" {{ request('persona') == $persona->idpersona ? 'selected' : '' }}>
                        {{ $persona->idpersona }}
                    </option>
                @endforeach
            </select>
        </div>
          
        <div class="mt-2 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary m-1">Buscar</button>
            <a href="{{ route('imagen.index') }}" class="btn btn-secondary m-1">Volver al listado</a>
        </div>
    </form>

    @if (!empty($agenda) && count($agenda) > 0)
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agenda as $evento)
                    <tr>
                        <td>{{ $evento->fecha }}</td>
                        <td>{{ $evento->hora }}</td>
                        <td>
                            <img src="{{ asset($evento->imagen->imagen) }}" width="100">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mt-3">No se encontraron eventos para la fecha y persona seleccionadas.</p>
    @endif
</div>

@endsection
