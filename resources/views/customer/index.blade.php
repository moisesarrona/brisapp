@extends('layouts.templeate')

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
                        <h3 class="title-5 m-b-35">Cliente</h3>

                        <!-- Buttons -->
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                
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
                                        <th>Cliente</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Estatus</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr class="tr-shadow">
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->lastname }}</td>
                                            <td>
                                                <span class="block-email">{{ $customer->email }}</span>
                                            </td>
                                            <td>{{ $customer->phone }}</td>
                                            <td>
                                                @if ($customer->status == true)
                                                    <span class="status--process">Activo</span>
                                                @else
                                                    <span class="status--denied">Inactivo</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <!-- Edit -->
                                                    <button class="item" data-toggle="modal" data-target="#edit{{ $customer->id }}">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="edit{{ $customer->id }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <form action="{{ route('customer.update', $customer) }}" method="POST">
                                                                    @csrf
                                                                    @method('put')
                                                                    <!-- Head -->
                                                                    <div class="card-header">
                                                                        <strong>Editar Cliente</strong>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                
                                                                    <!-- Inputs -->
                                                                    <div class="modal-body">
                                                                        <div class="card-body card-block">
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="name" class=" form-control-label">Cliente</label>
                                                                                    <input type="text" id="name" name="name" class="form-control" value="{{ $customer->name }}">
                                                                                    @error('name')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                
                                                                                <div class="form-group col-6">
                                                                                    <label for="lastname" class=" form-control-label">Apellido</label>
                                                                                    <input type="text" id="lastname" name="lastname" class="form-control" value="{{ $customer->lastname }}">
                                                                                    @error('lastname')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="email" class=" form-control-label">Correo</label>
                                                                                    <input type="email" id="email" name="email" class="form-control" value="{{ $customer->email }}">
                                                                                    @error('email')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                
                                                                                <div class="form-group col-6">
                                                                                    <label for="phone" class=" form-control-label">Telefono</label>
                                                                                    <input type="tel" id="phone" name="phone" class="form-control" value="{{ $customer->phone }}">
                                                                                    @error('phone')
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
                                                    <form action="{{ route('customer.destroy', $customer) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="item" type="submit">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>

                                                    <!-- More -->
                                                    <a href="{{ route ('customer.show', $customer) }}" class="item">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $customers->links() }}
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
                <form action="{{ route('customer.store') }}" method="POST">
                    @csrf
                    <!-- Head -->
                    <div class="card-header">
                        <strong>Agregar Cliente</strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Inputs -->
                    <div class="modal-body">
                        <div class="card-body card-block">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name" class=" form-control-label">Cliente</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                    @error('name')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label for="lastname" class=" form-control-label">Apellido</label>
                                    <input type="text" id="lastname" name="lastname" class="form-control">
                                    @error('lastname')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="email" class=" form-control-label">Correo</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                    @error('email')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label for="phone" class=" form-control-label">Telefono</label>
                                    <input type="tel" id="phone" name="phone" class="form-control">
                                    @error('phone')
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