@extends('layouts.app')
@section('title', 'Culturas - Convocatorias')

@section('content')
    <style>
        .external-modal-backdrop {
            position: fixed;
            inset: 0;
            background: #e9e9e9;
            z-index: 1050;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .external-modal-card {
            width: 100%;
            max-width: 680px;
            background: #fff;
            border-radius: 0.375rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            padding: 2.5rem 1.5rem 2.25rem;
            text-align: center;
        }

        .external-modal-icon {
            width: 58px;
            height: 58px;
            margin: 0 auto 1rem;
            border: 4px solid #1648b3;
            border-radius: 50%;
            color: #1648b3;
            font-size: 30px;
            line-height: 50px;
            font-weight: 700;
            font-family: Georgia, "Times New Roman", serif;
        }

        .external-modal-title {
            color: #1648b3;
            font-size: clamp(1.7rem, 1.8vw, 2.2rem);
            font-weight: 700;
            line-height: 1.2;
            margin: 0 0 1rem;
        }

        .external-modal-text {
            color: #4c4c4c;
            font-size: 1rem;
            margin: 0;
        }

        .external-modal-url {
            color: #4c4c4c;
            font-size: 0.95rem;
            margin: 0.35rem 0 0;
        }

        .external-modal-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .external-modal-btn {
            min-width: 145px;
            height: 38px;
            border-radius: 999px;
            font-size: 1rem;
            border: 2px solid #1648b3;
            padding: 0 1.25rem;
        }

        .external-modal-btn-primary {
            background: #1648b3;
            color: #fff;
        }

        .external-modal-btn-primary:hover {
            background: #245bcf;
            border-color: #245bcf;
        }

        .external-modal-btn-outline {
            background: #fff;
            color: #1648b3;
        }

        .external-modal-btn-outline:hover {
            background: #1648b3;
            color: #fff;
        }

        @media (max-width: 768px) {
            .external-modal-card {
                padding: 2rem 1.25rem;
            }

            .external-modal-title {
                font-size: 2rem;
            }

            .external-modal-actions {
                flex-direction: column;
                align-items: center;
            }

            .external-modal-btn {
                width: 100%;
                max-width: 280px;
            }
        }
    </style>

    <div class="external-modal-backdrop" id="externalExitModal" role="dialog" aria-modal="true"
        aria-labelledby="externalExitTitle">
        <div class="external-modal-card">
            <div class="external-modal-icon" aria-hidden="true">i</div>
            <h2 class="external-modal-title" id="externalExitTitle">Saliendo</h2>
            <p class="external-modal-text">Está saliendo del portal web de MinCultura hacia el Sistema Nacional de
                Convocatorias Públicas Artísticas y Culturales.</p>
            <p class="external-modal-url">https://sistemaconvocatorias.mincultura.gov.co/</p>
            <div class="external-modal-actions">
                <button type="button" class="external-modal-btn external-modal-btn-primary" id="externalExitConfirm">
                    Continuar
                </button>
                <button type="button" class="external-modal-btn external-modal-btn-outline" id="externalExitCancel">
                    Cancelar
                </button>
            </div>
        </div>
    </div>

    <script>
        (function() {
            const modalElement = document.getElementById('externalExitModal');
            const confirmBtn = document.getElementById('externalExitConfirm');
            const cancelBtn = document.getElementById('externalExitCancel');
            const exitUrl = 'https://sistemaconvocatorias.mincultura.gov.co/';
            const fallbackUrl = 'https://www.mincultura.gov.co/';

            if (!modalElement || !confirmBtn || !cancelBtn) {
                window.location.href = fallbackUrl;
                return;
            }

            confirmBtn.addEventListener('click', function() {
                setTimeout(function() {
                    window.location.href = exitUrl;
                }, 2000);
            });

            cancelBtn.addEventListener('click', function() {
                setTimeout(function() {
                    window.location.href = fallbackUrl;
                }, 2000);
            });
        })();
    </script>
@endsection
