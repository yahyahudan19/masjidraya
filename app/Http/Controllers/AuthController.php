<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{
    /* Login View */
    public function index(){
        
        return view('auth/index');
    }
    /* Login Process */
    public function login(Request $request){

        
        if(Auth::attempt($request->only('email','password'))){

            $cek = User::where('email',$request->email)->get()->first();

            if($cek->status == "Aktif"){
                return redirect('/dashboard');
            }else{
                // return redirect()->back()->with('warning','Akun-mu Belum Terverifikasi !');
                Alert::warning('Login Gagal !', 'Akun-mu Belum Terverifikasi !');
                return redirect()->back();

            }
        }else{
            Alert::error('Login Gagal !', 'Username/Passsword Salah!');
            return redirect()->back();
        }
    }

    /* Register View */
    public function register(){
        return view('auth.register');
    }

    /* Register Process */
    public function registering(Request $request){
        
        if(User::where('email', $request->email)->exists()){
            Alert::error('Register Gagal !', 'Email Sudah Digunakan');
            return redirect()->back();
            
        }else{
            $user = User::create([
                "role" => "User",
                "photo" => "logo_putih.png",
                "name" => $request->name,
                "email" => $request->email,
                "status" => "Tidak Aktif",
                "password" => Hash::make($request->password),
            ]);
    
            if($user){
                return redirect('/auth')->with('success', 'Register Berhasil !');
            }else{
                return redirect('/auth')->with('error', 'Register Gagal !');
            }
        }

    }

    /* Logout Process */
    public function logout(){
        Auth::logout(); 
        return redirect('/auth');
    }

}
