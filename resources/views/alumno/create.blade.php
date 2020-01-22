@extends('layouts.app')
@section('title','Registrar')
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
                <div class="panel-heading">Alumno</div>
                <div class="panel-body">
                    {!! Form::open(["route"=>['alumno.store'],"method"=>"Post", "autocomplete" =>"off","enctype"=>"multipart/form-data"]) !!}
                    {!! Form::token() !!}
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::label("fotos", "fotos", ["class"=>"label label-primary"]) !!}
                            {!! Form::file("fotos", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("nombre", "nombre", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("nombre", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("segundo_nombre", "segundo_nombre", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("segundo_nombre", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("apellido", "apellido", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("apellido", null, ["class"=>"form-control"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::label("segundo_apellido", "segundo_apellido", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("segundo_apellido", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("lugar_nacimiento", "lugar_nacimiento", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("lugar_nacimiento", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("direccion", "direccion", ["class"=>"label label-primary"]) !!}
                            {!! Form::textarea("direccion", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("dia", "dia", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("dia", null, ["class"=>"form-control"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::label("mes", "mes", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("mes", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("año", "año", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("año", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("cedula", "cedula", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("cedula", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("email", "email", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("email", null, ["class"=>"form-control"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::label("sexo", "Sexo", ["class"=>"label label-primary"]) !!}<br>
                            {!! Form::label("sexo", "Femenino", ["class"=>"text-primary"]) !!}
                            {!! Form::radio('sexo', 'Femenino')!!}
                            {!! Form::label("sexo", "Masculino", ["class"=>"text-primary"]) !!}
                            {!! Form::radio('sexo', 'Masculino')!!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::label("camisa", "camisa", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("camisa", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::label("pantalon", "pantalon", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("pantalon", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::label("zapato", "zapato", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("zapato", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("enfermedade_padecida", "enfermedade_padecida", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("enfermedade_padecida", null, ["class"=>"form-control"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                        {!! Form::label("enfermedade_psicologica", "enfermedade_psicologica", ["class"=>"label label-primary"]) !!}
                        {!! Form::text("enfermedade_psicologica", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                        {!! Form::label("representante_id", "representante_id", ["class"=>"label label-primary"]) !!}
                        {!! Form::select("representante_id", $representante, ["placeholder" => "seleccione"], ["class"=>"form-control"]) !!}
                        </div>
                    </div>
                    {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
                    {!! link_to_route("alumno.index", "Editar", $parameters = [null], $attributes = ["class"=>"btn btn-success"]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
