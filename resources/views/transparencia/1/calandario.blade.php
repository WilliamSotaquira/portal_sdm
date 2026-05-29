@extends('layouts.app')
@section('title', 'Transparencia - Calandario grupo 1')

@section('content')
    <section class="container py-4 py-md-5">
        <style>
            .agenda-month {
                border: 1px solid #d7deec;
                border-radius: 0.75rem;
                background: #fff;
                margin-bottom: 1rem;
            }

            .agenda-month-title {
                background: #003366;
                color: #fff;
                padding: 0.85rem 1rem;
                font-weight: 700;
                border-radius: 0.75rem 0.75rem 0 0;
            }

            .agenda-item {
                padding: 0.9rem 1rem;
                border-top: 1px solid #eef2f7;
            }

            .agenda-item:first-child {
                border-top: 0;
            }

            .agenda-item-grid {
                display: grid;
                grid-template-columns: minmax(180px, 220px) 1fr;
                gap: 1rem;
                align-items: start;
            }

            .agenda-photo-slot {
                width: 100%;
                aspect-ratio: 4 / 3;
                border: 2px dashed #c7d2e0;
                border-radius: 0.5rem;
                background: #f8fafc;
                color: #64748b;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                font-size: 0.85rem;
                padding: 0.5rem;
                overflow: hidden;
            }

            .agenda-photo-slot img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 0.35rem;
            }

            .agenda-meta {
                display: flex;
                gap: 0.5rem;
                align-items: center;
                flex-wrap: wrap;
                margin-bottom: 0.35rem;
            }

            .agenda-badge {
                display: inline-block;
                background: #e6f0ff;
                color: #003366;
                border-radius: 999px;
                padding: 0.1rem 0.55rem;
                font-size: 0.75rem;
                font-weight: 600;
            }

            @media (max-width: 767.98px) {
                .agenda-item-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>

        <div id="agenda-root"></div>

        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h2 class="h5 mb-3">Accesos del grupo 1</h2>
                <ul class="mb-0">
                    <li><a href="/transparencia/1/agremiaciones">Directorio de agremiaciones</a></li>
                    <li><a href="/transparencia">Volver al indice de transparencia</a></li>
                </ul>
            </div>
        </div>

        <script>
            const agendaMeses = [{
                    "mes": "enero",
                    "mes_label": "Enero",
                    "eventos": [{
                            "titulo": "Día de la Movilidad Sostenible",
                            "descripcion": "El primer jueves hábil de cada mes se conmemora el Día de la Movilidad Sostenible, una jornada en la que la Secretaría de Movilidad, en articulación con distintas entidades del Distrito, promueve el uso de medios de transporte sostenibles como la bicicleta, la patineta eléctrica, la caminata y el transporte público.",
                            "enlace": "/sites/default/files/2026-03-05/enero1.jpg",
                            "foto": "Foto 37"
                        },
                        {
                            "titulo": "Tintatón",
                            "descripcion": "Acción pedagógica en vía que promueve el diálogo entre la entidad, la Policía y la comunidad, para reflexionar de manera conjunta sobre los derechos y deberes en la vía y la importancia del rol que cumple cada usuario en la movilidad de Bogota.",
                            "enlace": "/sites/default/files/2026-03-05/enero2.jpg",
                            "foto": "Foto 1451"
                        },
                        {
                            "titulo": "Curso teórico-práctico para motociclistas (Sábado 24 de enero)",
                            "descripcion": "Un espacio pedagógico dirigido a actores viales vulnerables, que aborda temas clave como la normativa, el comportamiento y las habilidades necesarias para una conducción segura. El curso incorpora enfoques diferenciales de formación para conductores novatos, experimentados y mujeres motociclistas.",
                            "enlace": "/sites/default/files/2026-03-05/enero3.jpg",
                            "foto": "Foto 5207"
                        }
                    ]
                },
                {
                    "mes": "febrero",
                    "mes_label": "Febrero",
                    "eventos": [{
                            "titulo": "Día de la Movilidad Sostenible",
                            "descripcion": "El primer jueves hábil de cada mes se conmemora el Día de la Movilidad Sostenible, una jornada en la que la Secretaría de Movilidad, en articulación con distintas entidades del Distrito, promueve el uso de medios de transporte sostenibles como la bicicleta, la patineta eléctrica, la caminata y el transporte público.",
                            "enlace": "/sites/default/files/2026-03-05/febrero1.jpg",
                            "foto": "Foto 13"
                        },
                        {
                            "titulo": "Tintatón",
                            "descripcion": "Acción pedagógica en vía que promueve el diálogo entre la entidad, la Policía y la comunidad, para reflexionar de manera conjunta sobre los derechos y deberes en la vía y la importancia del rol que cumple cada usuario en la movilidad de Bogota.",
                            "enlace": "/sites/default/files/2026-03-05/febrero2.jpg",
                            "foto": "Foto 0289"
                        },
                        {
                            "titulo": "Inicio de operación del Programa Niñas y Niños Primero",
                            "descripcion": "Desde el 2 de febrero inician clases los colegios distritales. Por esta razón, los proyectos Al Colegio en Bici, Ciempiés, Bici Parceros, Ruta Pila y Carril Escolar estarán vigentes desde esa fecha, operando en beneficio de niñas, niños y adolescentes.",
                            "enlace": "/sites/default/files/2026-03-05/febrero3.jpg",
                            "foto": "Foto 32"
                        },
                        {
                            "titulo": "Día sin Carro y sin Moto (Jueves 5 de febrero)",
                            "descripcion": "El Día sin Carro y sin Moto en Bogotá promueve la movilidad activa y una reflexión sobre el uso del vehículo particular. Durante la jornada se garantiza una oferta adecuada de transporte y operativos en vía, con el objetivo de fomentar una movilidad segura y sostenible.",
                            "enlace": "/sites/default/files/2026-03-05/febrero4.jpg",
                            "foto": "Foto 5"
                        },
                        {
                            "titulo": "Curso teórico-práctico para motociclistas (Sábado 21 de febrero)",
                            "descripcion": "Un espacio pedagógico dirigido a actores viales vulnerables, que aborda temas clave como la normativa, el comportamiento y las habilidades necesarias para una conducción segura. El curso incorpora enfoques diferenciales de formación para conductores novatos, experimentados y mujeres motociclistas.",
                            "enlace": "/sites/default/files/2026-03-05/febrero5.jpg",
                            "foto": "Foto 4130"
                        },
                        {
                            "titulo": "Rendición de cuentas Sector Movilidad 2025",
                            "descripcion": "El Sector Movilidad de Bogotá rinde cuentas sobre los principales proyectos y avances en materia de movilidad, infraestructura y sostenibilidad durante 2025. La gestión articulada de las entidades del sector permitió consolidar avances significativos en la transformación de la infraestructura vial y del sistema de transporte, garantizando una movilidad más segura, eficiente y sostenible para la ciudadanía.",
                            "enlace": "/sites/default/files/2026-03-05/febrero6.jpg",
                            "foto": "Foto 1172"
                        }
                    ]
                },
                {
                    "mes": "marzo",
                    "mes_label": "Marzo",
                    "eventos": [{
                            "titulo": "Tintatón",
                            "descripcion": "Acción pedagógica en vía que promueve el diálogo entre la entidad, la Policía y la comunidad, para reflexionar de manera conjunta sobre los derechos y deberes en la vía y la importancia del rol que cumple cada usuario en la movilidad de Bogota.",
                            "enlace": "/sites/default/files/2026-03-05/marzo1.jpg",
                            "foto": "Foto 0388"
                        },
                        {
                            "titulo": "Día de la Movilidad Sostenible",
                            "descripcion": "El primer jueves hábil de cada mes se conmemora el Día de la Movilidad Sostenible, una jornada en la que la Secretaría de Movilidad, en articulación con distintas entidades del Distrito, promueve el uso de medios de transporte sostenibles como la bicicleta, la patineta eléctrica, la caminata y el transporte público.",
                            "enlace": "/sites/default/files/2026-03-05/marzo2.jpg",
                            "foto": "Foto 23"
                        },
                        {
                            "titulo": "Curso teórico-práctico para motociclistas (Sábado 7 de marzo)",
                            "descripcion": "Un espacio pedagógico dirigido a actores viales vulnerables, que aborda temas clave como la normativa, el comportamiento y las habilidades necesarias para una conducción segura. El curso incorpora enfoques diferenciales de formación para conductores novatos, experimentados y mujeres motociclistas.",
                            "enlace": "/sites/default/files/2026-03-05/marzo3.jpg",
                            "foto": "Foto 1237"
                        }
                    ]
                },
                {
                    "mes": "abril",
                    "mes_label": "Abril",
                    "eventos": [{
                            "titulo": "Tintatón",
                            "descripcion": "Acción pedagógica en vía que promueve el diálogo entre la entidad, la Policía y la comunidad, para reflexionar de manera conjunta sobre los derechos y deberes en la vía y la importancia del rol que cumple cada usuario en la movilidad de Bogota.",
                            "enlace": "/sites/default/files/2026-03-05/abril1.jpg",
                            "foto": "Foto 6251"
                        },
                        {
                            "titulo": "Día de la Movilidad Sostenible",
                            "descripcion": "El primer jueves hábil de cada mes se conmemora el Día de la Movilidad Sostenible, una jornada en la que la Secretaría de Movilidad, en articulación con distintas entidades del Distrito, promueve el uso de medios de transporte sostenibles como la bicicleta, la patineta eléctrica, la caminata y el transporte público.",
                            "enlace": "/sites/default/files/2026-03-05/abril2.jpg",
                            "foto": "Foto 45"
                        },
                        {
                            "titulo": "Lanzamiento del Anuario de Siniestralidad Vial 2025",
                            "descripcion": "Bogotá presenta el Anuario de Siniestralidad Vial, un documento que pone a disposición de la ciudadanía una radiografía de la ciudad en materia de siniestralidad en las vías, a partir de los principales indicadores de seguridad vial reportados por la Policía de Tránsito y el análisis de las tendencias acumuladas.",
                            "enlace": "/sites/default/files/2026-03-05/abril3.jpg",
                            "foto": "Foto 55"
                        },
                        {
                            "titulo": "Curso teórico-práctico para motociclistas (Sábado 18 de abril)",
                            "descripcion": "Un espacio pedagógico dirigido a actores viales vulnerables, que aborda temas clave como la normativa, el comportamiento y las habilidades necesarias para una conducción segura. El curso incorpora enfoques diferenciales de formación para conductores novatos, experimentados y mujeres motociclistas.",
                            "enlace": "/sites/default/files/2026-03-05/abril4.jpg",
                            "foto": "Foto 1295"
                        },
                        {
                            "titulo": "Día del Agente de Tránsito (19 de abril)",
                            "descripcion": "Esta fecha reconoce la labor de hombres y mujeres que, con compromiso y vocación, están en las calles de la ciudad cuidando vidas y recuperando el espacio público. Se conmemora en recuerdo del 19 de abril de 1970, cuando se creó el primer cuerpo de agentes de tránsito de Colombia.",
                            "enlace": "/sites/default/files/2026-03-05/abril5.jpg",
                            "foto": "Foto 44"
                        }
                    ]
                },
                {
                    "mes": "mayo",
                    "mes_label": "Mayo",
                    "eventos": [{
                            "titulo": "Tintatón",
                            "descripcion": "Acción pedagógica en vía que promueve el diálogo entre la entidad, la Policía y la comunidad, para reflexionar de manera conjunta sobre los derechos y deberes en la vía y la importancia del rol que cumple cada usuario en la movilidad de Bogota.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/25_mayo_tintaton_foto%200325.jpg",
                            "foto": "Foto 0325"
                        },
                        {
                            "titulo": "Día de la Movilidad Sostenible",
                            "descripcion": "El primer jueves hábil de cada mes se conmemora el Día de la Movilidad Sostenible, una jornada en la que la Secretaría de Movilidad, en articulación con distintas entidades del Distrito, promueve el uso de medios de transporte sostenibles como la bicicleta, la patineta eléctrica, la caminata y el transporte público.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/movilidad%20sostenible%20mayo.jpg",
                            "foto": "Foto 7413"
                        },
                        {
                            "titulo": "Curso teórico-práctico para motociclistas (Sábado 30 de mayo)",
                            "descripcion": "Un espacio pedagógico dirigido a actores viales vulnerables, que aborda temas clave como la normativa, el comportamiento y las habilidades necesarias para una conducción segura. El curso incorpora enfoques diferenciales de formación para conductores novatos, experimentados y mujeres motociclistas.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/27_mayo_curso%20teorico-practico%20para%20motociclistas%20%28sabado%2030%20de%20mayo%29_foto%201297.jpg",
                            "foto": "Foto 1297"
                        }
                    ]
                },
                {
                    "mes": "junio",
                    "mes_label": "Junio",
                    "eventos": [{
                            "titulo": "Tintatón",
                            "descripcion": "Acción pedagógica en vía que promueve el diálogo entre la entidad, la Policía y la comunidad, para reflexionar de manera conjunta sobre los derechos y deberes en la vía y la importancia del rol que cumple cada usuario en la movilidad de Bogota.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/29_junio_tintaton_foto%200351.jpg",
                            "foto": "Foto 0351"
                        },
                        {
                            "titulo": "Día de la Movilidad Sostenible",
                            "descripcion": "El primer jueves hábil de cada mes se conmemora el Día de la Movilidad Sostenible, una jornada en la que la Secretaría de Movilidad, en articulación con distintas entidades del Distrito, promueve el uso de medios de transporte sostenibles como la bicicleta, la patineta eléctrica, la caminata y el transporte público.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/30_junio_dia%20de%20la%20movilidad%20sostenible_foto%204723.jpg",
                            "foto": "Foto 4723"
                        },
                        {
                            "titulo": "Día Mundial de la Bicicleta (Miércoles 3 de junio)",
                            "descripcion": "Esta fecha establecida por la ONU, promueve el uso de la bicicleta como un medio de transporte sostenible. En línea con el Plan Distrital de Desarrollo Bogotá Camina Segura, la ciudad se une a la conmemoración del Día Mundial de la Bicicleta, impulsando hábitos de movilidad más saludables.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/31_junio_dia%20mundial%20de%20la%20bicicleta%20%28miercoles%203%20de%20junio%29_foto%2075.jpg",
                            "foto": "Foto 75"
                        },
                        {
                            "titulo": "Curso teórico-práctico para motociclistas (Sábado 20 de junio)",
                            "descripcion": "Un espacio pedagógico dirigido a actores viales vulnerables, que aborda temas clave como la normativa, el comportamiento y las habilidades necesarias para una conducción segura. El curso incorpora enfoques diferenciales de formación para conductores novatos, experimentados y mujeres motociclistas.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/32_junio_curso%20teorico-practico%20para%20motociclistas%20%28sabado%2020%20de%20junio%29_foto%201342.jpg",
                            "foto": "Foto 1342"
                        }
                    ]
                },
                {
                    "mes": "julio",
                    "mes_label": "Julio",
                    "eventos": [{
                            "titulo": "Tintatón",
                            "descripcion": "Acción pedagógica en vía que promueve el diálogo entre la entidad, la Policía y la comunidad, para reflexionar de manera conjunta sobre los derechos y deberes en la vía y la importancia del rol que cumple cada usuario en la movilidad de Bogota.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/34_julio_tintaton_foto%200399.jpg",
                            "foto": "Foto 0399"
                        },
                        {
                            "titulo": "Día de la Movilidad Sostenible",
                            "descripcion": "El primer jueves hábil de cada mes se conmemora el Día de la Movilidad Sostenible, una jornada en la que la Secretaría de Movilidad, en articulación con distintas entidades del Distrito, promueve el uso de medios de transporte sostenibles como la bicicleta, la patineta eléctrica, la caminata y el transporte público.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/35_julio_dia%20de%20la%20movilidad%20sostenible_foto%204789.jpg",
                            "foto": "Foto 4789"
                        },
                        {
                            "titulo": "Curso teórico-práctico para motociclistas (Sábado 11 de julio)",
                            "descripcion": "Un espacio pedagógico dirigido a actores viales vulnerables, que aborda temas clave como la normativa, el comportamiento y las habilidades necesarias para una conducción segura. El curso incorpora enfoques diferenciales de formación para conductores novatos, experimentados y mujeres motociclistas.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/36_julio_curso%20teorico-practico%20para%20motociclistas%20%28sabado%2011%20de%20julio%29_foto%201377.jpg",
                            "foto": "Foto 1377"
                        }
                    ]
                },
                {
                    "mes": "agosto",
                    "mes_label": "Agosto",
                    "eventos": [{
                            "titulo": "Tintatón",
                            "descripcion": "Acción pedagógica en vía que promueve el diálogo entre la entidad, la Policía y la comunidad, para reflexionar de manera conjunta sobre los derechos y deberes en la vía y la importancia del rol que cumple cada usuario en la movilidad de Bogota.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/38_agosto_tintaton_foto%206323.jpg",
                            "foto": "Foto 6323"
                        },
                        {
                            "titulo": "Día de la Movilidad Sostenible",
                            "descripcion": "El primer jueves hábil de cada mes se conmemora el Día de la Movilidad Sostenible, una jornada en la que la Secretaría de Movilidad, en articulación con distintas entidades del Distrito, promueve el uso de medios de transporte sostenibles como la bicicleta, la patineta eléctrica, la caminata y el transporte público.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/39_agosto_dia%20de%20la%20movilidad%20sostenible_foto%2037.jpg",
                            "foto": "Foto 37"
                        },
                        {
                            "titulo": "Día del Taxista (Miércoles 5 de agosto)",
                            "descripcion": "El Día del Taxista se establece mediante el Acuerdo 606 de 2015, como un reconocimiento a la labor que cumplen las y los taxistas en la movilidad de la ciudad y en la prestación de un servicio fundamental para la ciudadanía.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/40_agosto_dia%20del%20taxista%20%28miercoles%205%20de%20agosto%29_foto%202.jpg",
                            "foto": "Foto 2"
                        },
                        {
                            "titulo": "Día Mundial del Peatón (Lunes 17 de agosto)",
                            "descripcion": "El Día Mundial del Peatón, promovido por la Organización Mundial de la Salud (OMS), busca crear conciencia sobre la importancia de la seguridad vial y el respeto por los derechos de las personas que se movilizan a pie. Esta conmemoración invita a reflexionar sobre la protección de la vida en las vías públicas.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/41_agosto_dia%20mundial%20del%20peaton%20%28lunes%2017%20de%20agosto%29_foto%200833.jpg",
                            "foto": "Foto 0833"
                        },
                        {
                            "titulo": "Curso teórico-práctico para motociclistas (Sábado 22 de agosto)",
                            "descripcion": "Un espacio pedagógico dirigido a actores viales vulnerables, que aborda temas clave como la normativa, el comportamiento y las habilidades necesarias para una conducción segura. El curso incorpora enfoques diferenciales de formación para conductores novatos, experimentados y mujeres motociclistas.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/42_agosto_curso%20teorico-practico%20para%20motociclistas%20%28sabado%2022%20de%20agosto%29_foto%204161.jpg",
                            "foto": "Foto 4161"
                        }
                    ]
                },
                {
                    "mes": "septiembre",
                    "mes_label": "Septiembre",
                    "eventos": [{
                            "titulo": "Tintatón",
                            "descripcion": "Acción pedagógica en vía que promueve el diálogo entre la entidad, la Policía y la comunidad, para reflexionar de manera conjunta sobre los derechos y deberes en la vía y la importancia del rol que cumple cada usuario en la movilidad de Bogota.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/44_septiembre_tintaton_foto%206355.jpg",
                            "foto": "Foto 6355"
                        },
                        {
                            "titulo": "Día de la Movilidad Sostenible",
                            "descripcion": "El primer jueves hábil de cada mes se conmemora el Día de la Movilidad Sostenible, una jornada en la que la Secretaría de Movilidad, en articulación con distintas entidades del Distrito, promueve el uso de medios de transporte sostenibles como la bicicleta, la patineta eléctrica, la caminata y el transporte público.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/45_septiembre_dia%20de%20la%20movilidad%20sostenible_foto%2042.jpg",
                            "foto": "Foto 42"
                        },
                        {
                            "titulo": "Semana Distrital de la Bicicleta",
                            "descripcion": "Semana dedicada a incentivar y promover el uso de la bicicleta como medio de transporte sostenible, amigable, asequible, limpio y ecológico y que genera beneficios en la salud realizando diversos eventos deportivos, recreativos, educativos y culturales. Se celebra la ultima semana del mes de septiembre dando cumplimiento al Acuerdo 668 de 2017",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/46_septiembre_semana%20distrital%20de%20la%20bicicleta_foto%2031.jpg",
                            "foto": "Foto 31"
                        },
                        {
                            "titulo": "Curso teórico-práctico para motociclistas (Miércoles 9 de septiembre)",
                            "descripcion": "Un espacio pedagógico dirigido a actores viales vulnerables, que aborda temas clave como la normativa, el comportamiento y las habilidades necesarias para una conducción segura. El curso incorpora enfoques diferenciales de formación para conductores novatos, experimentados y mujeres motociclistas.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/47_septiembre_curso%20teorico-practico%20para%20motociclistas%20%28miercoles%209%20de%20septiembre%29_foto%204173.jpg",
                            "foto": "Foto 4173"
                        },
                        {
                            "titulo": "Aniversario Sistema de Bicicletas Compartidas (Miércoles 30 de septiembre)",
                            "descripcion": "Se cumplen cuatro años de la puesta en marcha del Sistema de Bicicletas Compartidas, una estrategia que ha fortalecido la movilidad sostenible en la ciudad, ampliando las alternativas de transporte y promoviendo hábitos de desplazamiento más limpios, eficientes y saludables para la ciudadanía.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/48_septiembre_aniversario%20sistema%20de%20bicicletas%20compartidas%20%28miercoles%2030%20de%20septiembre%29_foto%20003.jpg",
                            "foto": "Foto 003"
                        }
                    ]
                },
                {
                    "mes": "octubre",
                    "mes_label": "Octubre",
                    "eventos": [{
                            "titulo": "Día de la Movilidad Sostenible",
                            "descripcion": "El primer jueves hábil de cada mes se lleva a cabo el Día de la Movilidad Sostenible, en el cual la Secretaría Distrital de Movilidad acompaña a diferentes entidades del Distrito para que promuevan los medios de transporte sostenibles como: bicicleta, patineta eléctrica, caminata y transporte público",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/50_octubre_dia%20de%20la%20movilidad%20sostenible_foto%201466.jpg",
                            "foto": "Foto 1466"
                        },
                        {
                            "titulo": "Tintatón",
                            "descripcion": "Acción pedagógica en vía que promueve el diálogo entre la entidad, la Policía y la comunidad, para reflexionar de manera conjunta sobre los derechos y deberes en la vía y la importancia del rol que cumple cada usuario en la movilidad de Bogota.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/51_octubre_tintaton_foto%206432.jpg",
                            "foto": "Foto 6432"
                        },
                        {
                            "titulo": "Semana de la Seguridad Vial",
                            "descripcion": "En cumplimiento del Acuerdo 315 de 2008, la Semana de la Seguridad Vial busca promover la divulgación de las normas de seguridad vial y convivencia ciudadana, reconociendo las fortalezas y debilidades de los usuarios en la vía, así como las disposiciones del Código de Policía relacionadas con movilidad, tránsito y transporte.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/52_octubre_semana%20de%20la%20seguridad%20vial_foto%206618.jpg",
                            "foto": "Foto 6618"
                        },
                        {
                            "titulo": "Día Distrital del Motociclista",
                            "descripcion": "Evento dirigido a motociclistas que promueve la seguridad vial mediante actividades pedagógicas, espacios de sensibilización y formación, orientados a fortalecer comportamientos responsables en la vía y la protección de la vida.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/53_octubre_dia%20distrital%20del%20motociclista_foto%2012.jpg",
                            "foto": "Foto 12"
                        },
                        {
                            "titulo": "Curso teórico-práctico para motociclistas (Sábado 17 de octubre)",
                            "descripcion": "Un espacio pedagógico dirigido a actores viales vulnerables, que aborda temas clave como la normativa, el comportamiento y las habilidades necesarias para una conducción segura. El curso incorpora enfoques diferenciales de formación para conductores novatos, experimentados y mujeres motociclistas.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/54_octubre_curso%20teorico-practico%20para%20motociclistas%20%28sabado%2017%20de%20octubre%29_foto%204205.jpg",
                            "foto": "Foto 4205"
                        }
                    ]
                },
                {
                    "mes": "noviembre",
                    "mes_label": "Noviembre",
                    "eventos": [{
                            "titulo": "Día de la Movilidad Sostenible",
                            "descripcion": "El primer jueves hábil de cada mes se lleva a cabo el Día de la Movilidad Sostenible, en el cual la Secretaría Distrital de Movilidad acompaña a diferentes entidades del Distrito para que promuevan los medios de transporte sostenibles como: bicicleta, patineta eléctrica, caminata y transporte público",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/56_noviembre_dia%20de%20la%20movilidad%20sostenible_foto%201538.jpg",
                            "foto": "Foto 1538"
                        },
                        {
                            "titulo": "Tintatón",
                            "descripcion": "Acción pedagógica en vía que promueve el diálogo entre la entidad, la Policía y la comunidad, para reflexionar de manera conjunta sobre los derechos y deberes en la vía y la importancia del rol que cumple cada usuario en la movilidad de Bogota.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/57_noviembre_tintaton_foto%201325.jpg",
                            "foto": "Foto 1325"
                        },
                        {
                            "titulo": "Día Distrital del Peatón",
                            "descripcion": "busca promover la caminata y la movilidad activa en entornos seguros, mediante intervenciones que priorizan pasos peatonales seguros, la implementación de herramientas de seguridad vial, la demarcación en vía y el desarrollo de actividades culturales y recreativas, entre otras acciones. Se celebra el segundo domingo del mes de noviembre, en cumplimiento del Acuerdo 668 de 2017.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/58_noviembre_dia%20distrital%20del%20peaton_foto%201277.jpg",
                            "foto": "Foto 1277"
                        },
                        {
                            "titulo": "Día mundial en memoria de las víctimas de siniestros viales",
                            "descripcion": "El Día Mundial en Memoria de las Víctimas de Siniestros Viales reconoce a las víctimas y sus familias. En este marco, Bogotá impulsa la campaña “No somos una cifra, respeta el límite”, para sensibilizar sobre los riesgos del exceso de velocidad y avanzar en la meta de reducir en un 15 % las muertes en las vías al 2027, en el marco del Plan Distrital de Seguridad Vial 2023–2032.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/59_noviembre_dia%20mundial%20en%20memoria%20de%20las%20victimas%20de%20siniestros%20viales_foto%204053.jpg",
                            "foto": "Foto 4053"
                        },
                        {
                            "titulo": "Curso teórico-práctico para motociclistas (Sábado 28 de noviembre)",
                            "descripcion": "Un espacio pedagógico dirigido a actores viales vulnerables, que aborda temas clave como la normativa, el comportamiento y las habilidades necesarias para una conducción segura. El curso incorpora enfoques diferenciales de formación para conductores novatos, experimentados y mujeres motociclistas.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/60_noviembre_curso%20teorico-practico%20para%20motociclistas%20%28sabado%2028%20de%20noviembre%29_foto%204217.jpg",
                            "foto": "Foto 4217"
                        }
                    ]
                },
                {
                    "mes": "diciembre",
                    "mes_label": "Diciembre",
                    "eventos": [{
                            "titulo": "Día de la Movilidad Sostenible",
                            "descripcion": "El primer jueves hábil de cada mes se lleva a cabo el Día de la Movilidad Sostenible, en el cual la Secretaría Distrital de Movilidad acompaña a diferentes entidades del Distrito para que promuevan los medios de transporte sostenibles como: bicicleta, patineta eléctrica, caminata y transporte público",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/62_diciembre_dia%20de%20la%20movilidad%20sostenible_foto%2031.jpg",
                            "foto": "Foto 31"
                        },
                        {
                            "titulo": "Tintatón",
                            "descripcion": "Acción pedagógica en vía que promueve el diálogo entre la entidad, la Policía y la comunidad, para reflexionar de manera conjunta sobre los derechos y deberes en la vía y la importancia del rol que cumple cada usuario en la movilidad de Bogota.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/63_diciembre_tintaton_foto%202.jpg",
                            "foto": "Foto 2"
                        },
                        {
                            "titulo": "Curso teórico-práctico para motociclistas (Sábado 12 de diciembre)",
                            "descripcion": "Un espacio pedagógico dirigido a actores viales vulnerables, que aborda temas clave como la normativa, el comportamiento y las habilidades necesarias para una conducción segura. El curso incorpora enfoques diferenciales de formación para conductores novatos, experimentados y mujeres motociclistas.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/64_diciembre_curso%20teorico-practico%20para%20motociclistas%20%28sabado%2012%20de%20diciembre%29_foto%204066.jpg",
                            "foto": "Foto 4066"
                        },
                        {
                            "titulo": "Día Internacional de las Personas con Discapacidad",
                            "descripcion": "Esta conmemoración promueve los derechos y el bienestar de las personas con discapacidades en todos los ámbitos de la sociedad y el desarrollo y crea concienca sobre su situación.",
                            "enlace": "https://www.movilidadbogota.gov.co/sites/default/files/2026-05-28/65_diciembre_dia%20internacional%20de%20las%20personas%20con%20discapacidad_foto%2040.jpg",
                            "foto": "Foto 40"
                        }
                    ]
                }
            ];

            function extractDateFromTitle(title) {
                const match = title.match(/\(([^)]+)\)/);
                return match ? match[1] : '';
            }

            function escapeHtml(text) {
                return String(text || '')
                    .replaceAll('&', '&amp;')
                    .replaceAll('<', '&lt;')
                    .replaceAll('>', '&gt;')
                    .replaceAll('"', '&quot;')
                    .replaceAll("'", '&#039;');
            }

            function renderAgenda() {
                const root = document.getElementById('agenda-root');
                if (!root) return;

                if (!Array.isArray(agendaMeses) || agendaMeses.length === 0) {
                    root.innerHTML = '<div class="alert alert-warning">No se encontro informacion de agenda para 2026.</div>';
                    return;
                }

                const html = agendaMeses.map((mes) => {
                    const monthTitle = escapeHtml(mes.mes_label || mes.mes || '');
                    const events = Array.isArray(mes.eventos) ? mes.eventos : [];

                    const eventsHtml = events.map((evento) => {
                        const titulo = escapeHtml(evento.titulo || '');
                        const descripcion = escapeHtml(evento.descripcion || '');
                        const fecha = escapeHtml(extractDateFromTitle(evento.titulo || ''));
                        const fotoUrl = evento.enlace ? escapeHtml(evento.enlace) : '';

                        return `
                            <div class="agenda-item">
                                <div class="agenda-item-grid">
                                    <div class="agenda-photo-slot">
                                        ${fotoUrl ? `<img src="${fotoUrl}" alt="Imagen del evento ${titulo}">` : 'Espacio para foto'}
                                    </div>
                                    <div>
                                        <div class="agenda-meta">
                                            ${fecha ? `<span class="agenda-badge">${fecha}</span>` : ''}
                                        </div>
                                        <h2 class="h6 mb-2">${titulo}</h2>
                                        ${descripcion ? `<p class="mb-2">${descripcion}</p>` : ''}
                                    </div>
                                </div>
                            </div>
                        `;
                    }).join('');

                    return `
                        <article class="agenda-month">
                            <header class="agenda-month-title">${monthTitle}</header>
                            ${eventsHtml}
                        </article>
                    `;
                }).join('');

                root.innerHTML = html;
            }

            document.addEventListener('DOMContentLoaded', renderAgenda);
        </script>
    </section>
@endsection
