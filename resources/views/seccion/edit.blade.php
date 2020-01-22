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
                <div class="panel-heading">Seccion</div>
                <div class="panel-body">

                    {!! Form::open(["route"=>['seccion.update',$seccion->id],"method"=>"PUT","autocomplete"=>"off"]) !!}
                    {!! Form::token() !!}
                    <div class="row">
                        <div class="col-md-2">
                            {!! Form::label("descripcion", "Descripcion", ["class"=>"label label-primary"]) !!}
                            {!! Form::select("descripcion", [
                                "a"=>"A",
                                "b"=>"B",
                                "c"=>"C",
                                "d"=>"D",
                                "e"=>"E",
                                "f"=>"F"
                        ], $seccion->descripcion, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-1">
                            {!! Form::label("grado", "Grado", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("grado", $seccion->grado, ["class"=>"form-control","maxlength"=>"1","min"=>"1","max"=>"9"]) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::label("cuposdisponible", "Cupos Disponible", ["class"=>"label label-primary"]) !!}
                            {!! Form::text("cuposdisponible", $seccion->cuposdisponible, ["class"=>"form-control","maxlength"=>"2","min"=>"0","max"=>"30"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("docente_id", "Docente", ["class"=>"label label-primary"]) !!}
                            {!! Form::select("docente_id", $docente, null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("periodo_id", "Periodo Escolar", ["class"=>"label label-primary"]) !!}
                            {!! Form::select("periodo_id", $periodo, $periodo, ["class"=>"form-control"]) !!}
                        </div>
                    </div>
                    {!! Form::submit("Actualizar", ["class"=>"btn btn-primary"]) !!}
                    {!! link_to_route("seccion.index", "Regresar", null, ["class"=>"btn btn-success"]) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
