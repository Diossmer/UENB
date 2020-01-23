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
                    {!! Form::open(["route"=>['seccion.store'],"method"=>"POST","autocomplete"=>"off"]) !!}
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
                        ], null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::label("grado", "Grado", ["class"=>"label label-primary"]) !!}
                            {!! Form::number("grado", "0".old('grado'), ["class"=>"form-control","placeholder"=>"1-6","maxlength"=>"1","min"=>"1","max"=>"6"]) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::label("cuposdisponible", "Cupos Disponible", ["class"=>"label label-primary"]) !!}
                            {!! Form::number("cuposdisponible", null, ["class"=>"form-control","placeholder"=>"1-30","maxlength"=>"2","min"=>"0","max"=>"30"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("docente_id", "Docente", ["class"=>"label label-primary"]) !!}
                            {!! Form::select("docente_id", $docente, null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("periodo_id", "Periodo Escolar", ["class"=>"label label-primary"]) !!}
                            {!! Form::select("periodo_id", $periodo, null, ["class"=>"form-control"]) !!}
                        </div>
                    </div>
                    {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
                    {!! link_to_route("seccion.index", "Regresar", null, ["class"=>"btn btn-success"]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
