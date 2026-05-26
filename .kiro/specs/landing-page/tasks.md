# Implementation Plan: Landing Page - Cámaras de Fotodetección

## Overview

Implementación de un sitio informativo multi-nodo sobre el sistema de cámaras de fotodetección en Bogotá, integrado al portal de la Secretaría Distrital de Movilidad. Se construirá como un conjunto de 8 Blade templates (1 Index + 7 nodos) con CSS y JS inline, siguiendo el patrón existente del portal (`cem.blade.php`). Las rutas se registran con `Route::view()` en `routes/sites.php`.

## Tasks

- [ ] 1. Configurar estructura base del proyecto y rutas
  - [x] 1.1 Registrar rutas del sitio de fotodetección en `routes/sites.php`
    - Agregar rutas `Route::view()` para el Index y los 7 nodos dentro del grupo `sites`
    - Rutas: `/fotodeteccion`, `/fotodeteccion/que-son`, `/fotodeteccion/proceso`, `/fotodeteccion/ubicacion`, `/fotodeteccion/infracciones`, `/fotodeteccion/transparencia`, `/fotodeteccion/comparendo`, `/fotodeteccion/preguntas`
    - Asignar nombres de ruta con patrón `sites.fotodeteccion.*`
    - _Requirements: 1.1, 11.4_

  - [ ] 1.2 Crear directorio de vistas y archivo base del Index
    - Crear `resources/views/sites/fotodeteccion/index.blade.php` con estructura base: `@extends('layouts.app')`, `@section('title')`, `@section('content')`, contenedor `#fotodeteccion` con `all: initial`, variables CSS del sistema de diseño, y etiquetas `<style>` y `<script>` vacías
    - _Requirements: 1.5, 11.1, 11.2, 11.5, 11.6_

  - [x] 1.3 Crear directorio de assets estáticos
    - Crear estructura `public/fotodeteccion-assets/hero/`, `public/fotodeteccion-assets/icons/`, `public/fotodeteccion-assets/docs/`
    - Agregar imágenes placeholder para el hero del Index
    - _Requirements: 11.3_

- [ ] 2. Implementar el Index / Home
  - [ ] 2.1 Implementar sección Hero del Index
    - Crear bloque Hero con título "Cámaras de fotodetección en Bogotá", subtexto descriptivo (max 120 chars), y dos CTAs: "Consultar comparendo" (enlaza a `/sites/fotodeteccion/comparendo`) y "Conocer cómo funciona" (enlaza a `/sites/fotodeteccion/proceso`)
    - Incluir `aria-labelledby` en la sección y estructura semántica con `<h1>`
    - Asegurar visibilidad sin scroll en viewport de 360px
    - _Requirements: 2.1, 1.4, 2.6_

  - [ ] 2.2 Implementar sección de frase institucional y cifras de impacto
    - Crear bloque con frase institucional destacada y 3 cifras (30%, 33%, 27%) con etiquetas descriptivas (max 60 chars cada una)
    - Usar tamaño de fuente diferenciado para las cifras
    - _Requirements: 2.2, 2.6_

  - [ ] 2.3 Implementar módulo de caminos "¿Qué necesitas hacer?"
    - Crear 4 elementos interactivos visualmente diferenciados (tarjetas/bloques clicables) con los accesos: "Entender las cámaras" → `/sites/fotodeteccion/que-son`, "Ver el proceso" → `/sites/fotodeteccion/proceso`, "Consultar ubicación" → `/sites/fotodeteccion/ubicacion`, "Resolver un comparendo" → `/sites/fotodeteccion/comparendo`
    - _Requirements: 1.3, 2.3, 1.6, 2.7_

  - [ ] 2.4 Implementar vista resumida del proceso y preguntas frecuentes
    - Crear bloque de 3 momentos: "La cámara registra → Un agente valida → Se notifica al propietario" con CTA "Ver proceso completo" enlazando a `/sites/fotodeteccion/proceso`
    - Implementar acordeón con 3 preguntas frecuentes colapsables y CTA "Ver todas las preguntas" enlazando a `/sites/fotodeteccion/preguntas`
    - Incluir atributos ARIA: `role="region"`, `aria-labelledby`, `aria-expanded` en cada panel
    - _Requirements: 2.4, 2.5, 2.6, 2.7, 10.3_

  - [ ] 2.5 Implementar estilos responsive del Index
    - Escribir CSS completo del Index dentro de la etiqueta `<style>` del contenedor `#fotodeteccion`
    - Prefijo `#fotodeteccion` en todos los selectores
    - Responsive desde 320px hasta 1920px sin desbordamiento horizontal
    - Áreas táctiles mínimas de 44×44px en pantallas < 768px
    - Contraste WCAG 2.1 AA (4.5:1 texto normal, 3:1 texto grande)
    - _Requirements: 10.1, 10.4, 11.2, 11.6_

