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
