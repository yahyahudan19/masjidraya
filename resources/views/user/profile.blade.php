@extends('admin._page.master')
@section('title','Profile')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#">Profile</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Profile User</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Profile {{$data_user->name}} </h4>
                        <p class="text-muted mb-4 font-13">Berikut Profile {{$data_user->name}} Masjid Raya An-Nur Polinema, Silahkan lakukan perubahan jika ada kesalahan atau tambahan.</p>

                        <div class="button-items">
                            {{-- <button type="button" class="btn btn-gradient-warning waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-User-modal-lg"><i class="mdi mdi-settings mr-2"></i>Update</button> --}}
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
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="{{$data_user->name}}" name="username" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" parsley-type="email" placeholder="{{$data_user->email}}" name="email" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="{{$data_user->role}}" name="role" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="{{$data_user->status}}" name="status" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Foto Profile</label>
                                    <div class="col-sm-10">
                                        <div class="">
                                            <img src="{{asset('images/profile/'.$data_user->photo)}}" class="img-fluid" alt="Responsive image" height="200px" width="200px">
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
 <!--  Modal Update User -->
 <div class="modal fade bs-User-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Update User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body"> 
                                <form action="/admin/user/update" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input class="form-control" type="hidden" name="id" id="id" value="{{$data_user->id}}">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" data-parsley-minlength="6" value="{{$data_user->name}}" name="name" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" parsley-type="email" value="{{$data_user->email}}" name="email" required disabled>
                                                </div>
                                            </div>
                                            {{-- <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" data-parsley-minlength="6" type="password" name="password" required>
                                                </div>
                                            </div> --}}
                                            
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Foto Profile</label>
                                                <div class="col-sm-10">
                                                    <input type="file" id="photo" name="photo" class="dropify"/>  
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
                                    </div>                                            
                                </form>                                    
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop