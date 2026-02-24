@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Lista de Clientes</h2>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">
        Nuevo Cliente
    </a>
</div>

<form method="GET" action="{{ route('clientes.index') }}" class="mb-3">
    <div class="input-group">
        <input type="text" name="buscar" class="form-control"
               placeholder="Buscar por nombre, apellido o email"
               value="{{ $buscar }}">
        <button class="btn btn-outline-secondary" type="submit">
            Buscar
        </button>
    </div>
</form>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th width="180px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellido }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>
                    <a href="{{ route('clientes.show', $cliente) }}"
                        class="btn btn-info btn-sm mb-1 w-100 w-md-auto">
                        Ver
                    </a>
                    <a href="{{ route('clientes.edit', $cliente) }}"
                    class="btn btn-warning btn-sm mb-1 w-100 w-md-auto">
                        Editar
                    </a>

                    <form action="{{ route('clientes.destroy', $cliente) }}"
                        method="POST"
                        class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="btn btn-danger btn-sm mb-1 w-100 w-md-auto"
                                onclick="return confirm('¿Seguro que deseas eliminar?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">
                    No hay clientes registrados
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div>
    {{ $clientes->links() }}
</div>

@endsection