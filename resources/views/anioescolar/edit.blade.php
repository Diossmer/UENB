@extends('layouts.app')
@section('title','Create')
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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inscripción</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive-sm">
                        @if(session()->has('añoescolar'))
                    <div class="alert alert-info" role="alert">{{session('añoescolar')}}</div>
                        @endif

    <div class="anioescolasr">
        {!! Form::open(["route"=>["anioescolar.update",$escolar->id],"method"=>"PUT", "autocomplete"=>"on","enctype"=>"multipart/form-data"]) !!}
        <span><h2 class="text-success">Año escolar</h2></span> <br>
        {!! Form::token()!!}
<div class="row">
    <div class="col-md-3">
        {!! Form::label("fechaIngreso", "Fecha de Ingreso", ["class"=>"label label-primary"]) !!}
        {!! Form::date("fechaIngreso", $escolar->fechaIngreso, ["class"=>"form-control"]) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label("cedula", "Cedula", ["class"=>"label label-primary"]) !!}
        {!! Form::text("cedula", $escolar->cedula, ["class"=>"form-control", "placeholder" => "Cedula"]) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label("matricula", "Matricula", ["class"=>"label label-primary"]) !!}
        {!! Form::text("matricula", $escolar->matricula, ["class"=>"form-control", "placeholder"=>"matricula"]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        {!! Form::label("grado", "Grado", ["class"=>"label label-primary"]) !!}
        {!! Form::text("grado",$escolar->grado, ["class"=>"form-control", "placeholder"=>"Grado"]) !!}
    </div>
    <div class="col-md-2">
        {!! Form::label("seccion", "Seccion", ["class"=>"label label-primary"]) !!}
        {!! Form::text("seccion", $escolar->seccion, ["class"=>"form-control","placeholder"=>"Seccion"]) !!}
    </div>
</div>
        {!! Form::submit("Actualizar", ["class"=>"btn btn-primary"]) !!}
        {!!link_to_route('anioescolar.index','Regresar',"",['class'=>'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
@endsection
