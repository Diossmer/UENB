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
        <div class="col-md-9 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Registro Universitario</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Creación</th>
                            <th scope="col">Actualización</th>
                        </tr>
                        </thead>
                        {{-- sección de aviso aqui --}}
                        @foreach ($usuario as $usuarios)
                        <tbody>
                            <tr>
                                <th scope="row">{{$usuarios->id}}</th>
                                <td>{{$usuarios->name}}</td>
                                <td>{{$usuarios->email}}</td>
                                <td>{{$usuarios->roles}}</td>
                                <td>{{$usuarios->created_at}}</td>
                                <td>{{$usuarios->updated_at}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{$usuario->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
