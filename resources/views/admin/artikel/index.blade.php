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
                            <a type="button" href="/admin/artikel/tambah" class="btn btn-primary waves-effect waves-light" ><i class="mdi mdi-plus-box mr-2"></i>Tambah</a>
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
                                            <h5 class="mt-0 mb-1">{{$total}}</h5>
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
                                            <h5 class="mt-0 mb-1">{{$total}}</h5>
                                            <p class="mb-0 font-12 text-muted">Penulis</p>
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
                                <th>Penulis</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>

                            @php $no = 1; @endphp
                            @foreach ($artikel as $artikel)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$artikel->nama_artikel}}</td>
                                <td>{{$artikel->penulis_artikel}}</td>                                
                                <td>
                                    <?php
                                        $date = Date('d M Y', strtotime($artikel->tanggal_artikel));
                                    ?>
                                    {{$date}}
                                </td>
                                <td>
                                    @if($artikel->status_artikel == 'Belum Valid')
                                        <span class="badge badge-warning"><i class="mdi mdi-close-circle"></i>Belum Terverifikasi</span>
                                    @else
                                        <span class="badge badge-success"><i class="mdi mdi-check-circle"></i>Terverifikasi</span>
                                    @endif
                                </td>                                
                                <td>
                                    {{-- <a type="button" href="/artikel" class="btn btn-info waves-effect waves-light btn-sm"><i class="mdi mdi-eye mr-2"></i>Lihat</a> --}}
                                    <a type="button" href="/admin/artikel/detail/{{$artikel->id_artikel}}" class="btn btn-warning waves-effect waves-light btn-sm"><i class="mdi mdi-details mr-2"></i>Detail</a>
                                    <a type="button" href="/admin/artikel/delete/{{$artikel->id_artikel}}" class="btn btn-danger waves-effect waves-light btn-sm"><i class="mdi mdi-delete mr-2"></i>Hapus</a>
                                    @if($artikel->status_artikel == 'Belum Valid')
                                        <a type="button" href="/admin/artikel/verifikasi/{{$artikel->id_artikel}}" class="btn btn-success waves-effect waves-light btn-sm"><i class="mdi mdi-check-circle mr-2"></i>Verifikasi</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->


</div>
@stop