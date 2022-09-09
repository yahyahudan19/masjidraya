@extends('admin._page.master')
@section('title','Detail Kegiatan')
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
                            <li class="breadcrumb-item"><a href="#">Detail</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Detail Kegiatan</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Detail Kegiatan Masjid Raya An-Nur Polinema</h4>
                        <p class="text-muted mb-4 font-13">Berikut detail kegiatan Masjid Raya An-Nur Polinema, Silahkan lakukan perubahan jika ada kesalahan atau tambahan.</p>

                        <div class="button-items">
                            <a href="/admin/kegiatan" type="button" class="btn btn-gradient-info waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i>Kembali</a>
                            <button type="button" class="btn btn-gradient-warning waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-kegiatan-modal-lg"><i class="mdi mdi-settings mr-2"></i>Update</button>
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
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Kegiatan</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="Kultum Rutin" id="example-text-input" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Pemateri</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="Ust. Syamsul Arifin" id="example-search-input" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-inputt" class="col-sm-2 col-form-label">Lokasi</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="Masjid Raya An-Nur Polinema" id="example-email-input" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-url-input" class="col-sm-2 col-form-label">Link</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="url" value="https://youtube.com" id="example-url-input" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="datetime-local" value="2022-09-03T13:45:00" id="example-datetime-local-input" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <div class="">
                                            <img src="{{asset('template/admin/assets/images/small/img-2.jpg')}}" class="img-fluid" alt="Responsive image" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                            
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

</div>
 <!--  Modal Update Kegiatan -->
 <div class="modal fade bs-kegiatan-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Update Kegiatan</h5>
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
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Kegiatan</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="Kajian Rutin" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Pemateri</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="Ust. Syamsul Arifin" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Lokasi</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="search" value="Masjid Raya An-Nur Polinema " id="example-search-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label">Link Live Streaming</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="url" value="https://youtube.com" id="example-url-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="datetime-local" value="2022-08-21T13:45:00" id="example-datetime-local-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Thumbnail</label>
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
@stop