<?php

namespace App\Http\Controllers;
use App\Alumno;
use App\Representante;
use App\AnioEscolar;
use App\Http\Requests\ValidationRepresentante;
use Illuminate\Http\Request;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $alumno = Alumno::pluck('nombres','id')->all();
        $anioEscolar = AnioEscolar::pluck('fechaIngreso','id')->all();
        return view('inscripcion.create',compact('alumno','anioEscolar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationRepresentante $request)
    {
        //
        $representante = new Representante();
        $representante->alumno_id = $request->alumno_id;
        $representante->nombres = $request->nombres;
        $representante->segNombres = $request->segNombres;
        $representante->apellidos = $request->apellidos;
        $representante->segApellidos = $request->segApellidos;
        $representante->fNacimiento = $request->fNacimiento;
        $representante->email = $request->email;
        $representante->trabajo = $request->trabajo;
        $representante->gradoInstruccion = $request->gradoInstruccion;
        $representante->profOcupacion = $request->profOcupacion;
        $representante->lgTrabajo = $request->lgTrabajo;
        $representante->telefonos = $request->telefonos;
        if($representante->save()){
            return redirect('inscripcion')->with('representante','EXITO');
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
    public function edit(Representante $representante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Representante  $representante
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationRepresentante $request, $representante)
    {
        //
        $representante = Representante::findOrFail($representante);
        $representante->alumno_id = $request->alumno_id;
        $representante->nombres = $request->nombres;
        $representante->segNombres = $request->segNombres;
        $representante->apellidos = $request->apellidos;
        $representante->segApellidos = $request->segApellidos;
        $representante->fNacimiento = $request->fNacimiento;
        $representante->email = $request->email;
        $representante->trabajo = $request->trabajo;
        $representante->gradoInstruccion = $request->gradoInstruccion;
        $representante->profOcupacion = $request->profOcupacion;
        $representante->lgTrabajo = $request->lgTrabajo;
        $representante->telefonos = $request->telefonos;
        if($representante->save()){
            return redirect('inscripcion')->with('representante','EXITO');
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
