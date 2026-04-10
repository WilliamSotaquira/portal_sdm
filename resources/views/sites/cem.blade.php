@extends('layouts.app')

@section('title', 'CEM')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<div id="cem">
    <a class="cem-skip" href="#cem-content">Saltar al contenido</a>

    <style>
        #cem, #cem * { box-sizing: border-box; }
        #cem {
            --c1:#4c531e; --c2:#a9ba18; --c3:#879225; --c4:#bed000; --c5:#dbf000;
            --bg:#edeff0; --tx:#000; --tx2:#363636; --wh:#fff; --bd:#c9cec5;
            font-family:"Work Sans",sans-serif; color:var(--tx);
        }
        #cem .cem-skip {
            position:absolute; top:-100%; left:0; z-index:99; padding:12px 16px; background:var(--c1);
            color:var(--wh); text-decoration:none; font-weight:700; border-radius:0 0 8px 0;
        }
        #cem .cem-skip:focus, #cem .cem-skip:focus-visible { top:0; }
        #cem a:focus-visible, #cem button:focus-visible, #cem iframe:focus-visible {
            outline:3px solid var(--c5); outline-offset:3px;
        }
        #cem .cem-app { background:var(--bg); border:1px solid rgba(76,83,30,.15); overflow:hidden; }
        #cem .cem-header {
            padding:18px 20px 20px; text-align:center; background:var(--c1); color:var(--wh);
            box-shadow:0 6px 16px rgba(0,0,0,.22);
        }
        #cem .cem-title {
            margin:0; font:800 1.55rem/1 "Montserrat",sans-serif; letter-spacing:.12em; text-transform:uppercase;
        }
        #cem .cem-tagline { max-width:920px; margin:.45rem auto 0; color:rgba(255,255,255,.82); line-height:1.45; font-size:.82rem; }
        #cem .cem-tabs { display:flex; flex-wrap:wrap; background:var(--c3); }
        #cem .cem-tab {
            flex:1 1 220px; min-height:58px; border:0; background:var(--c3); color:var(--wh); cursor:pointer;
            font:700 .95rem/1.2 "Montserrat",sans-serif; padding:15px 14px; transition:.2s;
        }
        #cem .cem-tab:hover { background:var(--c2); color:var(--tx); }
        #cem .cem-tab.is-active { background:var(--wh); color:var(--c1); }
        #cem .cem-panel { display:none; min-height:72vh; }
        #cem .cem-panel.is-active { display:block; }
        #cem .cem-panel--default { padding:2rem; background:var(--wh); }
        #cem .cem-panel--historia { padding:2rem; background:var(--tx2); }
        #cem .cem-grid { display:grid; gap:1.5rem; grid-template-columns:1fr; }
        #cem .cem-heading { margin:0 0 1rem; color:var(--c1); font:800 clamp(1.8rem,1.4rem + 1vw,2.5rem)/1.05 "Montserrat",sans-serif; text-transform:uppercase; }
        #cem .cem-hero {
            min-height:340px; padding:1.5rem; border-radius:1rem; display:flex; flex-direction:column; justify-content:end; gap:.85rem;
            background:linear-gradient(135deg,rgba(190,208,0,.94),rgba(76,83,30,.92));
        }
        #cem .cem-badge {
            display:inline-flex; width:max-content; padding:.45rem .8rem; border-radius:999px; font-size:.74rem; font-weight:700;
            letter-spacing:.08em; text-transform:uppercase; color:var(--wh); background:rgba(255,255,255,.18);
        }
        #cem .cem-hero h3 { margin:0; color:var(--wh); font:800 clamp(1.8rem,1.5rem + 1vw,2.7rem)/1.05 "Montserrat",sans-serif; }
        #cem .cem-hero p { margin:0; max-width:40ch; color:rgba(255,255,255,.92); line-height:1.7; }
        #cem .cem-card { padding:1.35rem; border-radius:1rem; line-height:1.7; }
        #cem .cem-card h3 { margin:0 0 .65rem; font:700 1.12rem/1.25 "Montserrat",sans-serif; }
        #cem .cem-card p { margin:0; }
        #cem .cem-card--lime { background:var(--c2); color:var(--tx); }
        #cem .cem-card--dark { background:var(--c1); color:var(--wh); }
        #cem .timeline-wrap { max-width:1100px; margin:0 auto; }
        #cem .timeline-card {
            display:grid; grid-template-columns:1fr; overflow:hidden; border-radius:1rem;
            border:1px solid rgba(255,255,255,.09); background:rgba(255,255,255,.04); box-shadow:0 18px 36px rgba(0,0,0,.18);
        }
        #cem .timeline-media { min-height:260px; background:#111; }
        #cem .timeline-media img { width:100%; height:100%; display:block; object-fit:cover; }
        #cem .timeline-body { padding:1.5rem; }
        #cem .timeline-date { margin:0 0 .65rem; color:var(--c4); font:800 .92rem/1 "Montserrat",sans-serif; letter-spacing:.08em; text-transform:uppercase; }
        #cem .timeline-title { margin:0 0 .9rem; color:var(--wh); font:700 clamp(1.5rem,1.25rem + .8vw,2.3rem)/1.08 "Montserrat",sans-serif; }
        #cem .timeline-desc { margin:0; color:rgba(255,255,255,.9); line-height:1.8; }
        #cem .timeline-track { position:relative; width:min(100%,1020px); height:94px; margin:2rem auto 0; }
        #cem .timeline-rail, #cem .timeline-fill { position:absolute; left:0; right:0; top:22px; height:2px; }
        #cem .timeline-rail { background:rgba(255,255,255,.16); }
        #cem .timeline-fill { width:0; right:auto; background:linear-gradient(90deg,var(--c4),var(--c5)); box-shadow:0 0 14px rgba(219,240,0,.5); transition:width .35s ease; }
        #cem .timeline-node {
            position:absolute; top:0; width:46px; height:46px; padding:0; border-radius:999px; overflow:visible; cursor:pointer;
            border:2px solid rgba(255,255,255,.24); background:#555; transition:.2s;
        }
        #cem .timeline-node img { width:100%; height:100%; border-radius:999px; object-fit:cover; display:block; }
        #cem .timeline-node:hover { transform:scale(1.05); }
        #cem .timeline-node.is-done { border-color:rgba(255,255,255,.9); background:var(--c4); }
        #cem .timeline-node.is-active { transform:scale(1.12); border-color:var(--c5); box-shadow:0 0 0 4px rgba(190,208,0,.18),0 0 18px rgba(219,240,0,.45); }
        #cem .timeline-year {
            position:absolute; top:58px; left:50%; transform:translateX(-50%); white-space:nowrap;
            color:rgba(255,255,255,.8); font-size:.78rem; font-weight:700;
        }
        #cem .timeline-controls { display:flex; flex-wrap:wrap; justify-content:center; gap:.75rem; margin-top:1.8rem; }
        #cem .timeline-btn {
            min-height:44px; padding:.72rem 1.05rem; border-radius:999px; cursor:pointer; color:var(--wh);
            background:rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.18); font-weight:700;
        }
        #cem .timeline-btn:hover { background:rgba(190,208,0,.16); }
        #cem .timeline-btn.is-active { background:var(--c4); border-color:var(--c4); color:var(--c1); }
        #cem .timeline-counter { margin-top:.9rem; text-align:center; color:rgba(255,255,255,.76); }
        #cem .cem-iframe { width:100%; height:85vh; display:block; border:0; background:#000; }
        @media (min-width:992px) {
            #cem .cem-grid { grid-template-columns:1fr 1fr; align-items:stretch; }
            #cem .timeline-card { grid-template-columns:42% 58%; }
            #cem .timeline-media { min-height:360px; }
        }
        @media (max-width:900px) {
            #cem .timeline-track { overflow-x:auto; overflow-y:hidden; padding-bottom:8px; }
            #cem .timeline-rail, #cem .timeline-fill { width:960px; max-width:none; }
        }
        @media (max-width:576px) {
            #cem .cem-title { font-size:1.25rem; }
            #cem .cem-tagline { font-size:.75rem; }
            #cem .cem-panel--default, #cem .cem-panel--historia { padding:1.25rem 1rem; }
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
                        <div class="cem-hero" role="img" aria-label="Portada de referencia para el Plan Maestro del Sistema Inteligente de Transporte">
                            <span class="cem-badge">Plan Maestro</span>
                            <h3>Sistema Inteligente de Transporte</h3>
                            <p>Bloque visual autocontenido para el ABC del PM SIT. Si luego se define la imagen final, este contenedor puede reemplazarse por una imagen conservando la envoltura.</p>
                        </div>
                    </div>

                    <div style="display:grid;gap:1rem;align-content:start">
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
                    data-src="https://camilonemo.com/nemo/EjecutableRecorrido/index.html"
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
                { year: "1935", title: "El primer semaforo", image: "/cem-assets/historia/1935.jpg", alt: "Primer semaforo instalado en Bogota en 1935", desc: "Se instalo en la Avenida Jimenez con Carrera 7 y dio inicio al control moderno del trafico." },
                { year: "Anos 50", title: "Semaforos colgantes", image: "/cem-assets/historia/1950s.jpg", alt: "Semaforos colgantes en Bogota durante los anos 50", desc: "Se instalaron nuevos semaforos suspendidos en el centro de las intersecciones, mejorando la visibilidad y la circulacion." },
                { year: "Anos 60", title: "La Red Blanca", image: "/cem-assets/historia/1960s.png", alt: "Red interconectada de semaforos en los anos 60", desc: "Se implemento la primera red interconectada de semaforos con postes blancos y franjas negras." },
                { year: "Anos 70", title: "La era electronica", image: "/cem-assets/historia/1970s.png", alt: "Coordinacion centralizada de la red semaforica en los anos 70", desc: "Inicio la coordinacion centralizada de la red semaforica desde la central de Paloquemao y llegaron las primeras olas verdes." },
                { year: "Anos 80", title: "Limitaciones del cobre", image: "/cem-assets/historia/1980s.jpg", alt: "Ampliacion de la red de semaforos en los anos 80", desc: "Se amplio la red de semaforos con nuevas centrales en Muzu y Chico y aparecieron los primeros semaforos peatonales." },
                { year: "Anos 90", title: "Controladores programables", image: "/cem-assets/historia/1990s.jpg", alt: "Controladores semidigitales en los anos 90", desc: "Inicio la transicion de controladores analogos a semidigitales y se adopto la carcasa negra para mejorar el contraste." },
                { year: "Anos 2000", title: "Eficiencia e inclusion", image: "/cem-assets/historia/2000s.png", alt: "Tecnologia LED y botones peatonales sonoros en los anos 2000", desc: "Se empezo a usar tecnologia LED y se instalaron botones peatonales sonoros para mejorar la accesibilidad." },
                { year: "2015", title: "Centro de Gestion de Transito", image: "/cem-assets/historia/2015.jpg", alt: "Inicio de operacion del CGT en 2015", desc: "El CGT inicio operacion con 120 camaras y 376 sensores para monitorear las vias y gestionar incidentes en tiempo real." },
                { year: "2018", title: "Transformacion de la comunicacion semaforica", image: "/cem-assets/historia/2018.jpg", alt: "Conexion de semaforos mediante fibra optica en 2018", desc: "Bogota conecto todos los semaforos a una unica central mediante fibra optica y completo la transicion a tecnologia LED." },
                { year: "2019", title: "Semaforos inteligentes", image: "/cem-assets/historia/2019.jpg", alt: "Videodetectores y Prudencia en 2019", desc: "Llegaron los primeros videodetectores para optimizar tiempos semaforicos y aparecio Prudencia en los semaforos peatonales." },
                { year: "2020", title: "Tecnologia para la seguridad vial", image: "/cem-assets/historia/2020.jpg", alt: "Camaras de fotodeteccion en 2020", desc: "Se instalaron 70 camaras de fotodeteccion para reducir la siniestralidad y mejorar el cumplimiento de las normas." },
                { year: "2025", title: "Rumbo al Centro Estrategico de Movilidad", image: "/cem-assets/historia/2025.jpg", alt: "Radares pedagogicos y videodetectores en 2025", desc: "Se adiciono el streaming de 1300 videodetectores y se implementaron 15 radares pedagogicos conectados al CGT." },
                { year: "2026", title: "Centro Estrategico de Movilidad", image: "/cem-assets/historia/2026.jpg", alt: "Interconexion de camaras en el CEM durante 2026", desc: "Se interconectaron 10000 camaras en un ecosistema de monitoreo y gestion de trafico que anticipa afectaciones en las vias." }
            ];

            var current = 0;
            var playing = true;
            var dwellMs = 5000;
            var timer = null;
            var initialized = false;
            var nodes = [];

            var track = root.querySelector("#cem-timeline-track");
            var fill = root.querySelector("#cem-timeline-fill");
            var image = root.querySelector("#cem-timeline-image");
            var date = root.querySelector("#cem-timeline-date");
            var title = root.querySelector("#cem-timeline-title");
            var desc = root.querySelector("#cem-timeline-desc");
            var counter = root.querySelector("#cem-counter");
            var prevBtn = root.querySelector("#cem-prev");
            var nextBtn = root.querySelector("#cem-next");
            var playBtn = root.querySelector("#cem-play");

            function renderTimeline(index) {
                var item = milestones[index];
                var pct = milestones.length > 1 ? (index / (milestones.length - 1)) * 100 : 0;
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
                    node.addEventListener("click", function () { goTo(index); });
                    track.appendChild(node);
                    nodes.push(node);
                });

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
