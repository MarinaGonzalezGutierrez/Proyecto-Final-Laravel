@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

@section('content')
    <div class="container mt-4 text-center">
        <h1 class="mb-4">Listado pictogramas</h1>
        <div class="row justify-content-center">
            @foreach($imagenes as $imagen)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 d-flex flex-column align-items-center">
                    <div class=" d-flex text-center flex-column align-items-center">
                        <img src="{{ asset($imagen->imagen) }}" class="img-fluid mb-2 object-fit-contain" alt="{{ $imagen->nombre }}" style="width: 100px; height: 100px;">
                        <p class="mb-1 fw-bold">{{ $imagen->nombre }}</p>
                        <p class="text-muted small">{{ $imagen->imagen }}</p>
                    </div>
                </div>
            @endforeach
            
        </div>
        <div>
            <button onclick="window.location.href='{{ route('agenda.create') }}'" class="btn btn-primary">Nueva Entrada Agenda</button>
            <button onclick="window.location.href='{{ route('agenda.show') }}'" class=" btn btn-secondary">Mostrar Agenda</button>
        </div>
    </div>
@endsection
