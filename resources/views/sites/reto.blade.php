@php
    $inscripcionUrl = 'https://forms.gle/HQyMfK7k38y9z2xp8';

    $heroFallback = asset('reto-assets/banner-reto.jpg');
    $heroSlidePatterns = [
        public_path('reto-assets/hero/*.jpg'),
        public_path('reto-assets/hero/*.jpeg'),
        public_path('reto-assets/hero/*.png'),
        public_path('reto-assets/hero/*.webp'),
        public_path('reto-assets/hero/*.JPG'),
        public_path('reto-assets/hero/*.JPEG'),
        public_path('reto-assets/hero/*.PNG'),
        public_path('reto-assets/hero/*.WEBP'),
    ];
    $heroSlideFiles = [];

    foreach ($heroSlidePatterns as $pattern) {
        $heroSlideFiles = array_merge($heroSlideFiles, glob($pattern) ?: []);
    }

    $heroSlideFiles = array_values(array_unique($heroSlideFiles));
    natcasesort($heroSlideFiles);
    $heroSlides = array_values(
        array_map(function ($path) {
            return [
                'src' => asset('reto-assets/hero/' . rawurlencode(basename($path))),
            ];
        }, $heroSlideFiles),
    );

    if ($heroSlides === []) {
        $heroSlides[] = ['src' => $heroFallback];
    }

    $heroSlideTotal = count($heroSlides);
    $galleryImageFiles = glob(public_path('reto-assets/galeria/reto_act1_*.*')) ?: [];
    natcasesort($galleryImageFiles);
    $galleryImages = [];

    foreach (array_values($galleryImageFiles) as $index => $path) {
        $galleryImages[] = [
            'src' => asset('reto-assets/galeria/' . rawurlencode(basename($path))),
            'alt' => 'Fotografía del Reto Más lento, más pro ' . ($index + 1),
            'title' => 'Galería del reto',
            'caption' => 'Registro fotográfico ' . ($index + 1) . ' de ' . count($galleryImageFiles),
        ];
    }

    $galleryImageTotal = count($galleryImages);
    $classifiedCategoryMeta = [
        'hombres-expertos' => [
            'title' => 'Hombres expertos',
            'description' => 'Más de dos años manejando moto',
            'icon' => 'bi-gender-male',
        ],
        'mujeres-expertas' => [
            'title' => 'Mujeres expertas',
            'description' => 'Más de dos años manejando moto',
            'icon' => 'bi-gender-female',
        ],
        'hombres-novatos' => [
            'title' => 'Hombres novatos',
            'description' => 'Menos de dos años manejando moto',
            'icon' => 'bi-gender-male',
        ],
        'mujeres-novatas' => [
            'title' => 'Mujeres novatas',
            'description' => 'Menos de dos años manejando moto',
            'icon' => 'bi-gender-female',
        ],
    ];
    $classifiedRows = [
        ['rank' => 1, 'name' => 'Yesid Ardila', 'category' => 'hombres-expertos', 'file' => 'cascos-motos_g926.png'],
        ['rank' => 2, 'name' => 'Andrés Márquez', 'category' => 'hombres-expertos', 'file' => 'cascos-motos_g927.png'],
        ['rank' => 3, 'name' => 'Edwin Téllez', 'category' => 'hombres-expertos', 'file' => 'cascos-motos_g928.png'],
        ['rank' => 4, 'name' => 'Wilmer Obando', 'category' => 'hombres-expertos', 'file' => 'cascos-motos_g999.png'],
        ['rank' => 5, 'name' => 'Yoher Pérez', 'category' => 'hombres-expertos', 'file' => 'cascos-motos_g1000.png'],
        ['rank' => 6, 'name' => 'Carlos López', 'category' => 'hombres-expertos', 'file' => 'cascos-motos_g1001.png'],
        ['rank' => 1, 'name' => 'Nancy Tache', 'category' => 'mujeres-expertas', 'file' => 'cascos-motos_g1002.png'],
        ['rank' => 2, 'name' => 'Kelly Vergara', 'category' => 'mujeres-expertas', 'file' => 'cascos-motos_g1003.png'],
        ['rank' => 3, 'name' => 'Diana González', 'category' => 'mujeres-expertas', 'file' => 'cascos-motos_g1004.png'],
        ['rank' => 4, 'name' => 'Jenny González', 'category' => 'mujeres-expertas', 'file' => 'cascos-motos_g1005.png'],
        ['rank' => 1, 'name' => 'Leonardo Castellanos', 'category' => 'hombres-novatos', 'file' => 'cascos-motos_g1006.png'],
        ['rank' => 2, 'name' => 'Breiner Martínez', 'category' => 'hombres-novatos', 'file' => 'cascos-motos_g1007.png'],
        ['rank' => 3, 'name' => 'Alexander Méndez', 'category' => 'hombres-novatos', 'file' => 'cascos-motos_g1008.png'],
        ['rank' => 1, 'name' => 'Yenni Panche', 'category' => 'mujeres-novatas', 'file' => 'cascos-motos_g1009.png'],
        ['rank' => 2, 'name' => 'Dina Suárez', 'category' => 'mujeres-novatas', 'file' => 'cascos-motos_g1010.png'],
        ['rank' => 3, 'name' => 'Angie Abello', 'category' => 'mujeres-novatas', 'file' => 'cascos-motos_g1011.png'],
    ];
    $classifiedRiders = [];

    foreach ($classifiedRows as $row) {
        $categoryKey = $row['category'] ?? 'por-confirmar';

        if (!isset($classifiedCategoryMeta[$categoryKey])) {
            $classifiedCategoryMeta[$categoryKey] = [
                'title' => 'Clasificación por confirmar',
                'description' => 'Pendiente de actualización',
                'icon' => 'bi-patch-question',
            ];
        }

        $classifiedRiders[] = [
            'src' => asset('reto-assets/cascos/' . rawurlencode($row['file'])),
            'name' => $row['name'] ?? 'Clasificado por confirmar',
            'category_key' => $categoryKey,
            'rank' => $row['rank'] ?? 999,
        ];
    }

    usort($classifiedRiders, function ($left, $right) {
        if ($left['rank'] === $right['rank']) {
            return strcmp($left['name'], $right['name']);
        }

        return $left['rank'] <=> $right['rank'];
    });

    $classifiedByCategory = [];

    foreach ($classifiedCategoryMeta as $categoryKey => $categoryMeta) {
        $classifiedByCategory[$categoryKey] = $categoryMeta + [
            'key' => $categoryKey,
            'riders' => [],
        ];
    }

    foreach ($classifiedRiders as $rider) {
        $classifiedByCategory[$rider['category_key']]['riders'][] = $rider;
    }

    $classifiedByCategory = array_values(
        array_filter($classifiedByCategory, function ($group) {
            return $group['riders'] !== [];
        }),
    );
    $classifiedTotal = count($classifiedRiders);
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
            'text' => 'Menos de dos años manejando moto',
        ],
        [
            'icon' => 'bi-gender-male',
            'title' => 'Hombres novatos',
            'text' => 'Menos de dos años manejando moto',
        ],
        [
            'icon' => 'bi-gender-female',
            'title' => 'Mujeres experimentadas',
            'text' => 'Más de dos años manejando moto',
        ],
        [
            'icon' => 'bi-gender-male',
            'title' => 'Hombres experimentados',
            'text' => 'Más de dos años manejando moto',
        ],
    ];

    $requirements = [
        ['icon' => 'bi-card-text',      'text' => 'Licencia de conducción vigente A2'],
        ['icon' => 'bi-shield-check',   'text' => 'SOAT y revisión técnico-mecánica al día'],
        ['icon' => 'bi-shield-fill',   'text' => 'Casco y elementos de protección'],
        ['icon' => 'bi-calendar-check', 'text' => 'Inscripción previa en la válida'],
        ['icon' => 'bi-receipt-cutoff', 'text' => 'Estar al día con el pago de comparendos'],
    ];

    $rules = [
        ['icon' => 'bi-slash-circle',  'text' => 'Cero alcohol antes y durante la prueba'],
        ['icon' => 'bi-arrow-up-circle','text' => 'No apoyar los pies en el piso'],
        ['icon' => 'bi-signpost',      'text' => 'Mantenerse dentro del recorrido establecido'],
        ['icon' => 'bi-power',         'text' => 'No apagar la moto durante la prueba'],
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
            --lime: #bed000;
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

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
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
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1200;
            background: transparent;
            border-bottom: 1px solid transparent;
            box-shadow: none;
            isolation: isolate;
            transition: background-color 0.22s ease, border-color 0.22s ease, box-shadow 0.22s ease, backdrop-filter 0.22s ease;
        }

        .site-header::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: calc(100% + 34px);
            background: linear-gradient(180deg, rgba(6, 9, 3, 0.84) 0%, rgba(6, 9, 3, 0.54) 52%, rgba(6, 9, 3, 0.0) 100%);
            opacity: 1;
            pointer-events: none;
            transition: opacity 0.22s ease;
            z-index: -1;
        }

        .site-header.is-solid,
        .site-header.is-menu-open {
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(14px);
            border-bottom-color: rgba(78, 84, 31, 0.12);
            box-shadow: 0 14px 32px rgba(16, 18, 7, 0.08);
        }

        .site-header.is-solid::before,
        .site-header.is-menu-open::before {
            opacity: 0;
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
            filter: drop-shadow(0 10px 18px rgba(0, 0, 0, 0.28));
            transition: filter 0.22s ease;
        }

        .site-header.is-solid .site-brand img,
        .site-header.is-menu-open .site-brand img {
            filter: none;
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
            width: 44px;
            height: 44px;
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
            color: rgba(255, 255, 255, 0.96);
            font-size: 0.98rem;
            font-weight: 600;
            text-shadow: 0 2px 14px rgba(0, 0, 0, 0.42);
            white-space: nowrap;
        }

        .site-header.is-solid .site-nav a,
        .site-header.is-menu-open .site-nav a {
            color: #232323;
            text-shadow: none;
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
        .hero-carousel__button:focus-visible,
        .hero-carousel__toggle:focus-visible,
        .hero-carousel__dot:focus-visible,
        .gallery-ribbon__button:focus-visible,
        .gallery-ribbon__toggle:focus-visible,
        .gallery-ribbon__item:focus-visible,
        .gallery-lightbox__button:focus-visible,
        .gallery-lightbox__close:focus-visible,
        .footer-links a:focus-visible,
        .social-links a:focus-visible,
        .tab-button:focus-visible {
            outline: 3px solid #c8da00;
            outline-offset: 2px;
        }

        .header-cta {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            min-height: 44px;
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

        .site-header:not(.is-solid):not(.is-menu-open) .site-menu-toggle {
            border-color: rgba(255, 255, 255, 0.3);
            background: rgba(10, 12, 5, 0.18);
            color: #fff;
            box-shadow: 0 14px 22px rgba(0, 0, 0, 0.16);
        }

        .site-header:not(.is-solid):not(.is-menu-open) .site-menu-toggle:hover {
            background: rgba(255, 255, 255, 0.12);
            box-shadow: 0 16px 24px rgba(0, 0, 0, 0.22);
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
            min-height: clamp(600px, 50vw, 700px);
            background: #0f1308;
            color: #fff;
        }

        .hero-carousel {
            position: absolute;
            inset: 0;
            z-index: 1;
        }

        .hero-carousel__viewport {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .hero-carousel__slide {
            position: absolute;
            inset: 0;
            margin: 0;
            overflow: hidden;
            opacity: 0;
            transition: opacity 0.45s ease;
        }

        .hero-carousel__slide.is-active {
            opacity: 1;
        }

        .hero-carousel__slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 18%;
            filter: saturate(0.96) brightness(0.84);
            transform: scale(1);
            transform-origin: center 24%;
            transition: transform 6.5s linear;
            will-change: transform;
            backface-visibility: hidden;
        }

        .hero[data-hero-carousel-ready="true"] .hero-carousel__slide.is-active img {
            transform: scale(1.08);
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 2;
            background:
                linear-gradient(90deg, rgba(8, 11, 4, 0.95) 0%, rgba(8, 11, 4, 0.7) 23%, rgba(8, 11, 4, 0.42) 46%, rgba(8, 11, 4, 0.15) 73%, rgba(8, 11, 4, 0.02) 100%),
                linear-gradient(180deg, rgba(8, 11, 4, 0.1) 0%, rgba(8, 11, 4, 0) 100%);
        }

        .hero__inner {
            position: relative;
            z-index: 3;
            max-width: 1320px;
            min-height: clamp(600px, 50vw, 700px);
            margin: 0 auto;
            padding: clamp(42px, 5vw, 68px) 24px 32px;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: clamp(24px, 3vw, 48px);
        }

        .hero__copy {
            width: min(100%, 620px);
            padding-right: 0;
            display: flex;
            flex-direction: column;
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
            width: 100px;
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
            max-width: 26ch;
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

        .hero__meta {
            display: grid;
            gap: 14px;
            width: min(100%, 360px);
            margin-left: auto;
            justify-items: end;
        }

        .hero-carousel__toolbar {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .hero-carousel__controls {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .hero-carousel__button,
        .hero-carousel__toggle,
        .hero-carousel__dot {
            border: 1px solid rgba(255, 255, 255, 0.24);
            background: rgba(15, 19, 8, 0.3);
            color: #fff;
            backdrop-filter: blur(12px);
        }

        .hero-carousel__button,
        .hero-carousel__toggle {
            min-width: 44px;
            min-height: 44px;
            border-radius: 999px;
            transition: transform 0.18s ease, background-color 0.18s ease, border-color 0.18s ease, color 0.18s ease;
        }

        .hero-carousel__button {
            display: inline-grid;
            place-items: center;
            padding: 0;
        }

        .hero-carousel__toggle {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 0 16px;
            font-size: 0.94rem;
            font-weight: 800;
            letter-spacing: 0.01em;
        }

        .hero-carousel__button:hover,
        .hero-carousel__toggle:hover,
        .hero-carousel__dot:hover {
            background: rgba(255, 255, 255, 0.14);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-1px);
        }

        .hero-carousel__button:active,
        .hero-carousel__toggle:active,
        .hero-carousel__dot:active {
            transform: translateY(0) scale(0.985);
        }

        .hero-carousel__pagination {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .hero-carousel__dot {
            display: inline-grid;
            place-items: center;
            width: 26px;
            height: 26px;
            padding: 0;
            border-radius: 999px;
            transition: transform 0.18s ease, background-color 0.18s ease, border-color 0.18s ease;
        }

        .hero-carousel__dot::before {
            content: "";
            width: 10px;
            height: 10px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.72);
            transition: width 0.18s ease, background-color 0.18s ease;
        }

        .hero-carousel__dot.is-active::before {
            width: 24px;
            background: var(--lime);
        }

        .hero-carousel__status {
            margin: 0;
            color: rgba(255, 255, 255, 0.84);
            font-size: 0.85rem !important;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-align: right;
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

        .page-section--explora {
            position: relative;
            overflow: hidden;
        }

        .page-section--explora::after {
            content: "";
            position: absolute;
            right: 40px;
            top: 50%;
            transform: translateY(-50%);
            width: clamp(280px, 25vw, 450px);
            height: clamp(280px, 25vw, 450px);
            background: url('/reto-assets/banner-reto-mas-pro-v2_Capa%202.png') no-repeat center center;
            background-size: contain;
            opacity: 0.90;
            pointer-events: none;
            z-index: 0;
        }

        .page-section--explora .page-section__inner {
            position: relative;
            z-index: 1;
        }

        .why-layout {
            margin-top: 24px;
            display: grid;
            grid-template-columns: minmax(0, 1fr) 300px;
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
            display: flex;
            flex-direction: column;
        }

        .video-card {
            overflow: hidden;
            border: 1px solid rgba(78, 84, 31, 0.14);
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 12px 22px rgba(31, 33, 14, 0.05);
            transition: transform 0.18s ease, box-shadow 0.18s ease;
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
        }

        .video-card__trigger {
            display: flex;
            flex-direction: column;
            flex: 1 1 auto;
            width: 100%;
            padding: 0;
            border: 0;
            background: none;
            color: inherit;
            cursor: pointer;
            text-align: left;
            overflow: hidden;
        }

        .video-card__trigger:hover .video-card__play {
            transform: scale(1.1);
        }

        .video-card__trigger:focus-visible {
            outline: 3px solid #c8da00;
            outline-offset: 2px;
        }

        .video-card__thumb {
            position: relative;
            flex: 1 1 auto;
            min-height: 160px;
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

        .video-card__body-label {
            display: block;
            padding: 14px 14px 16px;
            text-align: center;
        }

        .video-card__body-label strong {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.04rem;
            line-height: 1.18;
            font-weight: 800;
            color: #314000;
        }

        /* Embed inline (solo móvil) */
        .video-card__inline {
            display: none;
        }

        .video-card__yt-link {
            display: block;
            position: relative;
            aspect-ratio: 16 / 9;
            overflow: hidden;
            border-radius: 12px;
            background: #1b1f0e;
        }

        .video-card__yt-link img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.7);
            transition: filter 0.18s ease;
        }

        .video-card__yt-link:hover img {
            filter: brightness(0.85);
        }

        .video-card__yt-link .video-card__play {
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -31px 0 0 -31px;
        }

        .video-card__yt-link:focus-visible {
            outline: 3px solid #c8da00;
            outline-offset: 2px;
        }

        .video-card__embed {
            position: relative;
            aspect-ratio: 16 / 9;
            overflow: hidden;
            background: #1b1f0e;
            border-radius: 12px;
        }

        .video-card__embed iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Video lightbox (modal desktop) */
        .video-lightbox {
            width: min(100vw - 24px, 900px);
            padding: 0;
            border: 0;
            border-radius: 22px;
            background: transparent;
            color: #fff;
        }

        .video-lightbox::backdrop {
            background: rgba(7, 9, 4, 0.88);
            backdrop-filter: blur(8px);
        }

        .video-lightbox__shell {
            overflow: hidden;
            border-radius: 22px;
            background: linear-gradient(180deg, rgba(27, 31, 11, 0.98) 0%, rgba(13, 16, 7, 0.98) 100%);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.34);
        }

        .video-lightbox__topbar {
            display: flex;
            justify-content: flex-end;
            padding: 14px 14px 0;
        }

        .video-lightbox__close {
            min-width: 44px;
            min-height: 44px;
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.08);
            color: #fff;
            display: inline-grid;
            place-items: center;
            padding: 0;
            cursor: pointer;
            transition: transform 0.18s ease, background-color 0.18s ease;
        }

        .video-lightbox__close:hover {
            transform: translateY(-1px);
            background: rgba(255, 255, 255, 0.14);
        }

        .video-lightbox__close:focus-visible {
            outline: 3px solid #c8da00;
            outline-offset: 2px;
        }

        .video-lightbox__body {
            padding: 8px 18px 18px;
        }

        .video-lightbox__embed {
            position: relative;
            aspect-ratio: 16 / 9;
            overflow: hidden;
            border-radius: 14px;
            background: #000;
        }

        .video-lightbox__embed iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .what-layout {
            margin-top: 24px;
            display: grid;
            grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.25fr);
            gap: 30px;
            align-items: center;
        }

        .what-list-wrapper {
            display: block;
        }

        .what-list-wrapper > .page-section__lead {
            margin-bottom: 28px;
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
            height: auto;
            border-radius: 8px;
            object-fit: cover;
            object-position: center center;
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
            margin: 12px 0 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.05rem;
            line-height: 1.12;
            font-weight: 800;
            text-align: center;
            color: #2a2a2a;
        }

        .process-card p {
            margin: 4px 0 0;
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
            min-height: 44px;
            padding: 10px 18px;
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
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 14px;
        }

        .requirement-card {
            flex: 0 1 calc(50% - 7px);
            min-width: 220px;
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
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 14px;
        }

        .rule-card {
            flex: 0 1 calc(50% - 7px);
            min-width: 220px;
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

        .classified-section {
            position: relative;
            border-top: 1px solid rgba(79, 84, 31, 0.08);
            background:
                radial-gradient(circle at top right, rgba(200, 218, 0, 0.08), transparent 22%),
                linear-gradient(180deg, #fafaf4 0%, #ffffff 100%);
        }

        .classified-section__inner {
            max-width: 1320px;
            margin: 0 auto;
            padding: clamp(28px, 3.5vw, 40px) 24px;
        }

        .classified-section__header {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            gap: 14px 18px;
            align-items: center;
        }

        .classified-section__eyebrow {
            margin: 0 0 8px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.82rem;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--olive);
        }

        .classified-section__eyebrow::before {
            content: "";
            width: 22px;
            height: 2px;
            border-radius: 999px;
            background: var(--lime);
        }

        .classified-section__title {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            font-size: clamp(1.55rem, 2.2vw, 2.15rem);
            line-height: 1.04;
            font-weight: 800;
            letter-spacing: -0.04em;
            color: #252b12;
        }

        .classified-section__lead {
            margin: 8px 0 0;
            max-width: 58ch;
            font-size: 0.95rem;
            line-height: 1.5;
            color: #4d513f;
        }

        .classified-summary {
            display: inline-flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            gap: 4px 10px;
            padding: 10px 14px;
            border: 1px solid rgba(78, 84, 31, 0.14);
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.92);
            box-shadow: 0 10px 18px rgba(31, 33, 14, 0.04);
        }

        .classified-summary__value {
            display: inline-block;
            font-family: 'Montserrat', sans-serif;
            font-size: clamp(1.35rem, 2vw, 1.75rem);
            line-height: 1;
            font-weight: 800;
            letter-spacing: -0.03em;
            color: var(--olive);
        }

        .classified-summary__label {
            display: inline-block;
            margin-top: 0;
            font-size: 0.9rem;
            line-height: 1.25;
            color: #3f4419;
            font-weight: 700;
        }

        .classified-summary__meta {
            display: block;
            width: 100%;
            margin-top: 0;
            font-size: 0.8rem;
            line-height: 1.3;
            color: #545844;
        }

        .classified-grid {
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
            align-items: stretch;
        }

        .classified-group {
            display: flex;
            flex-direction: column;
            padding: 16px;
            border: 1px solid rgba(78, 84, 31, 0.12);
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.96);
            box-shadow: 0 12px 20px rgba(31, 33, 14, 0.04);
        }

        .classified-group__header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .classified-group__heading {
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 0;
        }

        .classified-group__icon {
            display: inline-grid;
            place-items: center;
            width: 34px;
            height: 34px;
            flex: 0 0 auto;
            border-radius: 12px;
            background: rgba(200, 218, 0, 0.18);
            color: var(--olive);
            font-size: 1rem;
        }

        .classified-group__title {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            line-height: 1.1;
            font-weight: 800;
            color: #2f3514;
        }

        .classified-group__description {
            display: block;
            margin-top: 2px;
            font-size: 0.82rem;
            line-height: 1.34;
            color: #565b49;
        }

        .classified-group__count {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 28px;
            padding: 4px 10px;
            border-radius: 999px;
            background: rgba(79, 85, 27, 0.08);
            color: var(--olive);
            font-size: 0.8rem;
            font-weight: 800;
            white-space: nowrap;
        }

        .classified-group__list {
            margin: 14px 0 0;
            padding: 0;
            list-style: none;
            display: grid;
            flex: 1 1 auto;
            grid-template-columns: repeat(auto-fit, minmax(88px, 1fr));
            justify-items: center;
            align-content: flex-start;
            gap: 12px;
        }

        .classified-card {
            width: min(100%, 100px);
            min-width: 0;
        }

        .classified-card__figure {
            margin: 0;
            display: grid;
            gap: 8px;
            justify-items: center;
            text-align: center;
        }

        .classified-card__media {
            width: 80px;
            height: 80px;
            margin: 0 auto;
            border-radius: 50%;
            overflow: hidden;
            border: 1px solid rgba(78, 84, 31, 0.12);
            background: linear-gradient(180deg, #ffffff 0%, #f5f6eb 100%);
            box-shadow: 0 10px 18px rgba(31, 33, 14, 0.04);
        }

        .classified-card__media img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center bottom;
            padding: 14px;
        }

        .classified-card__caption {
            display: grid;
            gap: 3px;
            justify-items: center;
        }

        .classified-card__rank {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: fit-content;
            min-height: 24px;
            padding: 4px 8px;
            border-radius: 999px;
            background: rgba(200, 218, 0, 0.2);
            color: #3a4210;
            font-size: 0.72rem;
            font-weight: 800;
            letter-spacing: 0.02em;
        }

        .classified-card__name {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.88rem;
            line-height: 1.16;
            font-weight: 800;
            color: #272d12;
            text-wrap: balance;
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

        .gallery-ribbon {
            position: relative;
            overflow: hidden;
            border-top: 1px solid rgba(79, 84, 31, 0.08);
            background:
                radial-gradient(circle at top right, rgba(200, 218, 0, 0.14), transparent 28%),
                linear-gradient(180deg, #f7f7f0 0%, #ffffff 100%);
        }

        .gallery-ribbon__inner {
            max-width: 1320px;
            margin: 0 auto;
            padding: 30px 24px 34px;
        }

        .gallery-ribbon__header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .gallery-ribbon__copy {
            max-width: 640px;
        }

        .gallery-ribbon__eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin: 0 0 10px;
            color: #4d541f;
            font-size: 0.9rem;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .gallery-ribbon__eyebrow::before {
            content: "";
            width: 28px;
            height: 2px;
            border-radius: 999px;
            background: var(--lime);
        }

        .gallery-ribbon__title {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            font-size: clamp(1.8rem, 2.6vw, 2.5rem);
            line-height: 1.04;
            font-weight: 800;
            letter-spacing: -0.04em;
            color: #22260d;
        }

        .gallery-ribbon__lead {
            max-width: 58ch;
            margin: 10px 0 0;
            font-size: 1rem;
            line-height: 1.5;
            color: #5b5f47;
        }

        .gallery-ribbon__controls {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .gallery-ribbon__button,
        .gallery-ribbon__toggle,
        .gallery-lightbox__button,
        .gallery-lightbox__close {
            min-width: 44px;
            min-height: 44px;
            border: 1px solid rgba(78, 84, 31, 0.16);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.88);
            color: #2c3210;
            box-shadow: 0 12px 22px rgba(31, 33, 14, 0.06);
            transition: transform 0.18s ease, box-shadow 0.18s ease, background-color 0.18s ease, border-color 0.18s ease;
        }

        .gallery-ribbon__button,
        .gallery-lightbox__button,
        .gallery-lightbox__close {
            display: inline-grid;
            place-items: center;
            padding: 0;
        }

        .gallery-ribbon__toggle {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 0 16px;
            font-size: 0.93rem;
            font-weight: 800;
        }

        .gallery-ribbon__button:hover,
        .gallery-ribbon__toggle:hover,
        .gallery-lightbox__button:hover,
        .gallery-lightbox__close:hover {
            transform: translateY(-1px);
            background: #fff;
            border-color: rgba(78, 84, 31, 0.26);
            box-shadow: 0 16px 28px rgba(31, 33, 14, 0.1);
        }

        .gallery-ribbon__button:active,
        .gallery-ribbon__toggle:active,
        .gallery-lightbox__button:active,
        .gallery-lightbox__close:active {
            transform: translateY(0) scale(0.985);
        }

        .gallery-ribbon__viewport {
            position: relative;
            margin-top: 24px;
            overflow-x: auto;
            overflow-y: hidden;
            scroll-behavior: smooth;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .gallery-ribbon__viewport::-webkit-scrollbar {
            display: none;
        }

        .gallery-ribbon__track {
            display: flex;
            align-items: stretch;
            gap: 14px;
            width: max-content;
            padding: 4px 0;
        }

        .gallery-ribbon__item {
            width: clamp(220px, 23vw, 308px);
            padding: 0;
            border: 0;
            background: none;
            color: inherit;
            text-align: left;
            cursor: pointer;
            flex: 0 0 auto;
        }

        .gallery-ribbon__card {
            overflow: hidden;
            border: 1px solid rgba(78, 84, 31, 0.14);
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 14px 26px rgba(31, 33, 14, 0.08);
        }

        .gallery-ribbon__thumb {
            position: relative;
            aspect-ratio: 3 / 2;
            overflow: hidden;
            background: #e7e9da;
        }

        .gallery-ribbon__thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.35s ease, filter 0.35s ease;
        }

        .gallery-ribbon__card:hover .gallery-ribbon__thumb img,
        .gallery-ribbon__item:focus-visible .gallery-ribbon__thumb img {
            transform: scale(1.04);
            filter: saturate(1.02);
        }

        .gallery-ribbon__caption {
            padding: 12px 14px 14px;
        }

        .gallery-ribbon__caption strong {
            display: block;
            font-size: 0.96rem;
            line-height: 1.2;
            font-weight: 800;
            color: #27300f;
        }

        .gallery-ribbon__caption span {
            display: block;
            margin-top: 4px;
            font-size: 0.9rem;
            line-height: 1.35;
            color: #64684f;
        }

        .gallery-lightbox {
            width: min(100vw - 24px, 1080px);
            padding: 0;
            border: 0;
            border-radius: 22px;
            background: transparent;
            color: #fff;
        }

        .gallery-lightbox::backdrop {
            background: rgba(7, 9, 4, 0.82);
            backdrop-filter: blur(8px);
        }

        .gallery-lightbox__shell {
            overflow: hidden;
            border-radius: 22px;
            background: linear-gradient(180deg, rgba(27, 31, 11, 0.98) 0%, rgba(13, 16, 7, 0.98) 100%);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.34);
        }

        .gallery-lightbox__topbar {
            display: flex;
            justify-content: flex-end;
            padding: 14px 14px 0;
        }

        .gallery-lightbox__close {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.14);
            color: #fff;
            box-shadow: none;
        }

        .gallery-lightbox__body {
            padding: 8px 18px 18px;
            display: grid;
            gap: 16px;
        }

        .gallery-lightbox__media {
            overflow: hidden;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.04);
        }

        .gallery-lightbox__media img {
            width: 100%;
            height: auto;
            max-height: min(72vh, 760px);
            object-fit: contain;
        }

        .gallery-lightbox__footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap;
        }

        .gallery-lightbox__meta {
            min-width: 0;
        }

        .gallery-lightbox__meta p {
            margin: 0;
            color: rgba(255, 255, 255, 0.74);
            font-size: 0.94rem;
            line-height: 1.4;
        }

        .gallery-lightbox__controls {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
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
            min-height: 44px;
            display: inline-flex;
            align-items: center;
            padding: 8px 4px;
        }

        .social-links {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-direction: row-reverse;
        }

        .social-links a {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.16);
            color: #fff;
            font-size: 1.1rem;
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

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            .gallery-ribbon__viewport {
                scroll-behavior: auto;
            }

            .site-header,
            .site-header::before,
            .site-brand img,
            .header-cta,
            .hero-secondary,
            .cta-band__button,
            .gallery-ribbon__button,
            .gallery-ribbon__toggle,
            .gallery-ribbon__thumb img,
            .gallery-lightbox__button,
            .gallery-lightbox__close,
            .site-menu-toggle,
            .btn-solid,
            .hero-carousel__button,
            .hero-carousel__toggle,
            .hero-carousel__dot,
            .hero-carousel__slide,
            .hero-carousel__slide img,
            .tab-button {
                transition: none;
            }
        }

        @media (max-width: 1199.98px) {
            .gallery-ribbon__header {
                align-items: flex-start;
            }

            .classified-section__header {
                grid-template-columns: 1fr;
                align-items: stretch;
            }

            .classified-summary {
                justify-self: start;
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

            .video-card__trigger {
                display: none;
            }

            .video-card__inline {
                display: block;
            }

            .page-section--explora::after {
                right: auto;
                left: 50%;
                top: auto;
                bottom: -60px;
                transform: translateX(-50%);
                width: 300px;
                height: 300px;
                opacity: 0.5;
            }

            .process-side {
                max-width: 420px;
            }
        }

        @media (max-width: 991.98px) {
            .site-header__inner {
                display: flex;
                flex-wrap: nowrap;
                align-items: center;
                justify-content: space-between;
                gap: 8px;
                padding-top: 8px;
                padding-bottom: 8px;
            }

            .site-brand {
                flex: 0 1 auto;
                min-width: 0;
                width: auto;
                max-width: calc(100% - 160px);
            }

            .site-brand img {
                min-width: 0;
                width: min(160px, 38vw);
            }

            .site-header__actions {
                flex: 0 0 auto;
                margin-left: 0;
                gap: 8px;
            }

            .header-cta {
                display: none;
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
                min-height: 520px;
            }

            .hero__inner {
                min-height: 520px;
            }

            .hero__copy {
                width: min(100%, 560px);
            }

            .hero-carousel__slide img {
                object-position: center 12%;
            }

            .why-cards,
            .process-steps,
            .category-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .classified-grid {
                grid-template-columns: 1fr;
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

            .gallery-ribbon__header {
                flex-direction: column;
                align-items: stretch;
            }

            .gallery-ribbon__controls {
                justify-content: flex-start;
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
            .classified-section__inner,
            .cta-band__inner,
            .gallery-ribbon__inner,
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

            .hero__inner {
                flex-direction: column;
                align-items: stretch;
                justify-content: flex-end;
                gap: 20px;
            }

            .hero__actions {
                flex-direction: row;
                align-items: center;
                flex-wrap: wrap;
                gap: 10px;
            }

            .hero__meta {
                width: 100%;
                margin-left: 0;
                justify-items: stretch;
            }

            .hero-carousel__toolbar {
                flex-direction: row;
                align-items: center;
                flex-wrap: nowrap;
                justify-content: space-between;
                gap: 6px;
            }

            .hero-carousel__controls {
                flex: 0 0 auto;
                gap: 6px;
                justify-content: flex-start;
            }

            .hero-carousel__pagination {
                flex: 1 1 auto;
                justify-content: center;
                gap: 6px;
            }

            .hero-carousel__toggle {
                flex: 0 0 auto;
                width: auto;
                padding: 0 10px;
                gap: 6px;
                justify-content: center;
            }

            .hero-carousel__toggle [data-hero-toggle-label] {
                display: none;
            }

            .hero-carousel__status {
                text-align: center;
                width: 100%;
                font-size: 0.78rem !important;
            }

            .hero-carousel__dot {
                width: 22px;
                height: 22px;
            }

            .hero-carousel__dot::before {
                width: 7px;
                height: 7px;
            }

            .hero-carousel__dot.is-active::before {
                width: 18px;
            }

            .btn-solid {
                flex: 1 1 auto;
                min-width: 0;
                justify-content: center;
            }

            .hero-secondary {
                flex: 0 0 auto;
                width: auto;
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
            .category-grid {
                grid-template-columns: 1fr;
            }

            .process-card {
                min-height: 0;
                padding: 28px 18px 22px;
            }

            .process-steps {
                gap: 28px;
            }

            .requirement-card,
            .rule-card {
                flex: 1 1 100%;
            }

            .classified-group {
                padding: 18px;
            }

            .classified-group__list {
                gap: 10px;
                grid-template-columns: repeat(auto-fit, minmax(84px, 1fr));
            }

            .classified-card {
                width: min(100%, 100px);
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

            .gallery-ribbon__item {
                width: min(74vw, 280px);
            }

            .gallery-lightbox {
                width: min(100vw - 16px, 1080px);
            }

            .gallery-lightbox__body {
                padding: 6px 12px 14px;
            }

            .gallery-lightbox__footer {
                flex-direction: column;
                align-items: stretch;
            }

            .gallery-lightbox__controls {
                justify-content: center;
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

            .hero-carousel__slide img {
                object-position: center top;
            }

            .hero__actions {
                gap: 12px;
            }

            .hero-carousel__controls {
                justify-content: center;
            }

            .gallery-ribbon__controls {
                flex-wrap: wrap;
            }

            .gallery-ribbon__button {
                flex: 0 0 auto;
            }

            .gallery-ribbon__toggle {
                flex: 0 0 auto;
                width: auto;
                justify-content: center;
            }

            .gallery-ribbon__item {
                width: min(82vw, 260px);
            }

            .classified-group__header {
                flex-direction: column;
                align-items: stretch;
            }

            .classified-group__count {
                width: fit-content;
            }

            .classified-card {
                width: min(100%, 100px);
            }

            .btn-solid {
                flex: 1 1 auto;
                min-width: 0;
                justify-content: center;
            }

            .hero-secondary {
                flex: 0 0 auto;
                width: auto;
                justify-content: center;
            }

            .stat-card,
            .process-card,
            .requirement-card,
            .rule-card {
                min-height: 0;
            }
        }

        @media (max-width: 359.98px) {
            .classified-group__list {
                grid-template-columns: repeat(auto-fit, minmax(84px, 1fr));
            }

            .classified-card {
                width: min(100%, 100px);
            }
        }
    </style>
</head>

<body>
    <a class="skip-link" href="#main-content">Saltar al contenido principal</a>

    <header class="site-header">
        <div class="site-header__inner">
            <a class="site-brand" href="#inicio" aria-label="Ir al inicio">
                <img src="{{ $brandLogo }}" alt="Alcaldía Mayor de Bogotá D.C. y Secretaría de Movilidad">
            </a>

            <nav class="site-nav" id="site-primary-menu" aria-label="Navegación principal">
                <a href="#inicio">Inicio</a>
                <a href="#por-que">El reto</a>
                <a href="#explora">Categorías</a>
                @if ($classifiedTotal > 0)
                    <a href="#clasificados">Clasificados</a>
                @endif
                <a href="#como-consiste">En qué consiste</a>
                @if ($galleryImageTotal > 0)
                    <a href="#galeria">Galería</a>
                @endif
            </nav>

            <div class="site-header__actions">
                <a class="header-cta" href="{{ $inscripcionUrl }}" target="_blank" rel="noopener noreferrer"
                    aria-label="Inscríbete (abre en una nueva pestaña)">
                    <span>Inscríbete</span>
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

    <main id="main-content">
        <section class="hero" id="inicio" aria-labelledby="hero-title" data-hero-carousel data-delay="6500"
            @if ($heroSlideTotal > 1) aria-describedby="hero-carousel-instructions" @endif>
            <div class="hero-carousel" aria-roledescription="carrusel" aria-label="Galería destacada del reto">
                <div class="hero-carousel__viewport" aria-hidden="true">
                    @foreach ($heroSlides as $slide)
                        <figure class="hero-carousel__slide {{ $loop->first ? 'is-active' : '' }}" data-hero-slide
                            aria-hidden="{{ $loop->first ? 'false' : 'true' }}">
                            <img src="{{ $slide['src'] }}" alt=""
                                loading="{{ $loop->first ? 'eager' : 'lazy' }}" decoding="async"
                                @if ($loop->first) fetchpriority="high" @endif>
                        </figure>
                    @endforeach
                </div>
            </div>

            <div class="hero__inner">
                <div class="hero__copy">
                    <div class="hero-badge">
                        <span>RETO</span>
                        <i class="bi bi-bicycle" aria-hidden="true"></i>
                    </div>

                    <h1 id="hero-title">
                        Más lento,
                        <span class="accent">más pro.</span>
                    </h1>

                    <p>Ser buen motociclista no es correr. Es tener el control y llegar seguro.</p>

                    <div class="hero__actions">
                        <a class="btn-solid" href="{{ $inscripcionUrl }}" target="_blank" rel="noopener noreferrer"
                            aria-label="Inscríbete (abre en una nueva pestaña)">
                            <span aria-hidden="true">Inscríbete</span>
                            <span class="btn-icon-circle" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                        </a>
                        <a class="hero-secondary" href="#por-que">
                            <span>Conoce más</span>
                            <i class="bi bi-chevron-down" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                @if ($heroSlideTotal > 1)
                    <div class="hero__meta">
                        <p class="sr-only" id="hero-carousel-instructions">
                            Usa los controles para avanzar, retroceder o pausar el carrusel. La rotación automática
                            se detiene al interactuar con el componente.
                        </p>

                        <div class="hero-carousel__toolbar">
                            <div class="hero-carousel__controls" aria-label="Controles del carrusel principal">
                                <button class="hero-carousel__button" type="button" data-hero-action="previous"
                                    aria-label="Mostrar la imagen anterior">
                                    <i class="bi bi-arrow-left" aria-hidden="true"></i>
                                </button>
                                <button class="hero-carousel__button" type="button" data-hero-action="next"
                                    aria-label="Mostrar la imagen siguiente">
                                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                </button>
                                <button class="hero-carousel__toggle" type="button" data-hero-action="toggle"
                                    aria-label="Pausar rotación automática" aria-pressed="false">
                                    <i class="bi bi-pause-fill" aria-hidden="true" data-hero-toggle-icon></i>
                                    <span data-hero-toggle-label>Pausar</span>
                                </button>
                            </div>

                            <div class="hero-carousel__pagination" aria-label="Seleccionar una imagen del carrusel">
                                @foreach ($heroSlides as $slide)
                                    <button class="hero-carousel__dot {{ $loop->first ? 'is-active' : '' }}"
                                        type="button" data-hero-dot data-slide-index="{{ $loop->index }}"
                                        aria-label="{{ $loop->first ? 'Imagen actual ' : 'Mostrar imagen ' }}{{ $loop->iteration }} de {{ $heroSlideTotal }}"
                                        @if ($loop->first) aria-current="true" @endif>
                                        <span class="sr-only">Imagen {{ $loop->iteration }}</span>
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        <p class="hero-carousel__status" data-hero-status aria-live="off" aria-atomic="true">
                            Imagen 1 de {{ $heroSlideTotal }}
                        </p>
                    </div>
                @endif
            </div>
        </section>

        <section class="page-section" id="por-que" aria-labelledby="por-que-title">
            <div class="page-section__inner">
                <h2 class="page-section__title" id="por-que-title">¿Por qué este reto?</h2>

                <div class="why-layout">
                    <div class="why-main">
                        <div class="why-cards">
                            @foreach ($whyCards as $card)
                                <article
                                    class="stat-card {{ !empty($card['featured']) ? 'stat-card--featured' : '' }}">
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
                            {{-- Thumbnail + botón para desktop (abre modal) --}}
                            <button class="video-card__trigger" type="button"
                                data-video-open
                                aria-label="Reproducir video del Reto Más lento, más pro (abre en ventana emergente)">
                                <span class="video-card__thumb">
                                    <img src="{{ $whyVideoBg }}" alt="" loading="lazy" decoding="async">
                                    <span class="video-card__play" aria-hidden="true"><i class="bi bi-play-fill"></i></span>
                                </span>
                                <span class="video-card__body-label">
                                    <strong>Ver video</strong>
                                </span>
                            </button>

                            {{-- Embed directo para móvil — usa thumbnail + link a YouTube --}}
                            <div class="video-card__inline">
                                <a class="video-card__yt-link" href="https://www.youtube.com/watch?v=uQD4NbRKwk4"
                                    target="_blank" rel="noopener noreferrer"
                                    aria-label="Ver video del Reto Más lento, más pro en YouTube (abre en nueva pestaña)">
                                    <img src="https://img.youtube.com/vi/uQD4NbRKwk4/hqdefault.jpg"
                                        alt="Miniatura del video del Reto" loading="lazy" decoding="async">
                                    <span class="video-card__play" aria-hidden="true"><i class="bi bi-play-fill"></i></span>
                                </a>
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

                    <div class="what-list-wrapper">
                        <p class="page-section__lead">El reto ‘Más lento, más pro’ busca tumbar el mito de que ir más
                            rápido es
                            ir mejor, recordando a los motociclistas que el exceso de velocidad es el riesgo, pero que
                            el
                            dominio, el control y las decisiones seguras en las vías son acciones que protegen la vida.
                        </p>
                        <ul class="what-list" aria-label="Objetivos del reto">
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
                    </div>

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
                <p class="page-section__lead">El reto es progresivo y pondrá a prueba tus habilidades, precisión y control sobre la motocicleta.</p>

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
                        <h3>¿Cómo se define quiénes avanzan?</h3>
                        <p>
                            El reto no premia correr. Premia a quienes demuestran mayor control y dominio de su moto y
                            recorren la pista más lento.
                        </p>
                    </aside>
                </div>
            </div>
        </section>

        <section class="page-section page-section--explora" id="explora" aria-labelledby="explora-title">
            <div class="page-section__inner">
                <h2 class="page-section__title" id="explora-title">Explora</h2>

                <div class="tabs-header" role="tablist" aria-label="Información del reto">
                    <button class="tab-button is-active" type="button" role="tab" id="tab-categorias" aria-selected="true"
                        aria-controls="panel-categorias" data-reto-tab="categorias">
                        Categorías
                    </button>
                    <button class="tab-button" type="button" role="tab" id="tab-requisitos" aria-selected="false"
                        aria-controls="panel-requisitos" data-reto-tab="requisitos">
                        Requisitos
                    </button>
                    <button class="tab-button" type="button" role="tab" id="tab-reglas" aria-selected="false"
                        aria-controls="panel-reglas" data-reto-tab="reglas">
                        Reglas
                    </button>
                </div>

                <div class="tab-panels">
                    <section class="tab-panel" id="panel-categorias" data-reto-panel="categorias" role="tabpanel" tabindex="-1" aria-labelledby="tab-categorias">
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
                        role="tabpanel" tabindex="-1" aria-labelledby="tab-requisitos" hidden>
                        <h3 class="tab-panel__title">Requisitos para participar</h3>
                        <p class="tab-panel__lead">Antes de inscribirte, verifica que cumples estas condiciones
                            básicas.</p>

                        <div class="tab-panel__grid requirement-grid">
                            @foreach ($requirements as $requirement)
                                <article class="requirement-card">
                                    <span class="requirement-card__icon" aria-hidden="true"><i
                                            class="bi {{ $requirement['icon'] }}"></i></span>
                                    <strong>{{ $requirement['text'] }}</strong>
                                </article>
                            @endforeach
                        </div>
                    </section>

                    <section class="tab-panel is-hidden" id="panel-reglas" data-reto-panel="reglas" role="tabpanel" tabindex="-1"
                        aria-labelledby="tab-reglas" hidden>
                        <h3 class="tab-panel__title">Reglas del reto</h3>
                        <p class="tab-panel__lead">Estas reglas buscan reforzar hábitos de conducción segura y
                            controlada durante la prueba.</p>

                        <div class="tab-panel__grid rule-grid">
                            @foreach ($rules as $rule)
                                <article class="rule-card">
                                    <span class="rule-card__icon" aria-hidden="true"><i
                                            class="bi {{ $rule['icon'] }}"></i></span>
                                    <div>
                                        <strong>{{ $rule['text'] }}</strong>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </section>

        @if ($classifiedTotal > 0)
            <span class="page-anchor" id="clasificados" aria-hidden="true"></span>

            <section class="classified-section" aria-labelledby="clasificados-title"
                aria-describedby="clasificados-lead clasificados-note">
                <div class="classified-section__inner">
                    <div class="classified-section__header">
                        <div>
                            <span class="classified-section__eyebrow">Clasificados</span>
                            <h2 class="classified-section__title" id="clasificados-title">Clasificados por categoría
                            </h2>
                            <p class="classified-section__lead" id="clasificados-lead">Revisa quiénes ya clasificaron y ubícalos por
                                categoría.</p>
                            <p class="sr-only" id="clasificados-note">Cada registro se presenta por categoría con su
                                puesto y nombre. Las imágenes funcionan como apoyo visual.</p>
                        </div>

                        <aside class="classified-summary" aria-label="Resumen de clasificados">
                            <span class="classified-summary__value">{{ $classifiedTotal }}</span>
                            <span class="classified-summary__label">clasificados a la fecha</span>
                            <span class="classified-summary__meta">{{ count($classifiedByCategory) }} categorías con
                                registro activo</span>
                        </aside>
                    </div>

                    <div class="classified-grid">
                        @foreach ($classifiedByCategory as $group)
                            <section class="classified-group"
                                aria-labelledby="clasificados-{{ $group['key'] }}-title">
                                <div class="classified-group__header">
                                    <div class="classified-group__heading">
                                        <span class="classified-group__icon" aria-hidden="true">
                                            <i class="bi {{ $group['icon'] }}"></i>
                                        </span>
                                        <div>
                                            <h3 class="classified-group__title"
                                                id="clasificados-{{ $group['key'] }}-title">{{ $group['title'] }}</h3>
                                            <span
                                                class="classified-group__description">{{ $group['description'] }}</span>
                                        </div>
                                    </div>

                                    <span class="classified-group__count"
                                        aria-label="{{ count($group['riders']) }} clasificados en {{ $group['title'] }}">{{ count($group['riders']) }}
                                        clasificados</span>
                                </div>

                                <ul class="classified-group__list" aria-label="Clasificados en {{ $group['title'] }}">
                                    @foreach ($group['riders'] as $rider)
                                        <li class="classified-card">
                                            <figure class="classified-card__figure">
                                                <div class="classified-card__media">
                                                    <img src="{{ $rider['src'] }}" alt="" aria-hidden="true" loading="lazy"
                                                        decoding="async">
                                                </div>
                                                <figcaption class="classified-card__caption">
                                                    <span class="classified-card__rank">Nº {{ $rider['rank'] }}</span>
                                                    <strong class="classified-card__name">{{ $rider['name'] }}</strong>
                                                </figcaption>
                                            </figure>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

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

                <a class="cta-band__button" href="{{ $inscripcionUrl }}" target="_blank" rel="noopener noreferrer"
                aria-label="Inscríbete en la siguiente válida (abre en una nueva pestaña)">
                    <span>Inscríbete en la<br> siguiente válida</span>
                    <span class="btn-icon-circle" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                </a>
            </div>
        </section>

        @if ($galleryImageTotal > 0)
            <section class="gallery-ribbon" id="galeria" aria-labelledby="galeria-title">
                <div class="gallery-ribbon__inner" data-gallery-strip data-speed="0.046">
                    <div class="gallery-ribbon__header">
                        <div class="gallery-ribbon__copy">
                            <p class="gallery-ribbon__eyebrow">Galería</p>
                            <h2 class="gallery-ribbon__title" id="galeria-title">El reto avanza</h2>
                            <p class="gallery-ribbon__lead">
                                Cada reto deja nuevos momentos para recordar. Recorre la galería, pausa el
                                movimiento cuando quieras y abre cualquier fotografía para verla con más detalle.
                            </p>
                        </div>

                        @if ($galleryImageTotal > 1)
                            <div class="gallery-ribbon__controls" aria-label="Controles de la tirilla fotográfica">
                                <button class="gallery-ribbon__button" type="button" data-gallery-action="previous"
                                    aria-label="Desplazar la tirilla hacia atrás">
                                    <i class="bi bi-arrow-left" aria-hidden="true"></i>
                                </button>
                                <button class="gallery-ribbon__button" type="button" data-gallery-action="next"
                                    aria-label="Desplazar la tirilla hacia adelante">
                                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                </button>
                                <button class="gallery-ribbon__toggle" type="button" data-gallery-action="toggle"
                                    aria-label="Pausar desplazamiento automático" aria-pressed="false">
                                    <i class="bi bi-pause-fill" aria-hidden="true" data-gallery-toggle-icon></i>
                                    <span data-gallery-toggle-label>Pausar</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <p class="sr-only" id="gallery-ribbon-instructions">
                        La galería se desplaza automáticamente. Usa los controles para avanzar, retroceder o pausar la
                        tirilla. Al abrir una imagen podrás verla en mayor detalle y recorrer la galería.
                    </p>

                    <div class="gallery-ribbon__viewport" data-gallery-viewport tabindex="0" role="region"
                        aria-label="Tirilla de imágenes del reto" aria-describedby="gallery-ribbon-instructions">
                        <div class="gallery-ribbon__track" data-gallery-track>
                            @foreach ($galleryImages as $image)
                                <button class="gallery-ribbon__item" type="button"
                                    data-gallery-open="{{ $loop->index }}" aria-label="Abrir imagen {{ $loop->iteration }} de {{ $galleryImageTotal }}">
                                    <span class="gallery-ribbon__card">
                                        <span class="gallery-ribbon__thumb">
                                            <img src="{{ $image['src'] }}" alt="" loading="lazy" decoding="async">
                                        </span>
                                        <span class="gallery-ribbon__caption">
                                            <strong>{{ $image['title'] }}</strong>
                                            <span>{{ $image['caption'] }}</span>
                                        </span>
                                    </span>
                                </button>
                            @endforeach

                            @if ($galleryImageTotal > 1)
                                @foreach ($galleryImages as $image)
                                    <button class="gallery-ribbon__item" type="button"
                                        data-gallery-open="{{ $loop->index }}" data-gallery-clone="true"
                                        aria-hidden="true" tabindex="-1">
                                        <span class="gallery-ribbon__card">
                                            <span class="gallery-ribbon__thumb">
                                                <img src="{{ $image['src'] }}" alt="" loading="lazy"
                                                    decoding="async">
                                            </span>
                                            <span class="gallery-ribbon__caption">
                                                <strong>{{ $image['title'] }}</strong>
                                                <span>{{ $image['caption'] }}</span>
                                            </span>
                                        </span>
                                    </button>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </section>

            <dialog class="gallery-lightbox" data-gallery-dialog aria-label="Visor de galería del reto" aria-modal="true" role="dialog">
                <div class="gallery-lightbox__shell">
                    <div class="gallery-lightbox__topbar">
                        <button class="gallery-lightbox__close" type="button" data-gallery-close
                            aria-label="Cerrar visor de galería">
                            <i class="bi bi-x-lg" aria-hidden="true"></i>
                        </button>
                    </div>

                    <div class="gallery-lightbox__body">
                        <div class="gallery-lightbox__media">
                            <img src="" alt="" data-gallery-dialog-image>
                        </div>

                        <div class="gallery-lightbox__footer">
                            <div class="gallery-lightbox__meta">
                                <p data-gallery-dialog-caption>Registro fotográfico</p>
                            </div>

                            @if ($galleryImageTotal > 1)
                                <div class="gallery-lightbox__controls" aria-label="Navegación del visor">
                                    <button class="gallery-lightbox__button" type="button" data-gallery-dialog-nav="previous"
                                        aria-label="Mostrar imagen anterior">
                                        <i class="bi bi-arrow-left" aria-hidden="true"></i>
                                    </button>
                                    <button class="gallery-lightbox__button" type="button" data-gallery-dialog-nav="next"
                                        aria-label="Mostrar imagen siguiente">
                                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </dialog>
        @endif

        {{-- Modal de video — abre YouTube directamente --}}
        <dialog class="video-lightbox" data-video-dialog aria-label="Reproductor de video" aria-modal="true" role="dialog">
            <div class="video-lightbox__shell">
                <div class="video-lightbox__topbar">
                    <button class="video-lightbox__close" type="button" data-video-close
                        aria-label="Cerrar reproductor de video">
                        <i class="bi bi-x-lg" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="video-lightbox__body">
                    <div class="video-lightbox__embed">
                        <iframe data-video-dialog-iframe
                            title="Video del Reto Más lento, más pro"
                            frameborder="0"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </dialog>
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
            const heroCarousel = document.querySelector('[data-hero-carousel]');
            const galleryStrip = document.querySelector('[data-gallery-strip]');
            const galleryDialog = document.querySelector('[data-gallery-dialog]');
            const galleryImages = @json($galleryImages);
            const mobileQuery = window.matchMedia('(max-width: 991.98px)');
            const reducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
            const headerSolidThreshold = 18;

            function syncHeaderState() {
                if (!siteHeader) {
                    return;
                }

                siteHeader.classList.toggle('is-solid', window.scrollY > headerSolidThreshold);
            }

            function setMenuOpen(open) {
                if (!siteHeader || !menuToggle || !siteNav) {
                    return;
                }

                const active = open && mobileQuery.matches;
                siteHeader.classList.toggle('is-menu-open', active);
                menuToggle.setAttribute('aria-expanded', active ? 'true' : 'false');
                menuToggle.setAttribute('aria-label', active ? 'Cerrar menú principal' : 'Abrir menú principal');
            }

            syncHeaderState();

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

                    syncHeaderState();
                });
            }

            window.addEventListener('scroll', syncHeaderState, {
                passive: true,
            });

            function initHeroCarousel() {
                if (!heroCarousel) {
                    return;
                }

                const slides = Array.from(heroCarousel.querySelectorAll('[data-hero-slide]'));
                const dots = Array.from(heroCarousel.querySelectorAll('[data-hero-dot]'));
                const status = heroCarousel.querySelector('[data-hero-status]');
                const prevButton = heroCarousel.querySelector('[data-hero-action="previous"]');
                const nextButton = heroCarousel.querySelector('[data-hero-action="next"]');
                const toggleButton = heroCarousel.querySelector('[data-hero-action="toggle"]');
                const toggleIcon = toggleButton ? toggleButton.querySelector('[data-hero-toggle-icon]') : null;
                const toggleLabel = toggleButton ? toggleButton.querySelector('[data-hero-toggle-label]') : null;
                const totalSlides = slides.length;
                const delay = Number(heroCarousel.getAttribute('data-delay')) || 6500;
                let activeIndex = Math.max(0, slides.findIndex(function(slide) {
                    return slide.classList.contains('is-active');
                }));
                let autoplayTimer = null;
                let isUserPaused = reducedMotionQuery.matches;
                let isPointerInside = false;
                let hasFocusInside = false;
                let userResumed = false; // bandera: el usuario acaba de reanudar explícitamente

                function clearAutoplay() {
                    if (autoplayTimer !== null) {
                        window.clearTimeout(autoplayTimer);
                        autoplayTimer = null;
                    }
                }

                function canAutoplay() {
                    return totalSlides > 1 &&
                        !reducedMotionQuery.matches &&
                        !isUserPaused &&
                        !isPointerInside &&
                        (!hasFocusInside || userResumed) &&
                        !document.hidden;
                }

                function updateStatus(announce) {
                    if (!status) {
                        return;
                    }

                    status.setAttribute('aria-live', announce ? 'polite' : 'off');
                    status.textContent = 'Imagen ' + (activeIndex + 1) + ' de ' + totalSlides;
                }

                function updateDots() {
                    dots.forEach(function(dot, index) {
                        const active = index === activeIndex;
                        const baseLabel = active ? 'Imagen actual ' : 'Mostrar imagen ';

                        dot.classList.toggle('is-active', active);
                        dot.setAttribute('aria-label', baseLabel + (index + 1) + ' de ' + totalSlides);

                        if (active) {
                            dot.setAttribute('aria-current', 'true');
                        } else {
                            dot.removeAttribute('aria-current');
                        }
                    });
                }

                function setSlide(index, options) {
                    const announce = options && options.announce === true;
                    const normalizedIndex = (index + totalSlides) % totalSlides;

                    activeIndex = normalizedIndex;

                    slides.forEach(function(slide, slideIndex) {
                        const active = slideIndex === normalizedIndex;

                        slide.classList.toggle('is-active', active);
                        slide.setAttribute('aria-hidden', active ? 'false' : 'true');
                    });

                    updateDots();
                    updateStatus(announce);
                }

                function scheduleAutoplay() {
                    clearAutoplay();

                    if (!canAutoplay()) {
                        return;
                    }

                    autoplayTimer = window.setTimeout(function() {
                        setSlide(activeIndex + 1, {
                            announce: false,
                        });
                        scheduleAutoplay();
                    }, delay);
                }

                function updateToggleButton() {
                    if (!toggleButton || !toggleLabel) {
                        return;
                    }

                    const paused = isUserPaused || reducedMotionQuery.matches;

                    toggleButton.setAttribute('aria-pressed', paused ? 'true' : 'false');
                    toggleButton.setAttribute('aria-label', paused ? 'Reanudar rotación automática' :
                        'Pausar rotación automática');
                    toggleLabel.textContent = paused ? 'Reproducir' : 'Pausar';

                    if (toggleIcon) {
                        toggleIcon.className = paused ? 'bi bi-play-fill' : 'bi bi-pause-fill';
                    }
                }

                function goToSlide(index) {
                    setSlide(index, {
                        announce: true,
                    });
                    scheduleAutoplay();
                }

                setSlide(activeIndex, {
                    announce: false,
                });
                updateToggleButton();
                window.requestAnimationFrame(function() {
                    window.requestAnimationFrame(function() {
                        heroCarousel.setAttribute('data-hero-carousel-ready', 'true');
                    });
                });

                if (prevButton) {
                    prevButton.addEventListener('click', function() {
                        goToSlide(activeIndex - 1);
                    });
                }

                if (nextButton) {
                    nextButton.addEventListener('click', function() {
                        goToSlide(activeIndex + 1);
                    });
                }

                dots.forEach(function(dot, index) {
                    dot.addEventListener('click', function() {
                        goToSlide(index);
                    });
                });

                if (toggleButton) {
                    toggleButton.addEventListener('click', function() {
                        isUserPaused = !isUserPaused;
                        if (!isUserPaused) {
                            // El usuario reanudó explícitamente — permitir autoplay
                            // aunque el foco siga dentro del carrusel.
                            userResumed = true;
                        } else {
                            userResumed = false;
                        }
                        updateToggleButton();
                        scheduleAutoplay();
                    });
                }

                heroCarousel.addEventListener('mouseenter', function() {
                    isPointerInside = true;
                    clearAutoplay();
                });

                heroCarousel.addEventListener('mouseleave', function() {
                    isPointerInside = false;
                    scheduleAutoplay();
                });

                heroCarousel.addEventListener('focusin', function() {
                    hasFocusInside = true;
                    // No cancelar si el usuario acaba de reanudar explícitamente.
                    if (!userResumed) {
                        clearAutoplay();
                    }
                });

                heroCarousel.addEventListener('focusout', function() {
                    window.setTimeout(function() {
                        hasFocusInside = heroCarousel.contains(document.activeElement);
                        userResumed = false;
                        scheduleAutoplay();
                    }, 0);
                });

                heroCarousel.addEventListener('keydown', function(event) {
                    if (!event.target.closest('[data-hero-action], [data-hero-dot]')) {
                        return;
                    }

                    if (event.key === 'ArrowLeft') {
                        event.preventDefault();
                        goToSlide(activeIndex - 1);
                    }

                    if (event.key === 'ArrowRight') {
                        event.preventDefault();
                        goToSlide(activeIndex + 1);
                    }

                    if (event.key === 'Home') {
                        event.preventDefault();
                        goToSlide(0);
                    }

                    if (event.key === 'End') {
                        event.preventDefault();
                        goToSlide(totalSlides - 1);
                    }
                });

                document.addEventListener('visibilitychange', function() {
                    scheduleAutoplay();
                });

                function syncReducedMotionPreference(event) {
                    if (event.matches) {
                        isUserPaused = true;
                    }

                    updateToggleButton();
                    scheduleAutoplay();
                }

                if (typeof reducedMotionQuery.addEventListener === 'function') {
                    reducedMotionQuery.addEventListener('change', syncReducedMotionPreference);
                } else if (typeof reducedMotionQuery.addListener === 'function') {
                    reducedMotionQuery.addListener(syncReducedMotionPreference);
                }

                scheduleAutoplay();
            }

            function initGalleryRibbon() {
                if (!galleryStrip || !Array.isArray(galleryImages) || galleryImages.length === 0) {
                    return;
                }

                const viewport = galleryStrip.querySelector('[data-gallery-viewport]');
                const track = galleryStrip.querySelector('[data-gallery-track]');
                const items = Array.from(galleryStrip.querySelectorAll('[data-gallery-open]'));
                const prevButton = galleryStrip.querySelector('[data-gallery-action="previous"]');
                const nextButton = galleryStrip.querySelector('[data-gallery-action="next"]');
                const toggleButton = galleryStrip.querySelector('[data-gallery-action="toggle"]');
                const toggleIcon = toggleButton ? toggleButton.querySelector('[data-gallery-toggle-icon]') : null;
                const toggleLabel = toggleButton ? toggleButton.querySelector('[data-gallery-toggle-label]') : null;
                const dialogImage = galleryDialog ? galleryDialog.querySelector('[data-gallery-dialog-image]') : null;
                const dialogCaption = galleryDialog ? galleryDialog.querySelector('[data-gallery-dialog-caption]') : null;
                const dialogClose = galleryDialog ? galleryDialog.querySelector('[data-gallery-close]') : null;
                const dialogPrev = galleryDialog ? galleryDialog.querySelector('[data-gallery-dialog-nav="previous"]') : null;
                const dialogNext = galleryDialog ? galleryDialog.querySelector('[data-gallery-dialog-nav="next"]') : null;
                const autoSpeed = Number(galleryStrip.getAttribute('data-speed')) || 0.046;
                const totalImages = galleryImages.length;
                let lastFrame = null;
                let rafId = null;
                let isPointerInside = false;
                let hasFocusInside = false;
                let isUserPaused = reducedMotionQuery.matches || totalImages <= 1;
                let lightboxIndex = 0;
                let lastTrigger = null;
                let userResumed = false; // bandera: el usuario acaba de reanudar explícitamente

                function isDialogOpen() {
                    return !!(galleryDialog && (galleryDialog.open || galleryDialog.hasAttribute('open')));
                }

                function getLoopWidth() {
                    if (!viewport || totalImages <= 1) {
                        return 0;
                    }

                    return viewport.scrollWidth / 2;
                }

                function normalizeScrollPosition() {
                    const loopWidth = getLoopWidth();

                    if (!viewport || loopWidth <= 0) {
                        return;
                    }

                    if (viewport.scrollLeft >= loopWidth) {
                        viewport.scrollLeft -= loopWidth;
                    }

                    if (viewport.scrollLeft < 0) {
                        viewport.scrollLeft += loopWidth;
                    }
                }

                function getStepWidth() {
                    if (!track) {
                        return 280;
                    }

                    const firstItem = track.querySelector('.gallery-ribbon__item');
                    const gap = Number.parseFloat(window.getComputedStyle(track).gap || '0');

                    if (!firstItem) {
                        return 280;
                    }

                    return firstItem.getBoundingClientRect().width + gap;
                }

                function canAutoplay() {
                    return totalImages > 1 &&
                        !reducedMotionQuery.matches &&
                        !isUserPaused &&
                        !isPointerInside &&
                        (!hasFocusInside || userResumed) &&
                        !document.hidden &&
                        !isDialogOpen();
                }

                function updateToggleButton() {
                    if (!toggleButton || !toggleLabel) {
                        return;
                    }

                    const paused = isUserPaused || reducedMotionQuery.matches || totalImages <= 1;

                    toggleButton.setAttribute('aria-pressed', paused ? 'true' : 'false');
                    toggleButton.setAttribute('aria-label', paused ? 'Reanudar desplazamiento automático' :
                        'Pausar desplazamiento automático');
                    toggleLabel.textContent = paused ? 'Reproducir' : 'Pausar';

                    if (toggleIcon) {
                        toggleIcon.className = paused ? 'bi bi-play-fill' : 'bi bi-pause-fill';
                    }
                }

                function shiftViewport(direction) {
                    if (!viewport || totalImages <= 1) {
                        return;
                    }

                    const loopWidth = getLoopWidth();
                    const leftOffset = direction * getStepWidth();

                    // Pausar el tick durante el scroll animado para que no
                    // sobreescriba el desplazamiento manual antes de que termine.
                    const wasAutoPlaying = canAutoplay();
                    if (wasAutoPlaying) {
                        isPointerInside = true;
                    }

                    if (direction < 0 && viewport.scrollLeft <= getStepWidth()) {
                        viewport.scrollLeft += loopWidth;
                    }

                    viewport.scrollBy({
                        left: leftOffset,
                        behavior: reducedMotionQuery.matches ? 'auto' : 'smooth',
                    });

                    window.setTimeout(function() {
                        normalizeScrollPosition();
                        if (wasAutoPlaying) {
                            isPointerInside = false;
                            lastFrame = null;
                        }
                    }, reducedMotionQuery.matches ? 0 : 340);
                }

                function renderLightbox() {
                    const image = galleryImages[lightboxIndex];

                    if (!image || !dialogImage || !dialogCaption) {
                        return;
                    }

                    dialogImage.src = image.src;
                    dialogImage.alt = image.alt;
                    dialogCaption.textContent = image.caption;
                }

                function openLightbox(index, trigger) {
                    if (!galleryDialog || totalImages === 0) {
                        return;
                    }

                    lightboxIndex = (index + totalImages) % totalImages;
                    lastTrigger = trigger || document.activeElement;
                    renderLightbox();

                    if (typeof galleryDialog.showModal === 'function') {
                        if (!galleryDialog.open) {
                            galleryDialog.showModal();
                        }
                    } else {
                        galleryDialog.setAttribute('open', 'open');
                    }
                }

                function closeLightbox() {
                    if (!galleryDialog) {
                        return;
                    }

                    if (typeof galleryDialog.close === 'function' && galleryDialog.open) {
                        galleryDialog.close();
                    } else {
                        galleryDialog.removeAttribute('open');
                    }
                }

                function moveLightbox(direction) {
                    if (totalImages <= 1) {
                        return;
                    }

                    lightboxIndex = (lightboxIndex + direction + totalImages) % totalImages;
                    renderLightbox();
                }

                function tick(timestamp) {
                    if (lastFrame === null) {
                        lastFrame = timestamp;
                    }

                    if (canAutoplay() && viewport) {
                        viewport.scrollLeft += (timestamp - lastFrame) * autoSpeed;
                        normalizeScrollPosition();
                    }

                    lastFrame = timestamp;
                    rafId = window.requestAnimationFrame(tick);
                }

                if (viewport) {
                    viewport.scrollLeft = 0;

                    viewport.addEventListener('mouseenter', function() {
                        isPointerInside = true;
                    });

                    viewport.addEventListener('mouseleave', function() {
                        isPointerInside = false;
                    });

                    viewport.addEventListener('focusin', function() {
                        // No bloquear si el usuario acaba de reanudar explícitamente.
                        if (!userResumed) {
                            hasFocusInside = true;
                        }
                    });

                    viewport.addEventListener('focusout', function() {
                        window.setTimeout(function() {
                            hasFocusInside = galleryStrip.contains(document.activeElement);
                            userResumed = false;
                        }, 0);
                    });

                    viewport.addEventListener('keydown', function(event) {
                        if (event.key === 'ArrowLeft') {
                            event.preventDefault();
                            shiftViewport(-1);
                        }

                        if (event.key === 'ArrowRight') {
                            event.preventDefault();
                            shiftViewport(1);
                        }
                    });
                }

                items.forEach(function(item) {
                    item.addEventListener('click', function() {
                        openLightbox(Number(this.getAttribute('data-gallery-open')) || 0, this);
                    });
                });

                if (prevButton) {
                    prevButton.addEventListener('click', function() {
                        shiftViewport(-1);
                    });
                }

                if (nextButton) {
                    nextButton.addEventListener('click', function() {
                        shiftViewport(1);
                    });
                }

                if (toggleButton) {
                    toggleButton.addEventListener('click', function() {
                        isUserPaused = !isUserPaused;
                        if (!isUserPaused) {
                            // El usuario reanudó explícitamente — permitir autoplay
                            // aunque el foco siga dentro de la galería.
                            userResumed = true;
                            lastFrame = null;
                        } else {
                            userResumed = false;
                        }
                        updateToggleButton();
                    });
                }

                if (dialogClose) {
                    dialogClose.addEventListener('click', closeLightbox);
                }

                if (dialogPrev) {
                    dialogPrev.addEventListener('click', function() {
                        moveLightbox(-1);
                    });
                }

                if (dialogNext) {
                    dialogNext.addEventListener('click', function() {
                        moveLightbox(1);
                    });
                }

                if (galleryDialog) {
                    galleryDialog.addEventListener('click', function(event) {
                        if (event.target === galleryDialog) {
                            closeLightbox();
                        }
                    });

                    galleryDialog.addEventListener('keydown', function(event) {
                        if (event.key === 'ArrowLeft') {
                            event.preventDefault();
                            moveLightbox(-1);
                        }

                        if (event.key === 'ArrowRight') {
                            event.preventDefault();
                            moveLightbox(1);
                        }
                    });

                    galleryDialog.addEventListener('close', function() {
                        if (lastTrigger && typeof lastTrigger.focus === 'function') {
                            window.setTimeout(function() {
                                lastTrigger.focus();
                            }, 0);
                        }
                    });
                }

                document.addEventListener('visibilitychange', function() {
                    lastFrame = null;
                });

                window.addEventListener('resize', function() {
                    normalizeScrollPosition();
                    lastFrame = null;
                });

                function syncGalleryMotionPreference(event) {
                    if (event.matches) {
                        isUserPaused = true;
                    }

                    updateToggleButton();
                    lastFrame = null;
                }

                if (typeof reducedMotionQuery.addEventListener === 'function') {
                    reducedMotionQuery.addEventListener('change', syncGalleryMotionPreference);
                } else if (typeof reducedMotionQuery.addListener === 'function') {
                    reducedMotionQuery.addListener(syncGalleryMotionPreference);
                }

                updateToggleButton();

                if (totalImages > 1) {
                    rafId = window.requestAnimationFrame(tick);
                }
            }

            function activateTab(name, moveFocus) {
                buttons.forEach(function(button) {
                    const active = button.getAttribute('data-reto-tab') === name;
                    button.classList.toggle('is-active', active);
                    button.setAttribute('aria-selected', active ? 'true' : 'false');
                    // Solo el tab activo es alcanzable con Tab; los demás con flechas
                    button.setAttribute('tabindex', active ? '0' : '-1');
                });

                panels.forEach(function(panel) {
                    const active = panel.getAttribute('data-reto-panel') === name;
                    panel.hidden = !active;
                    panel.classList.toggle('is-hidden', !active);
                    // Mover foco al panel cuando se activa con teclado (2.1.1)
                    if (active && moveFocus) {
                        panel.focus();
                    }
                });
            }

            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    activateTab(this.getAttribute('data-reto-tab'), false);
                });

                // Navegación con flechas entre tabs (ARIA Authoring Practices)
                button.addEventListener('keydown', function(event) {
                    const currentIndex = buttons.indexOf(this);
                    let targetIndex = -1;

                    if (event.key === 'ArrowRight') {
                        event.preventDefault();
                        targetIndex = (currentIndex + 1) % buttons.length;
                    } else if (event.key === 'ArrowLeft') {
                        event.preventDefault();
                        targetIndex = (currentIndex - 1 + buttons.length) % buttons.length;
                    } else if (event.key === 'Home') {
                        event.preventDefault();
                        targetIndex = 0;
                    } else if (event.key === 'End') {
                        event.preventDefault();
                        targetIndex = buttons.length - 1;
                    } else if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        activateTab(this.getAttribute('data-reto-tab'), true);
                        return;
                    }

                    if (targetIndex >= 0) {
                        const targetTab = buttons[targetIndex].getAttribute('data-reto-tab');
                        activateTab(targetTab, false);
                        buttons[targetIndex].focus();
                    }
                });
            });

            initHeroCarousel();
            initGalleryRibbon();

            // Video lightbox
            (function() {
                var videoDialog = document.querySelector('[data-video-dialog]');
                var videoIframe = videoDialog ? videoDialog.querySelector('[data-video-dialog-iframe]') : null;
                var videoClose = videoDialog ? videoDialog.querySelector('[data-video-close]') : null;
                var videoTrigger = document.querySelector('[data-video-open]');
                var videoUrl = 'https://www.youtube.com/watch?v=uQD4NbRKwk4';
                var embedSrc = 'https://www.youtube-nocookie.com/embed/uQD4NbRKwk4?autoplay=1';
                var isFileProtocol = window.location.protocol === 'file:';

                if (!videoTrigger) { return; }

                // Si estamos en file:// o no hay dialog, abrir YouTube directamente
                if (isFileProtocol || !videoDialog || !videoIframe) {
                    videoTrigger.addEventListener('click', function() {
                        window.open(videoUrl, '_blank', 'noopener,noreferrer');
                    });
                    return;
                }

                function openVideo() {
                    videoIframe.src = embedSrc;
                    if (typeof videoDialog.showModal === 'function') {
                        if (!videoDialog.open) { videoDialog.showModal(); }
                    } else {
                        videoDialog.setAttribute('open', 'open');
                    }
                }

                function closeVideo() {
                    videoIframe.src = '';
                    if (typeof videoDialog.close === 'function' && videoDialog.open) {
                        videoDialog.close();
                    } else {
                        videoDialog.removeAttribute('open');
                    }
                    if (videoTrigger && typeof videoTrigger.focus === 'function') {
                        videoTrigger.focus();
                    }
                }

                videoTrigger.addEventListener('click', openVideo);

                if (videoClose) {
                    videoClose.addEventListener('click', closeVideo);
                }

                videoDialog.addEventListener('click', function(event) {
                    if (event.target === videoDialog) { closeVideo(); }
                });

                videoDialog.addEventListener('keydown', function(event) {
                    if (event.key === 'Escape') { closeVideo(); }
                });

                videoDialog.addEventListener('close', function() {
                    videoIframe.src = '';
                    if (videoTrigger && typeof videoTrigger.focus === 'function') {
                        videoTrigger.focus();
                    }
                });
            })();
            activateTab('categorias', false);
        });
    </script>
</body>

</html>
