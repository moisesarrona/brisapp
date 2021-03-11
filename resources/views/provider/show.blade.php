@extends('layouts.templeate')

@section('content')
    <!-- MAIN CONTENT-->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <!-- Buttons -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <a href="{{ route('provider.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                    Regresar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Information -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Proveedor</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-text text-sm-left">
                                    <h5>{{ $provider->business_n }}</h5>
                                    <span class="small">Razón Social</span>
                                    <br>

                                    <h5>{{ $provider->rfc }}</h5>
                                    <span class="small">RFC</span>
                                    <br>

                                    <h5>{{ $provider->email }}</h5>
                                    <span class="small">Correo</span>
                                    <br>

                                    <h5>{{ $provider->phone }}</h5>
                                    <span class="small">Telefono</span>
                                    <br>

                                    <h5>{{ $provider->status }}</h5>
                                    <span class="small">Status</span>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection