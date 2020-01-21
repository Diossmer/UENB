<?php

namespace App\Http\Controllers;
use App\User;
use App\PeriodoEscolar;
use App\Seccion;
use Illuminate\Http\Request;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('seccion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('seccion.index');
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
        $seccion = new Seccion();
        $seccion->descripcion = $request->descripcion;
        $seccion->grado = $request->grado;
        $seccion->cuposdisponible = $request->cuposdisponible;
        $seccion->docente_id = $request->docente_id;
        $seccion->periodo_id = $request->periodo_id;
        if($seccion->save()){
            return redirect('seccion')->with('seccion','Creación Completada');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function show(Seccion $seccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Seccion $seccion)
    {
        //
        return view('seccion.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $seccion)
    {
        //
        $seccion = Seccion::find($seccion);
        $seccion->descripcion = $request->descripcion;
        $seccion->grado = $request->grado;
        $seccion->cuposdisponible = $request->cuposdisponible;
        $seccion->docente_id = $request->docente_id;
        $seccion->periodo_id = $request->periodo_id;
        if($seccion->save()){
            return redirect('seccion')->with('seccion','Actualización Completada');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seccion $seccion)
    {
        //
    }
}
