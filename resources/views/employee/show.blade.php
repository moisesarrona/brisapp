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
                                <a href="{{ route('employee.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
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
                            <div class="card-body">
                                <div class="mx-auto d-block text-center">
                                    <img class="rounded-circle mx-auto d-block" src=" {{ asset ('assets/images/icon/avatar-big-01.jpg') }} " alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">{{ $employee->name }} {{ $employee->lastname }}</h5>
                                    @if ($employee->status == true)
                                        <span class="badge badge-success text-sm-center">Activo</span>
                                    @else
                                        <span class="badge badge-danger text-sm-center">Inactivo</span>
                                    @endif
                                    <div class="location text-sm-center">
                                </div>
                                <hr>
                                <div class="card-text text-sm-left">
                                    <h5>{{ $employee->birthdate }}</h5>
                                    <span class="small">Fecha de nacimiento</span>
                                    <br>

                                    <h5>{{ $employee->sex }}</h5>
                                    <span class="small">Sexo</span>
                                    <br>

                                    <h5>{{ $employee->phone }}</h5>
                                    <span class="small">Telefono</span>
                                    <br>

                                    <h5>{{ $employee->email }}</h5>
                                    <span class="small">Correo</span>
                                    <br>

                                    <h5>{{ $employee->salary->salary }}</h5>
                                    <span class="small">Salario</span>
                                    <br>

                                    <h5>{{ $employee->address }}</h5>
                                    <span class="small">Domicilio</span>
                                    <br>

                                    <h5>{{ $employee->nss }}</h5>
                                    <span class="small">NSS</span>
                                    <br>

                                    <h5>{{ $employee->curp }}</h5>
                                    <span class="small">CURP</span>
                                    <br>

                                    <h5>{{ $employee->marital_s }}</h5>
                                    <span class="small">Estado Civil</span>
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