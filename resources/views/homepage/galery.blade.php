@extends('homepage._page.master')
@section('banner')
<section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title" style="font-family: Montserrat">Galery Masjid Raya Annur Polinema</h4>
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
                <li class="filter-btn is-checked" data-filter="*">Show All <span class="filter-item-num">09</span></li>
                <li class="filter-btn" data-filter=".eid-ul-adha">Kultum Dhuhur<span class="filter-item-num">03</span>
                </li>
                <li class="filter-btn" data-filter=".eid-ul-fitr">Nawak Hijrah<span class="filter-item-num">05</span>
                </li>
                <li class="filter-btn" data-filter=".ramadan">Ramadhan<span class="filter-item-num">06</span></li>
                <li class="filter-btn" data-filter=".shab-e-barat">Kajian Muslimah <span class="filter-item-num">03</span>
                </li>
            </ul>
            <div class="grid pb-15">
                <div class="grid-item eid-ul-adha eid-ul-fitr">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="{{asset('template/home/assets/images/gallery/mason/01.jpg')}}" alt="gallery-img">
                        </div>
                        <div class="grid-content p-2">
                            <a href="{{asset('template/home/assets/images/gallery/mason/01.jpg')}}" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="{{asset('template/home/assets/images/gallery/mason/02.jpg')}}" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="{{asset('template/home/assets/images/gallery/mason/02.jpg')}}" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan shab-e-barat">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="{{asset('template/home/assets/images/gallery/mason/03.jpg')}}" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="{{asset('template/home/assets/images/gallery/mason/03.jpg')}}" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan eid-ul-fitr">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="{{asset('template/home/assets/images/gallery/mason/04.jpg')}}" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="{{asset('template/home/assets/images/gallery/mason/04.jpg')}}" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item shab-e-barat eid-ul-fitr">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="{{asset('template/home/assets/images/gallery/mason/05.jpg')}}" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="{{asset('template/home/assets/images/gallery/mason/05.jpg')}}" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item eid-ul-fitr eid-ul-adha">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="{{asset('template/home/assets/images/gallery/mason/06.jpg')}}" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="{{asset('template/home/assets/images/gallery/mason/06.jpg')}}" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan shab-e-barat">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="{{asset('template/home/assets/images/gallery/mason/09.jpg')}}" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="{{asset('template/home/assets/images/gallery/mason/09.jpg')}}" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan eid-ul-fitr">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="{{asset('template/home/assets/images/gallery/mason/08.jpg')}}" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="{{asset('template/home/assets/images/gallery/mason/08.jpg')}}" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item ramadan eid-ul-adha">
                    <div class="grid-inner">
                        <div class="grid-thumb">
                            <img src="{{asset('template/home/assets/images/gallery/mason/07.jpg')}}" alt="gallery-img">
                        </div>
                        <div class="grid-content">
                            <a href="{{asset('template/home/assets/images/gallery/mason/07.jpg')}}" data-rel="lightcase"><i
                                    class="icofont-expand"></i></a>
                            <h5>The Image Title Goes Here</h5>
                            <p>Subtitle Here</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop