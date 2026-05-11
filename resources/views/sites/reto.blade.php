@php
    $inscripcionUrl = 'https://forms.gle/HQyMfK7k38y9z2xp8';

    $heroBg = asset('reto-assets/' . rawurlencode('hero.png'));
    $heroRiders = asset('reto-assets/' . rawurlencode('banner-reto-mas-pro-v2_Capa 2.png'));
    $brandLogo = asset('reto-assets/' . rawurlencode('logo.png'));
    $ctaBg = asset('reto-assets/banner-reto.jpg');
    $whyVideoBg = asset('reto-assets/' . rawurlencode('banner-reto-mas-pro-v2_Capa 3.png'));
    $helmetIcon = asset('reto-assets/casco.png');
    $guantletIcon = asset('reto-assets/guantes.png');
    $cerebroIcon = asset('reto-assets/cerebro.png');
    $starIcon = asset('reto-assets/copa.png');
    $cancelIcon = asset('reto-assets/cancelar.png');

    $whyCards = [
        [
            'icon' => 'bi-people',
            'title' => '4 de cada 10',
            'text' => 'personas que mueren en las vías son motociclistas',
            'featured' => true,
        ],
        [
            'icon' => 'bi-speedometer2',
            'title' => 'El exceso de velocidad mata',
            'text' => 'Es el principal factor de riesgo en las vías.',
        ],
        [
            'icon' => 'bi-bicycle',
            'title' => 'Los motociclistas exceden más la velocidad',
            'text' => 'En comparación con otros usuarios de la vía.',
        ],
        [
            'icon' => 'bi-cone-striped',
            'title' => 'La falta de pericia también cobra vidas',
            'text' => 'El control y la técnica pueden marcar la diferencia.',
        ],
    ];

    $steps = [
        [
            'number' => '1',
            'title' => 'Tres pistas lentas',
            'text' => 'Primer acercamiento al reto.',
            'thumb' => asset('reto-assets/reto_64.webp'),
        ],
        [
            'number' => '2',
            'title' => 'Niveles de complejidad',
            'text' => 'La prueba exige mayor dominio.',
            'thumb' => asset('reto-assets/reto_81.webp'),
        ],
        [
            'number' => '3',
            'title' => 'Válidas eliminatorias',
            'text' => 'Clasificación durante todo el año.',
            'thumb' => asset('reto-assets/reto_88.webp'),
        ],
        [
            'number' => '4',
            'title' => 'Final del reto',
            'text' => 'Cierre en octubre de 2026.',
            'thumb' => asset('reto-assets/reto_92.webp'),
        ],
    ];

    $categories = [
        [
            'icon' => 'bi-gender-female',
            'title' => 'Mujeres novatas',
            'text' => 'menos de dos años manejando moto',
        ],
        [
            'icon' => 'bi-gender-male',
            'title' => 'Hombres novatos',
            'text' => 'menos de dos años manejando moto',
        ],
        [
            'icon' => 'bi-gender-female',
            'title' => 'Mujeres experimentadas',
            'text' => 'más de dos años manejando moto',
        ],
        [
            'icon' => 'bi-gender-male',
            'title' => 'Hombres experimentados',
            'text' => 'más de dos años manejando moto',
        ],
    ];

    $requirements = [
        'Licencia de conducción vigente A2',
        'SOAT y revisión técnico-mecánica al día',
        'Casco y elementos de protección',
        'Inscripción previa en la válida',
        'Estar al día con el pago de comparendo',
    ];

    $rules = [
        'Cero alcohol antes y durante la prueba',
        'No apoyar los pies en el piso',
        'Mantenerse dentro del recorrido establecido',
        'No apagar la moto durante la prueba',
    ];

    $footerLinks = [
        ['label' => 'Políticas de privacidad', 'href' => url('/manual-y-politicas-de-seguridad-de-la-informacion')],
        ['label' => 'Términos y condiciones', 'href' => '#'],
        ['label' => 'Mapa del sitio', 'href' => url('/sitemap')],
        ['label' => 'Atención a la ciudadanía', 'href' => url('/atencion-servicios/puntos-atencion')],
    ];

    $socialLinks = [
        ['label' => 'Facebook', 'icon' => 'bi-facebook', 'href' => '#'],
        ['label' => 'X', 'icon' => 'bi-twitter-x', 'href' => '#'],
        ['label' => 'Instagram', 'icon' => 'bi-instagram', 'href' => '#'],
        ['label' => 'YouTube', 'icon' => 'bi-youtube', 'href' => '#'],
    ];
