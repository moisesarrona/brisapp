@extends('layouts.templeate')

@section('content')
    <!-- MAIN CONTENT-->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Paquete</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                
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
                                        <th>Nombre</th>
                                        <th>Descuento</th>
                                        <th>Numero de Invitaciones</th>
                                        <th>Numero de llaves</th>
                                        <th>Tickets</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr-shadow">
                                        <td>Moises</td>
                                        <td>Arrona</td>
                                        <td>9 de Marzo</td>
                                        <td>Masculino</td>
                                        <td>Holaaa</td>
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
                    <strong>Agregar Paquete</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="card-body card-block">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="name" class=" form-control-label">Nombre</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>

                            <div class="form-group col-6">
                                <label for="discount" class=" form-control-label">Descuento</label>
                                <input type="number" id="discount" name="discount" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="invitation" class=" form-control-label">Num. de Invitaciones</label>
                                <input type="number" id="invitation" name="invitation" class="form-control">
                            </div>

                            <div class="form-group col-6">
                                <label for="key" class=" form-control-label">Num. de Llaves</label>
                                <input type="number" id="key" name="key" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="ticket" class=" form-control-label">Tickets</label>
                                <input type="number" id="ticket" name="ticket" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="price_lm" class=" form-control-label">Precio Lunes - Miercoles</label>
                                <input type="number" id="price_lm" name="price_lm" class="form-control">
                            </div>

                            <div class="form-group col-6">
                                <label for="price_jv" class=" form-control-label">Precio Juves - Viernes</label>
                                <input type="number" id="price_jv" name="price_jv" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="price_sd" class=" form-control-label">Precio Sabado - Domingo</label>
                                <input type="number" id="price_sd" name="price_sd" class="form-control">
                            </div>

                            <div class="form-group col-6">
                                <label for="price-e" class=" form-control-label">Precio extra por niño</label>
                                <input type="number" id="price-e" name="price-e" class="form-control">
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