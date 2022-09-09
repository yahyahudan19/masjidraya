<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /* =================================== Admin Artikel View ================================ */

    /* ========= Dashboard View ========= */
    public function index(){
        return view('admin/index');
    }

    /* ========= Kegiatan View ========= */
    public function kegiatan(){
        return view('admin/kegiatan/index');
    }
    /* Add Kegiatan*/
    public function addKegiatan(){
        return view('admin/kegiatan/add');
    }
    /* Detail Kegiatan*/
    public function detKegiatan(){
        return view('admin/kegiatan/detail');
    }

    /* ========= Artikel View ========= */
    public function artikel(){
        return view('admin/artikel/index');
    }
    /* Add Artikel*/
    public function addArtikel(){
        return view('admin/artikel/add');
    }
    /* Detail Artikel*/
    public function detArtikel(){
        return view('admin/artikel/detail');
    }

    /* ========= Gallery View ========= */
    public function gallery(){
        return view('admin/gallery/index');
    }
    /* Add Gallery*/
    public function addGallery(){
        return view('admin/gallery/add');
    }
    /* Detail Gallery*/
    public function detGallery(){
        return view('admin/gallery/detail');
    }
    
    /* ========= User View ========= */
    public function user(){
        return view('admin/user/index');
    }
    /* Add User*/
    public function addUser(){
        return view('admin/user/add');
    }
    /* Detail User*/
    public function detUser(){
        return view('admin/user/detail');
    }

     /* =================================== User Artikel View ================================ */

     public function userArtikel(){
        return view('user/artikel/index');
    }
    /* Add Artikel*/
    public function UseraddArtikel(){
        return view('user/artikel/add');
    }
    /* Detail Artikel*/
    public function UserdetArtikel(){
        return view('user/artikel/detail');
    }

}
