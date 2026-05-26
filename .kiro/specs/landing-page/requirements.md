# Requirements Document

## Introduction

Sitio informativo multi-nodo sobre el sistema de cámaras de fotodetección en Bogotá, integrado al portal de la Secretaría Distrital de Movilidad. El sitio reemplaza la narrativa larga actual por una arquitectura navegable donde el ciudadano entiende en 5 segundos de qué trata y escoge el camino que necesita. Consta de un Index/Home como estación central de decisión y 7 nodos internos con contenido específico.

## Glossary

- **Landing_Site**: Conjunto de vistas Blade que conforman el sitio de fotodetección, accesible bajo el prefijo `/sites/fotodeteccion`
- **Index**: Página principal del Landing_Site que orienta al usuario hacia los nodos internos sin saturar de contenido
- **Nodo**: Página interna del Landing_Site dedicada a un tema específico (ej: proceso, ubicación, comparendos)
- **Hero**: Bloque visual principal en la parte superior de una página con título, subtexto y llamados a la acción
- **CTA**: Botón o enlace que invita al usuario a realizar una acción específica (Call To Action)
- **Timeline**: Componente visual que muestra pasos secuenciales de un proceso
- **Acordeón**: Componente interactivo que muestra preguntas/respuestas colapsables
- **Filtro_Categoría**: Componente de interfaz que permite al usuario seleccionar una categoría para ver solo el contenido asociado
- **Biblioteca_Documentos**: Componente que lista documentos descargables organizados por categoría
- **Sistema_Automático**: Cámaras que detectan infracciones sin intervención humana (velocidad, semáforo en rojo, RTM, SOAT)
- **Sistema_Semiautomático**: Cámaras operadas con apoyo humano (mal parqueo, bloqueo de cruce)
- **Carril_Preferencial**: Sistema de detección para infracciones en carriles exclusivos y restricciones de circulación

## Requirements

### Requirement 1: Estructura de navegación del sitio

**User Story:** Como ciudadano, quiero acceder al sitio de fotodetección y encontrar rápidamente la información que necesito, para no tener que leer todo el contenido de forma lineal.

#### Acceptance Criteria

1. THE Landing_Site SHALL estar accesible en la ruta `/sites/fotodeteccion` del portal
2. THE Landing_Site SHALL constar de un Index y 7 Nodos internos, donde cada Nodo es accesible directamente desde el Index sin necesidad de recorrer los demás Nodos en secuencia
3. THE Index SHALL presentar 4 elementos interactivos visualmente diferenciados (tarjetas o bloques clicables) que agrupen los 7 Nodos bajo los caminos: Entender el sistema, Ver cómo funciona el proceso, Consultar ubicación e infracciones, Resolver dudas o actuar
4. WHEN un usuario accede al Index, THE Landing_Site SHALL mostrar un encabezado con el nombre del sitio y un texto descriptivo de máximo 150 caracteres que indique la temática de fotodetección, visible sin necesidad de scroll en viewport de 360px de ancho o superior
5. THE Landing_Site SHALL seguir el patrón de Blade templates existente en `resources/views/sites/`: extender `layouts.app`, usar `@section('content')`, encapsular todo el contenido dentro de un div contenedor con ID único, e incluir todos los estilos en una etiqueta `<style>` dentro de dicho contenedor con reset de estilos vía `all: initial`
6. WHEN un usuario hace clic en uno de los 4 elementos de camino del Index, THE Landing_Site SHALL navegar al Nodo o grupo de Nodos correspondiente en un tiempo de respuesta no mayor a 1 segundo

### Requirement 2: Index / Home

**User Story:** Como ciudadano, quiero ver una página principal limpia y editorial que me oriente sin saturarme, para poder decidir qué camino tomar según mi necesidad.

#### Acceptance Criteria

