<ul class="nav navbar-nav">      

	@can('restaurants.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('restaurants.index') }}">Restaurantes</a>
        </li>
    @endcan

    @can('products.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
        </li>  
    @endcan

    @can('empresas.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('empresas.index') }}">Empresas</a>
        </li>
    @endcan

    @can('users.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
        </li>  
    @endcan
                          
</ul>