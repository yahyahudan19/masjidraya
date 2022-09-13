@extends('admin._page.master')
@section('title','Manajemen Gallery')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#">Gallery</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manajemen Gallery</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Gallery Masjid Raya An-Nur Polinema</h4>
                        <p class="text-muted mb-4 font-13">Untuk menambahkan Gallery Pilih Tombol <b>Tambah</b> untuk Import data Pilih tombol <b>Import</b>.</p>

                        <div class="button-items">
                            <a type="button" href="/admin/gallery/tambah" class="btn btn-primary waves-effect waves-light" ><i class="mdi mdi-plus-box mr-2"></i>Tambah</a>
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
                                            <i class="fas fa-tasks text-gradient-success"></i>
                                        </div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">10</h5>
                                            <p class="mb-0 font-12 text-muted">Kegiatan</p>   
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
                                            <i class="fas fa-camera text-gradient-warning"></i>
                                        </div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">3</h5>
                                            <p class="mb-0 font-12 text-muted">Gallery</p>
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
                                <th>Title</th>
                                <th>Pemateri</th>
                                <th>Gambar</th>
                                <th>Tag</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($gallery as $gallery)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$gallery->title_gallery}}</td>
                                        <td>{{$gallery->pemateri_gallery}}</td>                                
                                        <td>
                                            <img src="{{asset('images/gallery/'.$gallery->gambar_gallery)}}" class="img-fluid" alt="Responsive image" width="200px">
                                        </td>
                                        <td>{{$gallery->tag_gallery}}</td>
                                        <td>
                                            <?php
                                            $date = Date('d M Y', strtotime($gallery->tanggal_gallery));
                                            ?>
                                            {{$date}}
                                        </td>
                                        <td>
                                            <a type="button" href="/admin/gallery/{{$gallery->id_gallery}}" class="btn btn-warning waves-effect waves-light btn-sm"><i class="mdi mdi-details mr-2"></i>Detail</a>
                                            <a type="button" href="/admin/gallery/hapus/{{$gallery->id_gallery}}" class="btn btn-danger waves-effect waves-light btn-sm"><i class="mdi mdi-delete mr-2"></i>Hapus</a>
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