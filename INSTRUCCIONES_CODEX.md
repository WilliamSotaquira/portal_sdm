# Instrucciones para Codex (Tareas Recurrentes)

Este archivo define tareas recurrentes que debo ejecutar o validar cuando trabajemos en `portal_sdm`.

## Regla general

- Antes de empezar cambios grandes, revisar este archivo y confirmar qué tareas aplican en la sesión.
- Si una tarea no aplica, dejar constancia breve en el reporte final.

## Tareas diarias (por sesión de trabajo)

- Revisar estado del repositorio (`git status`) antes de editar archivos.
- Confirmar que los cambios nuevos no rompan rutas, vistas ni dependencias existentes.
- Si se modifica código, ejecutar pruebas mínimas relacionadas (al menos `php artisan test` cuando sea viable).
- Reportar al final: archivos tocados, validaciones ejecutadas y riesgos pendientes.

## Tareas semanales

- Validar que los archivos Markdown operativos sigan vigentes:
- `README.md`
- `resources/temp/Lista de Chequeo Cuatrimestral.md`
- `resources/temp/Seguimiento Trimestral.md`
- Proponer limpieza de archivos temporales que ya no se usen.
- Revisar consistencia de nombres y ortografía en nuevos `.md`.

## Tareas mensuales

- Recomendar una revisión general de calidad:
- Cobertura de pruebas.
- Deuda técnica visible.
- Documentación desactualizada.
- Entregar una lista corta de mejoras priorizadas (alta, media, baja).

## Formato de cierre en cada entrega

- Resumen corto del cambio.
- Validaciones realizadas.
- Pendientes o próximos pasos sugeridos.
