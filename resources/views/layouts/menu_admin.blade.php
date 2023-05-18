<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
<a class="nav-link" href="{{route('editarinfo.index')}}" style="background-color:lightblue;">
        <i class=" fas fa-user"></i><span>Perfil</span>
    </a>

    @can('crear-usuarios')
    <a class="nav-link" href="/dash"style="background-color:lightblue;">
        <i class=" fas fa-layer-group"></i><span>Panel</span>
    </a>
    @endcan
    @can('crear-usuarios')
    <a class="nav-link" href=""style="background-color:lightblue;">
        <i class=" fas fa-database"></i><span>Base de Datos</span>
    </a>
    @endcan
    @can('ver-usuarios')
    <a class="nav-link" href="/usuarios"style="background-color:lightblue;">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    @endcan
    
    @can('ver-rol')
    <a class="nav-link" href="/roles"style="background-color:lightblue;">
        <i class=" fas fa-user-lock"></i><span>Roles y Permisos</span>
    </a>
    @endcan
    @can('crear-usuarios')
    <a class="nav-link" href=""style="background-color:lightblue;">
        <i class=" fas fa-envelope"></i><span>Buzon</span>
    </a>
    @endcan
    @can('crear-usuarios')
    <a class="nav-link" href="{{ route('editarinfo.edit', auth()->user()->id) }}"style="background-color:lightblue;">
        <i class="fas fa-wrench"></i><span>Configuracion</span>
    </a>
    @endcan

</li>


