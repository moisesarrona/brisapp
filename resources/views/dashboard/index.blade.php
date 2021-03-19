@extends('layouts.templeate')

@section('content')
    <!-- STATISTIC-->
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <a href="{{ route('customer.index') }}" class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">{{ $customers->count() }}</h2>
                            <span class="desc">Clientes</span>
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('product.index') }}" class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">{{ $products->count() }}</h2>
                            <span class="desc">Productos</span>
                            <div class="icon">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('party.index') }}" class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">{{ $parties->count() }}</h2>
                            <span class="desc">Fiestas</span>
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                        </div>
                    </a>
                    <a href="" class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">$1,060,386</h2>
                            <span class="desc">total earnings</span>
                            <div class="icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC-->

    <section>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8">  
                        <h2 class="title-1 m-b-25">Eventos proximos</h2>                   
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="zmdi zmdi-account-calendar"></i>Fiestas proximas</h3>
                                <a href="{{ route('party.index') }}" class="au-btn-plus">
                                    <i class="zmdi zmdi-plus"></i>
                                </a>
                            </div>
                            <div class="au-task js-list-load">
                                <div class="au-task__title">
                                    <p>Eventos proximos mucho OJO</p>
                                </div>
                                <div class="au-task-list js-scrollbar3">
                                    @foreach ($parties as $party)
                                        @if ($party->status == false)
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href=" {{ route('party.show', $party->id) }}">Fiesta para: {{ $party->customer->name}} {{ $party->customer->lastname}}</a>
                                                    </h5>
                                                    <span class="time">{{ $party->date }}</span>
                                                </div>
                                            </div>
                                        @else
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Fiesta para: {{ $party->customer->name}} {{ $party->customer->lastname}}</a>
                                                    </h5>
                                                    <span class="time">{{ $party->date }}</span>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <h2 class="title-1 m-b-25">Productos en Stock</h2>
                        <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                            <div class="au-card-inner">
                                <div class="table-responsive">
                                    <table class="table table-top-countries">
                                        <tbody>
                                            @foreach ($products->where('amount', '<', '10') as $key=>$product)
                                            <tr>
                                                <td>
                                                    <span>
                                                        <small>{{ ++$key}}.</small> {{ $product->name }}
                                                    </span>
                                                    <br>
                                                    <small>
                                                        <span>${{ $product->price }}</span>
                                                    </small>
                                                </td>
                                                <td>{{ $product->amount }}</td>
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
        </div>
    </section>
@endsection