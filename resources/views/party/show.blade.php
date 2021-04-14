@extends('layouts.template')

@section('content')
    <!-- MAIN CONTENT-->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <!-- Buttons -->
                    <div class="col-md-12">
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <a href="{{ route('party.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                    Regresar
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="col-md-8">
                        <div class="top-campaign">
                            <h3 class="title-3 m-b-30">Fiesta No. {{ $party->id }}</h3>
                            <div class="table-responsive">
                                <div class="card-text text-sm-left">
                                    
                                    <h5 class="text-black">
                                        <a href="{{ route('employee.show', $party->customer->id) }}">
                                        @isset($party->customer->name)
                                            {{ $party->customer->name }}
                                        @endisset</a>
                                    </h5>
                                    <span class="small">Cliente</span>
                                    <br>
                                    <br>

                                    <h5>
                                        @isset($party->package->name)
                                            {{ $party->package->name }}
                                        @endisset
                                    </h5>
                                    <span class="small">Paquete</span>
                                    <br>
                                    <br>

                                    <h5>{{ \Carbon\Carbon::parse($party->date)->toFormattedDateString() }}</h5>
                                    <span class="small">Fecha de Evento</span>
                                    <br>
                                    <br>

                                    <h5>{{ $party->kid }}</h5>
                                    <span class="small">Niños Extras</span>
                                    <br>
                                    <br>

                                    <h5>
                                        @if ($party->status == false)
                                            <span class="status--denied">En Agenda</span>
                                        @else
                                            <span class="status--process">Finalizada</span>
                                        @endif
                                    </h5>
                                    <span class="small">Estatus</span>
                                    <br>
                                    <br>

                                    <h5>{{ $party->total }}</h5>
                                    <span class="small">Precio Total</span>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Top -->
                    <div class="col-md-4">
                        <div class="top-campaign">
                            <h3 class="title-3 m-b-30">Fiestas Proximas</h3>
                            <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <tbody>
                                        @foreach ($parties->where('status', '=', false) as $party)
                                        <tr>
                                            <td>{{ $party->customer->name }}</td>
                                            <td>
                                                <a href="{{ route('party.show', $party) }}">
                                                    {{ \Carbon\Carbon::parse($party->date)->toFormattedDateString() }}
                                                </a>
                                                <br>
                                                @if (Carbon\Carbon::parse($party->date)->format('d-m-Y h') == Carbon\Carbon::parse($now)->format('d-m-Y h'))
                                                    <span class="status--denied"><small>Hoy se festeja</small></span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection