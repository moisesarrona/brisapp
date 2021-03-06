@extends('layouts.templeate')

@section('content')
    <!-- MAIN CONTENT-->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Fiestas</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="table-data__tool-left">
                                    <div class="table-data__tool-left">
                                        <button class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                            Paquete
                                        </button>
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
                                    <tr class="tr-shadow">
                                        <td>Moises</td>
                                        <td>Primero</td>
                                        <td>9 de Marzo</td>
                                        <td>5</td>
                                        <td>
                                            <span class="status--process">Activo</span>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                    <i class="zmdi zmdi-more"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- modal medium -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="card-header">
                    <strong>Agregar Fiesta</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="card-body card-block">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="customer_id" class=" form-control-label">Cliente</label>
                                <div>
                                    <select name="customer_id" id="customer_id" class="form-control">
                                        <option value="0">Selecciona</option>
                                        <option value="1">Cliente</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="package_id" class=" form-control-label">Paquete</label>
                                <div>
                                    <select name="package_id" id="package_id" class="form-control">
                                        <option value="0">Selecciona</option>
                                        <option value="1">Paquete</option>
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
                                <label for="kid" class=" form-control-label">Niños</label>
                                <input type="number" id="kid" name="kid" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endsection