- [ ] 3. Checkpoint - Verificar Index funcional
  - Ensure all tests pass, ask the user if questions arise.

- [ ] 4. Implementar Nodo "¿Qué son las cámaras de fotodetección?"
  - [ ] 4.1 Crear `resources/views/sites/fotodeteccion/que-son.blade.php`
    - Estructura base Blade con `@extends('layouts.app')`, contenedor `#fotodeteccion`, breadcrumb de navegación
    - Sección introductoria: definición y propósito (max 2 párrafos, 80 palabras c/u)
    - Mensaje "Más vida, menos multas" visible sin scroll
    - Comparación de 3 sistemas (Automático, Semiautomático, Carril Preferencial) con nombre, descripción (max 20 palabras) y listado de infracciones
    - Bloque de 3 cifras de impacto con tamaño de fuente 2x mayor que texto base
    - _Requirements: 3.1, 3.2, 3.3, 3.4, 3.5, 11.1, 11.2_

  - [ ] 4.2 Implementar estilos responsive del Nodo "¿Qué son?"
    - CSS inline con prefijo `#fotodeteccion`
    - Disposición vertical apilada de los 3 sistemas en pantallas < 768px
    - Alternancia visual entre bloques de texto y bloques de datos
    - _Requirements: 3.5, 3.6, 10.4_

- [ ] 5. Implementar Nodo "¿Cómo funciona el proceso?"
  - [ ] 5.1 Crear `resources/views/sites/fotodeteccion/proceso.blade.php` con Timeline
    - Estructura base Blade con contenedor `#fotodeteccion` y breadcrumb
    - Timeline vertical con 6 pasos: Captura, Carga a la plataforma, Consulta al RUNT, Validación por agente, Firma del comparendo, Notificación
    - Cada paso como bloque horizontal con bordes redondeados y numeración visible (1-6)
    - Todos los pasos colapsados por defecto (solo número y título visibles)
    - Atributos ARIA: `role="list"`, `role="listitem"`, `aria-current="step"`, `aria-expanded`, `aria-controls`
    - _Requirements: 4.1, 4.2, 4.3, 4.7, 10.3, 11.1, 11.2_

  - [ ] 5.2 Implementar JavaScript del Timeline
    - Comportamiento de acordeón de selección única: expandir un paso colapsa el anterior
    - IntersectionObserver para animación de aparición al entrar en viewport (max 400ms)
    - Respetar `prefers-reduced-motion`: desactivar animaciones si está activo
    - Navegación por teclado (Tab, Enter, Space)
    - _Requirements: 4.4, 4.5, 4.6, 10.2, 10.5, 11.5_

  - [ ] 5.3 Implementar estilos del Timeline
    - CSS inline con prefijo `#fotodeteccion`
    - Animaciones CSS con `@media (prefers-reduced-motion: reduce)` para desactivarlas
    - Responsive desde 320px hasta 1920px
    - _Requirements: 4.7, 10.4, 10.5_

- [ ] 6. Implementar Nodo "¿Dónde están ubicadas las cámaras?"
  - [ ] 6.1 Crear `resources/views/sites/fotodeteccion/ubicacion.blade.php`
    - Estructura base Blade con contenedor `#fotodeteccion` y breadcrumb
    - 3 bloques de criterios de ubicación diferenciados visualmente: zonas con historial de siniestros, puntos de riesgo para peatones y ciclistas, lugares con alta concentración de infracciones (título + texto max 80 palabras c/u)
    - Orden vertical: primero criterios, después acceso a consulta
    - CTA "Consultar puntos de fotodetección" con enlace externo
    - Manejo de recurso no disponible: CTA visible con mensaje de no disponibilidad y `aria-disabled="true"`
    - CSS y JS inline
    - _Requirements: 5.1, 5.2, 5.3, 5.4, 11.1, 11.2, 11.5, 11.6_

