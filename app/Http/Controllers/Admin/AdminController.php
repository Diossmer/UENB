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
    public function create(){
        return view('admin.create');
    }
    public function store(Request $request){
        $admin = new Admin();
        $admin -> name = $request->name;
        $admin -> email = $request->email;
        $admin -> password = bcrypt($request->password);
        $admin -> save();
        return redirect('admin');
    }
    public function edit($id){
        $admin = Admin::find($id);
        return view('admin.edit',compact('admin'));
    }
    public function update(Request $request,$id){
        $admin = Admin::findOrFail($id);
        $admin -> name = $request->name;
        $admin -> email = $request->email;
        $admin -> password = bcrypt($request->password);
        $admin -> save();
        return redirect('admin');
    }
    public function delete($id){
        Admin::destroy($id);
        return redirect('admin');
    }
    public function createpdf(){
        $pdf = Admin::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>HOLA</h1>');
        return $pdf->stream('admin.home');
    }
}
