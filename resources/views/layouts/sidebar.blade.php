<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <img class="navbar-brand-full app-header-logo" src="{{ asset('imagenes/logo.png') }}" width="100"
             alt="Logo CMK">
        <a href="{{ url('/') }}"></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('img/') }}" width="45px" alt=""/>
        </a>
    </div>
   @can('ver-usuarios')
    <ul class="sidebar-menu" >
        @include('layouts.menu_admin')
    </ul>
    @else
    <ul class="sidebar-menu" >
        @include('layouts.menu_usuario')
    </ul>
    @endif
</aside>
