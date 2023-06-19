<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Model
{
    public function iniciosesion(){
        return view('iniciosesion');
    }

    public function validar(){
        $credentials= request()->only('email','password');

        if(Auth::attempt($credentials)){
            request()->session()->regenerate();
            return redirect('index.php')->with('success', "Inicio de sesion correcto");
        }else{
            return redirect('iniciosesion')->with('error', "Inicio de sesion fallido");
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back()->with('success', 'Sesión cerrada exitosamente');
    }


 

   
}
