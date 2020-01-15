@extends('layouts.app')
@section('title','Docentes')
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
                <div class="panel-heading">Registro Universitario</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <span><h1 class="text-sucess">Registro</h1></span>
                    <table class="table" border="3">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            Aqui va personEscuela
                        </tbody>

            </div>
        </div>
    </div>
@endsection
