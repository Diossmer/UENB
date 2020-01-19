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
                <div class="panel-heading">Inscripción</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive-sm">
                        @if(session()->has('alumno'))
                    <div class="alert alert-info" role="alert">{{session('alumno')}}</div>
                    @endif
    {!! Form::open(["route"=>["alumno.update",$alumno->id],"method"=>"PUT", "autocomplete"=>"off","enctype"=>"multipart/form-data"]) !!}
    {!! Form::token()!!}
                    <img src="{{asset('images').'/'.$alumno->fotos}}" alt="" sizes="" srcset="" height="100" width="100">{!! Form::file('fotos', ["class"=>"text-primary","multiple"]) !!}
<div class="row">
    <div class="col-md-3">
    {!! Form::label("nombres", "Nombres", ["class"=>"label label-success"]) !!}
    {!! Form::text("nombres", $alumno->nombres, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Nombre"]) !!}
    </div>
    <div class="col-md-3">
    {!! Form::label("segNombres", "Segundo Nombre", ["class"=>"label label-success"]) !!}
    {!! Form::text("segNombres", $alumno->segNombres, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Nombre"]) !!}
    </div>
    <div class="col-md-3">
    {!! Form::label("apellidos", "Apellido", ["class"=>"label label-success"]) !!}
    {!! Form::text("apellidos", $alumno->apellidos, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Apellido"]) !!}
    </div>
    <div class="col-md-3">
    {!! Form::label("segApellidos", "Segundo Apellido", ["class"=>"label label-success"]) !!}
    {!! Form::text("segApellidos", $alumno->segApellidos, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Apellido"]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3">
    {!! Form::label("estatus", "Estatus", ["class"=>"label label-success"]) !!}
    {!! Form::text("estatus", $alumno->estatus, ["class"=>"form-control", "placeholder"=>"Estatus"]) !!}
    </div>
    <div class="col-md-3">
    {!! Form::label("lgNacimiento", "Lugar de Nacimiento", ["class"=>"label label-success"]) !!}
    {!! Form::text("lgNacimiento", $alumno->lgNacimiento, ["class"=>"form form-control","placeholder"=>"Lugar de Nacimiento"]) !!}
    </div>
    <div class="col-md-2">
    {!! Form::label("dia", "dia", ["class"=>"label label-success"]) !!}
    {!! Form::text("dia", $alumno->dia, ["class"=>"form form-control","maxlength"=>"10"]) !!}
    </div>
    <div class="col-md-2">
    {!! Form::label("mes", "mes", ["class"=>"label label-success"]) !!}
    {!! Form::text("mes", $alumno->mes, ["class"=>"form form-control","maxlength"=>"10"]) !!}
    </div>
    <div class="col-md-2">
    {!! Form::label("anio", "Año", ["class"=>"label label-success"]) !!}
    {!! Form::text("anio", /*\Carbon\Carbon::createFromDate()->age*/$alumno->anio, ["class"=>"form form-control","maxlength"=>"10"]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    {!! Form::label("direccion", "Dirección", ["class"=>"label label-success"]) !!}
    {!! Form::textarea("direccion", $alumno->direccion, ["class"=>"form form-control","placeholder"=>"Dirección",'rows' => 2, 'cols' => 40]) !!}
    </div>
    <div class="col-md-6">
    {!! Form::label("email", "E-Mail Dirección ", ["class"=>"label label-success"]) !!}
    {!! Form::text("email", $alumno->email, ["class"=>"form form-control","placeholder"=>"E-Mail Dirección"]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4">
    {!! Form::label("sexo", "sexo", ["class"=>"label label-success"]) !!}<br>
    {!! Form::label("sexo", "Femenino", ["class"=>"text-primary"]) !!}
    {!! Form::radio('sexo', 'Femenino')!!}
    {!! Form::label("sexo", "Masculino", ["class"=>"text-primary"]) !!}
    {!! Form::radio('sexo', 'Masculino')!!} <br>
    </div>
    <div class="col-md-4">
    {!! Form::label("enfemPadecida", "Enfermedades Padecidas", ["class"=>"label label-danger"]) !!}
    {!! Form::text("enfemPadecida", $alumno->enfemPadecida, ["class"=>"form-control", "placeholder"=>"Enfermedades Padecidas"]) !!}
    </div>
    <div class="col-md-4">
    {!! Form::label("enfemPsicologica", "Enfermedades Psicologíca", ["class"=>"label label-danger"]) !!}
    {!! Form::text("enfemPsicologica", $alumno->enfemPsicologica, ["class"=>"form-control", "placeholder"=>"Enfermedades Psicologíca"]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-2">
    {!! Form::label("camisas", "Camisa", ["class"=>"label label-info"]) !!}
    {!! Form::text("camisas", $alumno->camisas, ["class"=>"form-control", "placeholder"=>"S"]) !!}
    </div>
    <div class="col-md-2">
    {!! Form::label("pantalon", "Pantalon", ["class"=>"label label-info"]) !!}
    {!! Form::text("pantalon", $alumno->pantalon, ["class"=>"form-control", "placeholder"=>"S"]) !!}
    </div>
    <div class="col-md-2">
    {!! Form::label("zapatos", "Zapatos", ["class"=>"label label-info"]) !!}
    {!! Form::text("zapatos", $alumno->zapatos, ["class"=>"form-control", "placeholder"=>"S"]) !!}
    </div>
    <div class="col-md-6">
    {!! Form::label("anioEscolar_id", "Año Escolar", ["class"=>"label label-success"]) !!}
    {!! Form::select("anioEscolar_id", $anioescolar,null,["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Selection Option"]) !!}
    </div>
</div>
    {!! Form::submit("Actualizar", ["class"=>"btn btn-primary"]) !!}
    {!!link_to_route('alumno.index','Regresar',"",['class'=>'btn btn-success'])!!}
    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
