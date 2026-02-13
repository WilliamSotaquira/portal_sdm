@extends('layouts.app')
@section('title', 'comparendos')

@section('content')
<div class="cmp-comparendos-block">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <a class="cmp-skip-link" href="#contenido">Saltar al contenido</a>
    <style>
                /* ====== Scope general del bloque ====== */
                .cmp-comparendos-block {
                  font-family: "IBM Plex Sans", system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif;
                  background-color: #fff;
                }
                .cmp-comparendos-block .cmp-skip-link {
                  position: absolute;
                  left: -9999px;
                  top: 8px;
                  background: #101829;
                  color: #ffffff;
                  padding: 8px 12px;
                  border-radius: 4px;
                  z-index: 1000;
                  text-decoration: none;
                }
                .cmp-comparendos-block .cmp-skip-link:focus,
                .cmp-comparendos-block .cmp-skip-link:focus-visible {
                  left: 8px;
                  outline: 3px solid #49d114;
                  outline-offset: 2px;
                }
                /* ====== Ajustes layout Drupal (solo esta página) ====== */
                body.page-node-322 .block-page-title-block {
                  display: none !important;
                }
                body.page-node-322 .breadcrumb {
                  margin-bottom: 0 !important;
                }
                body.page-node-322 .main-content {
                  padding-top: 0 !important;
                }
                body.page-node-322 .cmp-comparendos-block {
                  margin-top: -10px !important;
                }
                /* ====== Sección principal comparendos ====== */
                .cmp-comparendos-block .cmp-comparendos {
                  --verde-sdm: #49d114;
                  --verde-hover: #3aa10f;
                  --navy: #101829;
                  --text: #ffffff;
                  /* proporción interna: aprox 35% imagen / 65% texto */
                  --img-col: 35%;
                  --txt-col: 65%;
                  --gap: 28px;
                  padding: 20px 0;
                }
                .cmp-comparendos-block .cmp-wrap {
                  max-width: 1200px;
                  margin: 0 auto;
                  display: grid;
                  grid-template-columns: var(--img-col) var(--txt-col);
                  align-items: stretch;
                  gap: var(--gap);
                  padding: 0 16px;
                }
                /* ====== Columna de imagen ====== */
                .cmp-comparendos-block .cmp-media img {
                  width: 100%;
                  height: 100%;
                  max-height: 280px;
                  object-fit: cover;
                  border-radius: 10px;
                  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.18);
                  transition: transform 0.25s ease, box-shadow 0.25s ease;
                  display: block;
                }
                .cmp-comparendos-block .cmp-media img:hover {
                  transform: scale(1.02);
                  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.22);
                }
                /* ====== Panel de texto ====== */
                .cmp-comparendos-block .cmp-text {
                  background: var(--navy);
                  color: var(--text);
                  border-radius: 10px;
                  padding: 32px 26px 28px;
                  position: relative;
                  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
                  overflow: hidden;
                }
                .cmp-comparendos-block .cmp-text::after {
                  content: "";
                  position: absolute;
                  bottom: 0;
                  left: 0;
                  height: 8px;
                  width: 100%;
                  background: var(--verde-sdm);
                }
                .cmp-comparendos-block .cmp-kicker {
                  margin: 0 0 6px;
                  font-size: 13px;
                  text-transform: uppercase;
                  letter-spacing: 0.08em;
                  color: #d4edc4;
                  font-weight: 600;
                }
                .cmp-comparendos-block .cmp-title {
                  color: var(--verde-sdm) !important;
                  font-size: 40px !important;
                  font-weight: 700 !important;
                  line-height: 1.15 !important;
                  margin: 0 0 16px !important;
                }
                .cmp-comparendos-block .cmp-lead {
                  margin: 0 0 8px;
                  font-size: 16px;
                  line-height: 1.5;
                  font-weight: 400;
                }
                .cmp-comparendos-block .cmp-list {
                  margin: 0;
                  padding-left: 1.2rem;
                  font-size: 16px;
                  line-height: 1.5;
                  list-style: none;
                }
                .cmp-comparendos-block .cmp-list li {
                  margin-bottom: 6px;
                  position: relative;
                  padding-left: 20px;
                }
                .cmp-comparendos-block .cmp-list li::before {
                  content: "✔";
                  position: absolute;
                  left: 0;
                  top: 0;
                  color: var(--verde-sdm);
                  font-weight: 900;
                }
                .cmp-comparendos-block a {
                  text-decoration: underline;
                  text-underline-offset: 2px;
                  text-decoration-thickness: 2px;
                }
                /* ====== Botones (verde #49d114) ====== */
                .cmp-comparendos-block .btn,
                .cmp-comparendos-block .btn-outline-success,
                .cmp-comparendos-block .btn-success {
                  background-color: #49d114 !important;
                  border: 2px solid #49d114 !important;
                  color: #000 !important;
                  border-radius: 28px;
                  padding: 0.7rem 1.8rem;
                  font-weight: 600;
                  font-size: 1rem;
                  font-family: "IBM Plex Sans", system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif;
                  text-decoration: none;
                  white-space: normal;
                  transition: all 0.2s ease;
                }
                .cmp-comparendos-block .btn strong {
                  color: #000 !important;
                }
                .cmp-comparendos-block .btn:hover,
                .cmp-comparendos-block .btn-outline-success:hover,
                .cmp-comparendos-block .btn-success:hover {
                  background-color: #3aa10f !important;
                  border-color: #3aa10f !important;
                  transform: translateY(-2px);
                  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.22);
                  color: #000 !important;
                }
                .cmp-comparendos-block .btn:focus-visible {
                  outline: 3px solid #1d4d0d !important;
                  outline-offset: 2px;
                  box-shadow: 0 0 0 3px rgba(73, 209, 20, 0.4) !important;
                }
                .cmp-comparendos-block a:focus,
                .cmp-comparendos-block a:focus-visible {
                  outline: 3px solid #49d114;
                  outline-offset: 2px;
                }
                /* ===== Utilidad: object-fit-cover ===== */
                .cmp-comparendos-block .object-fit-cover {
                  object-fit: cover;
                }
                .cmp-comparendos-block .container img {
                  transition: transform 0.25s ease, box-shadow 0.25s ease;
                  transform-origin: center;
                }
                .cmp-comparendos-block .container img:hover {
                  transform: scale(1.03);
                }
                /* ====== Volante de corresponsales ====== */
                .cmp-comparendos-block .cmp-payment-flyer {
                  max-width: 860px;
                  margin: 0 auto 22px;
                  border: 0;
                  border-radius: 0;
                  background: transparent;
                  overflow: visible;
                }
                .cmp-comparendos-block .cmp-payment-flyer-head {
                  margin: 0;
                  padding: 10px 14px;
                  text-align: center;
                  font-size: 28px;
                  font-weight: 600;
                  line-height: 1.15;
                  letter-spacing: 0.01em;
                  color: #2f3135;
                  background: #f5f6f7;
                }
                .cmp-comparendos-block .cmp-payment-flyer-body {
                  padding: 16px 14px 14px;
                }
                .cmp-comparendos-block .cmp-payment-flyer-text {
                  margin: 0 0 14px;
                  text-align: center;
                  font-size: 18px;
                  font-weight: 400;
                  line-height: 1.4;
                  color: #4a4d52;
                }
                .cmp-comparendos-block .cmp-payment-logos {
                  display: grid;
                  grid-template-columns: repeat(5, minmax(110px, 1fr));
                  gap: 14px 16px;
                  align-items: center;
                  justify-items: center;
                }
                .cmp-comparendos-block .cmp-payment-logos img {
                  width: min(140px, 100%);
                  max-width: 100%;
                  height: auto;
                  display: block;
                }
                /* ===== Iframe antisoborno ===== */
                .cmp-comparendos-block .antisoborno-frame {
                  border: 0;
                  min-height: 500px;
                }
                @media (max-width: 768px) {
                  .cmp-comparendos-block .antisoborno-frame {
                    min-height: 400px;
                  }
                }
                @media (max-width: 480px) {
                  .cmp-comparendos-block .antisoborno-frame {
                    min-height: 360px;
                  }
                }
                /* ====== Responsivo sección principal ====== */
                @media (max-width: 900px) {
                  .cmp-comparendos-block .cmp-wrap {
                    grid-template-columns: 1fr;
                    max-width: 640px;
                  }
                  .cmp-comparendos-block .cmp-text {
                    order: -1; /* texto primero en pantallas medianas/chicas */
                  }
                  .cmp-comparendos-block .cmp-title {
                    font-size: 32px;
                  }
                }
                @media (max-width: 700px) {
                  .cmp-comparendos-block .cmp-wrap {
                    gap: 16px;
                    padding: 0 12px;
                  }
                  .cmp-comparendos-block .cmp-text {
                    padding: 22px 18px 20px;
                  }
                  .cmp-comparendos-block .cmp-media img {
                    max-height: 220px;
                  }
                }
                @media (max-width: 540px) {
                  .cmp-comparendos-block .cmp-title {
                    font-size: 28px;
                  }
                  .cmp-comparendos-block .cmp-payment-flyer {
                    border-radius: 10px;
                  }
                  .cmp-comparendos-block .cmp-payment-flyer-head {
                    font-size: 24px;
                    padding: 10px 8px;
                  }
                  .cmp-comparendos-block .cmp-payment-flyer-body {
                    padding: 12px 10px 10px;
                  }
                  .cmp-comparendos-block .cmp-payment-flyer-text {
                    font-size: 16px;
                    margin-bottom: 10px;
                  }
                  .cmp-comparendos-block .cmp-payment-logos {
                    grid-template-columns: repeat(2, minmax(110px, 1fr));
                    gap: 10px 12px;
                  }
                  .cmp-comparendos-block .cmp-lead {
                    font-size: 14px;
                  }
                  .cmp-comparendos-block .cmp-list {
                    font-size: 14px;
                  }
                  .cmp-comparendos-block .btn,
                  .cmp-comparendos-block .btn-outline-success,
                  .cmp-comparendos-block .btn-success {
                    width: 100%;
                    display: block;
                    text-align: center;
                  }
                  .cmp-comparendos-block .text-center .btn {
                    margin-left: auto;
                    margin-right: auto;
                  }
                }
                /* Respeto a usuarios que prefieren menos movimiento */
                @media (prefers-reduced-motion: reduce) {
                  .cmp-comparendos-block .cmp-media img,
                  .cmp-comparendos-block .btn,
                  .cmp-comparendos-block .container img {
                    transition: none !important;
                    transform: none !important;
                  }
                }
              </style>
    <div class="container" id="contenido" role="main">
        <!-- Sección principal: Consulta y pagos -->
        <section class="cmp-comparendos" aria-labelledby="cmp-title">
            <div class="cmp-wrap">
                <!-- Imagen -->
                <div class="cmp-media">
                    <img src="/sites/default/files/2026-02-11/wg%20-%20secretaria%20de%20movilidad_0272.jpg" alt="Ciudadana consultando comparendos desde un computador portátil" width="184" height="183" loading="lazy">
                </div>
                <!-- Texto -->
                <div class="cmp-text" role="region" aria-label="Consulta y pagos de comparendos">
                    <p class="cmp-kicker">
                        Trámite en línea
                    </p>
                    <h1 class="cmp-title" id="cmp-title" style="color:#49d114; font-size:40px; font-weight:700; line-height:1.15; margin:0 0 16px;">
                        Consulta y pagos de comparendos
                    </h1>
                    <p class="cmp-lead">
                        Con su <strong>número de cédula</strong> y la <strong>placa del vehículo</strong> puede:
                    </p>
                    <ul class="cmp-list">
                        <li data-list-item-id="ed156261c927435b06465d33a0e3e4815">
                            Consultar los comparendos vigentes.
                        </li>
                        <li data-list-item-id="e519e37684b7a54d13bfdba31eb4832cc">
                            Revisar acuerdos de pago pendientes.
                        </li>
                        <li data-list-item-id="e1fe5d476c0346082a46dc8028e93cb40">
                            Conocer los <strong>descuentos</strong> a los que puede acceder.
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Botón principal de consulta -->
        <div class="text-center my-4">
            <a class="btn btn-success" href="https://webfenix.movilidadbogota.gov.co/#/consulta-pagos">Consultar <strong>comparendos y acuerdos de pago</strong>&nbsp;</a>
        </div>
        <!-- Volante: pagos en corresponsales físicos -->
        <section class="cmp-payment-flyer" aria-label="Póngase al día con Bogotá">
            <h2 class="cmp-payment-flyer-head">PÓNGASE AL DÍA CON BOGOTÁ</h2>
            <div class="cmp-payment-flyer-body">
                <p class="cmp-payment-flyer-text">
                    Ahora puede pagar sus comparendos en los corresponsales físicos que se encuentran ubicados en diferentes sectores de la ciudad.
                </p>
                <div class="cmp-payment-logos" role="group" aria-label="Logos de bancos y corresponsales autorizados">
                    <img src="/sites/default/files/2026-02-12/logo_01_cs.png" alt="Corresponsales autorizados 1" loading="lazy">
                    <img src="/sites/default/files/2026-02-12/logo_02_cs.png" alt="Corresponsales autorizados 2" loading="lazy">
                    <img src="/sites/default/files/2026-02-12/logo_03_cs.png" alt="Corresponsales autorizados 3" loading="lazy">
                    <img src="/sites/default/files/2026-02-12/logo_04_cs.png" alt="Corresponsales autorizados 4" loading="lazy">
                    <img src="/sites/default/files/2026-02-12/logo_05_cs.png" alt="Corresponsales autorizados 5" loading="lazy">
                    <img src="/sites/default/files/2026-02-12/logo_06_cs.png" alt="Corresponsales autorizados 6" loading="lazy">
                    <img src="/sites/default/files/2026-02-12/logo_07_cs.png" alt="Corresponsales autorizados 7" loading="lazy">
                    <img src="/sites/default/files/2026-02-12/logo_08_cs.png" alt="Corresponsales autorizados 8" loading="lazy">
                    <img src="/sites/default/files/2026-02-12/logo_09_cs.png" alt="Corresponsales autorizados 9" loading="lazy">
                    <img src="/sites/default/files/2026-02-12/logo_10_cs.png" alt="Corresponsales autorizados 10" loading="lazy">
                </div>
            </div>
        </section>
        <!-- Sección: acuerdo de pago -->
        <div class="row align-items-center mb-4">
            <div class="col-md-6 mb-3 mb-md-0">
                <img class="img-fluid w-100 object-fit-cover" src="/sites/default/files/2025-07/image_comparendo_02.png" alt="Atención en oficina de la Secretaría de Movilidad" width="1050" height="551">
            </div>
            <div class="col-md-6 text-center">
                <h2>
                    Haz tu <strong>acuerdo de pago</strong><br>
                    y ponte al día con Bogotá
                </h2>
                <p class="mb-0">
                    <a class="btn btn-success my-2" href="https://movilidad.ucontactcloud.com/WebChat/SdmAcuerdosPago/">Hacer <strong>acuerdo de pago</strong>&nbsp;</a>
                </p>
            </div>
        </div>
        <!-- Texto informativo -->
        <div class="mb-4">
            <p>
                Según el artículo 2 del Código Nacional de Tránsito, el comparendo es una orden formal de notificación para que el presunto contraventor o implicado se presente ante la autoridad de tránsito por la comisión de una infracción. Aquí podrá consultar con su número de cédula y placa del vehículo los comparendos que tenga pendientes, acuerdos de pago y embargos.
            </p>
        </div>
        <!-- Botón consulta ampliada -->
        <div class="text-center mb-3">
            <a class="btn btn-success" href="https://webfenix.movilidadbogota.gov.co/#/consulta-pagos">Consultar <strong>comparendos, acuerdos de pago y embargos</strong>&nbsp;</a>
        </div>
        <!-- Tabla de autoliquidación (ENLACE CORREGIDO) -->
        <div class="text-center mb-4">
            <a class="btn btn-success" href="/sites/default/files/2026-01-03/tabla_autoliquidacion_2026.pdf">Tabla de autoliquidación de infracciones <strong>2026</strong></a>
        </div>
        <!-- Banner Mi Movilidad -->
        <div class="w-100 mb-4">
            <img class="img-fluid w-100 object-fit-cover" src="/sites/default/files/2025-07/banner_mimovilidad.png" alt="Mi Movilidad a un clic" width="950" height="250">
        </div>
        <!-- Sistema de Gestión Antisoborno -->
        <div class="text-center my-5">
            <h3 class="mb-1">
                SISTEMA DE GESTIÓN ANTISOBORNO
            </h3>
            <h6 class="fw-light mb-3">
                Dirección de Gestión de Cobro
            </h6>
            <p class="mb-0">
                <iframe class="w-100 antisoborno-frame" src="/sites/default/files/2025-07-22/gestion_antisoborno.pdf" title="Documento del Sistema de Gestión Antisoborno de la Dirección de Gestión de Cobro">
                                                        </iframe>
            </p>
        </div>
    </div>
</div>
@endsection
