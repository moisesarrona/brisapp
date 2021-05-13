@extends('layouts.error')

@section('error')
    Internal Server Error - 500
@endsection

@section('content')
    <h1>Error 500</h1>
    <h3>Lo sentimos, Error en el servidor, intentalo mas tarde</h3>
    <p>Regresa al sitio indicado</p>
    <a href="/" class="btn">Volver a inicio</a>
@endsection