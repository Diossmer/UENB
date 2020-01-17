<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Alumno;
use App\Persona;
use App\AnioEscolar;
use App\Representante;

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
        $anioEscolar=AnioEscolar::paginate(15);
        $persona = Persona::paginate(15);
        return view("personas.home",compact("persona","anioEscolar"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $persona=Persona::pluck('nombres','id')->all();
        return view('personas.create',compact('persona'));
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
            $file = $request->file('fotos');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }

        $persona = new Persona();
        $persona->nombres       = $request->nombres;
        $persona->segNombres    = $request->segNombres;
        $persona->apellidos     = $request->apellidos;
        $persona->segApellidos  = $request->segApellidos;
        $persona->cedula        = $request->cedula;
        $persona->lgNacimiento  = $request->lgNacimiento;
        $persona->direccion     = $request->direccion;
        $persona->fNacimiento   = $request->fNacimiento;
        $persona->email         = $request->email;
        $persona->fotos         = $name;
        $persona->roles         = $request->roles;
        $persona->edad          = $request->edad;
        $persona->sexo          = $request->sexo;
        if($persona->save()){
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
        $persona = Persona::find($id);
        $anioEscolar = Persona::find($id);
        $representante = Persona::find($id);
        $alumno = Persona::find($id);
        return view('personas.edit',compact('persona','representante','alumno','anioEscolar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //

        $persona = Persona::findOrFail($id);
        $persona->nombres       = $request->nombres;
        $persona->segNombres    = $request->segNombres;
        $persona->apellidos     = $request->apellidos;
        $persona->segApellidos  = $request->segApellidos;
        $persona->cedula        = $request->cedula;
        $persona->lgNacimiento  = $request->lgNacimiento;
        $persona->direccion     = $request->direccion;
        $persona->fNacimiento   = $request->fNacimiento;
        $persona->email         = $request->email;
        $persona->roles         = $request->roles;
        $persona->edad          = $request->edad;
        $persona->sexo          = $request->sexo;
        $persona->save();
        return redirect('home');

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
