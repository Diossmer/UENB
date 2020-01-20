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
        <table border="3" valing="middle" align="center">
            <caption>Inscripción de alumno </caption>
            <thead>
                <tr valing="middle" align="center">
                <th scope="col">Fotos</th>
                <th scope="col">Nombres</th>
                <th scope="col">Segundo nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Segundo apellido</th>
                <th scope="col">Edad</th>
                </tr>
            </thead>
            <tbody>
                {{-- <td><img src="images/{{$alumno->fotos}}" alt="" sizes="" srcset="" height="100" width="100"></td> --}}
                    {{ $alumno->anioEscolar_id }}
            </tbody>
        </table>
        <table border="3" valing="middle" align="center">
            <caption>Representante </caption>
            <thead>
                <tr valing="middle" align="center">
                <th scope="col">Fotos</th>
                <th scope="col">Nombres</th>
                <th scope="col">Segundo nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Segundo apellido</th>
                <th scope="col">Edad</th>
                </tr>
            </thead>
            <tbody>
            {{-- @foreach ($representante as $representantes)
                    <tr valing="middle" align="center">
                    <td><img src="images/{{$alumnos->fotos}}" alt="" sizes="" srcset="" height="100" width="100"></td>
                    <td>{{$alumnos->nombres}}</td>
                    <td>{{$alumnos->segNombres}}</td>
                    <td>{{$alumnos->apellidos}}</td>
                    <td>{{$alumnos->segApellidos}}</td>
                    <th>{{\Carbon\Carbon::createFromDate($alumnos->anio)->age}}</th>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
</body>
</html>
