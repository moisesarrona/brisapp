@extends('layouts.templeate')

@section('content')
    <!-- MAIN CONTENT-->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Proveedores</h3>
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
                                        <th>Razón Social</th>
                                        <th>RFC</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr-shadow">
                                        <td>InnovaIcon</td>
                                        <td>7835467845498</td>
                                        <td>
                                            <span class="block-email">lori@example.com</span>
                                        </td>
                                        <td>4771218650</td>
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
                    <strong>Agregar Proveedor</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="card-body card-block">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="business_n" class=" form-control-label">Razón Social</label>
                                <input type="text" id="business_n" name="business_n" class="form-control">
                            </div>

                            <div class="form-group col-6">
                                <label for="rfc" class=" form-control-label">RFC</label>
                                <input type="text" id="rfc" name="rfc" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="email" class=" form-control-label">Correo</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label for="phone" class=" form-control-label">Telefono</label>
                                <input type="tel" id="phone" name="phone" class="form-control">
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