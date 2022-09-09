@extends('admin._page.master')
@section('title','Dashboard')
@section('content')
<div class="page-content-wrapper ">
              
  <div class="container-fluid">

      <div class="row">
          <div class="col-sm-12">
              <div class="page-title-box">
                  <div class="btn-group float-right">
                      <ol class="breadcrumb hide-phone p-0 m-0">
                          <li class="breadcrumb-item"><a href="#">Admin</a></li>
                          <li class="breadcrumb-item active">Dashboard</li>
                      </ol>
                  </div>
                  <h4 class="page-title">Dashboard</h4>
              </div>
          </div>
      </div>
      <!-- end page title end breadcrumb -->
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
            <h2>Selamat Datang, {{auth()->user()->name}}</h2>
            </div>                                
        </div> <!-- end col -->
    </div>
    @if(auth()->user()->role == 'Admin')
      <div class="row">
          <div class="col-lg-12">
              <div class="row">
                  <div class="col-lg-3">
                      <div class="card">
                          <div class="card-body">
                              <div class="icon-contain">
                                  <div class="row">
                                      <div class="col-2 align-self-center">
                                          <i class="fas fa-tasks text-gradient-success"></i>
                                      </div>
                                      <div class="col-10 text-right">
                                          <h5 class="mt-0 mb-1">190</h5>
                                          <p class="mb-0 font-12 text-muted">Kegiatan</p>   
                                      </div>
                                  </div>                                                        
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="card">
                          <div class="card-body justify-content-center">
                              <div class="icon-contain">
                                  <div class="row">
                                      <div class="col-2 align-self-center">
                                          <i class="fas fa-book text-gradient-danger"></i>
                                      </div>
                                      <div class="col-10 text-right">
                                          <h5 class="mt-0 mb-1">62</h5>
                                          <p class="mb-0 font-12 text-muted">Artikel</p>
                                      </div>
                                  </div>                                                        
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-2 align-self-center">
                                        <i class="fas fa-camera text-gradient-primary"></i>
                                    </div>
                                    <div class="col-10 text-right">
                                        <h5 class="mt-0 mb-1">23</h5>
                                        <p class="mb-0 font-12 text-muted">Gallery</p>    
                                    </div>
                                </div>                                                        
                            </div>                                                    
                        </div>
                    </div>
                </div>    
                                
                  <div class="col-lg-3">
                      <div class="card">
                          <div class="card-body">
                              <div class="icon-contain">
                                  <div class="row">
                                      <div class="col-2 align-self-center">
                                          <i class="fas fa-users text-gradient-warning"></i>
                                      </div>
                                      <div class="col-10 text-right">
                                          <h5 class="mt-0 mb-1">14</h5>
                                          <p class="mb-0 font-12 text-muted">User</p>    
                                      </div>
                                  </div>                                                        
                              </div>                                                    
                          </div>
                      </div>
                  </div>
                                           
              </div>                                    
          </div>                            
      </div>
    @else
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body justify-content-center">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-2 align-self-center">
                                        <i class="fas fa-book text-gradient-danger"></i>
                                    </div>
                                    <div class="col-10 text-right">
                                        <h5 class="mt-0 mb-1">5</h5>
                                        <p class="mb-0 font-12 text-muted">Total Artikel</p>
                                    </div>
                                </div>                                                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body justify-content-center">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-2 align-self-center">
                                        <i class="fas fa-book text-gradient-success"></i>
                                    </div>
                                    <div class="col-10 text-right">
                                        <h5 class="mt-0 mb-1">2</h5>
                                        <p class="mb-0 font-12 text-muted">Artikel Terverifikasi</p>
                                    </div>
                                </div>                                                        
                            </div>
                        </div>
                    </div>
                </div>
                                                                     
            </div>                                    
        </div>                            
    </div>
    @endif
      <!-- end row -->
      
  </div><!-- container -->

</div> 
@stop