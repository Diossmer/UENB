
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/pdf.css"> <!--PDF ACEPTA EL LENGUAJE ANTIGUO-->
    <title>Docentes</title>
</head>
<body>

<div class="container">
    <table border="3" cellpadding="0" CELLSPACING="0">
        <caption><h1>Alumnos</h1></caption>
        <thead>
            <tr align="center" valing="middle">
                <th>Foto</th>
                <th>Nombres</th>
                <th>Segundo nombres</th>
                <th>Apellidos</th>
                <th>Segundo apellidos</th>
                <th>Lugar de Nacimiento</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Fecha Nacimiento</th>
                <th>Sexo</th>
                <th>estatus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumno as $alumnos)
            <tr align="center" valing="middle">
                <td><img src="images/{{$alumnos->fotos}}" alt="" sizes="" srcset="" height="100" width="100"></td>
                <td>{{$alumnos->nombres}}</td>
                <td>{{$alumnos->segNombres}}</td>
                <td>{{$alumnos->apellidos}}</td>
                <td>{{$alumnos->segApellidos}}</td>
                <td>{{$alumnos->lgNacimiento}}</td>
                <td>{{$alumnos->direccion}}</td>
                <td>{{$alumnos->email}}</td>
                <td>{{\Carbon\Carbon::createFromDate($alumnos->anio)->age}}</td>
                <td>{{$alumnos->dia}}/{{$alumnos->mes}}/{{$alumnos->anio}}</td>
                <td>{{$alumnos->sexo}}</td>
                <td>{{$alumnos->estatus}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
                {{-- @foreach ($representante as $items)
                <td>{{$items->nombres}}</td>
                <td>{{$items->email}}</td>
                @endforeach
                @foreach ($escolar as $item)
                <td>{{$item->seccion}}</td>
                @endforeach --}}
</div>
</body>
</html>
