<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
        
        if(Auth::attempt($credenciais, $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended('/');
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

    public function forgotPasswordForm(){
        return view('solicitar-senha');
    }

    public function sendResetLink(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ],[
            'email' => 'OPS! Esse e-mail não está cadastrado.'
        ]);
        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now(),
        ]);
        $action_link = route('resetPasswordForm',['token'=>$token,'email'=>$request->email]);
        $body = 'Nós recebemos uma solicitação para resetar a senha da sua conta 
        na plataforma TAL Horários associada com '.$request->email.'. Você pode 
        alterar sua senha clicando no link abaixo.';
        Mail::send('email-resete-senha',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
            $message->from('tal.horarios@gmail.com','TAL Horários');
            $message->to($request->email)->subject('Resetar Senha');
        });
        return redirect('/forgot-password')->with('success','Nós enviamos o link para o seu e-mail!');
    }

    public function resetPasswordForm(Request $request, $token = null){
        return view('resetar-senha')->with(['token'=>$token,'email'=>$request->email]);
    }

    public function resetPassword(Request $request, $token = null){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|max:20|confirmed',
            'password_confirmation' => 'required'
        ],[
            'password.min' => 'A senha não pode ter menos de 8 caracteres',
            'password.max' => 'A senha não pode ter mais de 20 caracteres',
            'password.confirmed' => 'As senhas não são iguais'
        ]);
        $check_token = DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();

        if(!$check_token){
            return redirect(route('resetPasswordForm'))->with('error','Token inválido');
        } else {
            User::where('email',$request->email)->update([
                'password'=>Hash::make($request->password)
            ]);
            DB::table('password_resets')->where([
                'email'=>$request->email,
            ])->delete();
            return redirect('/login')->with('info','Senha trocada com sucesso!');
        }
    }
}
