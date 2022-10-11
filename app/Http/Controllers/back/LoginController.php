<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function loginPage(){

        return view('back.pages.login');
    }


    public function login(Request $request){

       if(Auth::attempt($request->only('email','password')))
       {
           return redirect()->route('home');
       }

       return back()->withErrors([
            'email' => 'Kullanıcı adı veya Parola Yanlış',
        ])->withInput();


    }


    public function logout(){
        Auth::logout();
        return redirect()->route('loginPage');
    }
}
