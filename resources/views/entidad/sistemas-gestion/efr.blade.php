@extends('layouts.app')

@section('title', 'Sistema de Gestión efr')

@section('content')

    <style>
        /* ===== Base ===== */
        .efr-seccion {
            font-family: Montserrat, sans-serif;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.6;
            max-width: 980px;
            margin: 0 auto;
            padding: 0 1rem;
            word-break: break-word;
        }

        /* ===== Encabezado ===== */
        .efr-encabezado {
            background: linear-gradient(135deg, #c45000 0%, #e07000 50%, #f59a3e 100%);
            margin-bottom: 2rem;
            padding: 2.5rem 1.5rem;
            border-radius: 8px;
            text-align: center;
        }

        .efr-encabezado .icono-box {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            border-radius: 12px;
            padding: 1.5rem 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            max-width: 500px;
            margin: 0 auto;
        }

        .efr-encabezado .icono-box img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* ===== Colores y énfasis ===== */
        .efr-enfasis {
            font-size: 1.15em;
            font-weight: 700;
            color: #c45000;
        }

        /* ===== Títulos ===== */
        .efr-titulo h3 {
            color: #c45000;
            font-size: clamp(1.25rem, 2.5vw, 1.5rem);
            line-height: 1.3;
            margin-bottom: 1.25rem;
            margin-top: 1.25rem;
        }

        /* ===== Secciones de contenido ===== */
        .efr-box-parrafo {
            padding: 1.5rem 1rem 0;
        }

        .efr-box-parrafo p {
            text-align: left;
        }

        /* ===== Video ===== */
        .efr-box-videos {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            margin: 1.5rem 0;
            border-radius: 8px;
            overflow: hidden;
        }

        .efr-video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        .efr-video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* ===== Tabs ===== */
        .efr-tabs .nav-pills {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            list-style: none;
            padding: 0;
            margin: 0;
            gap: 3px;
        }

        .efr-tabs .nav-pills .nav-item {
            min-width: 0;
        }

        .efr-tabs .nav-pills .nav-link {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 56px;
            text-align: center;
            text-decoration: none;
            border-radius: 0;
            line-height: 1.2;
            font-size: 0.8rem;
            color: #fff;
            background-color: #e07000;
            padding: 0.5rem 0.4rem;
            border: 2px solid transparent;
            transition: background-color 0.2s, border-color 0.2s;
            width: 100%;
        }

        .efr-tabs .nav-pills .nav-link:hover,
        .efr-tabs .nav-pills .nav-link:focus-visible {
            background-color: #a34200;
            border-color: #fff;
            color: #fff;
            outline: none;
        }

        .efr-tabs .nav-pills .nav-link.active {
            background-color: #8b3700;
            color: #fff;
            border-color: #fff;
            box-shadow: inset 0 -3px 0 #fff;
        }

        .efr-tabs .nav-pills .nav-link:focus-visible {
            outline: 3px solid #005fcc;
            outline-offset: 2px;
        }

        /* ===== Infografía / Grid ===== */
        .efr-info-gr {
            background-image: url('/sites/default/files/Paginas/18-10-2023/recurso1_0.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: grid;
            gap: 1rem;
            grid-template-columns: 1fr;
            margin: 2rem 0;
            padding: 1.5rem;
            border-radius: 8px;
            position: relative;
        }

        .efr-info-gr .paragraph-vrt {
            background-color: rgba(255, 255, 255, 0.92);
            padding: 2rem;
            border-radius: 6px;
        }

        .efr-info-gr h3 {
            text-align: center;
            line-height: 1.4;
            font-size: clamp(1.1rem, 2vw, 1.35rem);
        }

        .efr-info-gr h4 {
            text-align: center;
            font-size: 1rem;
            line-height: 1.4;
            margin-bottom: 1rem;
        }

        .efr-info-gr ul {
            padding-left: 1.25rem;
        }

        .efr-info-gr ul li {
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 0.75rem;
        }

        /* ===== PDF / Compromiso ===== */
        .efr-box-pdf {
            padding-top: 2rem;
        }

        .efr-box-pdf .imagen {
            max-width: 100%;
            margin: 0 auto;
        }

        .efr-box-pdf .imagen img {
            max-width: 100%;
            height: auto;
            display: block;
            border-radius: 4px;
        }

        .efr-box-pdf a {
            color: #c45000;
            text-decoration: underline;
            text-underline-offset: 3px;
        }

        .efr-box-pdf a:hover,
        .efr-box-pdf a:focus-visible {
            color: #8b3700;
        }

        /* ===== Perfiles ===== */
        .efr-perfiles {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 220px));
            gap: 1.5rem;
            justify-content: center;
            padding: 1rem 0;
        }

        .efr-perfil {
            text-align: center;
            transition: transform 0.3s ease;
        }

        .efr-perfil:hover,
        .efr-perfil:focus-within {
            transform: scale(1.03);
        }

        .efr-perfil .foto img {
            border-radius: 50%;
            width: 140px;
            height: 140px;
            object-fit: cover;
            margin: 0 auto 0.75rem;
            display: block;
        }

        .efr-perfil .nombre h3 {
            color: #c45000;
            font-size: 1rem;
            line-height: 1.3;
            margin: 0.5rem 0 0.25rem;
        }

        .efr-perfil .nombre h4 {
            color: #333;
            font-size: 0.875rem;
            font-weight: 500;
            line-height: 1.4;
            margin: 0;
        }

        /* ===== Botones de descarga ===== */
        .efr-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #c45000;
            box-shadow: 0 4px 12px rgba(196, 80, 0, 0.3);
            border-radius: 8px;
            margin: 0.5rem 0;
            padding: 1.5rem;
            min-height: 100px;
            transition: background-color 0.2s, transform 0.2s;
        }

        .efr-btn:hover,
        .efr-btn:focus-within {
            background-color: #a34200;
            transform: translateY(-2px);
        }

        .efr-btn a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            line-height: 1.3;
            text-align: center;
            padding: 0.5rem;
            border-radius: 4px;
        }

        .efr-btn a:hover,
        .efr-btn a:focus-visible {
            text-decoration: underline;
            outline: 3px solid #fff;
            outline-offset: 4px;
        }

        /* ===== Footer / Canales ===== */
        .efr-footer {
            background-color: #c45000;
            padding: 2rem;
            margin-top: 2rem;
            border-radius: 8px;
        }

        .efr-footer .titulo-canal {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 6px;
            min-height: 120px;
        }

        .efr-footer .titulo-canal h3 {
            color: #c45000;
            font-size: 1.25rem;
            line-height: 1.3;
            margin: 0;
        }

        .efr-footer .resumen {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 1rem 0;
            font-size: 1rem;
            color: #fff;
        }

        .efr-footer .resumen a {
            color: #fff;
            text-decoration: underline;
            text-underline-offset: 3px;
        }

        .efr-footer .resumen a:hover,
        .efr-footer .resumen a:focus-visible {
            color: #ffe0cc;
        }

        .efr-footer .resumen dt {
            color: #fff;
            margin: 0 0 0.25rem;
            font-weight: 600;
        }

        .efr-footer .resumen dd {
            margin: 0 0 1rem;
        }

        /* ===== Accordion ===== */
        .efr-accordion .accordion-button {
            background-color: #c45000;
            color: #fff;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .efr-accordion .accordion-button:not(.collapsed) {
            background-color: #a34200;
            color: #fff;
            box-shadow: none;
        }

        .efr-accordion .accordion-button::after {
            filter: brightness(0) invert(1);
        }

        .efr-accordion .accordion-button:focus {
            box-shadow: 0 0 0 3px rgba(196, 80, 0, 0.4);
        }

        /* ===== Carrusel indicadores naranja ===== */
        .efr-seccion .carousel-indicators [data-bs-target] {
            background-color: #c45000;
        }

        .efr-seccion .carousel-control-prev-icon,
        .efr-seccion .carousel-control-next-icon {
            background-color: rgba(196, 80, 0, 0.8);
            border-radius: 50%;
            padding: 1.25rem;
            background-size: 60%;
        }

        /* Botón pausa carrusel (WCAG 2.2.2) */
        .efr-carousel-pause {
            position: absolute;
            bottom: 12px;
            right: 12px;
            z-index: 10;
            background-color: rgba(196, 80, 0, 0.85);
            color: #fff;
            border: 2px solid #fff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .efr-carousel-pause:hover,
        .efr-carousel-pause:focus-visible {
            background-color: #a34200;
            outline: 3px solid #005fcc;
            outline-offset: 2px;
        }

        /* ===== Focus visible global ===== */
        .efr-seccion a:focus-visible,
        .efr-seccion button:focus-visible {
            outline: 3px solid #005fcc;
            outline-offset: 2px;
        }

        /* ===== Responsive ===== */
        @media (min-width: 768px) {
            .efr-box-parrafo {
                padding: 2rem 2.5rem 0;
            }

            .efr-info-gr {
                grid-template-columns: 1fr 1fr;
                padding: 2rem;
            }

            .efr-box-pdf .imagen {
                max-width: 80%;
            }
        }

        @media (max-width: 575px) {
            .efr-seccion {
                padding: 0 0.5rem;
            }

            .efr-box-parrafo {
                padding: 1rem 0.5rem 0;
            }

            .efr-tabs .nav-pills {
                grid-template-columns: repeat(2, 1fr);
            }

            .efr-perfiles {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 1rem;
            }

            .efr-perfil .foto img {
                width: 110px;
                height: 110px;
            }

            .efr-footer {
                padding: 1.5rem 1rem;
            }

            .efr-footer .titulo-canal {
                min-height: auto;
                margin-bottom: 1rem;
            }
        }

        /* ===== Reducción de movimiento (WCAG 2.3.3) ===== */
        @media (prefers-reduced-motion: reduce) {
            .efr-perfil {
                transition: none;
            }

            .efr-btn {
                transition: none;
            }

            .carousel-item {
                transition: none;
            }
        }

        /* ===== Alto contraste (WCAG) ===== */
        @media (forced-colors: active) {
            .efr-tabs .nav-pills .nav-link.active {
                border: 2px solid ButtonText;
            }

            .efr-btn a {
                color: LinkText;
            }
        }
    </style>

    {{-- Contenido principal con landmark y lang --}}
    <article class="efr-seccion" aria-labelledby="efr-page-title" lang="es">

        <h2 id="efr-page-title" class="visually-hidden">Sistema de Gestión Empresa Familiarmente Responsable (efr)</h2>

        {{-- Encabezado con logo --}}
        <header class="efr-encabezado">
            <div class="icono-box">
                <img class="img-fluid" src="/sites/default/files/Paginas/18-10-2022/logo_efr-01.png"
                    alt="Logo Empresa Familiarmente Responsable - efr" width="460" height="200" loading="eager">
            </div>
        </header>

        {{-- Carrusel de imágenes --}}
        <section aria-labelledby="efr-galeria-title" class="mb-4">
            <h3 id="efr-galeria-title" class="visually-hidden">Galería de imágenes de actividades efr</h3>
            <div id="carousel-efr" class="carousel slide" data-bs-ride="false" data-bs-interval="6000"
                aria-roledescription="carrusel" aria-label="Fotografías de actividades efr">

                {{-- Indicadores --}}
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel-efr" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Ir a imagen 1 de 2: Celebración Día de la Familia"></button>
                    <button type="button" data-bs-target="#carousel-efr" data-bs-slide-to="1"
                        aria-label="Ir a imagen 2 de 2: Actividad recreativa con funcionarios"></button>
                </div>

                {{-- Diapositivas --}}
                <div class="carousel-inner" aria-live="polite">
                    <div class="carousel-item active" role="group" aria-roledescription="diapositiva"
                        aria-label="Imagen 1 de 2">
                        <img class="d-block w-100" src="/sites/default/files/Paginas/01-08-2024/recurso_efr_8.png"
                            alt="Celebración del Día de la Familia organizada por el programa efr de la Secretaría Distrital de Movilidad, con funcionarios participando en actividades al aire libre"
                            loading="lazy">
                    </div>
                    <div class="carousel-item" role="group" aria-roledescription="diapositiva" aria-label="Imagen 2 de 2">
                        <img class="d-block w-100" src="/sites/default/files/Paginas/01-08-2024/recurso_efr_9.png"
                            alt="Actividad recreativa del programa efr con funcionarios de la Secretaría Distrital de Movilidad compartiendo en familia"
                            loading="lazy">
                    </div>
                </div>

                {{-- Controles prev/next --}}
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-efr" data-bs-slide="prev"
                    aria-label="Imagen anterior">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-efr" data-bs-slide="next"
                    aria-label="Imagen siguiente">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>

                {{-- Botón pausa/reproducir (WCAG 2.2.2 - Pausar, detener, ocultar) --}}
                <button type="button" class="efr-carousel-pause" aria-label="Pausar carrusel automático"
                    id="carousel-efr-pause">
                    <span class="bi bi-pause-fill" aria-hidden="true"></span>
                </button>
            </div>
        </section>

        {{-- Sección: ¿Qué es efr? --}}
        <section class="efr-box-parrafo" aria-labelledby="efr-que-es">
            <div class="efr-titulo">
                <h3 id="efr-que-es">¿Qué es <span class="efr-enfasis">efr</span>?</h3>
            </div>
            <p>
                Empresa Familiarmente Responsable (<abbr title="Empresa Familiarmente Responsable">efr</abbr>)
                es una norma internacional certificable que forma parte de la Responsabilidad Social Empresarial.
                Es un modelo de gestión orientado a la conciliación o equilibrio de la vida personal, familiar y laboral,
                basado en la mejora continua y orientado a la obtención de resultados.
            </p>
        </section>

        {{-- Sección: Videos con tabs --}}
        <section class="efr-box-videos" aria-labelledby="efr-videos-title">
            <h3 id="efr-videos-title" class="visually-hidden">Videos y actividades efr</h3>
            <div class="efr-tabs">
                <div class="tab-content" id="efr-tab-content">
                    <div class="tab-pane fade show active" id="menu0" role="tabpanel" aria-labelledby="tab-menu0"
                        tabindex="0">
                        <div class="efr-video-wrapper">
                            <iframe src="https://www.youtube.com/embed/t1SptDTxjfE?si=tR5lXzAPaSGm-3AH"
                                title="Video: Zona de bienestar efr"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu1" role="tabpanel" aria-labelledby="tab-menu1" tabindex="0">
                        <div class="efr-video-wrapper">
                            <iframe src="https://www.youtube.com/embed/PmI6VQb5kKM?si=D39ZfAg0HJzmVrOC"
                                title="Video: Firma compromiso efr"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu2" role="tabpanel" aria-labelledby="tab-menu2"
                        tabindex="0">
                        <div class="efr-video-wrapper">
                            <iframe src="https://www.youtube.com/embed/nFRsa6mKVEk?si=UMMONExKvEU4vr7U"
                                title="Video: Olimpiadas Deportivas 2024"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu3" role="tabpanel" aria-labelledby="tab-menu3"
                        tabindex="0">
                        <div class="efr-video-wrapper">
                            <iframe src="https://www.youtube.com/embed/JwJSUBZYgrc" title="Video: Día de la Familia 2025"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu4" role="tabpanel" aria-labelledby="tab-menu4"
                        tabindex="0">
                        <div class="efr-video-wrapper">
                            <iframe src="https://www.youtube.com/embed/tW1ELLsN15U" title="Video: Equipo efr"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu5" role="tabpanel" aria-labelledby="tab-menu5"
                        tabindex="0">
                        <div class="efr-video-wrapper">
                            <iframe src="https://www.youtube.com/embed/GhkECf9fXgQ" title="Video: Movipet efr"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu6" role="tabpanel" aria-labelledby="tab-menu6"
                        tabindex="0">
                        <div class="efr-video-wrapper">
                            <video controls
                                poster="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/sxcv-imagen_221018_ca.jpg"
                                aria-label="Video: Vacaciones Movidivertidas"
                                style="width:100%; height:100%; position:absolute; top:0; left:0; object-fit:contain;">
                                <source
                                    src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/18-10-2022/vacacionesmodivertidas.mp4"
                                    type="video/mp4">
                                Su navegador no soporta la reproducción de video.
                            </video>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu7" role="tabpanel" aria-labelledby="tab-menu7"
                        tabindex="0">
                        <div class="efr-video-wrapper">
                            <iframe src="https://www.youtube.com/embed/RZnvwGWjjsk" title="Video: Visita Zipaquirá efr"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-pills" id="efr-tabs" role="tablist" aria-label="Categorías de videos efr">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab-menu0" data-bs-toggle="pill" data-bs-target="#menu0"
                            type="button" role="tab" aria-controls="menu0" aria-selected="true">Zona de
                            bienestar</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-menu1" data-bs-toggle="pill" data-bs-target="#menu1"
                            type="button" role="tab" aria-controls="menu1" aria-selected="false">Firma
                            compromiso</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-menu2" data-bs-toggle="pill" data-bs-target="#menu2"
                            type="button" role="tab" aria-controls="menu2" aria-selected="false">Olimpiadas
                            Deportivas 2024</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-menu3" data-bs-toggle="pill" data-bs-target="#menu3"
                            type="button" role="tab" aria-controls="menu3" aria-selected="false">Día de la Familia
                            2025</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-menu4" data-bs-toggle="pill" data-bs-target="#menu4"
                            type="button" role="tab" aria-controls="menu4" aria-selected="false">Equipo
                            efr</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-menu5" data-bs-toggle="pill" data-bs-target="#menu5"
                            type="button" role="tab" aria-controls="menu5" aria-selected="false">Movipet</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-menu6" data-bs-toggle="pill" data-bs-target="#menu6"
                            type="button" role="tab" aria-controls="menu6" aria-selected="false">Vacaciones
                            Movidivertidas</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-menu7" data-bs-toggle="pill" data-bs-target="#menu7"
                            type="button" role="tab" aria-controls="menu7" aria-selected="false">Visita
                            Zipaquirá</button>
                    </li>
                </ul>
            </div>
        </section>

        {{-- Sección: ¿Quién es Fundación Más Familia? --}}
        <section class="efr-box-parrafo" aria-labelledby="efr-fundacion">
            <div class="efr-titulo">
                <h3 id="efr-fundacion">¿Quién es <span class="efr-enfasis">Fundación Más Familia</span>?</h3>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-8">
                    <p>
                        Es una entidad privada, sin ánimo de lucro, aconfesional e independiente, que se constituye en el
                        2003,
                        para la <strong>protección, defensa y promoción de las familias,</strong> y en especial de aquellas
                        con
                        dependencias (menores, mayores, personas con discapacidad, etc.), en su seno.
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <figure class="text-center m-0">
                        <img class="img-fluid" style="max-width: 260px;"
                            src="/sites/default/files/Paginas/10-03-2022/logo-headerv2.webp"
                            alt="Logo de la Fundación Más Familia" width="296" height="100" loading="lazy">
                    </figure>
                </div>
            </div>
        </section>

        {{-- Sección: Propósito efr --}}
        <section class="efr-box-parrafo" aria-labelledby="efr-proposito">
            <div class="efr-titulo">
                <h3 id="efr-proposito">Propósito <span class="efr-enfasis">efr</span></h3>
            </div>
            <p>
                La Secretaría Distrital de Movilidad encuentra en el Sistema de Gestión
                <abbr title="Empresa Familiarmente Responsable">efr</abbr>
                la alternativa para afrontar una nueva forma de dirección y gestión de las personas, con nuevos métodos y
                herramientas para cimentar un equipo <strong>comprometido, productivo, eficiente y de la misma manera feliz,
                    en entornos flexibles y armónicos.</strong>
            </p>
            <p>
                Alcanzando así un mayor equilibrio entre <strong>la vida personal, laboral y familiar</strong> que parte de
                la
                responsabilidad y el compromiso bidireccional <span class="efr-enfasis">Entidad – Persona</span>.
            </p>

            <div class="efr-info-gr" role="region" aria-labelledby="efr-busca-title">
                <div class="paragraph-vrt">
                    <h3 id="efr-busca-title">¿Qué busca el Sistema de Gestión <span class="efr-enfasis">efr</span> en la
                        SDM?</h3>
                    <h4>Para generar altos estándares de calidad en el clima laboral</h4>
                    <ul>
                        <li>Promover una movilidad inteligente dentro de los funcionarios de la Secretaría Distrital de
                            Movilidad</li>
                        <li>Hacer un uso eficiente de la infraestructura física de la Entidad, optimizando espacios y
                            ampliando zonas de bienestar para el uso común</li>
                        <li>Incentivar la productividad</li>
                        <li>Reducir el ausentismo</li>
                        <li>Mejorar la calidad de vida de los funcionarios</li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- Sección: Compromiso de la dirección --}}
        <section class="efr-box-pdf" aria-labelledby="efr-compromiso">
            <div class="efr-titulo">
                <h3 id="efr-compromiso">Compromiso de la dirección con el Sistema de Gestión <span
                        class="efr-enfasis">efr</span></h3>
            </div>
            <figure class="imagen">
                <a href="/sites/default/files/Paginas/23-10-2024/diseno_efr_mailing_op2.jpg" target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Ver imagen completa del documento de compromiso efr (se abre en nueva ventana)">
                    <img class="img-fluid w-100" src="/sites/default/files/Paginas/23-10-2024/diseno_efr_mailing_op2.jpg"
                        alt="Documento de compromiso de la dirección con el Sistema de Gestión efr, firmado por la Secretaría Distrital de Movilidad"
                        width="760" height="540" loading="lazy">
                </a>
                <figcaption class="visually-hidden">Imagen del documento de compromiso efr</figcaption>
            </figure>
            <p class="mt-3">
                <a href="/sites/default/files/Paginas/23-10-2024/doc102124-10212024090633.pdf" target="_blank"
                    rel="noopener noreferrer" download
                    aria-label="Descargar documento PDF: Compromiso de la Dirección con el Sistema de Gestión efr (se abre en nueva ventana)">
                    <span aria-hidden="true">📄</span>
                    Descargue el documento PDF "Compromiso de la Dirección con el Sistema de Gestión efr"
                </a>
            </p>
        </section>

        {{-- Sección: Líderes efr --}}
        <section class="mt-5" aria-labelledby="efr-lideres">
            <div class="efr-titulo">
                <h3 id="efr-lideres">Líderes <span class="efr-enfasis">efr</span></h3>
            </div>
            <div class="efr-perfiles" role="list" aria-label="Líderes del programa efr">
                <article class="efr-perfil" role="listitem">
                    <div class="foto">
                        <img class="img-fluid" src="/sites/default/files/Paginas/09-05-2024/clemencia_rojas_arias.png"
                            alt="" width="220" height="220" loading="lazy">
                    </div>
                    <div class="nombre">
                        <h3>Clemencia Rojas Arias</h3>
                        <h4><strong>Responsable de la Dirección</strong> – Subsecretaria de Gestión Corporativa</h4>
                    </div>
                </article>
                <article class="efr-perfil" role="listitem">
                    <div class="foto">
                        <img class="img-fluid" src="/sites/default/files/Paginas/12-04-2023/luz_mary_peralta.png"
                            alt="" width="220" height="220" loading="lazy">
                    </div>
                    <div class="nombre">
                        <h3>Luz Mary Peralta</h3>
                        <h4><strong>Manager efr</strong> – Directora Administrativa y Financiera</h4>
                    </div>
                </article>
                <article class="efr-perfil" role="listitem">
                    <div class="foto">
                        <img class="img-fluid"
                            src="/sites/default/files/Paginas/12-08-2024/maria_teresa_rodriguez_leal.png" alt=""
                            width="220" height="220" loading="lazy">
                    </div>
                    <div class="nombre">
                        <h3>María Teresa Rodríguez Leal</h3>
                        <h4><strong>Coordinadora efr</strong> – Directora de Talento Humano</h4>
                    </div>
                </article>
            </div>
        </section>

        {{-- Sección: Equipo Técnico --}}
        <section class="mt-4" aria-labelledby="efr-equipo">
            <div class="efr-titulo">
                <h3 id="efr-equipo">Equipo <span class="efr-enfasis">Técnico</span></h3>
            </div>
            <div class="efr-perfiles" role="list" aria-label="Equipo técnico efr">
                <article class="efr-perfil" role="listitem">
                    <div class="foto">
                        <img class="img-fluid" src="/sites/default/files/Paginas/09-05-2024/ilba_milady_vargas_guiza.png"
                            alt="" width="220" height="220" loading="lazy">
                    </div>
                    <div class="nombre">
                        <h3>Ilba Milady Vargas Guiza</h3>
                        <h4>Subdirectora Administrativa</h4>
                    </div>
                </article>
                <article class="efr-perfil" role="listitem">
                    <div class="foto">
                        <img class="img-fluid" src="/sites/default/files/Paginas/18-10-2022/maria_claudia_gomez.png"
                            alt="" width="220" height="220" loading="lazy">
                    </div>
                    <div class="nombre">
                        <h3>María Claudia Gómez Salazar</h3>
                        <h4>Profesional Dirección de Talento Humano</h4>
                    </div>
                </article>
                <article class="efr-perfil" role="listitem">
                    <div class="foto">
                        <img class="img-fluid" src="/sites/default/files/Paginas/18-10-2022/claudia_gonzalez.png"
                            alt="" width="220" height="220" loading="lazy">
                    </div>
                    <div class="nombre">
                        <h3>Claudia Marcela González Sánchez</h3>
                        <h4>Profesional Oficina Asesora de Comunicaciones y Cultura para la Movilidad</h4>
                    </div>
                </article>
                <article class="efr-perfil" role="listitem">
                    <div class="foto">
                        <img class="img-fluid" src="/sites/default/files/Paginas/18-10-2022/andres_felipe_castro.png"
                            alt="" width="220" height="220" loading="lazy">
                    </div>
                    <div class="nombre">
                        <h3>Andrés Felipe Castro</h3>
                        <h4>Profesional Oficina Asesora de Planeación Institucional</h4>
                    </div>
                </article>
            </div>
        </section>

        <hr class="my-4" aria-hidden="true">

        {{-- Sección: Botones de descarga --}}
        <section class="py-4" aria-labelledby="efr-recursos">
            <div class="efr-titulo">
                <h3 id="efr-recursos">Recursos <span class="efr-enfasis">efr</span></h3>
            </div>
            <div class="row g-3">
                <div class="col-12 col-sm-6">
                    <div class="efr-btn">
                        <a href="/sites/default/files/Paginas/31-07-2025/Cartilla_efr_2025.pdf" target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Descargar Cartilla efr 2025 en PDF (se abre en nueva ventana)">
                            Cartilla <strong>efr</strong>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="efr-btn">
                        <a href="https://drive.google.com/file/d/1BZulyhKLNuifbRxcKVkplL4rgrTJT-jQ/view" target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ver documento de Dirección y orientación estratégica efr (se abre en nueva ventana)">
                            Dirección y orientación estratégica <strong>efr</strong>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Sección: Documentos de interés (Accordion) --}}
        <section class="efr-accordion mb-4" aria-labelledby="efr-docs-interes">
            <h3 id="efr-docs-interes" class="visually-hidden">Documentos de interés</h3>
            <div class="accordion" id="accordion-recursos">
                <div class="accordion-item">
                    <h4 class="accordion-header" id="heading-2024">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-2024" aria-expanded="false" aria-controls="collapse-2024">
                            Documentos de interés
                        </button>
                    </h4>
                    <div id="collapse-2024" class="accordion-collapse collapse" aria-labelledby="heading-2024"
                        data-bs-parent="#accordion-recursos">
                        <div class="accordion-body">
                            <p>Contenido de documentos de interés.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Sección: Canales de comunicación --}}
        <section class="efr-footer" aria-labelledby="efr-canales" role="contentinfo">
            <div class="row align-items-center g-3">
                <div class="col-12 col-md-5">
                    <div class="titulo-canal">
                        <h3 id="efr-canales">
                            Canales de comunicación<br>
                            <span class="efr-enfasis" style="font-size: 1.4em;">efr</span>
                        </h3>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <address class="resumen" aria-label="Información de contacto efr">
                        <dl class="mb-2">
                            <dt>Fundación Más Familia:</dt>
                            <dd>
                                <a href="http://www.soyefr.org/canal" target="_blank" rel="noopener noreferrer"
                                    aria-label="Sitio web de Fundación Más Familia (se abre en nueva ventana)">
                                    www.soyefr.org/canal
                                </a>
                            </dd>
                        </dl>
                        <dl class="mb-2">
                            <dt>Correo electrónico:</dt>
                            <dd>
                                <a href="mailto:tufelicidadnosmueve@movilidadbogota.gov.co"
                                    aria-label="Enviar correo a tufelicidadnosmueve@movilidadbogota.gov.co">
                                    tufelicidadnosmueve@movilidadbogota.gov.co
                                </a>
                            </dd>
                        </dl>
                    </address>
                </div>
            </div>
        </section>

    </article>{{-- /.efr-seccion --}}

    {{-- Script: Control de pausa del carrusel (WCAG 2.2.2) y prefers-reduced-motion --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var carouselEl = document.getElementById('carousel-efr');
            var pauseBtn = document.getElementById('carousel-efr-pause');
            if (!carouselEl || !pauseBtn) return;

            var carousel = bootstrap.Carousel.getOrCreateInstance(carouselEl, {
                interval: 6000
            });
            var isPlaying = true;

            // Respetar prefers-reduced-motion (WCAG 2.3.3)
            var motionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
            if (motionQuery.matches) {
                carousel.pause();
                isPlaying = false;
                pauseBtn.setAttribute('aria-label', 'Reproducir carrusel automático');
                pauseBtn.innerHTML = '<span class="bi bi-play-fill" aria-hidden="true"></span>';
            } else {
                carousel.cycle();
            }

            pauseBtn.addEventListener('click', function() {
                if (isPlaying) {
                    carousel.pause();
                    isPlaying = false;
                    pauseBtn.setAttribute('aria-label', 'Reproducir carrusel automático');
                    pauseBtn.innerHTML = '<span class="bi bi-play-fill" aria-hidden="true"></span>';
                } else {
                    carousel.cycle();
                    isPlaying = true;
                    pauseBtn.setAttribute('aria-label', 'Pausar carrusel automático');
                    pauseBtn.innerHTML = '<span class="bi bi-pause-fill" aria-hidden="true"></span>';
                }
            });

            // Pausar al recibir foco con teclado dentro del carrusel (WCAG 2.2.2)
            carouselEl.addEventListener('focusin', function() {
                if (isPlaying) {
                    carousel.pause();
                }
            });

            carouselEl.addEventListener('focusout', function(e) {
                if (isPlaying && !carouselEl.contains(e.relatedTarget)) {
                    carousel.cycle();
                }
            });

            // Pausar al pasar el mouse (usabilidad)
            carouselEl.addEventListener('mouseenter', function() {
                if (isPlaying) carousel.pause();
            });

            carouselEl.addEventListener('mouseleave', function() {
                if (isPlaying) carousel.cycle();
            });
        });
    </script>

@endsection
