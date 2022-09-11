@extends('homepage._page.master')
@section('title','Artikel')
@section('banner')
<section class="page-header bg_img padding-tb">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content-area">
            <h4 class="ph-title" style="font-family: Montserrat">Artikel <br>Masjid Raya An-Nur Polinema</h4>
            <ul class="lab-ul">
                <li><a href="/">Home</a></li>
                <li><a class="#">Artikel</a></li>
            </ul>
        </div>
    </div>
</section>
@stop
@section('content')
<div class="blog-section blog-page padding-tb aside-bg">
    <div class="container">
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <article>
                        @foreach ($artikel as $artikel)
                        <div class="post-item-2">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="{{asset('images/artikel/'.$artikel->thumbnail_artikel)}}" alt="blog">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <a href="/artikel/{{$artikel->id_artikel}}">
                                        <h3>{{$artikel->nama_artikel}}</h3>
                                    </a>
                                    <ul class="lab-ul post-date">
                                        <li><span><i class="icofont-ui-calendar"></i>
                                            {{ Carbon\Carbon::parse($artikel->tanggal_artikel)->isoFormat('dddd, D MMMM Y HH:MM') }}
                                        </span></li>
                                        <li><span><i class="icofont-user"></i><a href="#">{{$artikel->penulis_artikel}}</a></span>
                                        </li>
                                    </ul>
                                    <p>
                                    <?php
                                        $text = $artikel->konten_artikel;
                                        $sort_text = substr($text,0,300);

                                        echo $sort_text," ,Selengkapnya...";
                                    ?>
                                    </p>
                                    <br>
                                    <a href="/artikel/{{$artikel->id_artikel}}" class="lab-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="paginations">
                            <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
                                <li>
                                    <a href="#"><i class="icofont-rounded-double-left"></i></a>
                                </li>
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li class="d-none d-sm-block">
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-rounded-double-right"></i></a>
                                </li>
                            </ul>
                        </div> --}}
                    </article>
                </div>
                <div class="col-lg-4 col-md-7 col-12">
                    <aside class="ps-lg-4">
                        <div class="widget widget-search">
                            <div class="widget-header">
                                <h5>Search Your keywords</h5>
                            </div>
                            <form action="/" class="search-wrapper">
                                <input type="text" name="s" placeholder="Search Here...">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>

                        {{-- <div class="widget widget-category">
                            <div class="widget-header">
                                <h5>Post Categories</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper list-bg-none">
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Show
                                            all</span><span>18</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Business</span><span>20</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Creative</span><span>25</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Inspiation</span><span>30</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>News</span><span>28</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Photography</span><span>20</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Smart</span><span>26</span></a>
                                </li>
                            </ul>
                        </div> --}}

                        <div class="widget widget-post">
                            <div class="widget-header">
                                <h5>Artikel Lainnya</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper">
                                @foreach ($lain_artikel as $artikel_lain)
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="#"><img src="{{asset('images/artikel/'.$artikel_lain->thumbnail_artikel)}}"
                                                alt="thumbnail"></a>
                                    </div>
                                    <div class="post-content ps-4">
                                        <a href="#">
                                            <h6>{{$artikel_lain->nama_artikel}}</h6>
                                        </a>
                                        <p>
                                            {{ Carbon\Carbon::parse($artikel->tanggal_artikel)->isoFormat('D MMMM Y') }}
                                        </p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- <div class="widget widget-instagram">
                            <div class="widget-header">
                                <h5>Instagram</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper d-flex flex-wrap justify-content-center">
                                <li><a href="#"><img src="assets/images/gallery/01.jpg" alt="gallery-img"></a></li>
                                <li><a href="#"><img src="assets/images/gallery/02.jpg" alt="gallery-img"></a></li>
                                <li><a href="#"><img src="assets/images/gallery/03.jpg" alt="gallery-img"></a></li>
                                <li><a href="#"><img src="assets/images/gallery/04.jpg" alt="gallery-img"></a></li>
                                <li><a href="#"><img src="assets/images/gallery/05.jpg" alt="gallery-img"></a></li>
                                <li><a href="#"><img src="assets/images/gallery/06.jpg" alt="gallery-img"></a></li>
                                <li><a href="#"><img src="assets/images/gallery/07.jpg" alt="gallery-img"></a></li>
                                <li><a href="#"><img src="assets/images/gallery/08.jpg" alt="gallery-img"></a></li>
                                <li><a href="#"><img src="assets/images/gallery/09.jpg" alt="gallery-img"></a></li>
                            </ul>
                        </div> --}}

                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@stop