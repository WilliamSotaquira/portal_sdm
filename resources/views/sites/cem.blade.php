@extends('layouts.app')

@section('title', 'CEM')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<div id="cem">
    <a class="cem-skip" href="#cem-content">Saltar al contenido</a>

    <style>
        #cem, #cem *, #cem *::before, #cem *::after { box-sizing: border-box; }
        #cem {
            all: initial;
            display:block;
            position:relative;
            isolation:isolate;
            --c1:#0a2458; --c2:#dff6ff; --c3:#133b8c; --c4:#4bcfff; --c5:#9cecff;
            --bg:#eef7fd; --tx:#0a1733; --tx2:#071c42; --wh:#fff; --bd:#b8d8ea;
            --timeline-card-h-mobile:clamp(540px,74vh,620px);
            --timeline-card-h-desktop:clamp(410px,56vh,470px);
            background:
                radial-gradient(circle at top, rgba(156,236,255,.18), transparent 38%),
                linear-gradient(180deg, #f7fcff 0%, var(--bg) 32%, #e8f4fb 100%);
            font-family:"Work Sans",sans-serif; color:var(--tx); line-height:1.5;
        }
        #cem :where(a) { color:inherit; text-decoration:none; }
        #cem :where(button, input, select, textarea) { font:inherit; color:inherit; letter-spacing:inherit; }
        #cem :where(button) { appearance:none; -webkit-appearance:none; border:0; background:none; }
        #cem :where(img) { max-width:100%; }
        #cem [hidden] { display:none !important; }
        #cem .cem-stack { display:grid; gap:1rem; align-content:start; }
        #cem .cem-app,
        #cem .cem-header,
        #cem .cem-tabs,
        #cem .cem-panel,
        #cem .timeline-wrap,
        #cem .timeline-card,
        #cem .timeline-track {
            position:relative;
        }
        #cem .cem-skip {
            position:absolute; top:-100%; left:0; z-index:99; padding:12px 16px; background:var(--c1);
            color:var(--wh); text-decoration:none; font-weight:700; border-radius:0 0 8px 0;
        }
        #cem .cem-skip:focus, #cem .cem-skip:focus-visible { top:0; }
        #cem a:focus-visible, #cem button:focus-visible, #cem iframe:focus-visible {
            outline:3px solid var(--c5); outline-offset:3px;
        }
        #cem .cem-app {
            position:relative; background:var(--bg); border:1px solid rgba(19,59,140,.18); overflow:hidden;
            box-shadow:0 24px 48px rgba(7,28,66,.08);
        }
        #cem .cem-app::before {
            content:""; position:absolute; inset:0; pointer-events:none;
            background:
                linear-gradient(90deg, rgba(255,255,255,.18) 0, rgba(255,255,255,0) 24%),
                repeating-linear-gradient(90deg, rgba(19,59,140,.035) 0 1px, transparent 1px 32px),
                repeating-linear-gradient(0deg, rgba(19,59,140,.028) 0 1px, transparent 1px 32px);
            opacity:.65;
        }
        #cem .cem-header {
            position:relative; overflow:hidden; padding:18px 20px 20px; text-align:center; background:var(--c1); color:var(--wh);
            box-shadow:0 6px 16px rgba(0,0,0,.22);
        }
        #cem .cem-header::before {
            content:""; position:absolute; inset:0; pointer-events:none;
            background:
                radial-gradient(circle at 50% 0%, rgba(156,236,255,.28), transparent 42%),
                repeating-linear-gradient(90deg, rgba(156,236,255,.08) 0 1px, transparent 1px 24px);
            opacity:.75;
        }
        #cem .cem-title {
            position:relative; z-index:1; margin:0; font:800 1.55rem/1 "Montserrat",sans-serif; letter-spacing:.12em; text-transform:uppercase;
        }
        #cem .cem-tagline { position:relative; z-index:1; max-width:920px; margin:.45rem auto 0; color:rgba(255,255,255,.82); line-height:1.45; font-size:.82rem; }
        #cem .cem-tabs {
            position:relative; display:flex; flex-wrap:wrap; background:linear-gradient(180deg,#17469e 0%, var(--c3) 100%);
            box-shadow:inset 0 1px 0 rgba(255,255,255,.14), inset 0 -1px 0 rgba(5,15,38,.22);
        }
        #cem .cem-tabs::after {
            content:""; position:absolute; inset:0; pointer-events:none;
            background:repeating-linear-gradient(90deg, rgba(156,236,255,.08) 0 1px, transparent 1px 28px);
            opacity:.45;
        }
        #cem .cem-tab {
            flex:1 1 220px; min-height:58px; border:0; background:var(--c3); color:var(--wh); cursor:pointer;
            font:700 .95rem/1.2 "Montserrat",sans-serif; padding:15px 14px; transition:.2s;
            border-right:1px solid rgba(255,255,255,.08); position:relative; z-index:1;
        }
        #cem .cem-tab:hover { background:var(--c2); color:var(--tx); }
        #cem .cem-tab.is-active { background:var(--wh); color:var(--c1); }
        #cem .cem-panel { display:none; min-height:72vh; }
        #cem .cem-panel.is-active { display:block; }
        #cem .cem-panel--default {
            position:relative; padding:2rem; background:
                radial-gradient(circle at top right, rgba(76,207,255,.12), transparent 24%),
                linear-gradient(180deg, rgba(255,255,255,.98) 0%, #f5fbff 100%);
        }
        #cem .cem-panel--default::before {
            content:""; position:absolute; inset:0; pointer-events:none;
            background:
                repeating-linear-gradient(90deg, rgba(19,59,140,.03) 0 1px, transparent 1px 30px),
                repeating-linear-gradient(0deg, rgba(19,59,140,.022) 0 1px, transparent 1px 30px);
        }
        #cem .cem-panel--historia {
            position:relative; padding:2rem; background:
                radial-gradient(circle at top center, rgba(76,207,255,.14), transparent 24%),
                linear-gradient(180deg, #08245a 0%, var(--tx2) 100%);
        }
        #cem .cem-panel--historia::before {
            content:""; position:absolute; inset:0; pointer-events:none;
            background:
                linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,0)),
                repeating-linear-gradient(90deg, rgba(156,236,255,.04) 0 1px, transparent 1px 36px),
                repeating-linear-gradient(0deg, rgba(156,236,255,.03) 0 1px, transparent 1px 36px);
        }
        #cem .cem-grid { display:grid; gap:1.5rem; grid-template-columns:1fr; }
        #cem .cem-grid > * { position:relative; z-index:1; }
        #cem .cem-heading {
            position:relative; z-index:1; margin:0 0 1rem; color:var(--c1);
            font:800 clamp(1.8rem,1.4rem + 1vw,2.5rem)/1.05 "Montserrat",sans-serif; text-transform:uppercase;
        }
        #cem .cem-hero {
            position:relative; min-height:340px; padding:1.5rem; border-radius:1rem; overflow:hidden;
            display:flex; flex-direction:column; justify-content:space-between; gap:1rem; background:#07163f; isolation:isolate;
        }
        #cem .cem-hero::before {
            content:""; position:absolute; inset:0;
            background:
                linear-gradient(180deg,rgba(2,9,27,.18) 0%,rgba(2,9,27,.58) 52%,rgba(2,9,27,.9) 100%),
                url('https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/fondo-hero.jpg') center/cover no-repeat;
            z-index:-3;
        }
        #cem .cem-hero::after {
            content:""; position:absolute; left:0; right:0; bottom:0; height:88px;
            background:url('https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/franja.png') center bottom/cover no-repeat;
            opacity:.92; z-index:-1; pointer-events:none;
        }
        #cem .cem-badge {
            display:inline-flex; width:max-content; padding:.45rem .8rem; border-radius:999px; font-size:.74rem; font-weight:700;
            letter-spacing:.08em; text-transform:uppercase; color:#eff8ff; background:rgba(3,17,51,.88); border:1px solid rgba(143,215,255,.28);
        }
        #cem .cem-hero-mark { display:grid; justify-items:center; gap:.85rem; text-align:center; }
        #cem .cem-hero-icon { width:min(100%,180px); height:auto; display:block; filter:drop-shadow(0 10px 30px rgba(4,198,255,.18)); }
        #cem .cem-hero-org {
            margin:0; max-width:13ch; color:var(--wh); text-wrap:balance;
            font:800 clamp(1.45rem,1.1rem + 1.2vw,2.3rem)/1.05 "Montserrat",sans-serif;
            text-shadow:0 4px 18px rgba(0,0,0,.35);
        }
        #cem .cem-hero h3 {
            margin:0; line-height:.9; letter-spacing:.08em; text-transform:uppercase;
            font:800 clamp(4.5rem,3.2rem + 5vw,7.5rem)/.9 "Montserrat",sans-serif;
            color:#6fdcff; background:linear-gradient(180deg,#9fe8ff 0%,#63d7ff 100%);
            -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;
            text-shadow:none;
        }
        #cem .cem-hero-copy {
            margin:0; max-width:34ch; padding:.9rem 1rem 1.1rem; color:#eff8ff; line-height:1.6; font-weight:500;
            background:rgba(3,17,51,.76); border:1px solid rgba(143,215,255,.24); border-radius:.9rem;
            box-shadow:0 12px 28px rgba(0,0,0,.2);
        }
        #cem .cem-card {
            position:relative; overflow:hidden; padding:1.35rem; border-radius:1rem; line-height:1.7;
            box-shadow:0 18px 28px rgba(7,28,66,.08);
        }
        #cem .cem-card::before {
            content:""; position:absolute; inset:0; pointer-events:none;
            background:
                radial-gradient(circle at top right, rgba(156,236,255,.3), transparent 24%),
                linear-gradient(135deg, rgba(255,255,255,.22), rgba(255,255,255,0) 38%);
            opacity:.7;
        }
        #cem .cem-card::after {
            content:""; position:absolute; inset:0; pointer-events:none;
            background:repeating-linear-gradient(90deg, rgba(19,59,140,.035) 0 1px, transparent 1px 26px);
            opacity:.35;
        }
        #cem .cem-card h3, #cem .cem-card p { position:relative; z-index:1; }
        #cem .cem-card h3 { margin:0 0 .65rem; font:700 1.12rem/1.25 "Montserrat",sans-serif; }
        #cem .cem-card p { margin:0; }
        #cem .cem-card--lime { background:linear-gradient(180deg,#edfaff 0%,#dff6ff 100%); color:var(--tx); border:1px solid rgba(19,59,140,.12); }
        #cem .cem-card--dark { background:linear-gradient(180deg,#12357d 0%,#0a2458 100%); color:var(--wh); }
        #cem .timeline-wrap { position:relative; z-index:1; max-width:1100px; margin:0 auto; }
        #cem .timeline-wrap::before {
            content:""; position:absolute; inset:-30px -10px auto; height:180px; pointer-events:none;
            background:radial-gradient(circle at top center, rgba(76,207,255,.18), transparent 58%);
            filter:blur(10px);
        }
        #cem .timeline-card {
            display:grid; grid-template-columns:1fr; grid-template-rows:230px minmax(0,1fr);
            height:var(--timeline-card-h-mobile); overflow:hidden; border-radius:1rem;
            border:1px solid rgba(156,236,255,.14); background:rgba(7,28,66,.42); box-shadow:0 18px 36px rgba(0,0,0,.22);
            transform:translateY(0); transition:transform .45s ease, box-shadow .45s ease, border-color .45s ease;
        }
        #cem .timeline-card.is-animating {
            transform:translateY(4px); box-shadow:0 10px 24px rgba(0,0,0,.18); border-color:rgba(156,236,255,.24);
        }
        #cem .timeline-media { position:relative; min-height:0; height:100%; background:#08152f; }
        #cem .timeline-media::after {
            content:""; position:absolute; inset:0; pointer-events:none;
            background:
                linear-gradient(180deg, rgba(5,15,38,.05), rgba(5,15,38,.42)),
                repeating-linear-gradient(90deg, rgba(156,236,255,.06) 0 1px, transparent 1px 28px);
        }
        #cem .timeline-media img {
            width:100%; height:100%; display:block; object-fit:cover;
            transform:scale(1); opacity:1; transition:transform .55s ease, opacity .35s ease, filter .45s ease;
        }
        #cem .timeline-card.is-animating .timeline-media img { transform:scale(1.04); opacity:.45; filter:saturate(1.1) blur(1px); }
        #cem .timeline-body {
            position:relative; min-height:0; padding:1.5rem; display:flex; flex-direction:column; justify-content:center; gap:.35rem;
            background:
                linear-gradient(180deg, rgba(255,255,255,.02), rgba(255,255,255,0)),
                radial-gradient(circle at top right, rgba(76,207,255,.12), transparent 28%);
        }
        #cem .timeline-body::before {
            content:""; position:absolute; inset:0; pointer-events:none;
            background:
                repeating-linear-gradient(90deg, rgba(156,236,255,.05) 0 1px, transparent 1px 32px),
                linear-gradient(135deg, rgba(255,255,255,.04), rgba(255,255,255,0) 35%);
            opacity:.55;
        }
        #cem .timeline-date, #cem .timeline-title, #cem .timeline-desc {
            position:relative; z-index:1; opacity:1; transform:translateY(0);
            transition:opacity .28s ease, transform .36s ease;
        }
        #cem .timeline-card.is-animating .timeline-date,
        #cem .timeline-card.is-animating .timeline-title,
        #cem .timeline-card.is-animating .timeline-desc {
            opacity:0; transform:translateY(10px);
        }
        #cem .timeline-date { margin:0 0 .65rem; color:var(--c4); font:800 .92rem/1 "Montserrat",sans-serif; letter-spacing:.08em; text-transform:uppercase; }
        #cem .timeline-title { margin:0 0 .9rem; color:var(--wh); font:700 clamp(1.5rem,1.25rem + .8vw,2.3rem)/1.08 "Montserrat",sans-serif; text-wrap:balance; }
        #cem .timeline-desc { margin:0; max-width:58ch; color:rgba(255,255,255,.9); line-height:1.8; }
        #cem .timeline-track {
            position:relative; width:min(100%,1020px); height:94px; margin:2rem auto 0;
            background:radial-gradient(circle at center, rgba(76,207,255,.08), transparent 62%);
        }
        #cem .timeline-rail, #cem .timeline-fill { position:absolute; left:0; right:0; top:22px; height:2px; }
        #cem .timeline-rail { background:rgba(255,255,255,.16); }
        #cem .timeline-fill {
            width:0; right:auto; background:linear-gradient(90deg,var(--c4),var(--c5));
            box-shadow:0 0 14px rgba(76,207,255,.45); transition:width .55s cubic-bezier(.22,1,.36,1);
        }
        #cem .timeline-node {
            position:absolute; top:0; width:46px; height:46px; padding:0; border-radius:999px; overflow:visible; cursor:pointer;
            border:2px solid rgba(255,255,255,.24); background:#10316c;
            opacity:0; transform:translateY(18px) scale(.88);
            transition:
                transform .35s ease,
                border-color .35s ease,
                box-shadow .35s ease,
                background-color .35s ease,
                opacity .45s ease;
        }
        #cem .timeline-track.is-ready .timeline-node { opacity:1; transform:translateY(0) scale(1); }
        #cem .timeline-node img { width:100%; height:100%; border-radius:999px; object-fit:cover; display:block; }
        #cem .timeline-node:hover { transform:translateY(-2px) scale(1.05); }
        #cem .timeline-node.is-done { border-color:rgba(255,255,255,.9); background:var(--c4); }
        #cem .timeline-node.is-active {
            transform:translateY(-4px) scale(1.12); border-color:var(--c5);
            box-shadow:0 0 0 4px rgba(76,207,255,.18),0 0 18px rgba(76,207,255,.42);
        }
        #cem .timeline-year {
            position:absolute; top:58px; left:50%; transform:translateX(-50%); white-space:nowrap;
            color:rgba(255,255,255,.8); font-size:.78rem; font-weight:700;
            opacity:.72; transition:opacity .3s ease, transform .3s ease;
        }
        #cem .timeline-node.is-active .timeline-year { opacity:1; transform:translateX(-50%) translateY(-2px); }
        #cem .timeline-controls { display:flex; flex-wrap:wrap; justify-content:center; gap:.75rem; margin-top:1.8rem; }
        #cem .timeline-btn {
            position:relative; overflow:hidden; min-height:44px; padding:.72rem 1.05rem; border-radius:999px; cursor:pointer; color:var(--wh);
            background:rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.18); font-weight:700;
        }
        #cem .timeline-btn::before {
            content:""; position:absolute; inset:0; pointer-events:none;
            background:linear-gradient(135deg, rgba(255,255,255,.12), rgba(255,255,255,0) 45%);
        }
        #cem .timeline-btn:hover { background:rgba(76,207,255,.16); }
        #cem .timeline-btn.is-active { background:var(--c4); border-color:var(--c4); color:var(--c1); }
        #cem .timeline-counter {
            width:max-content; margin:.9rem auto 0; padding:.35rem .75rem; text-align:center; color:rgba(255,255,255,.82);
            background:rgba(255,255,255,.06); border:1px solid rgba(156,236,255,.16); border-radius:999px;
        }
        @media (prefers-reduced-motion:reduce) {
            #cem .timeline-card,
            #cem .timeline-media img,
            #cem .timeline-date,
            #cem .timeline-title,
            #cem .timeline-desc,
            #cem .timeline-fill,
            #cem .timeline-node,
            #cem .timeline-year {
                transition:none !important;
                animation:none !important;
            }
            #cem .timeline-track.is-ready .timeline-node,
            #cem .timeline-node,
            #cem .timeline-node.is-active,
            #cem .timeline-node:hover {
                opacity:1;
                transform:none;
            }
        }
        #cem #cem-panel-recorrido {
            position:relative; padding:1.2rem; background:
                radial-gradient(circle at top center, rgba(76,207,255,.12), transparent 26%),
                linear-gradient(180deg, #081f4c 0%, #06162f 100%);
        }
        #cem #cem-panel-recorrido::before {
            content:""; position:absolute; inset:0; pointer-events:none;
            background:
                repeating-linear-gradient(90deg, rgba(156,236,255,.04) 0 1px, transparent 1px 30px),
                repeating-linear-gradient(0deg, rgba(156,236,255,.03) 0 1px, transparent 1px 30px);
        }
        #cem .cem-iframe {
            position:relative; z-index:1; width:100%; height:85vh; display:block; border:1px solid rgba(156,236,255,.18);
            border-radius:1rem; background:#000; box-shadow:0 20px 40px rgba(0,0,0,.28);
        }
        @media (min-width:992px) {
            #cem .cem-grid { grid-template-columns:1fr 1fr; align-items:stretch; }
            #cem .timeline-card { grid-template-columns:42% 58%; grid-template-rows:none; height:var(--timeline-card-h-desktop); }
        }
        @media (max-width:900px) {
            #cem .timeline-track { overflow-x:auto; overflow-y:hidden; padding-bottom:8px; }
            #cem .timeline-rail, #cem .timeline-fill { width:960px; max-width:none; }
        }
        @media (max-width:576px) {
            #cem .cem-title { font-size:1.25rem; }
            #cem .cem-tagline { font-size:.75rem; }
            #cem .cem-panel--default, #cem .cem-panel--historia { padding:1.25rem 1rem; }
            #cem .cem-hero { min-height:420px; padding:1rem; }
            #cem .cem-hero::after { height:72px; }
            #cem .cem-hero-copy { padding:.85rem .9rem 1rem; font-size:.9rem; }
            #cem .timeline-card { grid-template-rows:210px minmax(0,1fr); }
            #cem .timeline-body { padding:1.1rem 1rem 1.2rem; }
            #cem .timeline-title { font-size:clamp(1.35rem,1.15rem + .7vw,1.8rem); }
            #cem .timeline-desc { font-size:.95rem; line-height:1.7; }
            #cem #cem-panel-recorrido { padding:1rem; }
            #cem .timeline-controls { flex-direction:column; }
            #cem .timeline-btn { width:100%; }
        }
    </style>

    <div class="cem-app">
        <header class="cem-header">
            <h1 class="cem-title" aria-describedby="cem-tagline">CEM</h1>
            <p class="cem-tagline" id="cem-tagline">
                El Centro Estrategico de Movilidad es la entidad encargada de la planificacion, gestion y coordinacion
                de estrategias orientadas a optimizar el transito y la movilidad urbana.
            </p>
        </header>

        <div class="cem-tabs" role="tablist" aria-label="Secciones del CEM">
            <button class="cem-tab is-active" id="cem-tab-pm" type="button" role="tab" aria-selected="true" aria-controls="cem-panel-pm" data-tab="pm">PM SIT</button>
            <button class="cem-tab" id="cem-tab-historia" type="button" role="tab" aria-selected="false" aria-controls="cem-panel-historia" data-tab="historia" tabindex="-1">HISTORIA CGT</button>
            <button class="cem-tab" id="cem-tab-recorrido" type="button" role="tab" aria-selected="false" aria-controls="cem-panel-recorrido" data-tab="recorrido" tabindex="-1">RECORRIDO VIRTUAL CGT</button>
        </div>

        <main id="cem-content">
            <section class="cem-panel cem-panel--default is-active" id="cem-panel-pm" role="tabpanel" aria-labelledby="cem-tab-pm" data-panel="pm">
                <div class="cem-grid">
                    <div>
                        <h2 class="cem-heading">ABC</h2>
                        <div class="cem-hero" aria-labelledby="cem-hero-title" aria-describedby="cem-hero-copy">
                            <span class="cem-badge">Plan Maestro</span>
                            <div class="cem-hero-mark">
                                <img class="cem-hero-icon" src="https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/logo-suanet-hero.png" alt="" aria-hidden="true">
                                <p class="cem-hero-org">Centro Estrategico de Movilidad</p>
                                <h3 id="cem-hero-title">CEM</h3>
                            </div>
                            <p class="cem-hero-copy" id="cem-hero-copy">Portada de referencia del Plan Maestro del Sistema Inteligente de Transporte, construida con texto real y elementos decorativos para mantener legibilidad y accesibilidad.</p>
                        </div>
                    </div>

                    <div class="cem-stack">
                        <article class="cem-card cem-card--lime">
                            <h3>Documento Tecnico de Soporte</h3>
                            <p>Documento que recopila los estudios tecnicos, diagnosticos y analisis que fundamentan la formulacion del plan de manejo del Sitio de Interes Tecnico.</p>
                        </article>

                        <article class="cem-card cem-card--dark">
                            <h3>Resolucion</h3>
                            <p>Acto administrativo mediante el cual se adopta oficialmente el plan de manejo y se establecen las directrices para la conservacion y uso sostenible del area protegida.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="cem-panel cem-panel--historia" id="cem-panel-historia" role="tabpanel" aria-labelledby="cem-tab-historia" data-panel="historia" hidden>
                <div class="timeline-wrap">
                    <div class="timeline-card" id="cem-timeline-card" aria-live="polite" role="status">
                        <div class="timeline-media">
                            <img id="cem-timeline-image" src="" alt="">
                        </div>
                        <div class="timeline-body">
                            <div class="timeline-date" id="cem-timeline-date"></div>
                            <h3 class="timeline-title" id="cem-timeline-title"></h3>
                            <p class="timeline-desc" id="cem-timeline-desc"></p>
                        </div>
                    </div>

                    <div class="timeline-track" id="cem-timeline-track" tabindex="0" aria-label="Linea de tiempo de la historia del CGT">
                        <div class="timeline-rail"></div>
                        <div class="timeline-fill" id="cem-timeline-fill"></div>
                    </div>

                    <div class="timeline-controls">
                        <button class="timeline-btn" id="cem-prev" type="button">&#9664; Anterior</button>
                        <button class="timeline-btn is-active" id="cem-play" type="button">Pausa</button>
                        <button class="timeline-btn" id="cem-next" type="button">Siguiente &#9654;</button>
                    </div>
                    <div class="timeline-counter" id="cem-counter"></div>
                </div>
            </section>

            <section class="cem-panel" id="cem-panel-recorrido" role="tabpanel" aria-labelledby="cem-tab-recorrido" data-panel="recorrido" hidden>
                <iframe
                    id="cem-iframe"
                    class="cem-iframe"
                    title="Recorrido Virtual del Centro de Gestion de Transito"
                    data-src="https://suanet-test.movilidadbogota.gov.co/cem/"
                    allowfullscreen
                    allow="xr-spatial-tracking; fullscreen"></iframe>
            </section>
        </main>
    </div>

    <script>
        (function () {
            var root = document.getElementById("cem");
            if (!root) return;

            var tabs = Array.prototype.slice.call(root.querySelectorAll("[data-tab]"));
            var panels = Array.prototype.slice.call(root.querySelectorAll("[data-panel]"));
            var iframe = root.querySelector("#cem-iframe");
            var iframeLoaded = false;

            function activateTab(key, focusTab) {
                tabs.forEach(function (tab) {
                    var active = tab.getAttribute("data-tab") === key;
                    tab.classList.toggle("is-active", active);
                    tab.setAttribute("aria-selected", active ? "true" : "false");
                    tab.setAttribute("tabindex", active ? "0" : "-1");
                    if (active && focusTab) tab.focus();
                });

                panels.forEach(function (panel) {
                    var active = panel.getAttribute("data-panel") === key;
                    panel.classList.toggle("is-active", active);
                    if (active) panel.removeAttribute("hidden"); else panel.setAttribute("hidden", "hidden");
                });

                if (key === "historia") initTimeline();
                if (key === "recorrido" && !iframeLoaded && iframe) {
                    iframe.src = iframe.dataset.src || "";
                    iframeLoaded = true;
                }
            }

            tabs.forEach(function (tab, index) {
                tab.addEventListener("click", function () {
                    activateTab(tab.getAttribute("data-tab"), false);
                });

                tab.addEventListener("keydown", function (event) {
                    var nextIndex = index;
                    if (event.key === "ArrowRight" || event.key === "ArrowDown") nextIndex = (index + 1) % tabs.length;
                    else if (event.key === "ArrowLeft" || event.key === "ArrowUp") nextIndex = (index - 1 + tabs.length) % tabs.length;
                    else if (event.key === "Home") nextIndex = 0;
                    else if (event.key === "End") nextIndex = tabs.length - 1;
                    else return;
                    event.preventDefault();
                    activateTab(tabs[nextIndex].getAttribute("data-tab"), true);
                });
            });

            var milestones = [
                { year: "1935", title: "El primer semaforo", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/1935.jpg", alt: "Primer semaforo instalado en Bogota en 1935", desc: "Se instalo en la Avenida Jimenez con Carrera 7 y dio inicio al control moderno del trafico." },
                { year: "Anos 50", title: "Semaforos colgantes", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/1950s.jpg", alt: "Semaforos colgantes en Bogota durante los anos 50", desc: "Se instalaron nuevos semaforos suspendidos en el centro de las intersecciones, mejorando la visibilidad y la circulacion." },
                { year: "Anos 60", title: "La Red Blanca", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/1960s.png", alt: "Red interconectada de semaforos en los anos 60", desc: "Se implemento la primera red interconectada de semaforos con postes blancos y franjas negras." },
                { year: "Anos 70", title: "La era electronica", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/1970s.png", alt: "Coordinacion centralizada de la red semaforica en los anos 70", desc: "Inicio la coordinacion centralizada de la red semaforica desde la central de Paloquemao y llegaron las primeras olas verdes." },
                { year: "Anos 80", title: "Limitaciones del cobre", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/1980s.jpg", alt: "Ampliacion de la red de semaforos en los anos 80", desc: "Se amplio la red de semaforos con nuevas centrales en Muzu y Chico y aparecieron los primeros semaforos peatonales." },
                { year: "Anos 90", title: "Controladores programables", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/1990s.jpg", alt: "Controladores semidigitales en los anos 90", desc: "Inicio la transicion de controladores analogos a semidigitales y se adopto la carcasa negra para mejorar el contraste." },
                { year: "Anos 2000", title: "Eficiencia e inclusion", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/2000s.png", alt: "Tecnologia LED y botones peatonales sonoros en los anos 2000", desc: "Se empezo a usar tecnologia LED y se instalaron botones peatonales sonoros para mejorar la accesibilidad." },
                { year: "2015", title: "Centro de Gestion de Transito", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/2015.jpg", alt: "Inicio de operacion del CGT en 2015", desc: "El CGT inicio operacion con 120 camaras y 376 sensores para monitorear las vias y gestionar incidentes en tiempo real." },
                { year: "2018", title: "Transformacion de la comunicacion semaforica", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/2018.jpg", alt: "Conexion de semaforos mediante fibra optica en 2018", desc: "Bogota conecto todos los semaforos a una unica central mediante fibra optica y completo la transicion a tecnologia LED." },
                { year: "2019", title: "Semaforos inteligentes", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/2019.jpg", alt: "Videodetectores y Prudencia en 2019", desc: "Llegaron los primeros videodetectores para optimizar tiempos semaforicos y aparecio Prudencia en los semaforos peatonales." },
                { year: "2020", title: "Tecnologia para la seguridad vial", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/2020.jpg", alt: "Camaras de fotodeteccion en 2020", desc: "Se instalaron 70 camaras de fotodeteccion para reducir la siniestralidad y mejorar el cumplimiento de las normas." },
                { year: "2025", title: "Rumbo al Centro Estrategico de Movilidad", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/2025.jpg", alt: "Radares pedagogicos y videodetectores en 2025", desc: "Se adiciono el streaming de 1300 videodetectores y se implementaron 15 radares pedagogicos conectados al CGT." },
                { year: "2026", title: "Centro Estrategico de Movilidad", image: "https://www.movilidadbogota.gov.co/sites/default/files/2026-04-14/2026.jpg", alt: "Interconexion de camaras en el CEM durante 2026", desc: "Se interconectaron 10000 camaras en un ecosistema de monitoreo y gestion de trafico que anticipa afectaciones en las vias." }
            ];

            var current = 0;
            var playing = true;
            var dwellMs = 5000;
            var timer = null;
            var initialized = false;
            var nodes = [];
            var reduceMotion = window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches;

            var track = root.querySelector("#cem-timeline-track");
            var fill = root.querySelector("#cem-timeline-fill");
            var card = root.querySelector("#cem-timeline-card");
            var image = root.querySelector("#cem-timeline-image");
            var date = root.querySelector("#cem-timeline-date");
            var title = root.querySelector("#cem-timeline-title");
            var desc = root.querySelector("#cem-timeline-desc");
            var counter = root.querySelector("#cem-counter");
            var prevBtn = root.querySelector("#cem-prev");
            var nextBtn = root.querySelector("#cem-next");
            var playBtn = root.querySelector("#cem-play");

            function applyTimelineItem(item, index, pct) {
                image.src = item.image;
                image.alt = item.alt;
                date.textContent = item.year;
                title.textContent = item.title;
                desc.textContent = item.desc;
                fill.style.width = pct + "%";
                counter.textContent = (index + 1) + " / " + milestones.length;
                nodes.forEach(function (node, nodeIndex) {
                    node.classList.toggle("is-active", nodeIndex === index);
                    node.classList.toggle("is-done", nodeIndex <= index);
                });
            }

            function renderTimeline(index) {
                var item = milestones[index];
                var pct = milestones.length > 1 ? (index / (milestones.length - 1)) * 100 : 0;

                if (reduceMotion || !card) {
                    applyTimelineItem(item, index, pct);
                    return;
                }

                card.classList.add("is-animating");
                window.clearTimeout(renderTimeline._swapTimer);
                window.clearTimeout(renderTimeline._cleanupTimer);

                renderTimeline._swapTimer = window.setTimeout(function () {
                    applyTimelineItem(item, index, pct);
                }, 150);

                renderTimeline._cleanupTimer = window.setTimeout(function () {
                    card.classList.remove("is-animating");
                }, 420);
            }

            function schedule() {
                clearTimeout(timer);
                if (!playing) return;
                timer = setTimeout(function () {
                    goTo(current + 1);
                }, dwellMs);
            }

            function goTo(index) {
                if (index < 0) index = milestones.length - 1;
                if (index >= milestones.length) index = 0;
                current = index;
                renderTimeline(current);
                schedule();
            }

            function togglePlay() {
                playing = !playing;
                playBtn.textContent = playing ? "Pausa" : "Reproducir";
                playBtn.classList.toggle("is-active", playing);
                schedule();
            }

            function buildNodes() {
                var gap = milestones.length > 1 ? 100 / (milestones.length - 1) : 0;
                milestones.forEach(function (item, index) {
                    var node = document.createElement("button");
                    var img = document.createElement("img");
                    var year = document.createElement("span");
                    node.type = "button";
                    node.className = "timeline-node";
                    node.style.left = "calc(" + (gap * index) + "% - 23px)";
                    node.setAttribute("aria-label", "Ir al hito " + item.year + " " + item.title);
                    img.src = item.image;
                    img.alt = "";
                    img.setAttribute("aria-hidden", "true");
                    year.className = "timeline-year";
                    year.setAttribute("aria-hidden", "true");
                    year.textContent = item.year;
                    node.appendChild(img);
                    node.appendChild(year);
                    node.style.transitionDelay = reduceMotion ? "0ms" : (index * 45) + "ms";
                    node.addEventListener("click", function () { goTo(index); });
                    track.appendChild(node);
                    nodes.push(node);
                });

                if (!reduceMotion) {
                    requestAnimationFrame(function () {
                        track.classList.add("is-ready");
                    });
                } else {
                    track.classList.add("is-ready");
                }

                track.addEventListener("keydown", function (event) {
                    if (event.key === "ArrowRight" || event.key === "ArrowDown") { event.preventDefault(); goTo(current + 1); }
                    else if (event.key === "ArrowLeft" || event.key === "ArrowUp") { event.preventDefault(); goTo(current - 1); }
                    else if (event.key === "Home") { event.preventDefault(); goTo(0); }
                    else if (event.key === "End") { event.preventDefault(); goTo(milestones.length - 1); }
                });

                prevBtn.addEventListener("click", function () { goTo(current - 1); });
                nextBtn.addEventListener("click", function () { goTo(current + 1); });
                playBtn.addEventListener("click", togglePlay);
            }

            function initTimeline() {
                if (!initialized) {
                    initialized = true;
                    buildNodes();
                }
                clearTimeout(timer);
                playing = true;
                playBtn.textContent = "Pausa";
                playBtn.classList.add("is-active");
                goTo(0);
            }

            activateTab("pm", false);
        })();
    </script>
</div>
@endsection
