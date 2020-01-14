@extends('layouts.app')
@section('title','Administrador')
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
                    @component('components.who')
                    @endcomponent
                    <span><h1 class="text-sucess">Administrador</h1></span>
                    <table class="table" border="3">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Creación</th>
                            <th scope="col">Actualización</th>
                        </tr>
                        </thead>
                        {{-- sección de aviso aqui --}}
                        @foreach ($persona as $personas)
                        <tbody>
                            <tr>
                                <th scope="row">{{$personas->id}}</th>
                                <td>{{$personas->name}}</td>
                                <td>{{$personas->email}}</td>
                                <td>{{$personas->created_at}}</td>
                                <td>{{$personas->updated_at}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{$persona->links()}}
            </div>
        </div>
    </div>
@endsection
