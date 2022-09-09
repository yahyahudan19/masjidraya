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
    public function gallery(){
        return view('homepage/gallery');
    }

    /* Contact View */
    public function contact(){
        return view('homepage/contact');
    }

    /* Contact View */
    public function kegiatan(){
        return view('homepage/kegiatan/index');
    }

    /* Contact View */
    public function detailKegiatan(){
        return view('homepage/kegiatan/detail');
    }
}
