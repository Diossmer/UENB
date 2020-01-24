<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
    <div class="sidebar-header">
    <i style="font-size:2em;font-weight:900;text-decoration:none; color:#61ff54;">
        Parroquia La Vega</i>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    Registros</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="{{route('home')}}">Periodo Escolar</a>
                    </li>
                    <li>
                    <a href="{{route('representante.index')}}">Representante</a>
                    </li>
                    <li>
                    <a href="{{route('inscripcion.index')}}">Inscripción</a>
                    </li>
                </ul>
            </li>
            {{-- <li>
            <a href="{{route('inscripcion.index')}}">Generar PDF</a>
            </li> --}}
        </ul>
    </nav>
</div>
