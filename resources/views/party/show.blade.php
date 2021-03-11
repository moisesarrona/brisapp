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
                                <strong class="card-title mb-3">Fiesta</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-text text-sm-left">
                                    <h5>{{ $party->customer->name }}</h5>
                                    <span class="small">Cliente</span>
                                    <br>

                                    <h5>{{ $party->package->name }}</h5>
                                    <span class="small">Paquete</span>
                                    <br>

                                    <h5>{{ $party->date }}</h5>
                                    <span class="small">Fecha de evento</span>
                                    <br>

                                    <h5>{{ $party->kid }}</h5>
                                    <span class="small">Niños </span>
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