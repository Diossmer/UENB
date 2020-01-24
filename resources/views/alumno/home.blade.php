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
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Alumno</div>

                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @elseif(session('alumno'))
                <div class="alert alert-info" role="alert">
                    <li>{{session('alumno')}}</li>
                </div>
                @endif

                <div class="panel-body">
                    <table class="table">
                        <caption class="text-center text-success"> Alumnos
                            {!! link_to_route("representante.index", "Regresar", null, ["class"=>"btn btn-danger"]) !!}
                            {!! link_to_route('alumno.create', "Nuevo", null, ["class"=>"btn btn-primary"]) !!}
                        </caption>
                        <tr valing="" aling="">
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
                            <th>edad</th>
                            <th>action</th>
                        </tr>

                        @foreach ($alumno as $alumnos)
                            <tr valing="middle" aling="center">
                            <td><img src="/images/{{$alumnos->fotos}}" alt="" height="100" width="100"></td>
                                <td>{{$alumnos->nombre}}</td>
                                <td>{{$alumnos->segundo_nombre}}</td>
                                <td>{{$alumnos->apellido}}</td>
                                <td>{{$alumnos->segundo_apellido}}</td>
                                <td>{{$alumnos->lugar_nacimiento}}</td>
                                <td>{{$alumnos->direccion}}</td>
                                <td>{{$alumnos->dia}}</td>
                                <td>{{$alumnos->mes}}</td>
                                <td>{{$alumnos->año}}</td>
                                <td>{{\Carbon\Carbon::createFromDate($alumnos->año)->age}}</td>
                                <td>
                                    {!! link_to_route("alumno.edit", "Editar", $parameters = [$alumnos->id], $attributes = ["class"=>"btn btn-success"]) !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                        <table class="table">
                        <thead>
                            <tr valing="middle" aling="center">
                                <th>enfermedades_padecida</th>
                                <th>enfermedades_psicologica</th>
                                <th>cedula</th>
                                <th>email</th>
                                <th>sexo</th>
                                <th>camisa</th>
                                <th>pantalon</th>
                                <th>zapato</th>
                                <th>representante</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumno as $alumnos)
                            <tr valing="middle" aling="center">
                                <td>{{$alumnos->enfermedades_padecida}}</td>
                                <td>{{$alumnos->enfermedades_psicologica}}</td>
                                <td>{{$alumnos->cedula}}</td>
                                <td>{{$alumnos->email}}</td>
                                <td>{{$alumnos->sexo}}</td>
                                <td>{{$alumnos->camisa}}</td>
                                <td>{{$alumnos->pantalon}}</td>
                                <td>{{$alumnos->zapato}}</td>
                                <td>{{$alumnos->representantes->nombre}}</td>
                                <td>
                                    {!! link_to_route("alumno.edit", "Editar", $parameters = [$alumnos->id], $attributes = ["class"=>"btn btn-success"]) !!}
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
@endsection
