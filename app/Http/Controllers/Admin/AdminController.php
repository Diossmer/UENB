<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
use App\Admin;
use App\User;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admin=Admin::paginate(3);
        $docente=User::paginate(5);
        return view('admin.home',compact('admin','docente'));
    }
    public function createpdf(){
        $pdf = Admin::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>HOLA</h1>');
        return $pdf->stream('admin.home');
    }
}
