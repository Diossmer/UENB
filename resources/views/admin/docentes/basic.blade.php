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
                {{-- <div class="panel-heading">Dashboard</div> --}}

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group">
                    <h1>Registro de la Aplicación</h1>
                    {!! Form::open(['route'=>'admin.store']) !!}
                    {{ csrf_field() }}
                    {!! Form::label('usuario', 'Usuario',['class'=>'']) !!}<br>
                    {{  Form::text('username',null,['class'=>'form-control']) }}
                    {!! Form::label('email', 'E-Mail Address', ['class' => ''])!!}<br>
                    {!! Form::text('email',null,['class'=>'form-control']) !!}
                    {!! Form::label('roles', 'Roles',['class'=>'']) !!}<br>
                    {!! Form::select('roles',['admin' => 'Administrador',
                    'users' => ['users' => 'Usuario']],null,['class'=>'form-control']) !!}
                    {!! Form::label('password','Password',['class'=>''])!!}
                    {!! Form::text('password',null,['class'=>'form-control']) !!}<br>
                    {!! Form::submit('Crear',['class'=>'btn btn-info']) !!}&nbsp;&nbsp;&nbsp;
                    {!! Form::button('Regresar',['class'=>'btn btn-success']) !!}
                    {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
