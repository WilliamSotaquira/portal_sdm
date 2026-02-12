<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Inicio') | Portal SDM</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- Bootstrap 5 --}}
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet"
        crossorigin="anonymous">

    <!-- css BDC -->
    {{-- <link href="https://cdn.www.gov.co/layout-govco-v5/all.css" rel="stylesheet"> --}}

    {{-- Bootstrap Icons --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css"> --}}

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
            background-color: #002244;
        }

        .region-primary-menu .nav-link {
            font-weight: 500;
        }

        .region-primary-menu .nav-link.active {
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: .25rem;
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

        /* Footer tipo Barrio */
        .region-footer {
            margin-top: auto;
            background: #111827;
            color: #e5e7eb;
            font-size: 0.85rem;
        }

        .region-footer a {
            color: #e5e7eb;
        }

        .region-footer a:hover {
            color: #ffffff;
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

    {{-- Vite (Laravel 11) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
            <div class="layout-container container py-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <a href="{{ url('/') }}"
                            class="navbar-brand text-decoration-none d-inline-flex align-items-center">
                            <i class="bi bi-building me-2"></i>
                            <span>Portal SDM</span>
                        </a>
                    </div>
                    <div class="col-md-6 text-md-end mt-2 mt-md-0">
                        <div class="region region-secondary-menu">
                            @if (auth()->check())
                                <div class="dropdown d-inline-block">
                                    <button class="btn btn-outline-light btn-sm dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown">
                                        <i class="bi bi-person-circle me-1"></i>{{ auth()->user()->name ?? 'Usuario' }}
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="{{ url('/user') }}">Mi cuenta</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/user/edit') }}">Editar perfil</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ url('/logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item text-danger">
                                                    <i class="bi bi-box-arrow-right me-1"></i>Cerrar sesión
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <a href="{{ url('/login') }}" class="btn btn-outline-light btn-sm">
                                    <i class="bi bi-box-arrow-in-right me-1"></i>Iniciar sesión
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Primary Menu Region -->
        <nav class="region region-primary-menu navbar navbar-expand-lg navbar-dark">
            <div class="layout-container container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrimary">
                    <span class="navbar-toggler-icon"></span>
                    <span class="ms-2">Menú</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarPrimary">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                                <i class="bi bi-house me-1"></i>Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"
                                href="{{ url('/dashboard') }}">
                                <i class="bi bi-speedometer2 me-1"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('inicio/menu-principal') ? 'active' : '' }}"
                                href="{{ route('inicio.menu-principal') }}">
                                <i class="bi bi-grid-3x3-gap me-1"></i>Menu principal
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('entidad/organigrama') ? 'active' : '' }}"
                                href="{{ route('entidad.organigrama') }}">
                                <i class="bi bi-diagram-3 me-1"></i>Organigrama
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->is('entidad/sistemas-gestion*') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-gear me-1"></i>Sistemas de Gestión
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item {{ request()->is('entidad/sistemas-gestion/ambiental') ? 'active' : '' }}"
                                        href="{{ url('/entidad/sistemas-gestion/ambiental') }}">
                                        <i class="bi bi-tree me-1"></i>Sistema Ambiental
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('entidad/sistemas-gestion/calidad') ? 'active' : '' }}"
                                        href="{{ url('/entidad/sistemas-gestion/calidad') }}">
                                        <i class="bi bi-award me-1"></i>Sistema de Calidad
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item {{ request()->is('entidad/sistemas-gestion/seguridad') ? 'active' : '' }}"
                                        href="{{ url('/entidad/sistemas-gestion/seguridad') }}">
                                        <i class="bi bi-shield-check me-1"></i>Sistema de Seguridad
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('reportes*') ? 'active' : '' }}"
                                href="{{ url('/reportes') }}">
                                <i class="bi bi-graph-up me-1"></i>Reportes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('documentos*') ? 'active' : '' }}"
                                href="{{ url('/documentos') }}">
                                <i class="bi bi-files me-1"></i>Documentos
                            </a>
                        </li>
                    </ul>

                    <!-- Buscador tipo Drupal -->
                    <form class="d-flex" action="{{ url('/search') }}" method="get">
                        <div class="input-group input-group-sm">
                            <input type="search" name="keys" class="form-control" placeholder="Buscar..."
                                aria-label="Buscar">
                            <button class="btn btn-outline-light" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>

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
            <div class="layout-container container mt-3">

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

        <!-- Footer Region -->
        <footer class="region region-footer mt-4">
            <div class="layout-container container py-4">
                <div class="row gy-3">
                    <div class="col-md-6">
                        <h5 class="fw-bold mb-1">Portal SDM</h5>
                        <p class="mb-1">Sistema de Gestión Documental</p>
                        <small class="text-muted">Interfaz tipo Drupal (Bootstrap Barrio) sobre Laravel</small>
                    </div>
                    <div class="col-md-3">
                        <h6 class="fw-semibold">Enlaces rápidos</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ url('/') }}" class="text-decoration-none">Inicio</a></li>
                            <li><a href="{{ url('/contact') }}" class="text-decoration-none">Contacto</a></li>
                            <li><a href="{{ url('/help') }}" class="text-decoration-none">Ayuda</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h6 class="fw-semibold">Legal</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ url('/privacy') }}" class="text-decoration-none">Privacidad</a></li>
                            <li><a href="{{ url('/terms') }}" class="text-decoration-none">Términos</a></li>
                            <li><a href="{{ url('/accessibility') }}" class="text-decoration-none">Accesibilidad</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="my-3 border-secondary">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="mb-0">&copy; {{ date('Y') }} Portal SDM. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    {{-- Bootstrap JS (ligero, sin gov.js) --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script> --}}

    <!-- utils.js BDC -->
    {{-- <script src="https://cdn.www.gov.co/layout-govco-v5/script.js"></script> --}}

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

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
        });
    </script>

    {{-- Scripts adicionales por vista --}}
    @stack('scripts')
</body>

</html>
