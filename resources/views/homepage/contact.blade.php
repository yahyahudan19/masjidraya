@extends('homepage._page.master')
@section('title','Kontak')
@section('banner')
<section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title" style="font-family: Montserrat">Kontak Kami</h4>
                <ul class="lab-ul">
                    <li><a href="/home">Home</a></li>
                    <li><a class="">Kontak Kami</a></li>
                </ul>
            </div>
        </div>
    </section>
@stop
@section('content')
<div class="contact-section">
        <div class="contact-top padding-tb aside-bg padding-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="contact-form-wrapper">
                            <div class="contact-form">
                                <h4>Hubungi Kami .</h4>
                                <p class="mb-5">Pesan, Saran maupun Kritik dapat anda sampaikan melalui form dibawah ini.</p>
                                <form action="#" id="commentform" class="comment-form">
                                    <input type="text" name="name" class="" placeholder="Nama*">
                                    <input type="email" name="email" class="" placeholder="Email*">
                                    <textarea name="text" id="role" cols="30" rows="9"
                                        placeholder="Pesan/Kritik/Saran"></textarea>
                                    <button type="button" class="lab-btn">
                                        <span>Kirim Pesan</span>
                                    </button>
                                </form>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-wrapper">
                            <div class="contact-info-title">
                                <h5>Dapatkan Informasi</h5>
                                <p>Detail Kontak Kami dan
                                    Ikuti Social Media kami</p>
                            </div>
                            <div class="contact-info-content">
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="{{asset('template/home/assets/images/contact/01.png')}}" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Alamat</span>
                                            <p>Jalan Soekarno Hatta No.9 Malang</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="{{asset('template/home/assets/images/contact/02.png')}}" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">No. Telp</span>
                                            <p>+62 812 5922 4380</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="{{asset('template/home/assets/images/contact/03.png')}}" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Email </span>
                                            <p>rayaannurpolinema@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="{{asset('template/home/assets/images/contact/04.png')}}" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Website Resmi</span>
                                            <p>www.mrapolinema.site</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="contac-bottom">
                <div class="row justify-content-center g-0">
                    <div class="col-12">
                        <div class="location-map">
                            <div id="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.7541951278804!2d112.61608276954911!3d-7.948021227080562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc32a10655201d6b4!2sMasjid%20Raya%20An-Nur%20Politeknik%20Negeri%20Malang!5e0!3m2!1sen!2sid!4v1647918663648!5m2!1sen!2sid%22"
                                    allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop