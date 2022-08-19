<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /* Hompage View */
    public function index(){
        return view('homepage/index');
    }

    /* About View */
    public function about(){
        return view('homepage/about');
    }
    
    /* Galery View */
    public function galery(){
        return view('homepage/galery');
    }

    /* Contact View */
    public function contact(){
        return view('homepage/contact');
    }
}
