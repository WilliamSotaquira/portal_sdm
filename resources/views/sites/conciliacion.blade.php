@extends('layouts.app')
@section('title', 'conciliacion')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet"><style>
        #block-custom-barrio-content .content #conciliacion,
        #block-custom-barrio-content .content #conciliacion * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #block-custom-barrio-content .content #conciliacion {
            font-family: 'Inter', sans-serif;
            color: #4C531E;
            overflow-x: hidden;
            position: relative;
            isolation: isolate;
        }
        /* City Background World */
        #block-custom-barrio-content .content #conciliacion .city-world {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }
        /* Parallax Layers */
        #block-custom-barrio-content .content #conciliacion .parallax-layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/sites/default/files/2026-02-03/download%20%2839%29.png');
            background-size: contain;
            background-position: center 0px;
            background-repeat: no-repeat;
            will-change: background-position;
        }
        /* Sky Layer (slowest - mountains in background) */
        #block-custom-barrio-content .content #conciliacion .layer-sky {
            background-position: center 0%;
            filter: blur(2px) brightness(1.1);
            opacity: 0.9;
        }
        /* Mountains Layer */
        #block-custom-barrio-content .content #conciliacion .layer-mountains {
            background-position: center 10%;
            filter: blur(1px) brightness(1.05);
            opacity: 0.95;
        }
        /* Buildings Background Layer */
        #block-custom-barrio-content .content #conciliacion .layer-buildings-back {
            background-position: center 30%;
            opacity: 1;
        }
        /* Buildings Front Layer */
        #block-custom-barrio-content .content #conciliacion .layer-buildings-front {
            background-position: center 45%;
            opacity: 1;
        }
        /* Street Layer (fastest - foreground) */
        #block-custom-barrio-content .content #conciliacion .layer-street {
            background-position: center 65%;
            opacity: 1;
        }
        /* Gradient Overlay for depth */
        #block-custom-barrio-content .content #conciliacion .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom,
                    rgba(135, 206, 235, 0.05) 0%,
                    rgba(190, 208, 0, 0.03) 30%,
                    rgba(243, 246, 219, 0.02) 60%,
                    rgba(231, 236, 177, 0.03) 80%,
                    rgba(218, 226, 131, 0.05) 100%);
            pointer-events: none;
            z-index: 10;
        }
        /* Content Container */
        #block-custom-barrio-content .content #conciliacion .content-wrapper {
            position: relative;
            z-index: 1;
        }
        #block-custom-barrio-content .content #conciliacion .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }
        #block-custom-barrio-content .content > h1.title,
        #block-custom-barrio-content .content > h1.title .field--name-title {
            display: none;
        }
        #block-custom-barrio-content .content .field--name-title.field--type-string {
            display: none;
        }
        /* Hero Section */
        #block-custom-barrio-content .content #conciliacion .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding:0 20px 100px 20px;
        }
        #block-custom-barrio-content .content #conciliacion .hero-content {
            background: rgba(255, 255, 255, 0.95);
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(76, 83, 30, 0.15);
            backdrop-filter: blur(10px);
        }
        #block-custom-barrio-content .content #conciliacion .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            color: #4C531E;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        #block-custom-barrio-content .content #conciliacion .hero p {
            font-size: 1.3rem;
            color: #282828;
            margin-bottom: 40px;
            line-height: 1.6;
        }
        #block-custom-barrio-content .content #conciliacion .cta-button {
            display: inline-block;
            background: #BED000;
            color: #4C531E;
            padding: 18px 50px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(190, 208, 0, 0.3);
        }
        #block-custom-barrio-content .content #conciliacion .cta-button:hover {
            background: #879225;
            color: #F3F6DB;
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(135, 146, 37, 0.4);
        }
        #block-custom-barrio-content .content #conciliacion .cta-button:focus-visible,
        #block-custom-barrio-content .content #conciliacion .accordion-button:focus-visible,
        #block-custom-barrio-content .content #conciliacion a:focus-visible {
            outline: 3px solid #4C531E;
            outline-offset: 3px;
        }
        #block-custom-barrio-content .content #conciliacion .hero-image {
            margin-top: 50px;
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 15px 50px rgba(76, 83, 30, 0.2);
        }
        /* Section Styles */
        #block-custom-barrio-content .content #conciliacion section {
            padding: 0px 20px 100px 20px;
            position: relative;
        }
        #block-custom-barrio-content .content #conciliacion .section-content {
            background: rgba(255, 255, 255, 0.95);
            padding: 60px 50px;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(76, 83, 30, 0.1);
            backdrop-filter: blur(10px);
        }
        #block-custom-barrio-content .content #conciliacion h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #4C531E;
            margin-bottom: 30px;
            text-align: center;
        }
        #block-custom-barrio-content .content #conciliacion h3 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #879225;
            margin-bottom: 20px;
        }
        #block-custom-barrio-content .content #conciliacion p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #4C531E;
            margin-bottom: 20px;
        }
        /* Benefits Grid */
        #block-custom-barrio-content .content #conciliacion .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 16px;
            margin-top: 50px;
        }
        #block-custom-barrio-content .content #conciliacion .benefit-card {
            background: #F3F6DB;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
        }
        #block-custom-barrio-content .content #conciliacion .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(190, 208, 0, 0.3);
        }
        #block-custom-barrio-content .content #conciliacion .benefit-icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        #block-custom-barrio-content .content #conciliacion .benefit-card h4 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #4C531E;
            margin-bottom: 15px;
        }
        #block-custom-barrio-content .content #conciliacion .benefit-card p {
            font-size: 1rem;
            color: #879225;
            margin: 0;
        }
        /* Route Section */
        #block-custom-barrio-content .content #conciliacion .route-image {
            max-width: 100%;
            margin: 40px 0;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(76, 83, 30, 0.15);
        }
        #block-custom-barrio-content .content #conciliacion .route-steps {
            display: grid;
            gap: 20px;
            margin-top: 40px;
        }
        #block-custom-barrio-content .content #conciliacion .route-step {
            background: #F3F6DB;
            padding: 25px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 20px;
        }
        #block-custom-barrio-content .content #conciliacion .step-number {
            background: #BED000;
            color: #4C531E;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.5rem;
            flex-shrink: 0;
        }
        #block-custom-barrio-content .content #conciliacion .step-content h4 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #4C531E;
            margin-bottom: 5px;
        }
        #block-custom-barrio-content .content #conciliacion .step-content p {
            font-size: 1rem;
            color: #879225;
            margin: 0;
        }
        /* Documentation Accordion */
        #block-custom-barrio-content .content #conciliacion .accordion {
            margin-top: 40px;
        }
        #block-custom-barrio-content .content #conciliacion .accordion-item {
            background: #F3F6DB;
            border-radius: 12px;
            margin-bottom: 15px;
            overflow: hidden;
        }
        #block-custom-barrio-content .content #conciliacion .accordion-header {
            background: #E7ECB1;
            padding: 20px 25px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }
        #block-custom-barrio-content .content #conciliacion .accordion-header:hover {
            background: #DAE283;
        }
        #block-custom-barrio-content .content #conciliacion .button-accordion-govco.collapsed,
        #block-custom-barrio-content .content #conciliacion .accordion-button.collapsed {
            background: #E7ECB1;
        }
        #block-custom-barrio-content .content #conciliacion .accordion-body {
            padding: 25px;
        }
        #block-custom-barrio-content .content #conciliacion .accordion-body ul {
            list-style: none;
            padding: 0;
        }
        #block-custom-barrio-content .content #conciliacion .accordion-body li {
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
            color: #4C531E;
        }
        #block-custom-barrio-content .content #conciliacion .accordion-body li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #BED000;
            font-weight: 700;
        }
        /* Footer */
        #block-custom-barrio-content .content #conciliacion footer {
            background: rgba(76, 83, 30, 0.95);
            color: #F3F6DB;
            padding: 60px 20px 30px;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        #block-custom-barrio-content .content #conciliacion footer h3 {
            color: #BED000;
            margin-bottom: 20px;
        }
        #block-custom-barrio-content .content #conciliacion footer p {
            color: #E7ECB1;
            margin-bottom: 15px;
        }
        #block-custom-barrio-content .content #conciliacion footer a {
            color: #BED000;
            text-decoration: none;
        }
        #block-custom-barrio-content .content #conciliacion footer a:hover {
            color: #DAE283;
        }
        /* Responsive */
        @media (max-width: 768px) {
            #block-custom-barrio-content .content #conciliacion {
                overflow-x: hidden;
            }
            #block-custom-barrio-content .content #conciliacion .hero h1 {
                font-size: 2.5rem;
            }
            #block-custom-barrio-content .content #conciliacion .hero p {
                font-size: 1.1rem;
                color: #282828;
            }
            #block-custom-barrio-content .content #conciliacion h2 {
                font-size: 2rem;
            }
            #block-custom-barrio-content .content #conciliacion .section-content {
                padding: 32px 20px;
            }
            #block-custom-barrio-content .content #conciliacion .benefits-grid {
                grid-template-columns: 1fr;
            }
            #block-custom-barrio-content .content #conciliacion .hero {
                padding: 40px 16px 60px 16px;
            }
            #block-custom-barrio-content .content #conciliacion section {
                padding: 0 16px 60px 16px;
            }
            #block-custom-barrio-content .content #conciliacion .hero-content {
                padding: 36px 22px;
            }
            #block-custom-barrio-content .content #conciliacion .hero-image {
                margin-top: 24px;
            }
            #block-custom-barrio-content .content #conciliacion .cta-button {
                padding: 14px 28px;
                font-size: 1rem;
            }
            #block-custom-barrio-content .content #conciliacion .route-step {
                flex-direction: column;
                align-items: flex-start;
            }
            #block-custom-barrio-content .content #conciliacion .step-number {
                width: 42px;
                height: 42px;
                font-size: 1.2rem;
            }
            #block-custom-barrio-content .content #conciliacion .accordion-header {
                padding: 16px 18px;
            }
            #block-custom-barrio-content .content #conciliacion .accordion-body {
                padding: 18px;
            }
            #block-custom-barrio-content .content #conciliacion .container {
                padding: 0 10px;
            }
        }

        @media (max-width: 480px) {
            #block-custom-barrio-content .content #conciliacion .hero h1 {
                font-size: 2rem;
            }
            #block-custom-barrio-content .content #conciliacion h2 {
                font-size: 1.6rem;
            }
            #block-custom-barrio-content .content #conciliacion .section-content {
                padding: 26px 16px;
            }
        }
        @media (prefers-reduced-motion: reduce) {
            #block-custom-barrio-content .content #conciliacion * {
                scroll-behavior: auto;
            }
            #block-custom-barrio-content .content #conciliacion .parallax-layer {
                will-change: auto;
            }
        }
    </style>
