<?php
/**
 * export_reto_html.php
 *
 * Genera un HTML autocontenido de la vista sites/reto con todas las imágenes
 * locales embebidas en base64, listo para enviar por correo o abrir sin servidor.
 *
 * Uso:
 *   php scripts/export_reto_html.php
 *
 * Salida:
 *   storage/exports/reto.html
 */

define('BASE_PATH', dirname(__DIR__));
define('PUBLIC_PATH', BASE_PATH . '/public');
define('OUTPUT_DIR',  BASE_PATH . '/storage/exports');
define('OUTPUT_FILE', OUTPUT_DIR . '/reto.html');

// ---------------------------------------------------------------------------
// 1. Helpers
// ---------------------------------------------------------------------------

/**
 * Convierte un archivo local a data URI base64.
 * Devuelve la ruta original si el archivo no existe.
 */
function toDataUri(string $absolutePath): string
{
    if (!file_exists($absolutePath) || !is_file($absolutePath)) {
        return $absolutePath;
    }

    $mime = mime_content_type($absolutePath) ?: 'application/octet-stream';
    // Normalizar tipos comunes
    $ext = strtolower(pathinfo($absolutePath, PATHINFO_EXTENSION));
    $mimeMap = [
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'png'  => 'image/png',
        'webp' => 'image/webp',
        'gif'  => 'image/gif',
        'svg'  => 'image/svg+xml',
        'ico'  => 'image/x-icon',
    ];
    if (isset($mimeMap[$ext])) {
        $mime = $mimeMap[$ext];
    }

    $data = base64_encode(file_get_contents($absolutePath));
    return "data:{$mime};base64,{$data}";
}

/**
 * Dado un src que puede ser una URL completa o relativa al public/,
 * devuelve el data URI correspondiente si el archivo existe localmente.
 */
function resolveAsset(string $src): string
{
    // Quitar query string y fragmentos
    $clean = preg_replace('/[?#].*$/', '', $src);

    // Si ya es data URI, dejarlo
    if (str_starts_with($clean, 'data:')) {
        return $src;
    }

    // Extraer la ruta relativa al public/
    // Puede venir como http://localhost/reto-assets/... o /reto-assets/...
    $relative = preg_replace('#^https?://[^/]+#', '', $clean);
    $relative = ltrim($relative, '/');

    $absolutePath = PUBLIC_PATH . '/' . $relative;

    if (file_exists($absolutePath) && is_file($absolutePath)) {
        return toDataUri($absolutePath);
    }

    // Si no se encuentra localmente, dejar la URL original
    return $src;
}

// ---------------------------------------------------------------------------
// 2. Reproducir la lógica PHP de la vista
// ---------------------------------------------------------------------------

$inscripcionUrl = 'https://forms.gle/HQyMfK7k38y9z2xp8';

// Hero slides
$heroSlidePatterns = [
    PUBLIC_PATH . '/reto-assets/hero/*.jpg',
    PUBLIC_PATH . '/reto-assets/hero/*.jpeg',
    PUBLIC_PATH . '/reto-assets/hero/*.png',
    PUBLIC_PATH . '/reto-assets/hero/*.webp',
    PUBLIC_PATH . '/reto-assets/hero/*.JPG',
    PUBLIC_PATH . '/reto-assets/hero/*.JPEG',
    PUBLIC_PATH . '/reto-assets/hero/*.PNG',
    PUBLIC_PATH . '/reto-assets/hero/*.WEBP',
];
$heroSlideFiles = [];
foreach ($heroSlidePatterns as $pattern) {
    $heroSlideFiles = array_merge($heroSlideFiles, glob($pattern) ?: []);
}
$heroSlideFiles = array_values(array_unique($heroSlideFiles));
natcasesort($heroSlideFiles);
$heroSlideFiles = array_values($heroSlideFiles);

$heroSlides = array_map(function ($path) {
    return ['src' => toDataUri($path)];
}, $heroSlideFiles);

if ($heroSlides === []) {
    $heroSlides[] = ['src' => toDataUri(PUBLIC_PATH . '/reto-assets/banner-reto.jpg')];
}
$heroSlideTotal = count($heroSlides);

// Gallery images
$galleryImageFiles = glob(PUBLIC_PATH . '/reto-assets/galeria/reto_act1_*.*') ?: [];
natcasesort($galleryImageFiles);
$galleryImageFiles = array_values($galleryImageFiles);
$galleryImages = [];
foreach ($galleryImageFiles as $index => $path) {
    $galleryImages[] = [
        'src'     => toDataUri($path),
        'alt'     => 'Fotografía del Reto Más lento, más pro ' . ($index + 1),
        'title'   => 'Galería del reto',
        'caption' => 'Registro fotográfico ' . ($index + 1) . ' de ' . count($galleryImageFiles),
    ];
}
$galleryImageTotal = count($galleryImages);

