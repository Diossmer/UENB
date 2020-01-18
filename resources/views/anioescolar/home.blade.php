@extends('layouts.app')
@section('title','inscripcion')
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
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inscripcion</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-responsive-sm table-bordered">
                        <caption class="table text-center">Inscripción
                            {!!link_to_route('anioescolar.create', $title = "Registrarse",null, ["class" => "btn btn-success"])!!}
                        </caption>
                        <thead>
                            <tr>
                            <th scope="col">Grado</th>
                            <th scope="col">Seccion</th>
                            <th scope="col">cedula</th>
                            <th scope="col">fechaIngreso</th>
                            <th scope="col">matricula</th>
                            <th scope="col">accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($escolar as $escolares)
                                <tr>
                                <td>{{$escolares->grado}}</td>
                                <td>{{$escolares->seccion}}</td>
                                <td>{{$escolares->cedula}}</td>
                                <td>{{$escolares->fechaIngreso}}</td>
                                <td>{{$escolares->matricula}}</td>
                                <td>
                                        {!!link_to_route('anioescolar.edit', $title = "Editar",$escolares->id, ["class" => "btn btn-success"])!!}
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$escolar->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
