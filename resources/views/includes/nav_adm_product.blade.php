<ul class="nav navbar-nav">      

	@can('restaurants.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('restaurants.index') }}">Restaurante</a>
        </li>
    @endcan

    @can('products.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
        </li>  
    @endcan
    
    @can('business.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('business.index') }}">Empresa</a>
        </li>  
    @endcan

    @can('roles.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('roles.index') }}">Usuarios</a>
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
        <a class="nav-link" href="{{ route('unidades.index') }}">Unidades de Medida</a>
        </li>  
    @endcan

      @can('canales.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('canales.index') }}">Canales de Venta</a>
        </li>  
    @endcan  

      @can('fechas_inv.index')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('fechas_inv.index') }}">Fechas de inventario</a>
        </li>  
    @endcan                           
</ul>