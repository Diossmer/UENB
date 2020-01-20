<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/pdf.css"> <!--PDF ACEPTA EL LENGUAJE ANTIGUO-->
    <title>Administrador</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    {{-- <div class="panel-heading">Dashboard</div> --}}
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <h1> DOCENTE MOSTRANDO LOS ALUMNOS </h1>
                            <p>Factor TIEMPO no culminado</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
