<?php

namespace App\Http\Controllers;
use App\AnioEscolar;
use App\Alumno;
use App\Representante;
use Illuminate\Http\Request;


class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $representante = Representante::paginate(10);
        $alumno = Alumno ::paginate(15);
        $escolar = AnioEscolar::paginate(5);
        return view('inscripcion.home',compact('escolar','alumno','representante'));
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
        $escolar = AnioEscolar::pluck('fechaIngreso','id')->all();
        return view('inscripcion.create',compact('escolar','alumno'));
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
        $escolar = new AnioEscolar();
        $escolar->grado          = $request->grado;
        $escolar->seccion        = $request->seccion;
        $escolar->fechaIngreso   = $request->fechaIngreso;
        $escolar->cedula   = $request->cedula;
        $escolar->matricula   = $request->matricula;
        if($escolar->save()){
            return back()->with('añoescolar','Exitoso!!!');
        }
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
        $representante = Representante::find($id);
        $estudiante = Alumno::pluck('nombres','id')->all();
        $anioescolar = AnioEscolar::pluck('fechaIngreso','id')->all();
        $alumno = Alumno::find($id);
        $escolar = AnioEscolar::find($id);
        return view('inscripcion.edit',compact('escolar','alumno','representante','estudiante','anioescolar'));
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
        $escolar = AnioEscolar::find($id);
        $escolar->grado          = $request->grado;
        $escolar->seccion        = $request->seccion;
        $escolar->fechaIngreso   = $request->fechaIngreso;
        $escolar->cedula         = $request->cedula;
        $escolar->matricula      = $request->matricula;
        if($escolar->save()){
            return back()->with('añoescolar','Exitoso!!!');
        }
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
