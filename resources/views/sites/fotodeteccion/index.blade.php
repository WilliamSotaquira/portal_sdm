@extends('layouts.app')

@section('title', 'Cámaras de fotodetección en Bogotá')

@section('content')

<div id="fotodeteccion">
    <style>
        #fotodeteccion, #fotodeteccion *, #fotodeteccion *::before, #fotodeteccion *::after {
            box-sizing: border-box;
        }
        #fotodeteccion {
            all: initial;
            display: block;
            font-family: system-ui, -apple-system, sans-serif;
            color: var(--fd-text);
            line-height: 1.6;
            /* Variables del sistema de diseño */
            --fd-primary: #1a3a6b;
            --fd-secondary: #2c5aa0;
            --fd-accent: #e8a838;
            --fd-text: #1a1a2e;
            --fd-text-light: #4a4a5a;
            --fd-bg: #ffffff;
            --fd-bg-alt: #f5f7fa;
            --fd-border: #e2e8f0;
            --fd-success: #2d8a4e;
            --fd-radius: 8px;
            --fd-shadow: 0 2px 8px rgba(0,0,0,0.08);
            --fd-max-width: 1200px;
        }
    </style>

    {{-- Hero Section --}}
    <section class="fd-hero" aria-labelledby="fd-hero-title">
        <div class="fd-hero__content">
            <h1 id="fd-hero-title" class="fd-hero__title">Cámaras de fotodetección en Bogotá</h1>
            <p class="fd-hero__subtitle">Conoce cómo operan, dónde están y qué hacer si recibes un comparendo por fotodetección.</p>
            <div class="fd-hero__actions">
                <a href="/sites/fotodeteccion/comparendo" class="fd-btn fd-btn--primary">Consultar comparendo</a>
                <a href="/sites/fotodeteccion/proceso" class="fd-btn fd-btn--secondary">Conocer cómo funciona</a>
            </div>
        </div>
    </section>

    {{-- Módulo de caminos: ¿Qué necesitas hacer? --}}
    <section class="fd-paths" aria-labelledby="fd-paths-title">
        <h2 id="fd-paths-title" class="fd-paths__title">¿Qué necesitas hacer?</h2>
        <div class="fd-paths__grid">
            <a href="/sites/fotodeteccion/que-son" class="fd-paths__card">
                <span class="fd-paths__card-icon" aria-hidden="true">📷</span>
                <span class="fd-paths__card-label">Entender las cámaras</span>
            </a>
            <a href="/sites/fotodeteccion/proceso" class="fd-paths__card">
                <span class="fd-paths__card-icon" aria-hidden="true">⚙️</span>
                <span class="fd-paths__card-label">Ver el proceso</span>
            </a>
            <a href="/sites/fotodeteccion/ubicacion" class="fd-paths__card">
                <span class="fd-paths__card-icon" aria-hidden="true">📍</span>
                <span class="fd-paths__card-label">Consultar ubicación</span>
            </a>
            <a href="/sites/fotodeteccion/comparendo" class="fd-paths__card">
                <span class="fd-paths__card-icon" aria-hidden="true">📋</span>
                <span class="fd-paths__card-label">Resolver un comparendo</span>
            </a>
        </div>
    </section>

    {{-- Vista resumida del proceso --}}
    <section class="fd-process-summary" aria-labelledby="fd-process-summary-title">
        <h2 id="fd-process-summary-title" class="fd-process-summary__title">¿Cómo funciona el proceso?</h2>
        <div class="fd-process-summary__steps">
            <div class="fd-process-summary__step">
                <span class="fd-process-summary__number" aria-hidden="true">1</span>
                <p class="fd-process-summary__text">La cámara registra</p>
            </div>
            <span class="fd-process-summary__arrow" aria-hidden="true">→</span>
            <div class="fd-process-summary__step">
                <span class="fd-process-summary__number" aria-hidden="true">2</span>
                <p class="fd-process-summary__text">Un agente valida</p>
            </div>
            <span class="fd-process-summary__arrow" aria-hidden="true">→</span>
            <div class="fd-process-summary__step">
                <span class="fd-process-summary__number" aria-hidden="true">3</span>
                <p class="fd-process-summary__text">Se notifica al propietario</p>
            </div>
        </div>
        <a href="/sites/fotodeteccion/proceso" class="fd-btn fd-btn--secondary">Ver proceso completo</a>
    </section>

    {{-- Preguntas frecuentes --}}
    <div class="fd-accordion" role="region" aria-labelledby="fd-accordion-title">
        <h2 id="fd-accordion-title">Preguntas frecuentes</h2>

        <div class="fd-accordion__item">
            <button class="fd-accordion__trigger"
                    aria-expanded="false"
                    aria-controls="fd-acc-1"
                    id="fd-acc-btn-1">
                <span class="fd-accordion__title">¿Cuál es el margen de tolerancia en velocidad?</span>
                <span class="fd-accordion__icon" aria-hidden="true">+</span>
            </button>
            <div class="fd-accordion__panel"
                 id="fd-acc-1"
                 role="region"
                 aria-labelledby="fd-acc-btn-1"
                 hidden>
                <p>Las cámaras de velocidad aplican un margen de tolerancia del 10% sobre el límite establecido en la vía, conforme a la normativa vigente. Por ejemplo, si el límite es 60 km/h, la detección se activa a partir de 66 km/h.</p>
            </div>
        </div>

        <div class="fd-accordion__item">
            <button class="fd-accordion__trigger"
                    aria-expanded="false"
                    aria-controls="fd-acc-2"
                    id="fd-acc-btn-2">
                <span class="fd-accordion__title">¿Cómo funcionan las cámaras de fotodetección?</span>
                <span class="fd-accordion__icon" aria-hidden="true">+</span>
            </button>
            <div class="fd-accordion__panel"
                 id="fd-acc-2"
                 role="region"
                 aria-labelledby="fd-acc-btn-2"
                 hidden>
                <p>Las cámaras capturan evidencia fotográfica o de video cuando detectan una infracción. Luego, un agente de tránsito valida la evidencia antes de generar el comparendo electrónico, garantizando que no se emitan sanciones sin revisión humana.</p>
            </div>
        </div>

        <div class="fd-accordion__item">
            <button class="fd-accordion__trigger"
                    aria-expanded="false"
                    aria-controls="fd-acc-3"
                    id="fd-acc-btn-3">
                <span class="fd-accordion__title">¿Qué hago si recibo un comparendo por fotodetección?</span>
                <span class="fd-accordion__icon" aria-hidden="true">+</span>
            </button>
            <div class="fd-accordion__panel"
                 id="fd-acc-3"
                 role="region"
                 aria-labelledby="fd-acc-btn-3"
                 hidden>
                <p>Puedes consultar el comparendo en el SIMIT, pagarlo con descuento dentro de los primeros días hábiles, tomar un curso pedagógico para reducir la sanción, o impugnarlo si consideras que fue emitido de forma incorrecta.</p>
            </div>
        </div>

        <a href="/sites/fotodeteccion/preguntas" class="fd-btn fd-btn--secondary fd-accordion__cta">Ver todas las preguntas</a>
    </div>

    <script>
        (function() {
            // Accordion toggle functionality
            var triggers = document.querySelectorAll('#fotodeteccion .fd-accordion__trigger');

            triggers.forEach(function(trigger) {
                trigger.addEventListener('click', function() {
                    var expanded = this.getAttribute('aria-expanded') === 'true';
                    var panelId = this.getAttribute('aria-controls');
                    var panel = document.getElementById(panelId);
                    var icon = this.querySelector('.fd-accordion__icon');

                    if (expanded) {
                        this.setAttribute('aria-expanded', 'false');
                        panel.setAttribute('hidden', '');
                        if (icon) icon.textContent = '+';
                    } else {
                        this.setAttribute('aria-expanded', 'true');
                        panel.removeAttribute('hidden');
                        if (icon) icon.textContent = '−';
                    }
                });
            });
        })();
    </script>
</div>

@endsection