- [ ] 7. Implementar Nodo "¿Qué infracciones detectan?"
  - [ ] 7.1 Crear `resources/views/sites/fotodeteccion/infracciones.blade.php` con Filtro de Categorías
    - Estructura base Blade con contenedor `#fotodeteccion` y breadcrumb
    - Componente Filtro_Categoría con 3 tabs: Automáticas (seleccionada por defecto), Semiautomáticas, Carril preferencial y restricciones
    - Contenido de cada categoría con nombre de infracción y descripción breve (max 120 chars)
    - Atributos ARIA: `role="tablist"`, `role="tab"`, `aria-selected`, `role="tabpanel"`
    - _Requirements: 6.1, 6.2, 6.3, 6.4, 6.5, 6.6, 6.7, 10.3, 11.1, 11.2_

  - [ ] 7.2 Implementar JavaScript del Filtro de Categorías
    - Click en tab: mostrar panel correspondiente, ocultar los demás
    - Gestión de `aria-selected` y `tabindex`
    - Navegación por teclado: Arrow Left/Right entre tabs, Home/End para primero/último
    - Indicador visual distinguible en categoría activa
    - _Requirements: 6.3, 10.2, 11.5_

- [ ] 8. Checkpoint - Verificar nodos principales funcionales
  - Ensure all tests pass, ask the user if questions arise.

- [ ] 9. Implementar Nodo "Transparencia y documentos"
  - [ ] 9.1 Crear `resources/views/sites/fotodeteccion/transparencia.blade.php` con Biblioteca de Documentos
    - Estructura base Blade con contenedor `#fotodeteccion` y breadcrumb (sin Hero ni bloques de impacto visual)
    - Biblioteca_Documentos con filtros por categoría: Todos (por defecto), Normativa, Operación, Calibración, Seguridad vial, Estudios y reportes
    - Cada documento muestra: título, categoría, enlace de descarga/consulta (`target="_blank"`, `rel="noopener noreferrer"`)
    - Estado por defecto: todos los documentos visibles
    - Mensaje para categorías vacías: "No hay documentos disponibles en esta categoría"
    - Atributos ARIA: `role="tablist"`, `role="tab"`, `aria-selected`
    - _Requirements: 7.1, 7.2, 7.3, 7.4, 7.5, 7.6, 7.7, 10.3, 11.1, 11.2_

  - [ ] 9.2 Implementar JavaScript de la Biblioteca de Documentos
    - Filtrado por categoría con `data-category` en cada documento
    - Tab "Todos" muestra todos los documentos
    - Navegación por teclado entre tabs
    - Descarga/apertura en nueva pestaña
    - _Requirements: 7.3, 7.5, 10.2, 11.5_

- [ ] 10. Implementar Nodo "Si recibiste un comparendo"
  - [ ] 10.1 Crear `resources/views/sites/fotodeteccion/comparendo.blade.php`
    - Estructura base Blade con contenedor `#fotodeteccion` y breadcrumb
    - Título "¿Recibiste un comparendo?" como `<h1>`
    - 5 opciones expandibles: Consultar comparendo (SIMIT), Pagar (SDM), Hacer curso pedagógico (SDM), Impugnar (SDM), Entender por qué llegó el comparendo (SDM)
    - Cada opción muestra: nombre, entidad responsable, descripción breve (max 150 chars) al expandir, enlace al recurso externo
    - Todas colapsadas por defecto
    - Sin scroll horizontal para las opciones
    - Atributos ARIA: `aria-expanded`, `aria-controls`
    - _Requirements: 8.1, 8.2, 8.3, 8.4, 8.5, 10.3, 11.1, 11.2_

  - [ ] 10.2 Implementar JavaScript del componente de opciones
    - Toggle expandir/colapsar cada opción (modo múltiple)
    - Navegación por teclado
    - _Requirements: 8.2, 8.5, 10.2, 11.5_

