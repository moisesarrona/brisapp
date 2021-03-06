<!-- HEADER DESKTOP-->
<header class="header-desktop2">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap2">
                <div class="logo d-block d-lg-none">
                    <a href="/">
                        <img src=" {{ asset ('assets/images/icon/logo-white.png') }}" alt="CoolAdmin" />
                    </a>
                </div>
                <div class="header-button2">
                    <div class="header-button-item js-item-menu">
                        <i class="zmdi zmdi-search"></i>
                        <div class="search-dropdown js-dropdown">
                            <form action="">
                                <input class="au-input au-input--full au-input--h65" type="text" placeholder="Busca en la aplicación" />
                                <span class="search-dropdown__icon">
                                    <i class="zmdi zmdi-search"></i>
                                </span>
                            </form>
                        </div>
                    </div>
                    <div class="header-button-item has-noti js-item-menu">
                        <i class="zmdi zmdi-notifications"></i>
                        <div class="notifi-dropdown js-dropdown">
                            <div class="notifi__title">
                                <p>Tienes 3 notificaciones</p>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c1 img-cir img-40">
                                    <i class="zmdi zmdi-email-open"></i>
                                </div>
                                <div class="content">
                                    <p>Hoy se selebra un evento</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c2 img-cir img-40">
                                    <i class="zmdi zmdi-account-box"></i>
                                </div>
                                <div class="content">
                                    <p>Se dio de alta un nuevo producto</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c3 img-cir img-40">
                                    <i class="zmdi zmdi-file-text"></i>
                                </div>
                                <div class="content">
                                    <p>Se agendo una nuevo fiesta</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__footer">
                                <a href="#">Todas las notificaciones</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-button-item mr-0 js-sidebar-btn">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Cuenta</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Configuracion</a>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-globe"></i>Idioma</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-email"></i>Correos</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-notifications"></i>Notificaciones</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
    <div class="logo">
        <a href="#">
            <img src=" {{ asset ('assets/images/icon/logo-white.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar2">
        <div class="account2">
            <div class="image img-cir img-120">
                 <img src=" {{ asset ('assets/images/icon/avatar-big-01.jpg') }}" alt="John Doe" />
            </div>
            <h4 class="name">Administrador</h4>
            <a href="#">Cerrar Sesión</a>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="{{ request()->routeIs('employee.*') ? 'active' : '' }}">
                    <a href="{{ route('employee.index') }}">
                        <i class="fas fa-suitcase"></i>Empleados</a>
                        <!--<span class="inbox-num">3</span>-->
                </li>

                <li class="{{ request()->routeIs('product.*') ? 'active' : '' }}">
                    <a href="{{ route('product.index') }}">
                        <i class="fas fa-truck"></i>Almacen</a>
                </li>

                <li class="{{ request()->routeIs('party.*') ? 'active' : '' }}">
                    <a href="{{ route('party.index') }}">
                        <i class="fa fa-tags"></i>Fiestas</a>
                </li>

                <li class="{{ request()->routeIs('customer.*') ? 'active' : '' }}">
                    <a href="{{ route('customer.index') }}">
                        <i class="fa fa-users"></i>Clientes</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>


<!-- BREADCRUMB-->
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">Tu estas:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">---</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">---</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>