<br><br>
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
</ul>