@endphp
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reto | Secretaría Distrital de Movilidad</title>
    <meta name="description"
        content="Reto Más lento, más pro: una landing sobre conducción segura, control y dominio de la moto en Bogotá.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Work+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --bg: #f6f6ef;
            --surface: #ffffff;
            --surface-soft: #faf9f1;
            --border: rgba(79, 84, 31, 0.14);
            --text: #232323;
            --muted: #5c5c56;
            --olive: #4f551b;
            --olive-2: #3a4210;
            --lime: #c8da00;
            --lime-soft: #d9e600;
            --shadow: 0 18px 40px rgba(25, 27, 11, 0.08);
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 92px;
        }

        body {
            margin: 0;
            background:
                radial-gradient(circle at top left, rgba(201, 218, 0, 0.09), transparent 32%),
                linear-gradient(180deg, #fbfbf7 0%, #f5f5ee 34%, #ffffff 100%);
            color: var(--text);
            font-family: 'Work Sans', sans-serif;
            overflow-x: hidden;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font: inherit;
        }

        .skip-link {
            position: absolute;
            left: 12px;
            top: 10px;
            z-index: 2000;
            transform: translateY(-220%);
            background: #111;
            color: #fff;
            padding: 10px 14px;
            border-radius: 999px;
            font-weight: 700;
        }

        .skip-link:focus {
            transform: translateY(0);
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 1200;
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(78, 84, 31, 0.1);
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.02);
        }

        .site-header__inner {
            position: relative;
            max-width: 1320px;
            margin: 0 auto;
            padding: 12px 24px;
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 24px;
            align-items: center;
        }

        .site-brand {
            display: flex;
            align-items: center;
            min-width: 240px;
            width: clamp(100px, 20vw, 160px);
            padding: 4px 0;
        }

        .site-brand img {
            width: min(218px, 25vw);
            min-width: 210px;
            height: auto;
        }

        .site-header__actions {
            display: flex;
            align-items: center;
            justify-self: end;
            gap: 12px;
        }

        .site-menu-toggle {
            display: none;
            position: relative;
            width: 42px;
            height: 42px;
            padding: 0;
            cursor: pointer;
            border: 1px solid rgba(78, 84, 31, 0.16);
            border-radius: 999px;
            background: #fff;
            color: var(--olive);
            box-shadow: 0 10px 18px rgba(31, 33, 14, 0.05);
        }

        .site-menu-toggle span {
            position: absolute;
            left: 50%;
            width: 18px;
            height: 2px;
            border-radius: 999px;
            background: currentColor;
            transform: translateX(-50%);
            transition: top 0.18s ease, transform 0.18s ease, opacity 0.18s ease;
        }

        .site-menu-toggle span:nth-child(1) {
            top: 14px;
        }

        .site-menu-toggle span:nth-child(2) {
            top: 20px;
        }

        .site-menu-toggle span:nth-child(3) {
            top: 26px;
        }

        .site-header.is-menu-open .site-menu-toggle {
            background: linear-gradient(180deg, #5c6320 0%, #4f551b 100%);
            border-color: #4f551b;
            color: #fff;
        }

        .site-header.is-menu-open .site-menu-toggle span:nth-child(1) {
            top: 20px;
            transform: translateX(-50%) rotate(45deg);
        }

        .site-header.is-menu-open .site-menu-toggle span:nth-child(2) {
            opacity: 0;
        }

        .site-header.is-menu-open .site-menu-toggle span:nth-child(3) {
            top: 20px;
            transform: translateX(-50%) rotate(-45deg);
        }

        .site-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .site-nav a {
            position: relative;
            padding: 8px 2px;
            color: #232323;
            font-size: 0.98rem;
            font-weight: 500;
            white-space: nowrap;
        }

        .site-nav a::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 3px;
            height: 2px;
            border-radius: 999px;
            background: var(--lime);
            transform: scaleX(0);
            transform-origin: left center;
            transition: transform 0.18s ease;
        }

        .site-nav a:hover::after,
        .site-nav a:focus-visible::after {
            transform: scaleX(1);
        }

        .site-nav a:focus-visible,
        .site-menu-toggle:focus-visible,
        .hero-secondary:focus-visible,
        .btn-solid:focus-visible,
        .footer-links a:focus-visible,
        .social-links a:focus-visible,
        .tab-button:focus-visible {
            outline: 3px solid rgba(200, 218, 0, 0.75);
            outline-offset: 3px;
        }

        .header-cta {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            min-height: 42px;
            padding: 8px 16px 8px 18px;
            border: 1px solid #a5b200;
            border-radius: 999px;
            background: linear-gradient(180deg, #5c6320 0%, #4f551b 100%);
            color: #fff;
            font-size: 0.98rem;
            font-weight: 800;
            box-shadow: 0 12px 24px rgba(77, 85, 27, 0.18);
        }

        .btn-icon-circle {
            display: inline-grid;
            place-items: center;
            flex: 0 0 auto;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background: #dbe700;
            color: var(--olive);
            font-size: 0.95rem;
            line-height: 1;
        }

        .header-cta,
        .hero-secondary,
        .cta-band__button,
        .site-menu-toggle {
            transition: transform 0.18s ease, box-shadow 0.18s ease, background-color 0.18s ease, border-color 0.18s ease, color 0.18s ease, filter 0.18s ease;
            will-change: transform;
        }

        .header-cta:hover,
        .hero-secondary:hover,
        .cta-band__button:hover,
        .site-menu-toggle:hover {
            transform: translateY(-2px);
        }

        .header-cta:hover {
            background: linear-gradient(180deg, #697127 0%, #5b6119 100%);
            box-shadow: 0 16px 28px rgba(77, 85, 27, 0.24);
            filter: brightness(1.03);
        }

        .site-menu-toggle:hover {
            background: #f7f8ef;
            box-shadow: 0 14px 22px rgba(31, 33, 14, 0.08);
        }

        .header-cta:active,
        .hero-secondary:active,
        .cta-band__button:active,
        .site-menu-toggle:active {
            transform: translateY(0) scale(0.985);
        }

        .header-cta:hover .btn-icon-circle,
        .cta-band__button:hover .btn-icon-circle {
            transform: translateX(2px) scale(1.06);
        }

        .header-cta .btn-icon-circle,
        .cta-band__button .btn-icon-circle {
            transition: transform 0.18s ease, background-color 0.18s ease, color 0.18s ease;
        }

        .hero {
            position: relative;
            overflow: hidden;
            min-height: 470px;
            background: #0f1308;
            color: #fff;
        }

        .hero__bg {
            position: absolute;
            inset: 0;
            z-index: 1;
        }

        .hero__bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center;
            filter: saturate(0.98) brightness(0.92);
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 2;
            background:
                linear-gradient(90deg, rgba(8, 11, 4, 0.92) 0%, rgba(8, 11, 4, 0.88) 23%, rgba(8, 11, 4, 0.64) 42%, rgba(8, 11, 4, 0.12) 72%, rgba(8, 11, 4, 0.0) 100%),
                linear-gradient(180deg, rgba(8, 11, 4, 0.08) 0%, rgba(8, 11, 4, 0.12) 100%);
        }

        .hero__inner {
            position: relative;
            z-index: 3;
            max-width: 1320px;
            min-height: 470px;
            margin: 0 auto;
            padding: clamp(40px, 5vw, 62px) 24px 30px;
            display: flex;
            align-items: center;
        }

        .hero__copy {
            width: min(100%, 560px);
            padding-right: 24px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            min-height: 38px;
            padding: 0 14px 0 15px;
            border: 1px solid rgba(214, 226, 0, 0.95);
            border-radius: 999px;
            color: #d8ea00;
            background: rgba(21, 26, 9, 0.16);
            font-size: 0.98rem;
            font-weight: 800;
            letter-spacing: 0.04em;
        }

        .hero-badge i {
            font-size: 1.05rem;
        }

        .hero h1 {
            margin: 16px 0 18px;
            font-family: 'Montserrat', sans-serif;
            font-size: clamp(3.35rem, 6.9vw, 6.4rem);
            line-height: 0.92;
            font-weight: 800;
            letter-spacing: -0.05em;
        }

        .hero h1 .accent {
            display: block;
            color: var(--lime);
        }

        .hero p {
            max-width: 24ch;
            margin: 0;
            font-size: clamp(1.2rem, 1vw + 0.7rem, 1.55rem);
            line-height: 1.32;
            color: rgba(255, 255, 255, 0.95);
            text-wrap: balance;
        }

        .hero__actions {
            margin-top: 30px;
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .btn-solid {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            min-height: 42px;
            padding: 10px 18px 10px 20px;
            border: 1px solid #c8da00;
            border-radius: 999px;
            background: linear-gradient(180deg, #6a7120 0%, #596018 100%);
            color: #fff;
            font-size: 0.98rem;
            font-weight: 800;
            box-shadow: 0 14px 28px rgba(12, 15, 5, 0.2);
            transition: transform 0.18s ease, box-shadow 0.18s ease, background-color 0.18s ease;
        }

        .btn-solid:hover {
            transform: translateY(-2px);
            background: linear-gradient(180deg, #747b26 0%, #646a1d 100%);
            box-shadow: 0 18px 30px rgba(12, 15, 5, 0.26);
        }

        .btn-solid:active {
            transform: translateY(0) scale(0.985);
        }

        .hero-secondary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #d8ea00;
            font-size: 0.98rem;
            font-weight: 700;
        }

        .hero-secondary i {
            transition: transform 0.18s ease;
        }

        .hero-secondary:hover i {
            transform: translateY(2px);
        }

        .hero-secondary:hover {
            color: #efff3b;
            transform: translateY(-1px);
        }

        .hero__figure {
            position: absolute;
            right: 0;
            bottom: -6px;
            z-index: 3;
            width: min(58vw, 780px);
            pointer-events: none;
            filter: drop-shadow(0 22px 28px rgba(0, 0, 0, 0.28));
            animation: heroFigureIn 0.75s ease both;
        }

        .hero__figure img {
            width: 100%;
            height: auto;
        }

        .page-section {
            border-top: 1px solid rgba(79, 84, 31, 0.08);
            background: linear-gradient(180deg, rgba(251, 251, 246, 0.98) 0%, #ffffff 100%);
        }

        .page-section__inner {
            max-width: 1320px;
            margin: 0 auto;
            padding: clamp(38px, 4.2vw, 56px) 24px;
        }

        .page-section__title {
            margin: 0 0 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: clamp(2rem, 2.4vw, 2.8rem);
            line-height: 1.05;
            font-weight: 800;
            letter-spacing: -0.04em;
            color: #2a2a2a;
        }

        .page-section__lead {
            margin: 0;
            font-size: 1.02rem;
            line-height: 1.45;
            color: var(--muted);
        }

        .why-layout {
            margin-top: 24px;
            display: grid;
            grid-template-columns: minmax(0, 1fr) 240px;
            gap: 20px;
            align-items: stretch;
        }

        .why-main {
            min-width: 0;
            padding-right: 10px;
        }

        .why-cards {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 10px;
        }

        .stat-card {
            min-height: 176px;
            padding: 18px 14px 16px;
            border: 1px solid rgba(78, 84, 31, 0.14);
            border-radius: 12px;
            background: #fff;
            text-align: center;
            box-shadow: 0 12px 22px rgba(31, 33, 14, 0.04);
            transition: transform 0.18s ease, box-shadow 0.18s ease;
        }

        .stat-card:hover,
        .video-card:hover,
        .process-card:hover,
        .category-pill:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 26px rgba(31, 33, 14, 0.08);
        }

        .tab-button:hover {
            transform: translateY(-2px);
            background: #f7f8ef;
            border-color: rgba(79, 84, 31, 0.24);
            color: #333b12;
            box-shadow: 0 16px 26px rgba(31, 33, 14, 0.08);
        }

        .tab-button:active {
            transform: translateY(0) scale(0.985);
        }

        .stat-card__icon {
            display: inline-grid;
            place-items: center;
            width: 56px;
            height: 56px;
            margin-bottom: 16px;
            border-radius: 50%;
            background: rgba(200, 218, 0, 0.28);
            color: var(--olive);
            font-size: 1.45rem;
        }

        .stat-card__title {
            display: block;
            margin: 0 0 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.02rem;
            line-height: 1.12;
            font-weight: 800;
            color: #2d2d2d;
        }

        .stat-card__title--featured {
            font-size: 1.25rem;
            color: var(--olive);
        }

        .stat-card__text {
            margin: 0;
            font-size: 0.93rem;
            line-height: 1.45;
            color: #545454;
        }

        .section-note {
            margin: 16px 0 0;
            max-width: 880px;
            font-size: 1.04rem;
            line-height: 1.45;
            color: #333;
        }

        .why-video {
            padding-left: 18px;
            border-left: 1px solid rgba(78, 84, 31, 0.16);
        }

        .video-card {
            overflow: hidden;
            border: 1px solid rgba(78, 84, 31, 0.14);
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 12px 22px rgba(31, 33, 14, 0.05);
            transition: transform 0.18s ease, box-shadow 0.18s ease;
        }

        .video-card__thumb {
            position: relative;
            aspect-ratio: 1 / 1;
            overflow: hidden;
            background: #1b1f0e;
        }

        .video-card__thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center;
            filter: brightness(0.55) saturate(0.9);
        }

        .video-card__thumb::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.08) 0%, rgba(0, 0, 0, 0.36) 100%);
        }

        .video-card__play {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 2;
            width: 62px;
            height: 62px;
            margin: -31px 0 0 -31px;
            border-radius: 50%;
            background: var(--lime);
            color: #fff;
            display: grid;
            place-items: center;
            font-size: 1.7rem;
            box-shadow: 0 14px 20px rgba(0, 0, 0, 0.22);
        }

        .video-card__body {
            padding: 14px 14px 16px;
            text-align: center;
        }

        .video-card__body strong {
            display: block;
            margin-bottom: 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.04rem;
            line-height: 1.18;
            font-weight: 800;
            color: #314000;
        }

        .video-card__body p {
            margin: 0;
            font-size: 0.92rem;
            line-height: 1.35;
            color: #595959;
        }

        .what-layout {
            margin-top: 24px;
            display: grid;
            grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.25fr);
            gap: 30px;
            align-items: center;
        }

        .what-list {
            display: grid;
            gap: 14px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .what-list li {
            display: flex;
            align-items: center;
            gap: 16px;
            font-size: 1.06rem;
            line-height: 1.25;
            color: #212121;
        }

        .what-list__icon {
            display: inline-grid;
            place-items: center;
            width: 34px;
            height: 34px;
            flex: 0 0 auto;
        }

        .what-list__icon img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: contain;
        }

        .what-callout {
            position: relative;
            overflow: hidden;
            padding: 28px 28px 30px;
            border-radius: 12px;
            background: linear-gradient(135deg, #434c16 0%, #31370f 100%);
            color: #fff;
            box-shadow: 0 18px 30px rgba(31, 33, 14, 0.12);
        }

        .what-callout__icons {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: clamp(12px, 5vw, 50px);
            margin-bottom: 14px;
        }

        .what-callout__icon {
            display: inline-grid;
            place-items: center;
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: var(--lime);
            color: var(--olive);
            font-size: 1.55rem;
            box-shadow: 0 10px 18px rgba(0, 0, 0, 0.16);
            overflow: hidden;
        }

        .what-callout__icon img {
            width: 75%;
            height: 75%;
            object-fit: cover;
        }

        .what-callout h3 {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            font-size: clamp(1.55rem, 2.3vw, 2.4rem);
            line-height: 1.02;
            font-weight: 800;
            text-align: center;
            letter-spacing: -0.04em;
        }

        .what-callout h3 .accent {
            color: #d9e600;
        }

        .what-callout p {
            margin: 6px 0 0;
            font-size: 1.08rem;
            line-height: 1.35;
            text-align: center;
            color: rgba(255, 255, 255, 0.94);
        }

        .process-layout {
            margin-top: 24px;
            display: grid;
            grid-template-columns: minmax(0, 1fr) 270px;
            gap: 22px;
            align-items: stretch;
        }

        .process-track {
            position: relative;
            padding-top: 22px;
        }

        .process-track::before {
            content: "";
            position: absolute;
            left: 38px;
            right: 38px;
            top: 34px;
            height: 1px;
            background: rgba(200, 218, 0, 0.95);
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 10px;
            align-items: stretch;
        }

        .process-card {
            position: relative;
            min-height: 178px;
            padding: 24px 14px 16px;
            border: 1px solid rgba(78, 84, 31, 0.14);
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 12px 22px rgba(31, 33, 14, 0.04);
            transition: transform 0.18s ease, box-shadow 0.18s ease;
        }

        .process-card__thumb {
            width: min(160px, 100%);
            aspect-ratio: 3 / 2;
            margin: 0 auto 12px;
            border-radius: 12px;
            overflow: hidden;
            background: #eef0e3;
            box-shadow: 0 8px 16px rgba(31, 33, 14, 0.08);
        }

        .process-card__thumb img {
            width: 100%;
            height: 50%;
            border-radius: 8px;
            object-fit: cover;
            object-position: center center;
            margin-bottom: 18px;
        }

        .process-card__number {
            position: absolute;
            left: 50%;
            top: -18px;
            width: 36px;
            height: 36px;
            margin-left: -18px;
            border-radius: 50%;
            background: var(--lime);
            color: #2d330f;
            display: grid;
            place-items: center;
            font-weight: 800;
            box-shadow: 0 8px 16px rgba(31, 33, 14, 0.12);
        }

        .process-card h3 {
            margin: 6px 0 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.05rem;
            line-height: 1.12;
            font-weight: 800;
            text-align: center;
            color: #2a2a2a;
        }

        .process-card p {
            margin: 0;
            font-size: 0.94rem;
            line-height: 1.45;
            text-align: center;
            color: #585858;
        }

        .process-side {
            align-self: stretch;
            padding: 22px 20px;
            border: 1px solid rgba(78, 84, 31, 0.1);
            border-radius: 12px;
            background: #f8f7ed;
            box-shadow: 0 10px 18px rgba(31, 33, 14, 0.04);
        }

        .process-side__icon {
            display: grid;

            place-items: center;
            width: 50px;
            height: 50px;
            margin: 0 auto 10px;
            border-radius: 50%;
            background: #425011;
            overflow: hidden;
        }

        .process-side__icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .process-side h3 {
            margin: 0 0 10px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.18rem;
            line-height: 1.2;
            font-weight: 800;
            color: #334000;
        }

        .process-side p {
            margin: 0;
            font-size: 0.98rem;
            line-height: 1.5;
            color: #565656;
        }

        .tabs-header {
            margin-top: 18px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .tab-button {
            min-height: 36px;
            padding: 7px 16px;
            border: 1px solid rgba(78, 84, 31, 0.14);
            border-radius: 999px;
            background: #fff;
            color: #4a5215;
            font-size: 0.97rem;
            font-weight: 800;
            box-shadow: 0 6px 14px rgba(31, 33, 14, 0.03);
            transition: transform 0.18s ease, box-shadow 0.18s ease, background-color 0.18s ease, color 0.18s ease;
        }

        .tab-button.is-active {
            background: linear-gradient(180deg, #5d6520 0%, #4f551b 100%);
            border-color: #4f551b;
            color: #fff;
        }

        .tab-panels {
            margin-top: 32px;
        }

        .tab-panel {
            animation: fadeUp 0.35s ease both;
        }

        .tab-panel__title {
            margin: 0 0 4px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.08rem;
            line-height: 1.2;
            font-weight: 800;
            color: #2d2d2d;
        }

        .tab-panel__lead {
            margin: 0 0 32px;
            font-size: 0.98rem;
            line-height: 1.4;
            color: #595959;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
            margin-top: 32px;
        }

        .category-pill {
            min-height: 72px;
            padding: 12px 14px;
            display: flex;
            align-items: center;
            gap: 12px;
            border: 1px solid rgba(78, 84, 31, 0.14);
            border-radius: 14px;
            background: linear-gradient(180deg, #fbfbf6 0%, #f5f5e8 100%);
            box-shadow: 0 10px 18px rgba(31, 33, 14, 0.04);
            transition: transform 0.18s ease, box-shadow 0.18s ease;
        }

        .category-pill__icon {
            display: inline-grid;
            place-items: center;
            width: 38px;
            height: 38px;
            flex: 0 0 auto;
            border-radius: 50%;
            border: 1px solid rgba(78, 84, 31, 0.14);
            color: var(--olive);
            font-size: 1.25rem;
        }

        .category-pill__content {
            min-width: 0;
        }

        .category-pill__content strong {
            display: block;
            font-size: 0.98rem;
            line-height: 1.15;
            font-weight: 800;
            color: #2c2c2c;
        }

        .category-pill__content span {
            display: block;
            margin-top: 2px;
            font-size: 0.92rem;
            line-height: 1.2;
            color: #5b5b5b;
        }

        .tab-panel__grid {
            display: grid;
            gap: 14px;
        }

        .requirement-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .requirement-card,
        .rule-card {
            padding: 16px 16px 15px;
            border-radius: 14px;
            border: 1px solid rgba(78, 84, 31, 0.12);
            background: #fff;
            box-shadow: 0 10px 18px rgba(31, 33, 14, 0.04);
        }

        .requirement-card {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .requirement-card__icon {
            display: inline-grid;
            place-items: center;
            width: 28px;
            height: 28px;
            flex: 0 0 auto;
            border-radius: 50%;
            background: rgba(200, 218, 0, 0.18);
            color: var(--olive);
            font-size: 0.95rem;
            margin-top: 2px;
        }

        .requirement-card strong,
        .rule-card strong {
            display: block;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            line-height: 1.15;
            font-weight: 800;
            color: #2f3514;
        }

        .requirement-card p,
        .rule-card p {
            margin: 0;
            font-size: 0.94rem;
            line-height: 1.45;
            color: #595959;
        }

        .rule-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .rule-card {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .rule-card__icon {
            display: inline-grid;
            place-items: center;
            width: 28px;
            height: 28px;
            flex: 0 0 auto;
            border-radius: 50%;
            background: rgba(200, 218, 0, 0.18);
            color: var(--olive);
            font-size: 0.95rem;
            margin-top: 2px;
        }

        .tab-panel.is-hidden {
            display: none;
        }

        .inscribe-anchor {
            display: block;
            height: 0;
            scroll-margin-top: 96px;
        }

        .cta-band {
            position: relative;
            overflow: hidden;
            margin-top: 8px;
            background: linear-gradient(180deg, #4d541f 0%, #2f3510 100%);
            color: #fff;
        }

        .cta-band__bg {
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .cta-band__bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: left 40%;
            opacity: 0.42;
            filter: saturate(0.85) brightness(0.7);
        }

        .cta-band::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(90deg, rgba(17, 21, 9, 0.82) 0%, rgba(17, 21, 9, 0.72) 34%, rgba(17, 21, 9, 0.66) 58%, rgba(17, 21, 9, 0.38) 100%);
        }

        .cta-band__inner {
            position: relative;
            z-index: 2;
            max-width: 1320px;
            margin: 0 auto;
            padding: 28px 24px 24px;
            min-height: 208px;
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            gap: 24px;
            align-items: center;
        }

        .cta-band__copy {
            max-width: 560px;
        }

        .cta-band__copy h2 {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            font-size: clamp(2rem, 3vw, 3.15rem);
            line-height: 1.02;
            font-weight: 800;
            letter-spacing: -0.04em;
        }

        .cta-band__copy h2 .accent {
            color: #d9e600;
        }

        .cta-band__copy p {
            margin: 10px 0 0;
            font-size: 1.05rem;
            line-height: 1.42;
            color: rgba(255, 255, 255, 0.94);
        }

        .cta-band__button {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            min-height: 76px;
            max-width: 315px;
            padding: 16px 18px 16px 22px;
            border-radius: 999px;
            background: linear-gradient(180deg, #d9e600 0%, #c7d600 100%);
            color: #20230d;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.18rem;
            line-height: 1.08;
            font-weight: 800;
            box-shadow: 0 18px 30px rgba(0, 0, 0, 0.18);
        }

        .cta-band__button:hover {
            background: linear-gradient(180deg, #e1ec09 0%, #cedb00 100%);
            transform: translateY(-2px);
            box-shadow: 0 22px 36px rgba(0, 0, 0, 0.22);
            filter: brightness(1.03);
        }

        .cta-band__button:active {
            transform: translateY(0) scale(0.985);
        }

        .cta-band__button .btn-icon-circle {
            width: 30px;
            height: 30px;
            background: #2d330f;
            color: #d9e600;
            font-size: 1rem;
        }

        .site-footer {
            background: linear-gradient(180deg, #3d4516 0%, #2d3310 100%);
            color: #fff;
        }

        .site-footer__inner {
            max-width: 1320px;
            margin: 0 auto;
            padding: 20px 24px 24px;
            border-top: 1px solid rgba(216, 234, 0, 0.34);
        }

        .site-footer__top {
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 24px;
            align-items: center;
            padding-bottom: 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            justify-content: space-between;
        }

        .site-footer__brand {
            display: flex;
            align-items: center;
        }

        .site-footer__brand img {
            width: min(300px, 25vw);
            min-width: 210px;
            height: auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 22px;
            flex-wrap: wrap;
            font-size: 0.97rem;
            font-weight: 500;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.9);
        }

        .social-links {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-direction: row-reverse;
        }

        .social-links a {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.16);
            color: #fff;
            transition: transform 0.18s ease, background-color 0.18s ease;
        }

        .social-links a:hover {
            transform: translateY(-2px);
            background: rgba(255, 255, 255, 0.13);
            border-color: rgba(255, 255, 255, 0.24);
        }

        .social-links a:active {
            transform: translateY(0) scale(0.96);
        }

        .page-anchor {
            display: block;
            height: 0;
            scroll-margin-top: 96px;
        }

        @keyframes heroFigureIn {
            from {
                opacity: 0;
                transform: translateY(18px) scale(0.98);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 1199.98px) {
            .hero__figure {
                width: min(62vw, 720px);
                right: -2vw;
            }

            .why-layout,
            .what-layout,
            .process-layout {
                grid-template-columns: 1fr;
            }

            .why-video {
                padding-left: 0;
                border-left: 0;
            }

            .process-side {
                max-width: 420px;
            }
        }

        @media (max-width: 991.98px) {
            .site-header__inner {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
                gap: 10px 12px;
            }

            .site-brand {
                flex: 1 1 auto;
                min-width: 0;
                width: auto;
                max-width: calc(100% - 138px);
            }

            .site-brand img {
                min-width: 0;
                width: min(190px, 44vw);
            }

            .site-header__actions {
                margin-left: auto;
            }

            .site-menu-toggle {
                display: inline-grid;
                place-items: center;
                flex: 0 0 auto;
            }

            .site-nav {
                display: none;
                order: 3;
                flex: 0 0 100%;
                width: 100%;
                margin-top: 4px;
                padding: 12px;
                border: 1px solid rgba(78, 84, 31, 0.12);
                border-radius: 18px;
                background: rgba(255, 255, 255, 0.98);
                box-shadow: 0 16px 30px rgba(31, 33, 14, 0.1);
                flex-direction: column;
                align-items: stretch;
                justify-content: flex-start;
                gap: 8px;
                overflow: hidden;
            }

            .site-header.is-menu-open .site-nav {
                display: flex;
            }

            .site-nav a {
                display: block;
                padding: 12px 14px;
                border-radius: 12px;
                background: rgba(250, 249, 241, 0.95);
                white-space: normal;
                font-size: 1rem;
            }

            .site-nav a::after {
                display: none;
            }

            .hero {
                min-height: 430px;
            }

            .hero__inner {
                min-height: 430px;
            }

            .hero__copy {
                width: min(100%, 520px);
            }

            .hero__figure {
                display: none;
            }

            .why-cards,
            .process-steps,
            .category-grid,
            .requirement-grid,
            .rule-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .cta-band__inner {
                grid-template-columns: 1fr;
                min-height: 0;
            }

            .cta-band__button {
                max-width: none;
                width: 100%;
                justify-content: center;
            }

            .site-footer__top {
                grid-template-columns: 1fr;
                justify-items: start;
            }

            .footer-links {
                justify-content: flex-start;
            }
        }

        @media (max-width: 767.98px) {

            .site-header__inner,
            .hero__inner,
            .page-section__inner,
            .cta-band__inner,
            .site-footer__inner {
                padding-left: 16px;
                padding-right: 16px;
            }

            .site-brand,
            .site-footer__brand {
                min-width: 0;
            }

            .site-brand img,
            .site-footer__brand img {
                min-width: 0;
                width: min(190px, 48vw);
            }

            .hero__actions {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-solid,
            .hero-secondary {
                width: 100%;
                justify-content: center;
            }

            .tabs-header {
                width: 100%;
            }

            .tab-button {
                flex: 1 1 calc(50% - 5px);
                min-width: 0;
            }

            .hero h1 {
                font-size: clamp(3rem, 16vw, 4.2rem);
            }

            .hero p {
                max-width: 18ch;
                font-size: 1.08rem;
            }

            .why-cards,
            .process-steps,
            .category-grid,
            .requirement-grid,
            .rule-grid {
                grid-template-columns: 1fr;
            }

            .what-callout {
                padding-inline: 18px;
            }

            .cta-band__copy h2 {
                font-size: clamp(1.8rem, 8vw, 2.4rem);
            }

            .cta-band__button {
                font-size: 1.05rem;
                min-height: 68px;
                padding-inline: 18px;
            }
        }

        @media (max-width: 575.98px) {
            .site-header__actions {
                gap: 8px;
            }

            .header-cta {
                padding: 7px 11px 7px 13px;
                font-size: 0.86rem;
                gap: 8px;
            }

            .btn-icon-circle {
                width: 22px;
                height: 22px;
                font-size: 0.82rem;
            }

            .site-header.is-menu-open .site-nav {
                gap: 6px;
            }

            .site-header.is-menu-open .site-nav a {
                font-size: 0.95rem;
            }

            .hero-badge {
                font-size: 0.9rem;
            }

            .hero__actions {
                gap: 12px;
            }

            .btn-solid {
                width: 100%;
                justify-content: center;
            }

            .hero-secondary {
                width: 100%;
                justify-content: center;
            }

            .stat-card,
            .process-card,
            .requirement-card,
            .rule-card {
                min-height: 0;
            }
        }
    </style>
</head>

<body>
    <a class="skip-link" href="#inicio">Saltar al contenido principal</a>

    <header class="site-header">
        <div class="site-header__inner">
            <a class="site-brand" href="#inicio" aria-label="Ir al inicio">
                <img src="{{ $brandLogo }}" alt="Alcaldía Mayor de Bogotá D.C. y Secretaría de Movilidad">
            </a>

            <nav class="site-nav" id="site-primary-menu" aria-label="Navegación principal">
                <a href="#inicio">Inicio</a>
                <a href="#por-que">El reto</a>
                <a href="#explora">Información</a>
                <a href="#noticias">Noticias</a>
                <a href="#faq">Preguntas frecuentes</a>
            </nav>

            <div class="site-header__actions">
                <a class="header-cta" href="{{ $inscripcionUrl }}" target="_blank" rel="noopener noreferrer">
                    <span>Inscribete</span>
                    <span class="btn-icon-circle" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                </a>
                <button class="site-menu-toggle" type="button" aria-controls="site-primary-menu" aria-expanded="false"
                    aria-label="Abrir menú principal">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <section class="hero" id="inicio" aria-label="Reto Más lento, más pro">
            <div class="hero__bg" aria-hidden="true">
                <img src="{{ $heroBg }}" alt="" loading="eager" decoding="async">
            </div>

            <div class="hero__inner">
                <div class="hero__copy">
                    <div class="hero-badge">
                        <span>RETO</span>
                        <i class="bi bi-bicycle" aria-hidden="true"></i>
                    </div>

                    <h1>
                        Más lento,
                        <span class="accent">más pro.</span>
                    </h1>

                    <p>Ser buen motociclista no es correr. Es tener el control y llegar seguro.</p>

                    <div class="hero__actions">
                        <a class="btn-solid" href="{{ $inscripcionUrl }}" target="_blank" rel="noopener noreferrer">
                            <span>Inscribete</span>
                            <span class="btn-icon-circle" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                        </a>
                        <a class="hero-secondary" href="#por-que">
                            <span>Conoce más</span>
                            <i class="bi bi-chevron-down" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- <div class="hero__figure" aria-hidden="true">
                <img src="{{ $heroRiders }}" alt="" loading="eager" decoding="async">
            </div> --}}
        </section>

        <section class="page-section" id="por-que" aria-labelledby="por-que-title">
            <div class="page-section__inner">
                <h2 class="page-section__title" id="por-que-title">¿Por qué este reto?</h2>

                <div class="why-layout">
                    <div class="why-main">
                        <div class="why-cards">
                            @foreach ($whyCards as $card)
                                <article class="stat-card {{ !empty($card['featured']) ? 'stat-card--featured' : '' }}">
                                    <span class="stat-card__icon" aria-hidden="true">
                                        <i class="bi {{ $card['icon'] }}"></i>
                                    </span>
                                    <strong
                                        class="stat-card__title {{ !empty($card['featured']) ? 'stat-card__title--featured' : '' }}">
                                        {{ $card['title'] }}
                                    </strong>
                                    <p class="stat-card__text">{{ $card['text'] }}</p>
                                </article>
                            @endforeach
                        </div>

                        <p class="section-note">
                            Este reto busca cambiar esa realidad. Promueve el control, la técnica y las decisiones
                            seguras para proteger la vida en las vías de Bogotá.
                        </p>
                    </div>

                    <aside class="why-video">
                        <article class="video-card" aria-label="Video generalidades del reto">
                            <div class="video-card__thumb">
                                <img src="{{ $whyVideoBg }}" alt="" loading="lazy" decoding="async">
                                <span class="video-card__play" aria-hidden="true"><i class="bi bi-play-fill"></i></span>
                            </div>
                            <div class="video-card__body">
                                <strong>Ver video</strong>
                            </div>
                        </article>
                    </aside>
                </div>
            </div>
        </section>

        <section class="page-section" id="que-busca" aria-labelledby="que-busca-title">
            <div class="page-section__inner">
                <h2 class="page-section__title" id="que-busca-title">¿Qué busca?</h2>

                <div class="what-layout">

                    <ul class="what-list" aria-label="Objetivos del reto">

                        <p class="page-section__lead">El reto ‘Más lento, más pro’ busca tumbar el mito de que ir más
                            rápido es
                            ir mejor, recordando a los motociclistas que el exceso de velocidad es el riesgo, pero que
                            el
                            dominio, el control y las decisiones seguras en las vías, son acciones que protegen la vida.
                        </p>
                        <br>

                        <li>
                            <span class="what-list__icon" aria-hidden="true"><img src="{{ $cancelIcon }}"
                                    alt=""></span>
                            <span>Velocidad <b>&ne;</b> eficiencia</span>
                        </li>
                        <li>
                            <span class="what-list__icon" aria-hidden="true"><img src="{{ $cancelIcon }}"
                                    alt=""></span>
                            <span>Velocidad <b>&ne;</b> habilidad</span>
                        </li>
                        <li>
                            <span class="what-list__icon" aria-hidden="true"><img src="{{ $cancelIcon }}"
                                    alt=""></span>
                            <span>Lentitud <b>&ne;</b> estorbo</span>
                        </li>
                    </ul>

                    <article class="what-callout" aria-label="Mensaje principal del reto">
                        <div class="what-callout__icons" aria-hidden="true">
                            <span class="what-callout__icon">
                                <img src="{{ $helmetIcon }}" alt="">
                            </span>
                            <span class="what-callout__icon">
                                <img src="{{ $guantletIcon }}" alt="">
                            </span>
                            <span class="what-callout__icon">
                                <img src="{{ $cerebroIcon }}" alt="">
                            </span>
                        </div>

                        <h3>
                            Ser pro es <span class="accent">dominar,</span><br>
                            <span class="accent">controlar</span> y decidir bien.
                        </h3>
                        <p>Llegar, sin poner en riesgo la vida, es el verdadero logro.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="page-section" id="como-consiste" aria-labelledby="como-consiste-title">
            <div class="page-section__inner">
                <h2 class="page-section__title" id="como-consiste-title">¿En qué consiste?</h2>
                <p class="page-section__lead">Un reto progresivo que evalúa tus habilidades y tu control.</p>

                <div class="process-layout">
                    <div class="process-track">
                        <div class="process-steps">
                            @foreach ($steps as $step)
                                <article class="process-card">
                                    <span class="process-card__number">{{ $step['number'] }}</span>
                                    <span class="process-card__thumb" aria-hidden="true">
                                        <img src="{{ $step['thumb'] }}" alt="" loading="lazy"
                                            decoding="async">
                                    </span>
                                    <h3>{{ $step['title'] }}</h3>
                                    <p>{{ $step['text'] }}</p>
                                </article>
                            @endforeach
                        </div>
                    </div>

                    <aside class="process-side" id="faq">
                        <span class="process-side__icon" aria-hidden="true">
                            <img src="{{ $starIcon }}" alt="">
                        </span>
                        <h3>¿Cómo se define a quienes avanzan?</h3>
                        <p>
                            El reto no premia correr. Premia a quienes controlan mejor la moto, recorren la pista con
                            precisión y logran el mejor desempeño en términos de lentitud y dominio.
                        </p>
                    </aside>
                </div>
            </div>
        </section>

        <section class="page-section" id="explora" aria-labelledby="explora-title">
            <div class="page-section__inner">
                <h2 class="page-section__title" id="explora-title">Explora la información del reto</h2>
                <p class="page-section__lead">Elige el tema que quieres revisar. Así la información se presenta por
                    bloques y no toda al tiempo.</p>

                <div class="tabs-header" role="tablist" aria-label="Información del reto">
                    <button class="tab-button is-active" type="button" role="tab" aria-selected="true"
                        aria-controls="panel-categorias" data-reto-tab="categorias">
                        Categorías
                    </button>
                    <button class="tab-button" type="button" role="tab" aria-selected="false"
                        aria-controls="panel-requisitos" data-reto-tab="requisitos">
                        Requisitos
                    </button>
                    <button class="tab-button" type="button" role="tab" aria-selected="false"
                        aria-controls="panel-reglas" data-reto-tab="reglas">
                        Reglas
                    </button>
                </div>

                <div class="tab-panels">
                    <section class="tab-panel" id="panel-categorias" data-reto-panel="categorias" role="tabpanel">
                        <h3 class="tab-panel__title">Categorías de participación</h3>
                        <p class="tab-panel__lead">La clasificación separa experiencia y género para que la competencia
                            sea más clara y comparable.</p>

                        <div class="category-grid">
                            @foreach ($categories as $category)
                                <article class="category-pill">
                                    <span class="category-pill__icon" aria-hidden="true">
                                        <i class="bi {{ $category['icon'] }}"></i>
                                    </span>
                                    <div class="category-pill__content">
                                        <strong>{{ $category['title'] }}</strong>
                                        <span>{{ $category['text'] }}</span>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </section>

                    <section class="tab-panel is-hidden" id="panel-requisitos" data-reto-panel="requisitos"
                        role="tabpanel" hidden>
                        <h3 class="tab-panel__title">Requisitos para participar</h3>
                        <p class="tab-panel__lead">Antes de inscribirte, verifica que cumples estas condiciones
                            básicas.</p>

                        <div class="tab-panel__grid requirement-grid">
                            @foreach ($requirements as $requirement)
                                <article class="requirement-card">
                                    <span class="requirement-card__icon" aria-hidden="true"><i
                                            class="bi bi-check2"></i></span>
                                    <strong>{{ $requirement }}</strong>
                                </article>
                            @endforeach
                        </div>
                    </section>

                    <section class="tab-panel is-hidden" id="panel-reglas" data-reto-panel="reglas" role="tabpanel"
                        hidden>
                        <h3 class="tab-panel__title">Reglas del reto</h3>
                        <p class="tab-panel__lead">Estas reglas buscan reforzar hábitos de conducción segura y
                            controlada durante la prueba.</p>

                        <div class="tab-panel__grid rule-grid">
                            @foreach ($rules as $rule)
                                <article class="rule-card">
                                    <span class="rule-card__icon" aria-hidden="true"><i
                                            class="bi bi-check2"></i></span>
                                    <div>
                                        <strong>{{ $rule }}</strong>
                                        <p>La prueba se desarrolla con control, precisión y respeto por el recorrido
                                            definido.</p>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <span class="page-anchor" id="noticias" aria-hidden="true"></span>

        <section class="cta-band" id="inscribirse" aria-labelledby="inscribirse-title">
            <div class="cta-band__bg" aria-hidden="true">
                <img src="{{ $ctaBg }}" alt="" loading="lazy" decoding="async">
            </div>

            <div class="cta-band__inner">
                <div class="cta-band__copy">
                    <h2 id="inscribirse-title">
                        Acepta <span class="accent">el reto</span>
                    </h2>
                    <p>Demuestra que quien es pro no corre, domina. Inscríbete y sé parte de una cultura de movilidad
                        segura.</p>
                </div>

                <a class="cta-band__button" href="{{ $inscripcionUrl }}" target="_blank" rel="noopener noreferrer">
                    <span>Inscríbete en la<br> siguiente válida</span>
                    <span class="btn-icon-circle" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                </a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="site-footer__inner">
            <div class="site-footer__top">

                <nav class="footer-links" aria-label="Enlaces de pie de página">
                    @foreach ($footerLinks as $link)
                        <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
                    @endforeach
                </nav>

                <div class="social-links" aria-label="Redes sociales">
                    @foreach ($socialLinks as $social)
                        <a href="{{ $social['href'] }}" aria-label="{{ $social['label'] }}"
                            title="{{ $social['label'] }}">
                            <i class="bi {{ $social['icon'] }}" aria-hidden="true"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const siteHeader = document.querySelector('.site-header');
            const menuToggle = siteHeader ? siteHeader.querySelector('.site-menu-toggle') : null;
            const siteNav = siteHeader ? siteHeader.querySelector('#site-primary-menu') : null;
            const navLinks = siteNav ? Array.from(siteNav.querySelectorAll('a')) : [];
            const buttons = Array.from(document.querySelectorAll('[data-reto-tab]'));
            const panels = Array.from(document.querySelectorAll('[data-reto-panel]'));
            const mobileQuery = window.matchMedia('(max-width: 991.98px)');

            function setMenuOpen(open) {
                if (!siteHeader || !menuToggle || !siteNav) {
                    return;
                }

                const active = open && mobileQuery.matches;
                siteHeader.classList.toggle('is-menu-open', active);
                menuToggle.setAttribute('aria-expanded', active ? 'true' : 'false');
                menuToggle.setAttribute('aria-label', active ? 'Cerrar menú principal' : 'Abrir menú principal');
            }

            if (menuToggle && siteHeader && siteNav) {
                setMenuOpen(false);

                menuToggle.addEventListener('click', function() {
                    setMenuOpen(!siteHeader.classList.contains('is-menu-open'));
                });

                navLinks.forEach(function(link) {
                    link.addEventListener('click', function() {
                        setMenuOpen(false);
                    });
                });

                document.addEventListener('click', function(event) {
                    if (!mobileQuery.matches || !siteHeader.classList.contains('is-menu-open')) {
                        return;
                    }

                    if (!siteHeader.contains(event.target)) {
                        setMenuOpen(false);
                    }
                });

                document.addEventListener('keydown', function(event) {
                    if (event.key === 'Escape') {
                        setMenuOpen(false);
                    }
                });

                window.addEventListener('resize', function() {
                    if (!mobileQuery.matches) {
                        setMenuOpen(false);
                    }
                });
            }

            function activateTab(name) {
                buttons.forEach(function(button) {
                    const active = button.getAttribute('data-reto-tab') === name;
                    button.classList.toggle('is-active', active);
                    button.setAttribute('aria-selected', active ? 'true' : 'false');
                });

                panels.forEach(function(panel) {
                    const active = panel.getAttribute('data-reto-panel') === name;
                    panel.hidden = !active;
                    panel.classList.toggle('is-hidden', !active);
                });
            }

            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    activateTab(this.getAttribute('data-reto-tab'));
                });
            });

            activateTab('categorias');
        });
    </script>
</body>

</html>
