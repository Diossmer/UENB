<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    // public function ExportarPDF($id){
    //     $representante = Representante::find($id)->orderBy('nombres','asc')->all();
    //     $escolar = AnioEscolar::find($id)->orderBy('seccion','asc')->get();
    //     $alumno = Alumno::find($id)->orderBy('nombres','asc')->get();//->pluck('nombres');
    //     $pdf= PDF::loadView('pdf.show',compact('escolar','alumno',"representante"));
    //     return $pdf->stream('FicheroUsuario.pdf');
    // }
}
