@extends('layouts.templeate')

@section('content')
    <!-- MAIN CONTENT-->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Proveedor</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-text text-sm-left">
                                    <p>Nombre: {{ $package->name }}</p>
                                    <p>Descuento: {{ $package->discount }}</p>
                                    <p>Invitación: {{ $package->invitation }}</p>
                                    <p>Llave: {{ $package->key }}</p>
                                    <p>Ticket: {{ $package->ticket }}</p>
                                    <p>Precio de Lunes a Miercoles: {{ $package->price_lm }}</p>
                                    <p>Precio de Juves a Viernes: {{ $package->price_jv }}</p>
                                    <p>Precio de Sabado a Domingo: {{ $package->price_sd }}</p>
                                    <p>Precio extras:{{ $package->price_e }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection