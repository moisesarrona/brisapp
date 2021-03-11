@extends('layouts.templeate')

@section('content')
    <!-- MAIN CONTENT-->
    <section class="statistic">
        <div class="section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Fiestas</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="table-data__tool-left">
                                    <div class="table-data__tool-left">
                                        <a href="{{ route('package.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                            Paquete
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#add">
                                    <i class="zmdi zmdi-plus"></i>Agregar
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Paquete</th>
                                        <th>Fecha del evento</th>
                                        <th>Niños</th>
                                        <th>Estatus</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parties as $party)
                                        <tr class="tr-shadow">
                                            <td>{{ $party->customer->name }}</td>
                                            <td>{{ $party->package->name }}</td>
                                            <td>{{ $party->date }}</td>
                                            <td>{{ $party->kid }}</td>
                                            <td>
                                                @if ($party->status == 1)
                                                    <span class="status--process">{{ $party->status }}</span>
                                                @else
                                                    <span class="status--denied">{{ $party->status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <!-- Edit -->
                                                    <button class="item" data-toggle="modal" data-target="#edit{{ $party->id }}">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="edit{{ $party->id }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <form action="{{ route('party.update', $party) }}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <!-- Head -->
                                                                    <div class="card-header">
                                                                        <strong>Agregar Fiesta</strong>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                
                                                                    <!-- Inputs -->
                                                                    <div class="modal-body">
                                                                        <div class="card-body card-block">
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="customer_id" class=" form-control-label">Cliente</label>
                                                                                    <div>
                                                                                        <select name="customer_id" id="customer_id" class="form-control">
                                                                                            @foreach ($customers as $customer)
                                                                                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-6">
                                                                                    <label for="package_id" class=" form-control-label">Paquete</label>
                                                                                    <div>
                                                                                        <select name="package_id" id="package_id" class="form-control">
                                                                                            @foreach ($packages as $package)
                                                                                            <option value="{{ $package->id }}">{{ $package->name }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="date" class=" form-control-label">Fecha</label>
                                                                                    <input type="date" id="date" name="date" class="form-control" value="{{ $party->date }}">
                                                                                </div>

                                                                                <div class="form-group col-6">
                                                                                    <label for="kid" class=" form-control-label">Numero de Niños</label>
                                                                                    <input type="number" id="kid" name="kid" class="form-control" value="{{ $party->kid }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                
                                                                    <!-- Buttons -->
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" class="btn btn-success">Guardar</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Delete -->
                                                    <form action="{{ route('party.destroy', $party) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="item" type="submit">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>

                                                    <!-- More -->
                                                    <a href="{{ route ('party.show', $party) }}" class="item">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Add -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="{{ route('party.store') }}" method="post">
                    @csrf
                    <!-- Head -->
                    <div class="card-header">
                        <strong>Agregar Fiesta</strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Inputs -->
                    <div class="modal-body">
                        <div class="card-body card-block">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="customer_id" class=" form-control-label">Cliente</label>
                                    <div>
                                        <select name="customer_id" id="customer_id" class="form-control">
                                            @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label for="package_id" class=" form-control-label">Paquete</label>
                                    <div>
                                        <select name="package_id" id="package_id" class="form-control">
                                            @foreach ($packages as $package)
                                            <option value="{{ $package->id }}">{{ $package->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="date" class=" form-control-label">Fecha</label>
                                    <input type="date" id="date" name="date" class="form-control">
                                </div>
                                <div class="form-group col-6">
                                    <label for="kid" class=" form-control-label">Numero de Niños</label>
                                    <input type="number" id="kid" name="kid" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection