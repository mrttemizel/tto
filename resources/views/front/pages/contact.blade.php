@extends('front.layouts.master')


@section('content')



<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ URL::asset('back/uploads/slider/tt.jpg')}});">
    </div>
    <div class="page-header-bg-overly"></div>
    <div class="page-header-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
    style="background-image: url({{ URL::asset('front/images/shapes/page-header-shape.png')}});"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">@lang('anasayfa.anasayfa')</a></li>
                <li><span>/</span></li>
                <li>@lang('anasayfa.bizeulasin')</li>
            </ul>
            <h2>@lang('anasayfa.bizeulasin')</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="contact-page__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">@lang('iletisim.bizeUlas')</span>
                        <h2 class="section-title__title">@lang('iletisim.bizeUlasText')</h2>
                    </div>
               
                    <div class="contact-page__social-list">
                        <a href="{{$data->twitter}}"><i class="fab fa-twitter"></i></a>
                        <a href="{{$data->facebook}}"><i class="fab fa-facebook"></i></a>
                        <a href="{{$data->instagram}}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="contact-page__right">
                    <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="@lang('iletisim.adsoyad')" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="@lang('iletisim.e-posta')" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" placeholder="@lang('iletisim.mesaj')"></textarea>
                                </div>
                                <button type="submit" class="thm-btn comment-form__btn">@lang('iletisim.gonder')</button>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div><!-- /.result -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->

<!--Contact Details End-->
<section class="contact-details">
    <div class="container">
        <div class="contact-details__inner">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-details__single">
                        <div class="contact-details__icon">
                            <span class="icon-map"></span>
                        </div>
                        <div class="contact-details__content">
                            <p class="contact-details__sub-title">@lang('iletisim.adres')</p>
                            <h5>{{$data->adress}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-details__single contact-details__single-2">
                        <div class="contact-details__icon">
                            <span class="icon-email-1"></span>
                        </div>
                        <div class="contact-details__content">
                            <p class="contact-details__sub-title">@lang('iletisim.e-posta')</p>
                            <h4><a href="mailto:needhelp@company.com">{{$data->email}}</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-details__single contact-details__single-3">
                        <div class="contact-details__icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <div class="contact-details__content">
                            <p class="contact-details__sub-title">@lang('iletisim.telefon')</p>
                            <h4><a href="#">{{$data->phone}}</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Details End-->

<!--Google Map Start-->
<section class="contact-page-google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12736.943306762012!2d30.620937!3d37.051863!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x329b9c7bc561e87a!2sAntalya%20Bilim%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1657092809344!5m2!1str!2str"
        class="contact-page-google-map__one" allowfullscreen></iframe>

</section>



@endsection