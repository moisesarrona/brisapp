@extends('layouts.templeate')

@section('content')
    <!-- Contenido Principal -->
    <section class="statistic">
        <div class="section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Proveedores</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <a href="{{ URL::previous() }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                    Regresar
                                </a>
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
                                    @foreach ($providers as $provider)
                                        <tr class="tr-shadow">
                                            <td>{{ $provider->business_n }}</td>
                                            <td>{{ $provider->rfc }}</td>
                                            <td>
                                                <span class="block-email">{{ $provider->email }}</span>
                                            </td>
                                            <td>{{ $provider->phone }}</td>
                                            <td>
                                                <span class="status--process">{{ $provider->status }}</span>
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <!-- Edit -->
                                                    <button class="item" data-toggle="modal" data-target="#edit{{ $provider->id }}">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="edit{{ $provider->id }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <form action="{{ route('provider.update', $provider) }}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <!-- Head -->
                                                                    <div class="card-header">
                                                                        <strong>Agregar Proveedor</strong>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                    
                                                                    <!-- Inputs -->
                                                                    <div class="modal-body">
                                                                        <div class="card-body card-block">
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="business_n" class=" form-control-label">Razón Social</label>
                                                                                    <input type="text" id="business_n" name="business_n" class="form-control" value="{{ $provider->business_n }}">
                                                                                </div>
                                                    
                                                                                <div class="form-group col-6">
                                                                                    <label for="rfc" class=" form-control-label">RFC</label>
                                                                                    <input type="text" id="rfc" name="rfc" class="form-control" value="{{ $provider->rfc }}">
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="email" class=" form-control-label">Correo</label>
                                                                                    <input type="email" id="email" name="email" class="form-control" value="{{ $provider->email }}">
                                                                                </div>
                                                                                <div class="form-group col-6">
                                                                                    <label for="phone" class=" form-control-label">Telefono</label>
                                                                                    <input type="tel" id="phone" name="phone" class="form-control" value="{{ $provider->phone}}">
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
                                                    <form action="{{ route('provider.destroy', $provider) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="item" type="submit">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>

                                                    <!-- More -->
                                                    <a href="{{ route ('provider.show', $provider) }}" class="item">
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
                <form action="{{ route('provider.store') }}" method="post">
                    @csrf
                    <!-- Head -->
                    <div class="card-header">
                        <strong>Agregar Proveedor</strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <!-- Inputs -->
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