<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Persona;
use App\AnioEscolar;
use App\Representante;
use App\Alumno;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $persona = Persona::paginate(15);
        $anioEscolar = AnioEscolar::paginate(15);
        $representante = Representante::paginate(15);
        $alumno = Alumno::paginate(15);
        return view("home",compact('persona','representante','alumno','anioEscolar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $persona = new Persona();
        $persona->nombres = $request->nombres;
        $persona->segNombres = $request->segNombres;
        $persona->apellidos = $request->apellidos;
        $persona->segApellidos = $request->segApellidos;
        $persona->cedula = $request->cedula;
        $persona->lgNacimiento = $request->lgNacimiento;
        $persona->direccion = $request->direccion;
        $persona->fNacimiento = $request->fNacimiento;
        $persona->email = $request->email;
        $persona->roles = $request->roles;
        $persona->edad = $request->edad;
        $persona->sexo = $request->sexo;
        $persona->save();
        $anioEscolar = new AnioEscolar();
        $anioEscolar->grado = $request->grado;
        $anioEscolar->seccion = $request->seccion;
        $anioEscolar->fechaIngreso = $request->fechaIngreso;
        $anioEscolar->fechaEngreso = $request->fechaEngreso;
        $anioEscolar->estatus = $request->estatus;
        $anioEscolar->save();
        $representante=new Representante();
        $representante->trabajo = $request-> trabajo;
        $representante->gradoInstruccion = $request-> gradoInstruccion;
        $representante->profOcupacion = $request-> profOcupacion;
        $representante->lgTrabajo = $request-> lgTrabajo;
        $representante->telefonos = $request-> telefonos;
        $representante->save();
        $alumno = new Alumno();
        $alumno->camisas = $request->camisas;
        $alumno->pantalon = $request->pantalon;
        $alumno->zapatos = $request->zapatos;
        $alumno->enfemPadecida = $request->enfemPadecida;
        $alumno->enfemPsicologica = $request->enfemPsicologica;
        $alumno->save();
        if(isset($persona)|| isset($anioEscolar) || isset($representante) || isset($alumno)){
            $this->save();
        }
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $persona = Persona::findOrFail($id);
        $anioEscolar = AnioEscolar::findOrFail($id);
        $representante = Representante::findOrFail($id);
        $alumno = Alumno::findOrFail($id);
        return view('personas.edit',compact('persona','representante','alumno','anioEscolar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
