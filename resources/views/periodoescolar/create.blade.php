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
                <div class="panel-heading">Periodo Escolar</div>

                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @elseif(session('periodoescolar'))
                <div class="alert alert-info" role="alert">
                    <li>{{session('periodoescolar')}}</li>
                </div>
                @endif



                <div class="panel-body">
                    {!! Form::open(["route"=>['periodoescolar.store'],"method"=>"POST", "autocomplete" => "off"]) !!}
                    {!! Form::token() !!}
                    <div class="row">
                        <div class="col-md-3">
                        {!! Form::label("descripcion", "Descripcion", ["class"=>"label label-primary"]) !!}
                        {!! Form::select("descripcion", [
                            "2019-2020"=>"2019-2020",
                            "2020-2021"=>"2020-2021",
                            "2021-2022"=>"2021-2022",
                            "2022-2023"=>"2022-2024"
                            ], old('estatus'),["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                        {!! Form::label("fecha_inicio", "Fecha inicio", ["class"=>"label label-primary"]) !!}
                        {!! Form::date("fecha_inicio", \Carbon\Carbon::now() , ["class"=>"form-control","min"=>"2020-01-01","max"=>"2024-12-31"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("fecha_fin", "Fecha fin", ["class" => "label label-primary"]) !!}
                            {!! Form::date("fecha_fin", \Carbon\Carbon::now(), ["class"=>"form-control","min"=>"2020-02-01","max"=>"2024-12-31"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("estatus", "Estatus", ["class"=>"label label-primary"]) !!}
                            {!! Form::select("estatus", ["activo"=>"Activo","inactivo"=>"Inactivo","regular"=>"Regular"], old('estatus'),["class"=>"form-control"]) !!}
                        </div>
                    </div>
                    {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
                    {!! link_to('home', "Regresar",["class"=>"btn btn-success"]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
