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
                                <a href="{{ route('employee.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                    Regresar
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Information -->
                    <div class="col-md-6">
                        <div class="top-campaign">
                            <div class="table-responsive">
                                <div class="mx-auto d-block text-center">
                                    <h5 class="text-sm-center mt-2 mb-1">{{ $employee->name }} {{ $employee->lastname }}</h5>
                                    @if ($employee->status == true)
                                        <span class="badge badge-success text-sm-center">Activo</span>
                                    @else
                                        <span class="badge badge-danger text-sm-center">Inactivo</span>
                                    @endif
                                    <div class="location text-sm-center"></div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-left">
                                    <div class="d-flex">
                                        <div class="w-50 text-left">
                                            <h5>{{ $employee->birthdate }}</h5>
                                            <span class="small">Fecha de nacimiento</span>
                                            <br>
                                            <br>
                                        </div>

                                        <div class="w-50 text-right">
                                            <h5>{{ $employee->sex }}</h5>
                                            <span class="small">Sexo</span>
                                            <br>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="w-50 text-left">
                                            <h5>{{ $employee->nss }}</h5>
                                            <span class="small">NSS</span>
                                            <br>
                                            <br>
                                        </div>
                                        <div class="w-50 text-right">
                                            <h5>{{ $employee->curp }}</h5>
                                            <span class="small">CURP</span>
                                            <br>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="w-50 text-left">
                                            <h5>{{ $employee->salary->salary }}</h5>
                                            <span class="small">Salario</span>
                                            <br>
                                            <br>
                                        </div>

                                        <div class="w-50 text-right">
                                            <h5>{{ $employee->marital_s }}</h5>
                                            <span class="small">Estado Civil</span>
                                            <br>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="w-50 text-left">
                                            <h5>{{ $employee->phone }}</h5>
                                            <span class="small">Telefono</span>
                                            <br>
                                            <br>
                                        </div>
                                        <div class="w-50 text-right">
                                            <h5>{{ $employee->email }}</h5>
                                            <span class="small">Correo</span>
                                            <br>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <h5>{{ $employee->address }}</h5>
                                        <span class="small">Domicilio</span>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Top -->
                    <div class="col-md-6">
                        <div class="top-campaign">
                            <h3 class="title-3 m-b-30">Nominas del empleado</h3>
                            <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <tbody>
                                        @foreach ($payrolls->sortBy('date') as $payroll)
                                        <tr>
                                            <td>
                                                <a href=" {{ route('employee.showpay', $payroll) }}">
                                                    {{ \Carbon\Carbon::parse($payroll->date)->toFormattedDateString() }}
                                                </a>
                                            </td>
                                            <td>${{ $payroll->total }}</td>
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