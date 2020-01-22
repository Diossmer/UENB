@extends('layouts.app')
@section('title','Alumno')
@section('css')
@parent
{{-- link de css --}}
@show

@section('script-top')
@parent
{{-- link de js --}}
@show

@section('script-bottom')
@parent
{{-- link de js --}}
@show

@section('navbar')
@include('include.nav')
@endsection

@section('sidebar')
@include('include.aside')
@endsection

@section('footer')
@include('include.footer')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Alumno</div>
                <div class="panel-body">
                    <table class="table">
                        <caption>{!! link_to_route('alumno.create', "Nuevo", null, ["class"=>"btn btn-primary"]) !!}</caption>
                        <tr>
                            <th>fotos</th>
                            <th>nombre</th>
                            <th>segundo_nombre</th>
                            <th>apellido</th>
                            <th>segundo_apellido</th>
                            <th>lugar_nacimiento</th>
                            <th>direccion</th>
                            <th>dia</th>
                            <th>mes</th>
                            <th>año</th>
                        </tr>

                        @foreach ($alumno as $alumnos)
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                        <thead>
                            <tr>
                                <th>enfermedade_padecida</th>
                                <th>enfermedade_psicologica</th>
                                <th>cedula</th>
                                <th>email</th>
                                <th>sexo</th>
                                <th>camisa</th>
                                <th>pantalon</th>
                                <th>zapato</th>
                                <th>representante_id</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumno as $alumnos)
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
