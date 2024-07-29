@extends('layout')

@section('content')
    
    <div class="row">
        <h2>Servicios</h2>
        <tr>
            @auth
                <td colspan="4">
                    <a href=" {{ route('servicios.create') }} ">Nuevo Servicio</a>
                </td>
            @endauth
        </tr>
    </div>
    <br>
    <table>       
        @if($servicios)
            @php 
                $currentPage = $servicios->currentPage();
                $perPage = $servicios->perPage();
                $contador = ($currentPage - 1) * $perPage + 1;
            @endphp
            @foreach($servicios as $servicio)
            <tr>
                <td style="border: 1px solid #000; padding: 10px;">{{ $contador }}</td>
                <td>
                    @if($servicio->image!=null)
                        <img src="/storage/{{ $servicio->image }}" alt ="{{ $servicio->titulo }} width="50" height="50">
                    @endif
                </td>
                <td style="border: 1px solid #000; padding: 10px;" colspan="4">
                    <a href="{{ route('servicios.show', $servicio) }}">{{ $servicio->titulo }} </a>                         
                </td>
            </tr>
            @php $contador++; @endphp
            @endforeach
        @else
            <p>No existe ningun servicio que mostar</p>
        @endif        
    </table>
    <br>
    <tr>
        <td colspan="1">
            <div class="pagination pagination-sm pagination-custom .page-link">
            {{$servicios->links()}}
            </div>
        </td>
    </tr>
@endsection