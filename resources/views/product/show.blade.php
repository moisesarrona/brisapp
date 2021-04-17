@extends('layouts.template')

@section('content')
    <!-- Error -->
    @include('components.messages')

    <!-- MAIN CONTENT-->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <!-- Buttons -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <a href="{{ route('product.index') }}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                    Regresar
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Information -->
                    <div class="col-md-7">
                        <div class="top-campaign">
                            <div class="">
                                <h3 class="title-3 m-b-30 w-100">Producto No. {{ $product->id }}</h3>
                                <div class="d-flex mb-4">
                                    <div class="text-right w-50">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small"  data-toggle="modal" data-target="#entry">
                                            Entrada de Producto
                                        </button>
                                    </div>
                                    <div class="text-right w-50">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small"  data-toggle="modal" data-target="#out">
                                            Salida de Producto
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="card-text text-sm-left">
                                    <h5>{{ $product->name }}</h5>
                                    <span class="small">Producto</span>
                                    <br>
                                    <br>

                                    <h5>{{ $product->code }}</h5>
                                    <span class="small">Codigo</span>
                                    <br>
                                    <br>

                                    <h5>{{ $product->price }}</h5>
                                    <span class="small">Precio</span>
                                    <br>
                                    <br>

                                    <h5>{{ $product->amount }}</h5>
                                    <span class="small">Existencia</span>
                                    <br>
                                    <br>

                                    <h5>{{ $product->description }}</h5>
                                    <span class="small">Description</span>
                                    <br>
                                    <br>

                                    <h5>
                                        @isset($product->provider->business_n)
                                            {{ $product->provider->business_n }}
                                        @endisset
                                    </h5>
                                    <span class="small">Proveedor</span>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Top -->
                    <div class="col-md-5">
                        <div class="top-campaign">
                            <h3 class="title-3 m-b-30">Productos por Agotarse</h3>
                            <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <tbody>
                                        @foreach ($products as $produc)
                                        <tr>
                                            <td>
                                                <a href="{{ route('product.show', $produc) }}">
                                                    {{ $produc->name }}
                                                </a>
                                            </td>
                                            <td class="status--denied">{{ $produc->amount }}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Entry -->
    <div class="modal fade" id="entry" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="{{ route('product.entry') }}" method="post">
                    @csrf
                    <!-- Head -->
                    <div class="card-header">
                        <strong>Agregar Entrada de Producto</strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <!-- Inputs -->
                    <div class="modal-body">
                        <div class="card-body card-block">   
                            <div class="row">   
                                <div class="form-group col-6">
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <label for="amount" class=" form-control-label">Existencia</label>
                                    <input type="number" id="amount" name="amount" class="form-control" placeholder="{{ $product->amount }}">
                                    @error('amount')
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

    <!-- Modal Out -->
    <div class="modal fade" id="out" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="{{ route('product.out') }}" method="post">
                    @csrf
                    <!-- Head -->
                    <div class="card-header">
                        <strong>Agregar Salida de Producto</strong>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <!-- Inputs -->
                    <div class="modal-body">
                        <div class="card-body card-block">   
                            <div class="row">   
                                <div class="form-group col-6">
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <label for="amount" class=" form-control-label">Salia de producto</label>
                                    <input type="number" id="amount" name="amount" class="form-control" placeholder="{{ $product->amount }}">
                                    @error('amount')
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