@extends('layouts.app')
@section('title','Actualizar')
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
                    {!! Form::open(["route"=>['alumno.update',$alumno->id],"method"=>"PUT", "autocomplete" => "off","enctype"=>"multipart/form-data"]) !!}
                    {!! Form::token() !!}
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('images').'/'.$alumno->fotos}}" alt="" sizes="" srcset="" height="100" width="100">
                            {!! Form::file("fotos",["class"=>"text-primary","multiple"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("nombre", "nombre", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("nombre", $alumno->nombre, ["class"=>"form-control","placeholder"=>"Nombre"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("segundo_nombre", "segundo_nombre", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("segundo_nombre", $alumno->segundo_nombre, ["class"=>"form-control","placeholder"=>"Segundo Nombre"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("apellido", "apellido", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("apellido", $alumno->apellido, ["class"=>"form-control","placeholder"=>"Apellido"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::label("segundo_apellido", "segundo_apellido", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("segundo_apellido", $alumno->segundo_apellido, ["class"=>"form-control","placeholder"=>"Segundo apellido"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("lugar_nacimiento", "lugar_nacimiento", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("lugar_nacimiento", $alumno->lugar_nacimiento, ["class"=>"form-control","placeholder"=>"Lugar nacimiento"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("direccion", "direccion", ["class"=>"label label-primary"]) !!}
                            {!! Form::textarea("direccion", $alumno->direccion, [ "rows"=>"0", "cols"=>"15","class"=>"form-control","placeholder"=>"Direccion"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("dia", "dia", ["class"=>"label label-primary"]) !!}
                            {!! Form::number("dia", $alumno->dia, ["class"=>"form-control","min"=>'1',"max"=>"30","maxlength"=>"2","placeholder"=>"1-30"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::label("mes", "mes", ["class"=>"label label-primary"]) !!}
                            {!! Form::number("mes", $alumno->mes, ["class"=>"form-control","min"=>"1","max"=>"12","maxlength"=>"2","placeholder"=>"1-12"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("año", "año", ["class"=>"label label-primary"]) !!}
                            {!! Form::number("año", $alumno->año, ["class"=>"form-control","min"=>"1990","max"=>"2020","placeholder"=>"1990-2030","maxlength"=>"4"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("cedula", "cedula", ["class"=>"label label-primary"]) !!}
                            {!! Form::number("cedula", $alumno->cedula, ["class"=>"form-control","maxlength"=>"9"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("email", "email", ["class"=>"label label-primary"]) !!}
                            {!! Form::email("email", $alumno->email, ["class"=>"form-control","placeholder"=>"Correo@Email.com"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::label("sexo", "Sexo", ["class"=>"label label-primary"]) !!}<br>
                            {!! Form::label("sexo", "Femenino", ["class"=>"text-primary"]) !!}
                            {!! Form::radio('sexo', 'Femenino',$alumno->sexo)!!}
                            {!! Form::label("sexo", "Masculino", ["class"=>"text-primary"]) !!}
                            {!! Form::radio('sexo', 'Masculino',$alumno->sexo)!!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::label("camisa", "camisa", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("camisa", $alumno->camisa, ["class"=>"form-control","placeholder"=>"Talla","maxlength"=>"2"]) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::label("pantalon", "pantalon", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("pantalon", $alumno->pantalon, ["class"=>"form-control","placeholder"=>"Talla","maxlength"=>"2"]) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::label("zapato", "zapato", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("zapato", $alumno->zapato, ["class"=>"form-control","placeholder"=>"Talla","maxlength"=>"2"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("enfermedade_padecida", "enfermedade_padecida", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("enfermedade_padecida", $alumno->enfermedade_padecida, ["class"=>"form-control","placeholder"=>"Enfermedades Padecida"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                        {!! Form::label("enfermedade_psicologica", "enfermedade_psicologica", ["class"=>"label label-primary"]) !!}
                        {!! Form::text("enfermedade_psicologica", $alumno->enfermedade_psicologica, ["class"=>"form-control","placeholder"=>"Enfermedades Psicologica"]) !!}
                        </div>
                        <div class="col-md-3">
                        {!! Form::label("representante_id", "representante", ["class"=>"label label-primary"]) !!}
                        {!! Form::select("representante_id", $representante, ["placeholder" => "seleccione"], ["class"=>"form-control"]) !!}
                        </div>
                    </div>
                    {!! Form::submit("Actializar", ["class"=>"btn btn-primary"]) !!}
                    {!! link_to_route("alumno.index", "Regresar", $parameters = [], $attributes = ["class"=>"btn btn-success"]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
