<a class="skip-link-gev" href="#contenido-principal-gev">Saltar al contenido principal</a>

<style>
    .gev-wrapper {
        --gov-primary: #1f223e;
        --gov-primary-2: #2c3159;
        --gov-accent: #bed000;
        --gov-accent-2: #8f9f00;
        --gov-text: #1f223e;
        --gov-muted: #40455d;
        --gov-border: #d9dce6;
        --gov-soft: #f7f8fb;
        --gov-focus: #ffab00;
        max-width: 1200px;
        margin: 0 auto;
        padding: 1rem;
        color: var(--gov-text);
        font-family: "Work Sans", "Montserrat", sans-serif;
    }

    .skip-link-gev {
        position: absolute;
        left: -9999px;
        top: .75rem;
        z-index: 1200;
        background: #000;
        color: #fff;
        padding: .75rem 1rem;
        border-radius: .5rem;
        text-decoration: none;
    }

    .skip-link-gev:focus,
    .skip-link-gev:focus-visible {
        left: .75rem;
    }

    .gev-wrapper a:focus-visible,
    .gev-wrapper button:focus-visible,
    .gev-wrapper iframe:focus-visible {
        outline: 3px solid var(--gov-focus);
        outline-offset: 3px;
    }

    .gev-wrapper .breadcrumb {
        margin-bottom: 1rem;
        background: transparent;
    }

    .gev-hero {
        position: relative;
        overflow: hidden;
        border-radius: 0;
        background:
            linear-gradient(90deg, rgba(31, 34, 62, 0.98) 0%, rgba(31, 34, 62, 0.96) 62%, rgba(190, 208, 0, 0.88) 100%);
        color: #fff;
        box-shadow: 0 16px 30px rgba(31, 34, 62, 0.12);
        border-top: 8px solid var(--gov-accent);
    }

    .gev-hero::before,
    .gev-hero::after {
        content: "";
        position: absolute;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.08);
    }

    .gev-hero::before {
        width: 14rem;
        height: 14rem;
        top: -5rem;
        right: -4rem;
    }

    .gev-hero::after {
        width: 9rem;
        height: 9rem;
        bottom: -3rem;
        left: -1rem;
    }

    .gev-hero__inner {
        position: relative;
        z-index: 1;
        padding: 2rem;
    }

    .gev-kicker {
        display: inline-block;
        padding: .45rem .8rem;
        border-radius: 0;
        background: rgba(255, 255, 255, 0.12);
        border-left: 4px solid var(--gov-accent);
        font-size: .82rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
    }

    .gev-title {
        margin: 1rem 0 .75rem;
        font-family: "Montserrat", sans-serif;
        font-size: clamp(2.2rem, 1.8rem + 2vw, 4rem);
        line-height: 1.02;
    }

    .gev-hero__text {
        max-width: 64ch;
        margin: 0;
        font-size: 1.05rem;
        line-height: 1.75;
        color: rgba(255, 255, 255, 0.96);
    }

    .gev-section {
        margin-top: 1.5rem;
    }

    .gev-surface,
    .gev-card {
        background: #fff;
        border: 1px solid var(--gov-border);
        border-radius: 0;
        box-shadow: 0 8px 20px rgba(31, 34, 62, 0.06);
    }

    .gev-section__body {
        padding: 1.5rem;
    }

    .gev-section__title {
        margin: 0 0 .75rem;
        color: var(--gov-primary);
        font-family: "Montserrat", sans-serif;
        font-size: clamp(1.5rem, 1.3rem + .8vw, 2rem);
        text-transform: uppercase;
    }

    .gev-wrapper p,
    .gev-wrapper li,
    .gev-wrapper dd {
        color: var(--gov-muted);
        line-height: 1.75;
    }

    .gev-highlight {
        font-weight: 700;
        color: var(--gov-primary);
    }

    .gev-stats {
        display: grid;
        gap: 1rem;
        margin-top: 1.25rem;
    }

    .gev-stat {
        padding: 1.2rem;
        border-radius: 0;
        background: var(--gov-soft);
        border: 1px solid var(--gov-border);
        border-top: 4px solid var(--gov-accent);
    }

    .gev-stat h3 {
        margin-bottom: .5rem;
        color: var(--gov-primary);
        font-size: 1rem;
        font-family: "Montserrat", sans-serif;
    }

    .accordion-item {
        border: 1px solid var(--gov-border);
        border-radius: 0;
        overflow: hidden;
    }

    .accordion-item + .accordion-item {
        margin-top: .9rem;
    }

    .accordion-button {
        font-weight: 700;
        color: var(--gov-primary);
        background: #fff;
        text-transform: uppercase;
    }

    .accordion-button:not(.collapsed) {
        color: var(--gov-primary);
        background: #f4f6eb;
        box-shadow: none;
        border-bottom: 3px solid var(--gov-accent);
    }

    .accordion-body h3 {
        margin-top: 1rem;
        color: var(--gov-primary);
        font-size: 1.05rem;
        font-family: "Montserrat", sans-serif;
    }

    .accordion-body h3:first-child {
        margin-top: 0;
    }

    .gev-list {
        padding-left: 1.15rem;
        margin-bottom: 0;
    }

    .gev-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 2.75rem;
        padding: .72rem 1rem;
        border-radius: 0;
        border: 2px solid var(--gov-primary);
        color: var(--gov-primary);
        background: #fff;
        text-decoration: none;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .02em;
    }

    .gev-link:hover,
    .gev-link:focus-visible {
        color: #192331;
        background: var(--gov-accent);
        border-color: var(--gov-accent-2);
    }

    .gev-grid-3 {
        display: grid;
        gap: 1rem;
    }

    .gev-news__image {
        width: 100%;
        aspect-ratio: 16 / 9;
        object-fit: cover;
        display: block;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom: 4px solid var(--gov-accent);
    }

    .gev-news__body,
    .gev-video__body {
        padding: 1.2rem;
    }

    .gev-news__body h3,
    .gev-video__body h3 {
        color: var(--gov-primary);
        font-size: 1.15rem;
        line-height: 1.35;
        font-family: "Montserrat", sans-serif;
    }

    .gev-video iframe,
    .gev-map iframe {
        display: block;
        width: 100%;
        border: 0;
    }

    .gev-video iframe {
        aspect-ratio: 16 / 9;
    }

    .gev-map iframe {
        min-height: 28rem;
    }

    .gev-note {
        margin-top: 1rem;
        padding: 1rem 1.1rem;
        border-left: 4px solid var(--gov-accent-2);
        border-radius: 0;
        background: #f6f8eb;
        color: #465400;
    }

    .gev-contact {
        background: linear-gradient(180deg, #1f223e 0%, #2c3159 100%);
        color: #fff;
        border-top: 8px solid var(--gov-accent);
    }

    .gev-contact .gev-section__title,
    .gev-contact dt {
        color: #fff;
    }

    .gev-contact p,
    .gev-contact dd {
        color: rgba(255, 255, 255, 0.94);
    }

    .gev-contact a {
        color: #fff;
        font-weight: 700;
        text-underline-offset: .18em;
    }

    .gev-contact a:hover,
    .gev-contact a:focus-visible {
        color: #162230;
        background: var(--gov-accent);
        border-radius: .3rem;
    }

    .visually-hidden-extra {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    @media (min-width: 768px) {
        .gev-wrapper {
            padding: 1.25rem;
        }

        .gev-hero__inner {
            padding: 2.75rem;
        }

        .gev-stats,
        .gev-grid-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }
</style>

<div class="gev-wrapper">
    <nav aria-label="Miga de pan">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gerencia en Via</li>
        </ol>
    </nav>

    <header class="gev-hero" aria-labelledby="titulo-gerencia">
        <div class="gev-hero__inner">
            <span class="gev-kicker">Secretaria Distrital de Movilidad</span>
            <h1 class="gev-title" id="titulo-gerencia">Gerencia en Via</h1>
            <p class="gev-hero__text">
                Somos un grupo estrategico interdisciplinario orientado a
                <span class="gev-highlight">solucionar, planear, gestionar y optimizar la movilidad</span>
                en todas las localidades de Bogota, con enfoque en servicio a la ciudadania, seguridad vial y gestion
                operativa del espacio vial.
            </p>
        </div>
    </header>

    <main id="contenido-principal-gev" tabindex="-1">
        <section class="gev-section gev-surface" aria-labelledby="seccion-presentacion">
            <div class="gev-section__body">
                <h2 class="gev-section__title" id="seccion-presentacion">Presentacion</h2>
                <p>
                    Esta version reorganiza el micrositio con una estructura mas clara para lectura, navegacion por
                    teclado y patrones compatibles con Bootstrap 5 y lineamientos visuales cercanos a `.gov.co`.
                </p>
                <div class="gev-stats">
                    <article class="gev-stat">
                        <h3>Gestion operativa</h3>
                        <p>Coordinamos acciones en via para mejorar flujo, seguridad y respuesta ante incidentes.</p>
                    </article>
                    <article class="gev-stat">
                        <h3>Servicio a la ciudadania</h3>
                        <p>Consolidamos informacion util en canales, contenidos y accesos institucionales.</p>
                    </article>
                    <article class="gev-stat">
                        <h3>Accesibilidad</h3>
                        <p>Se prioriza foco visible, jerarquia de encabezados, contraste y comprension.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="gev-section gev-surface" aria-labelledby="seccion-areas">
            <div class="gev-section__body">
                <h2 class="gev-section__title" id="seccion-areas">Areas de trabajo</h2>
                <div class="accordion" id="accordionGerencia">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingGestion">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseGestion" aria-expanded="true" aria-controls="collapseGestion">
                                Gestion en Via
                            </button>
                        </h3>
                        <div id="collapseGestion" class="accordion-collapse collapse show"
                            aria-labelledby="headingGestion" data-bs-parent="#accordionGerencia">
                            <div class="accordion-body">
                                <p>Dirige la ejecucion de acciones en via para mejorar condiciones de transito, mitigar riesgos y promover seguridad vial.</p>
                                <h3>Grupo Guia</h3>
                                <p>Personal operativo que apoya la gestion del transito en localidades y corredores con equipos motorizados, en bicicleta y a pie.</p>
                                <h3>Centro de Gestion de Transito</h3>
                                <p>Monitorea la movilidad con camaras y otras fuentes para coordinar respuesta ante incidentes y solicitudes ciudadanas.</p>
                                <h3>Gerencias</h3>
                                <p>Equipo multidisciplinario que impulsa intervenciones de bajo costo y alto impacto apoyadas en tecnologia y analitica.</p>
                                <h3>Enlaces relacionados</h3>
                                <p class="mb-2">
                                    <a class="gev-link" href="https://www.movilidadbogota.gov.co/web/agentesdetransitociviles" target="_blank" rel="noopener noreferrer">Agentes de Transito Civiles</a>
                                </p>
                                <p class="mb-0">
                                    <a class="gev-link" href="https://www.movilidadbogota.gov.co/web/ninos-primero" target="_blank" rel="noopener noreferrer">Ninas y Ninos Primero</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingControl">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseControl" aria-expanded="false" aria-controls="collapseControl">
                                Control de Transito
                            </button>
                        </h3>
                        <div id="collapseControl" class="accordion-collapse collapse"
                            aria-labelledby="headingControl" data-bs-parent="#accordionGerencia">
                            <div class="accordion-body">
                                <p>Ejecuta estrategias de regulacion y control del transito y del transporte para mejorar condiciones de movilidad y cumplimiento normativo.</p>
                                <ul class="gev-list">
                                    <li>Planes operativos con criterios de priorizacion, programacion y seguimiento.</li>
                                    <li>Evaluacion de operativos con herramientas tecnologicas.</li>
                                    <li>Buenas practicas con enfasis en seguridad vial.</li>
                                </ul>
                                <p class="mt-3 mb-0">
                                    <a class="gev-link" href="https://www.movilidadbogota.gov.co/web/guias_de_gestion_y_control_de_transito_y_transporte" target="_blank" rel="noopener noreferrer">Ver guias de gestion y control</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingSenalizacion">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSenalizacion" aria-expanded="false" aria-controls="collapseSenalizacion">
                                Senalizacion
                            </button>
                        </h3>
                        <div id="collapseSenalizacion" class="accordion-collapse collapse"
                            aria-labelledby="headingSenalizacion" data-bs-parent="#accordionGerencia">
                            <div class="accordion-body">
                                <p>Ejecuta politicas, planes, programas y proyectos relacionados con elementos y dispositivos de regulacion del transito para ordenar el espacio vial.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingSemaforizacion">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSemaforizacion" aria-expanded="false" aria-controls="collapseSemaforizacion">
                                Semaforizacion
                            </button>
                        </h3>
                        <div id="collapseSemaforizacion" class="accordion-collapse collapse"
                            aria-labelledby="headingSemaforizacion" data-bs-parent="#accordionGerencia">
                            <div class="accordion-body">
                                <p>Adelanta seguimiento y evaluacion a la implementacion de semaforizacion y al control del sistema semaforico inteligente.</p>
                                <h3>Sistema de Semaforos Inteligente</h3>
                                <p>Opera con manejo centralizado y protocolos abiertos para apoyar mediciones directas del transito y optimizar tiempos semaforicos.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingPmt">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePmt" aria-expanded="false" aria-controls="collapsePmt">
                                Planes de Manejo de Transito
                            </button>
                        </h3>
                        <div id="collapsePmt" class="accordion-collapse collapse"
                            aria-labelledby="headingPmt" data-bs-parent="#accordionGerencia">
                            <div class="accordion-body">
                                <p>Atiende solicitudes de PMT derivadas de obras, intervenciones y eventos para minimizar impactos sobre la movilidad.</p>
                                <ul class="gev-list">
                                    <li><a href="https://www.movilidadbogota.gov.co/web/pmt" target="_blank" rel="noopener noreferrer">Portal PMT SDM</a></li>
                                    <li><a href="https://www.simur.gov.co/pmt" target="_blank" rel="noopener noreferrer">Portal PMT SIMUR</a></li>
                                    <li><a href="http://movilidadbogota.maps.arcgis.com/apps/webappviewer/index.html?id=219e91e4397f4f8d99c4c1aaa66ba2c4" target="_blank" rel="noopener noreferrer">Visor georreferenciado de PMT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingAgentes">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseAgentes" aria-expanded="false" aria-controls="collapseAgentes">
                                Agentes de Transito Civiles
                            </button>
                        </h3>
                        <div id="collapseAgentes" class="accordion-collapse collapse"
                            aria-labelledby="headingAgentes" data-bs-parent="#accordionGerencia">
                            <div class="accordion-body">
                                <p>Grupo de empleados publicos investidos de autoridad para funciones preventivas, asistencia tecnica, vigilancia y control en via.</p>
                                <p class="mb-0">
                                    <a class="gev-link" href="https://www.movilidadbogota.gov.co/web/agentesdetransitociviles" target="_blank" rel="noopener noreferrer">Ir al portal de agentes</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="gev-section gev-surface" aria-labelledby="seccion-noticias">
            <div class="gev-section__body">
                <h2 class="gev-section__title" id="seccion-noticias">Noticias destacadas</h2>
                <div class="gev-grid-3">
                    <article class="gev-card">
                        <img class="gev-news__image" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Noticias/03-10-2023/agentes-civiles-movilidad.jpg" alt="Agentes civiles de transito durante operativos de control en Bogota." loading="lazy">
                        <div class="gev-news__body">
                            <h3>Refuerzo de controles y seguridad vial con agentes civiles</h3>
                            <p>La SDM fortalecio la operacion de control y apoyo ciudadano en via con la incorporacion de agentes civiles de transito.</p>
                            <a class="gev-link" href="https://www.movilidadbogota.gov.co/web/noticia/con_450_agentes_civiles_de_transito_la_secretaria_de_movilidad_refuerza_los_controles_y_la" target="_blank" rel="noopener noreferrer">Leer noticia completa</a>
                        </div>
                    </article>

                    <article class="gev-card">
                        <img class="gev-news__image" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-01-2022/gev_imgb_1.webp" alt="Equipo de Gerencia en Via en actividades de gestion de movilidad." loading="lazy">
                        <div class="gev-news__body">
                            <h3>Gestion territorial para mejorar la movilidad local</h3>
                            <p>El equipo interdisciplinario articula acciones tecnicas y operativas en distintas localidades de la ciudad.</p>
                        </div>
                    </article>

                    <article class="gev-card">
                        <img class="gev-news__image" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-01-2022/gev_imgb_2.webp" alt="Equipo operativo apoyando condiciones seguras de movilidad en corredores viales." loading="lazy">
                        <div class="gev-news__body">
                            <h3>Intervenciones con enfoque en seguridad vial</h3>
                            <p>Las acciones en via buscan reducir riesgos, ordenar el flujo y mejorar la experiencia de los actores viales.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="gev-section gev-surface" aria-labelledby="seccion-videos">
            <div class="gev-section__body">
                <h2 class="gev-section__title" id="seccion-videos">Videos informativos</h2>
                <div class="gev-grid-3">
                    <article class="gev-card gev-video">
                        <iframe src="https://www.youtube.com/embed/392OssQQ0IQ" title="Video informativo sobre revision tecnico mecanica" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                        <div class="gev-video__body">
                            <h3>Revision tecnico mecanica</h3>
                            <p>Material pedagogico para reforzar buenas practicas y control vehicular.</p>
                        </div>
                    </article>

                    <article class="gev-card gev-video">
                        <iframe src="https://www.youtube.com/embed/ZSwn60f3tAg" title="Video informativo sobre senales elevadas" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                        <div class="gev-video__body">
                            <h3>Senales elevadas</h3>
                            <p>Contenido de apoyo para comprender dispositivos de ordenamiento y seguridad vial.</p>
                        </div>
                    </article>

                    <article class="gev-card gev-video">
                        <iframe src="https://www.youtube.com/embed/iHfSimoAuA4" title="Video complementario sobre senalizacion vial" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                        <div class="gev-video__body">
                            <h3>Senalizacion vial</h3>
                            <p>Video complementario de consulta para ciudadania y actores institucionales.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="gev-section gev-surface" aria-labelledby="seccion-mapa">
            <div class="gev-section__body">
                <h2 class="gev-section__title" id="seccion-mapa">Mapa de consulta</h2>
                <div class="gev-card gev-map">
                    <iframe src="https://sig.simur.gov.co/VisorSIGSIMUR/" title="Mapa de consulta de movilidad y georreferenciacion de SIMUR" loading="lazy">El navegador usado no soporta esta tecnologia.</iframe>
                </div>
                <div class="gev-note">
                    Si el mapa no carga correctamente, puedes abrirlo en una nueva pestana:
                    <a href="https://sig.simur.gov.co/VisorSIGSIMUR/" target="_blank" rel="noopener noreferrer">
                        Visor SIG SIMUR
                        <span class="visually-hidden-extra">(abre en una nueva pestana)</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="gev-section gev-surface gev-contact" aria-labelledby="seccion-contacto">
            <div class="gev-section__body">
                <h2 class="gev-section__title" id="seccion-contacto">Contactanos</h2>
                <p>Utiliza los canales institucionales para registrar solicitudes, consultar puntos de atencion o comunicarte con el Centro de Contacto de Movilidad.</p>
                <dl class="mb-0">
                    <dt>Peticiones, quejas, reclamos y sugerencias</dt>
                    <dd>
                        <a href="https://www.movilidadbogota.gov.co/web/sdqs" target="_blank" rel="noopener noreferrer">
                            Portal SDQS de la Secretaria Distrital de Movilidad
                        </a>
                    </dd>
                    <dt class="mt-3">Puntos de atencion</dt>
                    <dd>
                        <a href="https://www.movilidadbogota.gov.co/web/puntos_de_atencion" target="_blank" rel="noopener noreferrer">
                            Consultar puntos de atencion
                        </a>
                    </dd>
                    <dt class="mt-3">Centro de Contacto de Movilidad</dt>
                    <dd><a href="tel:+6013649400">(601) 364 9400 opcion 2</a></dd>
                </dl>
            </div>
        </section>
    </main>
</div>
