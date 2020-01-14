@if(Auth::guard('admin')->check())
<p class="text-success">
    @if(Auth::guest())
    Iniciar sesion Como <a href="{{ route('admin.dashboard') }}"><b>Administrador</b></a> | Conectado
    @else
    Iniciar sesion Como <a href="{{ route('admin.login') }}"><b>Administrador</b></a> | Conectado
    @endif
</p>
@else
<p class="text-danger">
    @if(Auth::guest())
    Iniciar sesion Como <a href="{{ route('admin.login') }}"><b>Administrador</b></a> | Desconectado
    @else
    Iniciar sesion Como <a href="{{ route('admin.login') }}"><b>Administrador</b></a> | Desconectado
    @endif
</p>
@endif
@if(Auth::guard('web')->check())
<p class="text-success">
    Iniciar sesion Como <a href="{{ route('login') }}"><b>Docente</b></a> | Conectado
</p>
@else
<p class="text-danger">
    Iniciar sesion Como <a href="{{ route('login') }}"><b>Docente</b></a> | Desconectado
</p>
@endif
