@extends('layouts.templeate')

@section('content')
    <!-- MAIN CONTENT-->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Producto</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="table-data__tool-left">
                                    <button class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                        Proveedor
                                    </button>
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
                                        <th>Producto</th>
                                        <th>Codigo</th>
                                        <th>Precio</th>
                                        <th>Existencia</th>
                                        <th>Descripcion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr-shadow">
                                        <td>Producto</td>
                                        <td>2333</td>
                                        <td>5</td>
                                        <td>sfgrg866</td>
                                        <td>khgfiyreqfh fhgwreyf hfgreygf hsd geigfkjr</td>
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
                    <strong>Agregar Producto</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="card-body card-block">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="name" class=" form-control-label">Producto</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>

                            <div class="form-group col-6">
                                <label for="code" class=" form-control-label">Codigo</label>
                                <input type="text" id="code" name="code" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="price" class=" form-control-label">Precio</label>
                                <input type="number" id="price" name="price" class="form-control">
                            </div>

                            <div class="form-group col-6">
                                <label for="amount" class=" form-control-label">Existencia</label>
                                <input type="number" id="amount" name="amount" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="provider_id" class=" form-control-label">Proveedor</label>
                                <div>
                                    <select name="provider_id" id="provider_id" class="form-control">
                                        <option value="0">Selecciona</option>
                                        <option value="1">Proveedor</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-12">
                                <label for="textarea-input" class=" form-control-label">Descripcion</label>
                                <div class="">
                                    <textarea name="textarea-input" id="textarea-input" rows="5" placeholder="Content..." class="form-control"></textarea>
                                </div>
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