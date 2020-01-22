@extends('layouts.app')
@section('title','Docentes')
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
                <div class="panel-heading">Bienvenidos</div>
                <div class="panel-body">

        <table class="table table-active">
            <caption class="text-primary">Periodo Escolar {!! link_to_route("periodoescolar.create", "Nuevo", null,$attributes = ['class'=>'btn btn-primary']) !!}</caption>
            <thead>
                <tr>
                    <th>Descripcion</th>
                    <th>Fecha inicio</th>
                    <th>Fecha fin</th>
                    <th>Estatus</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($periodo as $periodos)
                    <tr>
                        <td>{{$periodos->descripcion}}</td>
                        <td>{{$periodos->fecha_inicio}}</td>
                        <td>{{$periodos->fecha_fin}}</td>
                        <td>{{$periodos->estatus}}</td>
                        <td>
                            {!! link_to_route("periodoescolar.edit", "Editar", $parameters = [$periodos->id], $attributes = ["class"=>"btn btn-success"]) !!}
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
