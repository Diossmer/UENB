@if(Auth::guard('admin')->check())
<p class="text-success">
    Iniciar sesion Como <a href="{{ route('admin.login') }}"><b>Administrador</b></a> | Conectado
</p>
@else
<p class="text-danger">
    Iniciar sesion Como <a href="{{ route('admin.login') }}"><b>Administrador</b></a> | Desconectado
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
