@extends('layouts.app')
@section('title', 'Transparencia')

@section('content')
    <section class="container py-4 py-md-5">
        <div class="mb-4">
            <h1 class="h3 mb-2">Transparencia y Acceso a la Informacion Publica</h1>
            <p class="text-muted mb-0">Consulta la informacion y accesos del modulo de transparencia.</p>
        </div>

        <style>
            .accordion-govco {
                width: 100%;
            }

            .accordion-govco .item-accordion-govco {
                margin-bottom: 0.75rem;
            }

            .accordion-govco .accordion-header {
                margin: 0;
            }

            .accordion-govco .button-accordion-govco {
                width: 100%;
                display: block;
                text-align: left;
                border: 1px solid #d7deec;
                background: #ffffff;
                color: #1f2937;
                font-weight: 700;
                border-radius: 0.75rem;
                padding: 1rem 1.25rem;
            }

            .accordion-govco .button-accordion-govco.collapsed {
                border-radius: 0.75rem;
            }

            .accordion-govco .accordion-collapse {
                border: 1px solid #d7deec;
                border-top: 0;
                border-radius: 0 0 0.75rem 0.75rem;
                background: #f8fafc;
                margin-top: -0.25rem;
            }

            .accordion-govco .body-accordion-govco {
                padding: 1rem 1.25rem 1.25rem;
            }

            .accordion-govco .title-one-accordion-govco {
                display: block;
                font-size: 0.8rem;
                color: #64748b;
                text-transform: uppercase;
                letter-spacing: 0.03em;
                margin-bottom: 0.25rem;
            }

            .accordion-govco .title-two-accordion-govco {
                display: block;
                font-weight: 600;
                margin-bottom: 0.65rem;
            }
        </style>

        <div class="mb-4">
            <p>
                La Secretaria Distrital de Movilidad pone a disposicion de la ciudadania la seccion de Transparencia y
                Acceso a la Informacion Publica, de acuerdo con la Ley 1712 de 2014.
            </p>
            <p class="mb-0">
                En este espacio encontraras informacion institucional, normatividad, mecanismos de contacto y accesos a
                contenidos de interes publico.
            </p>
        </div>

        <div class="accordion-govco" id="accordionExampleOne">
            <div class="item-accordion-govco">
                <h2 class="accordion-header" id="accordionPanels-exampleOne">
                    <button class="button-accordion-govco" type="button" data-bs-toggle="collapse"
                        data-bs-target="#accordionPanels-collapseOne" aria-expanded="true"
                        aria-controls="accordionPanels-collapseOne">
                        <span class="text-button-accordion-govco">Informacion minima obligatoria</span>
                    </button>
                </h2>
                <div id="accordionPanels-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="accordionPanels-exampleOne" data-bs-parent="#accordionExampleOne">
                    <div class="body-accordion-govco">
                        <span class="title-one-accordion-govco">Seccion</span>
                        <span class="title-two-accordion-govco">Grupo 1 - Agremiaciones</span>
                        <p class="text-one-accordion-govco">Consulta el contenido publicado para el grupo 1.</p>
                        <a href="{{ route('transparencia.1.agremiaciones') }}">Ir a Agremiaciones</a>
                    </div>
                </div>
            </div>

            <div class="item-accordion-govco">
                <h2 class="accordion-header" id="accordionPanels-exampleTwo">
                    <button class="button-accordion-govco collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#accordionPanels-collapseTwo" aria-expanded="false"
                        aria-controls="accordionPanels-collapseTwo">
                        <span class="text-button-accordion-govco">Informacion de la entidad</span>
                    </button>
                </h2>
                <div id="accordionPanels-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="accordionPanels-exampleTwo" data-bs-parent="#accordionExampleOne">
                    <div class="body-accordion-govco">
                        <span class="title-one-accordion-govco">Seccion</span>
                        <span class="title-two-accordion-govco">Estructura organica y sistemas de gestion</span>
                        <ul class="mb-0">
                            <li><a href="{{ route('entidad.organigrama') }}">Organigrama</a></li>
                            <li><a href="{{ route('entidad.sistemas-gestion.ambiental') }}">Sistema ambiental</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="item-accordion-govco">
                <h2 class="accordion-header" id="accordionPanels-exampleThree">
                    <button class="button-accordion-govco collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#accordionPanels-collapseThree" aria-expanded="false"
                        aria-controls="accordionPanels-collapseThree">
                        <span class="text-button-accordion-govco">Canales de consulta</span>
                    </button>
                </h2>
                <div id="accordionPanels-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="accordionPanels-exampleThree" data-bs-parent="#accordionExampleOne">
                    <div class="body-accordion-govco">
                        <span class="title-one-accordion-govco">Accesos relacionados</span>
                        <span class="title-two-accordion-govco">Navegacion complementaria</span>
                        <ul class="mb-0">
                            <li><a href="{{ route('inicio.menu-principal') }}">Menu principal</a></li>
                            <li><a href="{{ route('home') }}">Inicio del portal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
