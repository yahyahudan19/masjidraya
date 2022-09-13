<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Kegiatan;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /* Hompage View */
    public function index(){
        $artikel = Artikel::where('status_artikel','Valid')->get()->all();
        $kegiatan = Kegiatan::all();
        $kegiatan_utama = Kegiatan::latest()->first(); 
        return view('homepage/index',compact('artikel','kegiatan','kegiatan_utama'));
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
        $foto_artikel = User::where('name',$data_artikel->penulis_artikel)->first();

        return view('homepage.artikel.detail',compact('data_artikel','lain_artikel','foto_artikel'));
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
