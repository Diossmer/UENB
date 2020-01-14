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
                    <span>
                        <h1 class="text-sucess">
                            Administrador
                            {!!link_to_route('admin.create', $title = "Nuevo",$admin, ["class" => "btn btn-success"])!!}
                        </h1>
                    </span>
                    <table class="table table-responsive" border="3">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Creación</th>
                            <th scope="col">Actualización</th>
                            <th scope="col">Accion</th>
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
                                <td>
                                    <span>
                                        {!! Form::open(['route' => ['admin.delete',$admins->id], "method"=>"DELETE"]) !!}
                                        {!! csrf_field() !!}
                                        {!!link_to_route('admin.edit', $title = "Editar",$admins->id, ["class" => "btn btn-success"])!!}
                                        {!! Form::submit("Eliminar", ["class"=>"btn btn-danger"]) !!}
                                        {!! Form::close() !!}
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{$admin->links()}}
                    <span><h1 class="text-sucess">
                        Docentes
                    </h1></span>
                        <table class="table table-responsive" border="3">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Email</th>
                                <th scope="col">Creación</th>
                                <th scope="col">Actualización</th>
                                <th scope="col">Accion</th>
                            </tr>
                            </thead>
                            {{-- sección de aviso aqui --}}
                            @foreach ($docente as $docentes)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$docentes->id}}</th>
                                    <td>{!! link_to_route("user.show", $docentes->name,$docentes->id) !!}</td>
                                    <td>{{$docentes->apellido}}</td>
                                    <td>{{$docentes->email}}</td>
                                    <td>{{$docentes->created_at}}</td>
                                    <td>{{$docentes->updated_at}}</td>
                                    <td>
                                        <span>
                                            {!! Form::open(['route' => ['user.destroy',$docentes->id], "method"=>"DELETE"]) !!}
                                            {!! csrf_field() !!}
                                            {!!link_to_route('user.edit', $title = "Editar",$docentes->id, ["class" => "btn btn-success"])!!}
                                            {!! Form::submit("Eliminar", ["class"=>"btn btn-danger"]) !!}
                                            {!! Form::close() !!}
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                {{$docente->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
