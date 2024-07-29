@extends('layout')

@section('title', 'Registrar servicio')

@section('content')

    <h2>Servicios</h2>
    <table cellpadding="3" cellspacing="5">
        <tr>
            <th colspan="4">Registrar nuevo servicio</th>
        </tr>
        @include('partials.validation-errors')
        <form action="{{ route('servicios.store') }}" method="post" enctype="multipart/form-data">
            @include('partials.form', ['btnText' => 'Guardar'])
        </form>
    </table>
        
@endsection