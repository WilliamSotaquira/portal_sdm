@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <section class="container py-4 py-md-5">
        <div class="mb-4">
            <h1 class="h3 mb-2">SDM</h1>
            <p class="text-muted mb-0">Inicio del proyecto con accesos directos y arbol de rutas.</p>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-6 col-lg-4">
                <a class="card h-100 text-decoration-none" href="{{ route('inicio.menu-principal') }}">
                    <div class="card-body">
                        <h2 class="h5 mb-1">Menu principal</h2>
                        <p class="mb-0 text-muted">Acceso a las vistas del modulo inicio.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="card h-100 text-decoration-none" href="{{ route('inicio.atencion-servicios.tramites-servicios.index') }}">
                    <div class="card-body">
                        <h2 class="h5 mb-1">Atencion servicios</h2>
                        <p class="mb-0 text-muted">Indice de tramites y servicios.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="card h-100 text-decoration-none" href="{{ route('entidad.sistemas-gestion.ambiental') }}">
                    <div class="card-body">
                        <h2 class="h5 mb-1">Sistema ambiental</h2>
                        <p class="mb-0 text-muted">Modulo de sistemas de gestion.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="card h-100 text-decoration-none" href="{{ route('transparencia.index') }}">
                    <div class="card-body">
                        <h2 class="h5 mb-1">Transparencia</h2>
                        <p class="mb-0 text-muted">Indice del modulo de transparencia.</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <h2 class="h5 mb-3">Arbol de rutas (agrupado)</h2>
                <div class="row g-3 small">
                    <div class="col-md-6">
                        <h3 class="h6 mb-2">General</h3>
                        <div><code>/</code> -> <a href="{{ route('home') }}">home</a></div>
                        <div><code>/dashboard</code> -> <a href="{{ route('dashboard') }}">dashboard</a></div>
                        <div><code>/culturas</code> -> <a href="{{ route('culturas') }}">culturas</a></div>
                    </div>

                    <div class="col-md-6">
                        <h3 class="h6 mb-2">Inicio</h3>
                        <div><code>/inicio/home</code> -> <a href="{{ route('inicio.home') }}">inicio.home</a></div>
                        <div><code>/inicio/menu-principal</code> -> <a href="{{ route('inicio.menu-principal') }}">inicio.menu-principal</a></div>
                        <div><code>/inicio/comparendos</code> -> <a href="{{ route('inicio.comparendos') }}">inicio.comparendos</a></div>
                        <div><code>/inicio/desembargos</code> -> <a href="{{ route('inicio.desembargos') }}">inicio.desembargos</a></div>
                        <div><code>/inicio/ms</code> -> <a href="{{ route('inicio.ms') }}">inicio.ms</a></div>
                        <div><code>/inicio/banners</code> -> <a href="{{ route('inicio.banners') }}">inicio.banners</a></div>
                    </div>

                    <div class="col-md-6">
                        <h3 class="h6 mb-2">Atencion Servicios</h3>
                        <div><code>/atencion-servicios/puntos-atencion</code> -> <a href="{{ route('atencion-servicios.puntos-atencion') }}">atencion-servicios.puntos-atencion</a></div>
                        <div><code>/inicio/atencion-servicios/tramites-servicios</code> -> <a href="{{ route('inicio.atencion-servicios.tramites-servicios.index') }}">...tramites-servicios.index</a></div>
                        <div><code>/inicio/atencion-servicios/tramites-servicios/comparendos</code> -> <a href="{{ route('inicio.atencion-servicios.tramites-servicios.comparendos') }}">...comparendos</a></div>
                        <div><code>/inicio/atencion-servicios/tramites-servicios/frecuentes</code> -> <a href="{{ route('inicio.atencion-servicios.tramites-servicios.frecuentes') }}">...frecuentes</a></div>
                        <div><code>/inicio/atencion-servicios/tramites-servicios/pqrsd</code> -> <a href="{{ route('inicio.atencion-servicios.tramites-servicios.pqrsd') }}">...pqrsd</a></div>
                        <div><code>/inicio/atencion-servicios/tramites-servicios/pqrsd/anticorrupcion</code> -> <a href="{{ route('inicio.atencion-servicios.tramites-servicios.pqrsd.anticorrupcion') }}">...pqrsd.anticorrupcion</a></div>
                    </div>

                    <div class="col-md-6">
                        <h3 class="h6 mb-2">Entidad</h3>
                        <div><code>/entidad/organigrama</code> -> <a href="{{ route('entidad.organigrama') }}">entidad.organigrama</a></div>
                        <div><code>/entidad/sg</code> -> <a href="{{ route('entidad.sg') }}">entidad.sg</a></div>
                        <div><code>/entidad/sistemas-gestion/ambiental</code> -> <a href="{{ route('entidad.sistemas-gestion.ambiental') }}">entidad.sistemas-gestion.ambiental</a></div>
                    </div>

                    <div class="col-md-6">
                        <h3 class="h6 mb-2">Sites</h3>
                        <div><code>/sites/conciliacion</code> -> <a href="{{ route('sites.conciliacion') }}">sites.conciliacion</a></div>
                        <div><code>/sites/dscsm</code> -> <a href="{{ route('sites.dscsm') }}">sites.dscsm</a></div>
                        <div><code>/sites/sir</code> -> <a href="{{ route('sites.sir') }}">sites.sir</a></div>
                    </div>

                    <div class="col-md-6">
                        <h3 class="h6 mb-2">Transparencia</h3>
                        <div><code>/transparencia</code> -> <a href="{{ route('transparencia.index') }}">transparencia.index</a></div>
                        <div><code>/transparencia/1/agremiaciones</code> -> <a href="{{ route('transparencia.1.agremiaciones') }}">transparencia.1.agremiaciones</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
