@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="mb-4">Dashboard Portal SDM</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title">Empleados</h5>
                <p class="card-text display-4">25</p>
                <a href="#" class="text-white">Ver detalles</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title">Departamentos</h5>
                <p class="card-text display-4">8</p>
                <a href="#" class="text-white">Ver detalles</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <h5 class="card-title">Solicitudes</h5>
                <p class="card-text display-4">12</p>
                <a href="#" class="text-white">Ver detalles</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Bienvenido al Sistema de Gestión de Recursos Humanos</h5>
            </div>
            <div class="card-body">
                <p class="card-text">Este es el Portal SDM desarrollado con Laravel y Bootstrap 5.</p>
                <div class="alert alert-success">
                    ✅ Bootstrap 5 está funcionando correctamente
                </div>
                <button class="btn btn-primary me-2">Gestión de Empleados</button>
                <button class="btn btn-outline-secondary">Configuración</button>
            </div>
        </div>
    </div>
</div>
@endsection
