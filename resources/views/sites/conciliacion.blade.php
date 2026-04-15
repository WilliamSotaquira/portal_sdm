@extends('layouts.app')

@section('title', 'conciliacion')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<div id="conciliacion">
    <a class="conciliacion-skip" href="#conciliacion-content">Saltar al contenido</a>

    <style>
        #conciliacion, #conciliacion *, #conciliacion *::before, #conciliacion *::after { box-sizing: border-box !important; }
        #conciliacion {
            all: initial;
            display: block;
            position: relative;
            isolation: isolate;
            --cc-bg: #fcfaf7;
            --cc-surface: #ffffff;
            --cc-surface-soft: #f7f1e7;
            --cc-text: #18190f;
            --cc-muted: #5f5652;
            --cc-line: #e9dfd6;
            --cc-accent: #e4032e;
            --cc-accent-strong: #c90b00;
            --cc-accent-deep: #aa1023;
            --cc-accent-soft: #fab62d;
            --cc-accent-soft-2: #ffde09;
            --cc-shadow: 0 24px 56px rgba(26, 31, 15, 0.10);
            background: #ffffff !important;
            color: var(--cc-text) !important;
            font-family: "Manrope", sans-serif !important;
            font-size: 18px !important;
            line-height: 1.55 !important;
        }
        #conciliacion :where(main, section, article, aside, header, footer, nav, figure, figcaption) { display: block; }
        #conciliacion :where(h1, h2, h3, h4, h5, h6, p, ul, ol, li, dl, dt, dd, figure, blockquote) { margin: 0; padding: 0; }
        #conciliacion :where(ul, ol) { list-style: none; }
        #conciliacion :where(a, button, input, select, textarea, summary, h1, h2, h3, h4, h5, h6, p, ul, ol, li, span, strong) {
            font-family: inherit;
            line-height: inherit;
            letter-spacing: inherit;
        }
        #conciliacion :where(a) { color: var(--cc-accent-strong); text-decoration: none; }
        #conciliacion :where(button, input, select, textarea, summary) { font: inherit !important; color: inherit !important; }
        #conciliacion :where(button) {
            appearance: none !important; -webkit-appearance: none !important; border: 0 !important; background: none !important;
            padding: 0; margin: 0;
        }
        #conciliacion :where(summary) { list-style: none; }
        #conciliacion :where(img, svg) { max-width: 100% !important; display: block !important; height: auto; }
        #conciliacion [hidden] { display: none !important; }
        #conciliacion .conciliacion-sr-only {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border: 0 !important;
        }
        #conciliacion .conciliacion-skip {
            position: absolute; top: -100%; left: 0; z-index: 20; padding: 12px 16px; border-radius: 0 0 12px 0;
            background: var(--cc-text); color: #fff; font-weight: 700;
        }
        #conciliacion .conciliacion-skip:focus, #conciliacion .conciliacion-skip:focus-visible { top: 0; }
        #conciliacion a:focus-visible, #conciliacion button:focus-visible, #conciliacion summary:focus-visible {
            outline: 3px solid var(--cc-accent); outline-offset: 4px;
        }
        #conciliacion a,
        #conciliacion a:link,
        #conciliacion a:visited {
            color: var(--cc-accent-strong);
        }
        #conciliacion a:not(.conciliacion-pill):not(.conciliacion-skip) {
            text-decoration: underline;
            text-decoration-thickness: .08em;
            text-underline-offset: .16em;
        }
        #conciliacion a:hover,
        #conciliacion a:active {
            color: var(--cc-accent);
        }
        #conciliacion .conciliacion-shell { width: min(1120px, calc(100% - 32px)) !important; margin: 0 auto !important; padding: 44px 0 72px !important; }
        #conciliacion .conciliacion-section { margin-top: 72px; }
        #conciliacion .conciliacion-heading {
            margin: 0; color: var(--cc-accent-strong) !important; text-align: center; font-size: clamp(2rem, 1.55rem + 1.8vw, 3rem);
            line-height: 1.02; font-weight: 800; letter-spacing: -.04em;
        }
        #conciliacion .conciliacion-subheading {
            width: min(680px, 100%); margin: 14px auto 0; color: var(--cc-muted); text-align: center; font-size: 1.08rem;
        }
        #conciliacion .conciliacion-hero {
            display: grid !important; grid-template-columns: minmax(0, 1.02fr) minmax(320px, .92fr) !important; align-items: center !important;
            gap: 48px !important; min-height: 560px; padding: 34px 0 10px !important;
        }
        #conciliacion .conciliacion-hero-copy { max-width: 560px; text-align: left !important; }
        #conciliacion .conciliacion-hero-title {
            margin: 0; color: var(--cc-text) !important; text-align: left !important;
            font-size: clamp(2.55rem, 1.95rem + 2vw, 3.95rem) !important; line-height: .94 !important; letter-spacing: -.055em; font-weight: 800;
        }
        #conciliacion .conciliacion-highlight { color: var(--cc-accent-strong); }
        #conciliacion .conciliacion-hero-text {
            margin: 24px 0 0; max-width: 54ch; color: var(--cc-muted) !important; text-align: left !important; font-size: 1.08rem; line-height: 1.85;
        }
        #conciliacion .conciliacion-actions { display: flex !important; flex-wrap: wrap !important; gap: 12px !important; margin-top: 28px; }
        #conciliacion .conciliacion-pill {
            display: inline-flex !important; align-items: center !important; justify-content: center !important; min-height: 48px; padding: 0 18px !important;
            border-radius: 999px; border: 1px solid transparent; font-size: 1rem; font-weight: 700 !important; line-height: 1.35; text-align: center;
            transition: transform .2s ease, box-shadow .2s ease, background-color .2s ease, border-color .2s ease;
        }
        #conciliacion a.conciliacion-pill, #conciliacion button.conciliacion-pill {
            text-decoration: none !important;
            opacity: 1 !important;
            filter: none !important;
        }
        #conciliacion .conciliacion-pill:hover { transform: translateY(-1px); }
        #conciliacion .conciliacion-pill--primary {
            background: linear-gradient(90deg, var(--cc-accent-strong), var(--cc-accent)) !important;
            border-color: var(--cc-accent-strong) !important;
            color: #ffffff !important;
            box-shadow: 0 16px 28px rgba(228, 3, 46, 0.24) !important;
        }
        #conciliacion .conciliacion-pill--primary,
        #conciliacion .conciliacion-pill--primary:link,
        #conciliacion .conciliacion-pill--primary:visited,
        #conciliacion .conciliacion-pill--primary:hover,
        #conciliacion .conciliacion-pill--primary:active,
        #conciliacion .conciliacion-pill--primary span,
        #conciliacion .conciliacion-pill--primary strong {
            color: #ffffff !important;
            -webkit-text-fill-color: #ffffff !important;
        }
        #conciliacion .conciliacion-pill--secondary {
            background: var(--cc-accent-soft) !important;
            border-color: var(--cc-accent-soft) !important;
            color: #18190f !important;
            box-shadow: 0 10px 22px rgba(250, 182, 45, 0.18) !important;
        }
        #conciliacion .conciliacion-pill--secondary:hover,
        #conciliacion .conciliacion-pill--secondary:active {
            background: var(--cc-accent-soft-2) !important;
            color: #18190f !important;
        }
        #conciliacion .conciliacion-hero-figure { position: relative; width: min(100%, 520px); margin-left: auto; }
        #conciliacion .conciliacion-hero-card {
            position: relative; overflow: hidden; border-radius: 28px; background: var(--cc-surface); box-shadow: var(--cc-shadow);
        }
        #conciliacion .conciliacion-hero-image { width: 100%; aspect-ratio: 0.82; object-fit: cover; }
        #conciliacion .conciliacion-hero-stat {
            position: absolute; left: 18px; bottom: 18px; display: grid; gap: 2px; min-width: 148px; padding: 14px 16px 12px;
            max-width: calc(100% - 36px);
            border: 1px solid rgba(250, 182, 45, 1); border-radius: 18px; background: rgba(255, 248, 235, 0.96);
            box-shadow: 0 18px 34px rgba(24, 25, 15, 0.16);
            backdrop-filter: blur(8px);
        }
        #conciliacion .conciliacion-hero-stat strong { font-size: 1.6rem; line-height: 1; color: var(--cc-accent-strong); }
        #conciliacion .conciliacion-hero-stat span { color: #4a403c; font-size: .88rem; font-weight: 600; }
        #conciliacion .conciliacion-benefits {
            display: grid !important; grid-template-columns: repeat(4, minmax(0, 1fr)) !important; gap: 12px !important; margin-top: 34px;
        }
        #conciliacion .conciliacion-benefit {
            min-height: 124px; padding: 20px 18px; border: 1px solid #e5d6cd !important; border-radius: 18px;
            background: rgba(255,255,255,0.72); box-shadow: 0 8px 24px rgba(24, 25, 15, 0.04);
        }
        #conciliacion .conciliacion-benefit-icon {
            display: inline-flex; align-items: center; justify-content: center; width: 30px; height: 30px;
            border-radius: 10px; background: var(--cc-accent-soft); color: var(--cc-accent-strong); font-size: .96rem; font-weight: 800;
        }
        #conciliacion .conciliacion-benefit h3 { margin: 14px 0 8px; color: var(--cc-accent-strong) !important; font-size: 1.1rem; line-height: 1.25; font-weight: 800; }
        #conciliacion .conciliacion-benefit p { margin: 0; color: var(--cc-muted); font-size: .98rem; line-height: 1.55; }
        #conciliacion .conciliacion-banner {
            position: relative; width: min(100%, 780px); margin: 36px auto 0; overflow: hidden; border-radius: 24px; box-shadow: var(--cc-shadow); background: var(--cc-accent-soft);
        }
        #conciliacion .conciliacion-banner::after {
            content: "";
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: linear-gradient(90deg, rgba(228,53,31,.24) 0%, rgba(201,11,0,.18) 35%, rgba(247,179,37,.22) 100%);
        }
        #conciliacion .conciliacion-banner img { width: 100%; aspect-ratio: 3.15; object-fit: cover; }
        #conciliacion #ruta-atencion { scroll-margin-top: 2rem; }
    </style>

    <main id="conciliacion-content" class="conciliacion-shell">
        <p id="conciliacion-external-note" class="conciliacion-sr-only">Este enlace se abre en una pestaña nueva.</p>
        <section class="conciliacion-hero" aria-labelledby="conciliacion-title">
            <div class="conciliacion-hero-copy">
                <h1 id="conciliacion-title" class="conciliacion-hero-title">
                    Centro de conciliación para las personas involucradas en siniestros <span class="conciliacion-highlight">viales</span>
                </h1>
                <p class="conciliacion-hero-text">
                    El centro ofrece a todas las <strong>personas de los estratos 1, 2 y 3,</strong> involucradas en un siniestro de tránsito en Bogotá, un espacio de diálogo orientado a la construcción de acuerdos mutuos para solucionar conflictos relacionados con daños materiales o lesiones personales, siempre que el valor reclamado no supere los 150 SMLMV.
                </p>
                <div class="conciliacion-actions">
                    <a class="conciliacion-pill conciliacion-pill--primary" href="https://forms.gle/CrX9Cpoty4AU6dqa8" target="_blank" rel="noopener noreferrer" aria-describedby="conciliacion-external-note">Diligenciar formulario de consentimiento<span class="conciliacion-sr-only">, se abre en una pestaña nueva</span></a>
                    <a class="conciliacion-pill conciliacion-pill--secondary" href="#ruta-atencion">Ruta de atención</a>
                </div>
            </div>

            <div class="conciliacion-hero-figure">
                <div class="conciliacion-hero-card">
                    <img class="conciliacion-hero-image" src="https://www.movilidadbogota.gov.co/sites/default/files/2026-04-15/hero-ccm.jpeg" alt="Equipo del Centro de Conciliación atendiendo a ciudadanía en una jornada de conciliación" decoding="async">
                </div>
                <div class="conciliacion-hero-stat" aria-label="Servicio gratuito al cien por ciento">
                    <strong>100%</strong>
                    <span>Servicio gratuito</span>
                </div>
            </div>
        </section>

        <section class="conciliacion-section" aria-labelledby="beneficios-title">
            <h2 id="beneficios-title" class="conciliacion-heading">Beneficios</h2>
            <div class="conciliacion-benefits">
                <article class="conciliacion-benefit">
                    <span class="conciliacion-benefit-icon" aria-hidden="true">$</span>
                    <h3>Gratuito</h3>
                    <p>Sin costos para las partes involucradas.</p>
                </article>
                <article class="conciliacion-benefit">
                    <span class="conciliacion-benefit-icon" aria-hidden="true">+</span>
                    <h3>Ágil</h3>
                    <p>Solución rápida y efectiva de conflictos.</p>
                </article>
                <article class="conciliacion-benefit">
                    <span class="conciliacion-benefit-icon" aria-hidden="true">✓</span>
                    <h3>Seguridad jurídica</h3>
                    <p>Acuerdos con validez legal.</p>
                </article>
                <article class="conciliacion-benefit">
                    <span class="conciliacion-benefit-icon" aria-hidden="true">•</span>
                    <h3>Atención presencial y virtual</h3>
                    <p>Flexibilidad y facilidad en el acceso al servicio.</p>
                </article>
            </div>

            <div class="conciliacion-banner">
                <img src="https://www.movilidadbogota.gov.co/sites/default/files/2026-04-15/pxl_20260320_155948684.webp" alt="Sesión de conciliación con personas usuarias y equipo del Centro de Conciliación" loading="lazy" decoding="async">
            </div>
        </section>

        <style>
            #conciliacion .conciliacion-route { margin-top: 34px; padding: 22px 0 0; }
            #conciliacion .conciliacion-route-track {
                display: grid !important; grid-template-columns: repeat(5, minmax(0, 1fr)) !important; gap: 18px !important; position: relative; margin-top: 22px;
            }
            #conciliacion .conciliacion-route-track::before {
                content: ""; position: absolute; top: 26px; left: 10%; right: 10%; height: 1px; background: var(--cc-line);
            }
            #conciliacion .conciliacion-step {
                position: relative; text-align: center; padding: 6px 8px 0;
                opacity: .6; transition: opacity .35s ease, transform .35s ease;
            }
            #conciliacion .conciliacion-step:focus-visible {
                outline: 3px solid var(--cc-accent);
                outline-offset: 6px;
                border-radius: 18px;
            }
            #conciliacion .conciliacion-step::before {
                content: "";
                position: absolute;
                top: -6px;
                left: 50%;
                width: 112px;
                height: 112px;
                border-radius: 999px;
                transform: translateX(-50%) scale(.78);
                background:
                    radial-gradient(circle, rgba(228,3,46,.18) 0%, rgba(228,3,46,.1) 38%, rgba(228,3,46,0) 72%);
                opacity: 0;
                transition: opacity .35s ease, transform .45s ease;
                pointer-events: none;
            }
            #conciliacion .conciliacion-step-circle {
                position: relative; z-index: 1; display: inline-flex; align-items: center; justify-content: center; width: 52px; height: 52px;
                margin-bottom: 18px; border: 2px solid #ddd3cd; border-radius: 999px; background: var(--cc-surface); color: var(--cc-muted);
                font-weight: 800; font-size: 1rem; transition: border-color .35s ease, color .35s ease, transform .35s ease, box-shadow .35s ease;
            }
            #conciliacion .conciliacion-step:first-child .conciliacion-step-circle { border-color: var(--cc-accent-strong); color: var(--cc-accent-strong); }
            #conciliacion .conciliacion-step-title { margin: 0; color: var(--cc-accent-strong) !important; font-size: 1.08rem; line-height: 1.35; font-weight: 800; transition: color .35s ease; }
            #conciliacion .conciliacion-step-text { margin: 10px 0 0; color: var(--cc-muted); font-size: .96rem; line-height: 1.6; transition: color .35s ease; }
            #conciliacion .conciliacion-step.is-active {
                opacity: 1;
                transform: translateY(-2px);
            }
            #conciliacion .conciliacion-step.is-active::before {
                opacity: 1;
                transform: translateX(-50%) scale(1);
            }
            #conciliacion .conciliacion-step.is-active .conciliacion-step-circle {
                border-color: var(--cc-accent-strong);
                color: var(--cc-accent-strong);
                transform: scale(1.06);
                box-shadow: 0 0 0 8px rgba(228,3,46,.08);
            }
            #conciliacion .conciliacion-step.is-active .conciliacion-step-title {
                color: var(--cc-accent-strong) !important;
            }
            #conciliacion .conciliacion-step.is-active .conciliacion-step-text {
                color: #4d403a;
            }
            #conciliacion .conciliacion-step.is-read {
                opacity: .88;
            }
            #conciliacion .conciliacion-docs-wrap {
                margin-top: 36px; padding: 44px 32px !important; border-top: 1px solid var(--cc-accent-soft) !important; border-bottom: 1px solid var(--cc-accent-soft) !important; background: linear-gradient(180deg, rgba(250,182,45,.18) 0%, rgba(255,255,255,.72) 100%) !important;
            }
            #conciliacion .conciliacion-docs { width: min(720px, 100%); margin: 0 auto; }
            #conciliacion .conciliacion-docs-list { display: grid !important; gap: 10px !important; margin-top: 28px; }
            #conciliacion .conciliacion-docs details { border: 1px solid var(--cc-line) !important; border-radius: 16px !important; background: var(--cc-surface) !important; overflow: hidden !important; }
            #conciliacion .conciliacion-docs details:focus-within { border-color: var(--cc-accent-strong) !important; box-shadow: 0 0 0 3px rgba(228, 3, 46, 0.16); }
            #conciliacion .conciliacion-docs summary {
                list-style: none; display: flex !important; align-items: center !important; justify-content: space-between !important; gap: 14px !important; padding: 18px 20px !important; min-height: 56px; cursor: pointer;
                font-weight: 800; font-size: 1.04rem;
            }
            #conciliacion .conciliacion-docs summary:hover { background: rgba(247, 179, 37, 0.22); }
            #conciliacion .conciliacion-docs summary::-webkit-details-marker { display: none; }
            #conciliacion .conciliacion-docs-title { display: inline-flex !important; align-items: center !important; gap: 10px !important; }
            #conciliacion .conciliacion-docs-mark {
                display: inline-flex !important; align-items: center !important; justify-content: center !important; width: 22px; height: 22px; border-radius: 999px;
                background: var(--cc-accent-soft); color: var(--cc-accent-strong); font-size: .78rem; font-weight: 800;
            }
            #conciliacion .conciliacion-docs-chevron { color: var(--cc-muted); transition: transform .2s ease; }
            #conciliacion .conciliacion-docs details[open] .conciliacion-docs-chevron { transform: rotate(180deg); }
            #conciliacion .conciliacion-docs-body { padding: 0 20px 20px; }
            #conciliacion .conciliacion-docs-note { margin: 0 0 14px; color: var(--cc-muted); font-size: .98rem; line-height: 1.6; }
            #conciliacion .conciliacion-docs-ol { display: grid !important; gap: 10px !important; margin: 0; padding: 0; list-style: none; }
            #conciliacion .conciliacion-docs-ol li { display: grid !important; grid-template-columns: 26px 1fr !important; gap: 10px !important; color: var(--cc-text); font-size: .98rem; line-height: 1.55; }
            #conciliacion .conciliacion-docs-ol strong { color: var(--cc-accent-strong); font-size: .86rem; letter-spacing: .04em; }
            #conciliacion .conciliacion-docs-callout { padding: 14px 16px; border-radius: 12px; background: rgba(250, 182, 45, 0.18); color: #5c4b00; font-size: .98rem; line-height: 1.6; }
            #conciliacion .conciliacion-contact {
                margin-top: 44px; overflow: hidden; border: 1px solid var(--cc-line) !important; border-radius: 28px !important; background: var(--cc-surface) !important; box-shadow: var(--cc-shadow) !important;
            }
            #conciliacion .conciliacion-contact-grid { display: grid !important; grid-template-columns: minmax(0, 1fr) minmax(280px, .9fr) !important; }
            #conciliacion .conciliacion-contact-info { padding: 28px 28px 32px; }
            #conciliacion .conciliacion-contact-title {
                margin: 0 0 22px; font-size: clamp(1.6rem, 1.2rem + 1vw, 2.15rem); line-height: 1.05; font-weight: 800;
            }
            #conciliacion .conciliacion-contact-list { display: grid !important; gap: 14px !important; margin: 0; padding: 0; list-style: none; }
            #conciliacion .conciliacion-contact-item { display: grid !important; grid-template-columns: 34px 1fr !important; gap: 12px !important; align-items: start !important; }
            #conciliacion .conciliacion-contact-bullet {
                display: inline-flex !important; align-items: center !important; justify-content: center !important; width: 28px; height: 28px; margin-top: 2px;
                border-radius: 999px; border: 1px solid var(--cc-accent-soft); background: rgba(250, 182, 45, 0.18); color: var(--cc-accent-strong); font-size: .82rem; font-weight: 800;
            }
            #conciliacion .conciliacion-contact-item strong { display: block; margin-bottom: 2px; font-size: 1rem; }
            #conciliacion .conciliacion-contact-item span, #conciliacion .conciliacion-contact-item a {
                color: var(--cc-muted); font-size: .98rem; line-height: 1.5; word-break: break-word;
            }
            #conciliacion .conciliacion-contact-action { margin-top: 24px; }
            #conciliacion .conciliacion-contact-item a:not(.conciliacion-pill) {
                text-decoration: underline;
                text-underline-offset: .16em;
                text-decoration-thickness: .08em;
            }
            #conciliacion .conciliacion-brand-panel {
                display: grid !important; place-items: center !important; padding: 26px; background: linear-gradient(180deg, rgba(250,182,45,.14) 0%, rgba(250,182,45,.22) 100%) !important;
            }
            #conciliacion .conciliacion-brand-card {
                width: min(100%, 360px); aspect-ratio: 1 / 1; display: grid !important; place-items: center !important; padding: 28px; background: #fffdf4 !important; box-shadow: inset 0 0 0 12px rgba(247,179,37,.28) !important;
            }
            #conciliacion .conciliacion-brand-lockup { text-align: center; }
            #conciliacion .conciliacion-brand-mark {
                width: min(100%, 300px);
                height: auto;
                margin: 0 auto 18px;
                display: block !important;
            }
            #conciliacion .conciliacion-brand-title { margin: 0; font-size: clamp(2rem, 1.55rem + 1.2vw, 3rem); line-height: .96; font-weight: 900; letter-spacing: -.05em; }
            #conciliacion .conciliacion-brand-meta { margin: 12px 0 0; color: var(--cc-muted); font-size: .88rem; }
            @media (max-width: 1024px) {
                #conciliacion .conciliacion-hero { grid-template-columns: 1fr !important; gap: 28px !important; min-height: 0; }
                #conciliacion .conciliacion-hero-copy, #conciliacion .conciliacion-hero-figure { max-width: none; width: 100%; margin-left: 0; }
                #conciliacion .conciliacion-benefits { grid-template-columns: repeat(2, minmax(0, 1fr)) !important; }
                #conciliacion .conciliacion-route-track { grid-template-columns: 1fr !important; }
                #conciliacion .conciliacion-route-track::before { display: none; }
                #conciliacion .conciliacion-step { text-align: left; display: grid !important; grid-template-columns: 52px 1fr !important; gap: 16px !important; align-items: start !important; }
                #conciliacion .conciliacion-step::before {
                    left: 26px;
                    top: -12px;
                    width: 92px;
                    height: 92px;
                    transform: scale(.78);
                }
                #conciliacion .conciliacion-step.is-active::before {
                    transform: scale(1);
                }
                #conciliacion .conciliacion-step-circle { margin-bottom: 0; }
                #conciliacion .conciliacion-contact-grid { grid-template-columns: 1fr !important; }
            }
            @media (max-width: 720px) {
                #conciliacion .conciliacion-shell { width: min(100% - 24px, 1120px); padding: 28px 0 54px; }
                #conciliacion .conciliacion-section { margin-top: 56px; }
                #conciliacion .conciliacion-hero-title { font-size: clamp(2.2rem, 1.85rem + 3vw, 2.9rem) !important; }
                #conciliacion .conciliacion-actions { flex-direction: column; align-items: stretch !important; }
                #conciliacion .conciliacion-pill { width: 100%; }
                #conciliacion .conciliacion-benefits { grid-template-columns: 1fr !important; }
                #conciliacion .conciliacion-hero-image { aspect-ratio: 0.92; }
                #conciliacion .conciliacion-hero-stat { left: 12px; right: 12px; bottom: 12px; min-width: 0; }
                #conciliacion .conciliacion-docs-wrap { padding: 34px 18px; }
                #conciliacion .conciliacion-contact-info, #conciliacion .conciliacion-brand-panel { padding: 22px 18px 24px; }
                #conciliacion .conciliacion-brand-card { box-shadow: inset 0 0 0 8px rgba(247,179,37,.28); }
            }
            @media (max-width: 480px) {
                #conciliacion .conciliacion-shell { width: min(100% - 20px, 1120px); }
                #conciliacion .conciliacion-hero-title { font-size: clamp(1.95rem, 1.7rem + 3vw, 2.45rem) !important; line-height: .98 !important; }
                #conciliacion .conciliacion-hero-text,
                #conciliacion .conciliacion-subheading,
                #conciliacion .conciliacion-step-text,
                #conciliacion .conciliacion-docs-note,
                #conciliacion .conciliacion-docs-ol li,
                #conciliacion .conciliacion-contact-item span,
                #conciliacion .conciliacion-contact-item a { font-size: .94rem; }
                #conciliacion .conciliacion-hero-stat strong { font-size: 1.45rem; }
            }
            @media (prefers-reduced-motion: reduce) {
                #conciliacion * { scroll-behavior: auto; transition: none !important; animation: none !important; }
            }
            @media (forced-colors: active) {
                #conciliacion .conciliacion-pill,
                #conciliacion .conciliacion-docs details,
                #conciliacion .conciliacion-contact,
                #conciliacion .conciliacion-benefit,
                #conciliacion .conciliacion-hero-card,
                #conciliacion .conciliacion-hero-stat,
                #conciliacion .conciliacion-step-circle {
                    forced-color-adjust: auto;
                    border: 1px solid CanvasText !important;
                }
            }
        </style>

        <section id="ruta-atencion" class="conciliacion-section" aria-labelledby="ruta-title">
            <h2 id="ruta-title" class="conciliacion-heading">Ruta de Atención</h2>
            <p class="conciliacion-subheading">Siga estos pasos para completar su proceso de conciliación de manera exitosa.</p>
            <div class="conciliacion-route">
                <ol class="conciliacion-route-track" aria-label="Secuencia de la ruta de atención">
                    <li class="conciliacion-step" tabindex="0"><div class="conciliacion-step-circle" aria-hidden="true">1</div><div><h3 class="conciliacion-step-title">Solicitud</h3><p class="conciliacion-step-text">Descargue y diligencie el formato de solicitud de conciliación.</p></div></li>
                    <li class="conciliacion-step" tabindex="0"><div class="conciliacion-step-circle" aria-hidden="true">2</div><div><h3 class="conciliacion-step-title">Consentimiento</h3><p class="conciliacion-step-text">Diligencie el formulario de consentimiento de ingreso y adjunte los documentos requeridos.</p></div></li>
                    <li class="conciliacion-step" tabindex="0"><div class="conciliacion-step-circle" aria-hidden="true">3</div><div><h3 class="conciliacion-step-title">Verificación</h3><p class="conciliacion-step-text">Una vez verificada la información suministrada, recibirá respuesta del centro con la fecha de audiencia, si aplica.</p></div></li>
                    <li class="conciliacion-step" tabindex="0"><div class="conciliacion-step-circle" aria-hidden="true">4</div><div><h3 class="conciliacion-step-title">Conciliación</h3><p class="conciliacion-step-text">En la fecha y hora programadas se realizará la audiencia de conciliación.</p></div></li>
                    <li class="conciliacion-step" tabindex="0"><div class="conciliacion-step-circle" aria-hidden="true">5</div><div><h3 class="conciliacion-step-title">Finalización</h3><p class="conciliacion-step-text">Se levantará el acta correspondiente del caso.</p></div></li>
                </ol>
            </div>
        </section>

        <section class="conciliacion-section">
            <div class="conciliacion-docs-wrap">
                <div class="conciliacion-docs">
                    <h2 class="conciliacion-heading">Documentación Requerida</h2>
                    <div class="conciliacion-docs-list">
                        <details open>
                            <summary><span class="conciliacion-docs-title"><span class="conciliacion-docs-mark" aria-hidden="true">1</span>Documentos generales</span><span class="conciliacion-docs-chevron" aria-hidden="true">⌃</span></summary>
                            <div class="conciliacion-docs-body">
                                <ol class="conciliacion-docs-ol">
                                    <li><strong>01</strong><span>Copia de la cédula de ciudadanía.</span></li>
                                    <li><strong>02</strong><span>Formato de solicitud de conciliación.</span></li>
                                    <li><strong>03</strong><span>Recibo de servicio público del domicilio del solicitante, para verificar estrato.</span></li>
                                </ol>
                            </div>
                        </details>
                        <details>
                            <summary><span class="conciliacion-docs-title"><span class="conciliacion-docs-mark" aria-hidden="true">2</span>Documentos opcionales</span><span class="conciliacion-docs-chevron" aria-hidden="true">⌃</span></summary>
                            <div class="conciliacion-docs-body">
                                <ol class="conciliacion-docs-ol">
                                    <li><strong>01</strong><span>IPAT (Informe Policial).</span></li>
                                    <li><strong>02</strong><span>Fotos o videos, en caso de choque simple.</span></li>
                                    <li><strong>03</strong><span>Cotizaciones de reparación de vehículos.</span></li>
                                    <li><strong>04</strong><span>Facturas de gastos relacionados.</span></li>
                                    <li><strong>05</strong><span>Otros documentos que soporten reclamaciones económicas.</span></li>
                                    <li><strong>06</strong><span>Historia clínica, si aplica.</span></li>
                                    <li><strong>07</strong><span>Licencia de tránsito.</span></li>
                                </ol>
                            </div>
                        </details>
                        <details>
                            <summary><span class="conciliacion-docs-title"><span class="conciliacion-docs-mark" aria-hidden="true">!</span>Tener en cuenta</span><span class="conciliacion-docs-chevron" aria-hidden="true">⌃</span></summary>
                            <div class="conciliacion-docs-body">
                                <p class="conciliacion-docs-note">Recomendaciones importantes para presentar la documentación de forma correcta y evitar retrasos en el trámite.</p>
                                <div class="conciliacion-docs-callout">Para personas jurídicas: anexar copia del Certificado de Existencia y Representación Legal, con vigencia no mayor a 30 días, y el poder otorgado por el representante legal, si este no es el convocante.</div>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </section>

        <section class="conciliacion-section" aria-labelledby="contacto-title">
            <div class="conciliacion-contact">
                <div class="conciliacion-contact-grid">
                    <div class="conciliacion-contact-info">
                        <h2 id="contacto-title" class="conciliacion-contact-title">Contacto</h2>
                        <ul class="conciliacion-contact-list">
                            <li class="conciliacion-contact-item"><span class="conciliacion-contact-bullet" aria-hidden="true">•</span><div><strong>Dirección</strong><span>Calle 13 # 37-35, Bogotá D.C.</span></div></li>
                            <li class="conciliacion-contact-item"><span class="conciliacion-contact-bullet" aria-hidden="true">@</span><div><strong>Correo electrónico</strong><a href="mailto:conciliacionsdm@movilidadbogota.gov.co">conciliacionsdm@movilidadbogota.gov.co</a></div></li>
                            <li class="conciliacion-contact-item"><span class="conciliacion-contact-bullet" aria-hidden="true">☎</span><div><strong>Teléfono</strong><span>(601) 3649400 opción 2</span></div></li>
                            <li class="conciliacion-contact-item"><span class="conciliacion-contact-bullet" aria-hidden="true">◷</span><div><strong>Horario de atención</strong><span>Lunes a viernes: 8:00 a.m. a 5:00 p.m.</span></div></li>
                        </ul>
                        <div class="conciliacion-contact-action">
                            <a class="conciliacion-pill conciliacion-pill--primary" href="https://docs.google.com/forms/d/1AGliBULkPugMrha6Y_bR24wZP1_xH2Z1Px9zckKVEiI/edit?ts=695fc1ce&pli=1" target="_blank" rel="noopener noreferrer" aria-describedby="conciliacion-external-note">Solicite su cita de conciliación<span class="conciliacion-sr-only">, se abre en una pestaña nueva</span></a>
                        </div>
                    </div>
                    <div class="conciliacion-brand-panel" aria-hidden="true">
                        <div class="conciliacion-brand-card">
                            <div class="conciliacion-brand-lockup">
                                <img class="conciliacion-brand-mark" src="https://www.movilidadbogota.gov.co/sites/default/files/2026-04-15/logo%20centro%20de%20conciliacion.png" alt="" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        (function () {
            var root = document.getElementById("conciliacion");
            if (!root) return;
            var externalTitleText = "Centro de conciliación para personas involucradas en siniestros viales";

            Array.prototype.slice.call(document.querySelectorAll("h1.title")).forEach(function (titleNode) {
                var titleText = (titleNode.textContent || "").replace(/\s+/g, " ").trim();
                if (titleText === externalTitleText) {
                    titleNode.hidden = true;
                    titleNode.setAttribute("aria-hidden", "true");
                }
            });

            var reduceMotion = window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches;
            var steps = Array.prototype.slice.call(root.querySelectorAll(".conciliacion-route-track .conciliacion-step"));
            var currentStep = 0;
            var stepTimer = null;
            var dwellMs = 3400;

            if (!steps.length) return;

            function setActiveStep(index) {
                steps.forEach(function (step, stepIndex) {
                    var isActive = stepIndex === index;
                    step.classList.toggle("is-active", isActive);
                    step.classList.toggle("is-read", stepIndex < index);
                    if (isActive) step.setAttribute("aria-current", "step");
                    else step.removeAttribute("aria-current");
                });
            }

            function scheduleNextStep() {
                window.clearTimeout(stepTimer);
                if (reduceMotion) return;
                stepTimer = window.setTimeout(function () {
                    currentStep = (currentStep + 1) % steps.length;
                    setActiveStep(currentStep);
                    scheduleNextStep();
                }, dwellMs);
            }

            steps.forEach(function (step, index) {
                step.addEventListener("mouseenter", function () {
                    currentStep = index;
                    setActiveStep(currentStep);
                    scheduleNextStep();
                });

                step.addEventListener("focusin", function () {
                    currentStep = index;
                    setActiveStep(currentStep);
                    scheduleNextStep();
                });
            });

            setActiveStep(currentStep);
            scheduleNextStep();
        })();
    </script>
</div>

@endsection
