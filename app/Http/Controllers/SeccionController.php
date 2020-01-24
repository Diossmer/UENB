<?php

namespace App\Http\Controllers;
use App\User;
use App\PeriodoEscolar;
use App\Seccion;
use Illuminate\Http\Request;
use App\Http\Requests\SeccionValidation;

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
        $docente=User::all();
        $periodo=PeriodoEscolar::all();
        $seccion=Seccion::paginate(5);
        return view('seccion.home',compact('seccion','docente','periodo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $docente=User::pluck('name','id');
        $periodo=PeriodoEscolar::pluck('descripcion','id');
        return view('seccion.create',compact('docente','periodo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeccionValidation $request)
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
    public function edit($seccion)
    {
        //
        $seccion=Seccion::find($seccion);
        $docente=User::pluck('name','id');
        $periodo=PeriodoEscolar::pluck('descripcion','id');
        return view('seccion.edit',compact('seccion','docente','periodo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function update(SeccionValidation $request, $seccion)
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
