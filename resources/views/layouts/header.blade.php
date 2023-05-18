<form class="form-inline mr-auto" action="#">
    <ul class="navbar-nav mr-3">
        <li>
            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>
    <ul class="navbar-nav nav-opciones">
        
        <li>
            <a class="nav-link" href="/">
                <i class="fas fa-home"></i><span>Inicio</span>
            </a>
        </li>
        <li>
            <a class="nav-link" href="{{route('busqueda')}}">
                <i class="fas fa-shopping-cart"></i><span>Productos</span>

            </a>
        </li>
        <li>
            <a class="nav-link" href="">
                <i class="fas fa-layer-group"></i><span>Servicios</span>
            </a>
        </li>
        <li>
            <a class="nav-link" href="">
                <i class="fas fa-users"></i></i><span>Nosotros</span>
            </a>
        </li>
    </ul>

</form>
<ul class="navbar-nav navbar-right">
    @if(\Illuminate\Support\Facades\Auth::user())
    <li class="dropdown">
        <a href="" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        {{--<img alt="image" src="{{ asset('img/l.png') }}" class="rounded-circle mr-1 thumbnail-rounded user-thumbnail "> --}}
            <div class="d-sm-none d-lg-inline-block">
                Perfil de {{\Illuminate\Support\Facades\Auth::user()->name}}</div>
        </a>

        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title">
            Bienvenido, {{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
            <a class="dropdown-item has-icon edit-profile" href=" {{ route('editarinfo.edit', auth()->user()->id) }} " data-id="{{ \Auth::id() }}">
                <i class="fa fa-user"></i>Editar Perfil</a>
            <a class="dropdown-item has-icon"  href="{{ route('editarpasswd.index') }}" data-id="{{ \Auth::id() }}"><i class="fa fa-lock"> </i>Cambiar Contraseña</a>
            
            <a href="{{ url('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesion
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                {{ csrf_field() }}
            </form>
        </div>
    </li>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              
                <li >
                    @cannot('crear-rol')
                    <a href="{{ route('cart.index') }}" class="nav-link dropdown-toggle data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" >
                    {{ __('Cart') }}
                    <i class="fa fa-shopping-cart"></i> 
                    </a> 
                    @endcannot
                   
                  

                    
                </li>
            </ul>
        </div>
    @else
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            {{-- <img alt="image" src="#" class="rounded-circle mr-1">--}}
            <div class="d-sm-none d-lg-inline-block">{{ __('messages.common.hello') }}</div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title">{{ __('messages.common.login') }}
                / {{ __('messages.common.register') }}</div>
            <a href="{{ route('login') }}" class="dropdown-item has-icon">
                <i class="fas fa-sign-in-alt"></i> {{ __('messages.common.login') }}
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('register') }}" class="dropdown-item has-icon">
                <i class="fas fa-user-plus"></i> {{ __('messages.common.register') }}
            </a>
        </div>
    </li>
    @endif
</ul>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>