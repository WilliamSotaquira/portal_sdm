@extends('layouts.app')
@section('title', 'frecuentes')

@section('content')

    <div class="container-consultas-servicios">
        <div class="container-titulo">
            <h2 class="titulo-seccion text-center">
                Trámites y servicios más frecuentes
            </h2>
            <p class="titulo-seccion text-center sdm-descripcion-section">
                Accede de forma rápida a los trámites y servicios más utilizados de la Secretaría Distrital de
                Movilidad.<br>
                Aquí encontrarás información, consultas y gestiones en línea para facilitar tu movilidad en Bogotá.
            </p>
        </div>
        <div class="container-avisos-tramites-servicios">
            <div class="container-avisos">
                <section class="avisos-panel" aria-label="Avisos destacados">
                    <article class="avisos-panel__section">
                        <h3 class="avisos-panel__title">Avisos</h3>
                        <p class="avisos-panel__text">
                            Hoy pueden circular los vehículos de placa terminada en:
                        </p>
                        <p class="avisos-panel__highlight">Día par: 6-7-8-9-0</p>
                        <a class="avisos-panel__button" href="{{ route('inicio.pico_placa') }}">
                            Calendario pico y placa
                        </a>
                    </article>

                    <article class="avisos-panel__section avisos-panel__section--divider">
                        <h3 class="avisos-panel__title">Cierres</h3>
                        <p class="avisos-panel__text">
                            Infórmese sobre los cierres programados y aprobados por la Secretaría Distrital de Movilidad
                        </p>
                        <a class="avisos-panel__button" href="/plan-de-manejo-de-transito">
                            Plan de manejo de tránsito
                        </a>
                    </article>
                </section>
            </div>
            <ul class="container-tramites-servicios" role="list">
                <li class="card" role="listitem">
                    <a href="https://portalmimovilidad.movilidadbogota.gov.co/" target="_blank" rel="noopener noreferrer"
                        aria-label="Abrir Movilidad a un click, portal mi movilidad">
                        <span class="card-icon">
                            <img src="/sites/default/files/2025-12/icono_1_frecuentes.png" alt="" aria-hidden="true"
                                height="64" width="64" loading="lazy">
                        </span>
                        <span class="card-title">Movilidad a un click</span>
                    </a>
                </li>
                <li class="card" role="listitem">
                    <a href="https://www.ventanillamovilidad.com.co/" target="_blank" rel="noopener noreferrer"
                        aria-label="Abrir Ventanilla única de servicios de movilidad">
                        <span class="card-icon">
                            <img src="/sites/default/files/2025-12/icono_2_frecuentes.png" alt="" aria-hidden="true"
                                height="64" width="64" loading="lazy">
                        </span>
                        <span class="card-title">Ventanilla única de servicios</span>
                    </a>
                </li>
                <li class="card" role="listitem">
                    <a href="/orvi" aria-label="Ir al Observatorio de la Secretaría Distrital de Movilidad, ORVI">
                        <span class="card-icon">
                            <img src="/sites/default/files/2025-12/icono_3_frecuentes.png" alt="" aria-hidden="true"
                                height="64" width="64" loading="lazy">
                        </span>
                        <span class="card-title">ORVI</span>
                    </a>
                </li>
                <li class="card" role="listitem">
                    <a href="https://registrobicibogota.movilidadbogota.gov.co/#!/" target="_blank"
                        rel="noopener noreferrer" aria-label="Abrir Registro Bici Bogotá en nueva pestaña">
                        <span class="card-icon">
                            <img src="/sites/default/files/2025-12/icono_4_frecuentes.png" alt="" aria-hidden="true"
                                height="64" width="64" loading="lazy">
                        </span>
                        <span class="card-title">Registro Bici Bogotá</span>
                    </a>
                </li>
                <li class="card" role="listitem">
                    <a href="https://picoyplacasolidario.movilidadbogota.gov.co/Inicio" target="_blank"
                        rel="noopener noreferrer" aria-label="Abrir Pico y placa solidario en nueva pestaña">
                        <span class="card-icon">
                            <img src="/sites/default/files/2025-12/icono_5_frecuentes.png" alt="" aria-hidden="true"
                                height="64" width="64" loading="lazy">
                        </span>
                        <span class="card-title">Pico y placa Solidario</span>
                    </a>
                </li>
                <li class="card" role="listitem">
                    <a href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/" target="_blank"
                        rel="noopener noreferrer" aria-label="Consultar vehículos exceptuados en SIMUR">
                        <span class="card-icon">
                            <img src="/sites/default/files/2025-12/icono_6_frecuentes.png" alt="" aria-hidden="true"
                                height="64" width="64" loading="lazy">
                        </span>
                        <span class="card-title">Vehículos exceptuados</span>
                    </a>
                </li>
                <li class="card" role="listitem">
                    <a href="{{ route('inicio.pico_placa') }}" aria-label="Consultar pico y placa">
                        <span class="card-icon">
                            <img src="/sites/default/files/2025-12/icono_8_frecuentes.png" alt="" aria-hidden="true"
                                height="64" width="64" loading="lazy">
                        </span>
                        <span class="card-title">Consulta Pico y placa</span>
                    </a>
                </li>
                <li class="card" role="listitem">
                    <a href="/consulta-de-comparendos" target="_blank" rel="noopener noreferrer"
                        aria-label="Consultar comparendos en nueva pestaña">
                        <span class="card-icon">
                            <img src="/sites/default/files/2025-12/%5Bd%5D_icono_4_ai.png" alt="" aria-hidden="true"
                                height="64" width="64" loading="lazy">
                        </span>
                        <span class="card-title">Consulta Comparendos</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        :root {
            --color-texto: #000;
            --color-texto-secundario: #EDEFF0;
            --color-texto-two: #363636;
            --color-titulo: #4c531e;
            --color-fondo-primario: #edeff0;
            /* verdes*/
            --primary-verde: #4c531e;
            --secondary-verde: #a9ba18;
            --accent-verde: #879225;
            --light-verde: #bed000;
            --lighter-verde: #dbf000;
            /* grises */
            --light-gris: #edeff0;
            --gris: #b4b2b2;
            --dark-gris: #363636;
            --blanco: #ffffff;
            /*azules */
            --azul: #004884;
            --azul-claro: #e0f0ff;
            /* root andres */
            --color-primario: #bed000;
            --color-secundario: #869224;
            --color-enlaces: #515900;
            --color-fondo-seccion: #f9f9f9;
            --titulos-fuente: "Montserrat";
            --titulo-estilo: 600;
            --titulo-principal-size: 2rem;
            --titulo-principal-interlineado: 2.75rem;
            --titulo-principal-size-variante: 1.5rem;
            --subtitulo-size: 1.25rem;
            --titulo-seccion-size: 1.5rem;
            --parrafo-descripcion-fuente: "Montserrat";
            --parrafo-descripcion-fuente-variante: "Work Sans";
            /*si excede los 150 caracteres*/
            --parrafo-descripcion-seccion-size: 1.25rem;
            --parrafo-descripcion-seccion-size-variante: 1rem;
            /*si excede los 150 caracteres*/
            --parrafo-decripcion-seccion-estilo: 500;
            --parrafo-decripcion-seccion-estilo-variante: 400;
            /*si excede los 150 caracteres*/
            --parrafo-decripcion-seccion-interlineado: 1.875rem;
            --parrafo-decripcion-seccion-interlineado-variante: 1.375rem;
            /*si excede los 150 caracteres*/
            --tabla-titulo-size: 1.125rem;
            --tabla-titulo-fuente: "Montserrat";
            --tabla-titulo-estilo: 600;
            --tabla-fuente: "Work Sans";
            --tabla-encabezado-size: 1.25rem;
            --tabla-encabezado-estilo: 500;
            --tabla-cuerpo--size: 1rem;
            --tabla-cuerpo--estilo: 400;
            --caption-size: 0.875rem;
            --caption-fuente: "Work Sans";
            --caption-estilo: 400;
            --caption-interlineado: 0.75rem;
            --parrafos-fuente: "Work Sans";
            --parrafos-size: 1rem;
            --parrafo-interlineado: 1.375rem;
            --parrafos-estilos: 400;
        }

        .container-tramites-servicios {
            list-style: none;
            padding: 0;
            margin: 24px 0 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 12px;
        }

        .container-avisos {
            display: flex;
            justify-content: center;
        }

        .avisos-panel {
            width: 100%;
            max-width: 276px;
            border-radius: 22px;
            overflow: hidden;
            background: #bed000;
            box-shadow: 0 10px 24px rgb(0 0 0 / 8%);
        }

        .avisos-panel__section {
            padding: 18px 20px 26px;
            text-align: center;
            color: #2f3340;
        }

        .avisos-panel__section--divider {
            border-top: 2px solid #454545;
        }

        .avisos-panel__title {
            margin: 0 0 10px;
            font-size: 2.6rem;
            line-height: 1;
            font-weight: 700;
            color: #2f3340;
        }

        .avisos-panel__text {
            margin: 0 0 10px;
            font-size: 1rem;
            line-height: 1.08;
            font-weight: 600;
            color: #2f3340;
        }

        .avisos-panel__highlight {
            margin: 0 0 16px;
            font-size: 0.98rem;
            line-height: 1.1;
            font-weight: 700;
            color: #2f3340;
        }

        .avisos-panel__button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            width: 100%;
            padding: 0.7rem 1rem;
            border: 2px solid #5b5b5b;
            border-radius: 20px;
            background: #f3f3f3;
            color: #5a5d31;
            font-size: 1rem;
            line-height: 1.1;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            transition: background-color .2s ease, transform .2s ease;
        }

        .avisos-panel__button:hover,
        .avisos-panel__button:focus-visible {
            background: #ffffff;
            color: #4c531e;
            transform: translateY(-1px);
        }

        .avisos-panel__button:focus-visible {
            outline: 3px solid #2f3340;
            outline-offset: 3px;
        }

        .container-tramites-servicios .card {
            background-color: var(--blanco, #ffffff);
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 10px;
            box-shadow: 0 4px 12px rgb(0 0 0 / 6%);
            transition: transform .15s ease, box-shadow .15s ease, border-color .15s ease;
            height: 100%;
        }

        .container-tramites-servicios .card a {
            display: grid;
            grid-template-columns: auto 1fr;
            align-items: center;
            gap: 14px;
            padding: 14px 16px;
            color: var(--dark-gris, #363636);
            text-decoration: none;
            min-height: 64px;
        }

        .card-icon img {
            width: 64px;
            height: 64px;
            object-fit: contain;
        }

        .card-title {
            font-weight: 600;
            font-size: 1rem;
            line-height: 1.2;
        }

        .container-tramites-servicios .card:hover,
        .container-tramites-servicios .card:focus-within {
            border-color: var(--primary-verde, #4c531e);
            box-shadow: 0 10px 22px rgb(0 0 0 / 10%);
            transform: translateY(-2px);
        }

        .container-tramites-servicios .card a:focus-visible {
            outline: 3px solid var(--primary-verde, #4c531e);
            outline-offset: 4px;
            border-radius: 8px;
        }

        @media (max-width: 640px) {
            .container-tramites-servicios {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }

            .card-title {
                font-size: 0.95rem;
            }
        }
    </style>

@endsection
