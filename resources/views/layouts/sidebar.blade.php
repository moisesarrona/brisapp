<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo">
        <a href="/">
            <img src=" {{ asset ('assets/images/icon/logo-white.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src=" {{ asset ('assets/images/icon/avatar-big-01.jpg') }}" alt="John Doe" />
            </div>
            <h4 class="name">Administrador</h4>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Dahsboard</a>
                        <!--<span class="inbox-num">3</span>-->
                </li>

                <li class="{{ request()->routeIs('employee.*') ? 'active' : '' }}">
                    <a href="{{ route('employee.index') }}">
                        <i class="fas fa-suitcase"></i>Empleados</a>
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