1. THE Index SHALL mostrar un Hero con título "Cámaras de fotodetección en Bogotá", un subtexto de máximo 120 caracteres que describa el propósito del sitio, y dos CTA principales: "Consultar comparendo" (enlaza al Nodo "Si recibiste un comparendo") y "Conocer cómo funciona" (enlaza al Nodo "¿Cómo funciona el proceso?")
2. THE Index SHALL mostrar una frase institucional destacada seguida de 3 cifras de impacto (30%, 33%, 27%), cada cifra acompañada de una etiqueta descriptiva de máximo 60 caracteres
3. THE Index SHALL presentar un módulo de caminos con la pregunta "¿Qué necesitas hacer?" y 4 accesos que enlacen a sus Nodos correspondientes: "Entender las cámaras" → Nodo "¿Qué son las cámaras de fotodetección?", "Ver el proceso" → Nodo "¿Cómo funciona el proceso?", "Consultar ubicación" → Nodo "¿Dónde están ubicadas las cámaras?", "Resolver un comparendo" → Nodo "Si recibiste un comparendo"
4. THE Index SHALL incluir una vista resumida del proceso en 3 momentos: "La cámara registra → Un agente valida → Se notifica al propietario" con un CTA "Ver proceso completo" que enlace al Nodo "¿Cómo funciona el proceso?"
5. THE Index SHALL cerrar con 3 preguntas frecuentes en formato Acordeón colapsable (mostrando solo el título de cada pregunta hasta que el usuario la expanda) y un CTA "Ver todas las preguntas" que enlace al Nodo "Preguntas frecuentes"
6. THE Index SHALL presentar los módulos en orden vertical secuencial: Hero, frase institucional con cifras, módulo de caminos, vista resumida del proceso, preguntas frecuentes — cada módulo ocupando el ancho completo del contenedor sin disposición en cuadrícula de tarjetas
7. WHEN el usuario hace clic en cualquier CTA del Index, THE Index SHALL navegar al Nodo o recurso correspondiente sin abrir una nueva pestaña del navegador

### Requirement 3: Nodo "¿Qué son las cámaras de fotodetección?"

**User Story:** Como ciudadano, quiero entender qué son las cámaras y por qué existen, para cambiar mi percepción de "me quieren multar" a "hay una estrategia de seguridad vial".

#### Acceptance Criteria

1. THE Nodo SHALL presentar una sección introductoria que incluya una definición de las cámaras de fotodetección (qué son) y su propósito dentro de la estrategia de seguridad vial (para qué sirven), en un máximo de 2 párrafos de no más de 80 palabras cada uno
2. THE Nodo SHALL mostrar el mensaje "Más vida, menos multas" como título o subtítulo visible sin necesidad de scroll en la sección principal del nodo
3. THE Nodo SHALL mostrar la diferencia entre Sistema_Automático, Sistema_Semiautomático y Carril_Preferencial mediante una comparación que presente para cada tipo: nombre del sistema, descripción de funcionamiento en máximo 20 palabras, y listado de infracciones que detecta
4. THE Nodo SHALL destacar 3 cifras de impacto en un bloque visual diferenciado del texto corrido, donde cada cifra incluya el valor numérico con tamaño de fuente al menos 2 veces mayor que el texto base y una etiqueta descriptiva de máximo 10 palabras
5. THE Nodo SHALL organizar el contenido en secciones verticales diferenciadas visualmente, alternando bloques de texto con bloques de datos o comparaciones, sin usar más de 3 párrafos consecutivos de texto corrido
6. WHEN el usuario accede al Nodo desde un dispositivo con ancho menor a 768px, THE Nodo SHALL reorganizar la comparación de los 3 sistemas en disposición vertical apilada manteniendo visible la información completa de cada tipo

### Requirement 4: Nodo "¿Cómo funciona el proceso?"

**User Story:** Como ciudadano, quiero entender el flujo completo desde la captura hasta la notificación, para saber qué sucede cuando una cámara registra una infracción.

#### Acceptance Criteria

1. THE Nodo SHALL presentar el proceso en 6 pasos secuenciales: Captura, Carga a la plataforma, Consulta al RUNT, Validación por agente, Firma del comparendo, Notificación
2. THE Nodo SHALL usar un Timeline vertical interactivo donde cada paso se expande al hacer clic mostrando un texto descriptivo de máximo 150 caracteres por paso
3. THE Timeline SHALL mostrar todos los pasos colapsados por defecto, mostrando únicamente el número de paso y su título
4. WHEN el usuario hace clic en un paso del Timeline, THE Timeline SHALL expandir ese paso y colapsar el paso previamente expandido, comportándose como un acordeón de selección única
5. WHEN el usuario hace scroll y un paso del Timeline entra en el viewport, THE Timeline SHALL revelar ese paso con una animación de aparición de duración máxima 400ms
6. IF el usuario tiene preferencia de movimiento reducido activada, THEN THE Nodo SHALL desactivar las animaciones de aparición y mostrar todos los pasos visibles de forma inmediata
7. THE Timeline SHALL mostrar cada paso como un bloque horizontal con bordes redondeados y numeración visible del 1 al 6

### Requirement 5: Nodo "¿Dónde están ubicadas las cámaras?"

**User Story:** Como ciudadano, quiero saber por qué se ubican las cámaras en ciertos puntos y poder consultar las ubicaciones, para entender los criterios técnicos detrás de la decisión.

#### Acceptance Criteria

