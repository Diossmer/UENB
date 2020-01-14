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
                <div class="panel-heading">Docentes</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive-sm">
                        {!! Form::open(["route"=>["inscripcion.store"],"method"=>"POST", "autocomplete"=>"off"]) !!}
                        {!! Form::label("nombres", "Nombres", ["class"=>"label label-primary"]) !!}
                        {!! Form::text("nombres", false?true:false, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Nombre"]) !!}
                        {!! Form::label("segNombres", "Segundo Nombre", ["class"=>"label label-info"]) !!}
                        {!! Form::text("segNombres", false?true:false, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Nombre"]) !!}
                        {!! Form::label("apellidos", "Apellido", ["class"=>"label label-info"]) !!}
                        {!! Form::text("apellidos", false?true:false, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Apellido"]) !!}

                        {!! Form::label("segApellidos", "Segundo Apellido", ["class"=>"label label-primary"]) !!}
                        {!! Form::text("segApellidos", false?true:false, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Apellido"]) !!}
                        {!! Form::label("lgNacimiento", "Lugar de Nacimiento", ["class"=>"label label-info"]) !!}
                        {!! Form::text("lgNacimiento", false?true:false, ["class"=>"form form-control","placeholder"=>"Lugar de Nacimiento"]) !!}
                        {!! Form::label("direccion", "Dirección", ["class"=>"label label-info"]) !!}
                        {!! Form::text("direccion", false?true:false, ["class"=>"form form-control","placeholder"=>"Dirección"]) !!}

                        {!! Form::label("fNacimiento", "Fecha de nacimiento", ["class"=>"label label-primary"]) !!}
                        {!! Form::date("fNacimiento", false?true:false, ["class"=>"form form-control","maxlength"=>"10"]) !!}
                        {!! Form::label("email", "E-Mail Dirección ", ["class"=>"label label-primary"]) !!}
                        {!! Form::text("email", false?true:false, ["class"=>"form form-control","placeholder"=>"E-Mail Dirección"]) !!}
                        {!! Form::label("roles", "Roles", ["class"=>"label label-info"]) !!}
                        {!!Form::select('roles'/*,foreach,[$persona->name]*/,['representante' => 'Representante','alumno' => 'Alumno'],false?true:false,["class"=>"form-control"]) !!}

                        {!! Form::label("edad", "Edad", ["class"=>"label label-info"]) !!}
                        {!! Form::text("edad", false?true:false, ["class"=>"form-control","maxlength"=>"2"]) !!}
                        {!! Form::label("sexo", "Sexo", ["class"=>"label label-info"]) !!}
                        {!! Form::label("sexo", "Masculino", ["class"=>"text-primary"]) !!}
                        {!! Form::radio('sexo', 'Masculino')!!}
                        {!! Form::label("sexo", "Femenino", ["class"=>"text-primary"]) !!}
                        {!! Form::radio('sexo', 'Femenino')!!} <br>
                        {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
                        {!!link_to_route('user.index','Regresar',"",['class'=>'btn btn-success'])!!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
