<style>
    /* Layout base y tipografía */
    .container {
        position: relative;
    }

    .barriosVitales {
        max-width: 980px;
        font-family: "Montserrat", sans-serif;
        font-size: 16px;
        font-weight: 500;
        text-align: justify;
        line-height: 1.5;
        color: rgba(25, 25, 25, 1);
        margin: 0 auto;
    }

    .region-content {
        padding: 0;
        overflow: hidden;
    }

    .w-100 {
        width: 100%;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .bva {
        color: #4c531e;
    }

    .bvv {
        color: #4c531e;
    }

    .bvb {
        color: rgb(255, 255, 255);
    }

    .bvg {
        color: rgb(213, 213, 213);
    }

    .box-a {
        background-color: rgb(28, 32, 70);
    }

    .box-v {
        background-color: rgb(102, 224, 38);
    }

    .box-b {
        background-color: rgb(255, 255, 255);
    }

    .box-g {
        background-color: rgb(213, 213, 213);
    }

    .title-bv {
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
    }

    .box-text {
        padding-top: 15px;
        padding-bottom: 8px;
    }

    .box-text .title3 {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .box-paragraph {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .barras {
        padding: 0;
        margin: 0;
        position: relative;
    }

    .barra {
        position: absolute;
        border-bottom: solid 3px;
    }

    .left {
        left: 0;
        width: 50%;
    }

    .right {
        right: 0;
        width: 50%;
    }

    /* Encabezado y video de fondo */
    .box-head {
        position: relative;
    }

    .box-logo {
        padding: 10px;
    }

    .box-logo .logo img {
        max-height: 130px;
        width: auto;
        margin: auto;
        display: block;
        object-fit: contain;
    }

    .box-wrp {
        position: relative;
    }

    .box-back {
        position: relative;
    }

    .video_fondo video {
        position: relative;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Sección ¿Qué es Barrios Vitales? */
    .box-items ul {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left;
    }

    .box-items ul li {
        list-style-position: inside;
    }

    .box-items li:before {
        position: relative;
        top: 1px;
        display: inline-block;
        padding: 6px 15px;
        /* Reemplazo de Glyphicons: flecha/triángulo */
        content: "";
        color: rgb(28, 32, 70);
        background-image: url("[custom:old_url]/sites/default/files/2025-09/angle-right.svg");
        width: 18px;
        height: 18px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
    }

    .box-items ul a {
        font-weight: 500;
        text-align: left;
        line-height: 1.4;
        color: rgba(25, 25, 25, 1);
        text-decoration: none;
    }

    .box-items ul a:hover {
        color: rgb(77, 84, 31);
        font-weight: 600;
    }

    /* Mapa */
    .barriosVitales .box-mapa {
        grid-area: box-mapa;
        margin-top: 40px;
    }

    .box-mapa img {
        max-width: 940px;
        margin: auto;
        display: block;
    }

    /* Video San Felipe */
    .box-video {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 10px;
    }

    /* Tabs: estilos adaptados a BS5 */
    .box-tabs {
        margin-bottom: 60px;
    }

    .nav-tabs .nav-link {
        border-radius: 0 !important;
        background: #4c531e;
        color: white !important;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
    }

    .nav-tabs .nav-link:hover,
    .nav-tabs .nav-link:focus {
        background-color: #4c531e;
        color: #fff;
    }

    .nav-tabs .nav-link.active {
        background-color: white !important;
        color: #4c531e !important;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
    }

    /* Videos inferiores y descripciones */
    .box-videos {
        padding-top: 20px;
    }

    .box-det_video {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: auto;
        padding: 10px;
    }

    .box-wrapper-mov {
        margin: 15px !important;
        background-color: #f5f5f5;
    }

    .box-det_video h3 {
        margin: 10px;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        color: #4c531e;
    }

    .paragraph-video {
        background-color: #f5f5f5;
    }

    .box-det_video p {
        font-weight: 500;
        text-align: center;
        line-height: 1.2;
        color: rgba(25, 25, 25, 1);
    }

    /* Botones de recursos */
    .box-botones-barrios a {
        text-decoration: none !important;
        color: #fff !important;
        background-color: inherit !important;
    }

    .box-botones-barrios .btn-tab {
        background-color: #4c531e !important;
        padding: 30px;
        min-height: 60px;
        text-align: center;
        color: #fff !important;
        font-weight: 700;
        margin: auto;
        line-height: 1.2;
        margin-bottom: 16px;
        border: 1px solid transparent;
    }

    .box-botones-barrios a:hover .btn-tab,
    .box-botones-barrios a:focus .btn-tab {
        background-color: white !important;
        color: #4c531e !important;
        border-color: #4c531e;
    }

    /* Slider/Galería (custom) */
    .container-bv {
        position: relative;
    }

    .slides {
        display: none;
    }

    .cursor {
        cursor: pointer;
    }

    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: #fff;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    .caption-container-bv {
        text-align: center;
        background-color: #222;
        padding: 16px;
        color: #fff;
    }

    .column-box {
        float: left;
        width: 33.33334%;
    }

    .demo {
        opacity: 0.4;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }

    /* Utilidades responsivas */
    @media (min-width: 768px) {
        .box-head {
            position: absolute;
            width: 100%;
            z-index: 1;
        }

        .box-logo {
            padding: 40px;
            height: 385px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box-logo .logo img {
            max-height: 100%;
            width: auto;
            margin: auto;
        }

        .title-bv {
            text-align: left;
        }

        .box-s1 {
            padding: 30px;
        }

        .nav-tabs .nav-link {
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box-botones-barrios .btn-tab {
            height: 110px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .paragraph-video {
            padding: 10px;
            min-height: 160px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box-tabs {
            margin-bottom: 250px;
        }
    }

    @media (min-width: 992px) {
        .nav-tabs .nav-link {
            height: 60px;
        }
    }

    @media (min-width: 1024px) {
        .box-logo {
            height: 512px;
        }
    }

    @media (min-width: 1140px) {
        .box-logo {
            height: 600px;
            margin-top: 10px;
        }
    }
</style>
<div class="container">
    <div class="row" id="lectura">
        <div class="col-12">
            <div class="region region-content">
                <div class="ds-1col node node-article view-mode-full clearfix">
                    <div class="field field-name-title field-type-ds field-label-hidden">
                        <div class="field-items">
                            <div class="field-item even">
                                <h2 class="centertil">
                                    Barrios Vitales
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                        <div class="field-items">
                            <div class="field-item even">
                                <!-- Set Wrapper -->
                                <div>
                                    <!-- Head / Logo -->
                                    <div class="box-head">
                                        <div class="row">
                                            <div class="col-12 col-sm-5 offset-sm-7">
                                                <div class="box-logo box-a">
                                                    <div class="logo">
                                                        <img class="img-fluid w-100"
                                                            src="[custom:old_url]/sites/default/files/Paginas/30-04-2022/logo_barrios_vitales.png"
                                                            alt="logo Barrios Vitales" title="logo Barrios Vitales">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Video de fondo -->
                                    <div class="box-wrp">
                                        <div class="box-back">
                                            <div class="video_fondo">
                                                <video autoplay="" muted="" loop="" width="100%">
                                                    <source
                                                        src="[custom:old_url]/sites/default/files/Paginas/30-04-2022/reel_barrios_vitales.mp4"
                                                        type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ¿Qué es Barrios Vitales? -->
                                    <div class="box-s1">
                                        <div class="box-text">
                                            <div class="title3 title-bv bva">
                                                <h3>
                                                    <strong>¿Qué es Barrios Vitales?</strong>
                                                </h3>
                                                <div class="barras">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-5">
                                                            <div class="barra left bva">
                                                                &nbsp;
                                                            </div>
                                                            <div class="barra right bvv">
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-paragraph">
                                                <p>
                                                    Es un proyecto que busca beneficiar principalmente a los peatones,
                                                    redistribuyendo el espacio público que anteriormente estaba dedicado
                                                    a la circulación de vehículos, a través de intervenciones de
                                                    urbanismo táctico y de infraestructura.
                                                </p>
                                                <p>
                                                    A través de la estrategia Barrios Vitales se generan nuevas áreas de
                                                    espacio público para facilitar el encuentro y la permanencia entre
                                                    vecinos y visitantes del sector, mejorando la seguridad vial y las
                                                    condiciones ambientales de la zona. También se promueven los medios
                                                    de transporte sostenible y la dinamización del sector comercial,
                                                    cultural y de servicios en los barrios.
                                                </p>
                                                <p>
                                                    Este proyecto reorganiza el espacio público permitiendo que haya
                                                    zonas dedicadas a peatones, circulación vehicular, zonas de
                                                    estacionamiento y zonas de carga y descarga, entre otros.
                                                </p>
                                                <p>
                                                    San Felipe es el primer barrio en el que se implementaron las
                                                    intervenciones definitivas de urbanismo táctico de Barrios Vitales.
                                                    Sin embargo, la Secretaría Distrital de Movilidad lidera actualmente
                                                    el proceso en otros 4 barrios:
                                                </p>
                                            </div>
                                            <div class="box-items py-4">
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <ul>
                                                            <li data-list-item-id="e2243369955ea4180f59b162ddf081d48">
                                                                <a target="_blank" rel="noopener noreferrer"
                                                                    tabindex="0">El Porvenir (Bosa)</a>
                                                            </li>
                                                            <li data-list-item-id="ed94ec04704b2b234a4becb3cd341eeef">
                                                                <a target="_blank" rel="noopener noreferrer"
                                                                    tabindex="0">San Blas - 20 de Julio (San
                                                                    Cristóbal)</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <ul>
                                                            <li data-list-item-id="e9deb95eb4ff76b07de112f362142ed59">
                                                                <a target="_blank" rel="noopener noreferrer"
                                                                    tabindex="0">Las Cruces - San Bernardo (Santa
                                                                    fe)</a>
                                                            </li>
                                                            <li data-list-item-id="e0256e7f3ef56108685de1b35d3755195">
                                                                <a target="_blank" rel="noopener noreferrer"
                                                                    tabindex="0">San Carlos (Tunjuelito)</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Mapa -->
                                            <div class="box-mapa">
                                                <a href="[custom:old_url]/sites/default/files/Paginas/05-06-2023/mapa_barrios_vitales.jpg"
                                                    target="_blank" rel="noopener noreferrer"><img
                                                        class="img-fluid w-100"
                                                        src="[custom:old_url]/sites/default/files/Paginas/05-06-2023/mapa_barrios_vitales.jpg"
                                                        alt="logo mapa-bv">&nbsp;</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- San Felipe es el primer Barrio Vital (video) -->
                                    <div class="box-video">
                                        <div class="box-text">
                                            <div class="title3 title-bv bva">
                                                <h3>
                                                    <strong>San Felipe es el primer Barrio Vital</strong>
                                                </h3>
                                                <div class="barras">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-5">
                                                            <div class="barra left bva">
                                                                &nbsp;
                                                            </div>
                                                            <div class="barra right bvv">
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="video">
                                            <div class="ratio ratio-16x9">
                                                <iframe src="https://www.youtube.com/embed/wqVG13WKfb8"
                                                    title="YouTube video player"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen=""></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Intervenciones en San Felipe -->
                                    <div class="box-mapa">
                                        <div class="box-text">
                                            <div class="title3 title-bv bva">
                                                <h3>
                                                    <strong>Intervenciones en el barrio San Felipe</strong>
                                                </h3>
                                                <div class="barras">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-5">
                                                            <div class="barra left bva">
                                                                &nbsp;
                                                            </div>
                                                            <div class="barra right bvv">
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-img">
                                            <div class="imagen">
                                                <div class="row">
                                                    <!-- versión móvil -->
                                                    <div class="col-12 d-block d-sm-none">
                                                        <a href="[custom:old_url]/sites/default/files/Paginas/17-05-2022/logo_mapa_xs.png"
                                                            target="_blank" rel="noopener noreferrer"><img
                                                                class="img-fluid w-100 img-mapa"
                                                                src="[custom:old_url]/sites/default/files/Paginas/17-05-2022/logo_mapa_xs.png"
                                                                alt="Mapa de intervenciones realizadas en San Felipe"
                                                                title="Mapa de intervenciones realizadas en San Felipe">&nbsp;</a>
                                                    </div>
                                                    <div class="col-12 d-block d-sm-none">
                                                        <a href="[custom:old_url]/sites/default/files/Paginas/17-05-2022/logo_convenciones_xs.png"
                                                            target="_blank" rel="noopener noreferrer"><img
                                                                class="img-fluid w-100 img-mapa"
                                                                src="[custom:old_url]/sites/default/files/Paginas/17-05-2022/logo_convenciones_xs.png"
                                                                alt="Mapa de intervenciones realizadas en San Felipe"
                                                                title="Mapa de intervenciones realizadas en San Felipe">&nbsp;</a>
                                                    </div>
                                                    <!-- versión escritorio -->
                                                    <div class="col-sm-12 d-none d-sm-block">
                                                        <a href="[custom:old_url]/sites/default/files/Paginas/17-05-2022/mapa_bv_220512.png"
                                                            target="_blank" rel="noopener noreferrer"><img
                                                                class="img-fluid w-100 img-mapa"
                                                                src="[custom:old_url]/sites/default/files/Paginas/17-05-2022/mapa_bv_220512.png"
                                                                alt="Mapa de intervenciones realizadas en San Felipe"
                                                                title="Mapa de intervenciones realizadas en San Felipe">&nbsp;</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tabs: ¿Cuáles son los nuevos espacios de San Felipe? -->
                                    <div class="box-tabs">
                                        <div class="box-text">
                                            <div class="title3 title-bv bva">
                                                <h3>
                                                    <strong>¿Cuáles son los nuevos espacios de San Felipe?</strong>
                                                </h3>
                                                <div class="barras">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-5">
                                                            <div class="barra left bva">
                                                                &nbsp;
                                                            </div>
                                                            <div class="barra right bvv">
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs nav-justified" id="tabsSanFelipe" role="tablist">
                                            <li class="nav-item" role="presentation"
                                                data-list-item-id="e71cff8347ccce3a3b272c6bb99f210fb">
                                                <a class="nav-link active" href="#menu1" id="tab-menu1"
                                                    data-bs-toggle="tab" role="tab" aria-controls="menu1"
                                                    aria-selected="true">Zonas peatonales</a>
                                            </li>
                                            <li class="nav-item" role="presentation"
                                                data-list-item-id="e424ee1d0e196c9250be71105e88c4d96">
                                                <a class="nav-link" href="#menu2" id="tab-menu2"
                                                    data-bs-toggle="tab" role="tab" aria-controls="menu2"
                                                    aria-selected="false">Estacionamiento temporal</a>
                                            </li>
                                            <li class="nav-item" role="presentation"
                                                data-list-item-id="e0a1f98e9fc818aa2fb80aa5b4f070358">
                                                <a class="nav-link" href="#menu3" id="tab-menu3"
                                                    data-bs-toggle="tab" role="tab" aria-controls="menu3"
                                                    aria-selected="false">Carga y descarga</a>
                                            </li>
                                            <li class="nav-item" role="presentation"
                                                data-list-item-id="e3d025383fef30adc8ea4f5f609853028">
                                                <a class="nav-link" href="#menu4" id="tab-menu4"
                                                    data-bs-toggle="tab" role="tab" aria-controls="menu4"
                                                    aria-selected="false">Uso flexible</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <!-- menu1 -->
                                            <div class="tab-pane fade show active" id="menu1" role="tabpanel"
                                                aria-labelledby="tab-menu1">
                                                <div class="box-tab">
                                                    <div>
                                                        <div class="container-bv">
                                                            <div class="slides slide1" style="display:none;">
                                                                <div class="numbertext">
                                                                    1 / 3
                                                                </div>
                                                                <p>
                                                                    <img src="[custom:old_url]/sites/default/files/Paginas/17-05-2022/img1_a.webp?w=1600&amp;h=1200"
                                                                        width="100%">
                                                                </p>
                                                            </div>
                                                            <div class="slides slide1" style="display:none;">
                                                                <div class="numbertext">
                                                                    2 / 3
                                                                </div>
                                                                <p>
                                                                    <img src="[custom:old_url]/sites/default/files/Paginas/17-05-2022/img1_b.webp?w=1600&amp;h=1200"
                                                                        width="100%">
                                                                </p>
                                                            </div>
                                                            <div class="slides slide1" style="display:block;">
                                                                <div class="numbertext">
                                                                    3 / 3
                                                                </div>
                                                                <p>
                                                                    <img src="[custom:old_url]/sites/default/files/Paginas/17-05-2022/img1_c_0.webp"
                                                                        width="100%">
                                                                </p>
                                                            </div>
                                                            <p>
                                                                <a class="prev" onclick="plusSlides(-1)">❮</a> <a
                                                                    class="next" onclick="plusSlides(1)">❯</a>
                                                            </p>
                                                            <div class="caption-container-bv">
                                                                <p id="caption1">
                                                                    <strong>Zonas peatonales:</strong> las identificas
                                                                    por los colores naranja, amarillo y verde, y se
                                                                    caracterizan por ser zonas seguras para caminar,
                                                                    llevar de manera cómoda los coches o transitar en
                                                                    silla de ruedas de manera más confortable. Además,
                                                                    encuentras nuevas plantas y bancas que propician el
                                                                    encuentro y el disfrute de tu barrio con tus
                                                                    vecinos.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="column-box">
                                                                <img class="demo demo1 cursor"
                                                                    src="[custom:old_url]/sites/default/files/Paginas/17-05-2022/img1_a.webp?w=1600&amp;h=1200"
                                                                    alt="&lt;strong&gt;Zonas peatonales:&lt;/strong&gt; las identificas por los colores naranja, amarillo y verde, y se caracterizan por ser zonas seguras para caminar, llevar de manera cómoda los coches o transitar en silla de ruedas de manera más confortable. Además, encuentras nuevas plantas y bancas que propician el encuentro y el disfrute de tu barrio con tus vecinos."
                                                                    width="100%" onclick="currentSlide(1)">
                                                            </div>
                                                            <div class="column-box">
                                                                <img class="demo demo1 cursor"
                                                                    src="[custom:old_url]/sites/default/files/Paginas/17-05-2022/img1_b.webp?w=1600&amp;h=1200"
                                                                    alt="&lt;strong&gt;Zonas peatonales:&lt;/strong&gt; las identificas por los colores naranja, amarillo y verde, y se caracterizan por ser zonas seguras para caminar, llevar de manera cómoda los coches o transitar en silla de ruedas de manera más confortable. Además, encuentras nuevas plantas y bancas que propician el encuentro y el disfrute de tu barrio con tus vecinos."
                                                                    width="100%" onclick="currentSlide(2)">
                                                            </div>
                                                            <div class="column-box">
                                                                <img class="demo demo1 cursor active"
                                                                    src="[custom:old_url]/sites/default/files/Paginas/17-05-2022/img1_c_0.webp"
                                                                    alt="&lt;strong&gt;Zonas peatonales:&lt;/strong&gt; las identificas por los colores naranja, amarillo y verde, y se caracterizan por ser zonas seguras para caminar, llevar de manera cómoda los coches o transitar en silla de ruedas de manera más confortable. Además, encuentras nuevas plantas y bancas que propician el encuentro y el disfrute de tu barrio con tus vecinos."
                                                                    width="100%" onclick="currentSlide(3)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- menu2 -->
                                            <div class="tab-pane fade" id="menu2" role="tabpanel"
                                                aria-labelledby="tab-menu2">
                                                <div class="box-tab">
                                                    <div>
                                                        <div class="container-bv">
                                                            <div class="slides slide2" style="display:block;">
                                                                <div class="numbertext">
                                                                    1 / 3
                                                                </div>
                                                                <p>
                                                                    <img src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img2_a.webp?w=1600&amp;h=1200"
                                                                        width="100%">
                                                                </p>
                                                            </div>
                                                            <div class="slides slide2" style="display:none;">
                                                                <div class="numbertext">
                                                                    2 / 3
                                                                </div>
                                                                <p>
                                                                    <img src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img2_b_0.webp?w=1600&amp;h=1200"
                                                                        width="100%">
                                                                </p>
                                                            </div>
                                                            <div class="slides slide2" style="display:none;">
                                                                <div class="numbertext">
                                                                    3 / 3
                                                                </div>
                                                                <p>
                                                                    <img src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img2_a.webp?w=1600&amp;h=1200"
                                                                        width="100%">
                                                                </p>
                                                            </div>
                                                            <p>
                                                                <a class="prev" onclick="plusSlides2(-1)">❮</a> <a
                                                                    class="next" onclick="plusSlides2(1)">❯</a>
                                                            </p>
                                                            <div class="caption-container-bv">
                                                                <p id="caption2">
                                                                    <strong>Zona de estacionamiento temporal:</strong>
                                                                    las identificas porque están demarcadas con una
                                                                    franja blanca y el símbolo (P de parqueadero). En
                                                                    estas zonas está autorizado el estacionamiento por
                                                                    algunos minutos para quienes deben hacer diligencias
                                                                    cortas. Próximamente, serán adecuadas nuevas zonas
                                                                    de estacionamiento en vía a través del proyecto
                                                                    liderado por la Terminal de Transporte.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="column-box">
                                                                <img class="demo demo2 cursor active"
                                                                    src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img2_a.webp?w=1600&amp;h=1200"
                                                                    alt="&lt;strong&gt;Zona de estacionamiento temporal:&lt;/strong&gt; las identificas porque están demarcadas con una franja blanca y el símbolo (P de parqueadero). En estas zonas está autorizado el estacionamiento por algunos minutos para quienes deben hacer diligencias cortas. Próximamente, serán adecuadas nuevas zonas de estacionamiento en vía a través del proyecto liderado por la Terminal de Transporte."
                                                                    width="100%" onclick="currentSlide2(1)">
                                                            </div>
                                                            <div class="column-box">
                                                                <img class="demo demo2 cursor"
                                                                    src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img2_b_0.webp?w=1600&amp;h=1200"
                                                                    alt="&lt;strong&gt;Zona de estacionamiento temporal:&lt;/strong&gt; las identificas porque están demarcadas con una franja blanca y el símbolo (P de parqueadero). En estas zonas está autorizado el estacionamiento por algunos minutos para quienes deben hacer diligencias cortas. Próximamente, serán adecuadas nuevas zonas de estacionamiento en vía a través del proyecto liderado por la Terminal de Transporte."
                                                                    width="100%" onclick="currentSlide2(2)">
                                                            </div>
                                                            <div class="column-box">
                                                                <img class="demo demo2 cursor"
                                                                    src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img2_a.webp?w=1600&amp;h=1200"
                                                                    alt="&lt;strong&gt;Zona de estacionamiento temporal:&lt;/strong&gt; las identificas porque están demarcadas con una franja blanca y el símbolo (P de parqueadero). En estas zonas está autorizado el estacionamiento por algunos minutos para quienes deben hacer diligencias cortas. Próximamente, serán adecuadas nuevas zonas de estacionamiento en vía a través del proyecto liderado por la Terminal de Transporte."
                                                                    width="100%" onclick="currentSlide2(3)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- menu3 -->
                                            <div class="tab-pane fade" id="menu3" role="tabpanel"
                                                aria-labelledby="tab-menu3">
                                                <div class="box-tab">
                                                    <div>
                                                        <div class="container-bv">
                                                            <div class="slides slide3" style="display:block;">
                                                                <div class="numbertext">
                                                                    1 / 3
                                                                </div>
                                                                <p>
                                                                    <img src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img3_a_0.webp?w=1600&amp;h=1200"
                                                                        width="100%">
                                                                </p>
                                                            </div>
                                                            <div class="slides slide3" style="display:none;">
                                                                <div class="numbertext">
                                                                    2 / 3
                                                                </div>
                                                                <p>
                                                                    <img src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img3_b_0.webp?w=1600&amp;h=1200"
                                                                        width="100%">
                                                                </p>
                                                            </div>
                                                            <div class="slides slide3" style="display:none;">
                                                                <div class="numbertext">
                                                                    3 / 3
                                                                </div>
                                                                <p>
                                                                    <img src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img3_c_0.webp?w=1600&amp;h=1200"
                                                                        width="100%">
                                                                </p>
                                                            </div>
                                                            <p>
                                                                <a class="prev" onclick="plusSlides3(-1)">❮</a> <a
                                                                    class="next" onclick="plusSlides3(1)">❯</a>
                                                            </p>
                                                            <div class="caption-container-bv">
                                                                <p id="caption3">
                                                                    <strong>Zona de carga y descarga:</strong> las
                                                                    identificas por estar demarcadas con un recuadro
                                                                    naranja. Están destinadas a facilitar las
                                                                    actividades de aprovisionamiento y traslado de
                                                                    mercancías de bodegas y establecimientos que existen
                                                                    en San Felipe. El uso de estas zonas es temporal,
                                                                    con el fin de que todos los comercios puedan
                                                                    beneficiarse de ellas.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="column-box">
                                                                <img class="demo demo3 cursor active"
                                                                    src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img3_a_0.webp?w=1600&amp;h=1200"
                                                                    alt="&lt;strong&gt;Zona de carga y descarga:&lt;/strong&gt; las identificas por estar demarcadas con un recuadro naranja. Están destinadas a facilitar las actividades de aprovisionamiento y traslado de mercancías de bodegas y establecimientos que existen en San Felipe. El uso de estas zonas es temporal, con el fin de que todos los comercios puedan beneficiarse de ellas."
                                                                    width="100%" onclick="currentSlide3(1)">
                                                            </div>
                                                            <div class="column-box">
                                                                <img class="demo demo3 cursor"
                                                                    src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img3_b_0.webp?w=1600&amp;h=1200"
                                                                    alt="&lt;strong&gt;Zona de carga y descarga:&lt;/strong&gt; las identificas por estar demarcadas con un recuadro naranja. Están destinadas a facilitar las actividades de aprovisionamiento y traslado de mercancías de bodegas y establecimientos que existen en San Felipe. El uso de estas zonas es temporal, con el fin de que todos los comercios puedan beneficiarse de ellas."
                                                                    width="100%" onclick="currentSlide3(2)">
                                                            </div>
                                                            <div class="column-box">
                                                                <img class="demo demo3 cursor"
                                                                    src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img3_c_0.webp?w=1600&amp;h=1200"
                                                                    alt="&lt;strong&gt;Zona de carga y descarga:&lt;/strong&gt; las identificas por estar demarcadas con un recuadro naranja. Están destinadas a facilitar las actividades de aprovisionamiento y traslado de mercancías de bodegas y establecimientos que existen en San Felipe. El uso de estas zonas es temporal, con el fin de que todos los comercios puedan beneficiarse de ellas."
                                                                    width="100%" onclick="currentSlide3(3)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- menu4 -->
                                            <div class="tab-pane fade" id="menu4" role="tabpanel"
                                                aria-labelledby="tab-menu4">
                                                <div class="box-tab">
                                                    <div>
                                                        <div class="container-bv">
                                                            <div class="slides slide4" style="display:block;">
                                                                <div class="numbertext">
                                                                    1 / 3
                                                                </div>
                                                                <p>
                                                                    <img src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img4_a.webp"
                                                                        width="100%">
                                                                </p>
                                                            </div>
                                                            <div class="slides slide4" style="display:none;">
                                                                <div class="numbertext">
                                                                    2 / 3
                                                                </div>
                                                                <p>
                                                                    <img src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img4_b.webp"
                                                                        width="100%">
                                                                </p>
                                                            </div>
                                                            <div class="slides slide4" style="display:none;">
                                                                <div class="numbertext">
                                                                    3 / 3
                                                                </div>
                                                                <p>
                                                                    <img src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img4_c.webp"
                                                                        width="100%">
                                                                </p>
                                                            </div>
                                                            <p>
                                                                <a class="prev" onclick="plusSlides4(-1)">❮</a> <a
                                                                    class="next" onclick="plusSlides4(1)">❯</a>
                                                            </p>
                                                            <div class="caption-container-bv">
                                                                <p id="caption4">
                                                                    <strong>Zona de uso flexible: </strong>están
                                                                    pintadas con círculos azules y además de indicar los
                                                                    accesos a los predios, permiten la circulación de
                                                                    peatones, haciendo las veces de extensión del andén.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="column-box">
                                                                <img class="demo demo4 cursor active"
                                                                    src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img4_a.webp"
                                                                    alt="&lt;strong&gt;Zona de uso flexible: &lt;/strong&gt; están pintadas con círculos azules y además de indicar los accesos a los predios, permiten la circulación de peatones, haciendo las veces de extensión del andén."
                                                                    width="100%" onclick="currentSlide4(1)">
                                                            </div>
                                                            <div class="column-box">
                                                                <img class="demo demo4 cursor"
                                                                    src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img4_b.webp"
                                                                    alt="&lt;strong&gt;Zona de uso flexible: &lt;/strong&gt; están pintadas con círculos azules y además de indicar los accesos a los predios, permiten la circulación de peatones, haciendo las veces de extensión del andén."
                                                                    width="100%" onclick="currentSlide4(2)">
                                                            </div>
                                                            <div class="column-box">
                                                                <img class="demo demo4 cursor"
                                                                    src="[custom:old_url]/sites/default/files/Paginas/18-05-2022/img4_c.webp"
                                                                    alt="&lt;strong&gt;Zona de uso flexible: &lt;/strong&gt; están pintadas con círculos azules y además de indicar los accesos a los predios, permiten la circulación de peatones, haciendo las veces de extensión del andén."
                                                                    width="100%" onclick="currentSlide4(3)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Más videos -->
                                    <div class="box-videos">
                                        <div class="row box-wrapper-mov">
                                            <div class="col-12 col-sm-6">
                                                <div class="box-video">
                                                    <div class="ratio ratio-16x9">
                                                        <iframe src="https://www.youtube.com/embed/IMAEW49Y6-8"
                                                            title="YouTube video player"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen=""></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="box-det_video">
                                                    <div>
                                                        <h3>
                                                            Conoce más sobre Barrios Vitales
                                                        </h3>
                                                    </div>
                                                    <div class="paragraph-video">
                                                        <p>
                                                            Este proyecto busca mejorar la calidad de vida de los
                                                            ciudadanos ofreciendo nuevos espacios para facilitar el
                                                            encuentro y la permanencia entre vecinos y visitantes de los
                                                            barrios.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row box-wrapper-mov">
                                            <div class="col-12 col-sm-6">
                                                <div class="box-video">
                                                    <div class="ratio ratio-16x9">
                                                        <iframe src="https://www.youtube.com/embed/fvehlDEnkYU"
                                                            title="YouTube video player"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen=""></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="box-det_video">
                                                    <div>
                                                        <h3>
                                                            La comunidad opina sobre Barrios Vitales
                                                        </h3>
                                                    </div>
                                                    <div class="paragraph-video">
                                                        <p>
                                                            Las zonas intervenidas con urbanismo táctico, facilitan la
                                                            permanencia y el encuentro seguro entre vecinos y visitantes
                                                            de los sectores.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row box-wrapper-mov">
                                            <div class="col-12 col-sm-6">
                                                <div class="box-video">
                                                    <div class="ratio ratio-16x9">
                                                        <iframe src="https://www.youtube.com/embed/nfE8RJcIOI8"
                                                            title="YouTube video player"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen=""></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="box-det_video">
                                                    <div>
                                                        <h3>
                                                            Las Cruces será un Barrio Vital
                                                        </h3>
                                                    </div>
                                                    <div class="paragraph-video">
                                                        <p>
                                                            Así se vivió la primera intervención piloto realizada en el
                                                            barrio Las Cruces
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Colaboradores -->
                                    <div class="b-colaboradores">
                                        <div class="box-text">
                                            <div class="box-title">
                                                <div class="title3 title-bv bva">
                                                    <h3>
                                                        <strong>Colaboradores</strong>
                                                    </h3>
                                                    <div class="barras">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-5">
                                                                <div class="barra left bva">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="barra right bvv">
                                                                    &nbsp;
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="b-paragraph">
                                                <p>
                                                    Barrios Vitales es posible gracias a la articulación de la
                                                    Secretaría Distrital de Movilidad y sus entidades adscritas (IDU y
                                                    UMV), con los sectores:
                                                </p>
                                                <ul>
                                                    <li data-list-item-id="e9ff1d5f49a5865ba5718889547ab508c">
                                                        Secretaría Distrital de Gobierno y Alcaldías Locales.
                                                    </li>
                                                    <li data-list-item-id="e8d6579776a74e4ac3a8b4d700d5686ba">
                                                        Secretaría Distrital de Seguridad, Convivencia y Justicia.
                                                    </li>
                                                    <li data-list-item-id="ef66015839f4b8d243ccc87e23f6e168d">
                                                        Instituto Distrital para la Participación y Acción Comunal.
                                                    </li>
                                                    <li data-list-item-id="e5f47e6b29e9e783bf9d5eb613914628c">
                                                        Secretaría Distrital de Cultura: Instituto Distrital de
                                                        Patrimonio Cultural, Instituto Distrital de las Artes y
                                                        Fundación Gilberto Alzate Avendaño.
                                                    </li>
                                                    <li data-list-item-id="e0e46af5bc26ba61bd7f7ab43bc2059cf">
                                                        Secretaría Distrital de Desarrollo Económico.
                                                    </li>
                                                    <li data-list-item-id="ebed42ceb08e6d49ade00074feb62ac8a">
                                                        Instituto Distrital de Turismo.
                                                    </li>
                                                    <li data-list-item-id="ed5eac624c2e3401fce8db97b519a270a">
                                                        Secretaría Distrital de Hábitat.
                                                        <ul>
                                                            <li data-list-item-id="ee130980c68a8f8ca953b5f33e0db0d44">
                                                                Unidad Administrativa Especial de Servicios Públicos.
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li data-list-item-id="ef652ee636b75991d5f8b57e17ffdf8e0">
                                                        Secretaría Distrital de la Mujer.
                                                    </li>
                                                    <li data-list-item-id="e7baacaf700d2443a26e403c89b0b5cb5">
                                                        Secretaría Distrital de Ambiente.
                                                        <ul>
                                                            <li data-list-item-id="e1a10755af55f41f7211f2cc56aa577af">
                                                                Jardín Botánico e Instituto Distrital de Protección y
                                                                Bienestar Animal.
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <p>
                                                    Además, cuenta con el apoyo y consultoría de varias organizaciones
                                                    internacionales que promueven el desarrollo urbano y social:
                                                </p>
                                                <ul>
                                                    <li data-list-item-id="e6ac3c04ce390e797ea3f7c1568eff1a8">
                                                        Banco Mundial
                                                    </li>
                                                    <li data-list-item-id="e2149370f211fc5edc7b9f0319d461b5a">
                                                        Bloomberg Philanthropies
                                                    </li>
                                                    <li data-list-item-id="e8e71a4a529daf8283de2f985e656f0fa">
                                                        Nacto
                                                    </li>
                                                    <li data-list-item-id="eb2cfd9fbda983ed53d9b31cd8b80d4b6">
                                                        Agencia de Ecología Urbana de Barcelona
                                                    </li>
                                                    <li data-list-item-id="ee39cc7ca576b60fee4cdd595dac5ca49">
                                                        La Embajada Británica (a través del UK-Pact)
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="box-logos">
                                                <div class="row">
                                                    <div class="col-12 col-sm-3">
                                                        <div class="imagen">
                                                            <img class="img-fluid"
                                                                src="[custom:old_url]/sites/default/files/Paginas/19-05-2022/logo_bv_c.png"
                                                                alt="Logo banco mundial" title="Logo banco mundial">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-3">
                                                        <div class="imagen">
                                                            <img class="img-fluid"
                                                                src="[custom:old_url]/sites/default/files/Paginas/19-05-2022/logo_bv_a.png"
                                                                alt="logo Bloomberg Philanthropies"
                                                                title="logo Bloomberg Philanthropies">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-3">
                                                        <div class="imagen">
                                                            <img class="img-fluid"
                                                                src="[custom:old_url]/sites/default/files/Paginas/19-05-2022/logo_bv_b.png"
                                                                alt="Logo NACTO" title="Logo NACTO">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-3">
                                                        <div class="imagen">
                                                            <img class="img-fluid"
                                                                src="[custom:old_url]/sites/default/files/Paginas/19-05-2022/logo_bv_d.png"
                                                                alt="Logo World Resources Institute | Ross Center"
                                                                title="Logo World Resources Institute | Ross Center">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Recursos + Preguntas (collapse con <a>) -->
                                    <div class="box-botones-barrios">
                                        <div class="box-text">
                                            <div class="title3 title-bv bva">
                                                <h3>
                                                    <strong>Recursos</strong>
                                                </h3>
                                                <div class="barras">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-5">
                                                            <div class="barra left bva">
                                                                &nbsp;
                                                            </div>
                                                            <div class="barra right bvv">
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-3">
                                                <div class="btn-tab">
                                                    <a href="https://drive.google.com/file/d/1tJ9Xn-EXfcZd3azit0Y7iKO5f2u7MeLD/view?usp=sharing"
                                                        target="_blank" rel="noopener noreferrer">Documento técnico
                                                        San Felipe</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="btn-tab">
                                                    <a href="https://drive.google.com/file/d/17hFmrpD7McOmf9txhx-r_HrhCpVnwCun/view?usp=sharing"
                                                        target="_blank" rel="noopener noreferrer">Informe técnico San
                                                        Felipe</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="btn-tab">
                                                    <a href="https://drive.google.com/file/d/1tJ9Xn-EXfcZd3azit0Y7iKO5f2u7MeLD/view"
                                                        target="_blank" rel="noopener noreferrer">Documento Técnico de
                                                        Soporte</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="btn-tab">
                                                    <a href="[custom:old_url]/sites/default/files/Paginas/05-06-2023/dts_16_11_22_bv_el_porvenir_bosa_signed.pdf"
                                                        target="_blank" rel="noopener noreferrer">Documento técnico El
                                                        Porvenir</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="btn-tab">
                                                    <a href="[custom:old_url]/sites/default/files/Paginas/05-06-2023/dts_dpm-et-004-2022_barriovital_lascruces_sanbernardo_vf_firmado.pdf"
                                                        target="_blank" rel="noopener noreferrer">Documento técnico
                                                        Las Cruces - San Bernardo</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <div class="btn-tab">
                                                    <a href="[custom:old_url]/sites/default/files/Paginas/05-06-2023/11_04_2023_dts_barrio_vital_san_carlos_firmado.pdf"
                                                        target="_blank" rel="noopener noreferrer">Documento técnico
                                                        San Carlos</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <!-- ENLACE que abre/cierra el bloque de preguntas (Drupal-friendly) -->
                                                <div class="btn-tab">
                                                    <a href="#preguntas" role="button" data-bs-toggle="collapse"
                                                        aria-expanded="false" aria-controls="preguntas"
                                                        id="btn-preguntas">Preguntas frecuentes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Collapse de Preguntas Frecuentes -->
                                    <div class="box-preguntas collapse" id="preguntas">
                                        <div class="box-text">
                                            <div class="box-title">
                                                <div class="title3 title-bv bva">
                                                    <h3>
                                                        <strong>Preguntas frecuentes</strong>
                                                    </h3>
                                                    <div class="barras">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-5">
                                                                <div class="barra left bva">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="barra right bvv">
                                                                    &nbsp;
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Conserva estructura original tipo "panel" -->
                                            <div class="box-paragraph">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            ¿Por qué San Felipe es el primer Barrio Vital?
                                                        </h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p>
                                                            El barrio San Felipe tiene una vocación cultural y
                                                            artística, lo cual propicia el interés de la ciudadanía por
                                                            recorrerlo caminando o en bicicleta, por lo que surge la
                                                            necesidad de brindar espacios seguros para hacerlo.
                                                        </p>
                                                        <p>
                                                            Muy cerca de San Felipe se implementarán proyectos de
                                                            transporte y urbanismo como la primera y segunda línea del
                                                            Metro y la Ciclo Alameda Medio Milenio (la primera autopista
                                                            para bicicletas de Bogotá que conectará el sector del Tunal
                                                            con el norte de Bogotá), lo que atraerá más visitantes al
                                                            barrio y potenciará el sector cultural y comercial.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            ¿Qué beneficios tiene el proyecto para los habitantes de San
                                                            Felipe?
                                                        </h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p>
                                                            En San Felipe se generaron:
                                                        </p>
                                                        <ul>
                                                            <li data-list-item-id="ee298d9601534dddace7571536715b837">
                                                                1745 m2 de espacio exclusivo para peatones.
                                                            </li>
                                                            <li data-list-item-id="e6fb43bae1ea3315daa8c7351ab0258ae">
                                                                0.91 Km de calles para la micromovilidad, calles seguras
                                                                para caminar y andar en bicicleta.
                                                            </li>
                                                            <li data-list-item-id="e32275869bcb95cdf32f2421b8c345d97">
                                                                30 intersecciones seguras para peatones.
                                                            </li>
                                                            <li data-list-item-id="eabaa82547b632b7fce8955095d52db47">
                                                                5 zonas de carga y descarga.
                                                            </li>
                                                            <li data-list-item-id="e7b182cff67d96f7e09e7179de0aecd0f">
                                                                18 cupos de estacionamiento en vía.
                                                            </li>
                                                            <li data-list-item-id="e5c3ea09b8d72506d53526f8873a61a97">
                                                                Se realizaron 23 actividades de participación con la
                                                                comunidad, las cuales contaron con 970 participantes, el
                                                                49% mujeres.
                                                            </li>
                                                            <li data-list-item-id="e85dd8b8fa944dee729fb660f582bc41a">
                                                                Se entregaron 225 materas apadrinadas por la comunidad.
                                                            </li>
                                                            <li data-list-item-id="e2e7ac630c1d2924d0a3b0773f6da4ea9">
                                                                El proyecto Barrios Vitales en San Felipe no plantea
                                                                ciclorrutas nuevas. Sin embargo, en la ciclorruta actual
                                                                de la Carrera 20C y calle 76 se realiza una
                                                                actualización de señalización y demarcación en los
                                                                tramos requeridos.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            ¿Estas intervenciones afectan el comercio de mi barrio?
                                                        </h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p>
                                                            Como ahora tendremos un tráfico más calmado y con mayor
                                                            espacio para los peatones, los ciudadanos podrán tomarse el
                                                            tiempo de conocer la oferta comercial, gastronómica y
                                                            artística del barrio, lo que dinamizará estos sectores.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            ¿El proyecto Barrios Vitales prohíbe el estacionamiento en
                                                            las vías de mi barrio?
                                                        </h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p>
                                                            No, los vehículos pueden estacionar temporalmente en la vía
                                                            en las zonas asignadas para tal fin. Este proyecto también
                                                            será un piloto de la estrategia de Estacionamiento en Vía
                                                            que busca generar más cupos en el futuro.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            ¿Por qué son necesarios los cambios que hacen en los
                                                            barrios?
                                                        </h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p>
                                                            San Felipe era utilizado como atajo por un alto número de
                                                            vehículos, que no viajan desde o hacia el barrio y que
                                                            transitaban a altas velocidades, poniendo en riesgo la vida
                                                            de los residentes y visitantes.
                                                        </p>
                                                        <p>
                                                            Con las intervenciones realizadas por Barrios Vitales los
                                                            peatones tienen más zonas seguras para caminar, se garantiza
                                                            el acceso vehicular al barrio y a todos los predios y se
                                                            evita la circulación vehicular en velocidades peligrosas
                                                            para los actores viales más vulnerables.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">
                                                            ¿Cuál es el proceso para que un barrio se convierta en un
                                                            Barrio Vital?
                                                        </h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p>
                                                            El proceso inicia con un análisis técnico y social que
                                                            determina el potencial de una zona para albergar estrategias
                                                            de mejoramiento de espacio público, redireccionamiento de
                                                            flujos vehiculares y trabajo de diseño y apropiación de la
                                                            comunidad.
                                                        </p>
                                                        <p>
                                                            Luego se diseña la estrategia de urbanismo táctico (que hoy
                                                            se implementa en San Felipe) y se inicia una etapa de
                                                            seguimiento y sostenibilidad donde se le hace seguimiento al
                                                            proyecto.
                                                        </p>
                                                        <p>
                                                            Finalmente, se busca que esto alimente el proceso de diseño
                                                            del Barrio Vital en una etapa definitiva de Obra Civil
                                                            (Infraestructura) donde las medidas de urbanismo táctico se
                                                            consolidan a través de un proyecto donde, por ejemplo, se
                                                            re-construyen ciertas vías con mejores condiciones urbanas y
                                                            se generan nuevas zonas verdes.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Contacto -->
                                    <div class="box-footer">
                                        <div class="contacto">
                                            <div class="box-text">
                                                <div class="title3 title-bv bva">
                                                    <h3>
                                                        <strong>Contacto</strong>
                                                    </h3>
                                                    <div class="barras">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-5">
                                                                <div class="barra left bva">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="barra right bvv">
                                                                    &nbsp;
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="paragraph">
                                                <p>
                                                    E-mail: <a
                                                        href="mailto:barriosvitales@movilidadbogota.gov.co">barriosvitales@movilidadbogota.gov.co</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <br>
                                        <br>
                                        <!-- End Set Wrapper -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts de galería (vanilla JS, sin jQuery) -->
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides((slideIndex += n));
    }

    function currentSlide(n) {
        showSlides((slideIndex = n));
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slide1");
        let dots = document.getElementsByClassName("demo1");
        let captionText = document.getElementById("caption1");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
<script>
    let slideIndex2 = 1;
    showSlides2(slideIndex2);

    function plusSlides2(n) {
        showSlides2((slideIndex2 += n));
    }

    function currentSlide2(n) {
        showSlides2((slideIndex2 = n));
    }

    function showSlides2(n) {
        let i;
        let slides = document.getElementsByClassName("slide2");
        let dots = document.getElementsByClassName("demo2");
        let captionText = document.getElementById("caption2");
        if (n > slides.length) {
            slideIndex2 = 1;
        }
        if (n < 1) {
            slideIndex2 = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex2 - 1].style.display = "block";
        dots[slideIndex2 - 1].className += " active";
        captionText.innerHTML = dots[slideIndex2 - 1].alt;
    }
</script>
<script>
    let slideIndex3 = 1;
    showSlides3(slideIndex3);

    function plusSlides3(n) {
        showSlides3((slideIndex3 += n));
    }

    function currentSlide3(n) {
        showSlides3((slideIndex3 = n));
    }

    function showSlides3(n) {
        let i;
        let slides = document.getElementsByClassName("slide3");
        let dots = document.getElementsByClassName("demo3");
        let captionText = document.getElementById("caption3");
        if (n > slides.length) {
            slideIndex3 = 1;
        }
        if (n < 1) {
            slideIndex3 = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex3 - 1].style.display = "block";
        dots[slideIndex3 - 1].className += " active";
        captionText.innerHTML = dots[slideIndex3 - 1].alt;
    }
</script>
<script>
    let slideIndex4 = 1;
    showSlides4(slideIndex4);

    function plusSlides4(n) {
        showSlides4((slideIndex4 += n));
    }

    function currentSlide4(n) {
        showSlides4((slideIndex4 = n));
    }

    function showSlides4(n) {
        let i;
        let slides = document.getElementsByClassName("slide4");
        let dots = document.getElementsByClassName("demo4");
        let captionText = document.getElementById("caption4");
        if (n > slides.length) {
            slideIndex4 = 1;
        }
        if (n < 1) {
            slideIndex4 = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex4 - 1].style.display = "block";
        dots[slideIndex4 - 1].className += " active";
        captionText.innerHTML = dots[slideIndex4 - 1].alt;
    }
</script><!-- Bootstrap 5.3 Bundle (sin jQuery) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
