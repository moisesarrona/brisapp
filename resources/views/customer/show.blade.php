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
                                <a href="{{ route('customer.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
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
                                <strong class="card-title mb-3">Cliente</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block text-center">
                                    <img class="rounded-circle mx-auto d-block" src=" {{ asset ('assets/images/icon/avatar-big-01.jpg') }} " alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">{{ $customer->name }} {{ $customer->lastname }}</h5>
                                    @if ($customer->status == true)
                                        <span class="badge badge-success text-sm-center">Activo</span>
                                    @else
                                        <span class="badge badge-danger text-sm-center">Inactivo</span>
                                    @endif
                                    <div class="location text-sm-center">
                                </div>
                                <hr>
                                <div class="card-text text-sm-left">
                                    <h5>{{ $customer->phone }}</h5>
                                    <span class="small">Telefono</span>
                                    <br>

                                    <h5>{{ $customer->email }}</h5>
                                    <span class="small">Correo</span>
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