<div class="wrapper" id="conciliacion">
    <!-- City Background World -->
    <div class="city-world" id="cityWorld">
        <div class="parallax-layer" data-speed="0.2">
            &nbsp;
        </div>
        <div class="gradient-overlay">
            &nbsp;
        </div>
    </div>
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                             <p>
                        El centro ofrece a todas las personas de los estratos 1, 2 y 3, involucradas en un siniestro de tránsito en Bogotá, un espacio de diálogo orientado a la construcción de acuerdos mutuos para solucionar conflictos relacionados con daños materiales o lesiones personales, siempre que el valor reclamado no supere los 150 (SMLMV).
                    </p>
                    <p>
                        <a class="cta-button" href="https://forms.gle/CrX9Cpoty4AU6dqa8" target="_blank">Diligenciar formulario de consentimiento</a><img class="hero-image" src="/sites/default/files/2026-02-03/imagen%20inicial.png" alt="Centro de conciliación" width="1344" height="768">
                    </p>
                </div>
            </div>
        </section>
        <!-- What is Section -->
        <section id="que-es">
            <div class="container">
                <div class="section-content">
                    <h2>
                        Beneficios
                    </h2>
                    <div class="benefits-grid">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                💰
                            </div>
                            <h4>
                                Gratuito
                            </h4>
                            <p>
                                Sin costos para las partes involucradas
                            </p>
                        </div>
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                ⚡
                            </div>
                            <h4>
                                Ágil
                            </h4>
                            <p>
                                Solución rápida y efectiva de conflictos
                            </p>
                        </div>
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                ⚖️
                            </div>
                            <h4>
                                Seguridad jurídica
                            </h4>
                            <p>
                                Acuerdos con validez legal
                            </p>
                        </div>
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                🏢
                            </div>
                            <h4>
                                Atención presencial y virtual
                            </h4>
                            <p>
                                Flexibilidad y facilidad en el acceso al servicio
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Route Section -->
        <section id="ruta">
            <div class="container">
                <div class="section-content">
                    <h2>
                        Ruta de atención
                    </h2>
                    <img class="route-image" src="/sites/default/files/2026-02-03/imagen%20ruta.001.png" alt="Ruta de Atención" width="1248" height="832">
                    <div class="route-steps">
                        <div class="route-step">
                            <div class="step-number">
                                1
                            </div>
                            <div class="step-content">
                                <h4>
                                    Diligenciar el formato de solicitud de conciliación
                                </h4>
                                <p>
                                    Descargue y diligencie el formato de solicitud de conciliación. <a href="/sites/default/files/2026-02-16/formato%20de%20solicitud%20conciliacion%20final.pdf" target="_blank">Descargar aquí</a>
                                </p>
                            </div>
                        </div>
                        <div class="route-step">
                            <div class="step-number">
                                2
                            </div>
                            <div class="step-content">
                                <h4>
                                    Diligenciar formulario de consentimiento
                                </h4>
                                <p>
                                    Diligencie el formulario de consentimiento de ingreso al Centro de conciliación de la Secretaría Distrital de Movilidad y adjunte la documentación requerida en el mismo. <a href="https://forms.gle/CrX9Cpoty4AU6dqa8" target="_blank">Diligenciar aquí</a>
                                </p>
                            </div>
                        </div>
                        <div class="route-step">
                            <div class="step-number">
                                3
                            </div>
                            <div class="step-content">
                                <h4>
                                    Verificación de solicitudes y respuesta del Centro de conciliación
                                </h4>
                                <p>
                                    Una vez verificada la información suministrada, el Centro de conciliación de la Secretaría Distrital de Movilidad dará respuesta a su solicitud a través del correo electrónico. En caso de aprobarse la solicitud, se fijará fecha y hora de la audiencia de conciliación.
                                </p>
                            </div>
                        </div>
                        <div class="route-step">
                            <div class="step-number">
                                4
                            </div>
                            <div class="step-content">
                                <h4>
                                    Desarrollo de la Conciliación
                                </h4>
                                <p>
                                    En la fecha y hora programadas se realizará la audiencia de conciliación.
                                </p>
                            </div>
                        </div>
                        <div class="route-step">
                            <div class="step-number">
                                5
                            </div>
                            <div class="step-content">
                                <h4>
                                    Finalización de la audiencia
                                </h4>
                                <p>
                                    Levantamiento del acta correspondiente al caso.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Documentation Section -->
        <section id="documentacion">
            <div class="container">
                <div class="section-content">
                    <h2>
                        Documentación requerida
                    </h2>
                    <p>
                        Para iniciar el proceso de conciliación, es necesario contar con la siguiente documentación, de acuerdo con cada caso:
                    </p>
                    <div class="accordion" data-accordion-id="eeb30b55ea35893ba770614c23d0573b4">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">📄 Documentos generales</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>Información básica necesaria para iniciar la solicitud de conciliación:</p>
                                    <ul>
                                        <li>Copia de la cédula de ciudadanía</li>
                                        <li>Formato solicitud conciliación</li>
                                        <li>Recibo de servicio público del domicilio del solicitante (para verificar
                                            estrato)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">📁 Documentos opcionales y/o adicionales</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>Soportes que pueden complementar el caso y facilitar el proceso de conciliación:</p>
                                    <ul>
                                        <li>IPAT (Informe Policial)</li>
                                        <li>Fotos o vídeos (En caso de choque simple)</li>
                                        <li>Cotizaciones de reparación de vehículos</li>
                                        <li>Facturas de gastos relacionados</li>
                                        <li>Otros documentos que soporten reclamaciones económicas</li>
                                        <li>Historia clínica (si aplica)</li>
                                        <li>Licencia de tránsito</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a class="accordion-button collapsed" href="#">⚠️ Tener en Cuenta</a>
                            </div>
                            <div class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>Recomendaciones importantes para presentar la documentación de forma correcta y
                                        evitar retrasos en el trámite.</p>
                                    <ul>
                                        <li>Para personas jurídicas: anexar copia del Certificado de Existencia y
                                            Representación Legal (vigencia no mayor a 30 días) y poder otorgado por
                                            el representante legal si este no es el convocante.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Contact Section -->
        <section id="contacto">
            <div class="container">
                <div class="section-content">
                    <h2>
                        Contacto
                    </h2>
                    <p>
                        <strong>Dirección:</strong> Calle 13 No. 37 - 35 primer piso
                    </p>
                    <p>
                        <strong>Teléfono:</strong> (601) 3649400 Opción 2
                    </p>
                    <p>
                        <strong>Correo:</strong> conciliacionsdm@movilidadbogota.gov.co
                    </p>
                    <p>
                        <strong>Horario:</strong> Lunes a Viernes de 8 A.M. - 4 P.M.
                    </p>
                    <p>
                        <br>
                        <a class="cta-button" href="https://docs.google.com/forms/d/1AGliBULkPugMrha6Y_bR24wZP1_xH2Z1Px9zckKVEiI/edit?ts=695fc1ce&amp;pli=1">Solicite su cita de conciliación</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
    <script>
                // Parallax Effect for Layers
                const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
                if (!prefersReducedMotion.matches) {
                    window.addEventListener('scroll', () => {
                        const scrolled = window.pageYOffset;
                        const parallaxLayers = document.querySelectorAll('#conciliacion .parallax-layer');
                        parallaxLayers.forEach(layer => {
                            const speed = parseFloat(layer.getAttribute('data-speed')) || 0.5;
                            const yPos = Math.round(scrolled * speed);
                            layer.style.backgroundPosition = `center ${yPos}px`;
                        });
                    });
                }
                // Smooth Scroll
            document.querySelectorAll('#conciliacion a[href^="#"]:not(.accordion-button)').forEach(anchor => {
                    anchor.addEventListener('click', function(e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    });
                });
            </script>
</div>

@endsection
