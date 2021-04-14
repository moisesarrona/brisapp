@extends('layouts.template')

@section('content')
    <!-- Error -->
    @include('components.messages')

    <!-- MAIN CONTENT-->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                
                <div class="row">
                    <!-- Buttons -->
                    <div class="col-md-12">
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <a href="{{ route('employee.show', $payroll->employee->id) }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                    Regresar
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- PayRoll -->
                    <div class="col-md-8 offset-md-2">
                        <div class="user-data m-b-30">
                            <h3 class="title-3 m-b-30">
                                <i class="zmdi zmdi-account-calendar"></i>Recibo de Nomina</h3>
                            <div class="table-responsive table-data">
                                <table class="table">
                                    <tbody>
                                        <!-- Company -->
                                        <tr>
                                            <td class="w-50">
                                                <div class="table-data__info pb-4">
                                                    <h6>Enjoy de S.A de C.V</h6>
                                                    <span>
                                                        <a href="#">Compañia</a>
                                                    </span>
                                                </div>

                                                <div class="table-data__info pb-4">
                                                    <h6>ENJOY713985</h6>
                                                    <span>
                                                        <a href="#">RFC</a>
                                                    </span>
                                                </div>
                                            </td>

                                            <td class="w-50">
                                                <div class="table-data__info pb-4">
                                                    <h6>Centro Max, Blvd. Adolfo López Mateos 2518</h6>
                                                    <span>
                                                        <a href="#">Dirección</a>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Employee -->
                                        <tr>
                                            <td class="w-50">
                                                <div class="table-data__info pb-4">
                                                    <h6>{{ $payroll->employee->name . ' ' . $payroll->employee->lastname }}</h6>
                                                    <span>
                                                        <a href="#">Nombre</a>
                                                    </span>
                                                </div>

                                                <div class="table-data__info pb-4">
                                                    <h6>{{ $payroll->employee->curp }}</h6>
                                                    <span>
                                                        <a href="#">CURP</a>
                                                    </span>
                                                </div>

                                                <div class="table-data__info pb-4">
                                                    <h6>{{ $payroll->employee->nss }}</h6>
                                                    <span>
                                                        <a href="#">NSS</a>
                                                    </span>
                                                </div>
                                            </td>

                                            <td class="w-50">
                                                <div class="table-data__info pb-4">
                                                    <h6>
                                                        @isset($payroll->employee->salary->salary)
                                                        {{ $payroll->employee->salary->salary }}
                                                        @endisset
                                                    </h6>
                                                    <span>
                                                        <a href="#">Salario por Hora</a>
                                                    </span>
                                                </div>

                                                <div class="table-data__info pb-4">
                                                    <h6>{{ $payroll->hours }}</h6>
                                                    <span>
                                                        <a href="#">Horas Trabajadas</a>
                                                    </span>
                                                </div>

                                                <div class="table-data__info pb-4">
                                                    <h6>{{ \Carbon\Carbon::parse($payroll->date)->toFormattedDateString() }}</h6>
                                                    <span>
                                                        <a href="#">Fecha de Pago</a>
                                                    </span>
                                                </div>

                                                <div class="table-data__info pb-4">
                                                    <h6>{{ $payroll->total }}</h6>
                                                    <span>
                                                        <a href="#">Total pagado</a>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="user-data__footer">
                                    <button class="au-btn au-btn-load">
                                        <i class="zmdi zmdi-print"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection