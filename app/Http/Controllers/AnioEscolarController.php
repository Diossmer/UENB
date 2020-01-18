<?php

namespace App\Http\Controllers;
use App\AnioEscolar;
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
        $escolar = AnioEscolar::paginate(5);
        return view('anioescolar.home',compact("escolar"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('anioescolar.create');
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
        $escolar = AnioEscolar::find($id);
        return view('anioescolar.edit',compact('escolar'));
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
        $escolar =AnioEscolar::find($id);
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
