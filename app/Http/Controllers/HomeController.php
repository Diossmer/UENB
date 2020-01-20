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

        $escolar = AnioEscolar::orderBy('seccion','asc')->get();
        return view('home',compact('escolar'));
    }
    public function ExportarPDF(){
        $representante = Representante::orderBy('nombres','asc')->get();
        $escolar = AnioEscolar::orderBy('seccion','asc')->get();
        $alumno = Alumno::orderBy('nombres','asc')->get();//->pluck('nombres');
        $pdf= PDF::loadView('pdf.show',compact('escolar','alumno',"representante"));
        return $pdf->stream('FicheroUsuario.pdf');
    }
    // public function ExportarPDF($id){
    //     $representante = Representante::find($id)->orderBy('nombres','asc')->all();
    //     $escolar = AnioEscolar::find($id)->orderBy('seccion','asc')->get();
    //     $alumno = Alumno::find($id)->orderBy('nombres','asc')->get();//->pluck('nombres');
    //     $pdf= PDF::loadView('pdf.show',compact('escolar','alumno',"representante"));
    //     return $pdf->stream('FicheroUsuario.pdf');
    // }
}