- [ ] 11. Implementar Nodo "Preguntas frecuentes"
  - [ ] 11.1 Crear `resources/views/sites/fotodeteccion/preguntas.blade.php` con Acordeón agrupado
    - Estructura base Blade con contenedor `#fotodeteccion` y breadcrumb
    - Acordeón con 3 grupos visualmente diferenciados: "Sobre velocidad" (margen de tolerancia, velocidades del radar), "Sobre precisión" (calibración, lectura de placas, motocicletas), "Sobre el comparendo" (comparendo incorrecto, quién puede firmarlo)
    - Mínimo 2 preguntas por grupo
    - Todas colapsadas por defecto
    - Modo selección múltiple: varias preguntas pueden estar expandidas simultáneamente
    - Atributos ARIA: `role="region"`, `aria-labelledby`, `aria-expanded` en cada panel
    - _Requirements: 9.1, 9.2, 9.3, 9.4, 9.5, 9.6, 9.7, 9.8, 10.3, 11.1, 11.2_

  - [ ] 11.2 Implementar JavaScript del Acordeón de preguntas
    - Toggle individual de cada pregunta (expandir/colapsar independiente)
    - Navegación por teclado
    - _Requirements: 9.7, 9.8, 10.2, 11.5_

- [ ] 12. Implementar accesibilidad y optimización transversal
  - [ ] 12.1 Auditar y completar accesibilidad en todas las vistas
    - Verificar contraste WCAG 2.1 AA en todos los textos y componentes
    - Asegurar navegación completa por teclado (Tab, Shift+Tab, Enter, Space, flechas)
    - Verificar indicador de foco visible en todos los elementos interactivos
    - Agregar `alt` descriptivo en imágenes informativas y `alt=""` en decorativas
    - Verificar `prefers-reduced-motion` desactiva todas las animaciones
    - _Requirements: 10.1, 10.2, 10.3, 10.5, 10.7_

  - [ ] 12.2 Optimizar rendimiento y lazy loading
    - Agregar `loading="lazy"` a imágenes fuera del viewport inicial
    - Verificar peso total de página inicial ≤ 1.5 MB
    - Optimizar imágenes en `public/fotodeteccion-assets/`
    - _Requirements: 10.6_

- [ ] 13. Escribir tests de integración de rutas
  - [ ] 13.1 Crear test PHPUnit para rutas del sitio de fotodetección
    - Crear `tests/Feature/FotodeteccionRoutesTest.php`
    - Test que verifica status 200 para el Index y los 7 nodos
    - Test que verifica presencia de elementos clave en cada vista (contenedor `#fotodeteccion`, `all: initial`, título principal)
    - Test que verifica estructura ARIA básica en cada vista
    - _Requirements: 1.1, 1.2, 11.1, 11.2, 10.3_

- [ ] 14. Final checkpoint - Verificar sitio completo
  - Ensure all tests pass, ask the user if questions arise.

## Notes

- Este sitio es completamente estático — no hay modelos de base de datos ni APIs. Todo el contenido está hardcodeado en los Blade templates.
- No se aplica Property-Based Testing ya que el feature es UI estática sin lógica de negocio compleja ni transformaciones de datos.
- Cada vista Blade es independiente y sigue el patrón existente del portal (`cem.blade.php`): contenedor con ID único, `all: initial`, CSS y JS inline.
- Los tests se limitan a verificación de rutas y estructura HTML mediante PHPUnit Feature tests.
- Las validaciones de accesibilidad completas (lectores de pantalla, contraste real) requieren testing manual con herramientas especializadas.
- Los enlaces a recursos externos (SIMIT, consulta de ubicaciones) deben ser configurados con las URLs reales proporcionadas por la entidad.

## Task Dependency Graph

```json
{
  "waves": [
    { "id": 0, "tasks": ["1.1", "1.3"] },
    { "id": 1, "tasks": ["1.2"] },
    { "id": 2, "tasks": ["2.1", "2.2", "2.3", "2.4"] },
    { "id": 3, "tasks": ["2.5"] },
    { "id": 4, "tasks": ["4.1", "5.1", "6.1", "7.1", "9.1", "10.1", "11.1"] },
    { "id": 5, "tasks": ["4.2", "5.2", "5.3", "7.2", "9.2", "10.2", "11.2"] },
    { "id": 6, "tasks": ["12.1", "12.2"] },
    { "id": 7, "tasks": ["13.1"] }
  ]
}
```
