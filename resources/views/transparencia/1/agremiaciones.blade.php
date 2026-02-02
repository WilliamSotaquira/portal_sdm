@extends('layouts.app')
@section('title', 'agremiaciones')

@section('content')
    <style>
        .smd-titulo-tabla {
            background-color: #8a9b3f;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            color: white;
            padding: 10px 15px;
            font-size: 20px;
            font-weight: 600;
            font-family: "Montserrat-Regular", sans-serif !important;
        }

        table th {
            font-family: "WorkSans-Medium", sans-serif !important;
            font-size: 18px !important;
            font-weight: 500 !important;
        }

        table tbody td {
            font-family: "WorkSans-Regular", sans-serif !important;
            font-size: 16px !important;
            font-weight: 400 !important;
        }
    </style>
    <div class="container">
        <div>
            <p data-start="752" data-end="1135">
                El <strong data-start="755" data-end="846">Directorio de agremiaciones, asociaciones y grupos de interés –
                    Secretaría de Movilidad</strong> reúne información sobre los diferentes actores colectivos del sector
                movilidad en Bogotá. Este espacio facilita el acceso a datos de contacto, objetivos y participación de
                organizaciones que inciden en la construcción de políticas y acciones en materia de transporte y movilidad
                urbana.
            </p>
            <h2>
                Objetivo del directorio
            </h2>
            <p data-start="1167" data-end="1430">
                El propósito del directorio es fortalecer la relación entre la Secretaría Distrital de Movilidad y los
                diferentes grupos de interés, garantizando transparencia, diálogo y cooperación en el desarrollo de
                estrategias de movilidad sostenible y segura en la ciudad.
            </p>
            <h2>
                Importancia de la participación ciudadana
            </h2>
            <p data-start="2015" data-end="2404">
                La Secretaría Distrital de Movilidad reconoce que la participación de las agremiaciones y asociaciones es
                fundamental para diseñar políticas públicas inclusivas y efectivas. A través de este <strong
                    data-start="2206" data-end="2297">directorio de agremiaciones, asociaciones y grupos de interés –
                    Secretaría de Movilidad</strong>, se busca fortalecer la comunicación, la transparencia y la
                construcción de confianza con la ciudadanía.
            </p>
            <p data-start="2406" data-end="2537">
                ???? Consulte aquí el listado completo de agremiaciones, asociaciones y grupos de interés vinculados al
                sector movilidad en Bogotá.
            </p>
            <div class="smd-titulo-tabla"
                style="background-color:#8a9b3f;border-top-left-radius:4px;border-top-right-radius:4px;color:white;font-family:&apos;Montserrat-Regular&apos;, sans-serif !important;font-size:20px;padding:10px 15px;">
                <strong>Directorio de agremiaciones o asociaciones en las que participe</strong>
            </div>
            <div style="overflow-x:auto;">
                <table class="table mt-0">
                    <thead>
                        <tr>
                            <th class="text-dark" style="padding-left:6px;">
                                Nombre de la Asociación, Grupos de interés, o Agremiación
                            </th>
                            <th class="text-dark">
                                Correo electrónico
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                SISERVIPUM
                            </td>
                            <td>
                                <a href="mailto:siservipum@movilidadbogota.gov.co">siservipum@movilidadbogota.gov.co</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                SINTRAMOV
                            </td>
                            <td>
                                <a
                                    href="mailto:sindicatosintramov@movilidadbogota.gov.co">sindicatosintramov@movilidadbogota.gov.co</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                ANDETT
                            </td>
                            <td>
                                <a href="mailto:andettbogota@movilidadbogota.gov.co">andettbogota@movilidadbogota.gov.co</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Oficina Asesora de Planeación Institucional
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_oficina_asesora_de_planeacion_institucional_202415000160653.pdf">Oficina
                                    Asesora de Planeación Institucional&nbsp;</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Subdirección de la Bicicleta y el peatón
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subdireccion_de_la_bicicleta_y_el_peaton_202422300159453.pdf">Subdirección
                                    de la Bicicleta y el peatón</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Subdirección de infraestructura
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-subdireccion_de_infraestructura_202422400174143.pdf">Subdirección
                                    de infraestructura</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Oficina de Control Disciplinario Interno
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_oficina_de_control_disciplinario_interno_202416000155393.pdf">Oficina
                                    de Control Disciplinario Interno&nbsp;</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Subdirección de Planes de Manejo de Tránsito
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subdireccion_de_planes_de_manejo_de_transito_202431200158033.pdf">Subdirección
                                    de Planes de Manejo de Tránsito</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Subdirección Técnica de Semaforización
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subdireccion_tecnica_de_semaforizacion_202432200161863.pdf">Subdirección
                                    Técnica de Semaforización</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Subsecretaría de Gestión Jurídica
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subsecretaria_de_gestion_juridica_202450000161573.pdf">Subsecretaría
                                    de Gestión Jurídica</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Dirección de Gestión de Cobro
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_direccion_de_gestion_de_cobro_202454000158453.pdf">Dirección
                                    de Gestión de Cobro</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Subdirección de Contravenciones
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subdireccion_de_contravenciones_202442100167713.pdf">Subdirección
                                    de Contravenciones</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Subsecretaría de Gestión Corporativa
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subsecretaria_de_gestion_corporativa_202460000159063.pdf">Subsecretaría
                                    de Gestión Corporativa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Subdirección Administrativa
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_subdireccion_administrativa_202461200165303.pdf">Subdirección
                                    Administrativa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Dirección Técnica de Normatividad y Conceptos
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/16-09-2024/directorio_de_agremiaciones_asociaciones_y_otros_grupos_de_interes_-_direccion_tecnica_de_normatividad_y_conceptos_202452000156333.pdf">Dirección
                                    Técnica de Normatividad y Conceptos&nbsp;</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                OGS
                            </td>
                            <td>
                                OGS
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Dirección de Ingeniería de Tránsito
                            </td>
                            <td>
                                <a
                                    href="[custom:old_url]/sites/default/files/Paginas/21-10-2024/respuestas_directorio_de_agremiaciones_direccion_tecnica_de_ingenieria.pdf">Dirección
                                    de Ingeniería de Tránsito</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
