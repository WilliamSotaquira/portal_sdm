@extends('layouts.app')
@section('title', 'PQRSD')

@section('content')

    <div class="set-wrapper">
        <!-- Set pqrsd -->
        <style type="text/css">
            .region .field-items .even h2 {
                visibility: hidden;
                margin-top: -50px;
            }

            .pqrsd {
                font-family: inherit;
                font-weight: normal;
                color: #252525;
                margin: 4px 0;
                margin-bottom: 32px;
            }

            .pqrsd .btn-pqrsd {
                background-color: #BED000;
                color: #282828;
                border: 1px solid #BED000;
                border-radius: 25pt;
                padding: 8px 16px;
                font-weight: bold;
                text-transform: uppercase;
                text-decoration: none;
            }

            .accordion-govco {
                width: 100%;
            }

            .accordion-govco .panel {
                border: 0;
                box-shadow: none;
                margin: 0 0 0.5rem;
                border-radius: 0.75rem;
                overflow: hidden;
            }

            .accordion-govco .panel-heading {
                padding: 0;
                border: 0 !important;
                background: transparent !important;
            }

            .accordion-govco .panel-title {
                margin: 0;
                line-height: 1.2;
            }

            .accordion-govco .button-accordion-govco {
                width: 100%;
                display: flex;
                align-items: center;
                gap: 0.75rem;
                min-height: 4.375rem;
                padding: 0 3rem 0 1.5rem;
                border: 0 !important;
                border-bottom: 0.125rem solid #e5ecf8 !important;
                background-color: #ffffff !important;
                color: #2b2b2b !important;
                font-size: 1.125rem;
                font-weight: 700;
                line-height: 1.2;
                text-decoration: none;
                position: relative;
                background-repeat: no-repeat;
                background-position: right 1.5rem center;
                background-size: 0.75rem 0.75rem;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 10'%3E%3Cpath d='M3 1l4 4-4 4' fill='none' stroke='%230943b5' stroke-width='1.6' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            }

            .accordion-govco .button-accordion-govco:hover,
            .accordion-govco .button-accordion-govco:focus {
                background-color: #ffffff !important;
                color: #2b2b2b !important;
            }

            .accordion-govco .button-accordion-govco::before {
                content: none !important;
                display: none !important;
            }

            .accordion-govco .button-accordion-govco::after {
                content: none !important;
                display: none !important;
            }

            .accordion-govco .button-accordion-govco[aria-expanded="true"]::after {
                content: none !important;
            }

            .accordion-govco .button-accordion-govco[aria-expanded="true"] {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 10'%3E%3Cpath d='M1 3l4 4 4-4' fill='none' stroke='%230943b5' stroke-width='1.6' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            }

            .accordion-govco .button-accordion-govco:focus-visible {
                outline: 0.125rem solid #000000;
                outline-offset: 3px;
            }

            .accordion-govco .panel-collapse .panel-body {
                padding: 1.875rem 1.5rem;
                background-color: #e5ecf8;
                color: #4c4c4c;
            }
        </style>
        <div class="set-wrapper pqrsd">
            <style type="text/css">
                .pqrsd .cpnt-1 {
                    display: flex;
                    margin-bottom: 32px;
                    flex-wrap: wrap;
                    align-items: center;
                    justify-content: center;
                    gap: 16px;
                }

                .cpnt-1 .title {
                    width: 100%;
                }

                .title .title-1 {
                    margin: 32px auto;
                    text-align: center;
                    color: #4d541f;
                    font-size: 34px;
                    font-weight: bold;
                }

                .title .ph-1 {
                    text-align: justify;
                    font-size: 16px;
                }

                .cpnt-1 .image {
                    width: 100%;
                    max-width: 360px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .cpnt-1 .image img {
                    width: min(240px, 100%);
                    max-width: 240px;
                    height: auto;
                    display: block;
                }

                @media (min-width: 768px) {
                    .pqrsd .cpnt-1 {
                        flex-wrap: nowrap;
                        gap: 24px;
                    }

                    .cpnt-1 .title {
                        width: 65%;
                    }

                    .cpnt-1 .image {
                        width: 35%;
                    }

                    .cpnt-1 .image img {
                        max-width: 260px;
                    }
                }
            </style>
            <div class="cpnt cpnt-1">
                <div class="title">
                    <h3 class="title title-1">Peticiones, Quejas, Reclamos, Solicitudes y Denuncias (PQRSD)</h3>

                    <p class="paragraph ph-1">Les damos la bienvenida al portal de PQRSD de la Secretaría Distrital de
                        Movilidad.</p>

                    <p class="paragraph ph-1">A través de este espacio, la ciudadanía podrá radicar de manera respetuosa sus
                        <b>peticiones, quejas, reclamos, solicitudes y denuncias,</b> de competencia de la entidad; así como,
                        hacer seguimiento de las mismas.</p>
                </div>

                <div class="image">
                    <div class="imagen img-1"><img alt="Imagen de encabezado" class="img-responsive w-100"
                            src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/imagen-inicio.png"
                            title="Imagen de encabezado"></div>
                </div>
            </div>
            <style type="text/css">
                .pqrsd .cpnt-2 {
                    background-color: #f3f6db;
                }

                .cpnt-2 .box-pills-hz {
                    padding: 16px;
                }

                .cpnt-2 .box-pills-hz .nav {
                    gap: 12px;
                }

                .cpnt-2 .box-pills-hz .nav .nav-link {
                    background-color: #fff;
                    color: #4d541f;
                    margin: 0;
                    border-radius: 25pt;
                    padding: 16px;
                    font-weight: bold;

                }

                .cpnt-2 .box-pills-hz .nav .nav-link:hover {
                    background-color: #BED000;
                    color: #252525;
                }

                .cpnt-2 .box-pills-hz .nav .nav-link.active {
                    background-color: #4d541f;
                    color: #fff;
                }

                .cpnt-2 .box-pills-hz .nav .nav-link>i {
                    margin-right: 8px;
                }

                .cpnt-2 .box-pills-hz .tab-content {
                    background-color: #fff;
                    margin: 10px;
                    padding: 16px;
                    border-radius: 25pt;
                }

                .tab-content .title-1 {
                    font-weight: bold;
                    font-size: clamp(1rem, 1.5vw + 1rem, 1.75rem);
                    margin: 0px;
                    padding: 32px;
                    color: #4d541f;
                    text-align: center;
                }

                @media (min-width: 768px) {
                    .cpnt-2 .box-pills-hz {
                        padding: 32px;
                    }
                }
            </style>
            <div class="cpnt cpnt-2">
                <div class="box-pills-hz">
                    <ul class="nav nav-pills nav-fill" role="tablist" aria-label="Navegación PQRSD">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="tab-peticion" data-bs-toggle="pill" href="#peticion"
                                role="tab" aria-controls="peticion" aria-selected="true">Tipos de petición</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-radicacion" data-bs-toggle="pill" href="#radicacion"
                                role="tab" aria-controls="radicacion" aria-selected="false">Radicación</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-seguimiento" data-bs-toggle="pill" href="#seguimiento"
                                role="tab" aria-controls="seguimiento" aria-selected="false">Seguimiento</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-normativa" data-bs-toggle="pill" href="#normativa"
                                role="tab" aria-controls="normativa" aria-selected="false">Normativa</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="peticion" role="tabpanel"
                            aria-labelledby="tab-peticion" tabindex="0">
                            <h3 class="title title-1">Conoce los tipos de petición que puedes radicar</h3>
                            <!-- collapse group peticion -->

                            <div aria-multiselectable="true" class="panel-group accordion-govco" id="accordion-peticion" role="tablist ">
                                <!-- collapse p1 -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-p1" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-p1" aria-expanded="false"
                                                data-bs-parent="#accordion-peticion" data-bs-toggle="collapse" href="#collapse-p1"
                                                role="button">Derecho de petición de interés general </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-p1" class="panel-collapse collapse"
                                        id="collapse-p1" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-p1">
                                                <p class="paragraph ph-1">Solicitud que una persona o una comunidad presenta
                                                    ante las autoridades, para que se preste un servicio o se cumpla una
                                                    función propia de la entidad, con el fin de resolver necesidades de tipo
                                                    comunitario.</p>

                                                <p><b>Se resuelve en 15 días hábiles</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse p2 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-p2" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-p2" aria-expanded="false"
                                                data-bs-parent="#accordion-peticion" data-bs-toggle="collapse" href="#collapse-p2"
                                                role="button">Derecho de petición de interés particular </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-p2" class="panel-collapse collapse"
                                        id="collapse-p2" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-p2">
                                                <p class="paragraph ph-1">Solicitud que una persona hace ante una autoridad,
                                                    con el fin que le resuelva determinado interrogante, inquietud o
                                                    situación jurídica que solo interesa a él, a ella y/o a su entorno.</p>

                                                <p class="paragraph ph-1"><b>Se resuelve en 15 días hábiles</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse p3 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-p3" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-p3" aria-expanded="false"
                                                data-bs-parent="#accordion-peticion" data-bs-toggle="collapse" href="#collapse-p3"
                                                role="button">Queja </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-p3" class="panel-collapse collapse"
                                        id="collapse-p3" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-p3">
                                                <p class="paragraph ph-1">Manifestación de protesta, censura, descontento o
                                                    inconformidad, que formula una persona en relación con una conducta, que
                                                    considera irregular de una o varios servidores públicos, en el
                                                    desarrollo de sus funciones.</p>

                                                <p class="paragraph ph-1"><b>Se resuelve en 15 días hábiles</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse p4 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-p4" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-p4" aria-expanded="false"
                                                data-bs-parent="#accordion-peticion" data-bs-toggle="collapse"
                                                href="#collapse-p4" role="button">Reclamo </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-p4"
                                        class="panel-collapse collapse" id="collapse-p4" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-p4">
                                                <p class="paragraph ph-1">Manifestación de inconformidad referente a la
                                                    prestación indebida de un servicio o la falta de atención de una
                                                    solicitud.</p>

                                                <p class="paragraph ph-1"><b>Se resuelve en 15 días hábiles</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse p5 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-p5" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-p5" aria-expanded="false"
                                                data-bs-parent="#accordion-peticion" data-bs-toggle="collapse"
                                                href="#collapse-p5" role="button">Sugerencia </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-p5"
                                        class="panel-collapse collapse" id="collapse-p5" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-p5">
                                                <p class="paragraph ph-1">Manifestación de una idea, opinión, aporte o
                                                    propuesta para mejorar el servicio o la gestión de la entidad.</p>

                                                <p class="paragraph ph-1">&nbsp;</p>
                                                <b>Se resuelve en 15 días hábiles</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse 6 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-6" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-6" aria-expanded="false"
                                                data-bs-parent="#accordion-peticion" data-bs-toggle="collapse"
                                                href="#collapse-6" role="button">Denuncia por posibles actos de
                                                corrupción </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-6"
                                        class="panel-collapse collapse" id="collapse-6" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-6">
                                                <p class="paragraph ph-1">Es la puesta en conocimiento de una presunta
                                                    conducta irregular por parte de un servidor público.</p>

                                                <p class="paragraph ph-1"><b>Se resuelve en 15 días hábiles</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse p7 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-p7" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-p7" aria-expanded="false"
                                                data-bs-parent="#accordion-peticion" data-bs-toggle="collapse"
                                                href="#collapse-p7" role="button">Felicitación </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-p7"
                                        class="panel-collapse collapse" id="collapse-p7" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-p7">
                                                <p class="paragraph ph-1">Manifestación de una persona en la que expresa la
                                                    satisfacción con motivo de algún suceso favorable para él, con relación
                                                    a la prestación del servicio por parte de una entidad pública.</p>

                                                <p class="paragraph ph-1"><b>Se resuelve en 15 días hábiles</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse p8 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-p8" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-p8" aria-expanded="false"
                                                data-bs-parent="#accordion-peticion" data-bs-toggle="collapse"
                                                href="#collapse-p8" role="button">Solicitud de acceso a la información
                                            </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-p8"
                                        class="panel-collapse collapse" id="collapse-p8" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-p8">
                                                <p class="paragraph ph-1">Solicitud para tener acceso a la información
                                                    sobre las funciones de la entidad y sus distintas dependencias.</p>

                                                <p class="paragraph ph-1"><b>Se resuelve en 10 días hábiles</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse p9 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-p9" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-p9" aria-expanded="false"
                                                data-bs-parent="#accordion-peticion" data-bs-toggle="collapse"
                                                href="#collapse-p9" role="button">Solicitud de copias </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-p9"
                                        class="panel-collapse collapse" id="collapse-p9" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-p9">
                                                <p class="paragraph ph-1">Reproducción y entrega de documentos que no
                                                    tengan el carácter de reservado al interior.</p>

                                                <p class="paragraph ph-1"><b>Se resuelve en 10 días hábiles</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse p10 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-p10" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-p10" aria-expanded="false"
                                                data-bs-parent="#accordion-peticion" data-bs-toggle="collapse"
                                                href="#collapse-p10" role="button">Consulta </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-p10"
                                        class="panel-collapse collapse" id="collapse-p10" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-p10">
                                                <p class="paragraph ph-1">Solicitud de orientación a las autoridades en
                                                    relación con las materias a su cargo, cuya respuesta no tiene efectos
                                                    jurídicos directos sobre el asunto que trata, por lo tanto, no es de
                                                    obligatorio cumplimiento.</p>

                                                <p class="paragraph ph-1"><b>Se resuelve en 30 días hábiles</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="radicacion" role="tabpanel" aria-labelledby="tab-radicacion"
                            tabindex="0">
                            <h3 class="title title-1">Radica tu petición por cualquiera de nuestros canales</h3>
                            <!-- collapse group radicacion -->

                            <div aria-multiselectable="true" class="panel-group accordion-govco" id="accordion-radicacion"
                                role="tablist "><!-- collapse r1 -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-r1" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-r1" aria-expanded="false"
                                                data-bs-parent="#accordion-radicacion" data-bs-toggle="collapse"
                                                href="#collapse-r1" role="button">Canal presencial </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-r1"
                                        class="panel-collapse collapse" id="collapse-r1" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-r1">
                                                <dl>
                                                    <dt>Centro de Servicios de Movilidad Calle 13</dt>
                                                    <dd>Departamento: Cundinamarca. Ciudad: Bogotá – Colombia. <a
                                                            href="https://maps.app.goo.gl/J2d3fCj7bnqW698N7"
                                                            rel="noopener noreferrer" target="_blank">Calle 13 No. 37 –
                                                            35</a></dd>
                                                    <dd>*Radicación Presencial: Lunes a Viernes: 7:00 a.m. a 5:00 p.m. <a
                                                            href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php"
                                                            rel="noopener noreferrer" target="_blank">Formulario
                                                            Radicación de correspondencia</a></dd>
                                                </dl>

                                                <dl>
                                                    <dt>Centro de Servicios de Movilidad Paloquemao</dt>
                                                    <dd>Departamento: Cundinamarca. Ciudad: Bogotá – Colombia. <a
                                                            href="https://maps.app.goo.gl/QGREmLiRJoTGMMPx6"
                                                            rel="noopener noreferrer" target="_blank">Cra 28 A N° 17 A
                                                            20</a></dd>
                                                    <dd>*Radicación Presencial: Lunes a Viernes: 7:00 a.m. a 5:00 p.m. <a
                                                            href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php"
                                                            rel="noopener noreferrer" target="_blank">Formulario
                                                            Radicación de correspondencia</a></dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse r2 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-r2" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-r2" aria-expanded="false"
                                                data-bs-parent="#accordion-radicacion" data-bs-toggle="collapse"
                                                href="#collapse-r2" role="button">&nbsp;Canal virtual </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-r2"
                                        class="panel-collapse collapse" id="collapse-r2" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-r2">
                                                <style type="text/css">
                                                    .cards>.card {
                                                        background: #ecececff;
                                                        border-radius: 8pt;
                                                        padding: 8px;

                                                        display: flex;
                                                        flex-wrap: wrap;

                                                        justify-content: flex-start;
                                                        align-items: start;
                                                        align-items: center;
                                                        flex-direction: column;
                                                    }

                                                    .tab-content .panel-body .card:nth-child(2n+1) {
                                                        background: #fff;
                                                    }

                                                    .card .card-image img {}


                                                    .card .card-title {
                                                        width: 100%;
                                                    }

                                                    .card .card-title .title-2 {
                                                        font-weight: bold;
                                                        font-size: clamp(1rem, 3vw + 2rem, 2rem);
                                                        margin: 0px;
                                                        padding: 8px;
                                                        color: #4d541f;
                                                    }

                                                    .card .card-image {
                                                        width: 25%;
                                                    }

                                                    .card .card-image img {
                                                        max-width: 150px;
                                                        width: 100%;
                                                        margin: auto;
                                                        padding: 8px;
                                                    }

                                                    .card .card-description {
                                                        width: 100%;
                                                    }

                                                    .card .card-action {
                                                        padding: 24px;
                                                    }

                                                    @media (min-width: 768px) {
                                                        .cards>.card {
                                                            flex-direction: row;
                                                        }

                                                        .card .card-description {
                                                            width: 50%;
                                                        }
                                                    }
                                                </style>
                                                <div class="cards">
                                                    <div class="card">
                                                        <div class="card-title">
                                                            <h4 class="title title-2">Formulario para radicación de
                                                                correspondencia</h4>
                                                        </div>

                                                        <div class="card-image"><img alt="Logo"
                                                                class="img-responsive w-100"
                                                                src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/logo-sdm2.png"
                                                                title=""></div>

                                                        <div class="card-description">
                                                            <p class="paragraph ph-1">La Secretaría de Movilidad, pone a
                                                                disposición de la ciudadanía este formulario web como canal,
                                                                para radicar PQRSDF.</p>
                                                        </div>

                                                        <div class="card-action"><a class="btn btn-pqrsd"
                                                                href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php"
                                                                rel="noopener noreferrer" target="_blank">Ir</a></div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-title">
                                                            <h4 class="title title-2">Bogotá te escucha</h4>
                                                        </div>

                                                        <div class="card-image"><img alt="Logo"
                                                                class="img-responsive w-100"
                                                                src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/bogota-te-escucha.png"
                                                                title=""></div>

                                                        <div class="card-description">
                                                            <p class="paragraph ph-1">Radica tu PQRSDF directamente en la
                                                                plataforma.</p>
                                                        </div>

                                                        <div class="card-action"><a class="btn btn-pqrsd"
                                                                href="https://bogota.gov.co/sdqs/crear-peticion"
                                                                rel="noopener noreferrer" target="_blank">Ir</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse r3 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-r3" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-r3" aria-expanded="false"
                                                data-bs-parent="#accordion-radicacion" data-bs-toggle="collapse"
                                                href="#collapse-r3" role="button">Canal telefónico </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-r3"
                                        class="panel-collapse collapse" id="collapse-r3" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-r3">
                                                <div class="cards">
                                                    <div class="card">
                                                        <div class="card-title">
                                                            <h4 class="title title-2">Línea de atención</h4>
                                                        </div>

                                                        <div class="card-image"><img alt="Logo"
                                                                class="img-responsive w-100"
                                                                src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/img_20230831_114714-300x225.jpg"
                                                                title=""></div>

                                                        <div class="card-description"><a href="tel:+6013649400">Desde fijo
                                                                o celular:<br>
                                                                364 9400 opción 2</a><br>
                                                            Línea 195
                                                            <p>&nbsp;</p>
                                                            <span class="paragraph ph-1">Horario de atención:</span> <span
                                                                class="paragraph ph-1">Lunes a viernes 7:00 a.m. a 6:00
                                                                p.m.</span> <span class="paragraph ph-1">Sábado 08:00 a.m.
                                                                a 12:00 m</span>
                                                        </div>

                                                        <div class="card-action">&nbsp;</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="seguimiento" role="tabpanel"
                            aria-labelledby="tab-seguimiento" tabindex="0">
                            <h3 class="title title-1">Consulta el estado de tu petición</h3>
                            <!-- collapse group seguimiento -->

                            <div aria-multiselectable="true" class="panel-group accordion-govco" id="accordion-seguimiento"
                                role="tablist "><!-- collapse s1 -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-s1" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-s1" aria-expanded="false"
                                                data-bs-parent="#accordion-seguimiento" data-bs-toggle="collapse"
                                                href="#collapse-s1" role="button">Radicado correspondencia SDM </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-s1"
                                        class="panel-collapse collapse" id="collapse-s1" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-s1">
                                                <div class="cards">
                                                    <div class="card">
                                                        <div class="card-title">&nbsp;</div>

                                                        <div class="card-image"><img alt="Logo"
                                                                class="img-responsive w-100"
                                                                src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/orfeo-150x150.png"
                                                                title=""></div>

                                                        <div class="card-description">
                                                            <p class="paragraph ph-1">Consulta aquí si radicaste por medio
                                                                del formulario de correspondencia o a través de la
                                                                ventanilla de correspondencia presencial.</p>
                                                        </div>

                                                        <div class="card-action"><a class="btn btn-pqrsd"
                                                                href="https://gestiondocumental.movilidadbogota.gov.co/orfeo-api/"
                                                                rel="noopener noreferrer" target="_blank">Ir</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse s2 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-s2" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-s2" aria-expanded="false"
                                                data-bs-parent="#accordion-seguimiento" data-bs-toggle="collapse"
                                                href="#collapse-s2" role="button">Radicado Bogotá te escucha </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-s2"
                                        class="panel-collapse collapse" id="collapse-s2" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-s2">
                                                <div class="cards">
                                                    <div class="card">
                                                        <div class="card-title">&nbsp;</div>

                                                        <div class="card-image"><img alt="Logo"
                                                                class="img-responsive w-100"
                                                                src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/bogota-te-escucha.png"
                                                                title=""></div>

                                                        <div class="card-description">
                                                            <p class="paragraph ph-1">Podrás consultar las peticiones con
                                                                tu usuario, siguiendo las diferentes opciones.</p>
                                                        </div>

                                                        <div class="card-action"><a class="btn btn-pqrsd"
                                                                href="https://bogota.gov.co/sdqs/consultar-peticion"
                                                                rel="noopener noreferrer" target="_blank">Ir</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse s3 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-s3" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-s3" aria-expanded="false"
                                                data-bs-parent="#accordion-seguimiento" data-bs-toggle="collapse"
                                                href="#collapse-s3" role="button">Petición anónima </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-s3"
                                        class="panel-collapse collapse" id="collapse-s3" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-s3">
                                                <div class="cards">
                                                    <div class="card">
                                                        <div class="card-title">&nbsp;</div>

                                                        <div class="card-image"><img alt="Logo"
                                                                class="img-responsive w-100"
                                                                src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/logo-sdm2.png"
                                                                title=""></div>

                                                        <div class="card-description">
                                                            <p class="paragraph ph-1">Consulta la respuesta si radicaste
                                                                como peticionario anónimo.</p>
                                                        </div>

                                                        <div class="card-action"><a class="btn btn-pqrsd"
                                                                href="https://www.movilidadbogota.gov.co/web/derechos-anonimos"
                                                                rel="noopener noreferrer" target="_blank">Ir</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse s4 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-s4" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-s4" aria-expanded="false"
                                                data-bs-parent="#accordion-seguimiento" data-bs-toggle="collapse"
                                                href="#collapse-s4" role="button">Notificación por aviso web </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-s4"
                                        class="panel-collapse collapse" id="collapse-s4" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-s4">
                                                <div class="cards">
                                                    <div class="card">
                                                        <div class="card-title">&nbsp;</div>

                                                        <div class="card-image"><img alt="Logo"
                                                                class="img-responsive w-100"
                                                                src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/logo-sdm2.png"
                                                                title=""></div>

                                                        <div class="card-description">
                                                            <p class="paragraph ph-1">Consulta aquí las respuestas a las
                                                                solicitudes publicadas por aviso web.</p>
                                                        </div>

                                                        <div class="card-action"><a class="btn btn-pqrsd"
                                                                href="https://www.movilidadbogota.gov.co/web/respuestas-a-oficio-sin-notificar"
                                                                rel="noopener noreferrer" target="_blank">Ir</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="normativa" role="tabpanel"
                            aria-labelledby="tab-normativa" tabindex="0">
                            <h3 class="title title-1">Conoce la normativa aplicable</h3>
                            <!-- collapse group normativa -->

                            <div aria-multiselectable="true" class="panel-group accordion-govco" id="accordion-normativa"
                                role="tablist "><!-- collapse n1 -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-n1" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-n1" aria-expanded="false"
                                                data-bs-parent="#accordion-normativa" data-bs-toggle="collapse"
                                                href="#collapse-n1" role="button">Leyes </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-n1"
                                        class="panel-collapse collapse" id="collapse-n1" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-n1">
                                                <ul>
                                                    <li><a
                                                            href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=65334">Ley
                                                            1755 de 2015</a><br>
                                                        <i>"Por medio de la cual se regula el Derecho Fundamental de
                                                            Petición y se sustituye un título del Código de Procedimiento
                                                            Administrativo y de lo Contencioso Administrativo"</i>
                                                    </li>
                                                    <li><a
                                                            href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=41249">Ley
                                                            1437 DE 2011</a><br>
                                                        <i>"Por la cual se expide el Código de Procedimiento Administrativo
                                                            y de lo Contencioso Administrativo"</i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse n2 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-n2" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-n2" aria-expanded="false"
                                                data-bs-parent="#accordion-normativa" data-bs-toggle="collapse"
                                                href="#collapse-n2" role="button">Decretos </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-n2"
                                        class="panel-collapse collapse" id="collapse-n2" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-n2">
                                                <ul>
                                                    <li><a
                                                            href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?dt=S&amp;i=40685">Decreto
                                                            Distrital 371 de 2010</a><br>
                                                        <i>"Por el cual se establecen lineamientos para preservar y
                                                            fortalecer la transparencia y para la prevención de la
                                                            corrupción en las Entidades y Organismos del Distrito
                                                            Capital"</i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse n3 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-n3" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-n3" aria-expanded="false"
                                                data-bs-parent="#accordion-normativa" data-bs-toggle="collapse"
                                                href="#collapse-n3" role="button">Directivas </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-n3"
                                        class="panel-collapse collapse" id="collapse-n3" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-n3">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse n4 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-n4" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-n4" aria-expanded="false"
                                                data-bs-parent="#accordion-normativa" data-bs-toggle="collapse"
                                                href="#collapse-n4" role="button">Circulares </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-n4"
                                        class="panel-collapse collapse" id="collapse-n4" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-n4">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse n5 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-n5" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-n5" aria-expanded="false"
                                                data-bs-parent="#accordion-normativa" data-bs-toggle="collapse"
                                                href="#collapse-n5" role="button">Reglamentos y Protocolos </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-n5"
                                        class="panel-collapse collapse" id="collapse-n5" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-n5">
                                                <ul>
                                                    <li><a
                                                            href="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/25-03-2025/pm04-rg01_reglamento_interno_para_la_gestiond_de_pqrsd_version_5.0_1.pdf">Reglamento
                                                            Interno de Gestión PQRSD</a><br>
                                                        <i>REGLAMENTO INTERNO PARA LA GESTIÓN DE PETICIONES, QUEJAS,
                                                            RECLAMOS, SUGERENCIAS Y DENUNCIAS</i>
                                                    </li>
                                                    <li><a
                                                            href="{{ route('inicio.atencion-servicios.tramites-servicios.pqrsd.anticorrupcion') }}">Protocolo
                                                            de Denuncias por Actos de Corrupción</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse n6 -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" id="heading-n6" role="tab">
                                        <h4 class="panel-title"><a class="button-accordion-govco" aria-controls="collapse-n6" aria-expanded="false"
                                                data-bs-parent="#accordion-normativa" data-bs-toggle="collapse"
                                                href="#collapse-n6" role="button">Resoluciones </a></h4>
                                    </div>

                                    <div aria-expanded="false" aria-labelledby="heading-n6"
                                        class="panel-collapse collapse" id="collapse-n6" role="tabpanel">
                                        <div class="panel-body">
                                            <div class="body-collapse-n6">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style type="text/css">
                .pqrsd .cpnt-3 {
                    padding: 16px;
                    background-color: #4d541f;
                    display: flex;
                    flex-direction: column;
                }

                .cpnt-3 .imagen {
                    width: 100%;
                    max-width: 300px;
                    margin: auto;
                    padding: 16px;
                }



                .cpnt-3 .lista {
                    padding: 16px;
                    width: 100%;
                }

                .cpnt-3 .lista h4 {
                    color: #fff;
                    font-size: 24px;
                    font-weight: bold;
                }


                .cpnt-3 .item-conoce {
                    display: block;
                    border-bottom: 7px double #BED000;
                }

                .cpnt-3 .item-conoce-content {
                    display: flex;
                    flex-wrap: nowrap;
                    margin: 8px 0;
                    padding: 8px;
                    border-radius: 8px;
                }

                .cpnt-3 .item-conoce-title {
                    width: 75%;
                    color: #fff;
                    font-size: 18px;
                }

                @media (min-width: 768px) {
                    .pqrsd .cpnt-3 {
                        flex-direction: row;
                    }

                    .cpnt-3 .imagen {
                        width: 30%;
                    }

                    .cpnt-3 .lista {
                        width: 70%;
                    }
                }
            </style>
            <div class="cpnt cpnt-3">
                <div class="imagen img-1"><img alt="" class="img-responsive w-100"
                        src="https://www.movilidadbogota.gov.co/web/sites/default/files/servicios/29-11-2024/imagen-final.png"
                        title=""></div>

                <div class="lista">
                    <h4 class="title title-1">Conoce</h4>

                    <div class="items-conoce">
                        <div class="item-conoce">
                            <div class="item-conoce-content">
                                <div class="item-conoce-title">Informes de PQRSD</div>

                                <div class="item-conoce-link"><a class="btn-pqrsd"
                                        href="https://www.movilidadbogota.gov.co/informe-de-peticiones-quejas-reclamos-sugerencias-y-denuncias"
                                        rel="noopener noreferrer" target="_blank">Ir</a></div>
                            </div>
                        </div>

                        <div class="item-conoce">
                            <div class="item-conoce-content">
                                <div class="item-conoce-title">Carta de Compromiso a la Ciudadanía</div>

                                <div class="item-conoce-link"><a class="btn-pqrsd"
                                        href="https://www.movilidadbogota.gov.co/web/carta_de_compromiso_con_la_ciudadania"
                                        rel="noopener noreferrer" target="_blank">Ir</a></div>
                            </div>
                        </div>

                        <div class="item-conoce">
                            <div class="item-conoce-content">
                                <div class="item-conoce-title">Preguntas Frecuentes</div>

                                <div class="item-conoce-link"><a class="btn-pqrsd"
                                        href="/preguntas-frecuentes"
                                        rel="noopener noreferrer" target="_blank">Ir</a></div>
                            </div>
                        </div>

                        <div class="item-conoce">
                            <div class="item-conoce-content">
                                <div class="item-conoce-title">Defensora de la ciudadanía</div>

                                <div class="item-conoce-link"><a class="btn-pqrsd"
                                        href="https://www.movilidadbogota.gov.co/web/defensorciudadano"
                                        rel="noopener noreferrer" target="_blank">Ir</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style type="text/css">
                /* Overrides finales para imponer estilos de la vista PQRSD */
                .set-wrapper.pqrsd .btn-pqrsd {
                    background-color: #BED000 !important;
                    color: #282828 !important;
                    border: 1px solid #BED000 !important;
                    border-radius: 25pt !important;
                    text-transform: uppercase !important;
                }

                .set-wrapper.pqrsd .cpnt-2 {
                    background-color: #f3f6db !important;
                }

                .set-wrapper.pqrsd .cpnt-2 .box-pills-hz {
                    padding: 16px !important;
                }

                .set-wrapper.pqrsd .cpnt-2 .box-pills-hz .nav {
                    display: flex !important;
                    gap: 12px !important;
                }

                .set-wrapper.pqrsd .cpnt-2 .box-pills-hz .nav .nav-link {
                    background-color: #fff !important;
                    color: #4d541f !important;
                    border-radius: 25pt !important;
                    padding: 16px !important;
                    margin: 0 !important;
                    font-weight: 700 !important;
                }

                .set-wrapper.pqrsd .cpnt-2 .box-pills-hz .nav .nav-link:hover {
                    background-color: #BED000 !important;
                    color: #252525 !important;
                }

                .set-wrapper.pqrsd .cpnt-2 .box-pills-hz .nav .nav-link.active {
                    background-color: #4d541f !important;
                    color: #fff !important;
                }

                .set-wrapper.pqrsd .cpnt-2 .box-pills-hz .tab-content {
                    background-color: #fff !important;
                    margin: 10px !important;
                    padding: 16px !important;
                    border-radius: 25pt !important;
                    box-shadow: none !important;
                    min-height: 0 !important;
                    height: auto !important;
                }

                .set-wrapper.pqrsd .cpnt-2 .box-pills-hz .tab-content>.tab-pane {
                    min-height: 0 !important;
                    height: auto !important;
                }

                .set-wrapper.pqrsd .accordion-govco,
                .set-wrapper.pqrsd .accordion-govco .panel-group,
                .set-wrapper.pqrsd .accordion-govco .panel {
                    border: 0 !important;
                    box-shadow: none !important;
                    margin: 0 0 0.5rem !important;
                    border-radius: 0.75rem !important;
                    overflow: hidden !important;
                }

                .set-wrapper.pqrsd .accordion-govco .button-accordion-govco {
                    border: 0 !important;
                    border-bottom: 0.125rem solid #e5ecf8 !important;
                    background-color: #ffffff !important;
                    color: #2b2b2b !important;
                }

                .set-wrapper.pqrsd .accordion-govco .button-accordion-govco:hover,
                .set-wrapper.pqrsd .accordion-govco .button-accordion-govco:focus {
                    background-color: #ffffff !important;
                    color: #2b2b2b !important;
                }

                .set-wrapper.pqrsd .accordion-govco .panel-collapse .panel-body {
                    background-color: #e5ecf8 !important;
                    color: #4c4c4c !important;
                }

                /* Evita altura fantasma en collapses cerrados */
                .set-wrapper.pqrsd .accordion-govco .panel-collapse.collapse:not(.show) {
                    display: none !important;
                    height: 0 !important;
                    overflow: hidden !important;
                }

                .set-wrapper.pqrsd .accordion-govco .panel-collapse.collapse.show {
                    display: block !important;
                    height: auto !important;
                    overflow: visible !important;
                }
            </style>
        </div>
        <!-- Fin Set -->


    </div>
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            const triggers = document.querySelectorAll(
                '.accordion-govco .button-accordion-govco[data-bs-toggle="collapse"]'
            );

            triggers.forEach(function(trigger) {
                const rawTarget = trigger.getAttribute('data-bs-target') || trigger.getAttribute('href');
                if (!rawTarget || !rawTarget.startsWith('#')) return;

                const target = document.querySelector(rawTarget);
                if (!target) return;

                // Asegura comportamiento tipo accordion (cerrar siblings) en Bootstrap 5.
                const parentSelector = trigger.getAttribute('data-bs-parent');
                if (parentSelector && !target.getAttribute('data-bs-parent')) {
                    target.setAttribute('data-bs-parent', parentSelector);
                }

                // Fallback cuando no hay API de Bootstrap disponible.
                if (!(window.bootstrap && window.bootstrap.Collapse)) {
                    trigger.addEventListener('click', function(e) {
                        e.preventDefault();
                        const isOpen = target.classList.contains('show');

                        if (parentSelector) {
                            const parent = document.querySelector(parentSelector);
                            if (parent) {
                                parent.querySelectorAll('.panel-collapse.show').forEach(function(openItem) {
                                    openItem.classList.remove('show');
                                });
                                parent.querySelectorAll('.button-accordion-govco[aria-expanded="true"]')
                                    .forEach(function(openTrigger) {
                                        openTrigger.setAttribute('aria-expanded', 'false');
                                    });
                            }
                        }

                        target.classList.toggle('show', !isOpen);
                        trigger.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
                    });
                }
            });
        });
    </script>

@endsection
