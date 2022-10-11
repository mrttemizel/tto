<?php
namespace App\Config;
use App\Models\back\Setting;
$data = Setting::find(1);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@lang('anasayfa.siteTitle')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/images/favicons/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/images/favicons/favicon-32x32.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('front/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Izeetak HTML Template For IT Solutions Company" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('front/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/izeetak-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/twentytwenty/twentytwenty.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/timepicker/timePicker.css') }}" />


    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('front/css/izeetak.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/izeetak-responsive.css') }}" />
</head>

<body>
    <!-- preLoader -->
    @include('front.layouts._partials._preLoader')
    <!-- /. preLoader -->
    <!-- stricky-header -->
    @include('front.layouts._partials._strickyHeader')
    <!-- /.stricky-header -->

       @yield('content')

        <!--Site Footer One Start-->
        @include('front.layouts._partials._siteFooterOne')
        <!--Site Footer One End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('back/uploads/sitelogo/'.$data->logo) }}" width="150px" alt=""></a>
            </div>
            <div class="main-menu-wrapper__search-box-cart-box">


                @foreach (config('app.available_locales') as $locale)
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                        @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                </li>
            @endforeach








            </div>

            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">{{$data->email}}</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">{{$data->phone}}</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="{{$data->twitter}}" class="fab fa-twitter"></a>
                    <a href="{{$data->facebook}}" class="fab fa-facebook-square"></a>

                    <a href="{{$data->instagram}}" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ asset('front/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('front/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('front/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('front/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('front/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('front/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('front/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('front/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('front/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('front/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('front/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('front/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('front/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('front/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/vendors/twentytwenty/twentytwenty.js') }}"></script>
    <script src="{{ asset('front/vendors/twentytwenty/jquery.event.move.js') }}"></script>
    <script src="{{ asset('front/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('front/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('front/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('front/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('front/vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('front/vendors/particles/particles.min.js') }}"></script>
    <script src="{{ asset('front/vendors/particles/particles-config.js') }}"></script>


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>


    <!-- template js -->
    <script src="{{ asset('front/js/izeetak.js') }}"></script>
</body>

</html>
