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
                                <a href="{{ route('package.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
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
                                <strong class="card-title mb-3">Paquete</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-text text-sm-left">
                                    <h5>{{ $package->name }}</h5>
                                    <span class="small">Paquete</span>
                                    <br>

                                    <h5>{{ $package->discount }}</h5>
                                    <span class="small">Decuento</span>
                                    <br>

                                    <h5>{{ $package->invitation }}</h5>
                                    <span class="small">Invitacion</span>
                                    <br>

                                    <h5>{{ $package->key }}</h5>
                                    <span class="small">Llave</span>
                                    <br>

                                    <h5>{{ $package->ticket }}</h5>
                                    <span class="small">Ticket</span>
                                    <br>

                                    <h5>{{ $package->price_lm }}</h5>
                                    <span class="small">Precio Lunes-Miercoles</span>
                                    <br>

                                    <h5>{{ $package->price_jv }}</h5>
                                    <span class="small">Precio Jueves - Viernes</span>
                                    <br>

                                    <h5>{{ $package->price_sd }}</h5>
                                    <span class="small">Precio Sabado - Domingo</span>
                                    <br>

                                    <h5>{{ $package->price_e }}</h5>
                                    <span class="small">Precio Extra</span>
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