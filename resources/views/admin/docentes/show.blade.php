@extends('layouts.app')
@section('title','Mostrar')
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
@include('admin.include.nav')
@endsection

@section('sidebar')
@include('admin.include.aside')
@endsection

@section('footer')
@include('admin.include.footer')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">{{$docente->name}}</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class=" text-justify">
                            {!!link_to('/admin','Volver',["class"=>"btn btn-primary"]) !!}
                            <table class="table table-hover table-responsive-sm">
                            <h1>Docente: {{$docente->name}}&nbsp;{{$docente->apellido}}<h1>
                                <caption class="text-primary tw-3"><b>Alumnos</b></caption>
                                <thead>
                                    <tr>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Seg-Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Seg-Apellidos</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Sexo</th>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Estatus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="active">ALUMNOS->name</td>
                                        <td class="succes">NOMBRES</td>
                                        <td class="danger">Apellido</td>
                                        <td class="warning">BLA BLA</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-right">
                                <span class="text-left text-primary"><b>Director: &nbsp;
                                <br>
                                <span class="text-right text-primary"><b>Representante: &nbsp;$representante->name</b></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
