@extends('homepage._page.master')
@section('title','Artikel')
@section('banner')
<section class="page-header bg_img padding-tb">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content-area">
            <h4 class="ph-title" style="font-family: Montserrat">{{$data_artikel->nama_artikel}}</h4>
            <ul class="lab-ul">
                <li><a href="/">Home</a></li>
                <li><a class="#">Artikel</a></li>
                <li><a class="#">Detail</a></li>
            </ul>
        </div>
    </div>
</section>
@stop
@section('content')
<div class="blog-section blog-page padding-tb aside-bg">
    <div class="container">
        <div class="section-wrapper">
            <div class="row justify-content-center pb-15">
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="post-item-2">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <img src="{{asset('images/artikel/'.$data_artikel->thumbnail_artikel)}}" alt="blog">
                                </div>
                                <div class="post-content">
                                    <h3>{{$data_artikel->nama_artikel}}</h3>
                                    <ul class="lab-ul post-date">
                                        <li><span><i class="icofont-ui-calendar"></i> 
                                            {{ Carbon\Carbon::parse($data_artikel->tanggal_artikel)->isoFormat('dddd, D MMMM Y HH:MM') }}
                                            </span></li>
                                        <li><span><i class="icofont-user"></i><a href="#">{{$data_artikel->penulis_artikel}}</a></span>
                                        </li>
                                        {{-- <li><span><i class="icofont-speech-comments"></i><a href="#">09
                                                    Comments</a></span></li> --}}
                                    </ul>
                                    <p>
                                        <?php
                                            $text = $data_artikel->konten_artikel;
                                            echo $text;
                                        ?>
                                    </p>
                                    {{-- <blockquote class="single-quote mb-30">
                                        <div class="quotes">
                                            Steal into The nering Sanc How Mysef Down Amon The Hal Gras Buz
                                            Lttle World Amon The Stak And Grow Fama With Couns And Fesingri
                                            Steal intoing Thene Sanc Hrow Myse Down Amon The Hall Gras Biss
                                            The Almighty Among The Staks
                                            <span>...Melissa Hunter</span>
                                        </div>
                                    </blockquote> --}}
                                    
                                   
                                </div>
                            </div>
                        </div>
                        <div class="authors">
                            <div class="author-thumb">
                                <img src="assets/images/blog/author2.png" alt="author">
                            </div>
                            <div class="author-content">
                                <h6>{{$data_artikel->penulis_artikel}}</h6>
                                <p>Seorang Penulis di Masjid Raya An-Nur Politeknik Negeri Malang.</p>
                                <div class="social-media">
                                    <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                    <a href="#" class="behance"><i class="icofont-behance"></i></a>
                                    <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                    <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                                    <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                    </article>
                </div>
                <div class="col-lg-4 col-md-7 col-12">
                    <aside class="ps-lg-4 mt-5 mt-lg-0 pt-1 pt-lg-0">
                        <div class="widget widget-search">
                            <div class="widget-header">
                                <h5>Search Your keywords</h5>
                            </div>
                            <form action="/" class="search-wrapper">
                                <input type="text" name="s" placeholder="Search Here...">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>

                        <div class="widget widget-post">
                            <div class="widget-header">
                                <h5>Artikel Lainnya</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper">
                                @foreach ($lain_artikel as $artikel_lain)
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="/artikel/{{$artikel_lain->id_artikel}}"><img src="{{asset('images/artikel/'.$artikel_lain->thumbnail_artikel)}}"
                                                alt="thumbnail"></a>
                                    </div>
                                    <div class="post-content ps-4">
                                        <a href="/artikel/{{$artikel_lain->id_artikel}}">
                                            <h6>{{$artikel_lain->nama_artikel}}</h6>
                                        </a>
                                        <p>
                                            {{ Carbon\Carbon::parse($artikel_lain->tanggal_artikel)->isoFormat('D MMMM Y') }}
                                        </p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@stop