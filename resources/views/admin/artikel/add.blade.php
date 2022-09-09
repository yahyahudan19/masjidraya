@extends('admin._page.master')
@section('title','Tambah Artikel')
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
                            <li class="breadcrumb-item"><a href="#">Tambah</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Tambah Artikel</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Tambah Artikel Masjid Raya An-Nur Polinema</h4>
                        <p class="text-muted mb-4 font-13">Berikut Form Artikel Masjid Raya An-Nur Polinema, Silahkan lakukan penambahan data pada Artikel.</p>

                        <div class="button-items">
                            <a href="/admin/artikel" type="button" class="btn btn-gradient-info waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i>Kembali</a>
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
                                        <input class="form-control" type="text" value="Kultum Rutin" id="example-text-input" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Konten</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="area"></textarea>
                                    </div>
                                </div>   
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Author</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="Ust. Syamsul Arifin" id="example-search-input" >
                                    </div>
                                </div>   
                                <div class="form-group row">
                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="datetime-local" value="2022-09-03T13:45:00" id="example-datetime-local-input" >
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

@stop
