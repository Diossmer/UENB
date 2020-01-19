<?php

namespace App\Http\Controllers;
use App\AnioEscolar;
use App\Alumno;
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
        return view('home');
    }
    public function ExportarPDF(){
        $alumno = Alumno::all();
        $escolar = AnioEscolar::all();
        $pdf= PDF::loadView('pdf.show',compact('alumno','escolar'));
        return $pdf->stream('FicheroAdministrador.pdf');
    }
}
