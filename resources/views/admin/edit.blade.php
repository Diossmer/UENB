@extends('layouts.app')
@section('title','Editar')
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
                {{-- <div class="panel-heading">Dashboard</div> --}}

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group">
                    <h1>Registro de la Aplicación</h1>
                    {!!Form::open(['url' => 'admin/'.$admin->id, 'method' => 'PUT',"autocomplete"=>"off"])!!}
                    {{csrf_field()}}
                    {{Form::label('nombres', 'Nombre del Padre:')}}
                    {!!Form::text('name',$admin->name,['class' => 'form-control'])!!}<br>
                    {{Form::label('email', 'Email')}}
                    {!!Form::text('email',$admin->email,['class' => 'form-control'])!!}<br>
                    {{Form::label('password', 'Contraseña')}}
                    {!!Form::text('password',$admin->password,['class' => 'form-control','maxlength'=>'10'])!!}<br>

                    {!!Form::submit('Actualizar',["class"=>'btn btn-primary'])!!}
                    {!!Form::reset('Borrar',["class"=>'btn btn-info'])!!}
                    {!!link_to_route('admin.dashboard','Regresar',"",['class'=>'btn btn-success'])!!}
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
