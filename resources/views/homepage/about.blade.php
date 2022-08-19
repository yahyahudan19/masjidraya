@extends('homepage._page.master')
@section('title','About')
@section('banner')
<section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title" style="font-family: Montserrat">Tentang Kami <br> Masjid Raya Annur Polinema</h4>
                <ul class="lab-ul">
                    <li><a href="/home">Home</a></li>
                    <li><a class="#">Tentang</a></li>
                </ul>
            </div>
        </div>
    </section>
@stop
@section('content')
<!-- About section start here -->
    <section class="about-section padding-tb shape-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-content">
                                <div class="header-title text-start m-0">
                                    <h5>Tentang Kami</h5>
                                    <h2 class="mb-0">Ketakmiran Masjid Raya Annur Polinema</h2>
                                </div>
                                <br>
                                {{-- <h5 class="my-4">Our Promise To Uphold The Trust Placed.</h5> --}}
                                <p>Masjid Raya Annur Polinema diresmikan pada tanggal 18 Maret 2018 oleh bapak menteri kemendikbud, 
                                    dan merupakan salah satu masjid kampus yang besar dan nyaman, sehingga jamaah yang mengunjungi masjid ini 
                                    akan merasa nyaman dalam beribadah. ea
                                    </p>
                                <a href="#" class="lab-btn mt-4">Kunjungi Kami <i class="icofont-heart-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <div class="img-grp">
                                    <div class="about-circle-wrapper">
                                        <div class="about-circle-2"></div>
                                        <div class="about-circle"></div>
                                    </div>
                                    <div class="about-fg-img">
                                        <img src="{{asset('template/home/assets/images/logoputih1.png')}}" alt="about-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end here -->

    <!-- Feature Section Start Here -->
    <section class="feature-section bg-ash padding-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item text-xs-center">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('template/home/assets/images/feature/01.png')}}" alt="feature-image">
                            </div>
                            <div class="lab-content">
                                <h5>Al-Quran Study Club</h5>
                                <p>bertujuan untuk menunjang mahasiswa/masyarakat umum
                                    yang akan belajar tentang Al-Quran
                                </p>
                                <a href="#" class="text-btn">Sponsor Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('template/home/assets/images/feature/02.png')}}" alt="feature-image">
                            </div>
                            <div class="lab-content">
                                <h5>Kultum Dhuhur</h5>
                                <p>Kultum Dhuhur ini rutin kami adakan setiap hari Senin-Kamis 
                                    setelah Sholat Dhuhur Berjama’ah.
                                </p>
                                <a href="#" class="text-btn">Join Now!</a>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('template/home/assets/images/feature/04.png')}}" alt="feature-image">
                            </div>
                            <div class="lab-content">
                                <h5>Majlis Sholawat </h5>
                                <h5>Polinema</h5>
                                <p>di selenggarakan pada setiap hari Kamis Awal Bulan Ba'da Sholat Maghrib  diisi dengan grup albanjari 
                                    dari Polinema Syifaul Qolbi
                                </p>
                                <a href="#" class="text-btn">Join Us!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End Here -->

    <!-- Team section start here -->
    <section class="team-section padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>Kepengurusan </h5>
                        <h2>Ketakmiran Masjid Raya Annur Politeknik Negeri Malang</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row justify-content-center pb-10">
                        <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                            <div class="card text-center border-none team-item-1">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{asset('template/home/assets/images/team/01.jpg')}}" class="card-img-top" alt="product">
                                    </div>
                                    <div class="lab-content">
                                        <a href="#">
                                            <h6 class="card-title mb-0">Ust. Drs. H. M. Muwidha., M.Si</h6>
                                        </a>
                                        <p class="card-text mb-3">Ketua Ketakmiran </p>
                                        <div class="social-share">
                                            <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                            <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                            <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                            <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                            <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                            <div class="card text-center border-none team-item-1">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{asset('template/home/assets/images/team/02.jpg')}}" class="card-img-top" alt="product">
                                    </div>
                                    <div class="lab-content">
                                        <a href="#">
                                            <h6 class="card-title mb-0">Ust. Syamsul Arifin</h6>
                                        </a>
                                        <p class="card-text mb-3">Sekretaris Ketakmiran</p>
                                        <div class="social-share">
                                            <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                            <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                            <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                            <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                            <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                            <div class="card text-center border-none team-item-1">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{asset('template/home/assets/images/team/03.jpg')}}" class="card-img-top" alt="product">
                                    </div>
                                    <div class="lab-content">
                                        <a href="#">
                                            <h6 class="card-title mb-0">Yahya Hudan</h6>
                                        </a>
                                        <p class="card-text mb-3">Multimedia Team & Web Developer</p>
                                        <div class="social-share">
                                            <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                            <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                            <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                            <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                            <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team section end here -->
@stop