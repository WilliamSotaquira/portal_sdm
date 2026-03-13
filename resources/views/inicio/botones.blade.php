@extends('layouts.app')
@section('title', 'Inicio - Botones')

@section('content')

    <style>
        .sdmfs,
        .sdmfs * {
            box-sizing: border-box !important;
        }

        .sdmfs .views-element-container span a,
        .sdmfs .node__content p a,
        .sdmfs .node__content span a,
        .sdmfs .node__content td a,
        .sdmfs .node__content a strong,
        .sdmfs .node__content li a,
        .sdmfs .node__content .d-flex a,
        .sdmfs .views-element-container .views-field-field-imagen .field-content a {
            color: #ffffff !important;
        }

        .sdmfs a:not(.toolbar-icon),
        .sdmfs a:not(.toolbar-icon):visited,
        .sdmfs a:not(.toolbar-icon):active,
        .sdmfs a:not(.toolbar-icon):hover,
        .sdmfs a:not(.toolbar-icon):focus {
            color: inherit !important;
        }

        .sdmfs .sdmfs__face--back a:not(.toolbar-icon),
        .sdmfs .sdmfs__face--back a:not(.toolbar-icon):visited,
        .sdmfs .sdmfs__face--back a:not(.toolbar-icon):active,
        .sdmfs .sdmfs__face--back a:not(.toolbar-icon):hover,
        .sdmfs .sdmfs__face--back a:not(.toolbar-icon):focus {
            color: #ffffff !important;
        }

        .sdmfs {
            width: 100% !important;
            color: #1f2937 !important;
            font-family: inherit !important;
        }

        .sdmfs__sr-only {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border: 0 !important;
        }

        .sdmfs__header {
            width: min(100%, 1100px) !important;
            margin: 0 auto 1.5rem !important;
            text-align: center !important;
        }

        .sdmfs__layout {
            display: grid !important;
            grid-template-columns: minmax(240px, 270px) minmax(0, 795px) !important;
            gap: 2rem !important;
            align-items: start !important;
            width: min(100%, 1100px) !important;
            margin: 0 auto !important;
        }

        .sdmfs__notices {
            width: 100% !important;
            max-width: 270px !important;
            min-width: 0 !important;
        }

        .sdmfs__notices > * {
            max-width: 100% !important;
        }

        .sdmfs__notices .view-content.row {
            display: block !important;
            margin: 0 !important;
        }

        .sdmfs__notices .views-row {
            display: block !important;
            width: 100% !important;
            margin: 0 !important;
        }

        .sdmfs__panel {
            min-width: 0 !important;
            width: 100% !important;
        }

        .sdmfs__grid {
            display: grid !important;
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
            gap: 1rem !important;
            align-items: stretch !important;
        }

        .sdmfs__card {
            position: relative !important;
            min-width: 0 !important;
            min-height: 178px !important;
            border: 1px solid #b9c9ea !important;
            border-radius: 1rem !important;
            background: #ffffff !important;
            overflow: hidden !important;
            box-shadow: 0 2px 8px rgb(15 23 42 / 8%) !important;
            transition: border-color 0.68s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.68s cubic-bezier(0.22, 1, 0.36, 1),
                transform 0.68s cubic-bezier(0.22, 1, 0.36, 1) !important;
        }

        .sdmfs__card:hover,
        .sdmfs__card:focus-within {
            border-color: #0943b5 !important;
            box-shadow: 0 10px 24px rgb(9 67 181 / 16%) !important;
            transform: translateY(-1px) !important;
        }

        .sdmfs__link {
            position: relative !important;
            display: block !important;
            width: 100% !important;
            color: inherit !important;
            text-decoration: none !important;
            outline: none !important;
            background: transparent !important;
        }

        .sdmfs__link:focus-visible {
            outline: 3px solid #0b5fff !important;
            outline-offset: 3px !important;
        }

        .sdmfs__face {
            position: absolute !important;
            inset: 0 !important;
            width: 100% !important;
            height: 100% !important;
            padding: 1rem !important;
            backface-visibility: hidden !important;
            transition: opacity 0.72s cubic-bezier(0.22, 1, 0.36, 1),
                transform 0.72s cubic-bezier(0.22, 1, 0.36, 1),
                visibility 0.72s cubic-bezier(0.22, 1, 0.36, 1) !important;
        }

        .sdmfs__face--front {
            display: grid !important;
            grid-template-rows: minmax(104px, 1fr) auto 12px !important;
            gap: 0.8rem !important;
            align-items: center !important;
            justify-items: center !important;
            opacity: 1 !important;
            visibility: visible !important;
            background: #ffffff !important;
        }

        .sdmfs__face--back {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 0.35rem !important;
            text-align: center !important;
            background: #0943b5 !important;
            color: #ffffff !important;
            opacity: 0 !important;
            visibility: hidden !important;
            transform: translateY(10px) !important;
            pointer-events: none !important;
        }

        .sdmfs__card:hover .sdmfs__face--front,
        .sdmfs__card:focus-within .sdmfs__face--front {
            opacity: 0 !important;
            visibility: hidden !important;
            transform: translateY(-10px) !important;
        }

        .sdmfs__card:hover .sdmfs__face--back,
        .sdmfs__card:focus-within .sdmfs__face--back {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
        }

        .sdmfs__media {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            min-height: 82px !important;
            max-height: 82px !important;
            overflow: hidden !important;
            line-height: 0 !important;
            padding: 0.5rem 0.9rem 0.35rem !important;
        }

        .sdmfs__media img {
            display: block !important;
            max-width: 100% !important;
            max-height: 66px !important;
            width: auto !important;
            height: auto !important;
            object-fit: contain !important;
            object-position: center center !important;
            margin: 0 auto !important;
        }

        .sdmfs__title {
            display: block !important;
            width: 100% !important;
            margin: 0 !important;
            color: #1f2937 !important;
            font-size: clamp(0.95rem, 0.9rem + 0.12vw, 1rem) !important;
            line-height: 1.2 !important;
            font-weight: 700 !important;
            text-align: center !important;
            text-wrap: balance !important;
            overflow-wrap: anywhere !important;
        }

        .sdmfs__accent {
            display: block !important;
            width: calc(100% - 12px) !important;
            height: 12px !important;
            border-radius: 0 !important;
            background: #ffffff !important;
            align-self: end !important;
        }

        .sdmfs__badge {
            display: inline-block !important;
            margin: 0 !important;
            color: #ffffff !important;
            font-size: 0.88rem !important;
            line-height: 1.2 !important;
            font-weight: 800 !important;
            text-align: center !important;
        }

        .sdmfs__desc {
            display: block !important;
            margin: 0 !important;
            color: #ffffff !important;
            font-size: 0.82rem !important;
            line-height: 1.35 !important;
            font-weight: 600 !important;
            text-align: center !important;
            max-width: 100% !important;
            overflow-wrap: anywhere !important;
        }

        .sdmfs__toggle-wrap {
            width: 100% !important;
            margin-top: 1rem !important;
            text-align: center !important;
        }

        .sdmfs__extra {
            margin-bottom: 1.25rem !important;
            opacity: 0 !important;
            visibility: hidden !important;
            transform: translateY(-18px) !important;
            pointer-events: none !important;
            transition: opacity 0.9s cubic-bezier(0.22, 1, 0.36, 1),
                transform 0.9s cubic-bezier(0.22, 1, 0.36, 1),
                visibility 0.9s cubic-bezier(0.22, 1, 0.36, 1) !important;
        }

        .sdmfs__extra[hidden] {
            display: none !important;
            opacity: 0 !important;
            visibility: hidden !important;
            transform: translateY(-18px) !important;
            pointer-events: none !important;
        }

        .sdmfs__extra.is-open {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
            pointer-events: auto !important;
        }

        .sdmfs__toggle {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            gap: 0.75rem !important;
            width: 165px !important;
            min-height: 42px !important;
            padding: 0.5rem 0.75rem 0.5rem 1.25rem !important;
            border: 1px solid #0943b5 !important;
            border-radius: 999px !important;
            background: #0943b5 !important;
            color: #ffffff !important;
            font-size: 0.95rem !important;
            font-weight: 700 !important;
            line-height: 1.2 !important;
            cursor: pointer !important;
            box-shadow: none !important;
            transition: background-color 0.58s cubic-bezier(0.22, 1, 0.36, 1),
                border-color 0.58s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.58s cubic-bezier(0.22, 1, 0.36, 1) !important;
        }

        .sdmfs__toggle:hover {
            background: #4b74c9 !important;
            border-color: #4b74c9 !important;
        }

        .sdmfs__toggle:focus-visible {
            outline: none !important;
            box-shadow: 0 0 0 3px #ffffff, 0 0 0 5px #111111 !important;
        }

        .sdmfs__toggle-text {
            flex: 1 1 auto !important;
            text-align: center !important;
        }

        .sdmfs__toggle-text-less {
            display: none !important;
        }

        .sdmfs__toggle[aria-expanded="true"] .sdmfs__toggle-text-more {
            display: none !important;
        }

        .sdmfs__toggle[aria-expanded="true"] .sdmfs__toggle-text-less {
            display: inline !important;
        }

        .sdmfs__toggle-icon {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 24px !important;
            height: 24px !important;
            border: 2px solid currentColor !important;
            border-radius: 50% !important;
            flex: 0 0 24px !important;
        }

        .sdmfs__toggle-icon svg {
            width: 14px !important;
            height: 14px !important;
            fill: currentColor !important;
            transform: rotate(90deg) !important;
            transition: transform 0.62s cubic-bezier(0.22, 1, 0.36, 1) !important;
        }

        .sdmfs__toggle[aria-expanded="true"] .sdmfs__toggle-icon svg {
            transform: rotate(-90deg) !important;
        }

        @media (hover: none), (pointer: coarse) {
            .sdmfs__card {
                min-height: 178px !important;
            }

            .sdmfs__link {
            }

            .sdmfs__face--front {
                opacity: 1 !important;
                visibility: visible !important;
                transform: none !important;
            }

            .sdmfs__face--back {
                position: static !important;
                inset: auto !important;
                height: auto !important;
                min-height: 0 !important;
                opacity: 1 !important;
                visibility: visible !important;
                transform: none !important;
                pointer-events: auto !important;
                background: #f3f6fc !important;
                color: #1f2937 !important;
                padding: 0 1rem 1rem !important;
            }

            .sdmfs__badge,
            .sdmfs__desc {
                color: #1f2937 !important;
            }
        }

        @media (max-width: 991px) {
            .sdmfs__layout {
                grid-template-columns: 1fr !important;
                gap: 1.5rem !important;
            }

            .sdmfs__notices {
                max-width: 100% !important;
            }
        }

        @media (max-width: 991px) and (min-width: 577px) {
            .sdmfs__grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }

        @media (max-width: 576px) {
            .sdmfs__grid {
                grid-template-columns: 1fr !important;
            }

            .sdmfs__toggle {
                width: 100% !important;
            }
        }
    </style>

    <section class="sdmfs" aria-labelledby="sdmfs-title">
        <div class="sdmfs__header">
            <h2 class="titulo-seccion text-center" id="sdmfs-title">Trámites y servicios más frecuentes</h2>
            <p class="titulo-seccion text-center sdm-descripcion-section">
                Accede de forma rápida a los trámites y servicios más utilizados de la Secretaría Distrital de
                Movilidad.<br>
                Aquí encontrarás información, consultas y gestiones en línea para facilitar tu movilidad en Bogotá.
                Selecciona uno de los botones para conocer su descripción y, si necesitas más opciones, utiliza el
                botón "Ver más".
            </p>
        </div>

        <div class="sdmfs__layout">
            <aside class="sdmfs__notices" aria-label="Avisos destacados">
                {{ drupal_view('home', 'block_1') }}
            </aside>

            <div class="sdmfs__panel">
                <div class="sdmfs__grid">
                    <article class="sdmfs__card">
                        <a class="sdmfs__link" href="https://portalmimovilidad.movilidadbogota.gov.co/"
                            target="_blank" rel="noopener noreferrer"
                            aria-describedby="sdmfs-desc-1 sdmfs-tab-1">
                            <div class="sdmfs__face sdmfs__face--front" aria-hidden="true">
                                <div class="sdmfs__media">
                                    <img src="/sites/default/files/2025-12/icono_1_frecuentes.png" alt="">
                                </div>
                                <div class="sdmfs__title">Mi Movilidad a un Clic</div>
                                <div class="sdmfs__accent"></div>
                            </div>
                            <div class="sdmfs__face sdmfs__face--back" id="sdmfs-desc-1">
                                <div class="sdmfs__badge">Portal externo</div>
                                <p class="sdmfs__desc">Portal oficial para realizar trámites y servicios en línea de movilidad.</p>
                            </div>
                            <span class="sdmfs__sr-only" id="sdmfs-tab-1">Se abre en una nueva pestaña.</span>
                        </a>
                    </article>

                    <article class="sdmfs__card">
                        <a class="sdmfs__link" href="https://www.ventanillamovilidad.com.co/"
                            target="_blank" rel="noopener noreferrer"
                            aria-describedby="sdmfs-desc-2 sdmfs-tab-2">
                            <div class="sdmfs__face sdmfs__face--front" aria-hidden="true">
                                <div class="sdmfs__media">
                                    <img src="/sites/default/files/2025-12/icono_2_frecuentes.png" alt="">
                                </div>
                                <div class="sdmfs__title">Ventanilla única de servicios</div>
                                <div class="sdmfs__accent"></div>
                            </div>
                            <div class="sdmfs__face sdmfs__face--back" id="sdmfs-desc-2">
                                <div class="sdmfs__badge">Portal externo</div>
                                <p class="sdmfs__desc">Sistema oficial para gestión de citas y trámites presenciales.</p>
                            </div>
                            <span class="sdmfs__sr-only" id="sdmfs-tab-2">Se abre en una nueva pestaña.</span>
                        </a>
                    </article>

                    <article class="sdmfs__card">
                        <a class="sdmfs__link" href="/orvi" aria-describedby="sdmfs-desc-3">
                            <div class="sdmfs__face sdmfs__face--front" aria-hidden="true">
                                <div class="sdmfs__media">
                                    <img src="/sites/default/files/2025-12/icono_3_frecuentes.png" alt="">
                                </div>
                                <div class="sdmfs__title">ORVI</div>
                                <div class="sdmfs__accent"></div>
                            </div>
                            <div class="sdmfs__face sdmfs__face--back" id="sdmfs-desc-3">
                                <p class="sdmfs__desc">Orientación para víctimas de siniestros viales y rutas de atención.</p>
                            </div>
                        </a>
                    </article>

                    <article class="sdmfs__card">
                        <a class="sdmfs__link" href="https://registrobicibogota.movilidadbogota.gov.co/#!/"
                            target="_blank" rel="noopener noreferrer"
                            aria-describedby="sdmfs-desc-4 sdmfs-tab-4">
                            <div class="sdmfs__face sdmfs__face--front" aria-hidden="true">
                                <div class="sdmfs__media">
                                    <img src="/sites/default/files/2025-12/icono_4_frecuentes.png" alt="">
                                </div>
                                <div class="sdmfs__title">Registro Bici Bogotá</div>
                                <div class="sdmfs__accent"></div>
                            </div>
                            <div class="sdmfs__face sdmfs__face--back" id="sdmfs-desc-4">
                                <div class="sdmfs__badge">Portal externo</div>
                                <p class="sdmfs__desc">Registro oficial de bicicletas para identificación y recuperación.</p>
                            </div>
                            <span class="sdmfs__sr-only" id="sdmfs-tab-4">Se abre en una nueva pestaña.</span>
                        </a>
                    </article>

                    <article class="sdmfs__card">
                        <a class="sdmfs__link" href="https://picoyplacasolidario.movilidadbogota.gov.co/Inicio"
                            target="_blank" rel="noopener noreferrer"
                            aria-describedby="sdmfs-desc-5 sdmfs-tab-5">
                            <div class="sdmfs__face sdmfs__face--front" aria-hidden="true">
                                <div class="sdmfs__media">
                                    <img src="/sites/default/files/2025-12/icono_5_frecuentes.png" alt="">
                                </div>
                                <div class="sdmfs__title">Pico y placa Solidario</div>
                                <div class="sdmfs__accent"></div>
                            </div>
                            <div class="sdmfs__face sdmfs__face--back" id="sdmfs-desc-5">
                                <div class="sdmfs__badge">Portal externo</div>
                                <p class="sdmfs__desc">Portal para gestionar permisos y pagos de Pico y Placa Solidario.</p>
                            </div>
                            <span class="sdmfs__sr-only" id="sdmfs-tab-5">Se abre en una nueva pestaña.</span>
                        </a>
                    </article>

                    <article class="sdmfs__card">
                        <a class="sdmfs__link"
                            href="https://www.movilidadbogota.gov.co/web/SIMUR/excepciones/consultarPlaca/"
                            target="_blank" rel="noopener noreferrer"
                            aria-describedby="sdmfs-desc-6 sdmfs-tab-6">
                            <div class="sdmfs__face sdmfs__face--front" aria-hidden="true">
                                <div class="sdmfs__media">
                                    <img src="/sites/default/files/2025-12/icono_6_frecuentes.png" alt="">
                                </div>
                                <div class="sdmfs__title">Vehículos exceptuados</div>
                                <div class="sdmfs__accent"></div>
                            </div>
                            <div class="sdmfs__face sdmfs__face--back" id="sdmfs-desc-6">
                                <div class="sdmfs__badge">Portal externo</div>
                                <p class="sdmfs__desc">Consulta de vehículos exceptuados en la restricción de circulación.</p>
                            </div>
                            <span class="sdmfs__sr-only" id="sdmfs-tab-6">Se abre en una nueva pestaña.</span>
                        </a>
                    </article>
                </div>

                <div class="sdmfs__toggle-wrap">
                    <div class="sdmfs__grid sdmfs__extra" id="sdmfs-extra-grid">
                        <article class="sdmfs__card">
                            <a class="sdmfs__link" href="/pico-y-placa" aria-describedby="sdmfs-extra-desc-1">
                                <div class="sdmfs__face sdmfs__face--front" aria-hidden="true">
                                    <div class="sdmfs__media">
                                        <img src="/sites/default/files/2025-12/icono_8_frecuentes.png" alt="">
                                    </div>
                                    <div class="sdmfs__title">Consulta Pico y placa</div>
                                    <div class="sdmfs__accent"></div>
                                </div>
                                <div class="sdmfs__face sdmfs__face--back" id="sdmfs-extra-desc-1">
                                    <p class="sdmfs__desc">Consulta diaria de Pico y Placa, excepciones y normatividad.</p>
                                </div>
                            </a>
                        </article>

                        <article class="sdmfs__card">
                            <a class="sdmfs__link" href="/consulta-de-comparendos"
                                target="_blank" rel="noopener noreferrer"
                                aria-describedby="sdmfs-extra-desc-2 sdmfs-extra-tab-2">
                                <div class="sdmfs__face sdmfs__face--front" aria-hidden="true">
                                    <div class="sdmfs__media">
                                        <img src="/sites/default/files/2026-02/comparendos_0.png" alt="">
                                    </div>
                                    <div class="sdmfs__title">Consulta Comparendos</div>
                                    <div class="sdmfs__accent"></div>
                                </div>
                                <div class="sdmfs__face sdmfs__face--back" id="sdmfs-extra-desc-2">
                                    <div class="sdmfs__badge">Portal externo</div>
                                    <p class="sdmfs__desc">Canal para consultar y gestionar el pago de comparendos.</p>
                                </div>
                                <span class="sdmfs__sr-only" id="sdmfs-extra-tab-2">Se abre en una nueva pestaña.</span>
                            </a>
                        </article>
                    </div>

                    <button type="button" class="sdmfs__toggle" id="sdmfs-toggle" aria-expanded="false"
                        aria-controls="sdmfs-extra-grid">
                        <span class="sdmfs__toggle-text">
                            <span class="sdmfs__toggle-text-more">Ver más</span>
                            <span class="sdmfs__toggle-text-less">Ver menos</span>
                        </span>
                        <span class="sdmfs__toggle-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false" aria-hidden="true">
                                <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script>
        (function() {
            var toggle = document.getElementById('sdmfs-toggle');
            var extraGrid = document.getElementById('sdmfs-extra-grid');

            if (!toggle || !extraGrid) {
                return;
            }

            function setExpanded(expanded) {
                toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');

                if (expanded) {
                    extraGrid.hidden = false;
                    extraGrid.classList.remove('is-open');

                    window.requestAnimationFrame(function() {
                        extraGrid.classList.add('is-open');
                    });

                    return;
                }

                extraGrid.classList.remove('is-open');
                extraGrid.hidden = true;
            }

            toggle.addEventListener('click', function() {
                var expanded = toggle.getAttribute('aria-expanded') === 'true';
                setExpanded(!expanded);

                if (!expanded) {
                    var firstLink = extraGrid.querySelector('.sdmfs__link');
                    if (firstLink) {
                        firstLink.focus();
                    }
                } else {
                    toggle.focus();
                }
            });

            extraGrid.hidden = true;
            extraGrid.classList.remove('is-open');
            toggle.setAttribute('aria-expanded', 'false');
        })();
    </script>

@endsection
