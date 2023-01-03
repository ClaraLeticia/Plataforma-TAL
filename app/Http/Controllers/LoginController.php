<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    
    public function auth(Request $request) {
        $credenciais = $request->validate([
            'matricula' => ['required'],
            'password' => ['required'],
        ]);
        
        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->intended('/perfil-etep');
        } else {
            return redirect('/login')->with('erro','Usuário ou senha inválida');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
