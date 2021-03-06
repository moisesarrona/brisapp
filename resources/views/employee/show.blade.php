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
                                <strong class="card-title mb-3">Empleado</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src=" {{ asset ('assets/images/icon/avatar-big-01.jpg') }} " alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                    <div class="location text-sm-center">
                                        <i class="fa fa-map-marker"></i> California, United States</div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-left">
                                    <p>Nombre: {{ $employee->name }}</p>
                                    <p>Apellido: {{ $employee->lastname }}</p>
                                    <p>Fecha de nacimiento: {{ $employee->birthdate }}</p>
                                    <p>Sexo: {{ $employee->sex }}</p>
                                    <p>Telefono: {{ $employee->phone }}</p>
                                    <p>Correo: {{ $employee->email }}</p>
                                    <p>Salario: {{ $employee->salary->salary }}</p>
                                    <p>Domicilio: {{ $employee->address }}</p>
                                    <p>NSS: {{ $employee->nss }}</p>
                                    <p>Curp: {{ $employee->curp }}</p>
                                    <p>Estado Civil: {{ $employee->mariel_s }}</p>
                                    <p>Estatus: {{ $employee->status }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection