@extends('homepage._page.master')
@section('title','Kegiatan')
@section('banner')
<section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title" style="font-family: Montserrat">Kegiatan <br>Masjid Raya An-Nur Polinema</h4>
                <ul class="lab-ul">
                    <li><a href="/">Home</a></li>
                    <li><a class="#">Kegiatan kami</a></li>
                </ul>
            </div>
        </div>
    </section>
@stop
@section('content')
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
                                    <h3><a href="/kegiatan/{{$kegiatan_utama->id_kegiatan}}">{{$kegiatan_utama->nama_kegiatan}} </a> </h3>
                                    <div class="date-count-wrapper">
                                        <ul class="lab-ul event-date">
                                            <li><i class="icofont-calendar"></i> <span>{{$kegiatan_utama->tanggal_kegiatan}}</span></li>
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
@stop