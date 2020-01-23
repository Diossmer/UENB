<?php

namespace App\Http\Controllers;
use App\PeriodoEscolar;
use App\Alumno;
use App\Seccion;
use App\Inscripcion;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Requests\InscripcionValidation;
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
        $alumno = Alumno::all();
        $seccion = Seccion::all();
        $estatus = PeriodoEscolar::all();
        $inscripcion = Inscripcion::paginate(5);
        return view('inscripcion.home',compact('inscripcion','estatus','seccion','alumno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $alumno = Alumno::pluck('nombre','id')->all();
        $seccion = Seccion::pluck('descripcion')->all();
        $estatus = PeriodoEscolar::pluck('estatus','id')->all();
        $inscripcion = Inscripcion::paginate(5);
        return view('inscripcion.create',compact('inscripcion','estatus','seccion','alumno'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InscripcionValidation $request)
    {
        //
    $prueba = '{
        version: "https://jsonfeed.org/version/1",
        "title": "My Example Feed",
        "home_page_url": "https://example.org/",
        "feed_url": "https://example.org/feed.json",
        "seccion" : [
            id

        ]
    }' ;
dd($prueba);
        $inscripcion = new Inscripcion();
        $inscripcion->estatus_id = $request->estatus_id;
        $inscripcion->alumno_id = $request->alumno_id;
        $inscripcion->seccion_id = $request->seccion_id;
        if($inscripcion->save()){
            return redirect()->route('inscripcion.index')->with('inscripcion','Registro Completada');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function show(Inscripcion $inscripcion)
    {
        //
        $pdf= PDF::loadView('inscripcion.show');
        return $pdf->stream('FicheroUsuario.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function edit($inscripcion)
    {
        //
        return view('inscripcion.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(InscripcionValidation $request, $inscripcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscripcion $inscripcion)
    {
        //
    }
}
