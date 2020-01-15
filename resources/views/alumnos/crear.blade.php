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
                    {!!Form::open(['url' => 'padre/'.$docentes->id, 'method' => 'Put'])!!}
                    {{csrf_field()}}
                    {{Form::label('nombres', 'Nombre del Padre:')}}
                    {!!Form::text('name',$docentes->name,['placeholder' => 'Name'])!!}<br>
                    {{Form::label('apellidos', 'Apellido del Padre:')}}
                    {!!Form::text('lastname',$docentes->lastname,['placeholder' => 'Lastname'])!!}<br>
                    {{Form::label('edad', 'Edad del Padre:')}}
                    {!!Form::text('age',$docentes->age,['placeholder' => 'Age'])!!}<br>
                    {{Form::label('color', 'Color del Padre:')}}
                    {!!Form::text('color',$docentes->color,['placeholder' => 'Color','Required'])!!}<br>
                    {!!Form::submit('Actualizar')!!}
                    {!!Form::reset('Borrar')!!}
                    {!!Form::button(link_to_route('admin.dashboard ','Regresar'))!!}
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>@endsection
