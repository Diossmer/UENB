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
                <div class="panel-heading">Representante</div>
                <div class="panel-body">
                    {!! Form::open(["route"=>['representante.store'],"method"=>"Post", "autocomplete" =>"off"]) !!}
                    {!! Form::token() !!}
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::label("nombre", "Nombre", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("nombre", null, ["class"=>"form-control","placeholder"=>"Nombre"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("segundo_nombre", "Segundo nombre", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("segundo_nombre", null, ["class"=>"form-control","placeholder"=>"Segundo nombre"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("apellido", "Apellido", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("apellido", null, ["class"=>"form-control","placeholder"=>"Apellido"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("segundo_apellido", "Segundo apellido", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("segundo_apellido", null, ["class"=>"form-control","placeholder"=>"segundo apellido"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::label("cedula","Cedula", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("cedula", null, ["class"=>"form-control","maxlength"=>"8","placeholder"=>"V-xxxxxxxx"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("email", "email", ["class"=>"label label-primary"]) !!}
                            {!! Form::email("email", null, ["class"=>"form-control","placeholder"=>"Correo@correo.com"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("fecha_nacimiento", "Fecha Nacimiento", ["class"=>"label label-primary"]) !!}
                            {!! Form::date("fecha_nacimiento", null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("trabajo", "Trabajo", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("trabajo", null, ["class"=>"form-control","placeholder"=>"Si/No"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::label("grado_instruccion", "grado_instruccion", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("grado_instruccion", null, ["class"=>"form-control","placeholder"=>"Universitaro"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("profesion_ocupacion","Profesion Ocupacion", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("profesion_ocupacion", null, ["class"=>"form-control","placeholder"=>"Profesion Ocupacion"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("lugar_trabajo", "Lugar de trabajo", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("lugar_trabajo", null, ["class"=>"form-control","placeholder"=>"Lugar de trabajo"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("telefono", "Telefono", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("telefono", null, ["class"=>"form-control","placeholder"=>"0212-xxx-xx-xx"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            {!! Form::label("sexo", "Sexo", ["class"=>"label label-primary"]) !!}<br>
                            {!! Form::label("sexo", "Femenino", ["class"=>"text-primary"]) !!}
                            {!! Form::radio('sexo', 'Femenino')!!}
                            {!! Form::label("sexo", "Masculino", ["class"=>"text-primary"]) !!}
                            {!! Form::radio('sexo', 'Masculino')!!}
                        </div>
                    </div>
                    {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
                    {!! link_to_route("representante.index", "Editar", $parameters = [null], $attributes = ["class"=>"btn btn-success"]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