1. THE Nodo SHALL presentar los 3 criterios de ubicación como bloques diferenciados visualmente: zonas con historial de siniestros, puntos de riesgo para peatones y ciclistas, y lugares con alta concentración de infracciones, cada uno con un título identificable y texto descriptivo de no más de 80 palabras
2. THE Nodo SHALL presentar primero la sección de explicación de criterios y después la sección de acceso a consulta, en orden vertical descendente
3. THE Nodo SHALL incluir un CTA con el texto "Consultar puntos de fotodetección" que dirija a un recurso externo de consulta de ubicaciones proporcionado por la entidad
4. IF el recurso de consulta vinculado al CTA no está disponible o no ha sido configurado, THEN THE Nodo SHALL mantener el CTA visible pero indicar al usuario que el recurso no se encuentra disponible en ese momento

### Requirement 6: Nodo "¿Qué infracciones detectan?"

**User Story:** Como ciudadano, quiero ver las infracciones organizadas por tipo de sistema, para encontrar rápidamente la información relevante sin leer un listado largo.

#### Acceptance Criteria

1. THE Nodo SHALL organizar las infracciones en 3 categorías mediante Filtro_Categoría: Automáticas, Semiautomáticas, Carril preferencial y restricciones
2. WHEN la página carga, THE Filtro_Categoría SHALL mostrar la categoría "Automáticas" seleccionada por defecto y sus infracciones visibles
3. WHEN el usuario selecciona una categoría, THE Filtro_Categoría SHALL mostrar solo las infracciones de esa categoría y aplicar un indicador visual distinguible a la categoría activa
4. THE categoría "Automáticas" SHALL listar: Exceso de velocidad, Semáforo en rojo o señal de PARE, RTM vencida, SOAT no vigente
5. THE categoría "Semiautomáticas" SHALL listar: Mal parqueo, Bloqueo de cruce peatonal, Bloqueo de intersección, Recoger o dejar pasajeros en zonas no permitidas
6. THE categoría "Carril preferencial y restricciones" SHALL listar: Pico y Placa, Carriles preferenciales o exclusivos sin autorización
7. THE Nodo SHALL mostrar cada infracción con su nombre y una descripción breve de máximo 120 caracteres que indique en qué consiste la infracción

### Requirement 7: Nodo "Transparencia y documentos"

**User Story:** Como ciudadano o profesional, quiero acceder a documentos normativos y técnicos del sistema de fotodetección, para tener respaldo legal o profundizar en la operación.

#### Acceptance Criteria

1. THE Nodo SHALL presentar documentos en una Biblioteca_Documentos con filtros por categoría, donde cada documento muestra como mínimo: título del documento, categoría a la que pertenece, y un enlace o botón de descarga/consulta
2. THE Biblioteca_Documentos SHALL incluir las categorías: Normativa, Operación, Calibración, Seguridad vial, Estudios y reportes
3. WHEN el usuario selecciona una categoría de la Biblioteca_Documentos, THE Nodo SHALL mostrar solo los documentos de esa categoría
4. WHEN la página carga, THE Biblioteca_Documentos SHALL mostrar todos los documentos de todas las categorías como estado por defecto
5. WHEN el usuario activa el enlace de descarga/consulta de un documento, THE Nodo SHALL iniciar la descarga del archivo o abrir el documento en una nueva pestaña del navegador
6. THE Nodo SHALL presentar la Biblioteca_Documentos como componente secundario dentro de la jerarquía visual del Landing_Site, sin usar elementos Hero ni bloques de impacto visual que correspondan a la narrativa principal del Index
7. IF una categoría no contiene documentos, THEN THE Biblioteca_Documentos SHALL mostrar un mensaje indicando que no hay documentos disponibles en esa categoría

### Requirement 8: Nodo "Si recibiste un comparendo"

**User Story:** Como ciudadano que recibió un comparendo, quiero saber qué opciones tengo y cómo actuar, para resolver mi situación de forma clara y rápida.

#### Acceptance Criteria

1. THE Nodo SHALL presentar las 5 opciones disponibles como elementos individuales visibles sin necesidad de scroll horizontal: Consultar comparendo, Pagar, Hacer curso pedagógico, Impugnar, Entender por qué llegó el comparendo
2. WHEN el usuario selecciona una opción, THE Nodo SHALL mostrar una descripción breve de la acción (máximo 150 caracteres) y un enlace hacia el recurso externo o sección correspondiente donde se completa el trámite
3. THE Nodo SHALL usar el título "¿Recibiste un comparendo?" como encabezado principal
4. THE Nodo SHALL mostrar junto a cada opción el nombre de la entidad responsable de atender ese trámite (Secretaría Distrital de Movilidad, SIMIT, u otra entidad competente)
5. WHEN la página carga, THE Nodo SHALL mostrar todas las opciones visibles y colapsadas, sin ninguna opción expandida por defecto

### Requirement 9: Nodo "Preguntas frecuentes"

**User Story:** Como ciudadano, quiero encontrar respuestas a dudas comunes sobre fotodetección agrupadas por tema, para resolver mi consulta sin leer contenido irrelevante.

