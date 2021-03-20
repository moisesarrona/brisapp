@extends('layouts.templeate')

@section('content')
    <!-- Error -->
    @include('components.messages')
    
    <!-- MAIN CONTENT-->
    <section class="statistic">
        <div class="section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Producto</h3>

                        <!-- Buttons -->
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="table-data__tool-left">
                                    <a href="{{ route('provider.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                        Proveedor
                                    </a>
                                </div>
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
                                        <th>Producto</th>
                                        <th>Codigo</th>
                                        <th>Precio</th>
                                        <th>Existencia</th>
                                        <th>Descripcion</th>
                                        <th>Estatus</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr class="tr-shadow">
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->code }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>
                                                @if ($product->amount > 10)
                                                    <span class="status--process">{{ $product->amount }}</span>                                                    
                                                @else
                                                    <span class="status--denied">{{ $product->amount }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $product->description }}</td>
                                            <td>
                                                @if ($product->status == true)
                                                    <span class="status--process">Activo</span>
                                                @else
                                                    <span class="status--denied">Inactivo</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <!-- Edit -->
                                                    <button class="item" data-toggle="modal" data-target="#edit{{ $product->id }}">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="edit{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <form action="{{ route('product.update', $product) }}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <!-- Head -->
                                                                    <div class="card-header">
                                                                        <strong>Editar Producto</strong>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                    
                                                                    <!-- Inputs -->
                                                                    <div class="modal-body">
                                                                        <div class="card-body card-block">
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="name" class=" form-control-label">Producto</label>
                                                                                    <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}">
                                                                                    @error('name')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                    
                                                                                <div class="form-group col-6">
                                                                                    <label for="code" class=" form-control-label">Codigo</label>
                                                                                    <input type="text" id="code" name="code" class="form-control" value="{{ $product->code }}">
                                                                                    @error('code')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                    
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="price" class=" form-control-label">Precio por unidad</label>
                                                                                    <input type="number" id="price" name="price" class="form-control" value="{{ $product->price }}">
                                                                                    @error('price')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                    
                                                                                <div class="form-group col-6">
                                                                                    <label for="amount" class=" form-control-label">Existencia</label>
                                                                                    <input type="number" id="amount" name="amount" class="form-control" value="{{ $product->amount }}">
                                                                                    @error('amount')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                    
                                                                            <div class="row">
                                                                                <div class="form-group col-6">
                                                                                    <label for="provider_id" class=" form-control-label">Proveedor</label>
                                                                                    <div>
                                                                                        <select name="provider_id" id="provider_id" class="form-control">
                                                                                            <option selected="true" disabled="disabled">Selecione el Proveedor</option>
                                                                                            @foreach ($providers as $provider)
                                                                                            <option value="{{ $provider->id }}" {{ $provider->id == $product->provider_id ? 'selected' : '' }}>{{ $provider->business_n }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    @error('provider_id')
                                                                                        <code>{{ $message }}</code>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                    
                                                                            <div class="row">
                                                                                <div class="form-group col-12">
                                                                                    <label for="description" class=" form-control-label">Descripcion</label>
                                                                                    <div class="">
                                                                                        <textarea name="description" id="description" rows="5" placeholder="Content..." class="form-control">{{ $product->description }}</textarea>
                                                                                    </div>
                                                                                    @error('description')
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
                                                    <form action="{{ route('product.destroy', $product) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="item" type="submit">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>

                                                    <!-- More -->
                                                    <a href="{{ route ('product.show', $product) }}" class="item">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $products->links() }}
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
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <!-- Head -->
                    <div class="card-header">
                        <strong>Agregar Producto</strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <!-- Inputs -->
                    <div class="modal-body">
                        <div class="card-body card-block">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name" class=" form-control-label">Producto</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                    @error('name')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>
    
                                <div class="form-group col-6">
                                    <label for="code" class=" form-control-label">Codigo</label>
                                    <input type="text" id="code" name="code" class="form-control">
                                    @error('code')
                                        <code>{{ $message }}</code>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="price" class=" form-control-label">Precio por unidad</label>
                                    <input type="number" id="price" name="price" class="form-control">
                                    @error('price')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>
    
                                <div class="form-group col-6">
                                    <label for="amount" class=" form-control-label">Existencia</label>
                                    <input type="number" id="amount" name="amount" class="form-control">
                                    @error('amount')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="provider_id" class=" form-control-label">Proveedor</label>
                                    <div>
                                        <select name="provider_id" id="provider_id" class="form-control">
                                            <option selected="true" disabled="disabled">Selecione el Proveedor</option>
                                            @foreach ($providers as $provider)
                                            <option value="{{ $provider->id }}">{{ $provider->business_n }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('provider_id')
                                        <code>{{ $message }}</code>
                                     @enderror
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="description" class=" form-control-label">Descripcion</label>
                                    <div class="">
                                        <textarea name="description" id="description" rows="5" placeholder="Content..." class="form-control"></textarea>
                                    </div>
                                    @error('description')
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