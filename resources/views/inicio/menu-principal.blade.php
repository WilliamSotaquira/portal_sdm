@extends('layouts.app')
@section('title', 'Menu principal')

@section('content')
    <div class="container py-4">
        <h1 class="h3 mb-2">Menu principal</h1>
        <p class="text-muted mb-4">Acceso rapido a las vistas disponibles en el modulo de inicio.</p>

        <div class="row g-3">
            <div class="col-md-6 col-lg-4">
                <a class="card h-100 text-decoration-none" href="{{ route('inicio.home') }}">
                    <div class="card-body">
                        <h2 class="h5 mb-1">Inicio Home</h2>
                        <p class="mb-0 text-muted">Vista principal de inicio.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a class="card h-100 text-decoration-none" href="{{ route('inicio.desembargos') }}">
                    <div class="card-body">
                        <h2 class="h5 mb-1">Desembargos</h2>
                        <p class="mb-0 text-muted">Consulta y contenido de desembargos.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a class="card h-100 text-decoration-none" href="{{ route('inicio.comparendos') }}">
                    <div class="card-body">
                        <h2 class="h5 mb-1">Comparendos</h2>
                        <p class="mb-0 text-muted">Consulta y pago de comparendos.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a class="card h-100 text-decoration-none" href="{{ route('inicio.ms') }}">
                    <div class="card-body">
                        <h2 class="h5 mb-1">MS</h2>
                        <p class="mb-0 text-muted">Vista de movilidad segura.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a class="card h-100 text-decoration-none" href="{{ route('inicio.tramites-servicio.comparendos') }}">
                    <div class="card-body">
                        <h2 class="h5 mb-1">Tramites y servicios - Comparendos</h2>
                        <p class="mb-0 text-muted">Comparendos en tramites y servicios.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a class="card h-100 text-decoration-none" href="{{ route('inicio.tramites-servicio.frecuentes') }}">
                    <div class="card-body">
                        <h2 class="h5 mb-1">Tramites y servicios - Frecuentes</h2>
                        <p class="mb-0 text-muted">Preguntas o accesos frecuentes.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
