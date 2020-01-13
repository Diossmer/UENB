<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
    <div class="sidebar-header">
    <a href="{{route('admin.dashboard')}}" style="font-size:2em;font-weight:900;text-decoration:none; color:#61ff54;">
            Dashboard</a>
            <h5>Parroquía La Vega</h5>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Registros</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                    <a href="{{route('user.create')}}">Docentes</a>
                    </li>
                    <li>
                    <a href="{{route('persona.index')}}">Persona</a>
                    </li>
                    <li>
                        <a href="#">Docentes</a>
                    </li>
                    <li>
                        <a href="#">Alumnos</a>
                    </li>
                    <li>
                        <a href="#">Representantes</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Generar Archivo</a>
            </li>
        </ul>
    </nav>

</div>
