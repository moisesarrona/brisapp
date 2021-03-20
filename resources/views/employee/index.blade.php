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
                        <h3 class="title-5 m-b-35">Empleados</h3>

                        <!-- Buttons -->
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <a href="{{ route('salary.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                    Salarios
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
                                        <th>Apellidos</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Sexo</th>
                                        <th>Estatus</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr class="tr-shadow">
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ $employee->lastname }}</td>
                                            <td>{{ $employee->birthdate }}</td>
                                            <td>{{ $employee->sex }}</td>
                                            <td>
                                                @if ($employee->status == true)
                                                    <span class="status--process">Actrivo</span>
                                                @else
                                                    <span class="status--denied">Inactivo</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <!-- Edit -->
                                                    <button class="item" data-toggle="modal" data-target="#edit{{ $employee->id }}">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="edit{{ $employee->id }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <form action="{{ route('employee.update', $employee) }}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <!-- Head -->
                                                                    <div class="card-header">
                                                                        <strong>Editar Empleado</strong>
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
                                                                                    <input type="text" id="name" name="name" class="form-control" value="{{ $employee->name }}">
                                                                                    @error('name')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                    
                                                                                <div class="form-group col-6">
                                                                                    <label for="lastname" class=" form-control-label">Apellido</label>
                                                                                    <input type="text" id="lastname" name="lastname" class="form-control" value="{{ $employee->lastname }}">
                                                                                    @error('lastname')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                    
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="birthdate" class=" form-control-label">Fecha de Nacimiento</label>
                                                                                    <input type="date" id="birthdate" name="birthdate" class="form-control" value="{{ $employee->birthdate }}">
                                                                                    @error('birthdate')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>

                                                                                <div class="form-group col-6">
                                                                                    <label for="sex" class=" form-control-label">Sexo</label>
                                                                                    <div>
                                                                                        <select name="sex" id="sex" class="form-control">
                                                                                            <option value="true">Seleciona el Sexo</option>
                                                                                            <option value="Masculino">Masculino</option>
                                                                                            <option value="Femenino">Femenino</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    @error('sex')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="phone" class=" form-control-label">Telefono</label>
                                                                                    <input type="tel" id="phone" name="phone" class="form-control" value="{{ $employee->phone }}">
                                                                                    @error('phone')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>

                                                                                <div class="form-group col-6">
                                                                                    <label for="email" class=" form-control-label">Correo</label>
                                                                                    <input type="email" id="email" name="email" class="form-control" value="{{ $employee->email }}">
                                                                                    @error('email')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                    
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="salary_id" class=" form-control-label">Salario</label>
                                                                                    <div>
                                                                                        <select name="salary_id" id="salary_id" class="form-control">
                                                                                            <option value="true">Seleciona el Salario</option>
                                                                                            @foreach ($salaries as $salary)
                                                                                            <option value="{{ $salary->id }}" {{ $salary->id == $employee->salary_id ? 'selected' : '' }}>{{ $salary->salary }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    @error('salary_id')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                    
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="address" class=" form-control-label">Domicilio</label>
                                                                                    <input type="text" id="address" name="address" class="form-control" value="{{ $employee->address }}">
                                                                                    @error('address')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                    
                                                                                <div class="form-group col-6">
                                                                                    <label for="nss" class=" form-control-label">NSS</label>
                                                                                    <input type="number" id="nss" name="nss" class="form-control" value="{{ $employee->nss }}">
                                                                                    @error('nss')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                    
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="curp" class=" form-control-label">Curp</label>
                                                                                    <input type="text" id="curp" name="curp" class="form-control" value="{{ $employee->curp }}">
                                                                                    @error('curp')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                    
                                                                                <div class="form-group col-6">
                                                                                    <label for="marital_s" class=" form-control-label">Estado Civil</label>
                                                                                    <div>
                                                                                        <select name="marital_s" id="marital_s" class="form-control">
                                                                                            <option value="true" disable="disable">Selecciona el Estado Civil</option>
                                                                                            <option value="Casado">Casado</option>
                                                                                            <option value="Soltero">Soltero</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    @error('marital_s')
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
                                                    <form action="{{ route('employee.destroy', $employee) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="item" type="submit">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>

                                                    <!-- More -->
                                                    <a href="{{ route ('employee.show', $employee) }}" class="item">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $employees->links() }}
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
                <form action="{{ route('employee.store') }}" method="post">
                    @csrf
                    <!-- Head -->
                    <div class="card-header">
                        <strong>Agregar Empleado</strong>
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
                                    <label for="lastname" class=" form-control-label">Apellido</label>
                                    <input type="text" id="lastname" name="lastname" class="form-control">
                                    @error('lastname')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="birthdate" class=" form-control-label">Fecha de Nacimiento</label>
                                    <input type="date" id="birthdate" name="birthdate" class="form-control">
                                    @error('birthdate')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label for="sex" class=" form-control-label">Sexo</label>
                                    <div>
                                        <select name="sex" id="sex" class="form-control">
                                            <option selected="true" disabled="disabled">Selecione el Sexo</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>
                                    @error('sex')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="phone" class=" form-control-label">Telefono</label>
                                    <input type="tel" id="phone" name="phone" class="form-control">
                                    @error('phone')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label for="email" class=" form-control-label">Correo</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                    @error('email')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="salary_id" class=" form-control-label">Salario</label>
                                    <div>
                                        <select name="salary_id" id="salary_id" class="form-control">
                                            <option selected="true" disabled="disabled">Selecione el Salario</option>
                                            @foreach ($salaries as $salary)
                                            <option value="{{ $salary->id }}">{{ $salary->salary }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('salary_id')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="address" class=" form-control-label">Domicilio</label>
                                    <input type="text" id="address" name="address" class="form-control">
                                    @error('address')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>
    
                                <div class="form-group col-6">
                                    <label for="nss" class=" form-control-label">NSS</label>
                                    <input type="number" id="nss" name="nss" class="form-control">
                                    @error('nss')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="curp" class=" form-control-label">Curp</label>
                                    <input type="text" id="curp" name="curp" class="form-control">
                                    @error('curp')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>
    
                                <div class="form-group col-6">
                                    <label for="marital_s" class=" form-control-label">Estado Civil</label>
                                    <div>
                                        <select name="marital_s" id="marital_s" class="form-control">
                                            <option selected="true" disabled="disabled">Selecione el Estado Civil</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Soltero">Soltero</option>
                                        </select>
                                    </div>
                                    @error('marital_s')
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