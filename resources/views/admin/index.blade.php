@extends('admin._page.master')
@section('title','Dashboard')
@section('content')
<div class="page-content">
  <div class="main-wrapper">
    <div class="row">
      <div class="col-xl-12">
          <div class="profile-cover"></div>
          <div class="profile-header">
              <div class="profile-img">
                  <img src="{{asset('template/admin/theme/assets/images/logoraya.png')}}" alt="">
              </div>
              <div class="profile-name">
                  <h3>Selamat Datang , <b>Admin !</b></h3>
              </div>
              {{-- <div class="profile-header-menu">
                  <ul class="list-unstyled">
                      <li><a href="#" class="active">Feed</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Friends</a></li>
                      <li><a href="#">Photos</a></li>
                      <li><a href="#">Videos</a></li>
                      <li><a href="#">Music</a></li>
                  </ul>
              </div> --}}
          </div>
      </div>   
  <div class="row">
    <div class="col-sm-12 col-md-3">
      <div class="card stat-widget">
          <div class="card-body">
              <h5 class="card-title">Artikel</h5>
              <div class="transactions-list">
                <div class="tr-item">
                  <div class="tr-company-name">
                    <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                      <i data-feather="book-open"></i>
                    </div>
                    <div class="tr-text">
                      <a href="#"><h4>15</h4></a>
                      <p>Jumlah Artikel</p>
                    </div>
                  </div>
                </div>
              </div>                       
          </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-3">
      <div class="card stat-widget">
          <div class="card-body">
              <h5 class="card-title">Kegiatan</h5>
              <div class="transactions-list">
                <div class="tr-item">
                  <div class="tr-company-name">
                    <div class="tr-icon tr-card-icon tr-card-bg-success text-success">
                      <i data-feather="trending-up"></i>
                    </div>
                    <div class="tr-text">
                      <h4>6</h4>
                      <p>Jumlah Kegiatan</p>
                    </div>
                  </div>
                </div>
              </div>                       
          </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-3">
      <div class="card stat-widget">
          <div class="card-body">
              <h5 class="card-title">Galery</h5>
              <div class="transactions-list">
                <div class="tr-item">
                  <div class="tr-company-name">
                    <div class="tr-icon tr-card-icon tr-card-bg-danger text-danger">
                      <i data-feather="camera"></i>
                    </div>
                    <div class="tr-text">
                      <h4>20</h4>
                      <p>Jumlah Galery</p>
                    </div>
                  </div>                  
                </div>
              </div>                       
          </div>
      </div>
    </div>
    {{-- <div class="col-sm-12 col-md-4">
      <div class="card stat-widget">
          <div class="card-body">
            <h5 class="card-title">Contact Info</h5>
            <ul class="list-unstyled profile-about-list">
                <li><i class="far fa-envelope m-r-xxs"></i><span>rayaannurpolinema@gmail.com</span></li>
                <li><i class="far fa-compass m-r-xxs"></i><span>Masjid Raya An-Nur Polinema</span></li>
                <li><i class="far fa-address-book m-r-xxs"></i><span>+62 (812) 5922 4380</span></li>
            </ul>                      
          </div>
      </div>
    </div> --}}
  </div>
  </div>
</div>
@stop