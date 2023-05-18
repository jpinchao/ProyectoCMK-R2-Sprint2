<style>
   .active {
      background-color: rgb(166, 227, 249);
      font-weight: bold;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
   }
</style>
<li class="side-menus" style="background-color:lightblue;">
   <a style="margin-top:10%; " class="nav-link {{ request()->is('editarinfo') ? 'active' : '' }}"
      href="{{ route('editarinfo.index') }}">
      <img alt="image" src="{{ asset('img/icon_user_dash/user.png') }}" style="height: 20px; width:20px">
      <span style="padding-left:8px;">Perfil</span>
   </a>
   <a class="nav-link {{ request()->is('compras') ? 'active' : '' }}" href="{{ url('/compras') }}">
      <img alt="image" src="{{ asset('img/icon_user_dash/buy.png') }}" style="height: 20px; width:20px">
      <span style="padding-left:8px">Compras</span>
   </a>
   <a class="nav-link {{ request()->is('ventas') ? 'active' : '' }}" href="{{ url('/ventas') }}">
      <img alt="image" src="{{ asset('img/icon_user_dash/increasing.png') }}" style="height: 20px; width:20px">
      <span style="padding-left:8px">Ventas</span>
   </a>
   <a class="nav-link {{ request()->is('publicar/create') ? 'active' : '' }}" href="{{route('publicar.create')}}">
      <img alt="image" src="{{ asset('img/icon_user_dash/unload.png') }}" style="height: 20px; width:20px">
      <span style="padding-left:8px">Publicar</span>
   </a>
   <a class="nav-link {{ request()->is('publicar') ? 'active' : '' }}" href="{{route('publicar.index')}}">
      <img alt="image" src="{{ asset('img/icon_user_dash/list.png') }}" style="height: 20px; width:20px">
      <span style="padding-left:8px">Publicaciones</span>
   </a>
   <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ url('/home') }}">
      <img alt="image" src="{{ asset('img/icon_user_dash/panel.png') }}" style="height: 20px; width:20px">
      <span style="padding-left:8px">Estadisticas</span>
   </a>
   <!--
    <a class="nav-link {{ request()->is('mostrar-datos') ? 'active' : '' }}" href="{{route('mostrar-datos')}}">
    <img alt="image" src="{{ asset('img/icon_user_dash/monitor.png') }}" style="height: 20px; width:20px" >
        <span style="padding-left:8px">Reportes</span>
    </a> 
   -->
   <a class="nav-link {{ request()->is('') ? 'active' : '' }}" href="#">
      <img alt="image" src="{{ asset('img/icon_user_dash/email.png') }}" style="height: 20px; width:20px">
      <span style="padding-left:8px">Buzon</span>
   </a>
   <a class="nav-link {{ request()->is('editarinfo/' . auth()->user()->id . '/edit') ? 'active' : '' }}"
      href="{{ route('editarinfo.edit', auth()->user()->id) }}">

      <img alt="image" src="{{ asset('img/icon_user_dash/settings.png') }}" style="height: 20px; width:20px">
      <span style="padding-left:8px">Configuracion</span>
   </a>
   <a class="nav-link {{ request()->is('') ? 'active' : '' }}" href="#">
      <img alt="image" src="{{ asset('img/icon_user_dash/question-mark.png') }}" style="height: 20px; width:20px">
      <span style="padding-left:8px">Ayuda</span>
   </a>
</li>