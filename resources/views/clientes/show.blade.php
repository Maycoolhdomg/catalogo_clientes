@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-primary text-white">
        <h4>Detalle del Cliente</h4>
    </div>

    <div class="card-body">

        <p><strong>ID:</strong> {{ $cliente->id }}</p>

        <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>

        <p><strong>Apellido:</strong> {{ $cliente->apellido }}</p>

        <p><strong>Email:</strong> {{ $cliente->email }}</p>

        <p><strong>Teléfono:</strong> {{ $cliente->telefono ?? 'No registrado' }}</p>

        <p><strong>Dirección:</strong> {{ $cliente->direccion ?? 'No registrada' }}</p>

        <hr>

        <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning">
            Editar
        </a>

        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
            Volver
        </a>

    </div>
</div>

@endsection