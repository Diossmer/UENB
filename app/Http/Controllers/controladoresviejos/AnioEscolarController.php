<?php

namespace App\Http\Controllers;
use App\AnioEscolar;
use App\Persona;

use Illuminate\Http\Request;

class AnioEscolarController extends Controller
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
        $anioEscolar = new AnioEscolar();
        $anioEscolar->users_id = $request->users_id;
        $anioEscolar->grado = $request->grado;
        $anioEscolar->seccion = $request->seccion;
        $anioEscolar->fechaIngreso = $request->fechaIngreso;
        $anioEscolar->fechaEngreso = $request->fechaEngreso;
        $anioEscolar->estatus = $request->estatus;
        if($anioEscolar->save()){
            return back()->with('person','Datos guardados');
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
