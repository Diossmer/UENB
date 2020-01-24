<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/pdf.css"> <!--PDF ACEPTA EL LENGUAJE ANTIGUO-->
    <title>Archivo Usuario</title>
</head>
<body>
<div class="conteiner">
    <div class="header">
        <h1>Periodo - {{$periodo->descripcion}}</h1>
    <h2>Docente : {{$seccion->users->name}}</h2>
    </div>
    <div class="content">
        <table cellspacing="2" cellpadding="2" border="3">
        <caption></caption>
            <thead>
                <tr vgaling="middle" align="center">
                    <th>foto</th>
                    <th>alumno</th>
                    <th>estatus</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha de fin</th>
                    <th>grado</th>
                    <th>seccion</th>
                </tr>
            </thead>
            <tbody>
                <tr vgaling="middle" align="center">
                    <td><img src="images/{{$alumno->fotos}}" alt="" sizes="" srcset="" height="100" width="100"></td>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$periodo->estatus}}</td>
                    <td>{{$periodo->fecha_inicio}}</td>
                    <td>{{$periodo->fecha_fin}}</td>
                    <td>{{$seccion->grado}}</td>
                    <td>{{$seccion->descripcion}}</td>
                </tr>
            </tbody>
        </table>
        <table cellspacing="2" cellpadding="2" border="3">
            <caption></caption>
                <thead>
                    <tr vgaling="middle" align="center">
                        <th>fecha de nacimiento</th>
                        <th>camisa</th>
                        <th>zapato</th>
                        <th>pantalon</th>
                        <th>enfermedad que padece</th>
                        <th>enfermedad psicologica</th>
                    </tr>
                </thead>
                <tbody>
                    <tr vgaling="middle" align="center">
                        <td>{{$alumno->dia}}-{{$alumno->mes}}-{{$alumno->año}}</td>
                        <td>{{$alumno->camisa}}</td>
                        <td>{{$alumno->zapato}}</td>
                        <td>{{$alumno->pantalon}}</td>
                        <td>{{$alumno->enfermedades_padecida}}</td>
                        <td>{{$alumno->enfermedades_psicologica}}</td>
                    </tr>
                </tbody>
            </table>
            <div class="firma">
                <p>Firma de Representante:</p>
                <hr>
                <p>
                    {{$alumno->representantes->nombre}}
                    <br>v-{{$alumno->representantes->cedula}}
                </p>
            </div>
            <div class="firma">
                <p>Firma de Docente:</p>
                <hr>
            </div>
    </div>
</div>



</body>
</html>

