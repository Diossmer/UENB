@extends('layouts.app')
@section('title','Actualizar')
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
                <div class="panel-heading">Validación</div>

                <div class="panel-body">
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @elseif(session('añoescolar'))
    <div class="alert alert-info" role="alert">
        <li>{{session('añoescolar')}}</li>
    </div>
    @elseif(session('alumno'))
    <div class="alert alert-info" role="alert">
        <li>{{session('alumno')}}</li>
    </div>
    @elseif(session('representante'))
    <div class="alert alert-info" role="alert">
        <li>{{session('representante')}}</li>
    </div>
    @endif
    <div class="anioescolar">
        {!! Form::open(["url"=>["inscripcion/".$escolar->id],'method' => 'put', "autocomplete"=>"on","enctype"=>"multipart/form-data"]) !!}
        <span><h2 class="text-primary">Año escolar</h2></span> <br>
        {!! Form::token()!!}
<div class="row">
    <div class="col-md-3">
        {!! Form::label("fechaIngreso", "Fecha de Ingreso", ["class"=>"label label-primary"]) !!}
        {!! Form::date("fechaIngreso", $escolar->fechaIngreso, ["class"=>"form-control"]) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label("cedula", "Cedula", ["class"=>"label label-primary"]) !!}
        {!! Form::text("cedula", $escolar->cedula, ["class"=>"form-control", "placeholder" => "Cedula"]) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label("matricula", "Matricula", ["class"=>"label label-primary"]) !!}
        {!! Form::text("matricula", $escolar->matricula, ["class"=>"form-control", "placeholder"=>"matricula"]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        {!! Form::label("grado", "Grado", ["class"=>"label label-primary"]) !!}
        {!! Form::text("grado",$escolar->grado, ["class"=>"form-control", "placeholder"=>"Grado"]) !!}
    </div>
    <div class="col-md-2">
        {!! Form::label("seccion", "Seccion", ["class"=>"label label-primary"]) !!}
        {!! Form::text("seccion", $escolar->seccion, ["class"=>"form-control","placeholder"=>"Seccion"]) !!}
    </div>
</div>
        {!! Form::submit("Actualizar", ["class"=>"btn btn-primary"]) !!}
        {!!link_to_route('inscripcion.index','Regresar',"",['class'=>'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
    <div class="alumno">
        <h2 class="text-success">Alumno</h2>
        {!! Form::open(["route"=>["alumno.update",$alumno->id],'method' => 'put', "autocomplete"=>"off","enctype"=>"multipart/form-data"]) !!}
        {!! Form::token()!!}
        <img src="{{asset('images').'/'.$alumno->fotos}}" alt="" sizes="" srcset="" height="100" width="100">
        {!! Form::file('fotos', ["class"=>"text-primary","multiple"]) !!}
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
    {!! Form::text("dia", $alumno->dia, ["class"=>"form form-control","maxlength"=>"2"]) !!}
    </div>
    <div class="col-md-2">
    {!! Form::label("mes", "mes", ["class"=>"label label-success"]) !!}
    {!! Form::text("mes", $alumno->mes, ["class"=>"form form-control","maxlength"=>"2"]) !!}
    </div>
    <div class="col-md-2">
    {!! Form::label("anio", "Año", ["class"=>"label label-success"]) !!}
    {!! Form::text("anio", /*\Carbon\Carbon::createFromDate()->age*/$alumno->anio, ["class"=>"form form-control","maxlength"=>"4"]) !!}
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
    {!! Form::radio('sexo', 'Femenino',$alumno->sexo)!!}
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
    {!!link_to_route('inscripcion.index','Regresar',"",['class'=>'btn btn-success'])!!}
    {!! Form::close() !!}
    </div>
    <div class="representante">
        <span><h2 class="text-warning">Representante</h2></span> <br>
        {!! Form::open(["route"=>["representante.update",$representante->id],'method' => 'PUT', "autocomplete"=>"off","enctype"=>"multipart/form-data"]) !!}
        {!! Form::token()!!}
        <div class="row">
        <div class="col-md-3">
        {!! Form::label("nombres", "Nombres", ["class"=>"label label-warning"]) !!}
        {!! Form::text("nombres", $representante->nombres, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Nombre"]) !!}
        </div>
        <div class="col-md-3">
        {!! Form::label("segNombres", "Segundo Nombre", ["class"=>"label label-warning"]) !!}
        {!! Form::text("segNombres", $representante->segNombres, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Nombre"]) !!}
        </div>
        <div class="col-md-3">
        {!! Form::label("apellidos", "Apellido", ["class"=>"label label-warning"]) !!}
        {!! Form::text("apellidos", $representante->apellidos, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Apellido"]) !!}
        </div>
        <div class="col-md-3">
        {!! Form::label("segApellidos", "Segundo Apellido", ["class"=>"label label-warning"]) !!}
        {!! Form::text("segApellidos", $representante->segApellidos, ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Apellido"]) !!}
        </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {!! Form::label("gradoInstruccion", "Grado de Instruccion", ["class"=>"label label-warning"]) !!}
                {!! Form::text("gradoInstruccion", $representante->gradoInstruccion, ["class"=>"form-control", "placeholder"=>"Grado de Instruccion"]) !!}
                </div>
            <div class="col-md-4">
                {!! Form::label("lgTrabajo", "Lugar de trabajo", ["class"=>"label label-warning"]) !!}
                {!! Form::text("lgTrabajo", $representante->lgTrabajo, ["class"=>"form-control", "placeholder"=>"Lugar de trabajo"]) !!}
                </div>
            <div class="col-md-4">
                {!! Form::label("telefonos", "Telefonos", ["class"=>"label label-warning"]) !!}
                {!! Form::text("telefonos", $representante->telefonos, ["class"=>"form-control", "placeholder"=>"telefonos"]) !!}
            </div>
        </div>
        <div class="row">
        <div class="col-md-3">
        {!! Form::label("fNacimiento", "Fecha de nacimiento", ["class"=>"label label-warning"]) !!}
        {!! Form::date("fNacimiento", $representante->fNacimiento, ["class"=>"form form-control","maxlength"=>"10"]) !!}
        </div>
        <div class="col-md-4">
        {!! Form::label("trabajo", "Trabajo", ["class"=>"label label-warning"]) !!}
        {!! Form::text("trabajo", $representante->trabajo, ["class"=>"form-control", "placeholder"=>"Trabajo"]) !!}
        </div>
        <div class="col-md-5">
        {!! Form::label("email", "E-Mail Dirección ", ["class"=>"label label-warning"]) !!}
        {!! Form::text("email", $representante->email, ["class"=>"form form-control","placeholder"=>"E-Mail Dirección"]) !!}
        </div>
        </div>
        <div class="row">
        <div class="col-md-5">
        {!! Form::label("profOcupacion", "Profesion o Ocupacion", ["class"=>"label label-warning"]) !!}
        {!! Form::text("profOcupacion", $representante->profOcupacion, ["class"=>"form-control", "placeholder"=>"Profesion o Ocupacion"]) !!}
        </div>
        <div class="col-md-5">
        {!! Form::label("alumno_id", "Alumno", ["class"=>"label label-warning"]) !!}
        {!! Form::select("alumno_id", $estudiante, null,["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Selection Option"]) !!}
        </div>
        </div>
        {!! Form::submit("Actualizar", ["class"=>"btn btn-primary"]) !!}
        {!!link_to_route('inscripcion.index','Regresar',"",['class'=>'btn btn-success'])!!}
        {!! Form::close() !!}
    </div>
    <div class="Mostrar text-info">
        Mostrar Formulario de <b>REPRESENTANTE</b>, <b>ALUMNOS</b> y <b>AÑO ESCOLAR</b>
    {!!Form::select('formularios'/*,foreach,[$persona->name]*/,['placeholder'=>'Formularios','anioescolar' => 'Año Escolar','alumno' => 'Alumno','representante' => 'Representante'],old('roles'),["class"=>"form-control formularios"]) !!}
    </div>
@endsection
