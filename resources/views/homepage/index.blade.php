@extends('homepage._page.master')
@section('title','Homepage')
@section('banner')
    <section class="banner-section">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-md-row">
                {{-- <div class="col-md-6">
                    <div class="banner-item">
                        <div class="banner-inner">
                            <div class="banner-thumb">
                                <img src="{{asset('template/home/assets/images/banner/bg_01.png')}}" alt="Banner-image">
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-12">
                    <div class="banner-item">
                        <div class="banner-inner">
                            <div class="banner-content align-center">
                                <center>
                                    <h1 style="color: white"><span class="">Masjid Raya Annur<br class="d-none d-lg-block">
                                             </span>Politeknik Negeri Malang</h1>
                                    <p style="color:white">Tempat Peribadatan yang sangat menyejukkan hati dan jiwa</p>
                                    <a href="#" class="lab-btn mt-3">Visit Us <i class="icofont-heart-alt"></i></a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <h2 class="mb-0">Masjid Raya Annur Polinema</h2>
                                </div>
                                {{-- <h5 class="my-4">Our Promise To Uphold The Trust Placed.</h5> --}}<br>
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

    <!-- Service section start here -->
    <section class="service-section padding-tb padding-b shape-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>Artikel Keislaman</h5>
                        <h2>Artikel Masjid Raya Annur Polinema</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row g-0 justify-content-center service-wrapper">
                        @foreach ($artikel as $artikel)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="lab-item service-item">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{asset('images/artikel/'.$artikel->thumbnail_artikel)}}" alt="Artikel-image">
                                    </div>
                                    <div class="lab-content pattern-2">
                                        <div class="lab-content-wrapper">
                                            <div class="content-top">
                                                <div class="service-top-thumb"><img src="{{asset('template/home/assets/images/service/03.png')}}"
                                                        alt="service-icon"></div>
                                                <div class="service-top-content">
                                                    <span>{{$artikel->penulis_artikel}}</span>
                                                    <h5><a href="#"> {{$artikel->nama_artikel}}</a></h5>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <p>
                                                    <?php
                                                        $text = $artikel->konten_artikel;
                                                        $sort_text = substr($text,0,100);

                                                        echo $sort_text," ...";
                                                    ?>
                                                </p>
                                                <a href="/artikel/{{$artikel->id_artikel}}" class="text-btn">Read More +</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-lg-4 col-md-6 col-12">
                            <div class="lab-item service-item">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{asset('template/home/assets/images/service/01.png')}}" alt="Service-image">
                                    </div>
                                    <div class="lab-content pattern-2">
                                        <div class="lab-content-wrapper">
                                            <div class="content-top">
                                                <div class="service-top-thumb"><img src="{{asset('template/home/assets/images/service/03.png')}}"
                                                        alt="service-icon"></div>
                                                <div class="service-top-content">
                                                    <span>Kegiatan Rutin</span>
                                                    <h5><a href="#">Ceramah Dhuhur</a> </h5>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <p>Ceramah dhuhur inshaallah akan dilaksanakan saat bulan ramadhan 1443H.</p>
                                                <a href="#" class="text-btn">Read More +</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="lab-item service-item">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{asset('template/home/assets/images/service/01.png')}}" alt="Service-image">
                                    </div>
                                    <div class="lab-content pattern-2">
                                        <div class="lab-content-wrapper">
                                            <div class="content-top">
                                                <div class="service-top-thumb"><img src="{{asset('template/home/assets/images/service/03.png')}}"
                                                        alt="service-icon"></div>
                                                <div class="service-top-content">
                                                    <span>#RamadanBerkah</span>
                                                    <h5><a href="#">Hukum Sedekah dan Zakat</a> </h5>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <p>Artikel ini memberikan penjelasan kepada kita hukum dari Sedekah dan Zakat</p>
                                                <a href="#" class="text-btn">Read More +</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service section end here -->

    <!-- Faith section start here -->
    <section class="faith-section padding-tb shape-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>5 Rukun Islam</h5>
                        <h2>Pilar dari Agama Islam</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faith-content">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="shahadah" role="tabpanel"
                                aria-labelledby="sahadah-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{asset('template/home/assets/images/faith/01.png')}}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Syahadat <span>(Kesaksian)</span> </h4>
                                            <p>Mengucapkan dua kalimat syahadat yaitu  أشهد أن لااله الاالله واشهد ان محمدا رسول الله 
                                                Aku ber-i’tikad bahwa sesungguhnya tiada Tuhan melainkan Allah, 
                                                dan aku ber-I’tikad bahwa Nabi Muhammad itu utusan Allah.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prayer" role="tabpanel" aria-labelledby="salah-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{asset('template/home/assets/images/faith/02.png')}}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Sholat <span>(Ibadah)</span> </h4>
                                            <p>Mendirikan sembayang (shalat) lima waktu. perlu diingat bahwasannya sembayang (shalat) 
                                                lima waktu inilah tanda keislaman yang kelihatan tiap-tiap hari, dan inilah yang kelihatan 
                                                membedakan antara orang Islam dengan lain Islam</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ramadan" role="tabpanel" aria-labelledby="sawm-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{asset('template/home/assets/images/faith/03.png')}}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Puasa <span>(Shoum)</span> </h4>
                                            <p>Melaksanakan Puasa Ramadhan setiap tahunnya.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="jakat" role="tabpanel" aria-labelledby="zakat-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{asset('template/home/assets/images/faith/04.png')}}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Zakat <span>(Zakt)</span> </h4>
                                            <p>Jangan lupa bahwa zakat itu ada ada beberapa bentuk; zakat fitrah, zakat tanaman (azzoeroe’), 
                                                zakat emas dan perak, zakat hewan ternak (mawasyi), Zakat dagangan (tijaroh) dan lain sebagainya </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hajj" role="tabpanel" aria-labelledby="hajj-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{asset('template/home/assets/images/faith/05.png')}}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Haji <span>(bagi yang mampu)</span> </h4>
                                            <p>pabila kuasa dan cukupnya bekal dan amanya perjalanan dan sempat waktunya. 
                                                Haji yang wajib hanya sekali dalam seumur hidup.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-pills mb-3 align-items-center justify-content-center" id="pills-tab"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="sahadah-tab" data-bs-toggle="pill" href="#shahadah"
                                    role="tab" aria-controls="sahadah-tab" aria-selected="true">
                                    <img src="{{asset('template/home/assets/images/faith/faith-icons/01.png')}}" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="salah-tab" data-bs-toggle="pill" href="#prayer" role="tab"
                                    aria-controls="salah-tab" aria-selected="false">
                                    <img src="{{asset('template/home/assets/images/faith/faith-icons/02.png')}}" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="sawm-tab" data-bs-toggle="pill" href="#ramadan" role="tab"
                                    aria-controls="sawm-tab" aria-selected="false">
                                    <img src="{{asset('template/home/assets/images/faith/faith-icons/03.png')}}" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="zakat-tab" data-bs-toggle="pill" href="#jakat" role="tab"
                                    aria-controls="zakat-tab" aria-selected="false">
                                    <img src="{{asset('template/home/assets/images/faith/faith-icons/04.png')}}" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="hajj-tab" data-bs-toggle="pill" href="#hajj" role="tab"
                                    aria-controls="hajj-tab" aria-selected="false">
                                    <img src="{{asset('template/home/assets/images/faith/faith-icons/05.png')}}" alt="faith-icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faith section end here -->

    <!-- Qoute Section start Here -->
    <div class="qoute-section padding-tb">
        <div class="qoute-section-wrapper">
            <div class="qoute-overlay"></div>
            <div class="container">
                <div class="qoute-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="lab-item qoute-item">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <span style="color:white">Hadits & Quotes</span>
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <div class="lab-content">
                                        <blockquote class="blockquote">
                                            <p>Sesungguhnya yang memakmurkan masjid Allah hanyalah orang-orang yang beriman kepada Allah dan hari kemudian, 
                                                serta (tetap) melaksanakan sholat, menunaikan zakat, dan tidak takut (kepada apa pun) kecuali kepada Allah. 
                                                Maka mudah-mudahan mereka termasuk orang-orang yang mendapat petunjuk."</span> </p>
                                            <footer class="blockquote-footer bg-transparent">Imam Ibnul Jauzi, Kitab Zaadul masiir” 3/408
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qoute Section end Here -->

    <!-- Events Section start here -->
    <section class="event-section padding-tb padding-b shape-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>Kegiatan dan Rutinan</h5>
                        <h2>Masjid Raya Annur Polinema</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="event-content">
                        <div class="event-top tri-shape-2 pattern-2">
                            <div class="event-top-thumb">
                                <img src="{{asset('images/'.$kegiatan_utama->thumbnail_kegiatan)}}" alt="Upcoming-event">
                            </div>
                            <div class="event-top-content">
                                <div class="event-top-content-wrapper">
                                    <h3><a href="/kegiatan/{{$kegiatan_utama->id_kegiatan}}">{{$kegiatan_utama->nama_kegiatan}}</a> </h3>
                                    <div class="date-count-wrapper">
                                        <ul class="lab-ul event-date">
                                            <li><i class="icofont-calendar"></i> 
                                                <span>
                                                    {{ Carbon\Carbon::parse($kegiatan_utama->tanggal_kegiatan)->isoFormat('dddd, D MMMM Y HH:MM') }}
                                                </span>
                                            </li>
                                            <li><i class="icofont-location-pin"></i> <span>{{$kegiatan_utama->lokasi_kegiatan}}</span></li>
                                        </ul>
                                        <ul class="lab-ul event-count" data-date="{{$kegiatan_utama->tanggal_kegiatan}}">
                                            <li>
                                                <span class="days">34</span>
                                                <div class="count-text">Days</div>
                                            </li>
                                            <li>
                                                <span class="hours">09</span>
                                                <div class="count-text">Hours</div>
                                            </li>
                                            <li>
                                                <span class="minutes">32</span>
                                                <div class="count-text">Muni</div>
                                            </li>
                                            <li>
                                                <span class="seconds">32</span>
                                                <div class="count-text">Seco</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-bottom">
                            <div class="row justify-content-center">
                                @foreach ($kegiatan as $kegiatan)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="event-item lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <img src="{{asset('images/'.$kegiatan->thumbnail_kegiatan)}}" alt="event-image">
                                            </div>
                                            <div class="lab-content">
                                                <h5><a href="/kegiatan/{{$kegiatan->id_kegiatan}}">{{$kegiatan->nama_kegiatan}}</a> </h5>
                                                <ul class="lab-ul event-date">
                                                    <li><i class="icofont-calendar"></i> 
                                                        <span>
                                                            {{ Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->isoFormat('dddd, D MMMM Y HH:MM') }}
                                                        </span>
                                                    </li>
                                                    <li><i class="icofont-location-pin"></i> <span>{{$kegiatan->lokasi_kegiatan}}</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>      
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Events Section end here -->
@stop