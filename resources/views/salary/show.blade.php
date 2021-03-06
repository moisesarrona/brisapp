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
                                <strong class="card-title mb-3">Salario</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-text text-sm-left">
                                    <p>Puesto: {{ $salary->name }}</p>
                                    <p>Salario: {{ $salary->salary }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection