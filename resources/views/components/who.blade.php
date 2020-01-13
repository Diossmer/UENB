@if(Auth::guard('admin')->check())
<p class="text-success">
    Iniciar sesion Como <a href="{{ route('admin.login') }}"><b>Administrador</b></a>
</p>
@else
<p class="text-danger">
    Iniciar sesion Como <a href="{{ route('admin.login') }}"><b>Administrador</b></a>
</p>
@endif
@if(Auth::guard('web')->check())
<p class="text-success">
    Iniciar sesion Como <a href="{{ route('login') }}"><b>Docente</b></a>
</p>
@else
<p class="text-danger">
    Iniciar sesion Como <a href="{{ route('login') }}"><b>Docente</b></a>
</p>
@endif
