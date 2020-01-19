@extends('layouts.app')
@section('title','')
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
        <div class="col-md-9 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Parroquia La Vegas</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table table-responsive-sm table-bordered">
                    <caption class="table text-center">Año escolar</caption>
                    <thead>
                        <tr valing="middle" align="center">
                        <th scope="col">Grado</th>
                        <th scope="col">Seccion</th>
                        <th scope="col">cedula</th>
                        <th scope="col">fechaIngreso</th>
                        <th scope="col">matricula</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($escolar as $escolares)
                            <tr valing="middle" align="center">
                            <td>{{$escolares->grado}}</td>
                            <td>{{$escolares->seccion}}</td>
                            <td>{{link_to_route('ExportarPDF.USER',$escolares->cedula,$escolares->id) }}</td>
                            <td>{{$escolares->fechaIngreso}}</td>
                            <td>{{$escolares->matricula}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="table table-responsive-sm table-bordered">
                    <caption class="table text-center">Alumnos </caption>
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
                        @foreach ($alumno as $alumnos)
                            <tr valing="middle" align="center">
                            <td><img src="images/{{$alumnos->fotos}}" alt="" sizes="" srcset="" height="100" width="100"></td>
                            <td>{{$alumnos->anioEscolar_id}}</td>
                            <td>{{$alumnos->segNombres}}</td>
                            <td>{{$alumnos->apellidos}}</td>
                            <td>{{$alumnos->segApellidos}}</td>
                            <th>{{\Carbon\Carbon::createFromDate($alumnos->anio)->age}}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <table class="table table-responsive-sm table-bordered">
                    <caption class="table text-center">Representantes </caption>
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
                        @foreach ($representante as $representantes)
                            <tr valing="middle" align="center">
                            <td><img src="images/{{$alumnos->fotos}}" alt="" sizes="" srcset="" height="100" width="100"></td>
                            <td>{{$alumnos->nombres}}</td>
                            <td>{{$alumnos->segNombres}}</td>
                            <td>{{$alumnos->apellidos}}</td>
                            <td>{{$alumnos->segApellidos}}</td>
                            <th>{{\Carbon\Carbon::createFromDate($alumnos->anio)->age}}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection
