@extends('admin._page.master')
@section('title','Manajemen Artikel')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#">Artikel</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manajemen Artikel</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Artikel Masjid Raya An-Nur Polinema</h4>
                        <p class="text-muted mb-4 font-13">Untuk menambahkan Artikel Pilih Tombol <b>Tambah</b> untuk Import data Pilih tombol <b>Import</b>.</p>

                        <div class="button-items">
                            <a type="button" href="/admin/artikel/add" class="btn btn-primary waves-effect waves-light" ><i class="mdi mdi-plus-box mr-2"></i>Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-contain">
                                    <div class="row">
                                        <div class="col-2 align-self-center">
                                            <i class="fas fa-book-open text-gradient-danger"></i>
                                        </div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">10</h5>
                                            <p class="mb-0 font-12 text-muted">Artikel</p>   
                                        </div>
                                    </div>                                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body justify-content-center">
                                <div class="icon-contain">
                                    <div class="row">
                                        <div class="col-2 align-self-center">
                                            <i class="fas fa-user text-gradient-warning"></i>
                                        </div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">5</h5>
                                            <p class="mb-0 font-12 text-muted">Author</p>
                                        </div>
                                    </div>                                                        
                                </div>
                            </div>
                        </div>
                    </div>                                           
                </div>                                    
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{-- <h4 class="mt-0 header-title">Data Kegiatan</h4> --}}

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Artikel</th>
                                <th>Author</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Keislaman Indonesia</td>
                                <td>Ust. Syamsul Arifin</td>                                
                                <td>2022/08/31</td>
                                <td>
                                    <a type="button" href="/artikel" class="btn btn-info waves-effect waves-light btn-sm"><i class="mdi mdi-eye mr-2"></i>Lihat</a>
                                    <a type="button" href="/admin/kegiatan/detail" class="btn btn-warning waves-effect waves-light btn-sm"><i class="mdi mdi-details mr-2"></i>Detail</a>
                                    <a type="button" href="#" class="btn btn-danger waves-effect waves-light btn-sm"><i class="mdi mdi-delete mr-2"></i>Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Islam dan Sosial Pendidikan</td>
                                <td>Ust. Baha'uddin </td>
                                <td>2022/08/31</td>
                                <td>
                                    <a type="button" href="/artikel" class="btn btn-info waves-effect waves-light btn-sm"><i class="mdi mdi-eye mr-2"></i>Lihat</a>
                                    <a type="button" href="#" class="btn btn-warning waves-effect waves-light btn-sm"><i class="mdi mdi-details mr-2"></i>Detail</a>
                                    <a type="button" href="#" class="btn btn-danger waves-effect waves-light btn-sm"><i class="mdi mdi-delete mr-2"></i>Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Hukum Mengucapkan Salam kepada Non-Muslim</td>
                                <td>Habib Muhammad Bin Anies Shahab </td>
                                <td>2022/08/31</td>
                                <td>
                                    <a type="button" href="/artikel" class="btn btn-info waves-effect waves-light btn-sm"><i class="mdi mdi-eye mr-2"></i>Lihat</a>
                                    <a type="button" href="#" class="btn btn-warning waves-effect waves-light btn-sm"><i class="mdi mdi-details mr-2"></i>Detail</a>
                                    <a type="button" href="#" class="btn btn-danger waves-effect waves-light btn-sm"><i class="mdi mdi-delete mr-2"></i>Hapus</a>
                                </td>
                            </tr>
                            
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->


</div>
@stop