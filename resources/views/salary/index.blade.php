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
                        <!-- Data Table -->
                        <h3 class="title-5 m-b-35">Salario</h3>
                        <!-- Buttons -->
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <a href="{{ route('employee.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
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
                                        <th>Puesto</th>
                                        <th>Salario</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($salaries as $salary)
                                        <tr class="tr-shadow">
                                            <td>{{ $salary->name }}</td>
                                            <td>{{ $salary->salary }}</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <!-- Edit -->
                                                    <button class="item" data-toggle="modal" data-target="#edit{{ $salary->id }}">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="edit{{ $salary->id }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <form action="{{ route('salary.update', $salary) }}" method="post">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <!-- Head -->
                                                                    <div class="card-header">
                                                                        <strong>Editar Salario</strong>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- Inputs -->
                                                                    <div class="modal-body">
                                                                        <div class="card-body card-block">
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="name" class=" form-control-label">Puesto</label>
                                                                                    <input type="text" id="name" name="name" class="form-control" value="{{ $salary->name }}">
                                                                                    @error('name')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                    
                                                                                <div class="form-group col-6">
                                                                                    <label for="salary" class=" form-control-label">Salario al mes</label>
                                                                                    <input type="number" id="salary" name="salary" class="form-control" value="{{ $salary->salary }}">
                                                                                    @error('name')
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
                                                    <form action="{{ route('salary.destroy', $salary) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="item" type="submit">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>

                                                    <!-- More -->
                                                    <a href="{{ route ('salary.show', $salary) }}" class="item">
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
                <form action="{{ route('salary.store') }}" method="post">
                    @csrf
                    <!-- Head -->
                    <div class="card-header">
                        <strong>Agregar Salario</strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Inputs -->
                    <div class="modal-body">
                        <div class="card-body card-block">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name" class=" form-control-label">Puesto</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                    @error('name')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>
    
                                <div class="form-group col-6">
                                    <label for="salary" class=" form-control-label">Salario al mes</label>
                                    <input type="number" id="salary" name="salary" class="form-control">
                                    @error('salary')
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