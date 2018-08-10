<ul class="nav navbar-nav">

    @can('users.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
        </li>
    @endcan

    @can('roles.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
        </li>  
    @endcan

    @can('restaurants.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('restaurants.index') }}">Restaurantes</a>
        </li>
    @endcan

    @can('empresas.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('empresas.index') }}">Empresas</a>
        </li>
    @endcan

    @can('products.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
        </li>                        
    @endcan

    @can('plus.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('plus.index') }}">PLUS</a>
        </li>  
    @endcan

    @can('recetas.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('recetas.index') }}">Recetas</a>
        </li>  
    @endcan

    @can('unidades.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('unidades.index') }}">Unidades de medida</a>
        </li>  
    @endcan

    @can('canales.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('canales.index') }}">Canales de ventas</a>
        </li>  
    @endcan

    @can('fechas.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('fechas.index') }}">Fechas de inventario</a>
        </li>  
    @endcan                       
</ul>