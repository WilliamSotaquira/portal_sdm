@extends('layouts.app')
@section('title', 'agremiaciones')

@section('content')

    <style>
        .smd-wrapper {
            display: grid;
            gap: 1.5rem;
            padding: 2rem 0;
            color: #1f2937;
            font-family: 'Montserrat', 'Work Sans', sans-serif;
        }

        .smd-hero {
            background: linear-gradient(135deg, #f7f8f3 0%, #eef2e0 100%);
            border: 1px solid #dfe6cf;
            border-radius: 12px;
            padding: 1.5rem;
        }

        .smd-hero h1 {
            font-size: clamp(1.75rem, 2vw, 2.2rem);
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: #2f3b0c;
        }

        .smd-lead {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 0.5rem;
        }

        .smd-section h2 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #2f3b0c;
        }

        .smd-section p {
            margin-bottom: 0.5rem;
            line-height: 1.6;
        }

        .smd-table-wrapper {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
        }

        .smd-caption {
            padding: 1rem 1.25rem 0.25rem;
            font-weight: 600;
            color: #374151;
        }

        .smd-table {
            width: 100%;
            border-collapse: collapse;
        }

        .smd-table thead th {
            background-color: #4b5b17;
            color: #fff;
            text-align: left;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.85rem 1rem;
        }

        .smd-table tbody tr:nth-child(even) {
            background-color: #f8faf5;
        }

        .smd-table th[scope="row"],
        .smd-table td {
            padding: 0.85rem 1rem;
            font-size: 0.975rem;
            line-height: 1.5;
            vertical-align: top;
            color: #111827;
        }

        .smd-link {
            color: #1b4b84;
            font-weight: 600;
            text-decoration: underline;
            text-decoration-thickness: 2px;
            text-underline-offset: 3px;
        }

        .smd-link:hover {
            color: #0f3c6d;
        }

        .smd-link:focus-visible {
            outline: 3px solid #ffbf47;
            outline-offset: 3px;
        }

        .smd-pill {
            display: inline-block;
            padding: 0.3rem 0.6rem;
            background-color: #f3f4f6;
            border-radius: 999px;
            font-size: 0.9rem;
            color: #4b5563;
        }

        @media (max-width: 640px) {
            .smd-table thead {
                display: none;
            }

            .smd-table tbody tr {
                display: grid;
                gap: 0.25rem;
                padding: 1rem;
                border-bottom: 1px solid #e5e7eb;
            }

            .smd-table th[scope="row"],
            .smd-table td {
                padding: 0;
            }

            .smd-table td::before {
                content: attr(data-label);
                display: block;
                font-weight: 700;
                color: #2f3b0c;
                margin-bottom: 0.2rem;
            }
        }
    </style>
    <div class="container">
        <div class="smd-wrapper">


            <section class="smd-section" aria-labelledby="objetivo-directorio">
                <h2 id="objetivo-directorio">Objetivo del directorio</h2>
                <p>
                    Fortalecer la relación entre la Secretaría Distrital de Movilidad y los diferentes grupos de interés,
                    garantizando transparencia, diálogo y cooperación en el desarrollo de estrategias de movilidad
                    sostenible y segura en la ciudad.
                </p>
            </section>

            <section class="smd-section" aria-labelledby="participacion-ciudadana">
                <h2 id="participacion-ciudadana">Importancia de la participación ciudadana</h2>
                <p>
                    La Secretaría Distrital de Movilidad reconoce que la participación de las agremiaciones y asociaciones
                    es fundamental para diseñar políticas públicas inclusivas y efectivas. A través de este directorio se
                    busca fortalecer la comunicación, la transparencia y la construcción de confianza con la ciudadanía.
                </p>
            </section>

            <section class="smd-section" aria-labelledby="directorio-agremiaciones">
                <div class="smd-table-wrapper">
                    <div class="smd-caption" id="directorio-agremiaciones">
                        Directorio de agremiaciones o asociaciones en las que participa la Secretaría Distrital de
                        Movilidad
                    </div>
                    <div style="overflow-x: auto;">
                        <table class="smd-table" aria-describedby="descripcion-directorio">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        Nombre de la Asociación, Grupo de interés o Agremiación
                                    </th>
                                    <th scope="col">
                                        Contacto / descarga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        SISERVIPUM
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" href="mailto:siservipum@movilidadbogota.gov.co">
                                            siservipum@movilidadbogota.gov.co
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        SINTRAMOV
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" href="mailto:sindicatosintramov@movilidadbogota.gov.co">
                                            sindicatosintramov@movilidadbogota.gov.co
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        ANDETT
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" href="mailto:andettbogota@movilidadbogota.gov.co">
                                            andettbogota@movilidadbogota.gov.co
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Oficina Asesora de Planeación Institucional
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Oficina Asesora de Planeación Institucional"
                                            href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_oficina_asesora_de_planeacion_institucional_202415000160653.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Subdirección de la Bicicleta y el peatón
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Subdirección de la Bicicleta y el peatón"
                                            href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subdireccion_de_la_bicicleta_y_el_peaton_202422300159453.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Subdirección de infraestructura
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Subdirección de infraestructura"
                                            href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-subdireccion_de_infraestructura_202422400174143.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Oficina de Control Disciplinario Interno
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Oficina de Control Disciplinario Interno"
                                            href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_oficina_de_control_disciplinario_interno_202416000155393.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Subdirección de Planes de Manejo de Tránsito
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Subdirección de Planes de Manejo de Tránsito"
                                            href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subdireccion_de_planes_de_manejo_de_transito_202431200158033.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Subdirección Técnica de Semaforización
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Subdirección Técnica de Semaforización"
                                            href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subdireccion_tecnica_de_semaforizacion_202432200161863.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Subsecretaría de Gestión Jurídica
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Subsecretaría de Gestión Jurídica"
                                            href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subsecretaria_de_gestion_juridica_202450000161573.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Dirección de Gestión de Cobro
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Dirección de Gestión de Cobro"
                                            href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_direccion_de_gestion_de_cobro_202454000158453.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Subdirección de Contravenciones
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Subdirección de Contravenciones"
                                            href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subdireccion_de_contravenciones_202442100167713.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Subsecretaría de Gestión Corporativa
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Subsecretaría de Gestión Corporativa"
                                            href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subsecretaria_de_gestion_corporativa_202460000159063.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Subdirección Administrativa
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Subdirección Administrativa"
                                            href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subdireccion_administrativa_202461200165303.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Dirección Técnica de Normatividad y Conceptos
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Dirección Técnica de Normatividad y Conceptos"
                                            href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_direccion_tecnica_de_normatividad_y_conceptos_202452000156333.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        OGS
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <span class="smd-pill" aria-label="Información no disponible">
                                            Respuesta al radicado OGS-202414000154753
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" data-label="Nombre">
                                        Dirección de Ingeniería de Tránsito
                                    </th>
                                    <td data-label="Contacto o descarga">
                                        <a class="smd-link" aria-label="Descargar respuesta en PDF de la Dirección de Ingeniería de Tránsito"
                                            href="[custom:old_url]/sites/default/files/Paginas/21-10-2024/respuestas_directorio_de_agremiaciones_direccion_tecnica_de_ingenieria.pdf">
                                            Descargar respuesta (PDF)
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
