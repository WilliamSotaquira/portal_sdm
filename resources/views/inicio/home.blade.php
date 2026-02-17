@extends('layouts.app')

@section('title', 'Inicio - SDM')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Página de Inicio</h1>
        <p>Bienvenido al sistema SDM.</p>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sistema en Desarrollo</h5>
                <p class="card-text">Esta es la página de inicio ubicada en <code>resources/inicio/home.blade.php</code></p>
                <a href="{{ route('home') }}" class="btn btn-primary">Volver al Dashboard</a>
            </div>
        </div>
    </div>
</div>
@endsection
