<?php

namespace App\Http\Controllers;

use App\Alumno;
use Carbon\Carbon;
use App\AnioEscolar;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumno = Alumno::paginate(5);
        return view('alumnos.home',compact('alumno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $anioEscolar = AnioEscolar::pluck('fechaIngreso','id')->all();
        return view('alumnos.create',compact('anioEscolar'));
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
        if($request->hasFile('fotos')){
            $archivo=Request()->except('_token');
            $archivo = $request->file('fotos');
            $nombre= time().$archivo->getClientOriginalName();
            $archivo->move(public_path().'/images/',$nombre);
        }
        $alumno = new Alumno();
        $alumno->fotos = $nombre;
        $alumno->nombres = $request->nombres;
        $alumno->segNombres = $request->segNombres;
        $alumno->apellidos = $request->apellidos;
        $alumno->segApellidos = $request->segApellidos;
        $alumno->estatus = $request->estatus;
        $alumno->lgNacimiento = $request->lgNacimiento;
        $alumno->dia = $request->dia;
        $alumno->mes = $request->mes;
        $alumno->anio = $request->anio;
        $alumno->direccion = $request->direccion;
        $alumno->email = $request->email;
        $alumno->sexo = $request->sexo;
        $alumno->enfemPadecida = $request->enfemPadecida;
        $alumno->enfemPsicologica = $request->enfemPsicologica;
        $alumno->camisas = $request->camisas;
        $alumno->pantalon = $request->pantalon;
        $alumno->zapatos = $request->zapatos;
        $alumno->anioEscolar_id = $request->anioEscolar_id;
        if($alumno->save()){
            return back()->with('alumno','EXITO');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
        $anioescolar = AnioEscolar::pluck('fechaIngreso','id')->all();
        return view('alumnos.edit',compact('alumno','anioescolar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
        $alumno = Alumno::findOrFail($alumno);
        $alumno->nombres = $request->nombres;
        $alumno->segNombres = $request->segNombres;
        $alumno->apellidos = $request->apellidos;
        $alumno->segApellidos = $request->segApellidos;
        $alumno->estatus = $request->estatus;
        $alumno->lgNacimiento = $request->lgNacimiento;
        $alumno->dia = $request->dia;
        $alumno->mes = $request->mes;
        $alumno->anio = $request->anio;
        $alumno->direccion = $request->direccion;
        $alumno->email = $request->email;
        $alumno->sexo = $request->sexo;
        $alumno->enfemPadecida = $request->enfemPadecida;
        $alumno->enfemPsicologica = $request->enfemPsicologica;
        $alumno->camisas = $request->camisas;
        $alumno->pantalon = $request->pantalon;
        $alumno->zapatos = $request->zapatos;
        $alumno->anioEscolar_id = $request->anioEscolar_id;
        if($request->hasFile('fotos')){
            $archivo=Request()->except('_token');
            $archivo = $request->file('fotos');
            $nombre= time().$archivo->getClientOriginalName();
            $alumno->fotos=$nombre->update();
            $archivo->move(public_path().'/images/',$nombre);
        }
        if($alumno->save()){
            return back()->with('alumno','EXITO');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
