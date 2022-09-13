<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Gallery;
use App\Models\Kegiatan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /* =================================== Admin Controller ================================ */

    /* ========= Dashboard Controller ========= */
    public function index(){

        $kegiatan = Kegiatan::all()->count();
        $artikel = Artikel::all()->count();
        $user = User::all()->count();
        $gallery = Gallery::all()->count();

        return view('admin/index',compact('kegiatan','user','artikel','gallery'));
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

            $request->file('thumbnail_kegiatan')->move('images/kegiatan/',$request->file('thumbnail_kegiatan')->getClientOriginalName());

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
            $file_path = public_path('images/kegiatan' . $file_name);
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

            if($request->hasFile('thumbnail_kegiatan')){

                $file_name = $kegiatan->thumbnail_kegiatan;
                $file_path = public_path('images/kegiatan/' . $file_name);
                
                unlink($file_path);

                $request->validate([
                    'thumbnail_kegiatan' => 'required|max:2048',
                ]);
    
                $request->file('thumbnail_kegiatan')->move('images/kegiatan/',$request->file('thumbnail_kegiatan')->getClientOriginalName());
    
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
                $kegiatan->update([
                    'nama_kegiatan' => $request->nama_kegiatan,
                    'pemateri_kegiatan' => $request->pemateri_kegiatan,
                    'tanggal_kegiatan' => $request->tanggal_kegiatan,
                    'link_kegiatan' => $request->link_kegiatan,
                    'lokasi_kegiatan' => $request->lokasi_kegiatan,
                ]);
                return redirect()->back()->with('success', 'Kegiatan Berhasil diedit !');
            }
            
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
                'penulis_artikel' => auth()->user()->name,
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
            if($request->hasFile('thumbnail_artikel')){

                $file_name = $artikel->thumbnail_artikel;
                $file_path = public_path('images/artikel/' . $file_name);
                
                unlink($file_path);

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

                $artikel->update([
                    'nama_artikel' => $request->nama_artikel,
                    'konten_artikel' => $request->konten_artikel,
                    'penulis_artikel' => $request->penulis_artikel,
                    'artikel_artikel' => $request->artikel_artikel,
                    'tanggal_artikel' => $request->tanggal_artikel,
                ]);
                return redirect()->back()->with('success','Artikel Berhasil Diupdate');
            }
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
    
    /* View Gallery */
    public function gallery(){
        $gallery = Gallery::all();
        return view('admin/gallery/index',compact('gallery'));
    }

    /* Add View Gallery */
    public function tambahGallery(){
        return view('admin/gallery/add');
    }
    
    /* Add Gallery */
    public function addGallery(Request $request){

        //  With Thumbnail

        if($request->hasFile('gambar_gallery')){

            // dd($request->all());

            $request->validate([
                'gambar_gallery' => 'required|max:2048',
            ]);

            $request->file('gambar_gallery')->move('images/gallery',$request->file('gambar_gallery')->getClientOriginalName());

            $gallery = Gallery::create([
                'title_gallery' => $request->title_gallery,
                'pemateri_gallery' => $request->pemateri_gallery,
                'tag_gallery' => $request->tag_gallery,
                'tanggal_gallery' => $request->tanggal_gallery,
                'gambar_gallery' => $request->file('gambar_gallery')->getClientOriginalName(),
            ]);
            
            if($gallery){
                return redirect('admin/gallery')->with('success', 'Gallery Berhasil ditambahkan !');
            }else{
                return redirect('admin/gallery')->with('error', 'Gallery Gagal ditambahkan !');
            }
            return redirect('admin/gallery')->with('error', 'Gallery Gagal ditambahkan !');
        }
    }

    /* Detail Gallery*/
    public function detGallery($id_gallery){

        $data_gallery = Gallery::find($id_gallery);    
        return view('admin/gallery/detail',compact('data_gallery'));
    }

    /* Delete Gallery*/
    public function delGallery($id_gallery){

        $data_gallery = Gallery::find($id_gallery);    

        if($data_gallery){
            $file_name = $data_gallery->gambar_gallery;
            $file_path = public_path('images/gallery/' . $file_name);
            unlink($file_path);
            
            $data_gallery->delete($data_gallery);
            return redirect('/admin/gallery')->with('success', 'Foto Berhasil dihapus !');
        }else{
            return redirect('/admin/gallery')->with('warning', 'Foto Gagal dihapus !');
        }
    }
     /* Update Gallery*/
     public function updGallery(Request $request){


        $gallery_id = $request->id_gallery;
        $gallery = Gallery::find($gallery_id);

        if($gallery){
            // Upload Dengan Gambar
            if($request->hasFile('gambar_gallery')){
                
                $file_name = $gallery->gambar_gallery;
                $file_path = public_path('images/gallery/' . $file_name);
                
                unlink($file_path);

                $request->file('gambar_gallery')->move('images/gallery',$request->file('gambar_gallery')->getClientOriginalName());
    
                $gallery->update([
                    "title_gallery" => $request->title_gallery,
                    "pemateri_gallery" => $request->pemateri_gallery,
                    "tag_gallery" => $request->tag_gallery,
                    "tanggal_gallery" => $request->tanggal_gallery,
                    "gambar_gallery" => $request->file('gambar_gallery')->getClientOriginalName(),
                ]);
                return redirect()->back()->with('success','Foto Berhasil Diupdate');
            }else{

            // Upload Tanpa Gambar
                 dd($request->all());

                $gallery->update([
                    "title_gallery" => $request->title_gallery,
                    "pemateri_gallery" => $request->pemateri_gallery,
                    "tag_gallery" => $request->tag_gallery,
                    "tanggal_gallery" => $request->tanggal_gallery,
                ]);
                return redirect()->back()->with('success','Foto Berhasil Diupdate');
            }
        }else{

            return redirect()->back()->with('error','Foto Tidak Ditemukan !');
        }

     }
    
    /* ========= User View ========= */

    /* User View */
    public function user(){
        $user = User::where('role','User')->get()->count();
        $admin = User::where('role','Admin')->get()->count();
        $data_user = User::all();
        return view('admin/user/index',compact('data_user','user','admin'));
    }
    /* Add User*/
    public function addUser(Request $request){

        // dd($request->all());

        if(User::where('email', $request->email)->exists()){
            Alert::error('Register Gagal !', 'Email Sudah Digunakan');
            return redirect()->back();
            
        }else{
            $user = User::create([
                "role" => "User",
                "photo" => "logo_putih.png", // Default Image Profile
                "name" => $request->name,
                "email" => $request->email,
                "status" => "Tidak Aktif",
                "password" => Hash::make($request->password),
            ]);
    
            if($user){
                return redirect()->back()->with('success', 'Register Berhasil !');
            }else{
                return redirect()->back()->with('error', 'Register Gagal !');
            }
        }
    }
    /* Delete User*/
    public function delUser($id){
        
        $user = User::findOrFail($id);

        if($user){
            $user->delete($id);
            return redirect()->back()->with('success', 'User Berhasil Dihapus!');
        }else{
            return redirect()->back()->with('error', 'User Gagal Dihapus !');
        }

    }

    /* Verikasi User*/
    public function verifikasi($id){

        $user = User::findOrFail($id);

        $user->update([
            "status" => "Aktif",
            "email_verified_at" =>  Carbon::now()
        ]);

        return redirect()->back()->with('success', 'User Berhasil Terverifikasi !');

    }

    /* Detail User*/
    public function detUser($id){
        $data_user = User::find($id);
        return view('admin.user.detail',compact('data_user'));
    }

    /* Update User*/
    public function updUser(Request $request){

        $user_id = $request->id;
        $user = User::find($user_id);


        if($user){

            // dd($request->all());
            if($request->hasFile('photo')){

                dd($request->all());
                
                $request->file('photo')->move('images/profile/',$request->file('photo')->getClientOriginalName());
    
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'role' => $request->role,
                    'photo' => $request->file('photo')->getClientOriginalName(),
                ]);
    
                return redirect()->back()->with('success', 'User Berhasil Terupdate !');

            }else{

                dd($request->all());

                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'role' => $request->role,
                ]);

                return redirect()->back()->with('success', 'User Berhasil Terupdate !');
            }
        }else{
            return redirect()->back()->with('warning', 'User Tidak Ada !');
        }

    }

    public function profile($id){
        $data_user = User::find($id);
        return view('admin.profile',compact('data_user'));
    }



     /* =================================== User Controller ================================ */

    /* View Artikel */ 
    public function userArtikel(){
        $total = Artikel::where('penulis_artikel',auth()->user()->name)->get()->count();
        $verif = Artikel::where([
            "penulis_artikel" => auth()->user()->name,
            "status_artikel" => "Valid"
        ])->get()->count();
        $artikel = Artikel::where('penulis_artikel',auth()->user()->name)->get();
        return view('user/artikel/index',compact('total','artikel','verif'));
    }
    /* Add View Artikel*/
    public function UseraddArtikel(){
        return view('user/artikel/add');
    }
    /* Detail View Artikel*/
    public function UserdetArtikel($id_artikel){
        $data_artikel= Artikel::find($id_artikel);    
        return view('user/artikel/detail',compact('data_artikel'));
    }
    /* Update Artikel */
    public function UserUpdArtikel(Request $request){

        
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
    /* Add Process Artikel*/
    public function addArtikelUser(Request $request){

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
                'penulis_artikel' => auth()->user()->name,
                'status_artikel' => "Belum Valid",
                'thumbnail_artikel' => $request->file('thumbnail_artikel')->getClientOriginalName(),
            ]);
            
            if($artikel){
                return redirect('user/artikel')->with('success', 'Artikel Berhasil ditambahkan !');
            }else{
                return redirect('user/artikel')->with('error', 'Artikel Gagal ditambahkan !');
            }
        }

        // Whitout Thumbnail
        
        $artikel = Artikel::create($request->all());

        if($artikel){
            return redirect('user/artikel')->with('success', 'Artikel Berhasil ditambahkan !');
        }else{
            return redirect('user/artikel')->with('error', 'Artikel Gagal ditambahkan !');
        }
    }
    /* View Profile*/
    public function UserProfile($id){
        $data_user = User::find($id);
        return view('user.profile',compact('data_user'));
    }
}