#### Acceptance Criteria

1. THE Nodo SHALL presentar las preguntas en formato Acordeón agrupadas por intención, con un mínimo de 2 preguntas por grupo
2. THE Acordeón SHALL organizar las preguntas en 3 grupos visualmente diferenciados: Sobre velocidad, Sobre precisión, Sobre el comparendo
3. THE grupo "Sobre velocidad" SHALL incluir preguntas sobre margen de tolerancia y velocidades que mide el radar
4. THE grupo "Sobre precisión" SHALL incluir preguntas sobre calibración, lectura de placas y motocicletas
5. THE grupo "Sobre el comparendo" SHALL incluir preguntas sobre qué hacer si es incorrecto y quién puede firmarlo
6. WHEN la página carga, THE Acordeón SHALL mostrar todas las preguntas colapsadas por defecto
7. WHEN el usuario hace clic en una pregunta colapsada, THE Acordeón SHALL expandir esa pregunta mostrando su respuesta en texto y permitir que múltiples preguntas estén expandidas simultáneamente
8. WHEN el usuario hace clic en una pregunta expandida, THE Acordeón SHALL colapsar esa pregunta ocultando su respuesta

### Requirement 10: Accesibilidad y rendimiento

**User Story:** Como usuario con diversidad funcional o conexión limitada, quiero que el sitio sea accesible y cargue rápidamente, para poder usarlo sin barreras.

#### Acceptance Criteria

1. THE Landing_Site SHALL cumplir con contraste mínimo WCAG 2.1 nivel AA (ratio 4.5:1 para texto normal y 3:1 para texto grande y componentes de interfaz) en todos los textos y componentes interactivos
2. THE Landing_Site SHALL ser navegable completamente mediante teclado, permitiendo alcanzar y operar todos los elementos interactivos usando Tab, Shift+Tab, Enter, Space y teclas de flecha, con un indicador de foco visible en cada elemento enfocado
3. THE Landing_Site SHALL incluir en cada componente interactivo los atributos ARIA correspondientes a su rol: role="region" con aria-labelledby en el Acordeón con aria-expanded en cada panel, role="tablist" con role="tab" y aria-selected en el Filtro_Categoría, y role="list" con role="listitem" y aria-current="step" en el Timeline
4. THE Landing_Site SHALL ser responsive y funcional en dispositivos desde 320px hasta 1920px de ancho, sin desbordamiento horizontal, sin contenido truncado ni superpuesto, y con todos los elementos interactivos con un área táctil mínima de 44×44 píxeles en pantallas menores a 768px
5. IF el usuario tiene activada la preferencia `prefers-reduced-motion`, THEN THE Landing_Site SHALL desactivar todas las animaciones y transiciones
6. THE Landing_Site SHALL cargar los assets de forma optimizada usando lazy loading para imágenes fuera del viewport inicial, alcanzando un peso total de página inicial no mayor a 1.5 MB y un tiempo de Largest Contentful Paint (LCP) no mayor a 2.5 segundos en una conexión 4G estándar
7. THE Landing_Site SHALL incluir texto alternativo descriptivo en todas las imágenes informativas y atributo alt vacío en imágenes decorativas

### Requirement 11: Consistencia técnica con el portal

**User Story:** Como desarrollador, quiero que el nuevo sitio siga los patrones técnicos existentes del portal, para mantener la consistencia y facilitar el mantenimiento.

#### Acceptance Criteria

1. THE Landing_Site SHALL usar un Blade template ubicado en `resources/views/sites/` que extienda `layouts.app` y defina como mínimo las secciones `@section('title')` y `@section('content')`
2. THE Landing_Site SHALL encapsular todo su contenido dentro de un elemento contenedor con un ID único (e.g., `#fotodeteccion`), aplicando `all: initial` en dicho contenedor y prefijando todos los selectores CSS con ese ID para evitar conflictos con los estilos globales del portal
3. THE Landing_Site SHALL almacenar sus assets estáticos (imágenes, íconos y archivos multimedia) en `public/fotodeteccion-assets/`
4. THE Landing_Site SHALL registrar su ruta mediante `Route::view()` dentro del grupo con prefijo `sites` en el archivo `routes/sites.php`, asignando un nombre de ruta con el patrón `sites.fotodeteccion`
5. THE Landing_Site SHALL usar JavaScript vanilla sin dependencias externas adicionales, incluido de forma inline dentro del mismo archivo Blade template mediante una etiqueta `<script>` al final del contenedor principal
6. THE Landing_Site SHALL incluir todos sus estilos CSS de forma inline dentro del archivo Blade template mediante una etiqueta `<style>` dentro del contenedor con ID único, sin archivos CSS externos propios
