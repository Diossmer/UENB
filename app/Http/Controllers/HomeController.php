<?php

namespace App\Http\Controllers;
use App\AnioEscolar;
use App\Alumno;
use App\Representante;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
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
        $representante = Representante::all();
        $alumno = Alumno::all();
        $escolar = AnioEscolar::all();
        return view('home',compact('escolar','alumno','representante'));
    }
    public function ExportarPDF($id){
        $representante = Representante::find($id);
        $alumno = Alumno::find($id);
        $escolar = AnioEscolar::select('cedula','matricula')->where('id',"=",$id)->latest()->get();
        $pdf= PDF::loadView('pdf.show',compact('escolar','alumno',"representante"));
        return $pdf->stream('FicheroUsuario.pdf');
    }
}
