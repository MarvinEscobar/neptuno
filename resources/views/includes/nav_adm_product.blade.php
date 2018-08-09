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
                          
</ul>