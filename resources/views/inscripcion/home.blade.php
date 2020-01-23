@extends('layouts.app')
@section('title','Inscripcion')
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
        <div class="col-md-9 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Inscripcion</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @elseif(session('inscripcion'))
                <div class="alert alert-info" role="alert">
                    <li>{{session('inscripcion')}}</li>
                </div>
                @endif
                <div class="panel-body">
                    <table class="table">
                        <caption>Inscripcion {!! link_to_route("inscripcion.create", "Nuevo", null,$attributes = ['class'=>'btn btn-primary']) !!}</caption>
                        <thead>
                            <th>alumno_id</th>
                            <th>seccion_id</th>
                            <th>status_id</th>
                            <th>action</th>
                        </thead>
                        <tbody>
{{--
                            @if($inscrip)

		                    @foreach($datos as $dato)

		                    <tr>
		                    			<td>{{ $dato->empresa }}</td>
		                    			<td>{{ $dato->categoria }}</td>
		                    			<td>{{ $dato->sub_categoria }}</td>
		                    			<td>{{ $dato->actividad }}</td>
		                    			<td>{{ $dato->materiales }}</td>
		                    			<td>{{ $dato->descripcion }}</td>
		                    			<td>{{ $dato->fecha }}</td>
		                    </tr>
		                    		@endforeach
		                    		@else
		                    		todavia no hay reportes generados
		                    		@endif
 --}}



                                <td>
                                    {{-- {!! link_to_route("inscripcion.edit", "Editar", $parameters = [$inscripcion->id], $attributes = ["class"=>"btn btn-success"]) !!}
                                    {!! link_to_route("inscripcion.show", "Generar PDF", $parameters = [$inscripcion->id], $attributes = ["class"=>"btn btn-success"]) !!} --}}
                                </td>
                            </tr>
                        </tbody>
                        {{$inscripcion->links()}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
