<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /* Login View */
    public function index(){
        return view('auth/index');
    }
    /* Login Process */
    public function login(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
            // return redirect('/admin');
        }else{
            // return redirect('/auth')->with('error', 'User/Pass Anda Salah  !');
            return redirect('/dashboard');
        }
    }

    /* Logout Process */
    public function logout(){
        Auth::logout(); 
        return redirect('/auth');
    }

}
