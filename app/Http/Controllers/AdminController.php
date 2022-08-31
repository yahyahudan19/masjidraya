<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /* Dashboard View */
    public function index(){
    return view('admin/index');
    }

    /* Kegiatan View */
    public function kegiatan(){
        return view('admin/kegiatan/index');
    }
    /* Add Kegiatan*/
    public function addKegiatan(){
        return view('admin/kegiatan/add');
    }

}
