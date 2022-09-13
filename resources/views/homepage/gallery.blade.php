@extends('homepage._page.master')
@section('title','Gallery')
@section('banner')
<section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title" style="font-family: Montserrat">Galery Kegiatan <br> Masjid Raya Annur Polinema</h4>
                <ul class="lab-ul">
                    <li><a href="/home">Home</a></li>
                    <li><a href="#">Galery</a></li>
                </ul>
            </div>
        </div>
    </section>
@stop
@section('content')
<div class="gallery-section padding-tb">
        <div class="container">
            <ul class="filter-button-group lab-ul d-flex justify-content-center mb-4">
                <li class="filter-btn is-checked" data-filter="*">Show All <span class="filter-item-num">{{$total}}</span></li>
                @foreach ($gallery as $gallery)
                    {{-- <li class="filter-btn" data-filter="{{$gallery->tag_gallery}}">{{$gallery->title_gallery}}<span class="filter-item-num">03</span></li> --}}
                    <li class="filter-btn" data-filter="{{$gallery->tag_gallery}}">{{$gallery->title_gallery}}<span class="filter-item-num">M</span></li>
                @endforeach                     

            </ul>
            <div class="grid pb-15">
                <div class="grid-item {{$gallery->tag_gallery}}">
                    @foreach ($view as $gallery)
                        <div class="grid-inner">
                            <div class="grid-thumb">
                                <img src="{{asset('images/gallery/'.$gallery->gambar_gallery)}}" class="gallery-img">
                            </div>
                            <div class="grid-content p-2">
                                <a href="{{asset('images/gallery/'.$gallery->gambar_gallery)}}" data-rel="lightcase"><i class="icofont-expand"></i></a>
                                <h5>{{$gallery->title_gallery}}</h5>
                                <p>
                                    <?php
                                            $date = Date('d M Y', strtotime($gallery->tanggal_gallery));
                                            ?>
                                    {{$date}}    
                                </p>
                            </div>
                        </div>
                    @endforeach                     
                </div>
            </div>
        </div>
    </div>
@stop