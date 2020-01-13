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
                        {{-- @foreach ($usuario as $usuarios)
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
                    {{$usuario->links()}} --}}
                </div>
            </div>
        </div>
    </div>












    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ADMIN Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.who')
                    @endcomponent
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
