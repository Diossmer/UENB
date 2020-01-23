<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
use App\Admin;
use App\User;

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
        if($request->password == $request->password_confirmation){
            $docente->password = bcrypt($request->password);
            $docente->save();
            return redirect("admin");
        }
            return back()->with('error','La contraseña no coinciden, intente nuevamente.');


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
        $pdf= PDF::loadView('admin.pdf.show',compact('docente','admin'));
        return $pdf->stream('Archivo_Administrador.pdf');
        return view('admin.pdf.show', compact('docente','admin'));
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
