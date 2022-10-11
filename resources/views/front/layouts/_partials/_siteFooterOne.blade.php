<?php
use App\Models\back\Setting;
$data = Setting::find(1);
?>
<footer class="site-footer">
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="site-footer-map"
                    style="background-image: url({{ asset('Front/images/shapes/site-footer-mape.png') }})"></div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__about-logo">
                                <img src="{{ asset('back/uploads/sitelogo/ttoBeyaz.svg')  }}" width="150px" alt="">
                            </div>
                            <p class="footer-widget__about-text">@lang('anasayfa.sosyalMedya')</p>
                            <div class="footer-widget__about-social">
                                <a href="{{$data->twitter}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{$data->facebook}}"><i class="fab fa-facebook"></i></a>
                                <a href="{{$data->instagram}}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">@lang('anasayfa.hizliErisim')</h3>
                            <ul class="footer-widget__links-list list-unstyled clearfix">
                                <li><a href="about.html">@lang('anasayfa.anasayfa')</a></li>
                                <li><a href="about.html">@lang('anasayfa.hakkimizda')</a></li>
                                <li><a href="news.html">@lang('anasayfa.projelerimiz')</a></li>
                                <li><a href="project.html">@lang('anasayfa.ekibimiz')</a></li>
                                <li><a href="contact.html">@lang('anasayfa.bizeulasin')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__contact">
                            <h3 class="footer-widget__title">@lang('anasayfa.bizeulasin')</h3>
                            <p class="footer-widget__contact-text">{{$data->adress}}</p>
                            <ul class="list-unstyled footer-widget__contact-list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">{{$data->email}}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-telephone"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:926668880000">{{$data->phone}}</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__about-logo">
                            <img src="{{ asset('back/uploads/sitelogo/abu-yatay.png') }}" width="250px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="site-footer__bottom-container">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <div class="site-footer__bottom-left">
                                <p class="site-footer__bottom-text">@lang('anasayfa.footerText')<span class="dynamic-year">

                            </div>
                            <div class="site-footer__bottom-right">
                                <img src="{{ asset('back/uploads/sitelogo/ttoBeyaz.svg') }}" width="150px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
