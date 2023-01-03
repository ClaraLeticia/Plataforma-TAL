<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    
    // public function auth(Request $request) {
    //     $credenciais = ['matricula_membro'=>$request->login,'senha'=>$request->password];
        
    //     if(Auth::attempt($credenciais, true)){
    //         dd($request);
    //         $request->session()->regenerate();
    //         return redirect()->intended('/perfil-etep');
    //     } else {
    //         return redirect('/login')->with('erro','Usuário ou senha inválida');
    //     }
    // }
}