// Classified
$classifiedCategoryMeta = [
    'hombres-expertos' => ['title' => 'Hombres expertos',  'description' => 'Más de dos años manejando moto', 'icon' => 'bi-gender-male'],
    'mujeres-expertas' => ['title' => 'Mujeres expertas',  'description' => 'Más de dos años manejando moto', 'icon' => 'bi-gender-female'],
    'hombres-novatos'  => ['title' => 'Hombres novatos',   'description' => 'Menos de dos años manejando moto','icon' => 'bi-gender-male'],
    'mujeres-novatas'  => ['title' => 'Mujeres novatas',   'description' => 'Menos de dos años manejando moto','icon' => 'bi-gender-female'],
];
$classifiedRows = [
    ['rank' => 1,  'name' => 'Yesid Ardila',        'category' => 'hombres-expertos', 'file' => 'cascos-motos_g926.png'],
    ['rank' => 2,  'name' => 'Andrés Márquez',       'category' => 'hombres-expertos', 'file' => 'cascos-motos_g927.png'],
    ['rank' => 3,  'name' => 'Edwin Tellez',         'category' => 'hombres-expertos', 'file' => 'cascos-motos_g928.png'],
    ['rank' => 4,  'name' => 'Wilmer Obando',        'category' => 'hombres-expertos', 'file' => 'cascos-motos_g999.png'],
    ['rank' => 5,  'name' => 'Yoher Perez',          'category' => 'hombres-expertos', 'file' => 'cascos-motos_g1000.png'],
    ['rank' => 6,  'name' => 'Carlos López',         'category' => 'hombres-expertos', 'file' => 'cascos-motos_g1001.png'],
    ['rank' => 7,  'name' => 'Nancy Tache',          'category' => 'mujeres-expertas', 'file' => 'cascos-motos_g1002.png'],
    ['rank' => 8,  'name' => 'Kelly Vergara',        'category' => 'mujeres-expertas', 'file' => 'cascos-motos_g1003.png'],
    ['rank' => 9,  'name' => 'Diana González',       'category' => 'mujeres-expertas', 'file' => 'cascos-motos_g1004.png'],
    ['rank' => 10, 'name' => 'Jenny Gonzalez',       'category' => 'mujeres-expertas', 'file' => 'cascos-motos_g1005.png'],
    ['rank' => 11, 'name' => 'Leonardo Castellanos', 'category' => 'hombres-novatos',  'file' => 'cascos-motos_g1006.png'],
    ['rank' => 12, 'name' => 'Breiner Martinez',     'category' => 'hombres-novatos',  'file' => 'cascos-motos_g1007.png'],
    ['rank' => 13, 'name' => 'Alexander Mendez',     'category' => 'hombres-novatos',  'file' => 'cascos-motos_g1008.png'],
    ['rank' => 14, 'name' => 'Yenni Panche',         'category' => 'mujeres-novatas',  'file' => 'cascos-motos_g1009.png'],
    ['rank' => 15, 'name' => 'Dina Suárez',          'category' => 'mujeres-novatas',  'file' => 'cascos-motos_g1010.png'],
    ['rank' => 16, 'name' => 'Angie Abello',         'category' => 'mujeres-novatas',  'file' => 'cascos-motos_g1011.png'],
];

$classifiedRiders = [];
foreach ($classifiedRows as $row) {
    $categoryKey = $row['category'] ?? 'por-confirmar';
    if (!isset($classifiedCategoryMeta[$categoryKey])) {
        $classifiedCategoryMeta[$categoryKey] = [
            'title'       => 'Clasificación por confirmar',
            'description' => 'Pendiente de actualización',
            'icon'        => 'bi-patch-question',
        ];
    }
    $classifiedRiders[] = [
        'src'          => toDataUri(PUBLIC_PATH . '/reto-assets/cascos/' . $row['file']),
        'name'         => $row['name'] ?? 'Clasificado por confirmar',
        'category_key' => $categoryKey,
        'rank'         => $row['rank'] ?? 999,
    ];
}
usort($classifiedRiders, function ($a, $b) {
    return $a['rank'] === $b['rank'] ? strcmp($a['name'], $b['name']) : $a['rank'] <=> $b['rank'];
});

$classifiedByCategory = [];
foreach ($classifiedCategoryMeta as $key => $meta) {
    $classifiedByCategory[$key] = $meta + ['key' => $key, 'riders' => []];
}
foreach ($classifiedRiders as $rider) {
    $classifiedByCategory[$rider['category_key']]['riders'][] = $rider;
}
$classifiedByCategory = array_values(array_filter($classifiedByCategory, fn($g) => $g['riders'] !== []));
$classifiedTotal = count($classifiedRiders);

