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
                <div class="panel-heading">Docentes</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-header">
                        <span>Mostrar las personas agregadas</span>
                        {!! Form::open(["route"=>["inscripcion.uniontabla"],"method"=>"POST"]) !!}
                        {!! Form::label("Buscar", "Buscar", ["class"=>"label label-primary"]) !!}
                        {!! Form::select("personas_id", $persona,null,['placeholder'=>'Select Option'], ["class"=>"form-control"]) !!}
                        {!! Form::select("anioEscolar_id",$anioEscolar,null,['placeholder'=>'Select Option'], ["class"=>"form-control"]) !!}
                        {!! Form::submit("Guardar", ["class"=>"btn btn-danger"]) !!}
                        {!! Form::close() !!}
                    </div>
                    <table class="table-responsive-sm">
                        <caption>Inscripción</caption>
                        <thead>
                            <tr>
                            <th scope="col">Mostrar</th>
                            <th scope="col">segNombres</th>
                            <th scope="col">apellidos</th>
                            <th scope="col">segApellidos</th>
                            <th scope="col">rol</th>
                            <th scope="col">edad</th>
                            <th scope="col">sexo</th>
                            <th scope="col">cedula</th>
                            <th scope="col">estatus</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
