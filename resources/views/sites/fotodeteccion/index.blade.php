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

    <!-- Content will go here -->

    <script>
        // JavaScript inline al final
    </script>
</div>

@endsection
