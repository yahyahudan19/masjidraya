@extends('admin._page.master')
@section('title','Detail Artikel')
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
                            <li class="breadcrumb-item"><a href="#">Detail</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Detail Artikel</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Detail Artikel Masjid Raya An-Nur Polinema</h4>
                        <p class="text-muted mb-4 font-13">Berikut detail Artikel Masjid Raya An-Nur Polinema, Silahkan lakukan perubahan jika ada kesalahan atau tambahan.</p>

                        <div class="button-items">
                            <a href="/admin/artikel" type="button" class="btn btn-gradient-info waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i>Kembali</a>
                            <button type="button" class="btn btn-gradient-warning waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-Artikel-modal-lg"><i class="mdi mdi-settings mr-2"></i>Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Judul Artikel</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{$data_artikel->nama_artikel}}" id="example-text-input" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Konten</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="area" readonly>{{$data_artikel->konten_artikel}}</textarea>
                                    </div>
                                </div>   
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Penulis</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{$data_artikel->penulis_artikel}}" id="example-search-input" disabled>
                                    </div>
                                </div>   
                                <div class="form-group row">
                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="datetime-local" value="{{$data_artikel->tanggal_artikel}}" id="example-datetime-local-input" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <div class="">
                                            @if($data_artikel->thumbnail_artikel == null)
                                                <input class="form-control" type="text" value="Thumbnail Tidak Tersedia !" id="example-text-input" disabled>
                                            @else
                                                <img src="{{asset('images/artikel/'.$data_artikel->thumbnail_artikel)}}" class="img-fluid" alt="Responsive image" >
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-xl-6">                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <div class="">
                                            <img src="{{asset('template/admin/assets/images/small/img-2.jpg')}}" class="img-fluid" alt="Responsive image" >
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>                                            
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

</div>
 <!--  Modal Update Artikel -->
 <div class="modal fade bs-Artikel-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Update Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <form class="" action="/admin/artikel/update" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <input class="form-control" type="hidden" name="id_artikel" id="id_artikel" value="{{$data_artikel->id_artikel}}">

                                                <label for="example-text-input" class="col-sm-2 col-form-label">Judul Artikel</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="{{$data_artikel->nama_artikel}}" name="nama_artikel" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Konten</label>
                                                <div class="col-sm-10">
                                                    <textarea id="elm1" name="konten_artikel" required>{{$data_artikel->konten_artikel}}</textarea>
                                                </div>
                                            </div>   
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Penulis</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="{{$data_artikel->penulis_artikel}}" name="penulis_artikel" required >
                                                </div>
                                            </div>   
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Tanggal</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="datetime-local" value="{{$data_artikel->tanggal_artikel}}" name="tanggal_artikel" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Thumbnail</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="thumbnail_artikel" id="thumbnail_artikel" class="dropify" required/>  
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
                                    {{-- <div class="col-xl-6">                                
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar</label>
                                            <div class="col-sm-10">
                                                <div class="">
                                                    <img src="{{asset('template/admin/assets/images/small/img-2.jpg')}}" class="img-fluid" alt="Responsive image" >
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>                                            
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop