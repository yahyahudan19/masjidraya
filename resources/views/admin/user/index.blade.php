@extends('admin._page.master')
@section('title','Manajemen User')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manajemen User</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">User Masjid Raya An-Nur Polinema</h4>
                        <p class="text-muted mb-4 font-13">Untuk menambahkan User Pilih Tombol <b>Tambah</b> untuk Import data Pilih tombol <b>Import</b>.</p>

                        <div class="button-items">
                            {{-- <a type="button" href="/admin/user/add" class="btn btn-primary waves-effect waves-light" ><i class="mdi mdi-plus-box mr-2"></i>Tambah</a> --}}
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-kegiatan-modal-lg"><i class="mdi mdi-plus-box mr-2"></i>Tambah</button>

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
                                            <i class="fas fa-user-friends text-gradient-danger"></i>
                                        </div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">10</h5>
                                            <p class="mb-0 font-12 text-muted">User</p>   
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
                                            <i class="fas fa-user-shield text-gradient-warning"></i>
                                        </div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">5</h5>
                                            <p class="mb-0 font-12 text-muted">Admin</p>
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
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Verifikasi</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>

                            @php $no = 1; @endphp
                            @foreach ($data_user as $user)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>                                
                                <td>{{$user->role}}</td>                              
                                <td>
                                    @if($user->status == 'Aktif')
                                        <span class="badge badge-success"><i class="mdi mdi-check-circle"></i>Terverifikasi</span>
                                    @else
                                        <span class="badge badge-warning"><i class="mdi mdi-close-circle"></i>Belum Terverifikasi</span>
                                    @endif
                                </td>
                                <td>
                                    <a type="button" href="/admin/user/{{$user->id}}" class="btn btn-warning waves-effect waves-light btn-sm"><i class="mdi mdi-details mr-2"></i>Detail</a>
                                    @if($user->role == 'User')
                                        <a type="button" href="/admin/user/delete/{{$user->id}}" class="btn btn-danger waves-effect waves-light btn-sm"><i class="mdi mdi-delete mr-2"></i>Hapus</a>
                                        @endif
                                    @if($user->status == 'Tidak Aktif')
                                        <a type="button" href="/admin/user/verif/{{$user->id}}" class="btn btn-success waves-effect waves-light btn-sm"><i class="mdi mdi-check-circle mr-2"></i>Verfikasi</a>
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
<!--  Modal User -->
<div class="modal fade bs-kegiatan-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body"> 
                                <div class="row">
                                    <div class="col-xl-12">
                                        <form class="" action="/admin/user/add" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="Username" data-parsley-minlength="6" name="name" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" parsley-type="email" type="email" placeholder="email@email.com" name="email" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" data-parsley-minlength="6" placeholder="Password" name="password" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Role</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="role">
                                                        <option>Penulis</option>
                                                        <option>Admin</option>
                                                    </select>
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