// Static assets
$brandLogo    = toDataUri(PUBLIC_PATH . '/reto-assets/logo.png');
$ctaBg        = toDataUri(PUBLIC_PATH . '/reto-assets/banner-reto.jpg');
$whyVideoBg   = toDataUri(PUBLIC_PATH . '/reto-assets/banner-reto-mas-pro-v2_Capa 3.png');
$helmetIcon   = toDataUri(PUBLIC_PATH . '/reto-assets/casco.png');
$guantletIcon = toDataUri(PUBLIC_PATH . '/reto-assets/guantes.png');
$cerebroIcon  = toDataUri(PUBLIC_PATH . '/reto-assets/cerebro.png');
$starIcon     = toDataUri(PUBLIC_PATH . '/reto-assets/copa.png');
$cancelIcon   = toDataUri(PUBLIC_PATH . '/reto-assets/cancelar.png');

$whyCards = [
    ['icon' => 'bi-people',       'title' => '4 de cada 10',                          'text' => 'personas que mueren en las vías son motociclistas', 'featured' => true],
    ['icon' => 'bi-speedometer2', 'title' => 'El exceso de velocidad mata',            'text' => 'Es el principal factor de riesgo en las vías.'],
    ['icon' => 'bi-bicycle',      'title' => 'Los motociclistas exceden más la velocidad', 'text' => 'En comparación con otros usuarios de la vía.'],
    ['icon' => 'bi-cone-striped', 'title' => 'La falta de pericia también cobra vidas','text' => 'El control y la técnica pueden marcar la diferencia.'],
];

$steps = [
    ['number' => '1', 'title' => 'Tres pistas lentas',      'text' => 'Primer acercamiento al reto.',          'thumb' => toDataUri(PUBLIC_PATH . '/reto-assets/reto_64.webp')],
    ['number' => '2', 'title' => 'Niveles de complejidad',  'text' => 'La prueba exige mayor dominio.',        'thumb' => toDataUri(PUBLIC_PATH . '/reto-assets/reto_81.webp')],
    ['number' => '3', 'title' => 'Válidas eliminatorias',   'text' => 'Clasificación durante todo el año.',    'thumb' => toDataUri(PUBLIC_PATH . '/reto-assets/reto_88.webp')],
    ['number' => '4', 'title' => 'Final del reto',          'text' => 'Cierre en octubre de 2026.',            'thumb' => toDataUri(PUBLIC_PATH . '/reto-assets/reto_92.webp')],
];

$categories = [
    ['icon' => 'bi-gender-female', 'title' => 'Mujeres novatas',        'text' => 'menos de dos años manejando moto'],
    ['icon' => 'bi-gender-male',   'title' => 'Hombres novatos',        'text' => 'menos de dos años manejando moto'],
    ['icon' => 'bi-gender-female', 'title' => 'Mujeres experimentadas', 'text' => 'más de dos años manejando moto'],
    ['icon' => 'bi-gender-male',   'title' => 'Hombres experimentados', 'text' => 'más de dos años manejando moto'],
];

$requirements = [
    ['icon' => 'bi-card-text',      'text' => 'Licencia de conducción vigente A2'],
    ['icon' => 'bi-shield-check',   'text' => 'SOAT y revisión técnico-mecánica al día'],
    ['icon' => 'bi-shield-fill',    'text' => 'Casco y elementos de protección'],
    ['icon' => 'bi-calendar-check', 'text' => 'Inscripción previa en la válida'],
    ['icon' => 'bi-receipt-cutoff', 'text' => 'Estar al día con el pago de comparendo'],
];

$rules = [
    ['icon' => 'bi-slash-circle',   'text' => 'Cero alcohol antes y durante la prueba'],
    ['icon' => 'bi-arrow-up-circle','text' => 'No apoyar los pies en el piso'],
    ['icon' => 'bi-signpost',       'text' => 'Mantenerse dentro del recorrido establecido'],
    ['icon' => 'bi-power',          'text' => 'No apagar la moto durante la prueba'],
];

$footerLinks = [
    ['label' => 'Políticas de privacidad',  'href' => '#'],
    ['label' => 'Términos y condiciones',   'href' => '#'],
    ['label' => 'Mapa del sitio',           'href' => '#'],
    ['label' => 'Atención a la ciudadanía', 'href' => '#'],
];

$socialLinks = [
    ['label' => 'Facebook',   'icon' => 'bi-facebook',   'href' => '#'],
    ['label' => 'X',          'icon' => 'bi-twitter-x',  'href' => '#'],
    ['label' => 'Instagram',  'icon' => 'bi-instagram',  'href' => '#'],
    ['label' => 'YouTube',    'icon' => 'bi-youtube',    'href' => '#'],
];

