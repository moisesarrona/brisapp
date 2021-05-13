@extends('layouts.error')

@section('error')
    Service Unavailable - 503
@endsection

@section('content')
    <h1>Error 503</h1>
    <h3>Lo sentimos, Servicio no disponible</h3>
    <p>Regresa al sitio indicado</p>
    <a href="/" class="btn">Volver a inicio</a>
@endsection