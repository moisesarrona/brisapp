@extends('layouts.template')

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
                                <a href="{{ route('customer.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                    Regresar
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="col-md-5">
                        <div class="top-campaign">
                            <div class="card-body">
                                <div class="mx-auto d-block text-center">
                                    <img class="rounded-circle mx-auto d-block" src=" {{ asset ('assets/images/icon/avatar-big-01.jpg') }} " alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">{{ $customer->name }} {{ $customer->lastname }}</h5>
                                    @if ($customer->status == true)
                                        <span class="badge badge-success text-sm-center">Activo</span>
                                    @else
                                        <span class="badge badge-danger text-sm-center">Inactivo</span>
                                    @endif
                                    <div class="location text-sm-center"> </div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-left">
                                    <h5>{{ $customer->phone }}</h5>
                                    <span class="small">Telefono</span>
                                    <br>
                                    <br>

                                    <h5>{{ $customer->email }}</h5>
                                    <span class="small">Correo</span>
                                    <br>
                                    <br>

                                    <h5>{{ $customer->party()->count() }}</h5>
                                    <span class="small">Fiestas totales</span>
                                    <br>
                                    <br>

                                    <div class="d-flex w-100 text-center">
                                        <div class="w-50">
                                            <h5>{{ $customer->party->where('status', '=', false)->count() }}</h5>
                                            <span class="small">Fiestas en agenda</span>
                                            <br>
                                            <br>
                                        </div>

                                        <div class="w-50">
                                            <h5>{{ $customer->party->where('status', '=', true)->count() }}</h5>
                                            <span class="small">Fiestas Finalizadas</span>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Top -->
                    <div class="col-md-6">
                        <div class="top-campaign">
                            <h3 class="title-3 m-b-30">Fiestas Proximas</h3>
                            <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <tbody>
                                        @foreach ( $customer->party->sortBy('date') as $party)
                                        <tr>
                                            <td>{{ $party->package->name }}</td>
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