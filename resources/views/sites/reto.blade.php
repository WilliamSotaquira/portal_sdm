@extends('layouts.app')

@section('content')
    <style>
        .node--type-page .node__content .field--name-body {

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                /* font-size: 24px !important; */

            }
        }
    </style>
    <style>
        #sdm-reto-landing {
            --reto-brand-olive: #4d541f;
            --reto-brand-lime: #bacc00;
            --reto-brand-lime-soft: #c9d64f;
            --reto-brand-lime-mid: #a6b517;
            --reto-brand-lime-deep: #8f9f14;
            --reto-brand-surface: #f6f8ec;
            --reto-text: #222222;
            --reto-muted: #5e6358;
            --reto-line: #dde3d0;
        }

        #sdm-reto-landing,
        #sdm-reto-landing *,
        #sdm-reto-landing *::before,
        #sdm-reto-landing *::after {
            box-sizing: border-box;
        }

        #sdm-reto-landing {
            width: min(1160px, calc(100% - 24px));
            margin: 0 auto;
            padding: 12px 0 48px;
            background: #ffffff;
            color: var(--reto-text);
            font-size: 18px;
            line-height: 1.7;
        }

        #sdm-reto-landing img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        #sdm-reto-landing .reto-banner,
        #sdm-reto-landing .reto-bullet {
            overflow: hidden;
            border-radius: 12px;
            background: #fff;
        }

        #sdm-reto-landing .reto-bullet {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 0;
            margin: 0;
        }

        #sdm-reto-landing .reto-bullet img {
            width: auto;
            max-width: 100%;
            height: auto;
        }

        #sdm-reto-landing .reto-banner {
            position: relative;
            width: 100%;
            aspect-ratio: 19 / 6;
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.08);
        }

        #sdm-reto-landing .reto-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center;
        }

        #sdm-reto-landing .reto-intro {
            max-width: 760px;
            margin-top: 32px;
        }

        #sdm-reto-landing h1 {
            margin: 0 0 16px;
            max-width: 60ch;
            font-size: 1.08rem !important;
            line-height: 1.7;
            font-weight: 700;
            letter-spacing: 0;
            color: var(--reto-brand-olive);
            text-wrap: balance;
            text-align: left !important;
        }

        #sdm-reto-landing h2 {
            margin: 0 0 16px;
            font-size: clamp(1.55rem, 1.35rem + 0.7vw, 2.1rem);
            line-height: 1.12;
            font-weight: 700;
            letter-spacing: -0.02em;
            color: var(--reto-brand-olive);
        }

        #sdm-reto-landing h3 {
            margin: 0 0 12px;
            font-size: 1.15rem;
            line-height: 1.2;
            font-weight: 700;
            color: var(--reto-brand-olive);
        }

        #sdm-reto-landing p {
            margin: 0 0 16px;
            max-width: 68ch;
        }

        #sdm-reto-landing ul {
            margin: 0;
            padding-left: 1.15rem;
        }

        #sdm-reto-landing li+li {
            margin-top: 8px;
        }

        #sdm-reto-landing .reto-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: center;
            margin-top: 28px;
        }

        #sdm-reto-landing .reto-quicknav {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 18px;
        }

        #sdm-reto-landing .reto-quicknav a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 34px;
            padding: 0 12px;
            border: 1px solid var(--reto-line);
            border-radius: 999px;
            background: #ffffff;
            color: var(--reto-brand-olive);
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 500;
            transition: background-color .2s ease, border-color .2s ease, color .2s ease, transform .2s ease;
        }

        #sdm-reto-landing .reto-quicknav a:hover,
        #sdm-reto-landing .reto-quicknav a:focus {
            background: var(--reto-brand-surface);
            border-color: rgba(166, 181, 23, 0.55);
        }

        #sdm-reto-landing .reto-quicknav a:focus-visible {
            outline: 3px solid var(--reto-brand-lime-mid);
            outline-offset: 3px;
        }

        #sdm-reto-landing .reto-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 52px;
            padding: 0 22px;
            border: 1px solid transparent;
            border-radius: 999px;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 700;
            line-height: 1.2;
            transition: background-color .2s ease, border-color .2s ease, color .2s ease, transform .2s ease, box-shadow .2s ease;
        }

        #sdm-reto-landing .reto-btn:focus-visible {
            outline: 3px solid var(--reto-brand-lime-mid);
            outline-offset: 3px;
        }

        #sdm-reto-landing .reto-btn:hover,
        #sdm-reto-landing .reto-btn:focus {
            transform: translateY(-1px);
        }

        #sdm-reto-landing .reto-btn-primary {
            background: var(--reto-brand-olive);
            border-color: var(--reto-brand-olive);
            color: #ffffff !important;
            box-shadow: 0 10px 22px rgba(77, 84, 31, 0.18);
        }

        #sdm-reto-landing .reto-btn-primary:hover,
        #sdm-reto-landing .reto-btn-primary:focus {
            background: #3f4519;
            border-color: #3f4519;
            color: #ffffff;
        }

        #sdm-reto-landing .reto-btn-secondary {
            border-color: var(--reto-brand-lime-deep);
            color: var(--reto-brand-olive);
            background: var(--reto-brand-surface);
        }

        #sdm-reto-landing .reto-btn-secondary:hover,
        #sdm-reto-landing .reto-btn-secondary:focus {
            background: #eef3d8;
            border-color: var(--reto-brand-lime-deep);
            color: var(--reto-brand-olive);
        }

        #sdm-reto-landing .reto-note {
            color: var(--reto-muted);
            font-size: 1rem;
        }

        #sdm-reto-landing .reto-side {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 28px 24px;
            border-radius: 20px;
            background: var(--reto-brand-surface);
            border: 1px solid var(--reto-line);
            border-left: 6px solid var(--reto-brand-lime-mid);
        }

        #sdm-reto-landing .reto-side strong {
            color: var(--reto-brand-olive);
        }

        #sdm-reto-landing .reto-side ul {
            padding-left: 1.05rem;
        }

        #sdm-reto-landing .reto-side li {
            line-height: 1.7;
        }

        #sdm-reto-landing .reto-intro-copy {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 100%;
            padding: 6px 0;
        }

        #sdm-reto-landing .reto-intro-copy>p {
            max-width: 60ch;
        }

        #sdm-reto-landing .reto-intro-copy>p:last-of-type {
            margin-bottom: 0;
        }

        #sdm-reto-landing .reto-section {
            padding-top: 32px;
            margin-top: 32px;
            border-top: 1px solid var(--reto-line);
        }

        #sdm-reto-landing .reto-section> :first-child {
            margin-top: 0;
        }

        #sdm-reto-landing .reto-key-stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 16px;
            margin-top: 22px;
        }

        #sdm-reto-landing .reto-key-stat {
            display: grid;
            justify-items: center;
            align-content: start;
            gap: 12px;
            min-height: 190px;
            padding: 22px 18px;
            border-radius: 16px;
            background: #BED000;
            text-align: center;
        }

        #sdm-reto-landing .reto-key-stat-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 54px;
            height: 54px;
            border-radius: 999px;
            background: #BED000;
            color: var(--reto-brand-olive);
            font-size: 1.45rem;
            line-height: 1;
        }

        #sdm-reto-landing .reto-key-stat-value {
            display: block;
            color: var(--reto-brand-olive);
            font-size: clamp(1.35rem, 1.15rem + 0.7vw, 1.9rem);
            font-weight: 700;
            line-height: 1.12;
        }

        #sdm-reto-landing .reto-key-stat-description {
            display: block;
            max-width: 19ch;
            color: var(--reto-muted);
            font-size: 0.97rem;
            line-height: 1.45;
        }

        #sdm-reto-landing .reto-two-col {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
        }

        #sdm-reto-landing .reto-process {
            grid-template-columns: minmax(280px, 360px) minmax(0, 1fr);
            gap: 36px;
            align-items: start;
        }

        #sdm-reto-landing .reto-process-nav {
            display: grid;
            gap: 12px;
        }

        #sdm-reto-landing .reto-process-tab {
            appearance: none;
            -webkit-appearance: none;
            display: grid;
            grid-template-columns: 44px 1fr;
            gap: 14px;
            width: 100%;
            padding: 16px 18px;
            border: 1px solid var(--reto-line);
            border-radius: 18px;
            background: #fff;
            color: var(--reto-text);
            text-align: left;
            cursor: pointer;
            transition: background-color .2s ease, border-color .2s ease, transform .2s ease, box-shadow .2s ease;
        }

        #sdm-reto-landing .reto-process-tab.is-active {
            border-color: var(--reto-brand-lime-deep);
            background: var(--reto-brand-surface);
            box-shadow: 0 0 0 2px rgba(166, 181, 23, 0.08);
        }

        #sdm-reto-landing .reto-process-tab:hover,
        #sdm-reto-landing .reto-process-tab:focus {
            border-color: var(--reto-brand-lime-deep);
            transform: translateY(-1px);
        }

        #sdm-reto-landing .reto-process-tab:focus-visible {
            outline: 3px solid var(--reto-brand-lime-mid);
            outline-offset: 3px;
        }

        #sdm-reto-landing .reto-step-number,
        #sdm-reto-landing .reto-process-tab-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 999px;
            background: var(--reto-brand-lime);
            color: var(--reto-brand-olive);
            font-weight: 700;
        }

        #sdm-reto-landing .reto-step h3,
        #sdm-reto-landing .reto-process-tab h3 {
            margin-bottom: 6px;
            font-size: 1.05rem;
        }

        #sdm-reto-landing .reto-step p,
        #sdm-reto-landing .reto-process-tab p {
            margin: 0;
            max-width: none;
            color: var(--reto-muted);
            font-size: 0.98rem;
        }

        #sdm-reto-landing .reto-process-panel {
            min-height: 100%;
            padding: 30px 26px;
            border: 1px solid var(--reto-line);
            border-radius: 22px;
            background: var(--reto-brand-surface);
            border-top: 6px solid var(--reto-brand-lime-mid);
        }

        #sdm-reto-landing .reto-process-panel-item[hidden] {
            display: none !important;
        }

        #sdm-reto-landing .reto-process-panel-kicker {
            display: inline-block;
            margin-bottom: 10px;
            color: var(--reto-brand-olive);
            font-size: 0.86rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        #sdm-reto-landing .reto-process-panel p {
            max-width: 46ch;
        }

        #sdm-reto-landing .reto-why {
            grid-template-columns: minmax(0, 1fr) minmax(320px, 492px);
            gap: 32px;
            align-items: start;
        }

        #sdm-reto-landing .reto-why .reto-bullet:first-child {
            justify-content: flex-start;
        }

        #sdm-reto-landing .reto-why .reto-bullet:first-child img {
            width: min(100%, 250px);
        }

        #sdm-reto-landing .reto-why .reto-bullet:last-child {
            justify-content: flex-start;
            padding-top: 10px;
        }

        #sdm-reto-landing .reto-why .reto-bullet:last-child img {
            width: min(100%, 460px);
        }

        #sdm-reto-landing .reto-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
            align-items: start;
        }

        #sdm-reto-landing .reto-cta {
            text-align: center;
        }

        #sdm-reto-landing .reto-cta .reto-btn {
            min-width: min(100%, 320px);
            margin-top: 10px;
        }

        #sdm-reto-landing .reto-contact {
            margin-top: 18px;
            font-size: 0.98rem;
        }

        #sdm-reto-landing .reto-contact a {
            color: var(--reto-brand-olive);
            font-weight: 600;
        }

        #sdm-reto-landing .reto-columns-compact {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        #sdm-reto-landing .reto-info-tabs {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        #sdm-reto-landing .reto-info-tab {
            appearance: none;
            -webkit-appearance: none;
            min-height: 42px;
            padding: 0 16px;
            border: 1px solid var(--reto-line);
            border-radius: 999px;
            background: #fff;
            color: var(--reto-brand-olive);
            font-size: 0.95rem;
            font-weight: 700;
            cursor: pointer;
            transition: background-color .2s ease, border-color .2s ease, color .2s ease, transform .2s ease;
        }

        #sdm-reto-landing .reto-info-tab.is-active {
            background: var(--reto-brand-olive);
            border-color: var(--reto-brand-olive);
            color: #fff;
        }

        #sdm-reto-landing .reto-info-tab:hover,
        #sdm-reto-landing .reto-info-tab:focus {
            transform: translateY(-1px);
            border-color: var(--reto-brand-lime-deep);
        }

        #sdm-reto-landing .reto-info-tab:focus-visible {
            outline: 3px solid var(--reto-brand-lime-mid);
            outline-offset: 3px;
        }

        #sdm-reto-landing .reto-info-panel {
            padding: 24px;
            border: 1px solid var(--reto-line);
            border-radius: 22px;
            background: #fff;
            border-top: 6px solid var(--reto-brand-lime-mid);
        }

        #sdm-reto-landing .reto-info-panel[hidden] {
            display: none !important;
        }

        #sdm-reto-landing .reto-info-panel-head {
            display: grid;
            gap: 8px;
            margin-bottom: 18px;
        }

        #sdm-reto-landing .reto-info-panel-head p {
            margin: 0;
            max-width: 60ch;
            color: var(--reto-muted);
            font-size: 0.98rem;
        }

        #sdm-reto-landing .reto-card {
            height: 100%;
            padding: 22px 22px 20px;
            border: 1px solid var(--reto-line);
            border-radius: 20px;
            background: #fff;
            border-top: 6px solid var(--reto-brand-lime-mid);
        }

        #sdm-reto-landing .reto-card p {
            max-width: none;
        }

        #sdm-reto-landing .reto-chip-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #sdm-reto-landing .reto-chip-list li {
            margin: 0;
            padding: 10px 14px;
            border-radius: 999px;
            background: var(--reto-brand-surface);
            border: 1px solid rgba(166, 181, 23, 0.45);
            color: var(--reto-brand-olive);
            font-weight: 600;
        }

        #sdm-reto-landing .reto-mini-list {
            display: grid;
            gap: 12px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #sdm-reto-landing .reto-mini-list li {
            margin: 0;
            padding-left: 16px;
            position: relative;
        }

        #sdm-reto-landing .reto-mini-list li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.8em;
            width: 7px;
            height: 7px;
            border-radius: 999px;
            background: var(--reto-brand-lime-deep);
            transform: translateY(-50%);
        }

        #sdm-reto-landing .reto-stat-list {
            display: grid;
            gap: 12px;
        }

        #sdm-reto-landing .reto-stat-item {
            padding: 14px 16px;
            border-radius: 16px;
            background: var(--reto-brand-surface);
            border: 1px solid var(--reto-line);
            border-left: 4px solid var(--reto-brand-lime-mid);
        }

        #sdm-reto-landing .reto-stat-item strong {
            display: block;
            margin-bottom: 4px;
            color: var(--reto-brand-olive);
            font-size: 1rem;
        }

        #sdm-reto-landing .reto-stat-item span {
            color: var(--reto-muted);
            font-size: 0.96rem;
            line-height: 1.55;
        }

        #sdm-reto-landing .reto-rule-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
        }

        #sdm-reto-landing .reto-rule {
            padding: 16px 18px;
            border: 1px solid var(--reto-line);
            border-radius: 18px;
            background: #fff;
            border-top: 4px solid var(--reto-brand-lime-mid);
        }

        #sdm-reto-landing .reto-rule strong {
            display: block;
            margin-bottom: 6px;
            color: var(--reto-brand-olive);
            font-size: 1rem;
        }

        #sdm-reto-landing .reto-rule span {
            color: var(--reto-muted);
            font-size: 0.97rem;
            line-height: 1.55;
        }

        @media (prefers-reduced-motion: reduce) {

            #sdm-reto-landing *,
            #sdm-reto-landing *::before,
            #sdm-reto-landing *::after {
                transition: none !important;
                animation: none !important;
                scroll-behavior: auto !important;
            }
        }

        #sdm-reto-landing .reto-intro-copy>p:first-of-type {
            font-size: 1.08rem;
        }

        @media (max-width: 900px) {
            #sdm-reto-landing {
                font-size: 17px;
            }

            #sdm-reto-landing .reto-banner {
                aspect-ratio: 16 / 7;
            }

            #sdm-reto-landing .reto-intro,
            #sdm-reto-landing .reto-two-col,
            #sdm-reto-landing .reto-grid,
            #sdm-reto-landing .reto-columns-compact,
            #sdm-reto-landing .reto-rule-grid {
                grid-template-columns: 1fr;
            }

            #sdm-reto-landing .reto-process {
                grid-template-columns: 1fr;
            }

            #sdm-reto-landing .reto-why .reto-bullet:first-child,
            #sdm-reto-landing .reto-why .reto-bullet:last-child {
                justify-content: center;
                padding-top: 0;
            }

            #sdm-reto-landing .reto-intro {
                gap: 24px;
            }

            #sdm-reto-landing h1 {
                max-width: 60ch;
            }

            #sdm-reto-landing .reto-key-stats {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 576px) {
            #sdm-reto-landing {
                width: min(100% - 16px, 1160px);
                padding: 8px 0 40px;
                font-size: 16px;
            }

            #sdm-reto-landing .reto-banner {
                aspect-ratio: auto;
                border-radius: 10px;
            }

            #sdm-reto-landing .reto-banner img {
                height: auto;
                object-fit: contain;
            }

            #sdm-reto-landing .reto-side {
                padding: 18px;
            }

            #sdm-reto-landing .reto-key-stats {
                grid-template-columns: 1fr;
            }

            #sdm-reto-landing .reto-key-stat {
                min-height: auto;
            }

            #sdm-reto-landing .reto-actions {
                flex-direction: column;
            }

            #sdm-reto-landing .reto-actions a {
                width: 100%;
            }
        }
    </style>

    <div id="sdm-reto-landing">
        <section>
            <div class="reto-banner">
                <img src="{{ asset('reto-assets/banner-reto-mas-pro.jpg') }}"
                    alt="Banner del reto Más lento, más pro con motociclistas en pista">
            </div>

            <div class="reto-intro">
                <div class="reto-intro-copy">
                    <h1>Ser más rápido no te hace mejor conductor</h1>
                    <p>
                        En este reto demostrarás que el verdadero dominio está en el control y en la protección de la vida
                        en las vías, no en la velocidad.
                    </p>

                    <div class="reto-actions">
                        <a class="reto-btn reto-btn-primary" href="https://forms.gle/HQyMfK7k38y9z2xp8" target="_blank"
                            rel="noopener noreferrer">
                            Inscribirse
                        </a>
                    </div>

                    <nav class="reto-quicknav" aria-label="Accesos rápidos del reto">
                        <a href="#por-que">Por qué</a>
                        <a href="#como-funciona">Cómo funciona</a>
                        <a href="#explora-reto">Explorar información</a>
                    </nav>
                </div>
            </div>
        </section>

        <section class="reto-section" aria-labelledby="reto-datos-clave">
            <h2 id="reto-datos-clave">La velocidad es el riesgo. El control protege la vida.</h2>

            <div class="reto-key-stats">
                <article class="reto-key-stat">
                    <span class="reto-key-stat-icon" aria-hidden="true"><i class="bi bi-shield-exclamation"></i></span>
                    <strong class="reto-key-stat-value">4 de cada 10</strong>
                    <span class="reto-key-stat-description">personas que mueren en las vías son motociclistas.</span>
                </article>

                <article class="reto-key-stat">
                    <span class="reto-key-stat-icon" aria-hidden="true"><i class="bi bi-signpost-split"></i></span>
                    <strong class="reto-key-stat-value">10 etapas</strong>
                    <span class="reto-key-stat-description">eliminatorias durante todo el año.</span>
                </article>

                <article class="reto-key-stat">
                    <span class="reto-key-stat-icon" aria-hidden="true"><i class="bi bi-people"></i></span>
                    <strong class="reto-key-stat-value">30 mujeres y 30 hombres</strong>
                    <span class="reto-key-stat-description">finalistas en la etapa final.</span>
                </article>

                <article class="reto-key-stat">
                    <span class="reto-key-stat-icon" aria-hidden="true"><i class="bi bi-calendar-event"></i></span>
                    <strong class="reto-key-stat-value">Octubre de 2026</strong>
                    <span class="reto-key-stat-description">gran final en el Día del Motociclista.</span>
                </article>
            </div>
        </section>

        <section id="por-que" class="reto-section">
            <h2>¿Por qué este reto?</h2>
            <p>
                El exceso de velocidad mata y la falta de pericia también cobra vidas en las vías. Esta iniciativa busca
                cambiar la mentalidad sobre lo que significa conducir bien.
            </p>

            <div class="reto-two-col reto-why" style="margin-top: 24px;">
                <figure class="reto-bullet">
                    <img src="https://www.movilidadbogota.gov.co/sites/default/files/2026-04-22/bullets-1.png"
                        alt="Ir rápido no es ser eficiente, ir rápido no es ser hábil e ir lento no es estorbar">
                </figure>
                <figure class="reto-bullet">
                    <img src="https://www.movilidadbogota.gov.co/sites/default/files/2026-04-22/bullets-2.png"
                        alt="Ser pro es dominar, controlar y decidir bien; llegar sin poner en riesgo la vida es el verdadero logro">
                </figure>
            </div>
        </section>

        <section id="como-funciona" class="reto-section">
            <h2>¿En qué consiste?</h2>
            <p>Recorre esta ruta paso a paso para entender cómo avanza el reto y qué evalúa cada etapa.</p>
            <div class="reto-two-col reto-process">
                <div class="reto-process-nav" role="tablist" aria-label="Ruta del reto">
                    <button class="reto-process-tab is-active" type="button" role="tab" id="reto-process-tab-1"
                        aria-controls="reto-process-panel-1" data-process-tab="1" aria-selected="true">
                        <span class="reto-process-tab-number">1</span>
                        <div>
                            <h3>Tres pistas lentas</h3>
                            <p>Primer acercamiento al reto.</p>
                        </div>
                    </button>
                    <button class="reto-process-tab" type="button" role="tab" id="reto-process-tab-2"
                        aria-controls="reto-process-panel-2" data-process-tab="2" aria-selected="false">
                        <span class="reto-process-tab-number">2</span>
                        <div>
                            <h3>Niveles de complejidad</h3>
                            <p>La prueba exige mayor dominio.</p>
                        </div>
                    </button>
                    <button class="reto-process-tab" type="button" role="tab" id="reto-process-tab-3"
                        aria-controls="reto-process-panel-3" data-process-tab="3" aria-selected="false">
                        <span class="reto-process-tab-number">3</span>
                        <div>
                            <h3>Etapas eliminatorias</h3>
                            <p>Clasificación durante todo el año.</p>
                        </div>
                    </button>
                    <button class="reto-process-tab" type="button" role="tab" id="reto-process-tab-4"
                        aria-controls="reto-process-panel-4" data-process-tab="4" aria-selected="false">
                        <span class="reto-process-tab-number">4</span>
                        <div>
                            <h3>Final del reto</h3>
                            <p>Cierre en octubre de 2026.</p>
                        </div>
                    </button>
                </div>
                <div class="reto-process-panel">
                    <article class="reto-process-panel-item" role="tabpanel" id="reto-process-panel-1"
                        aria-labelledby="reto-process-tab-1" data-process-panel="1">
                        <span class="reto-process-panel-kicker">Paso 1</span>
                        <h3>Tres pistas lentas</h3>
                        <p>El reto se desarrolla en circuitos diseñados para evaluar control, equilibrio y precisión, no
                            velocidad.</p>
                    </article>
                    <article class="reto-process-panel-item" role="tabpanel" id="reto-process-panel-2"
                        aria-labelledby="reto-process-tab-2" data-process-panel="2" hidden>
                        <span class="reto-process-panel-kicker">Paso 2</span>
                        <h3>Tres niveles de complejidad</h3>
                        <p>La exigencia crece progresivamente para medir pericia real, capacidad de reacción y dominio
                            continuo de la moto.</p>
                    </article>
                    <article class="reto-process-panel-item" role="tabpanel" id="reto-process-panel-3"
                        aria-labelledby="reto-process-tab-3" data-process-panel="3" hidden>
                        <span class="reto-process-panel-kicker">Paso 3</span>
                        <h3>Diez etapas eliminatorias durante el año</h3>
                        <p>Habrá jornadas sucesivas con clasificación por categorías para que la competencia sea comparable
                            y justa.</p>
                    </article>
                    <article class="reto-process-panel-item" role="tabpanel" id="reto-process-panel-4"
                        aria-labelledby="reto-process-tab-4" data-process-panel="4" hidden>
                        <span class="reto-process-panel-kicker">Paso 4</span>
                        <h3>Gran final en octubre de 2026</h3>
                        <p>Avanzan quienes logran los mejores tiempos: los más lentos, más pro. La final se realizará en el
                            Día del Motociclista.</p>
                    </article>
                    <div class="reto-side" style="margin-top: 16px;">
                        <h3>Cómo se define a quienes avanzan</h3>
                        <p>
                            El reto no premia correr. Premia a quienes controlan mejor la moto, recorren la pista con
                            precisión
                            y logran el mejor desempeño en términos de lentitud y dominio.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="explora-reto" class="reto-section">
            <h2>Explora la información del reto</h2>
            <p>Elige el tema que quieres revisar. Así la información se presenta por bloques y no toda al tiempo.</p>
            <div class="reto-info-tabs" role="tablist" aria-label="Información del reto">
                <button class="reto-info-tab is-active" type="button" role="tab" id="reto-info-tab-categorias"
                    aria-controls="reto-info-panel-categorias" data-info-tab="categorias"
                    aria-selected="true">Categorías</button>
                <button class="reto-info-tab" type="button" role="tab" id="reto-info-tab-requisitos"
                    aria-controls="reto-info-panel-requisitos" data-info-tab="requisitos"
                    aria-selected="false">Requisitos</button>
                <button class="reto-info-tab" type="button" role="tab" id="reto-info-tab-reglas"
                    aria-controls="reto-info-panel-reglas" data-info-tab="reglas" aria-selected="false">Reglas</button>
            </div>

            <article class="reto-info-panel" role="tabpanel" id="reto-info-panel-categorias"
                aria-labelledby="reto-info-tab-categorias" data-info-panel="categorias">
                <div class="reto-info-panel-head">
                    <h3>Categorías de participación</h3>
                    <p>La clasificación separa experiencia y género para que la competencia sea más clara y comparable.</p>
                </div>
                <ul class="reto-chip-list">
                    <li>Mujeres novatas</li>
                    <li>Hombres novatos</li>
                    <li>Mujeres experimentadas</li>
                    <li>Hombres experimentados</li>
                </ul>
            </article>

            <article class="reto-info-panel" role="tabpanel" id="reto-info-panel-requisitos"
                aria-labelledby="reto-info-tab-requisitos" data-info-panel="requisitos" hidden>
                <div class="reto-info-panel-head">
                    <h3>Requisitos para participar</h3>
                    <p>Antes de inscribirte, verifica que cumples estas condiciones básicas.</p>
                </div>
                <ul class="reto-mini-list">
                    <li>Licencia de conducción vigente.</li>
                    <li>SOAT vigente.</li>
                    <li>Estar al día con el pago de comparendos.</li>
                </ul>
            </article>

            <article class="reto-info-panel" role="tabpanel" id="reto-info-panel-reglas"
                aria-labelledby="reto-info-tab-reglas" data-info-panel="reglas" hidden>
                <div class="reto-info-panel-head">
                    <h3>Reglas del reto</h3>
                    <p>Estas reglas buscan reforzar hábitos de conducción segura y controlada durante la prueba.</p>
                </div>
                <div class="reto-rule-grid">
                    <article class="reto-rule">
                        <strong>Cero alcohol</strong>
                        <span>No se permite consumo de alcohol o sustancias psicoactivas.</span>
                    </article>
                    <article class="reto-rule">
                        <strong>Sin apoyar los pies</strong>
                        <span>La prueba debe completarse sin poner los pies en el piso.</span>
                    </article>
                    <article class="reto-rule">
                        <strong>Dentro del carril</strong>
                        <span>La moto debe mantenerse en el recorrido establecido.</span>
                    </article>
                    <article class="reto-rule">
                        <strong>Control continuo</strong>
                        <span>No se puede dejar apagar la moto durante la prueba.</span>
                    </article>
                    <article class="reto-rule">
                        <strong>Salida inmediata</strong>
                        <span>Se debe arrancar tan pronto se dé la orden de inicio.</span>
                    </article>
                </div>
                <div class="reto-side" style="margin-top: 18px;">
                    <h3>Importante</h3>
                    <p>Incumplir cualquiera de estas reglas significa descalificación.</p>
                </div>
            </article>

        </section>

        <section id="inscripcion-reto" class="reto-section reto-cta">
            <h2>Acepta el reto</h2>
            <p>
                Demuestra que quien es pro no corre, domina. Inscríbete en la siguiente válida y participa en una
                experiencia centrada en el control, la pericia y el cuidado de la vida.
            </p>

            <a class="reto-btn reto-btn-primary" href="https://forms.gle/HQyMfK7k38y9z2xp8" target="_blank"
                rel="noopener noreferrer">
                Inscríbete en la siguiente válida
            </a>
        </section>
    </div>

    <script>
        (function() {
            var root = document.getElementById('sdm-reto-landing');
            if (!root) return;

            var processTabs = Array.prototype.slice.call(root.querySelectorAll('[data-process-tab]'));
            var processPanels = Array.prototype.slice.call(root.querySelectorAll('[data-process-panel]'));

            function activateProcess(step) {
                processTabs.forEach(function(tab) {
                    var active = tab.getAttribute('data-process-tab') === step;
                    tab.classList.toggle('is-active', active);
                    tab.setAttribute('aria-selected', active ? 'true' : 'false');
                    tab.setAttribute('tabindex', active ? '0' : '-1');
                });

                processPanels.forEach(function(panel) {
                    panel.hidden = panel.getAttribute('data-process-panel') !== step;
                });
            }

            processTabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    activateProcess(tab.getAttribute('data-process-tab'));
                });
            });

            function bindTabKeyboard(tabs, activateFn, attributeName) {
                tabs.forEach(function(tab, index) {
                    tab.addEventListener('keydown', function(event) {
                        var nextIndex = null;

                        if (event.key === 'ArrowRight' || event.key === 'ArrowDown') nextIndex = (
                            index + 1) % tabs.length;
                        if (event.key === 'ArrowLeft' || event.key === 'ArrowUp') nextIndex = (index -
                            1 + tabs.length) % tabs.length;
                        if (event.key === 'Home') nextIndex = 0;
                        if (event.key === 'End') nextIndex = tabs.length - 1;

                        if (nextIndex === null) return;

                        event.preventDefault();
                        var nextTab = tabs[nextIndex];
                        activateFn(nextTab.getAttribute(attributeName));
                        nextTab.focus();
                    });
                });
            }

            activateProcess('1');
            bindTabKeyboard(processTabs, activateProcess, 'data-process-tab');

            var infoTabs = Array.prototype.slice.call(root.querySelectorAll('[data-info-tab]'));
            var infoPanels = Array.prototype.slice.call(root.querySelectorAll('[data-info-panel]'));

            function activateInfo(name) {
                infoTabs.forEach(function(tab) {
                    var active = tab.getAttribute('data-info-tab') === name;
                    tab.classList.toggle('is-active', active);
                    tab.setAttribute('aria-selected', active ? 'true' : 'false');
                    tab.setAttribute('tabindex', active ? '0' : '-1');
                });

                infoPanels.forEach(function(panel) {
                    panel.hidden = panel.getAttribute('data-info-panel') !== name;
                });
            }

            infoTabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    activateInfo(tab.getAttribute('data-info-tab'));
                });
            });

            activateInfo('categorias');
            bindTabKeyboard(infoTabs, activateInfo, 'data-info-tab');
        })();
    </script>
@endsection
