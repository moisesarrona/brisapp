@extends('layouts.template')

@section('content')
    <!-- Contenido Principal -->
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
                        <div class="top-campaign">
                            <h3 class="title-3 m-b-30">Paquete</h3>
                            <div class="table-responsive">
                                <div class="card-text text-sm-left">
                                    <h5>{{ $package->name }}</h5>
                                    <span class="small">Paquete</span>
                                    <br>
                                    <br>

                                    <h5>{{ $package->discount }}</h5>
                                    <span class="small">Decuento</span>
                                    <br>
                                    <br>

                                    <h5>{{ $package->invitation }}</h5>
                                    <span class="small">Invitacion</span>
                                    <br>
                                    <br>

                                    <h5>{{ $package->key }}</h5>
                                    <span class="small">Llave</span>
                                    <br>
                                    <br>

                                    <h5>{{ $package->ticket }}</h5>
                                    <span class="small">Ticket</span>
                                    <br>
                                    <br>

                                    <h5>{{ $package->price_lm }}</h5>
                                    <span class="small">Precio Lunes-Miercoles</span>
                                    <br>
                                    <br>

                                    <h5>{{ $package->price_jv }}</h5>
                                    <span class="small">Precio Jueves - Viernes</span>
                                    <br>
                                    <br>

                                    <h5>{{ $package->price_sd }}</h5>
                                    <span class="small">Precio Sabado - Domingo</span>
                                    <br>
                                    <br>

                                    <h5>{{ $package->price_e }}</h5>
                                    <span class="small">Precio Extra</span>
                                    <br>
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