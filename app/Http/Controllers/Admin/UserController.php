<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Admin;
use App\User;
use App\Persona;
use App\PersonEscolar;
use App\AlumnRepre;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $persona = Persona::paginate(15);
        $personEscolar = PersonEscolar::paginate(15);
        $alumnRepre = AlumnRepre::paginate(15);
        return view('home',compact("persona","personEscolar","alumnRepre"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.docentes.create');
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
        $docente = new User();
        $docente->name = $request->name;
        $docente ->apellido = $request->apellido;
        $docente->email = $request->email;
        $docente->password = bcrypt($request->password);
        $docente->save();
        return redirect("admin");
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
        $admin = Admin::find($id);
        $docente = User::find($id);
        return view('admin.docentes.show', compact('docente','admin'));
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
        $docente = User::find($id);
        return view('admin.docentes.edit',compact('docente'));
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
        $docente = User::findOrFail($id);
        $docente ->name = $request->name;
        $docente ->apellido = $request->apellido;
        $docente ->email = $request->email;
        $docente ->password = bcrypt($request->password);
        $docente ->save();
        return redirect('admin');
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
        $madre = User::find($id);
        $madre->delete();
        return redirect('admin');
    }
}
