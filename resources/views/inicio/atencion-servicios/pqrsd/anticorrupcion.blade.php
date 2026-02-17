@extends('layouts.app')
@section('title', 'Protocolo Anticorrupcion')

@section('content')
    <section class="container py-4 py-md-5">
        <div class="mb-3">
            <a href="{{ route('inicio.atencion-servicios.tramites-servicios.pqrsd') }}" class="btn btn-outline-secondary btn-sm">
                Volver a PQRSD
            </a>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4 p-md-5">
                <h1 class="h3 mb-3">Protocolo de Denuncias por Actos de Corrupcion</h1>
                <p class="mb-3">
                    En este espacio se publica la informacion de referencia para orientar la recepcion y gestion de
                    denuncias por posibles actos de corrupcion en el marco de PQRSD.
                </p>
                <p class="mb-4">
                    Consulta el protocolo oficial y los canales habilitados para presentar la denuncia de forma segura y
                    con trazabilidad.
                </p>

                <a class="btn btn-success"
                    href="https://www.movilidadbogota.gov.co/web/protocolos"
                    target="_blank"
                    rel="noopener noreferrer">
                    Consultar protocolo oficial
                </a>
            </div>
        </div>
    </section>
@endsection
