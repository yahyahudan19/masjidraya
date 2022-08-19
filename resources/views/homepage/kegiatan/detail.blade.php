@extends('homepage._page.master')
@section('banner')
<section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Kultum Rutin Dhuhur</h4>
                <ul class="lab-ul">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/kegiatan">Kegiatan</a></li>
                    <li><a class="#">Kultum Rutin Dhuhur</a></li>
                </ul>
            </div>
        </div>
    </section>
@stop
@section('content')
<div class="event-single-section padding-tb aside-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center pb-10">
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="event-single-wrapper">
                            <div class="event-top event-top-2">
                                <div class="event-top-thumb">
                                    <img src="{{asset('template/home/assets/images/event/event-single/01.jpg')}}" alt="Upcoming-event">
                                </div>
                                <div class="event-top-content">
                                    <div class="event-top-content-wrapper mb-30">
                                        <ul class="lab-ul event-date mb-4 mb-md-0">
                                            <li><i class="icofont-calendar"></i> <span>24 Maret 2022</span></li>
                                            <li><i class="icofont-location-pin"></i> <span>Masjid Raya Annur Polinema</span></li>
                                        </ul>
                                        <ul class="lab-ul event-count" data-date="April 02, 2022 18:00:01">
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
                                    <p class="mb-30">Kegiatan Kultum Rutin Ba'da Dhuhur dilaksakanan Setelah Sholat Dhuhur yang diisi Oleh 
                                        dosen-dosen polinema sendiri.

                                    </p>
                                    <blockquote class="single-quote mb-30">
                                        <div class="quotes">
                                            "Gek Sering-sering nang masjid gaes ya, bantu-bantu masjid. inshaallah berkah
                                            apalagi mau ramadhan :)"
                                            <span>Ust. Syamsul Arifin</span>
                                        </div>
                                    </blockquote>                                  


                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.7541951278804!2d112.61608276954911!3d-7.948021227080562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc32a10655201d6b4!2sMasjid%20Raya%20An-Nur%20Politeknik%20Negeri%20Malang!5e0!3m2!1sen!2sid!4v1647918663648!5m2!1sen!2sid%22"
                                        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-12">
                        <aside class="lab-aside">
                            <div class="widget widget-event mt-5 mt-lg-0">
                                <div class="widget-header">
                                    <h5>Details Kegiatan</h5>
                                </div>
                                <ul class="lab-ul widget-wrapper">
                                    <li>
                                        <span><i class="icofont-ui-calendar"></i> Tanggal </span> <span>:
                                            02/01/2021</span>
                                    </li>
                                    <li>
                                        <span><i class="icofont-clock-time"></i> Waktu </span> <span>: 9:30
                                            AM</span>                                    
                                    <li>
                                        <span><i class="icofont-home"></i> Lokasi </span> <span>: Polinema
                                            </span>
                                    </li>                                  
                                    
                                </ul>
                            </div>
                            <div class="widget widget-program">
                                <div class="widget-header">
                                    <h5>Kegiatan Kami Lainnya</h5>
                                </div>
                                <div class="widget-wrapper">
                                    <div class="program-item mb-4 mt-5">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="#">
                                                    <img src="{{asset('template/home/assets/images/program/04.jpg')}}" alt="program-image">
                                                </a>
                                            </div>
                                            <div class="lab-content">
                                                <span>Kajian Rutin</span>
                                                <h5><a href="#">Nawak Hijrah Bersama Habib Muhammad Bin Anies Shahab</a> </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget widget-ad mb-5">
                                <div class="widget-header">
                                    <h5>Ad Banner Place</h5>
                                </div>
                                <div class="widget-wrapper mt-5">
                                    <a href="#"><img src="{{asset('template/home/assets/images/program/program-single/ad-banner.jpg')}}"
                                            alt="ad-banner"></a>
                                </div>
                            </div>                            
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop