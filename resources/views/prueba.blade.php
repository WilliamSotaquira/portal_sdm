<div class="sdm-permiso-card">

    <div class="sdm-permiso-card__icon-col" aria-hidden="true">
        <div class="sdm-permiso-card__pdf-icon">
            <span class="sdm-permiso-card__pdf-corner"></span>
            <span class="sdm-permiso-card__pdf-label">PDF</span>
        </div>
    </div>

    <div class="sdm-permiso-card__body">
        <div class="sdm-permiso-card__row">
            <div class="sdm-permiso-card__label">Nombre:</div>
            <div class="sdm-permiso-card__value sdm-permiso-card__value--title">
                <a href="{{ field_archivo_pdf }}" target="_blank" rel="noopener noreferrer">
                    {{ field_numero_de_resolucion }}
                </a>
            </div>
        </div>

        <div class="sdm-permiso-card__row sdm-permiso-card__row--descripcion">
            <div class="sdm-permiso-card__label">Descripción:</div>
            <div class="sdm-permiso-card__value">
                {{ field_descripcion }}
            </div>
        </div>

        <div class="sdm-permiso-card__row">
            <div class="sdm-permiso-card__label">Categoría:</div>
            <div class="sdm-permiso-card__value">
                Resoluciones Permisos de Carga
            </div>
        </div>

        <div class="sdm-permiso-card__row">
            <div class="sdm-permiso-card__label">Fechas:</div>
            <div class="sdm-permiso-card__value">
                <strong>Expedición:</strong> {{ field_fecha_de_expedicion }}
                <span class="sdm-permiso-card__sep" aria-hidden="true">|</span>
                <strong>Publicación:</strong> {{ field_fecha_de_publicacion }}
            </div>
        </div>

        <div class="sdm-permiso-card__row">
            <div class="sdm-permiso-card__label">Archivo:</div>
            <div class="sdm-permiso-card__value sdm-permiso-card__file">
                <a href="{{ field_archivo_pdf }}" target="_blank" rel="noopener noreferrer">
                    Descargar PDF
                </a>
            </div>
        </div>

    </div>
</div>


<style>
    .view-permisos-de-carga .sdm-permiso-card {
        display: grid !important;
        grid-template-columns: 64px minmax(0, 1fr) !important;
        gap: 18px !important;
        align-items: start !important;
        background: #f7f7f7 !important;
        border: 1px solid #d9d9d9 !important;
        border-radius: 12px !important;
        padding: 20px !important;
        margin: 0 0 16px 0 !important;
        box-sizing: border-box !important;
    }

    .view-permisos-de-carga .sdm-permiso-card,
    .view-permisos-de-carga .sdm-permiso-card * {
        box-sizing: border-box !important;
    }

    /* ICONO */
    .view-permisos-de-carga .sdm-permiso-card__icon-col {
        display: flex !important;
        justify-content: center !important;
        align-items: flex-start !important;
        width: 64px !important;
        min-width: 64px !important;
    }

    .view-permisos-de-carga .sdm-permiso-card__pdf-icon {
        position: relative !important;
        width: 42px !important;
        height: 52px !important;
        background: #ffffff !important;
        border: 1px solid #d1d5db !important;
        border-radius: 6px !important;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.06) !important;
    }

    /* Ocultar spans innecesarios */
    .sdm-permiso-card__pdf-corner,
    .sdm-permiso-card__pdf-label {
        display: none !important;
    }

    /* esquina doblada */
    .view-permisos-de-carga .sdm-permiso-card__pdf-icon::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 12px;
        height: 12px;
        background: linear-gradient(135deg, #e5e7eb 0 49%, #ffffff 50% 100%);
    }

    /* texto PDF */
    .view-permisos-de-carga .sdm-permiso-card__pdf-icon::after {
        content: "PDF";
        position: absolute;
        left: 50%;
        bottom: 9px;
        transform: translateX(-50%);
        font-size: 11px;
        font-weight: 700;
        color: #dc2626;
    }

    /* BODY */
    .view-permisos-de-carga .sdm-permiso-card__row {
        display: grid !important;
        grid-template-columns: 110px minmax(0, 1fr);
        column-gap: 14px;
        margin-bottom: 12px;
    }

    .view-permisos-de-carga .sdm-permiso-card__label {
        font-weight: 700;
        color: #243245;
    }

    .view-permisos-de-carga .sdm-permiso-card__value {
        font-size: 15px;
        line-height: 1.2;
        color: #1f2937;
    }

    /* TÍTULO */
    .view-permisos-de-carga .sdm-permiso-card__value--title>a,
    .view-permisos-de-carga .sdm-permiso-card__value--title .field-content a {
        font-weight: 700;
        font-size: 14px !important;
        color: #243245 !important;
        line-height: 1.2;
        text-decoration: none;
    }

    .view-permisos-de-carga .sdm-permiso-card__value--title>a:hover,
    .view-permisos-de-carga .sdm-permiso-card__value--title .field-content a:hover {
        color: #1d4ed8;
        text-decoration: underline;
    }

    /* SEPARADOR */
    .view-permisos-de-carga .sdm-permiso-card__sep {
        margin: 0 8px;
        color: #6b7280;
    }

    /* LINK PDF */
    .view-permisos-de-carga .sdm-permiso-card__file>a,
    .view-permisos-de-carga .sdm-permiso-card__file .field-content a {
        font-weight: 600;
        font-size: 14px !important;
        color: #b45309 !important;
        line-height: 1.2;
        text-decoration: underline;
    }

    .view-permisos-de-carga .sdm-permiso-card__file>a:hover,
    .view-permisos-de-carga .sdm-permiso-card__file .field-content a:hover {
        color: #92400e;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .view-permisos-de-carga .sdm-permiso-card {
            grid-template-columns: 1fr;
            padding: 16px;
        }

        .view-permisos-de-carga .sdm-permiso-card__row {
            grid-template-columns: 1fr;
        }

        .view-permisos-de-carga .sdm-permiso-card__sep {
            display: none;
        }
    }

    .view-permisos-de-carga .sdm-permiso-card__icon-col {
        display: flex !important;
        justify-content: center !important;
        align-items: flex-start !important;
        width: 64px !important;
        min-width: 64px !important;
    }

    .view-permisos-de-carga .sdm-permiso-card__pdf-icon {
        display: block !important;
        width: 36px !important;
        height: 36px !important;
        object-fit: contain !important;
    }

    .view-permisos-de-carga .field-content a,
    .view-permisos-de-carga .field-content a:not(.toolbar-icon) {
        font-size: 14px !important;
    }

    a:not(.toolbar-icon) {
        font-family: "WorkSans-Regular", sans-serif;
        /* font-size: 16px; */
        color: var(--color-titulo) !important;
        word-break: break-word;
        overflow-wrap: break-word;
    }
</style>
