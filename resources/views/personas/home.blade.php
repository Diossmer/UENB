@extends('layouts.app')
@section('title','Home')
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

{{-- <h3>{{ $Modo=='crear' ?'FORMULARIO DE REGISTRO':
    'FORMULARIO DE MODIFICACION DE DATOS' }}</h3> --}}
    <form action="" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

<table width="504" height="320" border="0" align="center" cellspacing="1">
        <tr>
          <td>
          <td width="226" nowrap="nowrap"><label for="Foto">{{'Foto :'}}</label></td>
          <td><input type="file" name="Foto" id="Foto" placeholder="Buscar Foto"  multiple/></td>
        </tr>

        <tr>
        <td width="226" nowrap="nowrap"><label>{{'Cédula :'}}</label></td>
        <td width="267"><label for="cedula"></label>
<!--        <select name="cedula" id="cedula">
            <option value="01">V</option>
            <option value="02">E</option>
          </select>
-->        <input name="Cedula" type="text" autofocus required id="Cedula" placeholder="12345678" style="display:inline"
        value="{{ isset($persona->Cedula)?$persona->Cedula:''}}" maxlength="8" /></td>
        </tr>
        <tr>
        <td width="226" nowrap="nowrap"><label>{{'Primer Apellido :'}}</label></td>
        <td><input name="apellidos" type="text" autofocus required id="apellidos" placeholder="Apellido"
        value="{{ isset($persona->apellidos)?$persona->apellidos:old('apellidos')}}" maxlength="25" /></td>
        </tr>
        <tr>
        <td width="226" nowrap="nowrap"><label>{{'Segundo Apellidos :'}}</label></td>
        <td><input name="segApellidos" type="text" autofocus required id="segApellidos" placeholder="Apellido"
        value="{{ isset($persona->segApellidos)?$persona->segApellidos:old('segApellidos')}}" maxlength="25" /></td>
        </tr>
        <tr>
        <td width="226" nowrap="nowrap"><label>{{'Primer Nombre :'}}</label></td>
        <td><input name="nombres" type="text" autofocus required id=nombres placeholder="nombre"
        value="{{isset($persona->nombres)?$persona->nombres:''}}" maxlength="25" /></td>
        </tr>
        <tr>
        <td width="226" nowrap="nowrap"><label>{{'Segundo Nombre :'}}</label></td>
        <td><input name="segNombres" type="text" autofocus required id="segNombres" placeholder="Nombre"
        value="{{isset($persona->segNombres)?$persona->segNombres:''}}" maxlength="25" /></td>
        </tr>
        <tr>
        <td width="226" nowrap="nowrap"><label>{{'Lugar de Nacimiento :'}} </label></td>
        <td><input name="lgNacimiento" type="text" autofocus required id="lgNacimiento" placeholder="lugar deNacimiento"
        value="{{isset($persona->lgNacimiento)?$persona->lgNacimiento:''}}" maxlength="25" /></td>
        </tr>
        <tr>
          <td width="226" nowrap="nowrap"><label>{{'Fecha de Nacimiento :'}}</label></td>
          <td><input name="fNacimiento" type="date" autofocus required id="fNacimiento" placeholder="dd/mm/aaaa"
        value="{{isset($persona->fNacimiento)?$persona->fNacimiento:''}}" maxlength="10" /></td>
        </tr>
        <tr>
          <td width="226" nowrap="nowrap"><label>{{'Nacionalidad :'}}</label></td>
          <td><input name="Nac" type="text" autofocus required id="Nac" placeholder="País"
        value="{{isset($persona->Nac)?$persona->Nac:''}}" maxlength="50" /></td>
        </tr>
        <tr>
          <td width="226" nowrap="nowrap"><label>{{'Edad :'}}</label></td>
          <td><input name="Edad" type="text" autofocus required id="Edad" placeholder=""
        value="{{isset($persona->Edad)?$persona->Edad:''}}" maxlength="2" /></td>
        </tr>
        <tr>
          <td width="226" nowrap="nowrap"><label>{{'Sexo :'}}</label></td>
          <td><input name="Sexo" type="text" autofocus required id="Sexo" placeholder="M o F"
        value="{{isset($persona->Sexo)?$persona->Sexo:''}}" maxlength="1" /></td>
        </tr>
        <tr>
          <td width="226" nowrap="nowrap"><label>{{'usuario :'}}</label></td>
          <td><input name="users_id" type="text" autofocus required id="users_id" placeholder=""
        value="{{isset($persona->users_id)?$persona->users_id:''}}" maxlength="20" /></td>
        </tr>
        <tr>
          <td width="226" nowrap="nowrap"><label>{{'Rol :'}}</label></td>
          <td><input name="roles" type="text" autofocus required id="roles" placeholder=""
        value="{{isset($persona->roles)?$persona->roles:''}}" maxlength="20" /></td>
        </tr>
        <tr>
          <td width="226" nowrap="nowrap"><label>{{'Dirección de Habitación :'}}</label></td>
          <td><input name="direccion" type="text" autofocus required id="direccion" placeholder=""
        value="{{isset($persona->direccion)?$persona->direccion:''}}" maxlength="10" /></td>
        </tr>
        <tr>
          <td width="226" nowrap="nowrap"><label>{{'Teléfono :'}}</label></td>
          <td><input name="Telf" type="text" autofocus required id="Telf" placeholder=""
        value="{{isset($persona->Telf)?$persona->Telf:''}}" maxlength="10" /></td>
        </tr>
        <tr>
          <td width="226" nowrap="nowrap"><label>{{'Celular :'}}</label></td>
          <td><input name="Cel" type="text" autofocus required id="Cel" placeholder=""
        value="{{isset($persona->Cel)?$persona->Cel:''}}" maxlength="10" />
     </tr>
        <tr>
          <td nowrap="nowrap"><label>{{'Correo :'}}</label></td>
          <td><input name="Email" type="Email" autofocus="autofocus" required="required" id="Email" placeholder=""
        value="{{isset($persona->Email)?$persona->Email:''}}" maxlength="60" /></td>
         </tr>
         <tr>
        <td height="23" colspan="2"><a class="btn btn-primary pull-left" href="{{ url('personas')}}">REGRESAR</a>
          <input class="btn btn-success" type="submit" href="{{ url('personas')}}" value="Crear">
          <input class="btn btn-default" type="reset" name="reset" id="reset" value="LIMPIAR">
        </td>
        </tr>
        </table>
    </form>

</div>
@endsection
