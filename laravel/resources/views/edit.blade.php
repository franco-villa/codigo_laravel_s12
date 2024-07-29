@extends('layout')

@section('title', 'Editar Servicio')

@section('content')

    <h2>Servicios</h2>
    <table cellpadding="3" cellspacing="5">
        <tr>
            @auth
                <img src="/storage/{{ $servicio->image}}" alt="{{ $servicio->titulo }}" width="300" >
                <th colspan="4">Edita los campos que necesites: </th>
            @endauth
        </tr>
        @include('partials.validation-errors')
        <form action="{{ route('servicios.update', $servicio) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @include('partials.form', ['btnText' => 'Actualizar'])
        </form>
    </table>
        
@endsection