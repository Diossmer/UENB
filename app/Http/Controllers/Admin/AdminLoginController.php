<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest:admin')->except('logout','userlogout');
    }
    public function showLoginForm(){
        return view('admin.login');
    }
    public function login(Request $request){
        //validar los datos del formulario
        $this->validate($request,[
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
        ]);
        //Intentar conectar el usuario
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            //si tiene éxito, entonces redirigir a su ubicación prevista
            return redirect()->intended(route('admin.dashboard'));
        }
        //si no tiene éxito, entonces redireccione de nuevo al inicio de sesión con los datos del formulario
        return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return $this->loggedOut($request) ?: redirect('/');
    }
}
