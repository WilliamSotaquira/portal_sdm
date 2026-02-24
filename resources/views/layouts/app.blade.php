<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Inicio') | SDM</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- css BDC -->
    <link href="https://cdn.www.gov.co/layout-govco-v5/all.css" rel="stylesheet">

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        rel="stylesheet" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    {{-- Estilos “Barrio-lite” --}}
    <style>
        /* Base de página al estilo Drupal/Barrio */
        body {
            background-color: #f5f5f7;
            font-size: 0.95rem;
        }

        .page {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .layout-container {
            max-width: 1092px;
        }

        .region {
            margin-bottom: 1rem;
        }

        /* Header tipo Barrio */
        .region-header {
            background: #003366;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.18);
        }

        .region-header,
        .region-header .layout-container,
        .region-primary-menu,
        .region-primary-menu .navbar-collapse {
            overflow: visible !important;
        }

        .region-header a {
            color: #fff;
        }

        .region-header .navbar-brand {
            font-weight: 700;
            letter-spacing: .03em;
        }

        /* Menú primario tipo Barrio */
        .region-primary-menu {
            background-color: transparent;
            margin-bottom: 0;
            border-radius: 0;
            padding: 0;
        }

        .region-primary-menu .nav-link {
            font-weight: 500;
            border-radius: 0.35rem;
        }

        .region-primary-menu .nav-item.dropdown>.nav-link {
            position: relative;
        }

        .region-primary-menu .nav-item.dropdown>.nav-link::before {
            content: "";
            position: absolute;
            left: 0.65rem;
            right: 0.65rem;
            bottom: 0.25rem;
            height: 2px;
            background: currentColor;
            transform: scaleX(0);
            transform-origin: left center;
            transition: transform 0.2s ease-in-out;
            opacity: 0.9;
        }

        .region-primary-menu .nav-item.dropdown>.nav-link:hover::before,
        .region-primary-menu .nav-item.dropdown>.nav-link:focus::before,
        .region-primary-menu .nav-item.dropdown>.nav-link.show::before {
            transform: scaleX(1);
        }

        .region-primary-menu .nav-link.active {
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 0.35rem;
        }

        .region-primary-menu .navbar-brand {
            color: #fff;
            font-weight: 700;
            letter-spacing: 0.02em;
            margin-right: 1rem;
        }

        .region-primary-menu .dropdown-menu {
            min-width: 18rem;
            z-index: 2050;
        }

        .region-primary-menu .dropdown-menu .dropdown-item {
            color: #212529 !important;
        }

        .region-primary-menu .dropdown-menu .dropdown-item:hover,
        .region-primary-menu .dropdown-menu .dropdown-item:focus {
            color: #212529 !important;
        }

        .region-primary-menu .dropdown-header {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .region-primary-menu li::after {
            content: none !important;
            display: none !important;
        }

        .region-primary-menu .menu-govco .navbar-nav .nav-item .nav-link[aria-expanded="false"]:not(.btn-menu-govco)::after,
        .region-primary-menu .dropdown-toggle:not(.btn-menu-govco)::after {
            content: none !important;
            display: none !important;
            border: 0 !important;
        }

        /* Breadcrumb al estilo Drupal */
        .region-breadcrumb {
            margin-bottom: 0.75rem;
        }

        .breadcrumb {
            background: transparent;
            padding: 0;
            margin-bottom: 0;
            font-size: 0.85rem;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            color: #6c757d;
        }

        /* Mensajes tipo Drupal/Barrio */
        .messages {
            padding: 12px 16px 12px 40px;
            margin: 10px 0;
            border: 1px solid;
            border-radius: 2px;
            font-size: 0.9rem;
            position: relative;
        }

        .messages::before {
            content: "";
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            background-repeat: no-repeat;
            background-position: center;
        }

        .messages--status {
            color: #325e1c;
            background-color: #f3faef;
            border-color: #c9e1bd;
        }

        .messages--status::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23325e1c' viewBox='0 0 16 16'%3E%3Cpath d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/%3E%3C/svg%3E");
        }

        .messages--warning {
            color: #734c00;
            background-color: #fdf8ed;
            border-color: #f4daa6;
        }

        .messages--warning::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23734c00' viewBox='0 0 16 16'%3E%3Cpath d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/%3E%3C/svg%3E");
        }

        .messages--error {
            color: #a51b00;
            background-color: #fcf4f2;
            border-color: #f9c9bf;
        }

        .messages--error::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23a51b00' viewBox='0 0 16 16'%3E%3Cpath d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z'/%3E%3C/svg%3E");
        }

        /* Tabs estilo Barrio */
        .tabs {
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 1rem;
        }

        .tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
            margin-bottom: -1px;
        }

        .tabs .nav-link.active {
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
        }

        /* Bloques genéricos */
        .block {
            margin-bottom: 1.5rem;
        }

        .block-title {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .dialog-off-canvas-main-canvas {
            padding-top: 68px;
        }

        /* Skip link accesible */
        .skip-link {
            position: absolute;
            top: -40px;
            left: 0;
            background: #000;
            color: #fff;
            padding: 8px 16px;
            z-index: 100;
        }

        .skip-link:focus {
            top: 0;
        }

        /* Tablas responsivas (como hace Drupal) */
        .main-content table {
            margin-bottom: 1rem;
        }
    </style>

    {{-- Styles adicionales por vista --}}
    @stack('styles')
</head>

@php
    // Clases básicas de body al estilo Drupal/Barrio
    $bodyClasses = ['path-' . (str_replace('/', '-', request()->path()) ?: 'frontpage'), 'page'];
@endphp

<body class="{{ implode(' ', $bodyClasses) }}">
    <!-- Envoltura general tipo Drupal -->
    <div class="dialog-off-canvas-main-canvas">
        <!-- Skip link (accesibilidad) -->
        <a href="#main-content" class="visually-hidden-focusable skip-link">
            Saltar al contenido principal
        </a>

        <!-- Header Region -->
        <header class="region region-header">
            <div class="layout-container container py-2">
                <nav class="region region-primary-menu navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand" href="{{ route('home') }}">SDM</a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrimary">
                            <span class="navbar-toggler-icon"></span>
                            <span class="ms-2">Menú</span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarPrimary">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('inicio/menu-principal') ? 'active' : '' }}"
                                        href="{{ route('inicio.menu-principal') }}">
                                        Menu principal
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->is('/') || request()->is('dashboard') || request()->is('culturas') ? 'active' : '' }}"
                                        href="#" role="button" data-bs-toggle="dropdown">
                                        General
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><h6 class="dropdown-header">Navegacion general</h6></li>
                                        <li><a class="dropdown-item {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a></li>
                                        <li><a class="dropdown-item {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li><a class="dropdown-item {{ request()->is('culturas') ? 'active' : '' }}" href="{{ route('culturas') }}">Culturas</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->is('inicio/*') ? 'active' : '' }}"
                                        href="#" role="button" data-bs-toggle="dropdown">
                                        Modulo inicio
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><h6 class="dropdown-header">Vistas de inicio</h6></li>
                                        <li><a class="dropdown-item {{ request()->is('inicio/home') ? 'active' : '' }}" href="{{ route('inicio.home') }}">Home</a></li>
                                        <li><a class="dropdown-item {{ request()->is('inicio/menu-principal') ? 'active' : '' }}" href="{{ route('inicio.menu-principal') }}">Menu principal</a></li>
                                        <li><a class="dropdown-item {{ request()->is('inicio/comparendos') ? 'active' : '' }}" href="{{ route('inicio.comparendos') }}">Comparendos</a></li>
                                        <li><a class="dropdown-item {{ request()->is('inicio/desembargos') ? 'active' : '' }}" href="{{ route('inicio.desembargos') }}">Desembargos</a></li>
                                        <li><a class="dropdown-item {{ request()->is('inicio/ms') ? 'active' : '' }}" href="{{ route('inicio.ms') }}">MS</a></li>
                                        <li><a class="dropdown-item {{ request()->is('inicio/banners') ? 'active' : '' }}" href="{{ route('inicio.banners') }}">Banners</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->is('inicio/atencion-servicios/*') || request()->is('atencion-servicios/*') ? 'active' : '' }}"
                                        href="#" role="button" data-bs-toggle="dropdown">
                                        Atencion servicios
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><h6 class="dropdown-header">Tramites y servicios</h6></li>
                                        <li><a class="dropdown-item {{ request()->is('atencion-servicios/puntos-atencion') ? 'active' : '' }}" href="{{ route('atencion-servicios.puntos-atencion') }}">Puntos de atencion</a></li>
                                        <li><a class="dropdown-item {{ request()->is('inicio/atencion-servicios/tramites-servicios') ? 'active' : '' }}" href="{{ route('inicio.atencion-servicios.tramites-servicios.index') }}">Tramites y servicios</a></li>
                                        <li><a class="dropdown-item {{ request()->is('inicio/atencion-servicios/tramites-servicios/comparendos') ? 'active' : '' }}" href="{{ route('inicio.atencion-servicios.tramites-servicios.comparendos') }}">Comparendos</a></li>
                                        <li><a class="dropdown-item {{ request()->is('inicio/atencion-servicios/tramites-servicios/frecuentes') ? 'active' : '' }}" href="{{ route('inicio.atencion-servicios.tramites-servicios.frecuentes') }}">Frecuentes</a></li>
                                        <li><a class="dropdown-item {{ request()->is('inicio/atencion-servicios/tramites-servicios/pqrsd') ? 'active' : '' }}" href="{{ route('inicio.atencion-servicios.tramites-servicios.pqrsd') }}">PQRSD</a></li>
                                        <li><a class="dropdown-item {{ request()->is('inicio/atencion-servicios/tramites-servicios/pqrsd/anticorrupcion') ? 'active' : '' }}" href="{{ route('inicio.atencion-servicios.tramites-servicios.pqrsd.anticorrupcion') }}">Anticorrupcion</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->is('entidad/*') ? 'active' : '' }}"
                                        href="#" role="button" data-bs-toggle="dropdown">
                                        Entidad
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><h6 class="dropdown-header">Gestion institucional</h6></li>
                                        <li><a class="dropdown-item {{ request()->is('entidad/organigrama') ? 'active' : '' }}" href="{{ route('entidad.organigrama') }}">Organigrama</a></li>
                                        <li><a class="dropdown-item {{ request()->is('entidad/sg') ? 'active' : '' }}" href="{{ route('entidad.sg') }}">SG</a></li>
                                        <li><a class="dropdown-item {{ request()->is('entidad/sistemas-gestion/ambiental') ? 'active' : '' }}" href="{{ route('entidad.sistemas-gestion.ambiental') }}">Sistema Ambiental</a></li>
                                        <li><a class="dropdown-item {{ request()->is('entidad/sistemas-gestion/continuidad') ? 'active' : '' }}" href="{{ route('entidad.sistemas-gestion.continuidad') }}">Continuidad</a></li>
                                        <li><a class="dropdown-item {{ request()->is('entidad/sistemas-gestion/sgsst') ? 'active' : '' }}" href="{{ route('entidad.sistemas-gestion.sgsst') }}">SGSST</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->is('sites/*') || request()->is('transparencia/*') ? 'active' : '' }}"
                                        href="#" role="button" data-bs-toggle="dropdown">
                                        Sites y transparencia
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><h6 class="dropdown-header">Portales y contenidos</h6></li>
                                        <li><a class="dropdown-item {{ request()->is('transparencia') ? 'active' : '' }}" href="{{ route('transparencia.index') }}">Transparencia</a></li>
                                        <li><a class="dropdown-item {{ request()->is('sites/conciliacion') ? 'active' : '' }}" href="{{ route('sites.conciliacion') }}">Conciliacion</a></li>
                                        <li><a class="dropdown-item {{ request()->is('sites/dscsm') ? 'active' : '' }}" href="{{ route('sites.dscsm') }}">DSCSM</a></li>
                                        <li><a class="dropdown-item {{ request()->is('sites/sir') ? 'active' : '' }}" href="{{ route('sites.sir') }}">SIR</a></li>
                                        <li><a class="dropdown-item {{ request()->is('transparencia/1/agremiaciones') ? 'active' : '' }}" href="{{ route('transparencia.1.agremiaciones') }}">Agremiaciones</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Highlighted Region (opcional) -->
        @hasSection('highlighted')
            <div class="region region-highlighted bg-warning bg-opacity-25">
                <div class="layout-container container py-2">
                    @yield('highlighted')
                </div>
            </div>
        @endif

        <!-- Main Content -->
        <main class="main-content" id="main-content">
            <div class="layout-container container mt-1">

                {{-- Breadcrumb por defecto estilo Drupal/Barrio --}}
                @section('breadcrumb')
                    <nav class="region region-breadcrumb" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
                            @yield('breadcrumb-items')
                        </ol>
                    </nav>
                @show

                {{-- Help Region opcional --}}
                @hasSection('help')
                    <div class="region region-help alert alert-info py-2 px-3">
                        @yield('help')
                    </div>
                @endif

                {{-- Mensajes globales --}}
                <div class="region region-messages">
                    @if (session('status'))
                        <div class="messages messages--status">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="messages messages--status">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('warning'))
                        <div class="messages messages--warning">
                            {{ session('warning') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="messages messages--error">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="messages messages--error">
                            <strong>Por favor corrige los siguientes errores:</strong>
                            <ul class="mb-0 mt-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                @php
                    // Cálculo ligero de columnas tipo Drupal (con sidebars)
                    $hasSidebarFirst = View::hasSection('sidebar-first');
                    $hasSidebarSecond = View::hasSection('sidebar-second');

                    if ($hasSidebarFirst && $hasSidebarSecond) {
                        $contentClass = 'col-md-6';
                    } elseif ($hasSidebarFirst || $hasSidebarSecond) {
                        $contentClass = 'col-md-9';
                    } else {
                        $contentClass = 'col-12';
                    }
                @endphp

                <div class="row">
                    {{-- Sidebar First --}}
                    @if ($hasSidebarFirst)
                        <aside class="col-md-3 region region-sidebar-first mb-3 mb-md-0">
                            @yield('sidebar-first')
                        </aside>
                    @endif

                    {{-- Contenido principal --}}
                    <div class="{{ $contentClass }} region region-content">
                        {{-- Page Title --}}
                        @hasSection('page-title')
                            <header class="mb-3">
                                <h1 class="h3 page-title mb-0">@yield('page-title')</h1>
                            </header>
                        @endif

                        {{-- Tabs --}}
                        @hasSection('tabs')
                            <nav class="tabs" role="navigation" aria-label="Tabs">
                                <ul class="nav nav-tabs">
                                    @yield('tabs')
                                </ul>
                            </nav>
                        @endif

                        {{-- Action Links --}}
                        @hasSection('action-links')
                            <ul class="action-links list-inline mb-3">
                                @yield('action-links')
                            </ul>
                        @endif

                        {{-- Main content de la vista --}}
                        @yield('content')
                    </div>

                    {{-- Sidebar Second --}}
                    @if ($hasSidebarSecond)
                        <aside class="col-md-3 region region-sidebar-second mt-3 mt-md-0">
                            @yield('sidebar-second')
                        </aside>
                    @endif
                </div>
            </div>
        </main>

    </div>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- utils.js BDC -->
    <script src="https://cdn.www.gov.co/layout-govco-v5/script.js"></script>

    {{-- Comportamiento tipo Drupal: tablas responsivas, skip link, etc. --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const useDrupalFilesHost = @json(app()->environment(['local', 'development']));
            const drupalFilesHost = 'https://www.movilidadbogota.gov.co';

            if (useDrupalFilesHost) {
                document.querySelectorAll('[src],[href]').forEach(function(element) {
                    ['src', 'href'].forEach(function(attribute) {
                        const value = element.getAttribute(attribute);

                        if (value && value.startsWith('/sites/default/files/')) {
                            element.setAttribute(attribute, drupalFilesHost + value);
                        }
                    });
                });
            }

            // Skip link accesible
            const skipLink = document.querySelector('.skip-link');
            if (skipLink) {
                skipLink.addEventListener('click', function(e) {
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.setAttribute('tabindex', '-1');
                        target.focus();
                    }
                });
            }

            // Envolver tablas en .table-responsive (como hace Drupal)
            document.querySelectorAll('.main-content table').forEach(function(table) {
                if (!table.closest('.table-responsive')) {
                    const wrapper = document.createElement('div');
                    wrapper.className = 'table-responsive';
                    table.parentNode.insertBefore(wrapper, table);
                    wrapper.appendChild(table);
                }
            });

            // Refuerzo de dropdowns del menu principal
            const navDropdowns = document.querySelectorAll('.region-primary-menu .dropdown');
            const navToggles = document.querySelectorAll('.region-primary-menu .dropdown-toggle');
            const hasBootstrapDropdown = !!(window.bootstrap && window.bootstrap.Dropdown);

            navToggles.forEach(function(toggle) {
                if (hasBootstrapDropdown) {
                    const instance = window.bootstrap.Dropdown.getOrCreateInstance(toggle, { autoClose: true });
                    toggle.addEventListener('click', function(event) {
                        event.preventDefault();
                        instance.toggle();
                    });
                } else {
                    toggle.addEventListener('click', function(event) {
                        event.preventDefault();
                        event.stopPropagation();
                        const parent = this.closest('.dropdown');
                        const menu = parent ? parent.querySelector('.dropdown-menu') : null;
                        const isOpen = parent && parent.classList.contains('show');

                        navDropdowns.forEach(function(item) {
                            item.classList.remove('show');
                            const innerMenu = item.querySelector('.dropdown-menu');
                            if (innerMenu) {
                                innerMenu.classList.remove('show');
                            }
                        });

                        if (!isOpen && parent && menu) {
                            parent.classList.add('show');
                            menu.classList.add('show');
                        }
                    });
                }
            });

            if (!hasBootstrapDropdown) {
                document.addEventListener('click', function(event) {
                    if (!event.target.closest('.region-primary-menu')) {
                        navDropdowns.forEach(function(item) {
                            item.classList.remove('show');
                            const menu = item.querySelector('.dropdown-menu');
                            if (menu) {
                                menu.classList.remove('show');
                            }
                        });
                    }
                });
            }
        });
    </script>

    {{-- Scripts adicionales por vista --}}
    @stack('scripts')
</body>

</html>
