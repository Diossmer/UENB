<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/pdf.css"> <!--PDF ACEPTA EL LENGUAJE ANTIGUO-->
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Inscripcion</div>
    
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        <table class="table table-responsive-sm table-bordered">
                            <caption class="table text-center">Inscripción
                                {!!link_to_route('inscripcion.create', $title = "Registrarse",null, ["class" => "btn btn-success"])!!}
                            </caption>
                            <thead>
                                <tr>
                                <th scope="col">Grado</th>
                                <th scope="col">Seccion</th>
                                <th scope="col">cedula</th>
                                <th scope="col">fechaIngreso</th>
                                <th scope="col">matricula</th>
                                <th scope="col">accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($escolar as $escolares)
                                    <tr>
                                    <td>{{$escolares->grado}}</td>
                                    <td>{{$escolares->seccion}}</td>
                                    <td>{{$escolares->cedula}}</td>
                                    <td>{{$escolares->fechaIngreso}}</td>
                                    <td>{{$escolares->matricula}}</td>
                                    <td>
                                            {!!link_to_route('inscripcion.edit', $title = "Editar",$escolares->id, ["class" => "btn btn-success"])!!}
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        
                        
                        <table class="table table-responsive-sm table-bordered">
                            <caption class="table text-center">Inscripción de alumno </caption>
                            <thead>
                                <tr>
                                <th scope="col">Fotos</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Segundo nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Segundo apellido</th>
                                <th scope="col">Edad</th>
                                <th scope="col">accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumno as $alumnos)
                                    <tr>
                                    <td><img src="{{asset("images/".$alumnos->fotos)}}" alt="" sizes="" srcset="" height="100" width="100"></td>
                                    <td>{{$alumnos->nombres}}</td>
                                    <td>{{$alumnos->segNombres}}</td>
                                    <td>{{$alumnos->apellidos}}</td>
                                    <td>{{$alumnos->segApellidos}}</td>
                                    <th>{{\Carbon\Carbon::createFromDate($alumnos->anio)->age}}</th>
                                    <td>
                                        {!!link_to_route('inscripcion.edit', $title = "Editar",$alumnos->id, ["class" => "btn btn-success"])!!}
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
