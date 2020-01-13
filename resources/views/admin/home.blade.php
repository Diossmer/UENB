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
                    <span><h1 class="text-sucess">Administrador</h1></span>
                    <table class="table">
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
                        @foreach ($admin as $admins)
                        <tbody>
                            <tr>
                                <th scope="row">{{$admins->id}}</th>
                                <td>{{$admins->name}}</td>
                                <td>{{$admins->email}}</td>
                                <td>{{$admins->created_at}}</td>
                                <td>{{$admins->updated_at}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{$admin->links()}}
                    <span><h1 class="text-sucess">Docente</h1></span>
                        <table class="table">
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
                            @foreach ($docente as $admins)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$admins->id}}</th>
                                    <td>{{$admins->name}}</td>
                                    <td>{{$admins->email}}</td>
                                    <td>{{$admins->created_at}}</td>
                                    <td>{{$admins->updated_at}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        {{$docente->links()}}
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
