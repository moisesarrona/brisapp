@extends('layouts.error')

@section('error')
    Forbiden - 403
@endsection

@section('content')
    <h1>Error 403</h1>
    <h3>Lo sentimos, La petición es prohibida</h3>
    <p>Regresa al sitio indicado</p>
    <a href="/" class="btn">Volver a inicio</a>
@endsection