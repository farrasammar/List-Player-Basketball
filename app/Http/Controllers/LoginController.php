<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('Login.login-page');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/beranda');
        }
        return redirect('/welcome');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function registrasi(){
        return view('Login.registrasi');
    }
    
    public function simpanregistrasi(Request $request){
        //dd($request->all());

        User::create([
            'name' => $request->name,
            'level' => 'player',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('Login.login-page');

    }
}