@extends('layouts.app')
@section('title', 'sg')

@section('content')
<style>
    .video-responsive {
        width: 100%;
        aspect-ratio: 16 / 9;
        height: auto;
    }
    .sg__btns{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
        margin-top: 45px;
        margin-bottom: 45px;
    }
    .sg__btn{
        display: flex;
        align-items: center;
        padding: 10px;
        border-radius: 8px;
        width: 100%;
        max-width: 300px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-decoration: none;
    }
    .sg__btn img{
        min-width: 102px;
        width: 102px;
        height: 102px;
    }
    .sg__btn a{
        font-size: 18px;
        font-weight: 600;
        text-decoration: none;
        line-height: 1.2;
    }

    /* Efecto hover zoom leve y lento de entrada y salida */
    .sg__btn:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    }

    @media (min-width: 1024px) {
        .video-responsive {
          width: 877px;
          height: 493px;
        }
      }

    </style>
<div class="container">
    <div class="text-center mb-4">
        <iframe class="video-responsive" src="https://www.youtube.com/embed/HvdqeVEijMg?si=zMG6ff47qDPKYSOT" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    </div>
    <p data-start="625" data-end="904">
        Los <strong data-start="629" data-end="686">sistemas de gestión Secretaría Distrital de Movilidad</strong> conforman un conjunto integral bajo el Modelo Integrado de Planeación y Gestión (MIPG). Estos sistemas están diseñados para garantizar la mejora continua y el fortalecimiento del desempeño institucional de la entidad.
    </p>
    <p data-start="906" data-end="1141">
        El Sistema Integrado de Gestión de la Secretaría de Movilidad está compuesto por siete sistemas que trabajan de manera coordinada para optimizar procesos, promover la transparencia y asegurar el cumplimiento de las normativas vigentes.
    </p>
    <p data-start="1143" data-end="1383">
        Entre los sistemas destacados se encuentran el Sistema de Gestión de Calidad, el Sistema de Gestión Ambiental, y el Sistema de Seguridad y Salud en el Trabajo, que contribuyen a una administración pública eficiente y orientada a resultados.
    </p>
    <p data-start="1385" data-end="1590">
        El compromiso de la Secretaría con la mejora continua impulsa la actualización constante de estos sistemas, garantizando un servicio público de alta calidad que responde a las necesidades de la ciudadanía.
    </p>
    <p data-start="1592" data-end="1760">
        Esta estructura integral fortalece la cultura organizacional, fomenta la responsabilidad institucional y permite una gestión transparente y efectiva en todas las áreas.
    </p>
    <hr>
    <div class="sg__btns mb-3">
        <div class="sg__btn" style="background-color:#4e4e4e;">
            <div style="background-color:#fff;">
                <img src="[custom:old_url]/sites/default/files/2024-07/micrositio_sys_gestion_ambiental.png" width="102" height="102">
            </div>
            <div class="d-flex align-items-center ps-4">
                <a style="color:#fff !important;" href="/sistema-de-gestion-ambiental">Sistema de Gestión Ambiental</a>
            </div>
        </div>
        <div class="sg__btn" style="background-color:#d81918;">
            <div style="background-color:#fff;">
                <img src="[custom:old_url]/sites/default/files/2024-07/micrositio_sys_no_al_soborno.png" width="102" height="102">
            </div>
            <div class="d-flex align-items-center ps-4">
                <a style="color:#fff !important;" href="/canal-denuncia-antisoborno">Sistema de Gestión Antisoborno</a>
            </div>
        </div>
        <div class="sg__btn" style="background-color:#104568;">
            <div style="background-color:#fff;">
                <img src="[custom:old_url]/sites/default/files/2024-07/propuesta_logo_sgc_op2_b.png" width="102" height="102">
            </div>
            <div class="d-flex align-items-center ps-4">
                <a style="color:#fff !important;" href="/sistema_de_gestion_de_calidad">Sistema de Gestión de Calidad</a>
            </div>
        </div>
        <div class="sg__btn" style="background-color:#bed00c;">
            <div style="background-color:#fff;">
                <img src="[custom:old_url]/sites/default/files/2024-07/sistema-gestion-continuidad-negocio.jpg" width="102" height="102">
            </div>
            <div class="d-flex align-items-center ps-4">
                <a style="color:#000 !important;" href="/sistema-de-gestion-de-continuidad-del-negocio">Sistema de Gestión de Continuidad del Negocio</a>
            </div>
        </div>
        <div class="sg__btn" style="background-color:#ff6600;">
            <div style="background-color:#fff;">
                <img src="[custom:old_url]/sites/default/files/2024-07/micrositio_sys_efr.png" width="102" height="102">
            </div>
            <div class="d-flex align-items-center ps-4">
                <a style="color:#fff !important;" href="/sistema-gestion-efr">Empresa Familiarmente Responsable</a>
            </div>
        </div>
        <div class="sg__btn" style="background-color:#4c531f;">
            <div style="background-color:#fff;">
                <img src="[custom:old_url]/sites/default/files/2024-07/sgsi.png" width="102" height="102">
            </div>
            <div class="d-flex align-items-center ps-4">
                <a style="color:#fff !important;" href="/sistema-de-gestion-de-seguridad-de-la-informacion">Sistema de Gestión de Seguridad de la Información</a>
            </div>
        </div>
        <div class="sg__btn" style="background-color:#337ab7;">
            <div style="background-color:#fff;">
                <img src="/sites/default/files/Paginas/08-10-2025/Logo_SST_2025.png" width="102" height="102">
            </div>
            <div class="d-flex align-items-center ps-4">
                <a style="color:#000 !important;" href="/SGSST">Sistema de Gestión de Seguridad y Salud en el Trabajo</a>
            </div>
        </div>
    </div>
</div>

@endsection
