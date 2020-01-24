@extends('layouts.app')
@section('title','Inscripcion')
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
                <div class="panel-heading">Inscripcion</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @elseif(session('inscripcion'))
                <div class="alert alert-info" role="alert">
                    <li>{{session('inscripcion')}}</li>
                </div>
                @endif
                <div class="panel-body">
                    <table class="table">
                        <caption class="text-center text-success">Inscripcion {!! link_to_route("inscripcion.create", "Nuevo", null,$attributes = ['class'=>'btn btn-primary']) !!}</caption>
                        <thead>
                            <th>id</th>
                            <th>alumno_id</th>
                            <th>seccion_id</th>
                            <th>estatus_id</th>
                            <th>action</th>
                        </thead>
                        <tbody>
                            @foreach($inscripcion as $inscripcions)
                            <tr>
                                <td>{{$inscripcions->id}}</td>
                                <td>
                                @foreach ($alumno as $alumnos)
                                {{$alumnos}}
                                <br>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($seccion as $seccions)
                                {{$seccions}}
                                <br>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($estatus as $estatu)
                                {{$estatu}}
                                <br>
                                @endforeach
                            </td>
                            <td>
                                {!! link_to_route("inscripcion.edit", "Editar", $parameters = [$inscripcions->id], $attributes = ["class"=>""]) !!} |
                                {!! link_to_route("inscripcion.show", "Generar PDF", $parameters = [$inscripcions->id], $attributes = ["class"=>"","target"=>"_blank"]) !!} <br>
                            </td>
                            @endforeach
                            </tr>
                        </tbody>
                        {{-- {{$inscripcion->links()}} --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
