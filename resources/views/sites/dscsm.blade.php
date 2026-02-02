@extends('layouts.app')
@section('title', 'dscsm')

@section('content')

    <style>
        :root {
            --amarillo: #FFB71B;
            --amarillo-soft: #FFF7E6;
            --rojo: #E90000;
            --ink: #282828;
            --muted: #64748b;
            --border: #e5e7eb;
            --soft: #f8fafc;
        }

        /* ===== Scope ===== */
        .conectate,
        .conectate * {
            box-sizing: border-box;
        }

        .conectate {
            color: var(--ink);
        }

        .conectate a {
            text-decoration: none;
        }

        /* ===== Helpers ===== */
        .conectate .shadow-soft {
            box-shadow: 0 18px 50px rgba(15, 23, 42, .10);
        }

        .conectate .rounded-xxl {
            border-radius: 20px;
        }

        .conectate .section {
            margin-top: 2.25rem;
        }

        .conectate .section-head {
            text-align: center;
            margin-bottom: 1rem;
        }

        .conectate .kicker {
            margin: 0;
            font-weight: 900;
            letter-spacing: -0.02em;
            font-size: clamp(1.6rem, 2.6vw, 2.3rem);
            color: #d99600;
        }

        .conectate .subkicker {
            margin: .4rem 0 0 0;
            color: var(--muted);
        }

        /* ===== Badges ===== */
        .conectate .badge {
            font-weight: 900 !important;
            font-size: .85rem !important;
            padding: .45rem .75rem !important;
            border-radius: 999px !important;
            line-height: 1 !important;
        }

        .conectate .badge.text-bg-warning {
            background: var(--amarillo) !important;
            color: #1f2937 !important;
            border: 1px solid rgba(0, 0, 0, .08) !important;
        }

        /* ===== HERO ===== */
        .hero__bg {
            width: 100%;
            border-radius: 0;
            overflow: hidden;
            background:
                url("/sites/default/files/2026-01-30/banner%201600%20x%20400%20v_1%20%282%29.jpg");
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 320px;
            margin: 0;
        }

        .hero__content {
            width: 100%;
            padding: 1.5rem 1rem;
            margin: 0;
        }

        .hero-card {
            width: 100%;
            max-width: 1200px;
            background: rgba(255, 255, 255, .95);
            border: 1px solid rgba(255, 255, 255, .7);
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: 0 22px 70px rgba(0, 0, 0, .25);
            backdrop-filter: blur(10px);
        }

        .hero-title {
            font-size: clamp(1.35rem, 2.4vw, 2.05rem);
            font-weight: 900;
            letter-spacing: -0.02em;
            margin: .55rem 0 .25rem 0;
            line-height: 1.12;
        }

        .hero-subtitle {
            margin: 0;
            color: var(--muted);
            max-width: 75ch;
        }

        .hero-descripcion {
            text-align: center;
            margin: 2.5rem 0;
            padding: 2rem;
            background: linear-gradient(135deg, rgba(255, 183, 27, .08), rgba(233, 0, 0, .04));
            border-radius: 20px;
            border-left: 4px solid var(--amarillo);
        }

        .hero-descripcion p {
            margin: 0;
            font-size: clamp(1.15rem, 1.5vw, 1.35rem);
            line-height: 1.8;
            color: #334155;
            font-weight: 500;
            letter-spacing: -0.01em;
            max-width: 80ch;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-actions {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }

        .conectate .hero-action-card {
            display: flex !important;
            align-items: center !important;
            gap: .9rem !important;
            padding: .9rem 1rem !important;
            border-radius: 16px !important;
            background: #fff !important;
            border: 1px solid var(--border) !important;
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease !important;
            min-height: 84px !important;
            text-decoration: none !important;
        }

        .conectate .hero-action-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(15, 23, 42, .14);
            border-color: #cbd5e1;
        }

        .conectate .hero-action-card:focus-visible {
            outline: none;
            box-shadow: 0 0 0 4px rgba(255, 183, 27, .45), 0 12px 28px rgba(15, 23, 42, .12);
            border-color: #f4c24f;
        }

        .conectate .hero-action-card__icon {
            width: 64px !important;
            height: 64px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            border-radius: 18px !important;
            background: linear-gradient(135deg, #fff4dd, #ffffff) !important;
            border: 1px solid #fde6b3 !important;
            flex: 0 0 auto !important;
        }

        .conectate .hero-action-card__icon img {
            width: 36px !important;
            height: 36px !important;
            display: block !important;
            object-fit: contain !important;
            object-position: center !important;
        }

        .conectate .hero-action-card__text {
            display: block !important;
            flex-direction: column !important;
            gap: .15rem !important;
            min-width: 0 !important;
        }

        .conectate .hero-action-card__title {
            display: inline-block !important;
            width: 100% !important;
            font-weight: 700 !important;
            color: var(--ink) !important;
            line-height: 1.2 !important;
            font-size: 1rem !important;
        }

        .conectate .hero-action-card__subtitle {
            display: inline-block !important;
            width: 100% !important;
            color: var(--muted) !important;
            line-height: 1.25 !important;
            font-size: .92rem !important;
        }

        .conectate .hero-action-card * {
            text-decoration: none !important;
        }

        .hero-cta {
            display: flex;
            gap: .5rem;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .hero-cta .btn {
            min-height: 44px !important;
            padding: .55rem 1.35rem !important;
            font-weight: 600 !important;
            border-radius: 999px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            line-height: 1.1 !important;
        }

        .hero-cta .btn.btn-outline-secondary {
            border-width: 1.5px !important;
        }

        .hero-cta .btn.btn-danger {
            background-color: #dc3545 !important;
            border-color: #dc3545 !important;
            color: #fff !important;
            box-shadow: none !important;
        }

        .hero-cta .btn.btn-outline-secondary {
            background-color: transparent !important;
            border-color: #6b7280 !important;
            color: #4b5563 !important;
            box-shadow: none !important;
        }

        .hero-cta .btn.btn-outline-secondary:hover,
        .hero-cta .btn.btn-outline-secondary:focus {
            background-color: #f3f4f6 !important;
            border-color: #6b7280 !important;
            color: #374151 !important;
        }

        /* ===== Focus visible ===== */
        .hero-cta .btn:focus-visible {
            outline: none;
            box-shadow: 0 0 0 4px rgba(255, 183, 27, .45);
        }

        /* ===== Cards ===== */
        .card-soft {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 20px;
            overflow: hidden;
        }

        .card-soft .card-body {
            padding: 1.25rem;
        }

        @media(min-width:768px) {
            .card-soft .card-body {
                padding: 1.75rem;
            }
        }

        .intro-card-body {
            padding: 0.95rem 1.05rem !important;
        }

        @media(min-width:768px) {
            .intro-card-body {
                padding: 1.15rem 1.4rem !important;
            }
        }

        .intro-card-body h3 {
            margin-bottom: .4rem;
        }

        .intro-card-body p {
            margin-bottom: .75rem;
        }

        .intro-card-body .btn {
            padding: .5rem 1.2rem;
        }

        /* ===== Banner vehículo casa ===== */
        .banner-vehiculo {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            min-height: 420px;
            background: #0b1220;
            display: flex;
        }

        .banner-vehiculo__bg {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(600px 320px at 15% 12%, rgba(255, 183, 27, .18), transparent 60%),
                linear-gradient(90deg, rgba(0, 0, 0, .50), rgba(0, 0, 0, .18)),
                url("/sites/default/files/2026-01-27/image1293-3.png");
            background-size: cover;
            background-position: center top;
        }

        .banner-vehiculo__bg::after {
            content: "";
            position: absolute;
            right: 1.5rem;
            bottom: 1.25rem;
            width: min(420px, 52%);
            height: 140px;
            background:
                url("/sites/default/files/Paginas/28-01-2025/text-vehiculo-casa.png") no-repeat right bottom / contain;
            filter: drop-shadow(0 14px 35px rgba(0, 0, 0, .55));
        }

        .banner-vehiculo__content {
            position: relative;
            padding: 1.5rem;
            height: 100%;
            flex: 1 1 auto;
        }

        @media(min-width:768px) {
            .banner-vehiculo__content {
                padding: 2rem;
            }
        }

        .banner-vehiculo h3 {
            color: #fff;
            font-weight: 900;
            letter-spacing: -0.02em;
            font-size: clamp(1.45rem, 2.4vw, 2.1rem);
            margin: 0 0 .45rem 0;
            text-shadow: 0 6px 18px rgba(0, 0, 0, .35);
        }

        .banner-vehiculo p {
            color: rgba(255, 255, 255, .94);
            margin: 0;
            text-shadow: 0 4px 14px rgba(0, 0, 0, .28);
            max-width: 52ch;
            font-size: clamp(1rem, 1.35vw, 1.15rem);
            font-weight: 600;
        }

        .banner-vehiculo__left {
            padding-right: 2.25rem;
        }

        @media(min-width:768px) {
            .banner-vehiculo__bg::after {
                right: 2rem;
                bottom: 1.5rem;
                height: 160px;
            }

            .banner-vehiculo__left {
                padding-right: 3rem;
            }
        }

        @media(max-width:600px) {
            .banner-vehiculo__bg::after {
                right: 1rem;
                bottom: 1rem;
                width: min(320px, 70%);
                height: 120px;
            }
        }

        /* ===== Tiles “Muévete en” ===== */
        .tiles {
            display: grid;
            grid-template-columns: 1fr;
            gap: .75rem;
        }

        @media(min-width:768px) {
            .tiles {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .tile {
            position: relative;
            min-height: 280px;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid var(--border);
            box-shadow: 0 18px 50px rgba(15, 23, 42, .10);
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .tile:hover {
            transform: translateY(-3px);
            box-shadow: 0 22px 60px rgba(15, 23, 42, .16);
        }

        .tile__bg {
            position: absolute;
            inset: 0;
            background-size: 105%;
            background-position: center;
            transition: transform .7s ease;
        }

        .tile:hover .tile__bg {
            transform: scale(1.08);
        }

        .tile:focus-visible {
            outline: none;
            box-shadow: 0 0 0 4px rgba(255, 183, 27, .45);
        }

        .tile__bg--tp {
            background-image: url("/sites/default/files/Paginas/28-01-2025/bg-muevete-transporte-publico.jpg");
            background-position: center bottom;
        }

        .tile__bg--bici {
            background-image: url("/sites/default/files/Paginas/28-01-2025/bg-muevete-en-bicicleta.jpg");
            background-position: center 62%;
        }

        .tile__bg--apie {
            background-image: url("/sites/default/files/Paginas/28-01-2025/bg-muevete-en-a-pie.jpg");
            background-position: center 12%;
        }

        .tile__content {
            height: 100%;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            gap: .35rem;
            background: linear-gradient(180deg, rgba(0, 0, 0, .06), rgba(0, 0, 0, .74));
        }

        .tile__content--links p {
            margin: 0;
        }

        .tile__content--links .tile__link {
            display: block;
            width: 100%;
            color: inherit;
            text-decoration: none;
        }

        .tile__content--links .tile__link .tile__pill,
        .tile__content--links .tile__link .tile__hint {
            display: inline-flex;
            align-items: center;
            gap: .35rem;
        }

        .tile__content--links .tile__link:focus-visible {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 183, 27, .6);
            border-radius: 999px;
        }

        .tile__pill {
            align-self: flex-start;
            padding: .35rem .7rem;
            border-radius: 999px;
            background: rgba(0, 0, 0, .72);
            border: 1px solid rgba(255, 255, 255, .25);
            color: #fff;
            font-weight: 900;
            font-size: .82rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, .55);
        }

        .tile__title {
            margin: 0;
            color: #fff;
            font-weight: 900;
            letter-spacing: -0.02em;
            font-size: clamp(1.6rem, 2.7vw, 2.2rem);
            line-height: 1.1;
            text-shadow: 0 10px 25px rgba(0, 0, 0, .55);
        }

        .tile__hint {
            color: rgba(255, 255, 255, .86);
            font-weight: 700;
        }

        @media (prefers-reduced-motion: reduce) {

            .hero-action,
            .tile,
            .tile__bg {
                transition: none !important;
            }

            .tile:hover,
            .hero-action:hover {
                transform: none !important;
                box-shadow: none !important;
            }
        }

        /* ===== Oferta ===== */
        .conectate .offer-card img {
            display: block;
            width: 100%;
        }

        .conectate .offer-card ul {
            margin: 0;
            padding-left: 1.1rem;
        }

        .conectate .offer-card li {
            margin-bottom: .45rem;
            color: #334155;
        }

        .conectate .offer-card .card-body {
            padding: 1rem 1.1rem;
        }

        .conectate .offer-card h3,
        .conectate .offer-card h4 {
            margin-bottom: .5rem;
        }

        .conectate .offer-card h4 {
            margin-top: .6rem;
        }

        .conectate .offer-card ul.mb-2,
        .conectate .offer-card ul.mb-3 {
            margin-bottom: .5rem !important;
        }

        .conectate .offer-card .btn {
            margin-top: .35rem;
        }

        .conectate .offer-card > a > img,
        .conectate .offer-card > img {
            height: 190px;
            object-fit: cover;
            object-position: center;
        }

        /* ===== Restricciones (nuevo layout) ===== */
        .restric-grid {
            display: grid;
            gap: 1.25rem;
            grid-template-columns: 1fr;
            max-width: 980px;
            margin: 0 auto;
        }

        .restric-controls {
            display: flex;
            gap: .6rem;
            justify-content: center;
            flex-wrap: wrap;
            margin: 0 0 1rem 0;
        }

        .restric-toggle {
            border: 1px solid var(--border);
            background: #fff;
            color: #111827;
            font-weight: 800;
            padding: .5rem 1rem;
            border-radius: 999px;
            cursor: pointer;
        }

        .restric-toggle.is-active {
            background: var(--amarillo-soft);
            border-color: #ffd481;
            color: #7a4a00;
        }

        .restric-card.is-hidden {
            display: none;
        }

        .restric-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 22px;
            box-shadow: 0 18px 50px rgba(15, 23, 42, .08);
            padding: 1.25rem 1.4rem;
        }

        .restric-card--ok {
            border-top: 4px solid #22c55e;
        }

        .restric-card--no {
            border-top: 4px solid #ef4444;
        }

        .restric-head {
            display: flex;
            align-items: center;
            gap: .6rem;
            margin-bottom: .85rem;
        }

        .restric-head img {
            width: 22px;
            height: 22px;
        }

        .restric-title {
            margin: 0;
            font-size: 1.12rem;
            font-weight: 900;
            color: #111827;
        }

        .restric-sub {
            margin: .35rem 0 .4rem 0;
            font-weight: 800;
            color: #0f172a;
        }

        .restric-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: .55rem .8rem;
        }

        .restric-list li {
            display: block;
            padding: .55rem .7rem;
            border: 1px solid #eef2f7;
            border-radius: 12px;
            background: #fff;
            color: #111827;
            font-size: 0.98rem;
            line-height: 1.5;
            transition: background .2s ease, border-color .2s ease, box-shadow .2s ease, transform .2s ease;
        }

        .restric-list li:hover {
            background: #fff7e6;
            border-color: #ffd481;
            box-shadow: 0 6px 18px rgba(15, 23, 42, .08);
            transform: translateY(-1px);
        }

        .restric-note {
            margin-top: .9rem;
            padding: .7rem .9rem;
            border-radius: 12px;
            background: var(--amarillo-soft);
            border: 1px solid #ffe0a6;
            color: #7a4a00;
            font-size: .95rem;
        }

        .restric-sep {
            margin: 1rem 0;
            border: 0;
            border-top: 1px solid #e5e7eb;
        }

        @media(max-width:991px) {
            .restric-list {
                grid-template-columns: 1fr;
            }
        }

        /* ===== Mobile ===== */
        @media(max-width:991px) {
            .hero-actions {
                grid-template-columns: 1fr;
            }

            .hero-card {
                position: sticky;
                bottom: 1rem;
            }

            .hero-title {
                font-size: clamp(1.3rem, 4.2vw, 1.9rem);
            }

            .hero-subtitle {
                font-size: 0.98rem;
            }

                .hero__bg {
                    min-height: 520px;
                    background-size: contain;
                    background-image:
                    url("https://www.movilidadbogota.gov.co/sites/default/files/2026-01-30/banner_xs_2.jpeg");
                    background-position: center top;
                }

            .banner-vehiculo {
                min-height: 340px;
            }

            .banner-vehiculo__left {
                padding-right: 1rem;
            }
        }

        @media(max-width:600px) {
            .hero__bg {
                min-height: 600px;
                background-position: center top;
            }

            .hero__content {
                padding: 1rem 0.75rem;
            }

            .hero-card {
                padding: 1rem;
            }

            .hero-actions {
                gap: .75rem;
            }

            .banner-vehiculo__bg {
                background-image:
                    radial-gradient(500px 260px at 20% 10%, rgba(255, 183, 27, .22), transparent 60%),
                    linear-gradient(90deg, rgba(0, 0, 0, .60), rgba(0, 0, 0, .25)),
                    url("/sites/default/files/Paginas/29-01-2025/bg-vehiculo-casa-mobile.jpg");
            }

            .banner-vehiculo {
                min-height: 300px;
            }

            .banner-vehiculo__content {
                padding: 1.1rem;
            }

            .banner-vehiculo h3 {
                font-size: clamp(1.25rem, 5.2vw, 1.6rem);
            }

            .banner-vehiculo p {
                font-size: 0.98rem;
            }

            .banner-vehiculo__bg::after {
                right: .85rem;
                bottom: .85rem;
                width: min(280px, 78%);
                height: 110px;
            }

            .tiles {
                gap: .6rem;
            }

            .tile {
                min-height: 230px;
            }

            .tile__title {
                font-size: clamp(1.35rem, 6vw, 1.8rem);
            }

            .tile__content {
                padding: .85rem;
            }

            .tile__hint {
                font-size: .95rem;
            }
        }
    </style>

    <!-- HERO - FONDO -->
    <section class="hero__bg shadow-soft" id="inicio"></section>

    <div class="container conectate">
        <div class="hero-descripcion">
            <p>
                Jornada liderada por el Distrito que tiene como fin sensibilizar a la ciudadanía sobre la importancia de
                modificar sus hábitos de movilidad hacia la adopción de prácticas más sostenibles.
            </p>
        </div>
    </div>

    <!-- HERO - CONTENIDO -->
    <section class="hero__content">
        <div class="container conectate">
            <div class="hero-card">
                <span class="badge text-bg-warning">Día sin carro y sin moto</span>

                <h2 class="hero-title">Planea tu movilidad en segundos</h2>
                <p class="hero-subtitle">
                    Elige cómo te vas a mover hoy y consulta la oferta y las restricciones de forma rápida.
                </p>

                <div class="hero-actions">
                    <a href="#oferta-transporte" class="hero-action-card">
                        <span class="hero-action-card__icon" aria-hidden="true">
                            <img src="/sites/default/files/2026-01-27/bus.svg"
                                alt="" width="36" height="36">
                        </span>
                        <span class="hero-action-card__text">
                            <span class="hero-action-card__title">Transporte público</span>
                            <span class="hero-action-card__subtitle">Horarios y servicios</span>
                        </span>
                    </a>

                    <a href="#oferta-bici" class="hero-action-card">
                        <span class="hero-action-card__icon" aria-hidden="true">
                            <img src="/sites/default/files/2026-01-27/bicycle.svg"
                                alt="" width="36" height="36">
                        </span>
                        <span class="hero-action-card__text">
                            <span class="hero-action-card__title">Bicicleta</span>
                            <span class="hero-action-card__subtitle">Mapa y vías habilitadas</span>
                        </span>
                    </a>

                    <a href="#oferta-apie" class="hero-action-card">
                        <span class="hero-action-card__icon" aria-hidden="true">
                            <img src="/sites/default/files/2026-01-27/walking.svg"
                                alt="" width="36" height="36">
                        </span>
                        <span class="hero-action-card__text">
                            <span class="hero-action-card__title">A pie</span>
                            <span class="hero-action-card__subtitle">Infraestructura peatonal</span>
                        </span>
                    </a>
                </div>

                <div class="hero-cta">
                    <a href="#restricciones" class="btn btn-danger rounded-pill px-4">Ver restricciones</a>
                    <a href="#oferta" class="btn btn-outline-secondary rounded-pill px-4">Oferta completa</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container conectate my-3">

        <!-- INTRO + VIDEO -->
        <section class="row g-3 g-md-4 section" id="intro">
            <div class="col-12 col-lg-5">
                <div class="card-soft shadow-soft">
                    <div class="card-body intro-card-body">
                        <h3 class="fw-bold mb-2">¿De qué se trata?</h3>
                        <p class="text-secondary mb-3">
                            Esta jornada se lleva a cabo anualmente como resultado de la consulta popular del 29 de octubre
                            de 2000, en la que la ciudadanía votó sí para la realización del Día Sin Carro y Sin Moto en
                            febrero de cada año.
                        </p>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="#muevete" class="btn btn-warning rounded-pill fw-semibold px-4">Muévete sostenible</a>
                            <a href="#vehiculo-casa" class="btn btn-outline-secondary rounded-pill px-4">Deja tu
                                vehículo</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7">
                <div class="card-soft shadow-soft h-100 overflow-hidden">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/zpfuZp0f5uA" title="Video jornada"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- VEHICULO EN CASA -->
        <section id="vehiculo-casa" class="section">
            <div class="banner-vehiculo shadow-soft">
                <div class="banner-vehiculo__bg"></div>
                <div class="banner-vehiculo__content">
                    <div class="row g-3">
                        <div class="col-12 col-lg-7 banner-vehiculo__left">
                            <h3>Deja tu vehículo en casa</h3>
                            <p>Tu mejor plan: moverte sin contaminar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MUEVETE EN -->
        <section id="muevete" class="section">
            <div class="section-head">
                <h2 class="kicker">Muévete en</h2>
                <p class="subkicker">Elige una opción y revisa la información disponible.</p>
            </div>

            <div class="tiles">
                <a class="tile" href="#oferta-transporte" aria-label="Transporte público: ver horarios y servicios">
                    <div class="tile__bg tile__bg--tp"></div>
                    <div class="tile__content">
                        <span class="tile__pill">Recomendado</span>
                        <h3 class="tile__title">Transporte<br>público</h3>
                        <span class="tile__hint">Ver horarios y servicios →</span>
                    </div>
                </a>

                <a class="tile" href="#oferta-bici" aria-label="Bicicleta: mapa y vías habilitadas">
                    <div class="tile__bg tile__bg--bici"></div>
                    <div class="tile__content">
                        <span class="tile__pill">Top</span>
                        <h3 class="tile__title">Bicicleta</h3>
                        <span class="tile__hint">Mapa y vías habilitadas →</span>
                    </div>
                </a>

                <a class="tile" href="#oferta-apie" aria-label="A pie: infraestructura peatonal">
                    <div class="tile__bg tile__bg--apie"></div>
                    <div class="tile__content tile__content--links">
                        <p>
                            <a class="tile__link" href="#oferta-apie" aria-label="A pie: infraestructura peatonal">
                                <span class="tile__pill">Salud</span>
                            </a>
                        </p>
                        <h3 class="tile__title">
                            <a class="tile__link" href="#oferta-apie" aria-label="A pie: infraestructura peatonal">A pie</a>
                        </h3>
                        <p>
                            <a class="tile__link" href="#oferta-apie" aria-label="A pie: infraestructura peatonal">
                                <span class="tile__hint">Infraestructura peatonal →</span>
                            </a>
                        </p>
                    </div>
                </a>
            </div>
        </section>

        <!-- RESTRICCIONES -->
        <section id="restricciones" class="section">
            <div class="section-head">
                <h2 class="kicker">Restricciones de circulación</h2>
                <p class="subkicker">Abre cada sección para ver lo que aplica durante la jornada.</p>
            </div>

            <div class="restric-controls" role="tablist" aria-label="Filtrar restricciones">
                <button type="button" class="restric-toggle is-active" data-filter="all" aria-pressed="true">Ver
                    todas</button>
                <button type="button" class="restric-toggle" data-filter="ok" aria-pressed="false">Pueden
                    circular</button>
                <button type="button" class="restric-toggle" data-filter="no" aria-pressed="false">No pueden
                    circular</button>
            </div>

            <div class="restric-grid">
                <div class="restric-card restric-card--ok" data-type="ok">
                    <div class="restric-head">
                        <img src="/sites/default/files/Paginas/28-01-2025/icon-check.png"
                            alt="">
                        <h3 class="restric-title">Vehículos que podrán circular</h3>
                    </div>
                    <ul class="restric-list">
                        <li>Transporte público</li>
                        <li>Transporte para personas con discapacidad</li>
                        <li>Vehículos de emergencia</li>
                        <li>Transporte escolar que son propiedad de la institución</li>
                        <li>Vehículos con capacidad de más de 10 pasajeros</li>
                        <li>Servicios públicos domiciliarios</li>
                        <li>Destinado al control de tráfico</li>
                        <li>Caravana presidencial</li>
                        <li>Vehículos Militares, Policía, Organismos de Seguridad y CTI seccional Bogotá</li>
                        <li>Vehículos diplomáticos o consulares</li>
                        <li>Motocicletas de vigilancia y seguridad privada</li>
                        <li>Vehículos asignados por la Unidad Nacional de Protección</li>
                        <li>Vehículos eléctricos o cero emisiones (incluye motocicletas)</li>
                        <li>Carrozas fúnebres</li>
                        <li>Motocicletas de mensajería y/o domicilio</li>
                        <li>Control operacional y mantenimiento del SITP</li>
                        <li>Control de emisiones y vertimientos (incluye motocicletas)</li>
                        <li>Transporte de valores</li>
                    </ul>
                    <div class="restric-note">
                        <strong>Tip:</strong> si vas a movilizarte, prioriza transporte público y micromovilidad.
                    </div>
                </div>

                <div class="restric-card restric-card--no" data-type="no">
                    <div class="restric-head">
                        <img src="/sites/default/files/Paginas/28-01-2025/icon-wrong.png"
                            alt="">
                        <h3 class="restric-title">Vehículos que no podrán circular</h3>
                    </div>
                    <p class="restric-sub">Transporte privado</p>
                    <ul class="restric-list">
                        <li>Carros y motos particulares</li>
                        <li>Vehículos y motos de escuelas de conducción</li>
                        <li>Vehículos con permiso de Pico y Placa Solidario</li>
                        <li>Vehículos particulares de medios con placa amarilla</li>
                        <li>Vehículos híbridos</li>
                        <li>Vehículos dedicados a gas</li>
                    </ul>
                    <hr class="restric-sep">
                    <p class="restric-sub">Transporte público</p>
                    <ul class="restric-list">
                        <li>Taxis con placa terminada en 3 y 4</li>
                        <li>Vehículos de carga con restricción</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- OFERTA -->
        <section id="oferta" class="section">
            <div class="section-head">
                <h2 class="kicker">Oferta de movilidad</h2>
                <p class="subkicker">Servicios y capacidades para que planees tu día.</p>
            </div>

            <div class="row g-3">
                <!-- Transporte público -->
                <div class="col-12 col-lg-4" id="oferta-transporte">
                    <div class="card-soft shadow-soft h-100 offer-card">
                        <img src="/sites/default/files/Paginas/28-01-2025/bg-oferta-transporte-publico.jpg"
                            alt="Transporte público">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h3 class="h5 mb-0 fw-bold">Transporte público</h3>
                                <span class="badge text-bg-warning">100%</span>
                            </div>
                            <ul>
                                <li><strong>TransMilenio (troncal y zonal):</strong> 4:00 a.m. – 11:00 p.m.</li>
                                <li><strong>TransMiCable:</strong> 4:30 a.m. – 10:00 p.m.</li>
                                <li><strong>La Rolita:</strong> 4:00 a.m. – 11:00 p.m. (varía según la ruta)</li>
                                <li><strong>Más de 38.000 taxis</strong></li>
                                <li><strong>Buses intermunicipales:</strong> 8 corredores</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Bicicleta -->
                <div class="col-12 col-lg-4" id="oferta-bici">
                    <div class="card-soft shadow-soft h-100 offer-card">
                        <a href="/sites/default/files/2026-01-30/map_1.jpeg"
                            target="_blank" rel="noopener">
                            <img src="/sites/default/files/2026-01-30/map_1.jpeg"
                                alt="Mapa ciclovía">
                        </a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h3 class="h5 mb-0 fw-bold">Bicicleta</h3>
                                <span class="badge text-bg-danger">6:00–20:00</span>
                            </div>
                            <ul class="mb-2">
                                <li><strong>683.9 km</strong> de ciclorrutas, con 3 km de rutas temporales y provisionales.
                                </li>
                                <li><strong>88.58 km</strong> de vías habilitadas (Ciclovía IDRD).</li>
                                <li><strong>3.300</strong> bicicletas compartidas (oriente)</li>
                                <li><strong>+84.100</strong> cupos micromovilidad</li>
                            </ul>
                            <a class="btn btn-outline-secondary rounded-pill w-100" target="_blank" rel="noopener"
                                href="/sites/default/files/2026-01-30/map_1.jpeg">
                                Abrir mapa en otra pestaña
                            </a>
                        </div>
                    </div>
                </div>

                <!-- A pie -->
                <div class="col-12 col-lg-4" id="oferta-apie">
                    <div class="card-soft shadow-soft h-100 offer-card">
                        <img src="/sites/default/files/Paginas/28-01-2025/bg-oferta-a-pie.jpg"
                            alt="A pie">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h3 class="h5 mb-0 fw-bold">A pie</h3>
                                <span class="badge text-bg-light border">Seguro</span>
                            </div>
                            <ul>
                                <li><strong>9.581 kilómetros</strong>(83,369 cuadras) de andenes.</li>
                                <li>Más de <strong>33.200 kilómetros</strong> de red peatonal conectada</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Registro bici -->
                <div class="col-12 col-lg-4" id="oferta-registro-bici">
                    <div class="card-soft shadow-soft h-100 offer-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h3 class="h5 mb-0 fw-bold">Registro bici</h3>
                                <span class="badge text-bg-warning">Pedagogía</span>
                            </div>
                            <p class="text-secondary mb-2">Equipo de pedagogía (con apoyo de centros locales).</p>
                            <ul class="mb-0">
                                <li><strong>Portal del Sur – TransMilenio:</strong> 3:00 p.m. – 6:00 p.m.</li>
                                <li><strong>Av. Boyacá con Calle 26:</strong> 4:00 p.m. – 7:00 p.m.</li>
                                <li><strong>Carrera 7 con Calle 100:</strong> 4:00 p.m. – 7:00 p.m.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ORVI y SDM -->
                <div class="col-12 col-lg-8" id="oferta-orvi-sdm">
                    <div class="card-soft shadow-soft h-100 offer-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h3 class="h5 mb-0 fw-bold">ORVI y SDM</h3>
                                <span class="badge text-bg-warning">Pedagogía</span>
                            </div>
                            <p class="text-secondary mb-2">Secretaría Distrital de la Mujer y equipo de pedagogía SDM.</p>
                            <ul class="mb-0">
                                <li><strong>Campaña “Prudencia cuida tus pasos” (ORVI y SDMujer):</strong> C.C. Plaza de las Américas (9:00 a.m. – 12:00 m) y Universidad Javeriana (10:00 a.m. – 1:00 p.m.).</li>
                                <li><strong>Sketch de cultura dirigida a peatón:</strong> Museo Nacional o Carrera 7 con Calle 19, 9:00 a.m.</li>
                                <li><strong>Puntos ciegos dirigido a ciclistas (registro bici):</strong> Ministerio de Educación, Calle 43 # 57-14, 8:00 a.m. – 12:00 m. (gestión social)</li>
                                <li><strong>Punto pedagógico para usuarios de movilidad eléctrica:</strong> Av. Ciudad de Cali con Calle 17, a la altura de Jumbo de Hayuelos, 4:00 p.m. – 8:00 p.m.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>



@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggles = document.querySelectorAll('.restric-toggle');
        const cards = document.querySelectorAll('.restric-card');
        if (!toggles.length || !cards.length) return;

        function setFilter(filter) {
            toggles.forEach(btn => {
                const active = btn.dataset.filter === filter;
                btn.classList.toggle('is-active', active);
                btn.setAttribute('aria-pressed', active ? 'true' : 'false');
            });

            cards.forEach(card => {
                const type = card.dataset.type;
                const show = filter === 'all' || filter === type;
                card.classList.toggle('is-hidden', !show);
            });
        }

        toggles.forEach(btn => {
            btn.addEventListener('click', () => setFilter(btn.dataset.filter));
        });
    });
</script>
