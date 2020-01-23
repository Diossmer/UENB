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
                <div class="panel-heading">Inscripcion</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @elseif(session('inscripcion'))
                <div class="alert alert-info" role="alert">
                    <li>{{session('inscripcion')}}</li>
                </div>
                @endif
                <div class="panel-body">
                    {!! Form::open(["route"=>['inscripcion.update',$inscripcion->id],"method"=>"Put", "autocomplete" =>"off"]) !!}
                    {!! Form::token() !!}
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::label("alumno_id", "alumno", ["class"=>"label label-primary"]) !!}
                            {!! Form::select("alumno_id", $alumno, null, ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("seccion_id", "seccion", ["class"=>"label label-primary"]) !!}
                            {!! Form::select("seccion_id", $seccion, [], ["class"=>"form-control"]) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label("estatus_id", "estatus", ["class"=>"label label-primary"]) !!}
                            {!! Form::select("estatus_id", $estatus, null, ["class"=>"form-control"]) !!}
                        </div>
                        {{-- <div class="col-md-3">
                            {!! Form::label("periodoescolar_id", "periodoescolar", ["class"=>"label label-primary"]) !!}
                            {!! Form::select("periodoescolar_id", $estatus, ["placehoder"=>"selecciona un estatus"], ["class"=>"form-control"]) !!}
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                    </div>
                    {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
                    {!! link_to_route("inscripcion.index", "Regresar", $parameters = [null], $attributes = ["class"=>"btn btn-success"]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
