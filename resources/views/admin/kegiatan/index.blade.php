@extends('admin._page.master')
@section('title','Manajemen Kegiatan')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manajemen Kegiatan</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Kegiatan Masjid Raya An-Nur Polinema</h4>
                        <p class="text-muted mb-4 font-13">Untuk menambahkan data Pilih Tombol <b>Tambah</b> untuk Import data Pilih tombol <b>Import</b>.</p>

                        <div class="button-items">
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-kegiatan-modal-lg"><i class="mdi mdi-plus-box mr-2"></i>Tambah</button>

                            <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-animation="bounce" data-target=".bs-import-modal-lg" disabled><i class="mdi mdi-file-excel-box mr-2"></i>Import</button>

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
                                            <h5 class="mt-0 mb-1">{{$total}}</h5>
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
                                            <i class="fas fa-user-tie text-gradient-danger"></i>
                                        </div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">3</h5>
                                            <p class="mb-0 font-12 text-muted">Pemateri</p>
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
                                <th>Kegiatan</th>
                                <th>Pemateri</th>
                                <th>Tanggal</th>
                                {{-- <th>Lokasi</th> --}}
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php $no = 1; @endphp
                            @foreach ($kegiatan as $kegiatan)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$kegiatan->nama_kegiatan}}</td>
                                <td>{{$kegiatan->pemateri_kegiatan}}</td>                                
                                <td>
                                    <?php
                                        $date = Date('d M Y H:i', strtotime($kegiatan->tanggal_kegiatan));
                                    ?>
                                    {{$date}}
                                </td>
                                {{-- <td>{{$kegiatan->lokasi_kegiatan}}</td> --}}
                                <td>
                                    <a type="button" href="{{$kegiatan->link_kegiatan}}" target="_blank" class="btn btn-info waves-effect waves-light btn-sm"><i class="mdi mdi-youtube mr-2"></i>Link</a>
                                </td>
                                <td>
                                    <a type="button" href="/admin/kegiatan/{{$kegiatan->id_kegiatan}}" class="btn btn-warning waves-effect waves-light btn-sm"><i class="mdi mdi-details mr-2"></i>Detail</a>
                                    <a type="button" href="/admin/kegiatan/delete/{{$kegiatan->id_kegiatan}}" class="btn btn-danger waves-effect waves-light btn-sm"><i class="mdi mdi-delete mr-2"></i>Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                            {{-- <tr>
                                <td>2</td>
                                <td>Kultum Rutin Ba'da Dhuhur</td>
                                <td>Ust. Baha'uddin </td>
                                <td>2022/08/31</td>
                                <td>Masjid Raya An-Nur Polinema</td>
                                <td>
                                    <a type="button" href="#" class="btn btn-info waves-effect waves-light btn-sm"><i class="mdi mdi-youtube mr-2"></i>Link</a>
                                </td>
                                <td>
                                    <a type="button" href="#" class="btn btn-warning waves-effect waves-light btn-sm"><i class="mdi mdi-details mr-2"></i>Detail</a>
                                    <a type="button" href="#" class="btn btn-danger waves-effect waves-light btn-sm"><i class="mdi mdi-delete mr-2"></i>Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Kajian Rutin Nawak Hijrah</td>
                                <td>Habib Muhammad Bin Anies Shahab </td>
                                <td>2022/08/31</td>
                                <td>Masjid Raya An-Nur Polinema</td>
                                <td>
                                    <a type="button" href="#" class="btn btn-info waves-effect waves-light btn-sm"><i class="mdi mdi-youtube mr-2"></i>Link</a>
                                </td>
                                <td>
                                    <a type="button" href="#" class="btn btn-warning waves-effect waves-light btn-sm"><i class="mdi mdi-details mr-2"></i>Detail</a>
                                    <a type="button" href="#" class="btn btn-danger waves-effect waves-light btn-sm"><i class="mdi mdi-delete mr-2"></i>Hapus</a>
                                </td>
                            </tr> --}}
                            
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

     <!--  Modal Kegiatan -->
     <div class="modal fade bs-kegiatan-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah Kegiatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form class="" action="/admin/kegiatan/add" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Kegiatan</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" id="nama_kegiatan" name="nama_kegiatan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Pemateri</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" id="pemateri_kegiatan" name="pemateri_kegiatan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-search-input" class="col-sm-2 col-form-label">Lokasi</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" id="lokasi_kegiatan" name="lokasi_kegiatan" required>
                                                            <option>Masjid Raya An-Nur Polinema</option>
                                                            <option>Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-url-input" class="col-sm-2 col-form-label">Link Live Streaming</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="url" id="link_kegiatan" name="link_kegiatan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="datetime-local" id="tanggal_kegiatan" name="tanggal_kegiatan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Thumbnail</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="dropify" name="thumbnail_kegiatan" id="thumbnail_kegiatan" required/>  
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Action</label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>                                        
                                    </div>                                            
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

     <!--  Modal Import Kegiatan -->
     <div class="modal fade bs-import-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Import Kegiatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form class="" action="#">
                                                <div class="form-group row">
                                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Import</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" id="input-file-now" class="dropify" />  
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Action</label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>                                        
                                    </div>                                            
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div>
@stop