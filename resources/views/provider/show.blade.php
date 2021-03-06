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
                                    <p>Razón Social: {{ $provider->business_n }}</p>
                                    <p>RFC: {{ $provider->rfc }}</p>
                                    <p>Correo: {{ $provider->email }}</p>
                                    <p>Telefono: {{ $provider->phone }}</p>
                                    <p>Estatus: {{ $provider->status }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection