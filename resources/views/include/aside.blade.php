<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
    <div class="sidebar-header">
    <a href="{{route('home')}}" style="font-size:2em;font-weight:900;text-decoration:none; color:#61ff54;">
        Parroquía <br>La Vega</a>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <b>Registro</b></a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                    <a href="{{route('inscripcion.index')}}">Inscripción</a>
                    </li>
                </ul>
            </li>
            {{-- <li>
            <a href="{{route('ExportarPDF.USER')}}">Generar Archivo</a>
            </li> --}}
        </ul>
    </nav>
</div>
