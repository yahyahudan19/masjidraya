@extends('admin._page.master')
@section('title','Detail Gallery')
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
                            <li class="breadcrumb-item"><a href="#">Detail</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Detail Gallery</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Detail Gallery Masjid Raya An-Nur Polinema</h4>
                        <p class="text-muted mb-4 font-13">Berikut detail Gallery Masjid Raya An-Nur Polinema, Silahkan lakukan perubahan jika ada kesalahan atau tambahan.</p>

                        <div class="button-items">
                            <a href="/admin/gallery" type="button" class="btn btn-gradient-info waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i>Kembali</a>
                            <button type="button" class="btn btn-gradient-warning waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-Gallery-modal-lg"><i class="mdi mdi-settings mr-2"></i>Update</button>
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
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="{{$data_gallery->title_gallery}}" id="example-text-input" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Pemateri</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="{{$data_gallery->pemateri_gallery}}" id="example-text-input" readonly>
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">tag</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="{{$data_gallery->tag_gallery}}" id="example-search-input" readonly>
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="datetime-local" value="{{$data_gallery->tanggal_gallery}}" id="example-datetime-local-input"readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">                                
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                            <div class="">
                                                <img src="{{asset('images/gallery/'.$data_gallery->gambar_gallery)}}" class="img-fluid" alt="Responsive image" height="350px" width="350px">
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
 <!--  Modal Update Gallery -->
 <div class="modal fade bs-Gallery-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Update Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body"> 
                                <div class="row">
                                    <div class="col-xl-12">
                                        <form class="" action="/admin/gallery/update" method="POST" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <input class="form-control" type="hidden" value="{{$data_gallery->id_gallery}}" id="example-text-input" name="id_gallery" required>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="{{$data_gallery->title_gallery}}" id="example-text-input" name="title_gallery" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Pemateri</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="{{$data_gallery->pemateri_gallery}}" id="example-text-input" name="pemateri_gallery" required>
                                                </div>
                                            </div>   
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">tag</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="{{$data_gallery->tag_gallery}}" id="example-search-input" name="tag_gallery" required>
                                                </div>
                                            </div>   
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Tanggal</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="datetime-local" value="{{$data_gallery->tanggal_gallery}}" id="example-datetime-local-input" name="tanggal_gallery" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Gambar</label>
                                                <div class="col-sm-10">
                                                    <input type="file" id="input-file-now" class="dropify" name="gambar_gallery"/>  
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