// JSON para el script inline
$galleryImagesJson = json_encode($galleryImages, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

// ---------------------------------------------------------------------------
// 3. Helpers de renderizado HTML
// ---------------------------------------------------------------------------

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function attr(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// ---------------------------------------------------------------------------
// 4. Construir el HTML
// ---------------------------------------------------------------------------

ob_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Reto | Secretaría Distrital de Movilidad</title>
<meta name="description" content="Reto Más lento, más pro: una landing sobre conducción segura, control y dominio de la moto en Bogotá.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Work+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<?php
// Leer el bloque <style> de la vista original y volcarlo directamente
$viewPath = BASE_PATH . '/resources/views/sites/reto.blade.php';
$viewContent = file_get_contents($viewPath);
// Extraer el bloque <style>...</style>
if (preg_match('/<style>(.*?)<\/style>/s', $viewContent, $styleMatch)) {
    $css = $styleMatch[1];
    // Convertir url() locales a data URI base64
    $css = preg_replace_callback("/url\\(['\"]?\\/([^'\"\\)]+)['\"]?\\)/", function ($m) {
        $relPath = urldecode($m[1]);
        $absPath = PUBLIC_PATH . '/' . $relPath;
        if (file_exists($absPath) && is_file($absPath)) {
            return 'url(' . toDataUri($absPath) . ')';
        }
        return $m[0];
    }, $css);
    echo '<style>' . $css . '</style>';
}
?>
</head>
<body>
<a class="skip-link" href="#inicio">Saltar al contenido principal</a>

<header class="site-header">
  <div class="site-header__inner">
    <a class="site-brand" href="#inicio" aria-label="Ir al inicio">
      <img src="<?= attr($brandLogo) ?>" alt="Alcaldía Mayor de Bogotá D.C. y Secretaría de Movilidad">
    </a>
    <nav class="site-nav" id="site-primary-menu" aria-label="Navegación principal">
      <a href="#inicio">Inicio</a>
      <a href="#por-que">El reto</a>
      <a href="#explora">Información</a>
      <?php if ($classifiedTotal > 0): ?><a href="#clasificados">Clasificados</a><?php endif; ?>
      <a href="#noticias">Noticias</a>
      <a href="#faq">Preguntas frecuentes</a>
    </nav>
    <div class="site-header__actions">
      <a class="header-cta" href="<?= attr($inscripcionUrl) ?>" target="_blank" rel="noopener noreferrer">
        <span>Inscribete</span>
        <span class="btn-icon-circle" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
      </a>
      <button class="site-menu-toggle" type="button" aria-controls="site-primary-menu" aria-expanded="false" aria-label="Abrir menú principal">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<main>
  <!-- HERO -->
  <section class="hero" id="inicio" aria-labelledby="hero-title" data-hero-carousel data-delay="6500"
    <?php if ($heroSlideTotal > 1): ?>aria-describedby="hero-carousel-instructions"<?php endif; ?>>
    <div class="hero-carousel" aria-roledescription="carrusel" aria-label="Galería destacada del reto">
      <div class="hero-carousel__viewport" aria-hidden="true">
        <?php foreach ($heroSlides as $i => $slide): ?>
        <figure class="hero-carousel__slide <?= $i === 0 ? 'is-active' : '' ?>" data-hero-slide aria-hidden="<?= $i === 0 ? 'false' : 'true' ?>">
          <img src="<?= attr($slide['src']) ?>" alt="" loading="<?= $i === 0 ? 'eager' : 'lazy' ?>" decoding="async" <?= $i === 0 ? 'fetchpriority="high"' : '' ?>>
        </figure>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="hero__inner">
      <div class="hero__copy">
        <div class="hero-badge"><span>RETO</span><i class="bi bi-bicycle" aria-hidden="true"></i></div>
        <h1 id="hero-title">Más lento,<span class="accent">más pro.</span></h1>
        <p>Ser buen motociclista no es correr. Es tener el control y llegar seguro.</p>
        <div class="hero__actions">
          <a class="btn-solid" href="<?= attr($inscripcionUrl) ?>" target="_blank" rel="noopener noreferrer">
            <span>Inscribete</span>
            <span class="btn-icon-circle" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
          </a>
          <a class="hero-secondary" href="#por-que">
            <span>Conoce más</span><i class="bi bi-chevron-down" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <?php if ($heroSlideTotal > 1): ?>
      <div class="hero__meta">
        <p class="sr-only" id="hero-carousel-instructions">Usa los controles para avanzar, retroceder o pausar el carrusel.</p>
        <div class="hero-carousel__toolbar">
          <div class="hero-carousel__controls" aria-label="Controles del carrusel principal">
            <button class="hero-carousel__button" type="button" data-hero-action="previous" aria-label="Mostrar la imagen anterior"><i class="bi bi-arrow-left" aria-hidden="true"></i></button>
            <button class="hero-carousel__button" type="button" data-hero-action="next" aria-label="Mostrar la imagen siguiente"><i class="bi bi-arrow-right" aria-hidden="true"></i></button>
            <button class="hero-carousel__toggle" type="button" data-hero-action="toggle" aria-label="Pausar rotación automática" aria-pressed="false">
              <i class="bi bi-pause-fill" aria-hidden="true" data-hero-toggle-icon></i>
              <span data-hero-toggle-label>Pausar</span>
            </button>
          </div>
          <div class="hero-carousel__pagination" aria-label="Seleccionar una imagen del carrusel">
            <?php foreach ($heroSlides as $i => $slide): ?>
            <button class="hero-carousel__dot <?= $i === 0 ? 'is-active' : '' ?>" type="button" data-hero-dot data-slide-index="<?= $i ?>"
              aria-label="<?= $i === 0 ? 'Imagen actual ' : 'Mostrar imagen ' ?><?= $i + 1 ?> de <?= $heroSlideTotal ?>"
              <?= $i === 0 ? 'aria-current="true"' : '' ?>>
              <span class="sr-only">Imagen <?= $i + 1 ?></span>
            </button>
            <?php endforeach; ?>
          </div>
        </div>
        <p class="hero-carousel__status" data-hero-status aria-live="off" aria-atomic="true">Imagen 1 de <?= $heroSlideTotal ?></p>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- POR QUÉ -->
  <section class="page-section" id="por-que" aria-labelledby="por-que-title">
    <div class="page-section__inner">
      <h2 class="page-section__title" id="por-que-title">¿Por qué este reto?</h2>
      <div class="why-layout">
        <div class="why-main">
          <div class="why-cards">
            <?php foreach ($whyCards as $card): ?>
            <article class="stat-card <?= !empty($card['featured']) ? 'stat-card--featured' : '' ?>">
              <span class="stat-card__icon" aria-hidden="true"><i class="bi <?= e($card['icon']) ?>"></i></span>
              <strong class="stat-card__title <?= !empty($card['featured']) ? 'stat-card__title--featured' : '' ?>"><?= e($card['title']) ?></strong>
              <p class="stat-card__text"><?= e($card['text']) ?></p>
            </article>
            <?php endforeach; ?>
          </div>
          <p class="section-note">Este reto busca cambiar esa realidad. Promueve el control, la técnica y las decisiones seguras para proteger la vida en las vías de Bogotá.</p>
        </div>
        <aside class="why-video">
          <article class="video-card" aria-label="Video generalidades del reto">
            <button class="video-card__trigger" type="button" data-video-open
              aria-label="Reproducir video del Reto Más lento, más pro (abre en ventana emergente)">
              <span class="video-card__thumb">
                <img src="<?= attr($whyVideoBg) ?>" alt="" loading="lazy" decoding="async">
                <span class="video-card__play" aria-hidden="true"><i class="bi bi-play-fill"></i></span>
              </span>
              <span class="video-card__body-label"><strong>Ver video</strong></span>
            </button>
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

  <!-- QUÉ BUSCA -->
  <section class="page-section" id="que-busca" aria-labelledby="que-busca-title">
    <div class="page-section__inner">
      <h2 class="page-section__title" id="que-busca-title">¿Qué busca?</h2>
      <div class="what-layout">
        <div class="what-list-wrapper">
          <p class="page-section__lead">El reto 'Más lento, más pro' busca tumbar el mito de que ir más rápido es ir mejor, recordando a los motociclistas que el exceso de velocidad es el riesgo, pero que el dominio, el control y las decisiones seguras en las vías, son acciones que protegen la vida.</p>
          <ul class="what-list" aria-label="Objetivos del reto">
            <li><span class="what-list__icon" aria-hidden="true"><img src="<?= attr($cancelIcon) ?>" alt=""></span><span>Velocidad <b>&ne;</b> eficiencia</span></li>
            <li><span class="what-list__icon" aria-hidden="true"><img src="<?= attr($cancelIcon) ?>" alt=""></span><span>Velocidad <b>&ne;</b> habilidad</span></li>
            <li><span class="what-list__icon" aria-hidden="true"><img src="<?= attr($cancelIcon) ?>" alt=""></span><span>Lentitud <b>&ne;</b> estorbo</span></li>
          </ul>
        </div>
        <article class="what-callout" aria-label="Mensaje principal del reto">
          <div class="what-callout__icons" aria-hidden="true">
            <span class="what-callout__icon"><img src="<?= attr($helmetIcon) ?>" alt=""></span>
            <span class="what-callout__icon"><img src="<?= attr($guantletIcon) ?>" alt=""></span>
            <span class="what-callout__icon"><img src="<?= attr($cerebroIcon) ?>" alt=""></span>
          </div>
          <h3>Ser pro es <span class="accent">dominar,</span><br><span class="accent">controlar</span> y decidir bien.</h3>
          <p>Llegar, sin poner en riesgo la vida, es el verdadero logro.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- EN QUÉ CONSISTE -->
  <section class="page-section" id="como-consiste" aria-labelledby="como-consiste-title">
    <div class="page-section__inner">
      <h2 class="page-section__title" id="como-consiste-title">¿En qué consiste?</h2>
      <p class="page-section__lead">Un reto progresivo que evalúa tus habilidades y tu control.</p>
      <div class="process-layout">
        <div class="process-track">
          <div class="process-steps">
            <?php foreach ($steps as $step): ?>
            <article class="process-card">
              <span class="process-card__number"><?= e($step['number']) ?></span>
              <span class="process-card__thumb" aria-hidden="true">
                <img src="<?= attr($step['thumb']) ?>" alt="" loading="lazy" decoding="async">
              </span>
              <h3><?= e($step['title']) ?></h3>
              <p><?= e($step['text']) ?></p>
            </article>
            <?php endforeach; ?>
          </div>
        </div>
        <aside class="process-side" id="faq">
          <span class="process-side__icon" aria-hidden="true"><img src="<?= attr($starIcon) ?>" alt=""></span>
          <h3>¿Cómo se define a quienes avanzan?</h3>
          <p>El reto no premia correr. Premia a quienes controlan mejor la moto, recorren la pista con precisión y logran el mejor desempeño en términos de lentitud y dominio.</p>
        </aside>
      </div>
    </div>
  </section>

  <!-- EXPLORA / TABS -->
  <section class="page-section page-section--explora" id="explora" aria-labelledby="explora-title">
    <div class="page-section__inner">
      <h2 class="page-section__title" id="explora-title">Explora la información del reto</h2>
      <p class="page-section__lead">Elige el tema que quieres revisar.</p>
      <div class="tabs-header" role="tablist" aria-label="Información del reto">
        <button class="tab-button is-active" type="button" role="tab" aria-selected="true" aria-controls="panel-categorias" data-reto-tab="categorias">Categorías</button>
        <button class="tab-button" type="button" role="tab" aria-selected="false" aria-controls="panel-requisitos" data-reto-tab="requisitos">Requisitos</button>
        <button class="tab-button" type="button" role="tab" aria-selected="false" aria-controls="panel-reglas" data-reto-tab="reglas">Reglas</button>
      </div>
      <div class="tab-panels">
        <section class="tab-panel" id="panel-categorias" data-reto-panel="categorias" role="tabpanel">
          <h3 class="tab-panel__title">Categorías de participación</h3>
          <p class="tab-panel__lead">La clasificación separa experiencia y género para que la competencia sea más clara y comparable.</p>
          <div class="category-grid">
            <?php foreach ($categories as $cat): ?>
            <article class="category-pill">
              <span class="category-pill__icon" aria-hidden="true"><i class="bi <?= e($cat['icon']) ?>"></i></span>
              <div class="category-pill__content">
                <strong><?= e($cat['title']) ?></strong>
                <span><?= e($cat['text']) ?></span>
              </div>
            </article>
            <?php endforeach; ?>
          </div>
        </section>
        <section class="tab-panel is-hidden" id="panel-requisitos" data-reto-panel="requisitos" role="tabpanel" hidden>
          <h3 class="tab-panel__title">Requisitos para participar</h3>
          <p class="tab-panel__lead">Antes de inscribirte, verifica que cumples estas condiciones básicas.</p>
          <div class="tab-panel__grid requirement-grid">
            <?php foreach ($requirements as $req): ?>
            <article class="requirement-card">
              <span class="requirement-card__icon" aria-hidden="true"><i class="bi <?= e($req['icon']) ?>"></i></span>
              <strong><?= e($req['text']) ?></strong>
            </article>
            <?php endforeach; ?>
          </div>
        </section>
        <section class="tab-panel is-hidden" id="panel-reglas" data-reto-panel="reglas" role="tabpanel" hidden>
          <h3 class="tab-panel__title">Reglas del reto</h3>
          <p class="tab-panel__lead">Estas reglas buscan reforzar hábitos de conducción segura y controlada durante la prueba.</p>
          <div class="tab-panel__grid rule-grid">
            <?php foreach ($rules as $rule): ?>
            <article class="rule-card">
              <span class="rule-card__icon" aria-hidden="true"><i class="bi <?= e($rule['icon']) ?>"></i></span>
              <div>
                <strong><?= e($rule['text']) ?></strong>
                <p>La prueba se desarrolla con control, precisión y respeto por el recorrido definido.</p>
              </div>
            </article>
            <?php endforeach; ?>
          </div>
        </section>
      </div>
    </div>
  </section>

  <!-- CLASIFICADOS -->
  <?php if ($classifiedTotal > 0): ?>
  <span class="page-anchor" id="clasificados" aria-hidden="true"></span>
  <section class="classified-section" aria-labelledby="clasificados-title" aria-describedby="clasificados-lead clasificados-note">
    <div class="classified-section__inner">
      <div class="classified-section__header">
        <div>
          <p class="classified-section__eyebrow">Clasificados</p>
          <h2 class="classified-section__title" id="clasificados-title">Clasificados por categoría</h2>
          <p class="classified-section__lead" id="clasificados-lead">Revisa quiénes ya clasificaron y ubícalos por categoría.</p>
          <p class="sr-only" id="clasificados-note">Cada registro se presenta por categoría con su puesto y nombre.</p>
        </div>
        <aside class="classified-summary" aria-label="Resumen de clasificados">
          <span class="classified-summary__value"><?= $classifiedTotal ?></span>
          <span class="classified-summary__label">clasificados a la fecha</span>
          <span class="classified-summary__meta"><?= count($classifiedByCategory) ?> categorías con registro activo</span>
        </aside>
      </div>
      <div class="classified-grid">
        <?php foreach ($classifiedByCategory as $group): ?>
        <section class="classified-group" aria-labelledby="clasificados-<?= e($group['key']) ?>-title">
          <div class="classified-group__header">
            <div class="classified-group__heading">
              <span class="classified-group__icon" aria-hidden="true"><i class="bi <?= e($group['icon']) ?>"></i></span>
              <div>
                <h3 class="classified-group__title" id="clasificados-<?= e($group['key']) ?>-title"><?= e($group['title']) ?></h3>
                <span class="classified-group__description"><?= e($group['description']) ?></span>
              </div>
            </div>
            <span class="classified-group__count" aria-label="<?= count($group['riders']) ?> clasificados en <?= e($group['title']) ?>"><?= count($group['riders']) ?> clasificados</span>
          </div>
          <ul class="classified-group__list" aria-label="Clasificados en <?= e($group['title']) ?>">
            <?php foreach ($group['riders'] as $rider): ?>
            <li class="classified-card">
              <figure class="classified-card__figure">
                <div class="classified-card__media">
                  <img src="<?= attr($rider['src']) ?>" alt="" aria-hidden="true" loading="lazy" decoding="async">
                </div>
                <figcaption class="classified-card__caption">
                  <span class="classified-card__rank">Lugar <?= (int)$rider['rank'] ?></span>
                  <strong class="classified-card__name"><?= e($rider['name']) ?></strong>
                </figcaption>
              </figure>
            </li>
            <?php endforeach; ?>
          </ul>
        </section>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- NOTICIAS / CTA -->
  <span class="page-anchor" id="noticias" aria-hidden="true"></span>
  <section class="cta-band" id="inscribirse" aria-labelledby="inscribirse-title">
    <div class="cta-band__bg" aria-hidden="true">
      <img src="<?= attr($ctaBg) ?>" alt="" loading="lazy" decoding="async">
    </div>
    <div class="cta-band__inner">
      <div class="cta-band__copy">
        <h2 id="inscribirse-title">Acepta <span class="accent">el reto</span></h2>
        <p>Demuestra que quien es pro no corre, domina. Inscríbete y sé parte de una cultura de movilidad segura.</p>
      </div>
      <a class="cta-band__button" href="<?= attr($inscripcionUrl) ?>" target="_blank" rel="noopener noreferrer">
        <span>Inscríbete en la<br> siguiente válida</span>
        <span class="btn-icon-circle" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
      </a>
    </div>
  </section>

  <!-- GALERÍA -->
  <?php if ($galleryImageTotal > 0): ?>
  <section class="gallery-ribbon" id="galeria" aria-labelledby="galeria-title">
    <div class="gallery-ribbon__inner" data-gallery-strip data-speed="0.046">
      <div class="gallery-ribbon__header">
        <div class="gallery-ribbon__copy">
          <p class="gallery-ribbon__eyebrow">Galería</p>
          <h2 class="gallery-ribbon__title" id="galeria-title">El reto avanza</h2>
          <p class="gallery-ribbon__lead">Cada reto deja nuevos momentos para recordar. Recorre la galería, pausa el movimiento cuando quieras y abre cualquier fotografía para verla con más detalle.</p>
        </div>
        <?php if ($galleryImageTotal > 1): ?>
        <div class="gallery-ribbon__controls" aria-label="Controles de la tirilla fotográfica">
          <button class="gallery-ribbon__button" type="button" data-gallery-action="previous" aria-label="Desplazar la tirilla hacia atrás"><i class="bi bi-arrow-left" aria-hidden="true"></i></button>
          <button class="gallery-ribbon__button" type="button" data-gallery-action="next" aria-label="Desplazar la tirilla hacia adelante"><i class="bi bi-arrow-right" aria-hidden="true"></i></button>
          <button class="gallery-ribbon__toggle" type="button" data-gallery-action="toggle" aria-label="Pausar desplazamiento automático" aria-pressed="false">
            <i class="bi bi-pause-fill" aria-hidden="true" data-gallery-toggle-icon></i>
            <span data-gallery-toggle-label>Pausar</span>
          </button>
        </div>
        <?php endif; ?>
      </div>
      <p class="sr-only" id="gallery-ribbon-instructions">La galería se desplaza automáticamente. Usa los controles para avanzar, retroceder o pausar la tirilla.</p>
      <div class="gallery-ribbon__viewport" data-gallery-viewport tabindex="0" role="region" aria-label="Tirilla de imágenes del reto" aria-describedby="gallery-ribbon-instructions">
        <div class="gallery-ribbon__track" data-gallery-track>
          <?php foreach ($galleryImages as $i => $image): ?>
          <button class="gallery-ribbon__item" type="button" data-gallery-open="<?= $i ?>" aria-label="Abrir imagen <?= $i + 1 ?> de <?= $galleryImageTotal ?>">
            <span class="gallery-ribbon__card">
              <span class="gallery-ribbon__thumb"><img src="<?= attr($image['src']) ?>" alt="" loading="lazy" decoding="async"></span>
              <span class="gallery-ribbon__caption">
                <strong><?= e($image['title']) ?></strong>
                <span><?= e($image['caption']) ?></span>
              </span>
            </span>
          </button>
          <?php endforeach; ?>
          <?php if ($galleryImageTotal > 1): ?>
          <?php foreach ($galleryImages as $i => $image): ?>
          <button class="gallery-ribbon__item" type="button" data-gallery-open="<?= $i ?>" data-gallery-clone="true" aria-hidden="true" tabindex="-1">
            <span class="gallery-ribbon__card">
              <span class="gallery-ribbon__thumb"><img src="<?= attr($image['src']) ?>" alt="" loading="lazy" decoding="async"></span>
              <span class="gallery-ribbon__caption">
                <strong><?= e($image['title']) ?></strong>
                <span><?= e($image['caption']) ?></span>
              </span>
            </span>
          </button>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <dialog class="gallery-lightbox" data-gallery-dialog aria-label="Visor de galería del reto">
    <div class="gallery-lightbox__shell">
      <div class="gallery-lightbox__topbar">
        <button class="gallery-lightbox__close" type="button" data-gallery-close aria-label="Cerrar visor de galería"><i class="bi bi-x-lg" aria-hidden="true"></i></button>
      </div>
      <div class="gallery-lightbox__body">
        <div class="gallery-lightbox__media"><img src="" alt="" data-gallery-dialog-image></div>
        <div class="gallery-lightbox__footer">
          <div class="gallery-lightbox__meta"><p data-gallery-dialog-caption>Registro fotográfico</p></div>
          <?php if ($galleryImageTotal > 1): ?>
          <div class="gallery-lightbox__controls" aria-label="Navegación del visor">
            <button class="gallery-lightbox__button" type="button" data-gallery-dialog-nav="previous" aria-label="Mostrar imagen anterior"><i class="bi bi-arrow-left" aria-hidden="true"></i></button>
            <button class="gallery-lightbox__button" type="button" data-gallery-dialog-nav="next" aria-label="Mostrar imagen siguiente"><i class="bi bi-arrow-right" aria-hidden="true"></i></button>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </dialog>
  <?php endif; ?>

  <!-- Video lightbox -->
  <dialog class="video-lightbox" data-video-dialog aria-label="Reproductor de video" aria-modal="true" role="dialog">
    <div class="video-lightbox__shell">
      <div class="video-lightbox__topbar">
        <button class="video-lightbox__close" type="button" data-video-close aria-label="Cerrar reproductor de video">
          <i class="bi bi-x-lg" aria-hidden="true"></i>
        </button>
      </div>
      <div class="video-lightbox__body">
        <div class="video-lightbox__embed">
          <iframe data-video-dialog-iframe title="Video del Reto Más lento, más pro" frameborder="0"
            referrerpolicy="strict-origin-when-cross-origin"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </dialog>
</main>

<footer class="site-footer">
  <div class="site-footer__inner">
    <div class="site-footer__top">
      <nav class="footer-links" aria-label="Enlaces de pie de página">
        <?php foreach ($footerLinks as $link): ?>
        <a href="<?= attr($link['href']) ?>"><?= e($link['label']) ?></a>
        <?php endforeach; ?>
      </nav>
      <div class="social-links" aria-label="Redes sociales">
        <?php foreach ($socialLinks as $social): ?>
        <a href="<?= attr($social['href']) ?>" aria-label="<?= attr($social['label']) ?>" title="<?= attr($social['label']) ?>">
          <i class="bi <?= e($social['icon']) ?>" aria-hidden="true"></i>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</footer>

<?php
// Extraer el bloque <script>...</script> de la vista blade y volcarlo,
// reemplazando la directiva @json por el JSON real de las imágenes.
if (preg_match('/<script>(.*?)<\/script>/s', $viewContent, $scriptMatch)) {
    $js = $scriptMatch[1];
    // Reemplazar @json($galleryImages) por el JSON real
    $js = str_replace('@json($galleryImages)', $galleryImagesJson, $js);
    echo '<script>' . $js . '</script>';
}
?>
</body>
</html>
<?php
// ---------------------------------------------------------------------------
// 5. Guardar el HTML generado
// ---------------------------------------------------------------------------
$html = ob_get_clean();

if (!is_dir(OUTPUT_DIR)) {
    mkdir(OUTPUT_DIR, 0755, true);
}

file_put_contents(OUTPUT_FILE, $html);

$sizeKb = round(filesize(OUTPUT_FILE) / 1024);
echo "✅ HTML generado correctamente.\n";
echo "   Archivo : " . OUTPUT_FILE . "\n";
echo "   Tamaño  : {$sizeKb} KB\n";
