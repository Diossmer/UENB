@extends('layouts.app')
@section('title','Representante')
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
                <div class="panel-heading">Representante</div>
                <div class="panel-body">
                    <table class="table" cellpadding="" cellspacing="" border="2">
                        <caption class="text-center text-success">Representantes{!! link_to_route("representante.create", "Nuevo", null, ["class"=>"btn btn-primary"]) !!}</caption>
                        <thead>
                            <tr valing="middle" align="center">
                                <th>nombre</th>
                                <th>apellido</th>
                                <th>cedula</th>
                                <th>email</th>
                                <th>trabajo</th>
                                <th>grado_instruccion</th>
                                <th>profesion_ocupacion</th>
                                <th>lugar_trabajo</th>
                                <th>telefono</th>
                                <th>accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($representante as $representantes)
                            <tr valing="middle" align="center">
                                <td>{{$representantes->nombre}}</td>
                                <td>{{$representantes->apellido}}</td>
                                <td>{{$representantes->cedula}}</td>
                                <td>{{$representantes->email}}</td>
                                <td>{{$representantes->trabajo}}</td>
                                <td>{{$representantes->grado_instruccion}}</td>
                                <td>{{$representantes->profesion_ocupacion}}</td>
                                <td>{{$representantes->lugar_trabajo}}</td>
                                <td>{{$representantes->telefono}}</td>
                                <td>
                                    {!! link_to_route('representante.edit', "Editar", $representantes->id, ["class"=>"btn btn-success"]) !!}
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
