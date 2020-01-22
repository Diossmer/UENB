<?php

namespace App\Http\Controllers;

use App\PeriodoEscolar;
use Illuminate\Http\Request;
use App\User;
class PeriodoEscolarController extends Controller
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
        return view('periodoescolar.create');
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
        $periodo = new PeriodoEscolar();
        $periodo->descripcion = $request->descripcion;
        $periodo->fecha_inicio = $request->fecha_inicio;
        $periodo->fecha_fin = $request->fecha_fin;
        $periodo->estatus = $request->estatus;
        if($periodo->save()){
            return redirect('home')->with('periodoescolar','Creación Completada');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PeriodoEscolar  $periodoEscolar
     * @return \Illuminate\Http\Response
     */
    public function show(PeriodoEscolar $periodoEscolar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PeriodoEscolar  $periodoEscolar
     * @return \Illuminate\Http\Response
     */
    public function edit($periodoEscolar)
    {
        //
        $periodo = PeriodoEscolar::find($periodoEscolar);
        return view('periodoescolar.edit',compact('periodo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PeriodoEscolar  $periodoEscolar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $periodoEscolar)
    {
        //
        $periodo = PeriodoEscolar::find($periodoEscolar);
        $periodo->descripcion = $request->descripcion;
        $periodo->fecha_inicio = $request->fecha_inicio;
        $periodo->fecha_fin = $request->fecha_fin;
        $periodo->estatus = $request->estatus;
        if($periodo->save()){
            return redirect('periodoescolar')->with('periodoescolar','Actualización Completada');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PeriodoEscolar  $periodoEscolar
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeriodoEscolar $periodoEscolar)
    {
        //
    }
}
