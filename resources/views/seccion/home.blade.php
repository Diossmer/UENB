@extends('layouts.app')
@section('title','Seccion')
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
                <div class="panel-heading">Seccion</div>

                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @elseif(session('seccion'))
                <div class="alert alert-info" role="alert">
                    <li>{{session('seccion')}}</li>
                </div>
                @endif

                <div class="panel-body">
                    <table class="table table-active">
                        <caption class="text-center text-success">Seccion {!! link_to_route("seccion.create", "Nuevo", null, ["class"=>"btn btn-primary"]) !!}</caption>
                        <thead>
                            <tr>
                                <th>Descripcion</th>
                                <th>Grado</th>
                                <th>Cupos disponible</th>
                                <th>Docente</th>
                                <th>Periodo Escolar</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seccion as $secciones)
                                <tr>
                                    <td>{{$secciones->descripcion}}</td>
                                    <td>{{$secciones->grado}}</td>
                                    <td>{{$secciones->cuposdisponible}}</td>
                                    <td>{{$secciones->docente_id}}</td>
                                    <td>{{$secciones->periodo_id}}</td>
                                    <td>
                                        {!! link_to_route("seccion.edit", "Editar", $parameters = [$secciones->id], $attributes = ["class"=>"btn btn-success"]) !!}
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
