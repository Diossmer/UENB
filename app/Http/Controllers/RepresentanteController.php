<?php

namespace App\Http\Controllers;

use App\Representante;
use Illuminate\Http\Request;
use App\Http\Requests\RepresentanteValidation;

class RepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $representante=Representante::paginate(5);
        return view('representante.home',compact('representante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('representante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RepresentanteValidation $request)
    {
        //
        $representante = new Representante();
        $representante->nombre=$request->nombre;
        $representante->segundo_nombre=$request->segundo_nombre;
        $representante->apellido=$request->apellido;
        $representante->segundo_apellido=$request->segundo_apellido;
        $representante->cedula=$request->cedula;
        $representante->email=$request->email;
        $representante->fecha_nacimiento=$request->fecha_nacimiento;
        $representante->trabajo=$request->trabajo;
        $representante->grado_instruccion=$request->grado_instruccion;
        $representante->profesion_ocupacion=$request->profesion_ocupacion;
        $representante->lugar_trabajo=$request->lugar_trabajo;
        $representante->telefono=$request->telefono;
        $representante->sexo=$request->sexo;
        if($representante->save()){
            return redirect('representante')->with('representante','Creación Completada');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Representante  $representante
     * @return \Illuminate\Http\Response
     */
    public function show(Representante $representante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Representante  $representante
     * @return \Illuminate\Http\Response
     */
    public function edit($representante)
    {
        //
        $representante = Representante::find($representante);
        return view('representante.edit',compact('representante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Representante  $representante
     * @return \Illuminate\Http\Response
     */
    public function update(RepresentanteValidation $request, $representante)
    {
        //
        $representante = Representante::find($representante);
        $representante->nombre=$request->nombre;
        $representante->segundo_nombre=$request->segundo_nombre;
        $representante->apellido=$request->apellido;
        $representante->segundo_apellido=$request->segundo_apellido;
        $representante->cedula=$request->cedula;
        $representante->email=$request->email;
        $representante->fecha_nacimiento=$request->fecha_nacimiento;
        $representante->trabajo=$request->trabajo;
        $representante->grado_instruccion=$request->grado_instruccion;
        $representante->profesion_ocupacion=$request->profesion_ocupacion;
        $representante->lugar_trabajo=$request->lugar_trabajo;
        $representante->telefono=$request->telefono;
        $representante->sexo=$request->sexo;
        if($representante->save()){
            return redirect('representante')->with('representante','Actualización Completada');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Representante  $representante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Representante $representante)
    {
        //
    }
}
