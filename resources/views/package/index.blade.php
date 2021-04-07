@extends('layouts.template')

@section('content')
    <!-- Error -->
    @include('components.messages')

    <!-- Contenido Principal -->
    <section class="statistic">
        <div class="section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Paquete</h3>

                        <!-- Buttons -->
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <a href="{{ route ('party.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                    Regresar
                                </a>
                            </div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#add">
                                    <i class="zmdi zmdi-plus"></i>Agregar
                                </button>
                            </div>
                        </div>

                        <!-- Table -->
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
                                    @foreach ($packages as $package)
                                        <tr class="tr-shadow">
                                            <td>{{ $package->name }}</td>
                                            <td>{{ $package->discount }}</td>
                                            <td>{{ $package->invitation }}</td>
                                            <td>{{ $package->key }}</td>
                                            <td>{{ $package->ticket }}</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <!-- Edit -->
                                                    <button class="item" data-toggle="modal" data-target="#edit{{ $package->id }}">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="edit{{ $package->id }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <form action="{{ route('package.update', $package) }}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <!-- Head -->
                                                                    <div class="card-header">
                                                                        <strong>Editar Paquete</strong>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                
                                                                    <!-- Inputs -->
                                                                    <div class="modal-body">
                                                                        <div class="card-body card-block">
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="name" class=" form-control-label">Nombre</label>
                                                                                    <input type="text" id="name" name="name" class="form-control" value="{{ $package->name }}">
                                                                                    @error('name')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                
                                                                                <div class="form-group col-6">
                                                                                    <label for="discount" class=" form-control-label">Descuento en $</label>
                                                                                    <input type="number" id="discount" name="discount" class="form-control" value="{{ $package->discount }}">
                                                                                    @error('discount')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="invitation" class=" form-control-label">Num. de Invitaciones</label>
                                                                                    <input type="number" id="invitation" name="invitation" class="form-control" value="{{ $package->invitation }}">
                                                                                    @error('invitation')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                
                                                                                <div class="form-group col-6">
                                                                                    <label for="key" class=" form-control-label">Num. de Llaves</label>
                                                                                    <input type="number" id="key" name="key" class="form-control" value="{{ $package->key }}">
                                                                                    @error('key')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="ticket" class=" form-control-label">Tickets</label>
                                                                                    <input type="number" id="ticket" name="ticket" class="form-control" value="{{ $package->ticket }}">
                                                                                    @error('ticket')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="price_lm" class=" form-control-label">Precio Lunes - Miercoles</label>
                                                                                    <input type="number" step="0.01"s id="price_lm" name="price_lm" class="form-control" value="{{ $package->price_lm }}">
                                                                                    @error('price_lm')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                
                                                                                <div class="form-group col-6">
                                                                                    <label for="price_jv" class=" form-control-label">Precio Juves - Viernes</label>
                                                                                    <input type="number" step="0.01"s id="price_jv" name="price_jv" class="form-control" value="{{ $package->price_jv }}">
                                                                                    @error('price_jv')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="price_sd" class=" form-control-label">Precio Sabado - Domingo</label>
                                                                                    <input type="number" step="0.01"s id="price_sd" name="price_sd" class="form-control" value="{{ $package->price_sd }}">
                                                                                    @error('price_sd')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                
                                                                                <div class="form-group col-6">
                                                                                    <label for="price_e" class=" form-control-label">Precio extra por niño</label>
                                                                                    <input type="number" step="0.01"s id="price_e" name="price_e" class="form-control" value="{{ $package->price_e }}">
                                                                                    @error('price_e')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
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
                                                    <form action="{{ route('package.destroy', $package) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="item" type="submit">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>

                                                    <!-- More -->
                                                    <a href="{{ route ('package.show', $package) }}" class="item">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $packages->links() }}
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
                <form action="{{ route('package.store') }}" method="post">
                    @csrf
                    <!-- Head -->
                    <div class="card-header">
                        <strong>Agregar Paquete</strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Inputs -->
                    <div class="modal-body">
                        <div class="card-body card-block">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name" class=" form-control-label">Nombre</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                    @error('name')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label for="discount" class=" form-control-label">Descuento en $</label>
                                    <input type="number" id="discount" name="discount" class="form-control">
                                    @error('discount')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="invitation" class=" form-control-label">Num. de Invitaciones</label>
                                    <input type="number" id="invitation" name="invitation" class="form-control">
                                    @error('invitation')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label for="key" class=" form-control-label">Num. de Llaves</label>
                                    <input type="number" id="key" name="key" class="form-control">
                                    @error('key')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="ticket" class=" form-control-label">Tickets</label>
                                    <input type="number" id="ticket" name="ticket" class="form-control">
                                    @error('ticket')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="price_lm" class=" form-control-label">Precio Lunes - Miercoles</label>
                                    <input type="number" step="0.01" id="price_lm" name="price_lm" class="form-control">
                                    @error('price_lm')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label for="price_jv" class=" form-control-label">Precio Juves - Viernes</label>
                                    <input type="number" step="0.01" id="price_jv" name="price_jv" class="form-control">
                                    @error('price_jv')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="price_sd" class=" form-control-label">Precio Sabado - Domingo</label>
                                    <input type="number" step="0.01" id="price_sd" name="price_sd" class="form-control">
                                    @error('price_sd')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label for="price_e" class=" form-control-label">Precio extra por niño</label>
                                    <input type="number" step="0.01" id="price_e" name="price_e" class="form-control">
                                    @error('price_e')
                                        <code>{{ $message }}</code>
                                    @enderror
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