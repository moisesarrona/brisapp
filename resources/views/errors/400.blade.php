@extends('layouts.error')

@section('error')
    Bad Request - 400
@endsection

@section('content')
    <h1>Error 400</h1>
    <h3>Lo sentimos, La solicitud es incorrecta</h3>
    <p>Regresa al sitio indicado</p>
    <a href="/" class="btn">Volver a inicio</a>
@endsection