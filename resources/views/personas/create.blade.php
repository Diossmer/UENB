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
                <div class="panel-heading">Inscripción</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive-sm">
    {!! Form::open(["route"=>["inscripcion.store"],"method"=>"POST", "autocomplete"=>"on"]) !!}
    {!! Form::label("nombres", "Nombres", ["class"=>"label label-success"]) !!}
    {!! Form::text("nombres", old("nombres"), ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Nombre"]) !!}

    {!! Form::label("segNombres", "Segundo Nombre", ["class"=>"label label-success"]) !!}
    {!! Form::text("segNombres", old('segNombres'), ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Nombre"]) !!}

    {!! Form::label("apellidos", "Apellido", ["class"=>"label label-success"]) !!}
    {!! Form::text("apellidos", old('apellidos'), ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Apellido"]) !!}

    {!! Form::label("segApellidos", "Segundo Apellido", ["class"=>"label label-success"]) !!}
    {!! Form::text("segApellidos", old('segApellidos'), ["class"=>"form form-control","maxlength"=>"25","placeholder"=>"Segundo Apellido"]) !!}

    {!! Form::label("cedula", "Cedula", ["class"=>"label label-success"]) !!}
    {!! Form::text("cedula", old('cedula'), ["class"=>"form-control", "placeholder" => "Cedula"]) !!}

    {!! Form::label("lgNacimiento", "Lugar de Nacimiento", ["class"=>"label label-success"]) !!}
    {!! Form::text("lgNacimiento", old('lgNacimiento'), ["class"=>"form form-control","placeholder"=>"Lugar de Nacimiento"]) !!}

    {!! Form::label("direccion", "Dirección", ["class"=>"label label-success"]) !!}
    {!! Form::text("direccion", old('direccion'), ["class"=>"form form-control","placeholder"=>"Dirección"]) !!}

    {!! Form::label("fNacimiento", "Fecha de nacimiento", ["class"=>"label label-success"]) !!}
    {!! Form::date("fNacimiento", old('fNacimiento'), ["class"=>"form form-control","maxlength"=>"10"]) !!}

    {!! Form::label("email", "E-Mail Dirección ", ["class"=>"label label-success"]) !!}
    {!! Form::text("email", old('email'), ["class"=>"form form-control","placeholder"=>"E-Mail Dirección"]) !!}

    {!! Form::label("edad", "Edad", ["class"=>"label label-success"]) !!}
    {!! Form::text("edad", old('edad'), ["class"=>"form-control","maxlength"=>"2", "placeholder"=>"Edad"]) !!}

    {!! Form::label("sexo", "Sexo", ["class"=>"label label-success"]) !!}<br>
    {!! Form::label("sexo", "Femenino", ["class"=>"text-primary"]) !!}
    {!! Form::radio('sexo', 'Femenino')!!}
    {!! Form::label("sexo", "Masculino", ["class"=>"text-primary"]) !!}
    {!! Form::radio('sexo', 'Masculino')!!} <br>

    {!! Form::label("roles", "Roles", ["class"=>"label label-success"]) !!}
    {!!Form::select('roles'/*,foreach,[$persona->name]*/,['placeholder'=>'Selecciona Un Rol','representante' => 'Representante','alumno' => 'Alumno'],old('roles'),["class"=>"form-control"]) !!}

    <span><h2 class="text-success">Año escolar</h2></span> <br>

    {!! Form::label("users_id", "Persona", ["class"=>"label label-primary"]) !!}
    {!!Form::select('users_id',$persona,null,["class"=>"form-control"],['placeholder'=>'Selecciona Una opcion']) !!}

    {!! Form::label("fechaIngreso", "Fecha de Ingreso", ["class"=>"label label-primary"]) !!}
    {!! Form::date("fechaIngreso", old('fechaIngreso'), ["class"=>"form-control"]) !!}

    {!! Form::label("fechaEngreso", "Fecha de Egreso", ["class"=>"label label-primary"]) !!}
    {!! Form::date("fechaEngreso", old('fechaEngreso'), ["class"=>"form-control"]) !!}

    {!! Form::label("grado", "Grado", ["class"=>"label label-primary"]) !!}
    {!! Form::text("grado", old('grado'), ["class"=>"form-control", "placeholder"=>"Grado"]) !!}

    {!! Form::label("seccion", "Seccion", ["class"=>"label label-primary"]) !!}
    {!! Form::text("seccion", old('seccion'), ["class"=>"form-control","placeholder"=>"Seccion"]) !!}

    {!! Form::label("estatus", "Estatus", ["class"=>"label label-primary"]) !!}
    {!! Form::text("estatus", old('estatus'), ["class"=>"form-control", "placeholder"=>"Estatus"]) !!}

    <div class="representante">

        <span><h2 class="text-success">Representante</h2></span> <br>
        {!! Form::label("trabajo", "Trabajo", ["class"=>"label label-warning"]) !!}
        {!! Form::text("trabajo", old('trabajo'), ["class"=>"form-control", "placeholder"=>"Trabajo"]) !!}

        {!! Form::label("gradoInstruccion", "Grado de Instruccion", ["class"=>"label label-warning"]) !!}
        {!! Form::text("gradoInstruccion", old('gradoInstruccion'), ["class"=>"form-control", "placeholder"=>"Grado de Instruccion"]) !!}

        {!! Form::label("profOcupacion", "Profesion o Ocupacion", ["class"=>"label label-warning"]) !!}
        {!! Form::text("profOcupacion", old('profOcupacion'), ["class"=>"form-control", "placeholder"=>"Profesion o Ocupacion"]) !!}

        {!! Form::label("lgTrabajo", "Lugar de trabajo", ["class"=>"label label-warning"]) !!}
        {!! Form::text("lgTrabajo", old('lgTrabajo'), ["class"=>"form-control", "placeholder"=>"Lugar de trabajo"]) !!}

        {!! Form::label("telefonos", "Telefonos", ["class"=>"label label-warning"]) !!}
        {!! Form::text("telefonos", old('telefonos'), ["class"=>"form-control", "placeholder"=>"telefonos"]) !!}
    </div>
    <div class="alumno">
        <span><h2 class="text-success">Alumno</h2></span> <br>
        {!! Form::label("camisas", "Camisa", ["class"=>"label label-info"]) !!}
        {!! Form::text("camisas", old('camisas'), ["class"=>"form-control", "placeholder"=>"Camisa"]) !!}

        {!! Form::label("pantalon", "Pantalon", ["class"=>"label label-info"]) !!}
        {!! Form::text("pantalon", old('pantalon'), ["class"=>"form-control", "placeholder"=>"Pantalon"]) !!}

        {!! Form::label("zapatos", "Zapatos", ["class"=>"label label-info"]) !!}
        {!! Form::text("zapatos", old('zapatos'), ["class"=>"form-control", "placeholder"=>"Zapatos"]) !!}

        {!! Form::label("enfemPadecida", "Enfermedades Padecidas", ["class"=>"label label-danger"]) !!}
        {!! Form::text("enfemPadecida", old('enfemPadecida'), ["class"=>"form-control", "placeholder"=>"Enfermedades Padecidas"]) !!}

        {!! Form::label("enfemPsicologica", "Enfermedades Psicologíca", ["class"=>"label label-danger"]) !!}
        {!! Form::text("enfemPsicologica", old('enfemPsicologica'), ["class"=>"form-control", "placeholder"=>"Enfermedades Psicologíca"]) !!}
    </div>
    <br>
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
