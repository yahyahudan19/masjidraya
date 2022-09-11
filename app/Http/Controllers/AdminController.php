<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Kegiatan;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /* =================================== Admin Controller ================================ */

    /* ========= Dashboard Controller ========= */
    public function index(){
        return view('admin/index');
    }

    /* ========= Kegiatan Controller ========= */
    
    /* View Kegiatan*/
    public function kegiatan(){

        $total = Kegiatan::count();
        $kegiatan = Kegiatan::all();    
        return view('admin.kegiatan.index',compact(['kegiatan','total']));
    }

    /* Add Kegiatan*/
    public function addKegiatan(Request $request){

        //  With Thumbnail

        if($request->hasFile('thumbnail_kegiatan')){

            $request->validate([
                'thumbnail_kegiatan' => 'required|max:2048',
            ]);

            $request->file('thumbnail_kegiatan')->move('images/',$request->file('thumbnail_kegiatan')->getClientOriginalName());

            $kegiatan = Kegiatan::create([
                'nama_kegiatan' => $request->nama_kegiatan,
                'pemateri_kegiatan' => $request->pemateri_kegiatan,
                'tanggal_kegiatan' => $request->tanggal_kegiatan,
                'link_kegiatan' => $request->link_kegiatan,
                'lokasi_kegiatan' => $request->lokasi_kegiatan,
                'thumbnail_kegiatan' => $request->file('thumbnail_kegiatan')->getClientOriginalName(),
            ]);
            
            if($kegiatan){
                return redirect('admin/kegiatan')->with('success', 'Kegiatan Berhasil ditambahkan !');
            }else{
                return redirect('admin/kegiatan')->with('error', 'Kegiatan Gagal ditambahkan !');
            }
        }

        // Whitout Thumbnail
        
        $kegiatan = Kegiatan::create($request->all());

        if($kegiatan){
            return redirect('admin/kegiatan')->with('success', 'Kegiatan Berhasil ditambahkan !');
        }else{
            return redirect('admin/kegiatan')->with('error', 'Kegiatan Gagal ditambahkan !');
        }

    }

    /* Delete Kegiatan*/
    public function delKegiatan($id_kegiatan)
    {
        $data_kegiatan = Kegiatan::find($id_kegiatan);

        if($data_kegiatan){

            $file_name = $data_kegiatan->thumbnail_kegiatan;
            $file_path = public_path('images/' . $file_name);
            unlink($file_path);

            $data_kegiatan->delete($data_kegiatan);
            return redirect('/admin/kegiatan')->with('success', 'Kegiatan Berhasil dihapus !');
        }else{
            return redirect('/admin/kegiatan')->with('warning', 'Kegiatan Tidak Ditemukan !');
        }
    }

    /* Detail Kegiatan*/
    public function detKegiatan($id_kegiatan){

        $data_kegiatan = Kegiatan::find($id_kegiatan);
        return view('admin.kegiatan.detail',compact('data_kegiatan'));
    }

    /* Update Kegiatan*/
    public function updKegiatan(Request $request){        

        $kegiatan_id = $request->id_kegiatan;
        $kegiatan = Kegiatan::find($kegiatan_id);

        if($kegiatan){

            $request->validate([
                'thumbnail_kegiatan' => 'required|max:2048',
            ]);

            $request->file('thumbnail_kegiatan')->move('images/',$request->file('thumbnail_kegiatan')->getClientOriginalName());

            $kegiatan->update([
                'nama_kegiatan' => $request->nama_kegiatan,
                'pemateri_kegiatan' => $request->pemateri_kegiatan,
                'tanggal_kegiatan' => $request->tanggal_kegiatan,
                'link_kegiatan' => $request->link_kegiatan,
                'lokasi_kegiatan' => $request->lokasi_kegiatan,
                'thumbnail_kegiatan' => $request->file('thumbnail_kegiatan')->getClientOriginalName(),

            ]);

            return redirect()->back()->with('success', 'Kegiatan Berhasil diedit !');
            
        }else{
            return redirect()->back()->with('warning', 'Kegiatan Tidak Ada !');
        }

    }

    /* ========= Artikel View ========= */

    /* View Artikel*/
    public function artikel(){

        $total = Artikel::count();
        $artikel = Artikel::all();    
        return view('admin.artikel.index',compact(['artikel','total']));
    }

    /* Add View Artikel*/
    public function tambahArtikel(){

        return view('admin.artikel.add');
    }

    /* Add Artikel*/
    public function addArtikel(Request $request){

        //  With Thumbnail

        if($request->hasFile('thumbnail_artikel')){

            $request->validate([
                'thumbnail_artikel' => 'required|max:2048',
            ]);

            $request->file('thumbnail_artikel')->move('images/artikel',$request->file('thumbnail_artikel')->getClientOriginalName());

            $artikel = Artikel::create([
                'nama_artikel' => $request->nama_artikel,
                'konten_artikel' => $request->konten_artikel,
                'tanggal_artikel' => $request->tanggal_artikel,
                'penulis_artikel' => $request->penulis_artikel,
                'status_artikel' => "Belum Valid",
                'thumbnail_artikel' => $request->file('thumbnail_artikel')->getClientOriginalName(),
            ]);
            
            if($artikel){
                return redirect('admin/artikel')->with('success', 'Artikel Berhasil ditambahkan !');
            }else{
                return redirect('admin/artikel')->with('error', 'Artikel Gagal ditambahkan !');
            }
        }

        // Whitout Thumbnail
        
        $artikel = Artikel::create($request->all());

        if($artikel){
            return redirect('admin/artikel')->with('success', 'Artikel Berhasil ditambahkan !');
        }else{
            return redirect('admin/artikel')->with('error', 'Artikel Gagal ditambahkan !');
        }
    }

    /* Delete Artikel */
    public function delArtikel($id_artikel)
    {
        $data_artikel = Artikel::find($id_artikel);

        if($data_artikel){

            $file_name = $data_artikel->thumbnail_artikel;
            $file_path = public_path('images/artikel/' . $file_name);
            unlink($file_path);
            
            $data_artikel->delete($data_artikel);
            return redirect('/admin/artikel')->with('success', 'Artikel Berhasil dihapus !');
        }else{
            return redirect('/admin/artikel')->with('warning', 'Artikel Tidak Ditemukan !');
        }
    }

    /* Detail Artikel */
    public function detArtikel($id_artikel){

        $data_artikel= Artikel::find($id_artikel);    
        return view('admin/artikel/detail',compact('data_artikel'));
    }

    /* Update Artikel */
    public function updArtikel(Request $request){

        
        $artikel_id = $request->id_artikel;
        $artikel = Artikel::find($artikel_id);
        
        if($artikel){

            // dd($request->all());

            $request->file('thumbnail_artikel')->move('images/artikel/',$request->file('thumbnail_artikel')->getClientOriginalName());
            
            $artikel->update([
                'nama_artikel' => $request->nama_artikel,
                'konten_artikel' => $request->konten_artikel,
                'penulis_artikel' => $request->penulis_artikel,
                'artikel_artikel' => $request->artikel_artikel,
                'tanggal_artikel' => $request->tanggal_artikel,
                'thumbnail_artikel' => $request->file('thumbnail_artikel')->getClientOriginalName(),
            ]);

            return redirect()->back()->with('success','Artikel Berhasil Diupdate');
        }else{
            return redirect()->back()->with('warning','Artikel Tidak Ada');
        }
        
    }

    /* Verifikasi Artikel */
    public function verArtikel($id_artikel){

        $artikel = Artikel::find($id_artikel);

        if($artikel){

            $artikel->update([
                'status_artikel' => 'Valid',
            ]);

            return redirect()->back()->with('success','Artikel Berhasil Terverifikasi');

        }else{
            return redirect()->back()->with('error','Artikel Gagal Terverifikasi ');
        }
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

     /* =================================== User Artikel Controller ================================ */

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
