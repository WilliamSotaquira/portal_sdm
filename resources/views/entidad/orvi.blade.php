<style>
    .sdm-titulo {
        text-align: center;
        color: #4b541c;
        font-weight: 600;
        margin-bottom: 20px;
        font-size: 32px !important;
    }

    .sdm-subtitulo {
        font-size: 24px;
        font-weight: 600;
    }

    .sdm-descripcion-section {
        font-family: "WorkSans-Medium";
        font-size: 20px;
        line-height: 30px;
        font-weight: 500 !important;
    }

    .paso-content {
        display: flex;
        justify-content: center;
        gap: 32px;
        flex-wrap: wrap;
    }

    .paso {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        width: 190px;
        height: 160px;
        background-color: #c2d500;
        border-radius: 12px;
        text-align: center;
        transition: all 0.3s ease-in-out;
        overflow: hidden;
        cursor: pointer;
    }

    .numero {
        background-color: #404b17;
        color: white;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        margin: 20px auto 5px;
        font-weight: bold;
        font-size: 18px;
    }

    .titulo {
        font-weight: 600;
        font-family: "Montserrat", sans-serif;
        font-size: 1.125rem;
        color: #000;
        margin: 10px 0 5px;
    }

    .sdm-tarjetas-icono-container {
        background-color: #4d541f;
    }

    .sdm-footer-tarjetas-container {
        background-color: #bed000;
    }

    .sdm-boton {
        border-radius: 24px;
        font-size: 1rem;
        font-weight: 500;
        font-family: "WorkSans-Medium", sans-serif !important;
        background-color: #c2d500;
        color: #404b17;
        border-color: var(--color-primario);
        padding: 0.5rem 1rem;
    }

    .sdm-boton--secundario {
        background-color: #4b5222;
    }

    .sdm-boton:hover {
        background-color: #404b17;
        border-color: #879225;
        color: black;
    }

    .sdm-boton:focus-visible {
        background-color: #879225;
        border-color: #879225;
        color: black;
        border-color: black;
        box-shadow: none;
    }

    .hover-text {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #404b17;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px;
        font-size: 15px;
        text-align: center;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .paso:hover .hover-text,
    .paso:focus .hover-text {
        opacity: 1;
    }

    .paso:hover .numero,
    .paso:hover .titulo,
    .paso:focus .numero,
    .paso:focus .titulo {
        opacity: 0;
    }

    .seccion-verde {
        background-color: #4b5222;
        padding: 30px;
        border-radius: 12px;
    }

    .tarjeta-charla {
        width: 231px;
        padding: 16px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin: 10px;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .tarjeta-charla img {
        width: 199px;
        height: 141px;
        object-fit: cover;
        border-radius: 5px;
    }

    .etiqueta {
        background-color: #c2e500;
        color: white;
        font-weight: bold;
        padding: 5px 12px;
        border-radius: 10px;
        display: inline-block;
        position: absolute;
        top: 4px;
        margin-bottom: 10px;
        left: 16px;
        z-index: 2;
    }

    .descripcion {
        font-size: 1rem;
        color: #333;
        text-align: start;
        font-family: "WorkSans-Regular", sans-serif !important;
    }

    .carrusel-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .contenedor-cards {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        scroll-snap-type: x mandatory;
        gap: 16px;
        padding: 10px 0;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .contenedor-cards::-webkit-scrollbar {
        display: none;
    }

    .contenedor-cards .tarjeta-charla {
        scroll-snap-align: start;
        flex: 0 0 231px;
        margin: 0;
    }

    .carrusel-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        min-width: 40px;
        border-radius: 50%;
        border: none;
        background-color: #c2d500;
        color: #404b17;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.2s, transform 0.2s;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        z-index: 2;
    }

    .carrusel-btn:hover {
        background-color: #a8b800;
        transform: scale(1.1);
    }

    .carrusel-btn:focus-visible {
        outline: 2px solid #fff;
        outline-offset: 2px;
    }

    .carrusel-btn:disabled {
        opacity: 0.4;
        cursor: not-allowed;
        transform: none;
    }

    h4 {
        color: white;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .row.my-5 > .col-md-6 {
        flex: 0 0 auto;
        width: 50%;
        margin-top: 30px;
    }

    .row.align-items-center.mt-5 > .col-md-6 {
        flex: 0 0 auto;
        width: 50%;
    }

    .accordion-body>p {
        font-family: "WorkSans-Regular", sans-serif !important;
    }

    /* Responsive styles */
    @media (max-width: 991.98px) {
        .sdm-titulo {
            font-size: 26px;
        }

        .paso-content {
            gap: 20px;
        }

        .tarjeta-charla {
            width: 100%;
            max-width: 350px;
            height: auto;
            margin: 10px auto;
        }

        .tarjeta-charla img {
            width: 100%;
            height: auto;
            min-height: 120px;
        }

        .contenedor-cards {
            scroll-snap-type: x mandatory;
            gap: 12px;
        }

        .contenedor-cards .tarjeta-charla {
            flex: 0 0 260px;
        }

        .seccion-verde {
            padding: 16px;
        }
    }

    @media (max-width: 767.98px) {
        .sdm-titulo {
            font-size: 22px;
        }

        .paso-content {
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }

        .paso {
            width: 90vw;
            max-width: 350px;
            height: 120px;
            margin-bottom: 10px;
        }

        .numero {
            width: 32px;
            height: 32px;
            line-height: 32px;
            font-size: 15px;
            margin: 10px auto 2px;
        }

        .hover-text {
            font-size: 13px;
            padding: 4px;
        }

        .tarjeta-charla {
            width: 100%;
            max-width: 350px;
            height: auto;
            margin: 10px auto;
            padding: 10px;
        }

        .tarjeta-charla img {
            width: 100%;
            height: auto;
            min-height: 100px;
        }

        .contenedor-cards {
            gap: 12px;
        }

        .contenedor-cards .tarjeta-charla {
            flex: 0 0 240px;
        }

        .seccion-verde {
            padding: 10px;
        }

        .row.align-items-center.mt-5>.col-md-6 {
            margin-bottom: 20px;
            width: 100%;
        }

        .row.align-items-center.mt-5 {
            flex-direction: column;
            align-items: stretch;
        }

        .row.my-5 > .col-md-6 {
            width: 100%;
        }
    }

    @media (max-width: 575.98px) {
        .sdm-titulo {
            font-size: 18px;
        }

        .paso {
            width: 98vw;
            max-width: 98vw;
            height: 100px;
        }

        .tarjeta-charla {
            max-width: 98vw;
            padding: 6px;
        }

        .contenedor-cards {
            gap: 10px;
        }

        .contenedor-cards .tarjeta-charla {
            flex: 0 0 220px;
        }

        .carrusel-btn {
            width: 32px;
            height: 32px;
            min-width: 32px;
            font-size: 16px;
        }

        .seccion-verde {
            padding: 5px;
        }
    }

    @media (max-width: 575.98px) {
        .paso {
            width: 98vw;
            height: 100px;
            max-width: 85vw !important;
        }
    }
</style>
<div class="container my-5">
    <p>
        <img class="w-50 d-block mx-auto img-fluid" src="/sites/default/files/2025-07/logo_orvi_2025.png"
            alt="logo orvi 2025" width="2251" height="772">
    </p>
    <div class="row align-items-center">
        <!-- Columna del video -->
        <div class="col-md-4 mb-4 mb-md-0">
            <video class="w-100" style="max-width:100%;" controls="">
                <source src="[custom:old_url][custom:old_url]/sites/default/files/Paginas/20-05-2025/ORVI.mp4"
                    type="video/mp4">
            </video>
        </div>
        <!-- Columna de texto -->
        <div class="col-md-8 px-2 px-lg-5">
            <h3 class="sdm-subtitulo">
                ¿Qué es ORVI?
            </h3>
            <p>
                Orvi es el Centro de Orientación a Víctimas de Siniestros Viales, de la Secretaría Distrital de
                Movilidad, el primero en Colombia y el segundo en América Latina. En ORVI acompañamos, informamos y
                orientamos de manera gratuita a las víctimas por siniestros viales y sus familias, acerca de los
                procesos que pueden seguir en materia social, jurídica y psicológica. También contamos con una oferta
                formativa enfocada en la prevención de siniestros viales.
            </p>
            <p>
                En ORVI disponemos de medios presenciales y virtuales para que las víctimas de siniestros viales y/o sus
                familiares puedan acceder a nuestro servicio.
            </p>
        </div>
    </div>
    <p>
        <!-- Tarjetas informativas -->&nbsp;
    </p>
    <div class="sdm-tarjetas-icono-container row text-center py-4 rounded-top mt-4">
        <div class="col-md-4 mb-4 mb-md-0">
            <p>
                <img class="img-fluid" src="/sites/default/files/2025-07/asistencia-social.png" alt="¿A quién ayudamos?"
                    width="100" height="100">
            </p>
            <h5 class="mt-3 fw-bold text-white">
                ¿A quién ayudamos?
            </h5>
            <p class="text-white">
                A todas las personas que hayan sufrido daño o afectación como consecuencia directa e indirecta de un
                siniestro vial y a sus familiares.
            </p>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
            <p>
                <img class="img-fluid" src="/sites/default/files/2025-07/apreton-de-manos.png" alt="¿Qué hacemos?"
                    width="100" height="100">
            </p>
            <h5 class="mt-3 fw-bold text-white">
                ¿Qué hacemos?
            </h5>
            <p class="text-white">
                Acompañamos, informamos y orientamos de manera gratuita, acerca de los procesos que pueden seguir en
                materia social, jurídica y psicológica. También contamos con una oferta formativa enfocada en la
                prevención de siniestros viales.
            </p>
        </div>
        <div class="col-md-4">
            <p>
                <img class="img-fluid" src="/sites/default/files/2025-07/ok.png" alt="¿Qué garantizamos?" width="100"
                    height="100">
            </p>
            <h5 class="mt-3 fw-bold text-white">
                ¿Qué garantizamos?
            </h5>
            <p class="text-white">
                Un trato cordial y empático, atento a las necesidades particulares de las personas, desde un enfoque
                diferencial, de género y de derechos.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center fw-semibold py-3 px-2 rounded-bottom m-0 sdm-footer-tarjetas-container">
            La implementación y operación del Centro <strong>ORVI</strong> se enmarca bajo el decreto 494 de 2023 “por
            el cual se adopta el Plan Distrital de Seguridad Vial y de motociclistas 2023-2032”
        </div>
    </div>
    <div>
        <h4 class="sdm-titulo text-center mt-5">
            ¿Eres víctima de un siniestro vial?
        </h4>
        <p class="sdm-descripcion-section">
            Te acompañamos y orientamos como víctima directa, a tu cónyuge y/o familiar en primer y segundo grado de
            consanguinidad (padre, madre, hermana, hermano, hijo e hija natural o civil).
        </p>
        <div class="d-flex flex-column flex-md-row justify-content-around align-items-stretch gap-2">
            <a class="text-decoration-none text-center sdm-boton"
                href="https://vus.circulemosdigital.com.co/#/login">Regístrate y solicita tu cita de atención</a> <a
                class="text-decoration-none text-center sdm-boton" href="https://wa.link/iq4xn4">Chatea con nosotros</a>
        </div>
    </div>
    <p>
        <!--Seccion de enfoque -->&nbsp;
    </p>
    <div class="row my-5">
        <!-- Columna de imagen -->
        <div class="col-md-6 mb-4 mb-md-0">
            <img class="img-fluid w-100" src="/sites/default/files/2025-07/orvi_2.png" alt="Orientación" width="940"
                height="500">
        </div>
        <!-- Columna de acordeon -->
        <div class="col-md-6">
            <h2 class="text-center mb-5">
                Enfoques de Orientación
            </h2>
            <div class="section-sdm my-5 p-5">
                <div class="accordion container" data-accordion-id="accordionOrientacion" id="accordionOrientacion">
                    <!-- Ítem 1 -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <a class="accordion-button" href="#">&nbsp;ORIENTACIÓN SOCIAL</a>
                        </div>
                        <div class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <p>
                                    <img class="img-fluid mb-3"
                                        src="/sites/default/files/2025-07/orientacion_social.jpeg"
                                        alt="Orientación Social" width="6393" height="4262">
                                </p>
                                <h5 class="text-center fw-bold px-2">
                                    Orientación Social:
                                </h5>
                                <p class="text-start">
                                    Evaluamos las condiciones sociales que hayan sido afectadas por consecuencia del
                                    siniestro vial. Esto nos permite informarte acerca de los programas sociales
                                    vigentes ofrecidos por el Distrito, en los que de manera voluntaria podrás
                                    inscribirte de acuerdo a tus intereses, necesidades y condiciones de cada programa,
                                    obteniendo herramientas para adaptarte a tus nuevas condiciones de vida.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Ítem 2 -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <a class="accordion-button collapsed" href="#">&nbsp;ORIENTACIÓN JURÍDICA</a>
                        </div>
                        <div class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>
                                    <img class="img-fluid mb-3" src="/sites/default/files/2025-07/orvi_6.png"
                                        alt="Orientación Jurídica" width="470" height="268">
                                </p>
                                <h5 class="text-center fw-bold px-2">
                                    Orientación Jurídica:
                                </h5>
                                <p class="text-start">
                                    En la orientación jurídica te informamos y orientamos en la preparación de
                                    documentos y procedimientos previos a cualquier trámite que requieras como víctima,
                                    relacionado con la ocurrencia de un siniestro vial y las reclamaciones a que haya
                                    lugar, de carácter civil, penal, laboral, administrativo, exigencia de pólizas de
                                    seguro o cualquier otro tipo de instancia. Esta actividad se desarrolla a nivel de
                                    orientación y en ningún momento ejercemos una representación judicial ante el
                                    proceso
                                </p>
                                <p class="text-start">
                                    Términos para acceder a la Orientación Jurídica:
                                </p>
                                <p class="text-start">
                                    La orientación debe cumplir estándares de oportunidad. Para lograr esto el
                                    orientador jurídico verifica que las acciones, reclamaciones y/o trámites a
                                    gestionar, sean oportunos en cuanto a sus términos legales de caducidad y
                                    prescripción. Las consultas legales que estén caducadas o prescritas, no serán
                                    atendidas por los orientadores.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Ítem 3 -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <a class="accordion-button collapsed" href="#">&nbsp;ORIENTACIÓN PSICOLÓGICA</a>
                        </div>
                        <div class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>
                                    <img class="img-fluid mb-3" src="/sites/default/files/2025-07/orvi_5.png"
                                        alt="Orientación Psicológica" width="470" height="268">
                                </p>
                                <h5 class="text-center fw-bold px-2">
                                    Orientación Psicológica:
                                </h5>
                                <p class="text-start">
                                    Realizamos orientación psicológica primaria, con el fin de valorar el daño asociado
                                    al siniestro vial, para brindar recomendaciones y herramientas con relación a las
                                    posibles afectaciones psicológicas y un eventual tratamiento a seguir.
                                </p>
                                <p class="text-start">
                                    Aunque en ORVI no brindemos un tratamiento psicológico, el/la profesional podrá
                                    recomendar realizarlo por medio del régimen de salud o el servicio de salud
                                    especializado de su preferencia.
                                </p>
                                <p class="text-start">
                                    Hacemos orientación enfocada en primeros auxilios psicológicos cuando haya lugar,
                                    con el fin de apoyar el restablecimiento y la funcionalidad a nivel conductual,
                                    emocional y cognitiva.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Ítem 4 -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <a class="accordion-button collapsed" href="#">&nbsp;¿QUIÉN PUEDE ACCEDER?</a>
                        </div>
                        <div class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>
                                    <img class="img-fluid mb-3" src="/sites/default/files/2025-07/orvi_4.png"
                                        alt="Orvi accesso" width="469" height="268">
                                </p>
                                <p class="text-start">
                                    En <strong>ORVI</strong> enfocamos la atención en la víctima directa, cónyuge o
                                    compañero (a) permanente, familiares en primer y segundo grado de consanguinidad
                                    (hijos/hijas, padres/madres, hermanos/hermanas). Los menores de edad deben estar
                                    acompañados de sus padres, madres o acudientes legalmente designados.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Ítem 5 -->
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <a class="accordion-button collapsed" href="#">&nbsp;TEN EN CUENTA</a>
                        </div>
                        <div class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>
                                    <img class="img-fluid mb-3" src="/sites/default/files/2025-07/ten_en_cuenta.jpeg"
                                        alt="Orvi saber" width="6720" height="4480">
                                </p>
                                <ul>
                                    <li data-list-item-id="ec9312437bac36ff80f87897a5af47072">
                                        Ofrecemos orientación a las víctimas de siniestros viales desde el 2014 y que
                                        hayan sido registradas por medio del IPAT (Informe Policial de Accidentes de
                                        Tránsito) o cuya ocurrencia pueda ser comprobada.
                                    </li>
                                    <li data-list-item-id="e850aa61663a2ea9f031d95caddeca980">
                                        En ORVI no actuamos como un ente de reacción inmediata al siniestro de tránsito,
                                        ni como un mecanismo de atención primaria en salud. En caso de emergencia, llama
                                        al 123.
                                    </li>
                                    <li data-list-item-id="eb45659bf563f1a59a19fea4e2e441fc3">
                                        En ORVI prestamos nuestros servicios a los residentes y víctimas de siniestros
                                        viales en la ciudad de Bogotá, teniendo en cuenta el ámbito territorial de los
                                        trámites, con el fin de que estos puedan llegar a ser eficientes y efectivos.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>
        <!-- Seccion de pasos -->&nbsp;
    </p>
    <div>
        <h2 class="sdm-titulo">
            Paso a paso
        </h2>
        <div class="paso-content">
            <div class="paso" tabindex="0">
                <p class="numero">
                    1
                </p>
                <p class="titulo">
                    Agenda
                </p>
                <div class="hover-text">
                    Regístrate y solicita tu cita de atención
                </div>
            </div>
            <div class="paso" tabindex="0">
                <p class="numero">
                    2
                </p>
                <p class="titulo">
                    Acogida
                </p>
                <div class="hover-text">
                    Evaluamos tus necesidades y te guiamos en la orientación que necesites en material Social,
                    Psicológica o Jurídica.
                </div>
            </div>
            <div class="paso" tabindex="0">
                <p class="numero">
                    3
                </p>
                <p class="titulo">
                    Orientación
                </p>
                <div class="hover-text">
                    Profesionales de los diferentes enfoques te acompañarán en el proceso.
                </div>
            </div>
            <div class="paso" tabindex="0">
                <p class="numero">
                    4
                </p>
                <p class="titulo">
                    Cierre
                </p>
                <div class="hover-text">
                    Culminamos el proceso de orientación en cada uno de los enfoques sugeridos.
                </div>
            </div>
            <div class="paso" tabindex="0">
                <p class="numero">
                    5
                </p>
                <p class="titulo">
                    Seguimiento
                </p>
                <div class="hover-text">
                    Hacemos seguimiento sobre los avances de tu proceso de orientación
                </div>
            </div>
        </div>
    </div>
    <p>
        <!-- Seccion charlas y talleres -->&nbsp;
    </p>
    <div class="row">
        <h2 class="sdm-titulo mt-5">
            Oferta formativa
        </h2>
        <p class="sdm-descripcion-section">
            Desde el área de formación de ORVI realizamos charlas y talleres con el fin de prevenir, controlar y
            disminuir los riesgos que conllevan un siniestro vial. Escríbenos a <a
                href="formacionorvi@movilidadbogota.gov.co">formacionorvi@movilidadbogota.gov.co</a> para registrarte o
            recibir más información.
        </p>
        <div class="seccion-verde mt-2">
            <h4 class="text-white">
                Charlas y talleres
            </h4>
            <div class="carrusel-wrapper">
                <button class="carrusel-btn carrusel-btn-prev" aria-label="Anterior" type="button">&#10094;</button>
                <div class="contenedor-cards" id="carruselOferta">
                    <div class="tarjeta-charla">
                        <p>
                            <span class="etiqueta">Charla</span> <img class="img-fluid"
                                src="/sites/default/files/2025-07/que-es-orvi.jpg" alt="¿Qué es ORVI?" width="232"
                                height="164">
                        </p>
                        <div class="titulo">
                            ¿Qué es ORVI?
                        </div>
                        <div class="descripcion">
                            Orientamos e informamos sobre los servicios gratuitos ofrecidos.
                        </div>
                    </div>
                    <div class="tarjeta-charla">
                        <p>
                            <span class="etiqueta">Charla</span> <img class="img-fluid"
                                src="/sites/default/files/2025-07/educacion-seguridad-vial.jpg"
                                alt="Educación para la seguridad vial" width="232" height="164">
                        </p>
                        <div class="titulo">
                            Educación para la seguridad vial
                        </div>
                        <div class="descripcion">
                            Ofrecemos conceptos básicos sobre los factores de riesgo que pueden ocasionar un siniestro vial.
                        </div>
                    </div>
                    <div class="tarjeta-charla">
                        <p>
                            <span class="etiqueta">Charla</span> <img class="img-fluid"
                                src="/sites/default/files/2025-07/convivencia-vial.jpg" alt="Convivencia vial"
                                width="232" height="164">
                        </p>
                        <div class="titulo">
                            Convivencia vial
                        </div>
                        <div class="descripcion">
                            Abordamos aspectos generales de movilidad agresiva, su vinculación con las dinámicas del
                            tránsito, los medios de transporte y actores viales.
                        </div>
                    </div>
                    <div class="tarjeta-charla">
                        <p>
                            <span class="etiqueta">Charla</span> <img class="img-fluid"
                                src="/sites/default/files/2025-07/ensenanza-seguridad-vial.jpg" alt="Cultura vial"
                                width="232" height="164">
                        </p>
                        <div class="titulo">
                            Cultura vial para una movilidad segura
                        </div>
                        <div class="descripcion">
                            Reflexionamos sobre las acciones armoniosas, respetuosas y empáticas en la vía.
                        </div>
                    </div>
                </div>
                <button class="carrusel-btn carrusel-btn-next" aria-label="Siguiente" type="button">&#10095;</button>
            </div>
        </div>
    </div>
    <p>
        <!-- footer -->&nbsp;
    </p>
    <div class="row align-items-center mt-5">
        <div class="col-md-6 mb-4 mb-md-0">
            <img class="d-block mx-auto img-fluid" src="/sites/default/files/2025-07/logo-footer.png"
                alt="logo-footer" width="400" height="80">
        </div>
        <div class="col-md-6">
            <h2 class="text-center pt-2">
                <strong>Contacto</strong>
            </h2>
            <hr>
            <div class="pb-4">
                <h5>
                    <strong>Dirección:</strong>
                </h5>
                <p>
                    Centro Comercial Mallplaza NQS - Av Cra 30 # 19 Piso 4
                </p>
                <h5>
                    <strong>Celular y WhatsApp de orientación:</strong>
                </h5>
                <p>
                    305 870 3458
                </p>
                <h5>
                    <strong>Correo electrónico:</strong>
                </h5>
                <p>
                    <a href="orvi@movilidadbogota.gov.co">orvi@movilidadbogota.gov.co</a>
                </p>
                <h5>
                    <strong>Correo solicitudes charlas o talleres de formación:</strong>
                </h5>
                <p>
                    <a href="formacionorvi@movilidadbogota.gov.co">formacionorvi@movilidadbogota.gov.co</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var carrusel = document.getElementById('carruselOferta');
    if (!carrusel) return;

    var btnPrev = carrusel.closest('.carrusel-wrapper').querySelector('.carrusel-btn-prev');
    var btnNext = carrusel.closest('.carrusel-wrapper').querySelector('.carrusel-btn-next');
    var scrollAmount = 250;

    function updateButtons() {
        if (btnPrev) {
            btnPrev.disabled = carrusel.scrollLeft <= 0;
        }
        if (btnNext) {
            btnNext.disabled = carrusel.scrollLeft + carrusel.clientWidth >= carrusel.scrollWidth - 1;
        }
    }

    if (btnPrev) {
        btnPrev.addEventListener('click', function() {
            carrusel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });
    }

    if (btnNext) {
        btnNext.addEventListener('click', function() {
            carrusel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });
    }

    carrusel.addEventListener('scroll', updateButtons);
    window.addEventListener('resize', updateButtons);
    updateButtons();
});
</script>
