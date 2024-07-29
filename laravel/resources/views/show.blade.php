@extends('layout')

@section('title', 'Servicio | ' . $servicio->titulo)

@section('content')

<h2>DETALLE v2.0</h2>
<div class="container mt-4">
    <div class="card mx-auto" style="max-width: 33%;">
        <div class="card-header">
            <h2 class="h5">{{ $servicio->titulo }}</h2>
        </div>
        <div class="card-body">
            @if($servicio->image)
            <div class="text-center mb-3">
                <img src="/storage/{{ $servicio->image }}" alt="{{ $servicio->titulo }}" class="img-fluid">
            </div>
            @endif
            <p class="card-text">{{ $servicio->descripcion }}</p>
            <p class="text-muted">Publicado: {{ $servicio->created_at->diffForHumans() }}</p>
            @auth
            <div class="d-flex justify-content-between">
                <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-primary btn-sm">Editar</a>
                <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>
            @endauth
        </div>
    </div>
</div> 

<h2>DETALLE v1.0</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Título</th>           
            <th>Descripción</th>
            <th>Fecha Creación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                @if($servicio->image)
                    <img src="/storage/{{ $servicio->image }}" alt="{{ $servicio->titulo }}" height="50" >
                @endif
                {{ $servicio->titulo }}
            </td>
            <td>
                {{ $servicio->descripcion }}
            </td>
            <td>
                {{ $servicio->created_at->diffForHumans() }}
            </td>
            <td>
                @auth
                    <div style="text-align: center;">
                        <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-primary btn-sm" style="margin-right: 10px;">Editar</a>
                        <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                @endauth
            </td>
        </tr>
    </tbody>
</table>

@endsection
