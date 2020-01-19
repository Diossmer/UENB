@extends('layouts.app')
@section('title','inscripcion')
@section('css')
@parent
{{-- link de css --}}
@show

@section('script-top')
@parent
{{-- link de js --}}
@show

@section('script-bottom')
{{-- link de js --}}
@parent
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
        <div class="col-md-9 col-md-offset-2">
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
                            {!!link_to_route('alumno.create', $title = "Registrarse",null, ["class" => "btn btn-success"])!!}
                        </caption>
                        <thead>
                            <tr>
                            <th scope="col">Usuario</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">segNombres</th>
                            <th scope="col">apellidos</th>
                            <th scope="col">segApellidos</th>
                            <th scope="col">rol</th>
                            <th scope="col">edad</th>
                            <th scope="col">sexo</th>
                            <th scope="col">cedula</th>
                            <th scope="col">accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumno as $alumnos)
                                <tr>
                                    <td>
                                    <img src="{{asset("images/".$alumnos->fotos)}}" alt="zz" sizes="" srcset="" height="100" width="100">
                                    </td>
                                <td>{{$alumnos->nombres}}</td>
                                <td>{{$alumnos->segNombres}}</td>
                                <td>{{$alumnos->apellidos}}</td>
                                <td>{{$alumnos->segApellidos}}</td>
                                <td>{{$alumnos->roles}}</td>
                                <td>{{$alumnos->edad}}</td>
                                <td>{{$alumnos->sexo}}</td>
                                <td>{{$alumnos->cedula}}</td>

                                <td>
                                        {!!link_to_route('alumno.edit', $title = "Editar",$alumnos->id, ["class" => "btn btn-success"])!!}
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$alumno->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
