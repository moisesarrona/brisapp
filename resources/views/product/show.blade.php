@extends('layouts.template')

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

                    <!-- Information -->
                    <div class="col-md-7">
                        <div class="top-campaign">
                            <h3 class="title-3 m-b-30">Producto No. {{ $product->id }}</h3>
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
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                <a href="{{ route('product.show', $product) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </td>
                                            <td class="status--denied">{{ $product->amount }}</td>
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
@endsection