@extends('layouts.app')
@section('title', 'Organigrama')

@section('content')
@push('styles')
<style>
    .org-page {
        --org-green: #bed000;
        --org-text: #282828;
        --space-2xs: 0.25rem;
        --space-xs: 0.5rem;
        --space-sm: 0.75rem;
        --space-md: 1rem;
        --space-lg: 1.25rem;
        --space-xl: 1.75rem;
    }

    .org-page .container > p:first-of-type {
        margin-bottom: var(--space-md);
    }

    .org-page .org-lead-section {
        margin-top: var(--space-md);
        margin-bottom: var(--space-lg);
    }

    .org-page .org-lead-photo {
        width: 100%;
        max-width: 320px;
        border-radius: 14px;
        object-fit: cover;
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
    }

    .org-page .org-lead-title {
        margin-bottom: var(--space-xs);
        font-weight: 700;
        color: var(--org-text);
    }

    .org-page .org-lead-role {
        margin-bottom: var(--space-md);
        font-weight: 600;
        color: var(--org-text);
    }

    .org-page .org-lead-bio {
        background: #e7e8ea;
        border-radius: 16px;
        padding: var(--space-lg);
        min-height: 0;
        max-height: none;
        overflow: visible;
    }

    .org-page .section-sdm {
        margin-top: var(--space-xl) !important;
        margin-bottom: var(--space-xl) !important;
        padding: clamp(1rem, 2vw, 1.75rem) !important;
    }

    /* Regla base: normaliza los margins inline heredados en la maqueta */
    .org-page .accordion .row[style*="margin:20px"] {
        margin: var(--space-xs) 0 !important;
    }

    .org-page .accordion .accordion-body > .row:first-child {
        margin-top: 0 !important;
    }

    .org-page .accordion .accordion-body > .row:last-child {
        margin-bottom: 0 !important;
    }

    /* Tarjetas con ritmo vertical consistente */
    .org-page .card {
        border-radius: 12px;
        padding: var(--space-md);
        box-shadow: none !important;
        border: 1px solid #d7dce1;
    }

    .org-page .card.mt-4.p-4 {
        margin-top: var(--space-sm) !important;
        padding: var(--space-md) !important;
    }

    .org-page .accordion-item {
        margin-bottom: var(--space-2xs) !important;
        border-radius: 10px;
        overflow: hidden;
    }

    .org-page .accordion .accordion-body {
        padding-top: var(--space-2xs) !important;
        padding-bottom: var(--space-2xs) !important;
    }

    .org-page .accordion {
        width: 100% !important;
    }

    .org-page .accordion .accordion-body {
        padding: 12px !important;
    }

    .org-page .accordion .accordion-button {
        padding: 0.5rem 0.75rem !important;
    }

    .org-page .accordion .accordion-item {
        margin-bottom: 12px !important;
    }

    .org-page .accordion .accordion-item:last-child {
        margin-bottom: 0 !important;
    }

    .org-page p {
        margin-bottom: var(--space-sm);
        line-height: 1.55;
    }

    .org-page hr {
        margin: var(--space-md) 0 !important;
    }

    .org-page p.text-center {
        margin: var(--space-md) 0 var(--space-lg);
    }

    .org-page p.text-align-center {
        margin: var(--space-sm) 0 var(--space-md);
    }

    .org-page .btn {
        border-radius: 999px !important;
    }

    .org-page .org-tools {
        position: sticky;
        top: 10px;
        z-index: 20;
        background: var(--org-green);
        border: 1px solid #9aaa00;
        border-radius: 12px;
        padding: 12px;
        margin: 16px 0 8px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        color: var(--org-text);
    }

    .org-page .org-tools-grid {
        display: grid;
        grid-template-columns: 1fr auto auto;
        gap: 8px;
        align-items: center;
    }

    .org-page .org-tools-title {
        margin: 0 0 8px;
        font-weight: 700;
        color: var(--org-text);
    }

    .org-page .org-tools .form-control {
        border-radius: 8px;
        color: var(--org-text);
    }

    .org-page .org-tools .form-control::placeholder {
        color: #4b4b4b;
    }

    .org-page .org-tools .btn {
        white-space: nowrap;
        color: #ffffff;
        border-color: #4d5500;
        background: #4d5500;
    }

    .org-page .org-tools .btn:hover {
        color: #ffffff;
        border-color: #3f4500;
        background: #3f4500;
    }

    .org-page .org-status {
        display: block;
        margin-top: 8px;
        color: var(--org-text);
        font-size: 0.9rem;
    }

    .org-page .accordion-button {
        font-weight: 600;
        color: var(--org-text);
    }

    .org-page .accordion-button:hover {
        color: #111827;
    }

    .org-page .card-gray {
        max-height: 18rem;
        overflow: auto;
    }

    .org-page .accordion .card.mt-4.p-4 .overflow-auto.card-gray {
        height: auto !important;
        max-height: none;
        overflow: visible;
    }

    .org-page .accordion .card.mt-4.p-4 > .row {
        align-items: flex-start;
        row-gap: var(--space-md);
    }

    .org-page .accordion .card.mt-4.p-4 .col-md-3.d-flex {
        align-items: flex-start !important;
    }

    .org-page .accordion .card.mt-4.p-4 .img-fluid.rounded-circle {
        width: min(180px, 100%);
        height: auto;
    }

    .org-page .accordion .card.mt-4.p-4 h2,
    .org-page .accordion .card.mt-4.p-4 h5 {
        margin-bottom: var(--space-xs);
    }

    .org-page .accordion .card.mt-4.p-4 .col-md-9 > .row {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .org-page .accordion .card.mt-4.p-4 .card-gray p:last-child {
        margin-bottom: 0;
    }

    .org-page .org-lead-bio.card-gray {
        height: auto;
        max-height: none;
        overflow: visible;
    }

    @media (max-width: 768px) {
        .org-page .org-tools-grid {
            grid-template-columns: 1fr;
        }

        .org-page .org-lead-section {
            margin-bottom: var(--space-md);
        }

        .org-page .org-lead-photo {
            max-width: 260px;
            margin-bottom: var(--space-md);
        }

        .org-page .org-lead-bio {
            padding: var(--space-md);
            border-radius: 12px;
        }

        .org-page .accordion .row[style*="margin:20px"] {
            margin: var(--space-2xs) 0 !important;
        }

        .org-page .card.mt-4.p-4 {
            margin-top: var(--space-xs) !important;
            padding: var(--space-sm) !important;
        }

        .org-page .card-gray {
            max-height: none;
            overflow: visible;
        }

        .org-page .accordion .card.mt-4.p-4 .overflow-auto.card-gray {
            height: auto !important;
            max-height: none;
            overflow: visible;
        }

        .org-page .accordion .card.mt-4.p-4 .img-fluid.rounded-circle {
            width: min(160px, 100%);
        }

        .org-page .org-lead-bio.card-gray {
            padding: var(--space-md);
        }

        .org-page .section-sdm {
            padding: 1rem !important;
        }
    }
</style>
@endpush

<div class="org-page">
<div class="container">
    <p>
        En este espacio se encuentra la estructura organizacional de la Secretaría de Movilidad, también podrá consultar quiénes son las personas que ejercen un rol directivo en nuestra Entidad, haciendo énfasis en sus perfiles profesionales, estudios y experiencia laboral previa.
    </p>
    <p class="text-align-center">
        <a class="btn btn-primary" href="/sites/default/files/2026-02-05/organigrama_noviembre%2004feb_2026.pdf" target="_blank" rel="noopener noreferrer">Ver Organigrama Completo</a>
    </p>
    <p class="text-center">
        <img class="img-fluid" src="/sites/default/files/2024-07/organigrama_principal_0.png" alt="Organigrama General de la Entidad" width="900" height="298" title="Organigrama General de la Entidad">
    </p>
    <section class="pt-5 org-lead-section">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <img class="img-fluid org-lead-photo" src="/sites/default/files/2025-11-07/claudia_diaz.jpg" alt="Claudia Diaz" width="300" height="450">
            </div>
            <div class="col-md-8">
                <h2 class="text-center org-lead-title">
                    Claudia Díaz Acosta
                </h2>
                <h3 class="text-center org-lead-role">
                    <small>Secretaria Distrital de Movilidad</small>
                </h3>
                <hr>
                <div class="org-lead-bio card-gray">
                    <p>
                        Claudia Díaz es la actual secretaria de movilidad de Bogotá. Es Ingeniera Ambiental con Maestría en Ingeniería Civil en el área de transporte de la Universidad de los Andes. Cuenta con más de 15 años de experiencia en diseño, gestión y ejecución de políticas y proyectos relacionados con la movilidad, tanto en el sector público&nbsp;como&nbsp;privado.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <div class="org-tools" role="region" aria-label="Herramientas de navegación del organigrama">
        <label for="orgSearch" class="org-tools-title">Buscador del organigrama</label>
        <div class="org-tools-grid">
            <input type="search" id="orgSearch" name="orgSearch" class="form-control" placeholder="Buscar por nombre, cargo o dependencia">
            <button type="button" class="btn btn-outline-secondary btn-sm" data-org-action="expand">Expandir todo</button>
            <button type="button" class="btn btn-outline-secondary btn-sm" data-org-action="collapse">Contraer todo</button>
        </div>
        <small id="orgSearchStatus" class="org-status">Escriba para filtrar resultados dentro del organigrama.</small>
    </div>

</div>
<div class="section-sdm my-5 p-5">
    <div class="accordion container" data-accordion-id="e02f84ca61bf75f4b7c6560533bfb8a85">
        <div class="accordion-item">
            <div class="accordion-header">
                <a class="accordion-button" href="#">1. Despacho de la Secretaría</a>
            </div>
            <div class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <p class="text-center">
                        <img class="img-fluid rounded-circle" src="/sites/default/files/2024-07/organigrama_1_1.png" alt="Organigrama General de la Entidad" width="900" height="423" title="Organigrama General de la Entidad" usemap="#image-map">
                    </p>
                    <div class="accordion" data-accordion-id="eefefc7447f8f2c59c472f47ffb6b2fdb">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">1.1. Oficina Asesora de Comunicaciones y Cultura para la Movilidad</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Asesora a la Secretaría Distrital de Movilidad en la formulación e implementación de políticas y estrategias de comunicación, adicionalmente tiene el rol de promover y fortalecer una cultura ciudadana segura, creando condiciones favorables para mejorar comportamientos en las vías generando un impacto positivo en la seguridad vial y en la seguridad de Bogotá.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/styles/large/public/2024-07/ana_maria_catano_blanco.png" alt="Foto: Ana María Cataño Blanco" width="900" height="900" title="Organigrama General de la Entidad" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Ana María Cataño Blanco
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Jefe Oficina de Tecnología de la Información y las Comunicaciones
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Comunicadora social y periodista de la Universidad Pontificia Bolivariana, con maestría en Ciencias Políticas de la Universidad de los Andes. Tiene más de 13 años de experiencia en comunicación corporativa, mercadeo, posicionamiento de marca y relaciones públicas.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Se desempeñó como consultora de comunicaciones estratégicas y de marca, directora de desarrollo de negocios y mercadeo y gerente de comunicaciones en reconocidas empresas privadas, ganando así una sólida reputación como experta en comunicación 360, posicionamiento de marca, comunicación estratégica y corporativa, y estructuración de áreas y procesos de comunicación.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">1.2. Oficina de Tecnologías de la Información y las Comunicaciones</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Diseña lineamientos y metodologías para la definición, establecimiento, difusión y control de estándares de las Tics; así como promueve y apoya el desarrollo de sistemas informáticos y proporcionar los servicios y canales que mejoren la interconexión y calidad de servicios de comunicación, redes y transmisión de datos.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2024-07/edgar_eduardo_romero_bohorquez.png" alt="Foto: Edgar Eduardo Romero Bohórquez" width="900" height="900" title="Organigrama General de la Entidad" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Edgar Eduardo Romero Bohórquez
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Jefe de la Oficina Asesora de Comunicaciones y Cultura para la Movilidad
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Ingeniero de sistemas y magíster en ingeniería industrial de la Universidad de los Andes, con más de 30 años de experiencia profesional tanto en el sector privado como público. Experiencia en los sectores de hidrocarburos, impuestos, logística, distribución y movilidad.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Entre su trayectoria laboral se destaca que trabajó en Coljuegos como Jefe Oficina de Tecnología de la Información y en la Secretaría de Movilidad como Jefe Oficina de Información Sectorial entre los años 2016 y 2019. Cuenta con pericia en el liderazgo de las TI y en la gerencia de operaciones en áreas y proyectos de tecnología.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">1.3. Oficina de Seguridad Vial</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Fijar la seguridad vial como eje central de la Secretaría, privilegiando la planificación y formulación de lineamientos en esta materia e incorporando esta noción como eje básico en todos los procesos misionales de la Secretaría.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2026-02-12/julian%20gonzalez%20flechas.webp" alt="Foto: Julian Andres Gonzalez Flechas" width="900" height="900" title="Foto: Julian Andres Gonzalez Flechas" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Julian Andres Gonzalez Flechas
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Jefe De Oficina Oficina De Seguridad Vial (E)
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Julian Andres Gonzalez Flechas, Ingeniero de Transporte y Vías de la Universidad Pedagógica y Tecnológica de Colombia (UPTC) de Tunja, especialista en Gerencia, Magíster en Ingeniería de la Universidad de La Salle, y Magíster en Gestión del Transporte de la Universidad de los Hemisferios (Ecuador).
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Cuenta con más de 15 años de experiencia profesional en movilidad y seguridad vial, trabajando con entidades públicas como la Secretaría de Movilidad de Bogotá, TransMilenio S.A. y la Agencia Nacional de Seguridad Vial. Ha participado en proyectos de tránsito y movilidad sostenible con organismos multilaterales como el Banco Interamericano de Desarrollo (BID), el Banco Mundial, la CAF y GDCI, aportando su conocimiento en la planificación, gestión y mejora de sistemas de transporte urbano.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">1.4. Oficina de Gestión Social</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Incorpora lineamientos de política y estrategias para la sostenibilidad social y el logro de los beneficios sociales esperados con una perspectiva inclusiva y diferencial.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2026-02-12/carlos%20gonzalez.jpg" alt="Foto: Carlos Humberto González" width="900" height="900" title="Foto: Carlos Humberto González" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Carlos Humberto González
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Jefe de la Oficina de Gestión Social
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Carlos Humberto González, es Sociólogo y especialista en Derechos Humanos, con más de 15 años dedicados al servicio público y a la construcción de una Bogotá más participativa y dialogante. Su trayectoria incluye el fortalecimiento de procesos comunitarios en el IDPAC, el liderazgo del equipo de Participación de la Alta Consejería para las Víctimas y, recientemente, la Dirección de Convivencia y Diálogo Social en la Secretaría de Gobierno.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    En cada uno de estos roles, Carlos Humberto ha impulsado espacios de escucha, concertación y trabajo conjunto con las comunidades, convencido de que la gestión pública solo tiene sentido cuando pone a las personas en el centro. Su labor es reconocida por su vocación de servicio, su capacidad para tender puentes y su compromiso profundo con el diálogo como herramienta para construir confianza.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">1.5. Oficina Asesora de Planeación Institucional.</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Asesorar en la formulación de las políticas de la Secretaría en materia de planeación, formulación y seguimiento a la ejecución de los planes, programas y proyectos para el logro de los objetivos y metas institucionales.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2024-07/julieth-rojas-betancour.jpg" alt="Foto: Julieth Rojas Betancour" width="900" height="900" title="Organigrama General de la Entidad" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Julieth Rojas Betancour
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Jefe Oficina Asesora de Planeación
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Administradora de empresas, especialista en Gestión Pública, magíster en Ingeniería Industrial, auditora líder en Sistemas de Gestión Integrados ISO 9001, ISO 14001 y OSHAS 18001, certificados por RABQSA. Con más de 10 años de experiencia profesional en la Secretaría Distrital de Movilidad, en transporte público, concesiones, estudios sectoriales y planeación institucional y estratégica.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">1.6. Oficina de Control Disciplinario.</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Dirige los procesos disciplinarios relacionados con las investigaciones a funcionarios y ex funcionarios con el fin de garantizarles el debido proceso, de conformidad con el Código Único Disciplinario y normas concordantes.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/claudia_patricia_tabares_forero.png" alt="Foto: Claudia Patricia Tabares Forero" width="900" height="940" title="Organigrama General de la Entidad" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Claudia Patricia Tabares Forero
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Oficina de Control Interno Disciplinario
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Abogada, egresada de la Universidad Externado de Colombia, especialista en Derecho Disciplinario del mismo claustro, y en Derecho Constitucional de la Universidad Nacional; con más de 32 años de experiencia en el ámbito jurídico. Ha dedicado su carrera a la investigación y gestión de procesos penales, administrativos y disciplinarios, siempre guiada por la búsqueda de la verdad, la transparencia y la justicia.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Dentro de su trayectoria ha desempeñado roles clave como: en la Rama Judicial fue sustanciadora y secretaria en Juzgados de Menores (hoy infancia y adolescencia) y Juzgados Penales del Circuito, y Juez Penal Municipal. Fue abogada asistente en el Consejo Seccional de la Judicatura- Sala Disciplinaria, y en la Procuraduría trabajó como asesora del despacho del Procurador General en moralidad pública, contratación estatal, juzgamiento de servidores públicos de elección popular y en instrucción disciplinaria en procesos de seguimiento de tutela, de la Corte Constitucional. Experiencia que le permitió fortalecer su compromiso con la ética y el servicio público.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Asume el cargo con el propósito de liderar y fortalecer los procesos disciplinarios internos, garantizando decisiones justas, objetivas y fundamentadas en un análisis riguroso. Tiene como objetivo promover una cultura de integridad, prevenir conductas contrarias a la ética y asegurar el manejo transparente de los recursos públicos.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">1.7. Oficina de Control Interno.</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p>
                                                Encargada de los mecanismos de autocontrol, autorregulación, valoración del riesgo y mejoramiento continuo.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2024-07/alba_enidia_villamil_munoz.png" alt="Foto: Alba Enidia Villamil Muñoz" width="900" height="900" title="Organigrama General de la Entidad" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Alba Enidia Villamil Muñoz
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Jefe Oficina de Control Interno
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Contadora Pública egresada de la Universidad Pedagógica y Tecnológica de Colombia. Profesional en planeación para el Desarrollo Social. Especialista en Gestión Pública de la Escuela Superior de Administración Pública - ESAP, y Especialista en Control Interno y en Alta Gerencia, de la Universidad Militar Nueva Granada. Máster en Estrategias Ambientales Territoriales y Desarrollo Local, de la Universidad de Huelva, España.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Tiene experiencia como Jefe de Oficina de Control Interno en entidades del Orden Nacional y Distrital en gestión e implementación del Sistema de Control Interno para entidades públicas, asesora de planes de desarrollo y plan decenal de educación, en Sistemas de Gestión de Calidad, como auditoría interna de calidad, contable y financiera,, Certificada como auditor líder IRCA (Registro Internacional de Auditores Certificados), auditor interno bajo las normas 9001-2015, 14001-2015 y 27001-2013 y en norma ISO 31000 de gestión de riesgos.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    En su trayectoria profesional ha prestado servicios en las oficinas de control de la Unidad Administrativa Especial de Catastro Distrital –UAECD-, Secretaría Distrital de Hacienda, Departamento Nacional de Planeación Superintendencia de Puertos y Transporte, ahora denominada Superintendencia de Transporte, y en el Fondo Financiero de Proyectos de Desarrollo – FONADE, entre otros.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">
                <a class="accordion-button collapsed" href="#">2. Subsecretaría de Política de Movilidad.</a>
            </div>
            <div class="accordion-collapse collapse">
                <div class="accordion-body">
                    <!-- Descripción de la subsecretaría -->
                    <div class="row" style="margin:20px;">
                        <div class="col-12 card">
                            <p class="text-align-center">
                                Planea las estrategias y el desarrollo articulado para la ejecución de planes, programas y proyectos que impacten de manera positiva la movilidad, el transporte y la infraestructura relacionada con la movilidad en la ciudad de Bogotá D.C., en coordinación con las demás áreas de la Secretaría Distrital de Movilidad, de acuerdo con los objetivos del Plan de Desarrollo Distrital, del Plan Maestro de Movilidad y la normatividad vigente.
                            </p>
                        </div>
                    </div>
                    <p class="mt-4 text-center">
                        <img class="img-fluid" src="/sites/default/files/2024-07/organigrama_2.png" alt="Organigrama: Subsecretaría de Política de Movilidad." width="920" height="360">
                    </p>
                    <!-- Perfil de Nicolás Correal -->
                    <div class="row" style="margin:20px;">
                        <div class="col-12 card mt-4 p-4">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/nicolas-correa.jpg" alt="Foto: Nicolás Correal" width="900" height="900" title="Organigrama General de la Entidad" usemap="#image-map">
                                </div>
                                <div class="col-md-9">
                                    <h2 class="text-align-center">
                                        Nicolás Correal
                                    </h2>
                                    <h5 class="text-align-center">
                                        Subsecretario de Política de la Movilidad
                                    </h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="overflow-auto h-50 card-gray">
                                                <p>
                                                    Nicolás Adolfo Correal Huertas, Ingeniero Civil y Magíster en Ingeniería de la Universidad de los Andes, ha sido designado como nuevo Subsecretario de Política para la Movilidad de la Secretaría Distrital de Movilidad. Su amplia experiencia en el diseño, gestión y mejora de sistemas de transporte urbano lo posiciona como un referente en movilidad sostenible en la ciudad.
                                                </p>
                                                <p>
                                                    Con una sólida trayectoria en el sector público, ha ocupado cargos clave dentro de la entidad, entre ellos Asesor de Despacho, Director de Control y Vigilancia, y Director de Gestión del Tránsito y del Transporte. En 2023 fue Subsecretario de Gestión de la Movilidad, desde donde impulsó iniciativas orientadas a la movilidad inteligente y la seguridad vial. También se desempeñó como Subgerente Técnico de TransMilenio S.A., liderando la implementación de la flota de buses eléctricos más grande de América Latina fuera de China, con 1.485 vehículos incorporados al SITP y nueve patios eléctricos habilitados para su operación.
                                                </p>
                                                <p>
                                                    En el ámbito académico ha participado en investigaciones aplicadas al transporte masivo tipo BRT y ha representado a Bogotá en espacios internacionales como el Congreso Iberoamericano de Transporte (CIT 2021).
                                                </p>
                                                <p>
                                                    Desde la Subsecretaría de Política para la Movilidad, Correal liderará proyectos estratégicos como la implementación del nuevo Sistema Integrado de Recaudo para Bogotá, la integración del Metro, RegioTram y otros sistemas sostenibles, y el desarrollo de complejos de intercambio modal. Su gestión estará alineada con los objetivos del Plan Distrital de Desarrollo, con el propósito de consolidar una movilidad moderna, eficiente e integrada en la capital.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        &nbsp;
                    </p>
                    <div class="accordion" data-accordion-id="e92369cac7080140aa3c43a559b7c7fb4">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">&nbsp;2.1. Dirección de Inteligencia para la Movilidad.</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Dirige la realización de las investigaciones, estudios, análisis y propuestas de producción de insumos para la toma de decisiones y la innovación al interior de la Secretaría Distrital de Movilidad, de acuerdo con los Planes Distritales de Movilidad, Planes Distritales de Desarrollo y la normatividad vigente.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/rafael_unda_venegas.png" alt="Foto: Ana María Cataño Blanco" width="900" height="900" title="Foto: Rafael Unda Venegas" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Rafael Unda Venegas
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Director de Inteligencia para la Movilidad
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Ingeniero civil y magíster en ingeniería civil con énfasis en transporte de la Universidad de los Andes. Realizó una maestría en planificación urbana en la Universidad de California en Berkeley, donde vivió tres años, de los cuales trabajó un año en UC Berkeley Safe Transportation Research and Education Center.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Se ha desempeñado como consultor en el sector transporte, también laboró en TransMilenio, y dentro de su experiencia laboral se destaca que hizo parte del equipo consultor que realizó la Encuesta de Movilidad 2019 para la Secretaría Distrital de Movilidad.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Pertenecer a la Entidad para él es un orgullo y una gran responsabilidad, se ha propuesto desde esta Dirección encontrar un balance entre los temas administrativos y el ser propositivo con ideas que permitan mejorar la movilidad en Bogotá.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">2.2. Dirección de Planeación de la Movilidad.</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Dirige las acciones relacionadas con el desarrollo de los planes, proyectos, el desarrollo de la movilidad, el tránsito, el transporte en todas sus modalidades y el desarrollo de la infraestructura vial y del transporte, de acuerdo con las Políticas generadas por la Subsecretaría de Política de la Movilidad, el Plan Maestro de Movilidad, el Plan Distrital de Desarrollo y las disposiciones aplicables a la materia.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/valentina_acuna_garcia.png" alt="Foto: Valentina Acuña García" width="900" height="900" title="Foto: Valentina Acuña García" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Valentina Acuña García
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Directora de Planeación para la Movilidad
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Ingeniera Civil y magíster en Transporte de la Universidad Nacional de Colombia.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Cuenta con amplia experiencia profesional en planeación del transporte, generación de fuentes de financiación para el transporte público e implementación de estrategias de gestión de la demanda.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    En los últimos 3 años se desempeñó en el cargo de Subdirectora de Transporte Privado, en donde lideró proyectos como Pico y Placa Solidario, valet parking, cargue y descargue en horarios no convencionales y las redes empresariales de la Secretaría de Movilidad.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Desde su rol busca materializar diferentes proyectos reconociendo las necesidades de la ciudadanía en articulación con las diferentes áreas de la Entidad.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        &nbsp;
                                    </p>
                                    <div class="accordion" data-accordion-id="e86bcfbb61da53b048fde7900240b37c1">
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a class="accordion-button collapsed" href="#">&nbsp;2.2.1. Subdirección de Transporte Público.</a>
                                            </div>
                                            <div class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card">
                                                            <p class="text-align-center">
                                                                Dirige la formulación y ejecución de estrategias, planes, programas, proyectos de inversión y normatividad en materia de Transporte Público en todas sus modalidades, accesibilidad y transporte regional en la ciudad de Bogotá.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--

                                                    <div class="row" style="margin:20px;">

                                                        <div class="col-12 card mt-4 p-4">

                                                            <div class="row">

                                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                                                                                        <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/marcela-neira-medina.jpg" alt="Foto: Marcela Neira Medina" width="900" title="Foto: Marcela Neira Medina" usemap="#image-map" height="808">

                                                                </div>

                                                                <div class="col-md-9">

                                                                    <h2 class="text-align-center">
                                                                                                                                                Marcela Neira Medina

                                                                    </h2>

                                                                    <h5 class="text-align-center">
                                                                                                                                                Subdirectora de Transporte Público

                                                                    </h5>

                                                                    <hr>

                                                                    <div class="row">

                                                                        <div class="col-12">

                                                                            <div class="overflow-auto h-50 card-gray">

                                                                                <p class="text-align-justify">
                                                                                                                                                                        Marcela Neira Medina es Ingeniera Civil y Magíster con énfasis en Transporte de la Universidad de los Andes, con Maestría en Administración de la Internationale Hochschule de Berlín.

                                                                                </p>

                                                                                <p class="text-align-justify">
                                                                                                                                                                        Tiene 12 años de experiencia profesional en áreas de movilidad, gerencia, planeación y desarrollo urbano sostenible, desarrollando proyectos relacionados con seguridad vial, movilidad activa, tránsito, transporte, infraestructura y accesibilidad.

                                                                                </p>

                                                                                <p class="text-align-justify">
                                                                                                                                                                        Ha trabajado en la academia en Colombia y Chile, en el sector privado como consultora, en cooperación internacional en la Cooperación Alemana para el Desarrollo – GIZ y anteriormente hizo parte de la Secretaría Distrital de Movilidad como asesora y directora de Ingeniería de Tránsito.

                                                                                </p>

                                                                                <p class="text-align-justify">
                                                                                                                                                                        Regresa a la Secretaría de Movilidad con el fin de seguir aportando al desarrollo de la ciudad, ahora liderando los proyectos de transporte público en Bogotá, en sus diferentes modalidades y temáticas asociadas.

                                                                                </p>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                                                                        -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a class="accordion-button collapsed" href="#">2.2.2. Subdirección de Transporte Privado.</a>
                                            </div>
                                            <div class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card">
                                                            <p class="text-align-center">
                                                                Dirige la formulación y ejecución de estrategias, planes, programas, proyectos de inversión y normatividad en materia de transporte privado en todas sus modalidades, medidas de gestión de la demanda y demás relacionadas en la ciudad de Bogotá D.C.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card mt-4 p-4">
                                                            <div class="row">
                                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/sandra_rodriguez_castaneda.png" alt="Foto: Sandra Esperanza Rodríguez Castañeda" width="900" height="900" title="Foto: Sandra Esperanza Rodríguez Castañeda" usemap="#image-map">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <h2 class="text-align-center">
                                                                        Sandra Esperanza Rodríguez Castañeda
                                                                    </h2>
                                                                    <h5 class="text-align-center">
                                                                        Subdirectora de Transporte Privado
                                                                    </h5>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="overflow-auto h-50 card-gray">
                                                                                <p class="text-align-justify">
                                                                                    Ingeniera civil y magíster en ingeniería civil con énfasis en transporte de la Universidad de los Andes, becada y con intercambio en la Universidad de Melbourne (Australia). Además, obtuvo la Beca Colfuturo para realizar la maestría en Planeación y Desarrollo Urbano en University College London, Reino Unido. A lo largo de su trayectoria profesional ha trabajado desde la academia, sector público y privado. Se desempeñó como consultora senior en IDOM Consulting Engineering Architecture, en proyectos en Arabia Saudita, Colombia, Perú, República Dominicana y Venezuela, desarrollando diferentes soluciones en materia de análisis de información geográfica, planeación urbana y transporte.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    En el sector público, fue asesora en la Secretaría de Movilidad de la Gobernación de Cundinamarca donde trabajó en la estructuración de proyectos de transporte como la línea 3 del metro, Transmilenio Fase IV a Soacha, Cables de la Calera y Soacha. En la Unidad Administrativa de Catastro Distrital contribuyó en la definición de lineamientos técnicos para el análisis de la información de la entidad mediante técnicas de estadística geográfica. Desde la Secretaría de Movilidad de Bogotá, entre 2018-2020, trabajó en la evaluación técnica de proyectos relacionados con el Plan de Ordenamiento Territorial y Plan Maestro de Movilidad, la regulación del aprovechamiento económico del espacio público para el alquiler de patinetas eléctricas, y el censo de bicitaxis de Bogotá.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Ahora regresa a la SDM como subdirectora de Transporte Privado, donde impulsará estrategias, y proyectos en el ámbito del transporte privado en todas sus modalidades, para la gestión de la demanda, fortalecer la movilidad sostenible en empresas, universidades y entidades públicas y aportar a mejorar la eficiencia en la que se mueve la carga dentro de la ciudad.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a class="accordion-button collapsed" href="#">2.2.3. Subdirección de la Bicicleta y el Peatón</a>
                                            </div>
                                            <div class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card">
                                                            <p class="text-align-center">
                                                                Dirige la formulación y ejecución de estrategias, planes, programas, proyectos de inversión y normatividad en materia de medios alternativos y no motorizados de movilidad segura y sostenible en la ciudad y, su promoción. Fomenta del uso de la bicicleta a través de temáticas como el sistema de bicicletas públicas, el registro de bicicletas, el mejoramiento y rehabilitación de la infraestructura y mobiliario para bicicletas y la ampliación de ellos.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card mt-4 p-4">
                                                            <div class="row">
                                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2026-02-12/diana%20duran.jpeg" alt="Foto: Diana Carolina Durán Forero" width="900" height="900" title="Foto: Diana Carolina Durán Forero" usemap="#image-map">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <h2 class="text-align-center">
                                                                        Diana Carolina Durán Forero
                                                                    </h2>
                                                                    <h5 class="text-align-center">
                                                                        Subdirectora de la Bicicleta y el Peatón
                                                                    </h5>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="overflow-auto h-50 card-gray">
                                                                                <p class="text-align-justify">
                                                                                    Diana Carolina Durán Forero, Ingeniera Industrial y Ambiental de la Universidad de los Andes y Magíster en Planificación del Desarrollo Urbano del University College London (UCL), es una experta en movilidad sostenible, calidad del aire y planificación urbana con enfoque social. Con más de ocho años de experiencia, ha liderado y gestionado programas innovadores en el sector público y en organismos internacionales.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Su trayectoria incluye un papel destacado como Asesora Municipal para C40 Cities, donde apoyó a la Alcaldía de Bogotá en proyectos estratégicos como Breathe Cities, orientado a mejorar la calidad del aire. Previamente, en la Secretaría Distrital de Movilidad, impulsó iniciativas que hoy son referentes en movilidad activa y equitativa, como la Red Muévete Mejor, estrategias de movilidad eléctrica, las Zonas Urbanas por un Mejor Aire y programas de movilidad escolar segura como Ciempiés, Al Colegio en Bici, Biciparceros y Guardacaminos.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Como Subdirectora de la Bicicleta y el Peatón, Durán liderará la consolidación de políticas y estrategias para fortalecer la movilidad activa en Bogotá, con énfasis en seguridad vial, inclusión y sostenibilidad, alineada con los objetivos institucionales y los compromisos de ciudad hacia una movilidad más humana y ambientalmente responsable.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a class="accordion-button collapsed" href="#">2.2.4. Subdirección de Infraestructura.</a>
                                            </div>
                                            <div class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card">
                                                            <p class="text-align-center">
                                                                Dirige el desarrollo de las políticas para el desarrollo, construcción, mantenimiento y rehabilitación de la infraestructura vial y de transporte.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card mt-4 p-4">
                                                            <div class="row">
                                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/juan_carlos_tovar_rincon.png" alt="Foto: Juan Carlos Tovar Rincón" width="900" height="900" title="Foto: Juan Carlos Tovar Rincón" usemap="#image-map">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <h2 class="text-align-center">
                                                                        Juan Carlos Tovar Rincón
                                                                    </h2>
                                                                    <h5 class="text-align-center">
                                                                        Subdirector de Infraestructura
                                                                    </h5>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="overflow-auto h-50 card-gray">
                                                                                <p class="text-align-justify">
                                                                                    Ingeniero Civil de la Pontificia Universidad Javeriana con especialización en Diseño de Vías Urbanas, Tránsito y Transporte, así como en Gerencia de Proyectos.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Durante 8 años desarrolló proyectos de diseño, construcción e interventoría de infraestructura en el sector privado. Desde el 2005 se vinculó al sector público a través de la Secretaría Distrital de Planeación como profesional y luego como Director Encargado. Más adelante se desempeñó como Director Técnico de Proyectos en el Instituto de Desarrollo Urbano (IDU). En el año 2022 ingresó a la Secretaría Distrital de Movilidad como profesional especializado de carrera administrativa en la Oficina de Seguridad Vial, de la cual fue también Jefe Encargado.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Como Subdirector de Infraestructura se propone priorizar la accesibilidad y seguridad vial de todas las personas, en especial las más vulnerables, en la formulación y ejecución de Instrumentos de Planeación así como de los proyectos de infraestructura vial y de transporte en Bogotá entre los que se destacan la red Metro, Cables, Corredores de Transporte, Bici y Regiotram.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">
                <a class="accordion-button collapsed" href="#">3. Subsecretaría de Gestión de la Movilidad</a>
            </div>
            <div class="accordion-collapse collapse">
                <div class="accordion-body">
                    <div class="row" style="margin:20px;">
                        <div class="col-12 card">
                            <p class="text-align-center">
                                Dirige la ejecución de las políticas, planes y programas de tránsito y transporte de acuerdo con el Plan de Ordenamiento Territorial y el Plan Maestro de Movilidad del Distrito Capital.
                            </p>
                        </div>
                    </div>
                    <p class="mt-4 text-center">
                        <img class="img-fluid" src="/sites/default/files/2025-07/4_1.png" alt="Organigrama: Subsecretaría de Gestión de la Movilidad." width="920" height="346">&nbsp;
                    </p>
                    <div class="row" style="margin:20px;">
                        <div class="col-12 card mt-4 p-4">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/perfil_jhonalexandergonzalez.jpg" alt="Foto: Jhon Alexander González Mendoza" width="900" height="900" title="Foto: Jhon Alexander González Mendoza" usemap="#image-map">
                                </div>
                                <div class="col-md-9">
                                    <h2 class="text-align-center">
                                        Jhon Alexander González Mendoza
                                    </h2>
                                    <h5 class="text-align-center">
                                        Subsecretario de Gestión de la Movilidad
                                    </h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="overflow-auto h-50 card-gray">
                                                <p class="text-align-justify">
                                                    Ingeniero Civil de la Universidad Nacional de Colombia, Especialista en Tránsito, Diseño y Seguridad vial, en proceso de Magister en Ingeniería de Transporte en la misma alma máter. Además, tiene estudios complementarios en modelación del transporte y el tránsito, así como auditorias de seguridad vial y diseño urbano.
                                                </p>
                                                <p class="text-align-justify">
                                                    Basa su perfil profesional en el marco del diseño seguro y la modelación del transporte y el tránsito, enfocándose en el comportamiento peatonal y de ciclistas. Parte de su experiencia la ha desarrollado en la elaboración de diferentes estudios y diseños a nivel nacional, para diferentes firmas consultoras en términos de: Estudios de transporte y tránsito, modelación del tráfico, diseño geométrico vial, diseño de señalización, planes manejo de tráfico en obra y auditorias de seguridad vial. Su mayor reto es lograr armonizar los diferentes proyectos viales en el marco de la planeación, la gestión y la ejecución en el distrito con altos estándares de calidad, eficiencia y seguridad vial.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        &nbsp;
                    </p>
                    <div class="accordion" data-accordion-id="e4d2eb4846182d739284262dc98c42eac">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">&nbsp;3.1. Dirección de Ingeniería de Tránsito</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Dirige la ejecución de las políticas, planes, programas y proyectos relacionados con la señalización vertical y horizontal de la ciudad, así como los demás elementos y dispositivos que propendan por garantizar la seguridad vial, el buen uso del espacio público.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/juancamilorodriguezcardenas.png" alt="Foto: Juan Camilo Rodríguez Cárdenas" width="900" height="900" title="Foto: Juan Camilo Rodríguez Cárdenas" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Juan Camilo Rodríguez Cárdenas
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Director de Ingeniería de Tránsito
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Arquitecto egresado de la Universidad de La Salle, Especialista en Espacio Público y Magister en Planeación Urbana y Regional de la Universidad Javeriana, apasionado por la planeación de la ciudad y la proyección de medidas que mejoren las condiciones de seguridad vial, priorizando peatones y ciclistas. Con más de diez años de trayectoria profesional, trabajó en la Subdirección de Operaciones de la Secretaría de Hábitat de Bogotá, en la formulación, estructuración y diseño de proyectos integrales de espacio público, como componente de las intervenciones integrales del hábitat.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    En el año 2016 se vinculó a la Secretaría Distrital de Movilidad, en lo que hoy es la Subdirección de la Bicicleta y el Peatón, desarrollando procesos de diseño, viabilización, implementación, análisis y seguimiento de los proyectos de transporte no motorizado. Finalizando el año 2018 se vinculó a la Subsecretaría de Gestión de la Movilidad y la Dirección de Ingeniería de Tránsito, en donde se enfocó en la planeación, priorización, ejecución y seguimiento de las intervenciones del sistema de señalización vial, con alto énfasis en los proyectos de cicloinfraestructura, urbanismos tácticos y corredores arteriales.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Dentro de sus objetivos en la Dirección están la planeación integral del sistema de señalización vial, a nivel multiescalar, el robustecimiento de las implementaciones en vía, así como la definición de lineamientos para el diseño de proyectos enfocados en mejorar las condiciones de seguridad vial de peatones y ciclistas.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        &nbsp;
                                    </p>
                                    <div class="accordion" data-accordion-id="e51c728149e0bc433a0014e8e1fe3c4bd">
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a class="accordion-button collapsed" href="#">&nbsp;3.1.1. Subdirección de Señalización.</a>
                                            </div>
                                            <div class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card">
                                                            <p class="text-align-center">
                                                                Desarrolla la señalización vertical y horizontal de la ciudad, y demás elementos y dispositivos que garanticen la seguridad vial, el buen uso del espacio público y la gestión del tránsito en la ciudad.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card mt-4 p-4">
                                                            <div class="row">
                                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/andrea_gutierrez.png" alt="Foto: Francy Andrea Gutiérrez Velandia" width="900" height="900" title="Foto: Francy Andrea Gutiérrez Velandia" usemap="#image-map">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <h2 class="text-align-center">
                                                                        Francy Andrea Gutiérrez Velandia
                                                                    </h2>
                                                                    <h5 class="text-align-center">
                                                                        Subdirectora de señalización
                                                                    </h5>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="overflow-auto h-50 card-gray">
                                                                                <p class="text-align-justify">
                                                                                    Francy Andrea Gutiérrez Velandia es arquitecta urbanista egresada de la Universidad Católica de Colombia, con especialización en Gestión de Ciudad y Territorio de la Universidad Externado de Colombia.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Cuenta con experiencia en el desarrollo de obras de espacio público, desde su diseño inicial hasta su ejecución, interventoría, diseño urbano, investigación, norma urbanística y proyectos de movilidad activa y sostenible con enfoque en urbanismo táctico y participación ciudadana.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Con una trayectoria de cuatro años en la Secretaría de Movilidad - inicialmente en la Subdirección de Infraestructura y posteriormente liderando el proyecto Barrios Vitales en la Dirección de Planeación de Movilidad - busca desde su nuevo rol identificar oportunidades de transformación en la señalización urbana mediante acciones innovadoras. Su objetivo es fortalecer los proyectos en curso de la Entidad, proyectando a Bogotá como una ciudad que garantice una movilidad segura para todos sus habitantes.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a class="accordion-button collapsed" href="#">3.1.2. Subdirección de Planes de Manejo de Tránsito.</a>
                                            </div>
                                            <div class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card">
                                                            <p class="text-align-center">
                                                                Dirige las actividades para viabilizar, autorizar o denegar los planes de manejo de tránsito (PMT) para obras, de alto, medio y bajo impacto localizado en la malla vial de la ciudad de Bogotá D.C. y realizar seguimiento a su implementación.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card mt-4 p-4">
                                                            <div class="row">
                                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/martha-bayona.jpg" alt="Foto: Martha Cecilia Bayona Gómez" width="900" height="900" title="Foto: Martha Cecilia Bayona Gómez" usemap="#image-map">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <h2 class="text-align-center">
                                                                        Martha Cecilia Bayona Gómez
                                                                    </h2>
                                                                    <h5 class="text-align-center">
                                                                        Subdirectora de Planes de Manejo de Tránsito
                                                                    </h5>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="overflow-auto h-50 card-gray">
                                                                                <p class="text-align-justify">
                                                                                    Es ingeniera civil de la Universidad Gran Colombia, Especialista en Diseño de Vías Urbanas, Tránsito y Transporte de la Universidad Francisco José de Caldas Se ha desempeñó como profesional universitaria en la Secretaría Distrital de Movilidad y en el Instituto de Desarrollo Urbano por más de 12 años. También ha sido consultora y asesora en el sector privado en temas relacionados con señalización, estudios de tránsito y planes de manejo de tránsito.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Desde hace ocho años está vinculada a la Secretaría Distrital de Movilidad como líder del equipo de planes de manejo de tránsito (PMT). Ha participado en la construcción de grandes obras de infraestructura vial en Bogotá con diseños de tránsito.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">3.2. Dirección de Gestión de Tránsito y Control de Tránsito y Transporte.</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Dirige la formulación, ejecución, así como realiza el seguimiento a las políticas, planes, programas y proyectos relacionadas con la Gestión del Tránsito y Control del Tránsito y del Transporte, que permitan el mejoramiento de las condiciones de movilidad, la aplicación de estrategias para la seguridad vial de los diferentes actores que actúan en la vía y ejerce el control sobre el tránsito y el transporte en la ciudad.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/nathalypatinho.png" alt="Foto: Nathaly Patiño González" width="900" height="900" title="Foto: Nathaly Patiño González" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Nathaly Patiño González
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Directora de Gestión de Tránsito y Control de Tránsito y Transporte
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Ingeniera Civil de la Universidad Nacional de Colombia, con experiencia en tránsito y transporte, especialmente en temas relacionados con gestión en vía en la Secretaría Distrital de Movilidad y en proyectos de consultoría. Tiene una especialización en Tránsito y Transporte de la Universidad Pedagógica y Tecnológica de Colombia.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Fue contratista en la Subdirección de Gestión en Vía, donde tenía a su cargo las Localidades de Santa Fe, Candelaria, Chapinero y de la Avenida Caracas. Posteriormente, se desempeñó como Subdirectora, rol en el que se destacó por trabajar para que la ciudadanía reconozca a la Entidad como una mano amiga en la vía. Asume esta dirección con el propósito de continuar cuidando a la Ciudad desde la gestión y el control. Además de fortalecer a los equipos que están en vía, demostrando eficiencia en la atención de situaciones de emergencia, y en momentos claves como la época de lluvias, los planes éxodo y retorno y las manifestaciones que se presentan en Bogotá.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        &nbsp;
                                    </p>
                                    <div class="accordion" data-accordion-id="e0aebb603b80e8958da0f97d955b35383">
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a class="accordion-button collapsed" href="#">&nbsp;3.2.1. Subdirección de Gestión en Vía.</a>
                                            </div>
                                            <div class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card">
                                                            <p class="text-align-center">
                                                                Dirige la implementación y ejecución de las políticas, planes, programas y proyectos establecidos para la gestión del tránsito en vía, que permitan el mejoramiento de las condiciones de movilidad y la aplicación de estrategias para la seguridad vial de los diferentes actores que actúan en la vía.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card mt-4 p-4">
                                                            <div class="row">
                                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/jhonfreddydominguezfuentes.png" alt="Foto: Jhon Freddy Domínguez Fuentes" width="900" height="900" title="Foto: Jhon Freddy Domínguez Fuentes" usemap="#image-map">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <h2 class="text-align-center">
                                                                        Jhon Freddy Domínguez Fuentes
                                                                    </h2>
                                                                    <h5 class="text-align-center">
                                                                        Subdirector de Gestión en Vía
                                                                    </h5>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="overflow-auto h-50 card-gray">
                                                                                <p class="text-align-justify">
                                                                                    Ingeniero civil de la Universidad Industrial de Santander; especialista en gestión de proyectos de la Corporación Universitaria Minuto de Dios; cursó y aprobó todo el contenido académico de la Maestría en Transporte de la Universidad de los Andes.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Jhon Freddy es bumangués, llegó a Bogotá en el 2012 y cuenta con 11 años de experiencia en el sector transporte y seguridad vial. Desde que se radicó en la Ciudad ha trabajado en dos organizaciones, una consultora privada y en la Secretaría Distrital de Movilidad. Ingresó a la Entidad en el 2016 desempeñando diferentes funciones para la Subdirección de Gestión en Vía y posteriormente para la Dirección de Gestión de Tránsito y Control de Tránsito y Transporte, De igual forma contribuyó, desde la Subdirección de la Bicicleta y el Peatón, a que el proyecto de bicicletas compartidas llegara a su operación total en enero de 2023.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Asume este cargo con el objetivo de seguir aportando al mejoramiento de la calidad de vida de la ciudadanía, en términos de minimizar sus tiempos de viaje y de actuar con celeridad ante cualquier eventualidad en las vías.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a class="accordion-button collapsed" href="#">3.2.2. Subdirección de Semaforización.</a>
                                            </div>
                                            <div class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card">
                                                            <p class="text-align-center">
                                                                Dirige la formulación e implementación de las políticas, planes, programas y proyectos relacionados con los dispositivos de semaforización, que permitan mejorar de las condiciones de movilidad y seguridad vial de los diferentes actores viales de Bogotá D.C
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card mt-4 p-4">
                                                            <div class="row">
                                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/diego_andres_suarez_gomez.png" alt="Foto: Diego Andrés Suárez Gómez" width="900" height="900" title="Foto: Diego Andrés Suárez Gómez" usemap="#image-map">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <h2 class="text-align-center">
                                                                        Diego Andrés Suárez Gómez
                                                                    </h2>
                                                                    <h5 class="text-align-center">
                                                                        Subdirector de Semaforización
                                                                    </h5>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="overflow-auto h-50 card-gray">
                                                                                <p class="text-align-justify">
                                                                                    Ingeniero de Transporte con especialización en Tránsito y Transporte, y Magíster en Ingeniería con énfasis en transporte de la Universidad Tecnológica y Pedagógica de Colombia, -UPTC- en Tunja. Su formación académica se complementa con cursos adicionales, entre los cuales se destaca el de Modelos de Elección para Análisis Econométricos en Transporte, realizado en la Universidad de los Andes.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Tiene amplia experiencia en el manejo de herramientas de simulación de transporte, en la generación de modelos de tránsito, así como en la coordinación de grupos de trabajo para la elaboración de documentos de política pública, en varios municipios del país, entre ellos en el área Metropolitana del Valle de Aburrá.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Se ha desempeñado en la Secretaría Distrital de Movilidad como contratista, y en los últimos dos años y medio ejerció el cargo de subdirector de infraestructura, armonizando los distintos proyectos que se están desarrollando en la ciudad en materia de movilidad, privilegiando las personas más vulnerables siempre con principios de conectividad, accesibilidad y funcionalidad.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Se propone continuar trabajando para lograr potenciar el gran sistema inteligente de semáforos que tiene Bogotá, así como aprovechar los grandes beneficios que ofrece el sistema en la obtención de múltiples datos operativos las 24 horas del día.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a class="accordion-button collapsed" href="#">3.2.3. Subdirección de Control de Tránsito y Transporte.</a>
                                            </div>
                                            <div class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card">
                                                            <p class="text-align-center">
                                                                Dirige las acciones de regulación y control del tránsito y del transporte de los diferentes actores viales.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card mt-4 p-4">
                                                            <div class="row">
                                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/jackhurtado.png" alt="Foto: Jack David Hurtado Casquette" width="900" height="900" title="Foto: Jack David Hurtado Casquette" usemap="#image-map">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <h2 class="text-align-center">
                                                                        Jack David Hurtado Casquette
                                                                    </h2>
                                                                    <h5 class="text-align-center">
                                                                        Subdirector de Control de Tránsito y Transporte
                                                                    </h5>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="overflow-auto h-50 card-gray">
                                                                                <p class="text-align-justify">
                                                                                    Ingeniero Industrial de la Universidad Central, Magíster en Ingeniería Civil con Énfasis en Tránsito y Transporte de la Escuela Colombiana de Ingeniería Julio Garavito.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Cuenta con 7 años de experiencia en temáticas asociadas al tránsito y transporte, dirección de personal, diseño e implementación de actividades de control, programación y asignación de recursos, operación de sistemas de préstamo de bicicletas y orientación de tránsito en aglomeraciones de público. Todas estas actividades desarrolladas en campo, buscando proporcionar mejoras a las condiciones de movilidad de los diferentes actores viales.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Ingresó a la Secretaría Distrital de Movilidad en el 2008 como guía en bicicleta hasta el 2012. Desde mediados del 2015 laboró como profesional de la DCV en el programa ruta pila, trabajando temas relacionados al control del transporte y el servicio especial a tricimotores.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Para su gestión como subdirector, asume como reto el lograr que el cuerpo de agentes civiles se afiance y crezca para suplir las necesidades de la ciudad en términos de control al tránsito y transporte.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">
                <a class="accordion-button collapsed" href="#">4. Subsecretaría de Servicios a la Ciudadanía</a>
            </div>
            <div class="accordion-collapse collapse">
                <div class="accordion-body">
                    <div class="row" style="margin:20px;">
                        <div class="col-12 card">
                            <p class="text-align-center">
                                Dirige las acciones relacionadas con el desarrollo de los planes, proyectos, el desarrollo de la movilidad, el tránsito, el transporte en todas sus modalidades y el desarrollo de la infraestructura vial y del transporte, de acuerdo con las Políticas generadas por la Subsecretaría de Política de la Movilidad, el Plan Maestro de Movilidad, el Plan Distrital de Desarrollo y las disposiciones aplicables a la materia.
                            </p>
                        </div>
                    </div>
                    <p class="mt-4 text-center">
                        <img class="img-fluid" src="/sites/default/files/2025-07/5_1.png" alt="Organigrama: Subsecretaría de Servicios a la Ciudadanía." width="920" height="285">
                    </p>
                    <div class="row" style="margin:20px;">
                        <div class="col-12 card mt-4 p-4">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2026-02-12/olga%20pineda.jpeg" alt="Foto: Olga Liliana Pineda Buitrago" width="900" height="900" title="Foto: Olga Liliana Pineda Buitrago" usemap="#image-map">
                                </div>
                                <div class="col-md-9">
                                    <h2 class="text-align-center">
                                        Olga Liliana Pineda Buitrago
                                    </h2>
                                    <h5 class="text-align-center">
                                        Subsecretaria de Servicios a la Ciudadanía
                                    </h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="overflow-auto h-50 card-gray">
                                                <p class="text-align-justify">
                                                    Olga Liliana Pineda Buitrago, Abogada de la Universidad de La Sabana, con especializaciones en Derecho Comercial y Derecho Financiero del Universidad del Rosario. Tiene más de 20 años de experiencia en el sector público y privado, liderando equipos y procesos jurídicos en contratación pública, cobro coactivo, gestión corporativa y liquidación de entidades y negocios fiduciarios.
                                                </p>
                                                <p class="text-align-justify">
                                                    Ha desempeñado un rol clave en la Superintendencia de la Economía Solidaria, donde por más de cinco años ha fortalecido la supervisión, la transparencia y la buena gestión del sector solidario.
                                                </p>
                                                <p class="text-align-justify">
                                                    Se caracteriza por su visión estratégica, rigor en el análisis jurídico, atención al detalle y capacidad para coordinar procesos complejos. Trabajar por la ciudadanía desde el servicio será un reto para fortalecer los servicios, promover la transparencia y aportar al desarrollo social y a una movilidad más cercana, eficiente y confiable para todas las personas.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" data-accordion-id="ecf1125777c9608c9febe7ea0374bde10">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">&nbsp;4.1. Dirección de Atención al Ciudadano.</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Dirige la ejecución de las políticas, planes, programas y proyectos orientados a la atención a la ciudadanía, promoviendo modelos de gestión, bajo estándares de calidad y oportunidad para los trámites y servicios que se adelanten en el área.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2026-02-12/ernesto%20gordillo.jpeg" alt="Foto: Ernesto Gordillo Triana" width="900" height="900" title="Foto: Ernesto Gordillo Triana" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Ernesto Gordillo Triana
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Director de Atención al Ciudadano
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Ernesto Gordillo Triana, es politólogo con formación en gestión pública y más de 15 años de experiencia en el fortalecimiento institucional. Ha trabajado en entidades nacionales e internacionales como el Ministerio de Justicia, Transparencia Internacional, la OEA, la Presidencia de la República y la Alcaldía Mayor de Bogotá.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Su trayectoria se ha enfocado en mejorar la relación entre el Estado y la ciudadanía, liderando iniciativas de transparencia, lucha contra la corrupción, modernización de servicios públicos y fortalecimiento de la atención a las personas. También ha participado en investigaciones sobre corrupción, seguridad, acceso a la justicia, medio ambiente y democracia, aportando análisis basados en evidencia.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Comprometido con una gestión pública cercana, clara y eficaz, su propósito es poner a la ciudadanía en el centro de las decisiones, promoviendo instituciones más accesibles, confiables y respetuosas.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">4.2. Dirección de Investigaciones Administrativas al Tránsito y Transporte.</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Establece los lineamientos para el desarrollo de las actividades de carácter sancionatorio, así como el ejercicio de la segunda instancia sobre decisiones de fondo frente a las infracciones a las normas del tránsito y transporte, de acuerdo con la normatividad vigente y las necesidades institucionales.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/giovanny-andres-garcia.jpg" alt="Foto: Giovanny Andrés García" width="900" height="875" title="Foto: Giovanny Andrés García" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Oscar Gustavo Calderón Medina
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Dirección de Investigaciones Administrativas al Tránsito y Transporte
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Abogado especializado en Derecho Procesal Penal, con sólida experiencia en el sector público, particularmente en áreas de representación judicial y gestión de cobro. Actualmente curso una Maestría en Gobierno y Políticas Públicas, lo que refuerza mi compromiso con el fortalecimiento institucional y el diseño de políticas eficaces.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Se ha desempeñado como Director de Representación Judicial y Cobro en la Secretaría de Movilidad de Bogotá, Jefe de la Oficina de Gestión de Cobro No Tributario en la Secretaría de Hacienda, y Asesor en entidades nacionales como la DIAN y el Departamento Nacional de Planeación. Estas experiencias me han permitido desarrollar una visión estratégica de la administración pública, con énfasis en la gestión jurídica, la política fiscal y la implementación de procesos eficientes.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Una persona comprometida, orientada a resultados, y convencida del poder del servicio público para transformar realidades.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        &nbsp;
                                    </p>
                                    <div class="accordion" data-accordion-id="e531c708ef4d5de685eaba694f0d74b7a">
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a class="accordion-button collapsed" href="#">&nbsp;4.2.1. Subdirección de Contravenciones.</a>
                                            </div>
                                            <div class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card">
                                                            <p class="text-align-center">
                                                                Lidera y orienta los procesos contravencionales que se deriven del incumplimiento a las normas de tránsito, en concordancia con los lineamientos de orden nacional y distrital.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card mt-4 p-4">
                                                            <div class="row">
                                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/juan_manuel_garzon.png" alt="Foto: Giovanny Andrés García" width="900" height="900" title="Foto: Juan Manuel Garzón Monroy" usemap="#image-map">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <h2 class="text-align-center">
                                                                        Juan Manuel Garzón Monroy
                                                                    </h2>
                                                                    <h5 class="text-align-center">
                                                                        Subdirección de Contravenciones
                                                                    </h5>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="overflow-auto h-50 card-gray">
                                                                                <p class="text-align-justify">
                                                                                    Abogado y especialista en Derecho Administrativo y Constitucional de la Universidad Católica de Colombia. Magíster en Gobierno y Políticas Públicas de la Universidad Externado de Colombia, tiene una tesis meritoria en seguridad vial y pedagogía. Es auditor interno integral en la norma NTCGP en sistemas integrados de gestión de calidad y gestión del riesgo.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Experto en la formulación, diseño y ejecución de políticas públicas en tránsito, transporte y seguridad vial, enfocadas en la implementación de estrategia preventivas y de protección a la ciudadanía. Cuenta con catorce años de experiencia en el desarrollo de procesos y procedimientos administrativos, sancionatorios y procesos contravencionales y de control e investigaciones al transporte público. Desde el 2007 trabajó en la Secretaría de Movilidad, tiene un corto período fuera de la Entidad y en el año 2021 regresa en carrera administrativa con funciones de autoridad de tránsito. Ahora, desde este rol y esta Subdirección, quiere apostarle a la virtualización de procesos, para que la ciudadanía tenga la posibilidad de acceder a salida de vehículos e impugnaciones de comparendos desde la virtualidad.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a class="accordion-button collapsed" href="#">4.2.2. Subdirección de Control e Investigaciones al Transporte Público.</a>
                                            </div>
                                            <div class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card">
                                                            <p class="text-align-center">
                                                                Dirige la inspección, vigilancia y control a los sujetos sancionables por el incumplimiento de las normas aplicables al transporte público, de conformidad con la normatividad vigente.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin:20px;">
                                                        <div class="col-12 card mt-4 p-4">
                                                            <div class="row">
                                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/_jhon_alejandro_contreras_torres.png" alt="Foto: Jhon Alejandro Contreras Torres" width="900" height="900" title="Foto: Jhon Alejandro Contreras Torres" usemap="#image-map">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <h2 class="text-align-center">
                                                                        Jhon Alejandro Contreras Torres
                                                                    </h2>
                                                                    <h5 class="text-align-center">
                                                                        Subdirector de Control e Investigaciones al Transporte Público
                                                                    </h5>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="overflow-auto h-50 card-gray">
                                                                                <p class="text-align-justify">
                                                                                    Abogado de la Universidad Libre de Colombia, especializado en derecho administrativo candidato a Magister en Derecho Público. Cuenta con más de 20 años de experiencia en el sector Público y Privado.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Se ha desempeñado como Jefe Jurídico del Instituto Distrital de Gestión del Riesgo y Cambio Climático de Bogotá (IDIGER), Gerente de la Lotería de Cundinamarca y Gerente de la Beneficencia de Cundinamarca.
                                                                                </p>
                                                                                <p class="text-align-justify">
                                                                                    Desde su cargo se compromete a armonizar las exigencias del sector transporte con el cumplimiento a la normatividad vigente, procurando así, consolidar un sistema enfocado en mejorar las condiciones de seguridad, comodidad y accesibilidad en el servicio de transporte público.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Accordion --><!-- End Accordion -->
        </div>
        <div class="accordion-item">
            <div class="accordion-header">
                <a class="accordion-button collapsed" href="#">5. Subsecretaría de Gestión Jurídica.</a>
            </div>
            <div class="accordion-collapse collapse">
                <div class="accordion-body">
                    <div class="row" style="margin:20px;">
                        <div class="col-12 card">
                            <p class="text-align-center">
                                Establece los lineamientos institucionales y dirige los procesos administrativos de representación judicial y extrajudicial, gestión contractual y compras públicas, emisión de normas, conceptos y doctrina administrativa, y gestión del cobro de obligaciones a favor de la Secretaría Distrital de Movilidad, permitiendo la unidad de criterio y la seguridad jurídica de la entidad a través de la correcta aplicación del ordenamiento jurídico vigente.
                            </p>
                        </div>
                    </div>
                    <p class="mt-4 text-center">
                        <img class="img-fluid" src="/sites/default/files/2025-07/6_1.png" alt="Organigramento: Subsecretaría de Gestión Jurídica." width="920" height="254">
                    </p>
                    <div class="row" style="margin:20px;">
                        <div class="col-12 card mt-4 p-4">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-07/pauloandresrincongaray.png" alt="Foto: Paulo Andrés Rincón Garay" width="900" height="900" title="Foto: Paulo Andrés Rincón Garay" usemap="#image-map">
                                </div>
                                <div class="col-md-9">
                                    <h2 class="text-align-center">
                                        Paulo Andrés Rincón Garay
                                    </h2>
                                    <h5 class="text-align-center">
                                        Subsecretario de Gestión Jurídica
                                    </h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="overflow-auto h-50 card-gray">
                                                <p class="text-align-justify">
                                                    Es abogado de la Universidad Externado de Colombia, especialista en Derecho Administrativo y Administración Pública de la Universidad de Buenos Aires, Argentina, y actualmente se encuentra cursando una Maestría en Ciudades Inteligentes en la misma universidad de donde es egresado.
                                                </p>
                                                <p class="text-align-justify">
                                                    Cuenta con más de doce años de experiencia profesional asesorando jurídicamente al sector público y privado, en temas como regulación normativa y elaboración de política pública, derecho público, derecho de transporte, defensa judicial ante la jurisdicción contencioso administrativa, civil y laboral.
                                                </p>
                                                <p class="text-align-justify">
                                                    Trabajó como asesor del Despacho y también fue Director de Normatividad y Conceptos en la Secretaría Distrital de Movilidad. En la firma GGC Abogados y Financieros fue coordinador jurídico, alrededor de cinco años.
                                                </p>
                                                <p class="text-align-justify">
                                                    En Departamento para la Prosperidad Social trabajó en la Subdirección de Programas Especiales, Grupo Paz, Desarrollo y Estabilización.
                                                </p>
                                                <p class="text-align-justify">
                                                    También representó a la firma CGG Abogados y Financieros Ltda., en el Hospital Simón Bolívar, en la Gobernación de Caldas y en la Industria Licorera de Caldas.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        &nbsp;
                    </p>
                    <div class="accordion" data-accordion-id="ef426ce64cfd5f8d45e84d1384301b373">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">&nbsp;5.1. Dirección de Representación Judicial</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Lidera y coordina la ejecución de las metodologías, procesos y procedimientos de Representación Judicial y Extrajudicial para salvaguardar los intereses de la Secretaría Distrital de Movilidad en todos los procesos prejudiciales, judiciales y administrativos en los que sea parte.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-08/maria-isabel-hernandez.png" alt="Foto: Maria Isabel Hernández Pabón " width="900" height="900" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Maria Isabel Hernández Pabón
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Directora de Representación Judicial
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Abogada de la Universidad del Cauca, especialista en derecho público de la Universidad Externado y especialista en derecho contractual de la Universidad del Rosario. Tiene amplia experiencia en manejo de los instrumentos legales para la resolución de conflictos, procesos de gestión de calidad, defensa de entidades públicas en la jurisdicción laboral, administrativa y constitucional en entidades como el Ministerio de Educación Nacional y en entidades del sector solidario de carácter nacional.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">5.2. Dirección de Normatividad y Conceptos</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Lidera el análisis sobre la correcta aplicación del ordenamiento jurídico vigente, la emisión de normas y la elaboración revisión y aprobación de conceptos jurídicos y respuestas derivadas de la resolución de consultas que se eleven a la entidad.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-08/natalia-catalina-cogollo.jpg" alt="Foto: Natalia Catalina Cogollo Uyaban" width="900" height="900" title="Foto: Natalia Catalina Cogollo Uyaban" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Natalia Catalina Cogollo Uyaban
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Directora de Normatividad y Conceptos
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Abogada de la Universidad Pedagógica y Tecnológica de Colombia, especialista en Derecho Internacional del Transporte de la Universidad Externado y especialista en Gobierno y Gestión Pública Territorial de la Universidad Javeriana.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Cuenta con experiencia profesional de más de 10 años en entidades como el Congreso de la República en la Comisión Sexta del Senado; el Ministerio de Transporte como consultora del BID en el grupo de Seguridad Vial; en la Secretaría Distrital de Movilidad con el grupo de Normatividad y Conceptos de la antigua Dirección de Asuntos Legales y en la Agencia Nacional de Seguridad Vial como asesora de la Dirección de Comportamiento y de la Oficina Asesora Jurídica.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Las labores desempeñadas han consistido en la asesoría y acompañamiento jurídico en la estructuración normativa y de conceptos relacionados con tránsito, transporte, seguridad vial, así como en la estructuración de política pública en el sector transporte. Asume esta dirección con los retos de innovar en el proceso de estructuración normativa de la SDM y contribuir en la conformación de un marco normativo claro, con calidad técnica y jurídica que permita el cumplimiento de la misión y funciones de la entidad.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">5.3. Dirección de Contratación</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Lidera el proceso de gestión contractual de la Secretaría Distrital de Movilidad y sus respectivas etapas, permitiendo el desarrollo y ejecución de los planes, programas y proyectos a cargo de la entidad, garantizando la correcta aplicación del ordenamiento jurídico vigente, así como los procesos y procedimientos institucionales establecidos para tal fin.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-08/maria_jimena_yanez.png" alt="Foto: Maria Jimena Yáñez Gelvez" width="900" height="900" title="Foto: Maria Jimena Yáñez Gelvez" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Maria Jimena Yáñez Gelvez
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Directora de Contratación
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Abogada de la Universidad del Rosario, especialista en Derecho Comercial y Derecho Contractual de la misma institución. Adicionalmente, posee un título de Magíster en Derecho Internacional de los Negocios de ESADE Law School.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Cuenta con una extensa trayectoria profesional relacionada con la dirección en el sector público con amplios conocimientos en contratación estatal y derecho administrativo.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Ha estado vinculada a varias entidades del orden nacional como la Agencia Nacional del Espectro, la Unidad Nacional de Protección y la Agencia Nacional de Hidrocarburos, en las cuales desempeñó roles orientados a la formulación de estrategias, planes y programas en aras del fortalecimiento jurídico de estas entidades.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">5.4. Dirección de Gestión de Cobro</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card">
                                            <p class="text-align-center">
                                                Lidera y coordina la ejecución de las metodologías, procesos y procedimientos de cobro persuasivo y coactivo, así como la recuperación de cartera de la Secretaría Distrital de Movilidad.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin:20px;">
                                        <div class="col-12 card mt-4 p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-08/hernancortes.png" alt="Foto: Hernan Sebastián Cortés Osorio" width="900" height="900" title="Foto: Hernan Sebastián Cortés Osorio" usemap="#image-map">
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="text-align-center">
                                                        Hernan Sebastián Cortés Osorio
                                                    </h2>
                                                    <h5 class="text-align-center">
                                                        Director de Gestión de Cobro
                                                    </h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="overflow-auto h-50 card-gray">
                                                                <p class="text-align-justify">
                                                                    Abogado de la Universidad la Gran Colombia, conciliador extrajudicial en derecho, con estudios específicos y afianzados en contratación internacional, además, especialista en Instituciones Jurídico Procesales de la Universidad Nacional de Colombia. Experiencia particular en procesos de cobro jurídico civil y cobro coactivo administrativo, en análisis probatorio, en procesos disciplinarios, emisión de actos administrativos decisorios y conceptos jurídicos dentro de las ramas civil y administrativa.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Ingresó en el 2016 como contratista a la Dirección de Gestión de Cobro (antes Subdirección de Gestión Coactiva) de la Secretaría de Movilidad y luego pasó a planta provisional donde ha ido escalando varias posiciones gracias al liderazgo, el trabajo en equipo y la responsabilidad.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    Con conocimientos avanzados en el idioma inglés y los sistemas informáticos, se propone desarrollar precisas e innovadoras estrategias para el mejoramiento y óptimo funcionamiento de la Dirección a su cargo.
                                                                </p>
                                                                <p class="text-align-justify">
                                                                    También ha laborado como abogado en la Junta Central de Contadores, en la Universidad Nacional de Colombia y Sistemcobro S.A.S.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header">
                <a class="accordion-button collapsed" href="#">6. Subsecretaría de Gestión Corporativa.</a>
            </div>
            <div class="accordion-collapse collapse">
                <div class="accordion-body">
                    <div class="row" style="margin:20px;">
                        <div class="col-12 card">
                            <p class="text-align-center">
                                Dirige la formulación de políticas, planes programas y estrategias en materia administrativa, financiera y del Talento Humano.
                            </p>
                        </div>
                    </div>
                    <p class="mt-4 text-center">
                        <img class="img-fluid" src="/sites/default/files/2025-08/7_1.png" alt="Organigrama: Subsecretaría de Gestión Corporativa." width="920" height="295">
                    </p>
                    <div class="row" style="margin:20px;">
                        <div class="col-12 card mt-4 p-4">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-center align-items-center">
                                    <img class="img-fluid rounded-circle" src="/sites/default/files/2025-08/clemencia_rojas_arias.png" alt="Foto: Clemencia Rojas Arias" width="900" height="900" title="Foto: Clemencia Rojas Arias" usemap="#image-map">
                                </div>
                                <div class="col-md-9">
                                    <h2 class="text-align-center">
                                        Clemencia Rojas Arias
                                    </h2>
                                    <h5 class="text-align-center">
                                        Subsecretaria de Gestión Corporativa
                                    </h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="overflow-auto h-50 card-gray">
                                                <p class="text-align-justify">
                                                    Clemencia Rojas Arias es abogada de la Universidad de Caldas, con especialización en Derecho Administrativo de la misma universidad, especialización en Contratación Estatal y maestría en Derecho Público, ambas de la Universidad Externado de Colombia.
                                                </p>
                                                <p class="text-align-justify">
                                                    Con una experiencia de 29 años en el sector público, a nivel nacional y distrital, ha destacado en roles directivos de gran responsabilidad, demostrando habilidades sólidas para liderar equipos. En su nuevo rol, se enfrenta al desafío de consolidar la gestión institucional hacia una Secretaría de Movilidad más moderna, enfocada en la transparencia en sus procesos y contribuyendo activamente al cumplimiento de sus objetivos.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                            &nbsp;
                        </p>
                        <div class="accordion" data-accordion-id="edfe5dfa5bbb646679bd94ccce14a051e">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a class="accordion-button collapsed" href="#">6.1 Dirección Administrativa y Financiera</a>
                                </div>
                                <div class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div class="row" style="margin:20px;">
                                            <div class="col-12 card">
                                                <p class="text-align-center">
                                                    Dirige la formulación, ejecución y control de las políticas, planes, programas y proyectos en materia administrativa y financiera de la Secretaría Distrital de Movilidad, de acuerdo con el Plan Estratégico Institucional y la normatividad vigente.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row" style="margin:20px;">
                                            <div class="col-12 card mt-4 p-4">
                                                <div class="row">
                                                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                        <img class="img-fluid rounded-circle" src="/sites/default/files/2025-08/luzmaryperalta.png" alt="Foto: Luz Mary Peralta Rodríguez" width="900" height="900" title="Foto: Luz Mary Peralta Rodríguez" usemap="#image-map">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <h2 class="text-align-center">
                                                            Luz Mary Peralta Rodríguez
                                                        </h2>
                                                        <h5 class="text-align-center">
                                                            Directora Administrativa y Financiera
                                                        </h5>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="overflow-auto h-50 card-gray">
                                                                    <p class="text-align-justify">
                                                                        Contadora Pública de la Universidad Antonio Nariño, especialista en Derecho Tributario y Aduanero, Finanzas y Gestión Pública, con más de 15 años de labor en el sector público, amplia experiencia en coordinación de equipos de trabajo y ejecución de auditorías; capacidades para la gestión del talento humano, eficiencia en la ejecución presupuestal, causación contable y relacionamiento estratégico.
                                                                    </p>
                                                                    <p class="text-align-justify">
                                                                        Entre las entidades que ha trabajado se encuentran: Auditoría General de la Nación, Ministerio de Tics, Contraloría Distrital de Bogotá, Empresa de Acueducto y Aguas de Bogotá, Instituto Distrital de Gestión de Riesgos y Cambio Climático, Secretaría Distrital de Desarrollo Económico, entre otras. Trayectoria en la que ha obtenido diferentes logros entre los que se destacan: la coordinación de seminarios y talleres a nivel local y distrital asociados con la participación del sector privado en el mejoramiento de la prestación de los servicios públicos, y la conformación de Mesas Ambientales locales con líderes ambientales, para la protección y adecuado uso de los recursos naturales.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            &nbsp;
                                        </p>
                                        <div class="accordion" data-accordion-id="e205855e2c16512b0e258024796a90542">
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a class="accordion-button collapsed" href="#">&nbsp;6.1.1. Subdirección Financiera.</a>
                                                </div>
                                                <div class="accordion-collapse collapse">
                                                    <div class="accordion-body">
                                                        <div class="row" style="margin:20px;">
                                                            <div class="col-12 card">
                                                                <p class="text-align-center">
                                                                    Planea, organiza, dirige, hace seguimiento y controla las operaciones financieras, contables y presupuestales de la Secretaría Distrital de Movilidad, a través del seguimiento permanente, de conformidad con la normatividad vigente y lineamientos institucionales.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin:20px;">
                                                            <div class="col-12 card mt-4 p-4">
                                                                <div class="row">
                                                                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                        <img class="img-fluid rounded-circle" src="/sites/default/files/2025-08/jose_david_robayo.png" alt="Foto: Jose David Robayo Fonseca" width="900" height="900" title="Foto: Jose David Robayo Fonseca" usemap="#image-map">
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <h2 class="text-align-center">
                                                                            Jose David Robayo Fonseca
                                                                        </h2>
                                                                        <h5 class="text-align-center">
                                                                            Subdirector Financiero
                                                                        </h5>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="overflow-auto h-50 card-gray">
                                                                                    <p class="text-align-justify">
                                                                                        Profesional en Comercio Internacional egresado de la Escuela Colombiana de Carrera Industriales, con especialización en Finanzas y Administración Pública de la Universidad Militar Nueva Granada. Actualmente, se encuentra cursando un Máster Universitario en Dirección en la Gestión Pública.
                                                                                    </p>
                                                                                    <p class="text-align-justify">
                                                                                        Cuenta con una extensa trayectoria profesional con amplios conocimientos en contratación estatal, manejos presupuestales así como en el desarrollo e implementación de ERP presupuestales como SICAPITAL Y BOGDATA.
                                                                                    </p>
                                                                                    <p class="text-align-justify">
                                                                                        Se encuentra vinculado en calidad de contratista en la Secretaría Distrital de Movilidad desde el año 2008. Dentro de la Subdirección Financiera ha venido desarrollando actividades de ejecución del presupuesto entre las cuales se incluyen expedición de Certificados de Disponibilidad y Registro Presupuestal, seguimiento y programación del PAC, entre otras actividades.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a class="accordion-button collapsed" href="#">6.1.2. Subdirección Administrativa.</a>
                                                </div>
                                                <div class="accordion-collapse collapse">
                                                    <div class="accordion-body">
                                                        <div class="row" style="margin:20px;">
                                                            <div class="col-12 card">
                                                                <p class="text-align-center">
                                                                    Dirige la ejecución y hace seguimiento de los procesos administrativos de la entidad conforme a las normas, lineamientos y reglamentos establecidos, con el propósito de asegurar la eficacia y calidad de los procesos y actividades relacionados con la materia.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin:20px;">
                                                            <div class="col-12 card mt-4 p-4">
                                                                <div class="row">
                                                                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                                        <img class="img-fluid rounded-circle" src="/sites/default/files/2025-08/ilba_milady_vargas_guiza.png" alt="Foto: Ilba Milady Vargas Guiza" width="900" height="900" title="Foto: Ilba Milady Vargas Guiza" usemap="#image-map">
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <h2 class="text-align-center">
                                                                            Ilba Milady Vargas Guiza
                                                                        </h2>
                                                                        <h5 class="text-align-center">
                                                                            Subdirectora Administrativa
                                                                        </h5>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="overflow-auto h-50 card-gray">
                                                                                    <p class="text-align-justify">
                                                                                        Ilba Milady Vargas Guiza es abogada especializada en Derecho Administrativo y Gerencia en Salud y Economía, con un MBA en Dirección y Gestión de Empresas. Tiene 20 años de experiencia en el sector público, con un enfoque en el análisis y la dirección gerencial administrativa, especialmente en temas contractuales y financieros.
                                                                                    </p>
                                                                                    <p class="text-align-justify">
                                                                                        Desde su nuevo rol se propone garantizar el suministro eficiente de todos los servicios necesarios para el funcionamiento de la Entidad, cumpliendo con la normativa contractual, para asegurar una operación organizada y una respuesta adecuada a los requerimientos de la Secretaría de Movilidad.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a class="accordion-button collapsed" href="#">6.2. Dirección de Talento Humano</a>
                                </div>
                                <div class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <div class="row" style="margin:20px;">
                                            <div class="col-12 card">
                                                <p class="text-align-center">
                                                    Formula y dirige la formulación, ejecución y evaluación de las políticas, programas, planes y proyectos referentes al talento humano en la entidad, buscando el desarrollo integral del personal y cumpliendo con las disposiciones legales vigentes y objetivos institucionales de la Secretaría Distrital Movilidad.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row" style="margin:20px;">
                                            <div class="col-12 card mt-4 p-4">
                                                <div class="row">
                                                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                                                        <img class="img-fluid rounded-circle" src="/sites/default/files/2025-08/maria_teresa_rodriguez_leal.png" alt="Foto: María Teresa Rodríguez Leal" width="900" height="900" title="Foto: María Teresa Rodríguez Leal" usemap="#image-map">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <h2 class="text-align-center">
                                                            María Teresa Rodríguez Leal
                                                        </h2>
                                                        <h5 class="text-align-center">
                                                            Directora de Talento Humano
                                                        </h5>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="overflow-auto h-50 card-gray">
                                                                    <p class="text-align-justify">
                                                                        Abogada y licenciada en Ciencias Políticas. Especializada en Derecho Administrativo con amplia experiencia y conocimiento en la dirección y liderazgo en procesos de gestión integral del talento humano y gestión jurídica.
                                                                    </p>
                                                                    <p class="text-align-justify">
                                                                        Capacidad de planeación y organización, alto nivel de responsabilidad, compromiso, liderazgo, honestidad y facilidad para dinamizar grupos de trabajo en procura de la obtención de los resultados proyectados.
                                                                    </p>
                                                                    <p class="text-align-justify">
                                                                        Cuenta con amplia experiencia en el sector público; se destaca que trabajó en el Departamento Administrativo del Servicio Civil como subdirectora Jurídica, logrando analizar y emitir conceptos de los Proyectos de Acuerdos del Concejo de Bogotá, Decretos Distritales, Proyectos de Ley y demás normativa relacionada con la gestión del talento humano, del empleo público, formulación de planes de bienestar social y estímulos. También laboró en la Secretaría Distrital de la Mujer como directora de Talento Humano y en la Secretaría de Hacienda como subdirectora de Talento Humano, entre otros.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const page = document.querySelector('.org-page');
    if (!page) return;

    const searchInput = page.querySelector('#orgSearch');
    const status = page.querySelector('#orgSearchStatus');
    const items = Array.from(page.querySelectorAll('.accordion-item'));
    const collapses = Array.from(page.querySelectorAll('.accordion-collapse'));
    const expandBtn = page.querySelector('[data-org-action="expand"]');
    const collapseBtn = page.querySelector('[data-org-action="collapse"]');

    const expandAll = function () {
        collapses.forEach(function (collapse) {
            collapse.classList.add('show');
        });
    };

    const collapseAll = function () {
        collapses.forEach(function (collapse) {
            collapse.classList.remove('show');
        });
    };

    const filterItems = function () {
        const term = (searchInput.value || '').trim().toLowerCase();

        if (!term) {
            items.forEach(function (item) {
                item.hidden = false;
            });
            status.textContent = 'Escriba para filtrar resultados dentro del organigrama.';
            return;
        }

        let matches = 0;

        items.forEach(function (item) {
            const text = item.textContent.toLowerCase();
            const matched = text.includes(term);
            item.hidden = !matched;

            if (matched) {
                matches += 1;
                let node = item.parentElement;
                while (node) {
                    if (node.classList && node.classList.contains('accordion-collapse')) {
                        node.classList.add('show');
                    }
                    node = node.parentElement;
                }

                const ownCollapse = item.querySelector(':scope > .accordion-collapse');
                if (ownCollapse) ownCollapse.classList.add('show');
            }
        });

        status.textContent = 'Resultados encontrados: ' + matches;
    };

    if (expandBtn) {
        expandBtn.addEventListener('click', expandAll);
    }

    if (collapseBtn) {
        collapseBtn.addEventListener('click', collapseAll);
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterItems);
        searchInput.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                searchInput.value = '';
                filterItems();
            }
        });
    }
});
</script>
@endpush

@endsection
