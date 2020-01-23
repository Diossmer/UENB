<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Representante;
use Illuminate\Http\Request;
use App\Http\Requests\AlumnoValidation;
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
        $representante=Representante::pluck('nombre','id');
        $alumno = Alumno::paginate(5);
        return view('alumno.home',compact('alumno','representante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $representante=Representante::pluck('nombre','id');
        return view('alumno.create',compact('representante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumnoValidation $request)
    {
        //
        if($request->hasFile('fotos')){
            $archivo=Request()->except('_token');
            $archivo = $request->file('fotos');
            $nombre= time().$archivo->getClientOriginalName();
            $archivo->move(public_path().'/images/',$nombre);
        }

        $alumno = new Alumno();
        $alumno->fotos=$nombre;
        $alumno->nombre = $request->nombre;
        $alumno->segundo_nombre = $request->segundo_nombre;
        $alumno->apellido = $request->apellido;
        $alumno->segundo_apellido = $request->segundo_apellido;
        $alumno->lugar_nacimiento = $request->lugar_nacimiento;
        $alumno->direccion = $request->direccion;
        $alumno->dia = $request->dia;
        $alumno->mes = $request->mes;
        $alumno->año = $request->año;
        $alumno->cedula = $request->cedula;
        $alumno->email = $request->email;
        $alumno->sexo = $request->sexo;
        $alumno->camisa = $request->camisa;
        $alumno->pantalon = $request->pantalon;
        $alumno->zapato = $request->zapato;
        $alumno->enfermedades_padecida = $request->enfermedades_padecida;
        $alumno->enfermedades_psicologica = $request->enfermedades_psicologica;
        $alumno->representante_id = $request->representante_id;
        if($alumno->save()){
            return redirect('alumno')->with('alumno','Creación Completada');
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
    public function edit($alumno)
    {
        //
        $alumno=Alumno::find($alumno);
        $representante=Representante::pluck('nombre','id');
        return view('alumno.edit',compact('alumno','representante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(AlumnoValidation $request, $alumno)
    {
        //
        $alumno = Alumno::find($alumno);
        if($request->hasFile('fotos')){
            // $archivo=Request()->except('_token');
            $archivo = $request->file('fotos');
            $nombre= time().$archivo->getClientOriginalName();
            $nombre=$alumno->fotos;
            $archivo->move(public_path().'/images/',$nombre);
        }
        $alumno->nombre = $request->nombre;
        $alumno->segundo_nombre = $request->segundo_nombre;
        $alumno->apellido = $request->apellido;
        $alumno->segundo_apellido = $request->segundo_apellido;
        $alumno->lugar_nacimiento = $request->lugar_nacimiento;
        $alumno->direccion = $request->direccion;
        $alumno->dia = $request->dia;
        $alumno->mes = $request->mes;
        $alumno->año = $request->año;
        $alumno->cedula = $request->cedula;
        $alumno->email = $request->email;
        $alumno->sexo = $request->sexo;
        $alumno->camisa = $request->camisa;
        $alumno->pantalon = $request->pantalon;
        $alumno->zapato = $request->zapato;
        $alumno->enfermedades_padecida = $request->enfermedades_padecida;
        $alumno->enfermedades_psicologica = $request->enfermedades_psicologica;
        $alumno->representante_id = $request->representante_id;
        if($alumno->save()){
            return redirect('alumno')->with('alumno','Actualización Completada');
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
