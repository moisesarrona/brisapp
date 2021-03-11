@extends('layouts.templeate')

@section('content')
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
                </div>

                <!-- Information -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Producto</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-text text-sm-left">
                                    <h5>{{ $product->name }}</h5>
                                    <span class="small">Producto</span>
                                    <br>

                                    <h5>{{ $product->code }}</h5>
                                    <span class="small">Codigo</span>
                                    <br>

                                    <h5>{{ $product->price }}</h5>
                                    <span class="small">Precio</span>
                                    <br>

                                    <h5>{{ $product->amount }}</h5>
                                    <span class="small">Existencia</span>
                                    <br>

                                    <h5>{{ $product->description }}</h5>
                                    <span class="small">Description</span>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection