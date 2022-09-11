<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Kegiatan;
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


    /* Artikel View */
    public function artikel(){
        $lain_artikel = Artikel::where('status_artikel','Valid')->paginate(4);  
        $artikel = Artikel::where('status_artikel','Valid')->get()->all();
        return view('homepage.artikel.index',compact('artikel','lain_artikel'));
    }

    /* Detail Artikel View */
    public function detailArtikel($id_artikel){
        $lain_artikel = Artikel::where('status_artikel','Valid')->paginate(4);  
        $data_artikel = Artikel::find($id_artikel);
        return view('homepage.artikel.detail',compact('data_artikel','lain_artikel'));
    }

    /* Kegiatan View */
    public function kegiatan(){
        $kegiatan_utama = Kegiatan::latest()->first();    
        $kegiatan = Kegiatan::all();    
        return view('homepage.kegiatan.index',compact(['kegiatan','kegiatan_utama']));
    }

    /* Detail Kegiatan View */
    public function detailKegiatan($id_kegiatan){

        $lain_kegiatan = Kegiatan::paginate(2);  
        $data_kegiatan = Kegiatan::find($id_kegiatan);
        return view('homepage.kegiatan.detail',compact('data_kegiatan','lain_kegiatan'));
    }
}
